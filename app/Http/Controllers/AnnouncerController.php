<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use App\Applicant;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AnnouncerController extends Controller {

	use ValidatesRequests;

	public function show($camp_id)
	{
		switch ($camp_id) {
			case 1:
				return view('main-web.announcer');
			case 2:
				return view('main-web.announcer2');
			case 3:
				return view('main-web.announcer2');
			case 4:
				return view('main-web.announcer4');
		}
	}

	public function getLogin()
	{
		if (Auth::check()) {
			return redirect('/user');
		} else {
			return view('main-web.login');
		}
	}

	public function postLogin(Request $request)
	{
		if (Auth::attempt($request->only(['username', 'password']))) {
			return redirect('/user');
		};
	}

	public function getLogout()
	{
		Auth::logout();
		return redirect('/');
	}

	public function getUser()
	{
		if (Auth::check()) {
			$user = Auth::user();
			$applicant = Applicant::findOrFail($user->applicant_id);

			$data = [
				'user'      => $user,
				'applicant' => $applicant
			];

			return view('main-web.user', $data);
		} else {
			return redirect('/login');
		}
	}

	public function postUser(Request $request)
	{
		$this->validate($request, [
			'transcript'    => 'mimes:jpeg,png,bmp|max:2000',
			'transfer_slip' => 'mimes:jpeg,png,bmp|max:2000'
		], [
			'transcript.mimes'    => 'ปพ.1 ต้องเป็นไฟล์ jpeg, jpg, bmp เท่านั้น',
			'transcript.max'      => 'ปพ.1 ต้องมีขนาดไม่เกิน 2MB เท่านั้น',
			'transfer_slip.mimes' => 'หลักฐานการโอนเงินต้องเป็นไฟล์ jpeg, jpg, bmp เท่านั้น',
			'transfer_slip.max'   => 'หลักฐานการโอนเงินต้องมีขนาดไม่เกิน 2MB เท่านั้น'
		]);

		$applicant = Applicant::findOrFail(Auth::user()->applicant_id);

		foreach ($request->file() as $name => $file) {
			$filename = str_random(20)."-".date('Y-m-d').'.'.$file->guessExtension();
			$file->move(storage_path().'/confirmation/', $filename);
			$applicant->$name = $filename;
		}

		$applicant->save();

		$data = [
				'user'      => Auth::user(),
				'applicant' => $applicant
			];

		return view('main-web.user', $data)->with('success', 'บันทึกข้อมูลสำเร็จ');
	}

}
