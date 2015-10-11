<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Applicant;

use Illuminate\Http\Request;

class DashboardController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = [
			'page_title'    => 'ภาพรวม',
			'page_subtitle' => 'ภาพรวมของระบบ',
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
			'iot_female_count' => Applicant::approved()->camp(6)->female()->count()
		];
		return view('backend.dashboard', $data);
	}



}
