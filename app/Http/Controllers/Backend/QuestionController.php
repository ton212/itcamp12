<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\QuizQuestion;

class QuestionController extends Controller {

	use ValidatesRequests;

	private $validator_msg = [
		'title.required'  => 'โปรดกรอกหัวข้อคำถาม',
		'judge.required'  => 'โปรดกำหนดผู้มีสิทธิ์ตรวจคำถามข้อนี้อย่างน้อยหนึ่งฝ่าย',
		'weight.required' => 'โปรดกำหนดค่าน้ำหนัก',
		'weight.numeric'  => 'ค่าน้ำหนักต้องเป็นตัวเลขเท่านั้น',
		'weight.min'      => 'ค่าน้ำหนักต้องไม่น้อยกว่า 0'
	];

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = [
			'page_title'    => 'จัดการคำถาม',
			'page_subtitle' => 'คำถามทั้งหมด',
			'questions'     => QuizQuestion::all()
		];
		return view('backend.question.index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data = [
			'page_title'    => 'เพิ่มคำถามใหม่',
			'page_subtitle' => 'จัดการคำถาม',
		];
		return view('backend.question.create', $data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
			'title'  => 'required',
			'judge'  => 'required',
			'weight' => 'required|numeric|min:0'
		], $this->validator_msg);

		$data = [
			'title'       => $request->title,
			'description' => $request->description,
			'attributes'  => [
				'judge'  => $request->judge,
				'weight' => $request->weight
			],
			'help'        => $request->help
		];

		QuizQuestion::create($data);
		return redirect(route('backend.question.index'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		dd(QuizQuestion::findOrFail($id));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data = [
			'page_title'    => 'แก้ไขคำถาม',
			'page_subtitle' => 'จัดการคำถาม',
			'question'      => QuizQuestion::findOrFail($id)
		];
		return view('backend.question.edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$this->validate($request, [
			'title'  => 'required',
			'judge'  => 'required',
			'weight' => 'required|numeric|min:0'
		], $this->validator_msg);

		$data = [
			'title'       => $request->title,
			'description' => $request->description,
			'attributes'  => [
				'judge'  => $request->judge,
				'weight' => $request->weight
			],
			'help'        => $request->help
		];

		QuizQuestion::findOrFail($id)->fill($data)->save();
		return redirect(route('backend.question.index'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		try {
				QuizQuestion::findOrFail($id)->delete();
		} catch (\Illuminate\Database\QueryException $e) {
			if ($e->errorInfo[1] == 1451) {
				return redirect(route('backend.question.index'))->with('alert_danger', 'ไม่สามารถลบคำถามได้ เนื่องจากมีผู้สมัครตอบคำถามข้อนี้แล้ว');
			} else {
				return redirect(route('backend.question.index'))->with('alert_danger', 'การลบคำถามล้มเหลว');
			}
		}
		return redirect(route('backend.question.index'));
	}

}
