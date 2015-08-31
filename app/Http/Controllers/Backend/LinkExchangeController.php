<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Link;

use Illuminate\Http\Request;

class LinkExchangeController extends Controller {

	public function __construct() {
		$this->middleware('auth', ['only' => ['show', 'edit', 'update', 'destroy', 'index']]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('link-exchange.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('link-exchange.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$link = new Link();
		$link->url = $request->url;
		$link->name = $request->name;
		$link->save();
		return redirect(route('link-exchange.create'))->with('alert', 'การบันทึกสำเร็จ โปรดรอการตรวจสอบเพื่อให้ลิงก์ขึ้นบนหน้าเว็บของเรานะคะ');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
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
