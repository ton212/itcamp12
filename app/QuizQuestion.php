<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model {

	protected $casts = [
		'attributes' => 'array'
	];

	public function answers()
	{
		return $this->hasMany('App\QuizAnswer');
	}

}
