<?php namespace App\Http\Controllers\backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Applicant;
use App\QuizScoreCard;

class ScoringController extends Controller {

	public function index()
	{
		dd(Applicant::with('score_cards')->get());
	}

	public function scoring($applicant_id)
	{
		dd(Applicant::findOrFail($applicant_id)->quiz_answers);
	}

}
