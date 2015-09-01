<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Applicant;

use Illuminate\Http\Request;

class RegisterController extends Controller {

	use ValidatesRequests;

	protected $validator_msg = [
		'field_name.required' => 'กรอกช่อง field_name ด้วยครับ',
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
			'field_name' => 'required',
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
