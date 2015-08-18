<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model {

	protected $casts = [
        'attributes'  => 'object',
        'score_scale' => 'array'
	];

    protected $fillable = ['title', 'description', 'help', 'attributes', 'score_scale'];

	public function answers()
	{
		return $this->hasMany('App\QuizAnswer');
	}

}
