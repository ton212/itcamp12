<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

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

    public function canScoring()
    {
        return in_array(Auth::user()->judge_group, $this->toArray()['attributes']->judge) or Auth::user()->judge_group == 5;
    }

    public function scopeGroup($query, $group_id)
    {
        return $query->where('attributes', 'LIKE', '{"judge":["'.$group_id.'"]%');
    }
}
