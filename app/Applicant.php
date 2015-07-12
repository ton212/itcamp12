<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model {

	public function quiz_answers()
	{
		return $this->hasMany('App\QuizAnswer');
	}

	public function score_cards()
	{
		return $this->hasMany('App\QuizScoreCard');
	}

}
