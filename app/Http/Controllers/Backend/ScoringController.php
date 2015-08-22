<?php namespace App\Http\Controllers\backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Applicant;
use App\QuizQuestion;
use App\QuizScoreCard;
use App\User;
use Auth;

class ScoringController extends Controller {

	public function index(Request $request)
	{
        $filters = [
            'show' => 0
        ];

        if ($filters['show']) {
            $applicants = Applicant::approved()->orderBy('id')->paginate(20);
        } else {
            $applicants = Applicant::approved()->orderBy('id')->with('score_cards')->get(['id'])->toArray();

            $checked_applicants = array_filter($applicants, function($applicant) {
                if (count($applicant['score_cards']) == 14) {
                    return True;
                } return False;
            });

            $checked_applicants = array_pluck($checked_applicants, 'id');

            $applicants = Applicant::whereNotIn('id', $checked_applicants)->approved()->with('quiz_answers')->orderBy('id')->paginate(20);
        }

        $data = [
            'page_title'    => 'การคัดเลือก',
            'page_subtitle' => 'ตรวจการตอบคำถาม',
            'applicants'    => $applicants,
            'judgers'       => User::judgers(),
            'checked_app'   => Auth::user()->score_cards()->count(),
            'approved_app'  => Applicant::approved()->count()
        ];

        return view('backend.scoring.index', $data);
		dd(Applicant::with('score_cards')->get());
	}

	public function getScoring($applicant_id)
	{
        session()->forget('judging_applicant');

        $judger_limit = [
                1 => 3,
                2 => 3,
                3 => 3,
                4 => 3,
                5 => 3
        ];

        if ($applicant_id != 0) {
            if (Auth::user()->judge_group != 5) {
                return redirect(route('backend.scoring.start', 0));
            }
        } else {
            $checked_applicant = array_pluck(Auth::user()->score_cards()->get(['applicant_id'])->toArray(), 'applicant_id');
            $applicant = Applicant::whereNotIn('id', $checked_applicant)->approved()->orderBy(\DB::raw('RAND()'))->take(1)->first();
            if(empty($applicant)) {
                return redirect(route('backend.scoring.index'));
            }
            $applicant_id = $applicant->id;
        }

        $questions = QuizQuestion::with(array('answers' => function($query) use ($applicant_id)
        {
            $query->where('quiz_answers.applicant_id', '=', $applicant_id);

        }))->get();

        session(['judging_applicant' => $applicant_id]);

        $data = [
            'questions' => $questions
        ];

        return view('backend.scoring.show', $data);
	}

    public function postScoring(Request $request)
    {
        $applicant_id = session()->pull('judging_applicant');
        $questions = QuizQuestion::all();
        $score = [];

        foreach ($questions as $question) {
            if( $request->input('ans' . $question->id, False) !== False ) {
                $score[$question->id] = $request->input('ans' . $question->id);
            } else {
                return redirect(route('backend.scoring.start', 0));
            }
        }

        $score_cards                = new QuizScoreCard();
        $score_cards->scores        = $score;
        $score_cards->user_id       = Auth::user()->id;
        $score_cards->applicant_id  = $applicant_id;
        $score_cards->judger_group  = Auth::user()->judge_group;
        $score_cards->save();

        return redirect(route('backend.scoring.start', 0));
    }

}
