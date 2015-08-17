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

    public function getFormattedIdCard()
    {
        return preg_replace("/^(\d{1})(\d{4})(\d{5})(\d{2})(\d{1})$/", "$1-$2-$3-$4-$5", $this->id_card);
    }

    public function getFormattedTel()
    {
        if (strlen($this->tel) == 9) {
            return preg_replace("/^(\d{2})(\d{3})(\d{4})$/", "$1-$2-$3", $this->tel);
        } else {
            return preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $this->tel);
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

}
