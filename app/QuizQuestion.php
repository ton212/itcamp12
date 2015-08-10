<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model {

	protected $casts = [
		'attributes' => 'object'
	];

    protected $fillable = ['title', 'description', 'help', 'attributes'];

	public function answers()
	{
		return $this->hasMany('App\QuizAnswer');
	}

}
