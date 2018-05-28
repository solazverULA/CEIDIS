<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'voucher_id','quantity','date', 'status',
      ];

    public function courses(){
        return $this->belongsToMany('\App\Course','student_makes_cursos')
            ->withPivot('student_id','init_date', 'finish_date', 'score',
            'approved', 'status', 'inscription_date', 'n_of_times_taken_course');
    }

    public function certificates() {
        return $this->belongsToMany('\App\Certificate','student_apply_for_certificates')
            ->withPivot('student_id','status');
    }

    public function payments()
    {
        return $this->hasMany('App\Payment');
    }
}
