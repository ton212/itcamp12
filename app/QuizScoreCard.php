<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizScoreCard extends Model {

	protected $casts = [
		'scores' => 'array'
	];

	public function owner()
	{
		return $this->belongsTo('App\User', 'user_id');
	}

	public function applicant()
	{
		return $this->belongsTo('App\applicant');
	}

	public function scopeInGroup($query, $group_id)
	{
		return $query->where('judger_group', $group_id);
	}

}
