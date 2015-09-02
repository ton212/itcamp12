<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model {

    protected $fillable =  [
        'prefix', 'firstname', 'lastname', 'nickname', 'gender', 'email',
        'id_card', 'birthday', 'religion', 'academic', 'medical', 'transcript',
        'shirt_size', 'address', 'parent', 'university_interesting',
        'camp_history', 'facebook', 'pr_from'
    ];

    protected $casts = [
        'academic'               => 'array',
        'medical'                => 'array',
        'parent'                 => 'array',
        'university_interesting' => 'array',
        'address'                => 'array',
        'camp_history'           => 'array',
        'pr_from'                => 'array'
    ];

    public function quiz_answers()
    {
        return $this->hasMany('App\QuizAnswer');
    }

    public function score_cards()
    {
        return $this->hasMany('App\QuizScoreCard');
    }

    public function getFormattedIdCard()
    {
        return preg_replace("/^(\d{1})(\d{4})(\d{5})(\d{2})(\d{1})$/", "$1-$2-$3-$4-$5", $this->id_card);
    }

    public function getFormattedTel()
    {
        if (strlen($this->tel) == 9) {
            return preg_replace("/^(\d{2})(\d{3})(\d{4})$/", "$1-$2-$3", $this->address['tel']);
        } else {
            return preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $this->address['tel']);
        }
    }

    public function getStatus()
    {
        $statuses = [
            0 => 'รอการตรวจเบื้องต้น (Pre-check)',
            1 => 'ใบสมัครสมบูรณ์',
            2 => 'ใบสมัครไม่สมบูรณ์'
        ];
        return $statuses[$this->pre_check];
    }

    public function setPreCheck($result)
    {
        $this->pre_check = $result;
        $this->save();
    }

    public function scopeApproved($query)
    {
        return $query->where('pre_check', 1);
    }

    public function scopeUnapproved($query)
    {
        return $query->where('pre_check', 2);
    }

    public function scopeWaitForPreCheck($query)
    {
        return $query->where('pre_check', 0);
    }

    public function isJudgedBy($user_id)
    {
        return $this->score_cards()->whereUserId($user_id)->count();
    }

}
