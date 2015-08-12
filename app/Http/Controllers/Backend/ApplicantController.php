<?php namespace App\Http\Controllers\backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Applicant;

class ApplicantController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = [
			'page_title'    => 'จัดการใบสมัคร',
			'page_subtitle' => 'ใบสมัครทั้งหมด',
			'applicants'    => Applicant::paginate(10)
		];
		return view('backend.applicant.list.all', $data);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$applicant = Applicant::findOrFail($id);
		$data = [
			'page_title'    => 'รายละเอียดใบสมัคร',
			'page_subtitle' => 'เลขที่ #'.str_pad($applicant->id, 4, 0, STR_PAD_LEFT),
			'applicant'     => $applicant
		];
		return view('backend.applicant.show', $data);
		dd(Applicant::findOrFail($id));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$applicant = Applicant::findOrFail($id);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
