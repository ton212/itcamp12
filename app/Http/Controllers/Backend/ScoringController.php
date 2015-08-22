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

        if ($applicant_id != 0) {
            if (Auth::user()->judge_group != 5) {
                return redirect(route('backend.scoring.start', 0));
            }
        } else {
            $checked_applicant = array_pluck(Auth::user()->score_cards()->get(['applicant_id'])->toArray(), 'applicant_id');
            $applicant = Applicant::whereNotIn('id', $checked_applicant)->approved()->with('quiz_answers')->orderBy(\DB::raw('RAND()'))->take(1)->first();
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

    public function postScoring()
    {
        $applicant_id = session()->pull('judging_applicant');
    }

}
