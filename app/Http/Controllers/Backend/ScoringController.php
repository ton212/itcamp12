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
        $applicants = Applicant::approved()->orderBy('id')->with('score_cards')->get(['id'])->toArray();

        $checked_applicants = array_filter($applicants, function($applicant) {
            if (count($applicant['score_cards']) == 14) {
                return True;
            } return False;
        });

        $checked_applicants = array_pluck($checked_applicants, 'id');

        $applicants = Applicant::whereNotIn('id', $checked_applicants)->approved()->with('quiz_answers')->orderBy('id')->paginate(20)->setPath(route('backend.scoring.index'));

        $data = [
            'page_title'    => 'การคัดเลือก',
            'page_subtitle' => 'ตรวจการตอบคำถาม',
            'applicants'    => $applicants,
            'judgers'       => User::judgers(),
            'app_male_count'=> Applicant::approved()->camp(1)->male()->count(),
            'app_female_count'=> Applicant::approved()->camp(1)->female()->count(),
            'net_male_count' => Applicant::approved()->camp(2)->male()->count(),
            'net_female_count' => Applicant::approved()->camp(2)->female()->count(),
            'game_male_count' => Applicant::approved()->camp(3)->male()->count(),
            'game_female_count' => Applicant::approved()->camp(3)->female()->count(),
            'iot_male_count' => Applicant::approved()->camp(6)->male()->count(),
            'iot_female_count' => Applicant::approved()->camp(6)->female()->count(),
            'checked_app'   => Auth::user()->score_cards()->count(),
            'approved_app'  => Applicant::approved()->count()
        ];

        return view('backend.scoring.index', $data);
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
            if (Auth::user()->judge_group == 5 || Auth::user()->judge_group == 4) {
                $applicant = Applicant::whereNotIn('id', $checked_applicant)->approved()->orderBy(\DB::raw('RAND()'))->take(1)->first();
            } else {
                $applicant = Applicant::whereNotIn('id', $checked_applicant)->approved()->camp(Auth::user()->judge_group)->orderBy(\DB::raw('RAND()'))->take(1)->first();
            }
            if(empty($applicant)) {
                return redirect(route('backend.scoring.index'));
            }
            $applicant_id = $applicant->id;
        }

        $answers = Applicant::findOrFail($applicant_id)->quiz_answers;

        session(['judging_applicant' => $applicant_id]);

        $data = [
            'answers'   => $answers
        ];

        return view('backend.scoring.show', $data);
	}

    public function postScoring(Request $request)
    {
        $applicant_id = session()->pull('judging_applicant');
        $questions = QuizQuestion::all();
        $score = $request->get('answers');

        $score_cards                = new QuizScoreCard();
        $score_cards->scores        = $score;
        $score_cards->user_id       = Auth::user()->id;
        $score_cards->applicant_id  = $applicant_id;
        $score_cards->judger_group  = Auth::user()->judge_group;
        $score_cards->save();

        return redirect(route('backend.scoring.start', 0));
    }

}
