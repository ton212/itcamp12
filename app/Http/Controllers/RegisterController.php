<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Applicant;

use Illuminate\Http\Request;

class RegisterController extends Controller {

	use ValidatesRequests;

	protected $validator_msg = [
		'prefix' => 'กรุณาเลือกคำนำหน้าด้วยครับ',
		'firstname' => 'กรุณากรอก "ชื่อ" ด้วยครับ',
		'lastname' => 'กรุณากรอก "นามสกุล" ด้วยครับ',
		'nickname' => 'กรุณากรอก "ชื่อเล่น" ด้วยครับ',
		'birth_d' => 'กรุณาเลือกวันเกิดด้วยครับ',
		'birth_m' => 'กรุณาเลือกเดือนเกิดด้วยครับ',
		'birth_y' => 'กรุณาเลือกปีเกิดด้วยครับ',
		'gender' => 'กรุณาบอกเพศของตัวเองด้วยครับ',
		'religion' => 'กรุณากรอก "ศาสนา" ด้วยครับ',
		'id_card' => 'กรุณากรอก "รหัสประจำตัวประชาชน" ด้วยครับ',
		'address[house_no]' => 'กรุณากรอก "บ้านเลขที่" ด้วยครับ',
		'address[street]' => 'กรุณากรอก "ถนน" ด้วยครับ',
		'address[sub_district]' => 'กรุณากรอก "แขวง/ตำบล" ด้วยครับ',
		'address[district]' => 'กรุณากรอก "เขต/อำเภอ" ด้วยครับ',
		'address[province]' => 'กรุณากรอก "จังหวัด" ด้วยครับ',
		'address[postcode]' => 'กรุณากรอก "รหัสไปรษณีย์" ด้วยครับ',
		'email' => 'กรุณากรอก "อีเมล" ด้วยครับ',
		'academic[grade]' => 'กรุณาเลือกชั้นเรียนด้วยครับ',
		'academic[school]' => 'กรุณากรอก "โรงเรียน" ด้วยครับ',
		'academic[location]' => 'กรุณากรอก "จังหวัด" ด้วยครับ',
		'parent[firstname]' => 'กรุณากรอก "ชื่อ ผู้ปกครอง" ด้วยครับ',
		'parent[lastname]' => 'กรุณากรอก "นามสกุล" ด้วยครับ',
		'parent[relate]' => 'กรุณากรอก "เกี่ยวข้องเป็น" ด้วยครับ',
		'parent[addr][house_no]' => 'กรุณากรอก "บ้านเลขที่ (ผู้ปกครอง)" ด้วยครับ',
		'parent[addr][street]' => 'กรุณากรอก "ถนน" ด้วยครับ',
		'parent[addr][sub_district]' => 'กรุณากรอก "แขวง/ตำบล" ด้วยครับ',
		'parent[addr][district]' => 'กรุณากรอก "เขต/อำเภอ" ด้วยครับ',
		'parent[addr][province]' => 'กรุณากรอก "จังหวัด" ด้วยครับ',
		'parent[addr][postcode]' => 'กรุณากรอก "รหัสไปรษณีย์" ด้วยครับ',
		'shirt_size' => 'กรุณาเลือกขนาดเสื้อด้วยครับ',
	];

	public function create(Request $request)
	{
		switch ($request->camp) {
			case 1:
				$bg = "bg03";
				$logo = "logo03";
				$name = "Applicationsaurus";
				break;

			case 2:
				$bg = "bg";
				$logo = "logo01";
				$name = "T-Rex Network";
				break;

			case 3:
				$bg = "bg04";
				$logo = "logo04";
				$name = "GameMakerNodon";
				break;

			case 6:
				$bg = "bg02";
				$logo = "logo02";
				$name = "IoT Ceramus";
				break;

			default:
				return redirect('/');
				break;
		}

		$data = [
			'bg'        => $bg,
			'logo'		=> $logo,
			'questions' => \App\QuizQuestion::all(),
			'camp'      => $request->camp,
			'camp_name' => $name
		];
		return view('main-web.register', $data);
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'prefix'					  => 'required',
			'firstname' 				  => 'required',
			'lastname' 					  => 'required',
			'nickname' 					  => 'required',
			'birth_d' 					  => 'required',
			'birth_m' 					  => 'required',
			'birth_y' 					  => 'required',
			'gender' 					  => 'required',
			'religion' 					  => 'required',
			'id_card' 					  => 'required',
			'address[house_no]' 		  => 'required',
			'address[street]' 			  => 'required',
			'address[sub_district]' 	  => 'required',
			'address[district]' 		  => 'required',
			'address[province]' 		  => 'required',
			'address[postcode]' 		  => 'required',
			'address[tel]' 				  => 'required',
			'email' 					  => 'required',
			'academic[grade]' 			  => 'required',
			'academic[school]' 			  => 'required',
			'academic[location]' 		  => 'required',
			'parent[firstname]' 		  => 'required',
			'parent[lastname]' 			  => 'required',
			'parent[relate]' 			  => 'required',
			'parent[addr][house_no]' 	  => 'required',
			'parent[addr][street]' 		  => 'required',
			'parent[addr][sub_district]'  => 'required',
			'parent[addr][district]' 	  => 'required',
			'parent[addr][province]' 	  => 'required',
			'parent[addr][postcode]' 	  => 'required',
			'parent[tel]' 				  => 'required',
			'shirt_size' 				  => 'required',
		], $this->validator_msg);

		$data = $request->except('_token', 'birth_d', 'birth_m', 'birth_y');
		$data['birthday'] = $request->birth_d.'-'.$request->birth_m.'-'.$request->birth_y;
		$data['transcript'] = "";
		$a = new Applicant();
		$a->fill($data);
		$a->save();



		dd($a->fresh());
	}

}
