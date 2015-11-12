<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Applicant;
use App\User;

use Illuminate\Http\Request;

class DashboardController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$applicants = User::where('is_admin', '0')->where('active','1')->get(['applicant_id'])->toArray();
		

		$data = [
			'page_title'    => 'ภาพรวม',
			'page_subtitle' => 'ภาพรวมของระบบ',
			'app_male' 		=> Applicant::camp(1)->male()->whereIn('id', $applicants)->get(),
			'app_female'	=> Applicant::camp(1)->female()->whereIn('id', $applicants)->get(),
			'game_male'	=> Applicant::camp(3)->male()->whereIn('id', $applicants)->get(),
			'game_female'	=> Applicant::camp(3)->female()->whereIn('id', $applicants)->get(),
			'net_male'	=> Applicant::camp(2)->male()->whereIn('id', $applicants)->get(),
			'net_female'	=> Applicant::camp(2)->female()->whereIn('id', $applicants)->get(),
			'iot_male'	=> Applicant::camp(6)->male()->whereIn('id', $applicants)->get(),
			'iot_female'	=> Applicant::camp(6)->female()->whereIn('id', $applicants)->get(),
			'camp_male'	=> Applicant::male()->whereIn('id', $applicants)->get(),
			'camp_female' => Applicant::female()->whereIn('id', $applicants)->get(),
			'camp_all' => Applicant::whereIn('id', $applicants)->get(),
			'all_applicant' => \App\Applicant::all()->count(),
			'chk_applicant' => \App\Applicant::approved()->count(),
			'chk_answer' 	=> \Auth::user()->score_cards->count(),
			'app_male_count'=> Applicant::approved()->camp(1)->male()->count(),
			'app_female_count'=> Applicant::approved()->camp(1)->female()->count(),
			'net_male_count' => Applicant::approved()->camp(2)->male()->count(),
			'net_female_count' => Applicant::approved()->camp(2)->female()->count(),
			'game_male_count' => Applicant::approved()->camp(3)->male()->count(),
			'game_female_count' => Applicant::approved()->camp(3)->female()->count(),
			'iot_male_count' => Applicant::approved()->camp(6)->male()->count(),
			'iot_female_count' => Applicant::approved()->camp(6)->female()->count(),
			'grade4' => Applicant::grade(4)->count(),
			'grade5' => Applicant::grade(5)->count(),
			'grade6' => Applicant::grade(6)->count(),
			'gradesp' => Applicant::grade('ปวช.')->count()

		];
		return view('backend.dashboard', $data);
	}



}
