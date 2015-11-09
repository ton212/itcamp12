<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Applicant;

use Illuminate\Http\Request;
use App\User;

class ConfirmationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::where('is_admin', '0')->get();
		$data = [
			'page_title' => 'ระบบยืนยันสิทธิ์',
			'page_subtitle' => 'รายชื่อผู้ผ่านการคัดเลือก',
			'applicants' => $users
		];

		return view('backend.confirmation.index', $data);
	}

	public function show($id)
	{
		$data = [
			'applicant' => Applicant::findOrFail($id)
		];

		return view('backend.confirmation.show', $data);
	}


}
