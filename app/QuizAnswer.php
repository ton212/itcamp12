<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizAnswer extends Model {

    protected $fillable = [
        'answer', 'quiz_question_id'
    ];

	public function applicant()
	{
		return $this->belongsTo('App\Applicant');
	}

	public function question()
	{
		return $this->belongsTo('App\QuizQuestion', 'quiz_question_id');
	}

    public function getAnswerAttribute($value)
    {
        if (strpos($value, ' | ')) {
            return explode(' | ', $value);
        }
        return $value;
    }

}
