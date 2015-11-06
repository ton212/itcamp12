<?php namespace App\Http\Controllers\backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Applicant;
use App\User;

class ApplicantController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$filters = [
			'show'  => $request->get('show', -1),
			'limit' => $request->get('limit', 10)
		];

		switch ($filters['show']) {
			case 0:
				$applicants = Applicant::waitForPreCheck()->paginate($filters['limit'])->setPath(route('backend.applicant.index'))->appends($filters);
				break;

			case 1:
				$applicants = Applicant::approved()->paginate($filters['limit'])->setPath(route('backend.applicant.index'))->appends($filters);
				break;

			case 2:
				$applicants = Applicant::unapproved()->paginate($filters['limit'])->setPath(route('backend.applicant.index'))->appends($filters);
				break;

			default:
				$applicants = Applicant::paginate($filters['limit'])->setPath(route('backend.applicant.index'))->appends($filters);
				break;
		}

		$data = [
			'page_title'    => 'จัดการใบสมัคร',
			'page_subtitle' => 'ใบสมัครทั้งหมด',
			'applicants'    => $applicants,
			'filters'       => $filters
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

	public function getPreCheck($id, $result)
	{
		if ($result > 0 && $result < 3) {
			Applicant::findOrFail($id)->setPreCheck($result);
			return redirect(route('backend.applicant.show', $id))->with('alert_success', 'การตรวจใบสมัครเบื้องต้นสมบูรณ์');
		}
		return redirect(route('backend.applicant.show', $id))->with('alert_danger', 'SYSTEM ERROR (INVALID INPUT)');
	}

	public function getSort(Request $request)
	{
		$applicant_score = Applicant::approved()->camp(1)->noOldCamp()->with('score_cards')->get();
		$sorted = [];
		$i = 1;
		foreach ($applicant_score as $applicant) {
			$sorted[$applicant->id] = array_sum(array_flatten($applicant->score_cards()->get(['scores'])->toArray()));
		}
		$sorted = array_reverse(array_sort($sorted, function($val) { return $val; }), true);

		foreach (array_slice($sorted, 0, 45, true) as $id => $score) {
			$applicant = Applicant::findOrFail($id);
			echo "ID: ".$id." "."itcamp". str_pad($i, 3, "0", STR_PAD_LEFT)." ".$applicant->prefix."".$applicant->firstname." ".$applicant->lastname." ".$applicant->nickname." ".$applicant->academic['school']."<br/>";

			$user = new User();
			$user->name = $applicant->firstname." ".$applicant->lastname;
			$user->username = "itcamp". str_pad($i, 3, "0", STR_PAD_LEFT);
			$user->password = \Hash::make($applicant->id_card);
			$user->is_admin = 0;
			$user->active = 1;
			$user->judge_group = 0;
			$user->applicant_id = $id;
			$user->save();

			if ($i==30) {
				echo "สำรอง <br/>";
			}
			if ($i==45) {
				echo "<br/>";
			}
			$i++;
		}
		$applicant_score = Applicant::approved()->camp(2)->noOldCamp()->with('score_cards')->get();
		$sorted = [];
		$i = 46;
		foreach ($applicant_score as $applicant) {
			$sorted[$applicant->id] = array_sum(array_flatten($applicant->score_cards()->get(['scores'])->toArray()));
		}
		$sorted = array_reverse(array_sort($sorted, function($val) { return $val; }), true);

		foreach (array_slice($sorted, 0, 45, true) as $id => $score) {
			$applicant = Applicant::findOrFail($id);
			echo "ID: ".$id." "."itcamp". str_pad($i, 3, "0", STR_PAD_LEFT)." ".$applicant->prefix."".$applicant->firstname." ".$applicant->lastname." ".$applicant->nickname." ".$applicant->academic['school']."<br/>";
			$user = new User();
			$user->name = $applicant->firstname." ".$applicant->lastname;
			$user->username = "itcamp". str_pad($i, 3, "0", STR_PAD_LEFT);
			$user->password = \Hash::make($applicant->id_card);
			$user->is_admin = 0;
			$user->active = 1;
			$user->judge_group = 0;
			$user->applicant_id = $id;
			$user->save();
			if ($i==75) {
				echo "สำรอง <br/>";
			}
			if ($i==90) {
				echo "<br/>";
			}
			$i++;
		}
		$applicant_score = Applicant::approved()->camp(3)->noOldCamp()->with('score_cards')->get();
		$sorted = [];
		$i = 91;
		foreach ($applicant_score as $applicant) {
			$sorted[$applicant->id] = array_sum(array_flatten($applicant->score_cards()->get(['scores'])->toArray()));
		}
		$sorted = array_reverse(array_sort($sorted, function($val) { return $val; }), true);

		foreach (array_slice($sorted, 0, 45, true) as $id => $score) {
			$applicant = Applicant::findOrFail($id);
			$user = new User();
			$user->name = $applicant->firstname." ".$applicant->lastname;
			$user->username = "itcamp". str_pad($i, 3, "0", STR_PAD_LEFT);
			$user->password = \Hash::make($applicant->id_card);
			$user->is_admin = 0;
			$user->active = 1;
			$user->judge_group = 0;
			$user->applicant_id = $id;
			$user->save();
			echo "ID: ".$id." "."itcamp". str_pad($i, 3, "0", STR_PAD_LEFT)." ".$applicant->prefix."".$applicant->firstname." ".$applicant->lastname." ".$applicant->nickname." ".$applicant->academic['school']."<br/>";
			if ($i==120) {
				echo "สำรอง <br/>";
			}
			if ($i==135) {
				echo "<br/>";
			}
			$i++;
		}
		$applicant_score = Applicant::approved()->camp(6)->noOldCamp()->with('score_cards')->get();
		$sorted = [];
		$i = 136;
		foreach ($applicant_score as $applicant) {
			$sorted[$applicant->id] = array_sum(array_flatten($applicant->score_cards()->get(['scores'])->toArray()));
		}
		$sorted = array_reverse(array_sort($sorted, function($val) { return $val; }), true);

		foreach (array_slice($sorted, 0, 45, true) as $id => $score) {
			$applicant = Applicant::findOrFail($id);
			$user = new User();
			$user->name = $applicant->firstname." ".$applicant->lastname;
			$user->username = "itcamp". str_pad($i, 3, "0", STR_PAD_LEFT);
			$user->password = \Hash::make($applicant->id_card);
			$user->is_admin = 0;
			$user->active = 1;
			$user->judge_group = 0;
			$user->applicant_id = $id;
			$user->save();
			echo "ID: ".$id." "."itcamp". str_pad($i, 3, "0", STR_PAD_LEFT)." ".$applicant->prefix."".$applicant->firstname." ".$applicant->lastname." ".$applicant->nickname." ".$applicant->academic['school']."<br/>";
			if ($i==165) {
				echo "สำรอง <br/>";
			}
			$i++;
		}
		dd("");
		
	}

	public function getSortOld(Request $request)
	{
		$applicant_score = Applicant::approved()->camp($request->id)->with('score_cards')->get();
		$sorted = [];
		foreach ($applicant_score as $applicant) {
			$sorted[$applicant->id] = array_sum(array_flatten($applicant->score_cards()->get(['scores'])->toArray()));
		}
		$sorted = array_reverse(array_sort($sorted, function($val) { return $val; }), true);

		foreach (array_slice($sorted, 0, 30, true) as $id => $score) {
			$applicant = Applicant::findOrFail($id);
			echo $applicant->id." : ".$applicant->firstname." ".$applicant->lastname." ".$applicant->nickname."<br/>";
		}
		dd("");
		
	}

}
