<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
			'chk_answer' 	=> \Auth::user()->score_cards->count()
		];
		return view('backend.dashboard', $data);
	}



}
