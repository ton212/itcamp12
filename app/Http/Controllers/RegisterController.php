<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Applicant;

use Illuminate\Http\Request;

class RegisterController extends Controller {

	public function create(Request $request)
	{
		switch ($request->camp) {
			case 1:
				$bg = "bg03";
				$name = "Applicationsaurus";
				break;

			case 2:
				$bg = "bg";
				$name = "T-Rex Network";
				break;

			case 3:
				$bg = "bg04";
				$name = "GameMakerNodon";
				break;

			case 6:
				$bg = "bg02";
				$name = "IoT Ceramus";
				break;

			default:
				redirect('/');
				break;
		}

		$data = [
			'bg'        => $bg,
			'questions' => \App\QuizQuestion::all(),
			'camp'      => $request->camp,
			'camp_name' => $name
		];
		return view('main-web.register', $data);
	}

	public function store(Request $request)
	{
		$data = $request->except('_token', 'birth_d', 'birth_m', 'birth_y');
		$data['birthday'] = $request->birth_d.'-'.$request->birth_m.'-'.$request->birth_y;
		$data['transcript'] = null;
		$a = new Applicant();
		$a->fill($data);
		dd($a);
	}

}
