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
			'applicant' => Applicant::findOrFail($id),
			'user'      => User::where('applicant_id', $id)->first()
		];

		return view('backend.confirmation.show', $data);
	}

	public function update($id, Request $request)
	{
		$applicant = Applicant::findOrFail($id);
		$proof_check = $applicant->proof_check;
		$proof_check[0] = $request->get('proof_check0', $applicant->proof_check[0]);
		$proof_check[1] = $request->get('proof_check1', $applicant->proof_check[1]);
		$applicant->proof_check = $proof_check;
		$applicant->save();

		$user = User::where('applicant_id', $id)->first();
		$user->active = $request->get('active', $user->active);
		$user->save();

		return redirect(route('backend.confirmation.show', $id));
	}


}
