<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Applicant;
use App\QuizAnswer;

use Illuminate\Http\Request;

class RegisterController extends Controller {

	use ValidatesRequests;

	protected $validator_msg = [
		'prefix.required'                     => 'กรุณาเลือกคำนำหน้าด้วยครับ',
		'firstname.required'                  => 'กรุณากรอก "ชื่อ" ด้วยครับ',
		'lastname.required'                   => 'กรุณากรอก "นามสกุล" ด้วยครับ',
		'nickname.required'                   => 'กรุณากรอก "ชื่อเล่น" ด้วยครับ',
		'birth_d.required'                    => 'กรุณาเลือกวันเกิดด้วยครับ',
		'birth_m.required'                    => 'กรุณาเลือกเดือนเกิดด้วยครับ',
		'birth_y.required'                    => 'กรุณาเลือกปีเกิดด้วยครับ',
		'gender.required'                     => 'กรุณาบอกเพศของตัวเองด้วยครับ',
		'religion.required'                   => 'กรุณากรอก "ศาสนา" ด้วยครับ',
		'id_card.required'                    => 'กรุณากรอก "รหัสประจำตัวประชาชน" ด้วยครับ',
		'address.house_no.required'          => 'กรุณากรอก "บ้านเลขที่" ด้วยครับ',
		'address.street.required'            => 'กรุณากรอก "ถนน" ด้วยครับ',
		'address.sub_district.required'      => 'กรุณากรอก "แขวง/ตำบล" ด้วยครับ',
		'address.district.required'          => 'กรุณากรอก "เขต/อำเภอ" ด้วยครับ',
		'address.province.required'          => 'กรุณากรอก "จังหวัด" ด้วยครับ',
		'address.postcode.required'          => 'กรุณากรอก "รหัสไปรษณีย์" ด้วยครับ',
		'email.required'                      => 'กรุณากรอก "อีเมล" ด้วยครับ',
		'academic.grade.required'            => 'กรุณาเลือกชั้นเรียนด้วยครับ',
		'academic.school.required'           => 'กรุณากรอก "โรงเรียน" ด้วยครับ',
		'academic.location.required'         => 'กรุณากรอก "จังหวัด" ด้วยครับ',
		'parent.firstname.required'          => 'กรุณากรอก "ชื่อ ผู้ปกครอง" ด้วยครับ',
		'parent.lastname.required'           => 'กรุณากรอก "นามสกุล" ด้วยครับ',
		'parent.relate.required'             => 'กรุณากรอก "เกี่ยวข้องเป็น" ด้วยครับ',
		'parent.addr.house_no.required'     => 'กรุณากรอก "บ้านเลขที่ (ผู้ปกครอง)" ด้วยครับ',
		'parent.addr.street.required'       => 'กรุณากรอก "ถนน" ด้วยครับ',
		'parent.addr.sub_district.required' => 'กรุณากรอก "แขวง/ตำบล" ด้วยครับ',
		'parent.addr.district.required'     => 'กรุณากรอก "เขต/อำเภอ" ด้วยครับ',
		'parent.addr.province.required'     => 'กรุณากรอก "จังหวัด" ด้วยครับ',
		'parent.addr.postcode.required'     => 'กรุณากรอก "รหัสไปรษณีย์" ด้วยครับ',
		'shirt_size.required'                 => 'กรุณาเลือกขนาดเสื้อด้วยครับ',
		'parent.tel.required'                => 'กรุณากรอก "เบอร์โทรศัพท์ผู้ปกครอง" ด้วยครับ',
		'address.tel.required'                => 'กรุณากรอก "เบอร์โทรศัพท์" ด้วยครับ'
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
		$rules = [
			'prefix'                     => 'required',
			'firstname'                  => 'required',
			'lastname'                   => 'required',
			'nickname'                   => 'required',
			'birth_d'                    => 'required',
			'birth_m'                    => 'required',
			'birth_y'                    => 'required',
			'gender'                     => 'required',
			'religion'                   => 'required',
			'id_card'                    => 'required',
			'address.house_no'          => 'required',
			'address.street'            => 'required',
			'address.sub_district'      => 'required',
			'address.district'          => 'required',
			'address.province'          => 'required',
			'address.postcode'          => 'required',
			'address.tel'               => 'required',
			'email'                      => 'required',
			'academic.grade'            => 'required',
			'academic.school'           => 'required',
			'academic.location'         => 'required',
			'parent.firstname'          => 'required',
			'parent.lastname'           => 'required',
			'parent.relate'             => 'required',
			'parent.addr.house_no'     => 'required',
			'parent.addr.street'       => 'required',
			'parent.addr.sub_district' => 'required',
			'parent.addr.district'     => 'required',
			'parent.addr.province'     => 'required',
			'parent.addr.postcode'     => 'required',
			'parent.tel'                => 'required',
			'shirt_size'                 => 'required',
		];

		foreach ($request->answers as $index => $answer) {
			$rule_text = 'required';
			$key = 'answers'.'.'.$index.'.answer';
			if (isset($answer['file'])) {
				$rule_text = $rule_text.'|mimes:jpeg,png,bmp|max:1500';
			}
			$rules[$key] = $rule_text;
			$this->validator_msg[$key.'.required'] = "ตอบคำถามข้อ ".($index+1)." ด้วยนะครับ";
			$this->validator_msg[$key.'.mimes'] = "คำถามข้อ ".($index+1)." ต้องส่งเป็นไฟล์ jpeg, png หรือ bmp เท่านั้น";
			$this->validator_msg[$key.'.max'] = "คำถามข้อ ".($index+1)." ต้องส่งไฟล์ขนาดไม่เกิน 1.5MB เท่านั้น";
		}

		$this->validate($request, $rules, $this->validator_msg);

		$data = $request->except('_token', 'birth_d', 'birth_m', 'birth_y');
		$data['birthday'] = $request->birth_d.'-'.$request->birth_m.'-'.$request->birth_y;
		$data['transcript'] = "";
		$a = new Applicant();
		$a->fill($data);
		$a->save();

		$answers = $request->answers;

		foreach ($request->file()['answers'] as $qid => $file) {
			$file = $file['answer'];
			$filename = str_random(20)."-".date('Y-m-d').'.'.$file->guessExtension();
			$file->move(storage_path().'/quiz_answer/', $filename);
			$answers[$qid]['answer'] = storage_path().'/quiz_answer/'.$filename;
		}

		$answers_object = [];

		foreach ($answers as $answer) {
			$answers_object[] = new QuizAnswer(['quiz_question_id' => $answer['qid'], 'answer' => $answer['answer']]);
		}

		$a->quiz_answers()->saveMany($answers_object);

		return view('main-web.register-done');

	}

}
