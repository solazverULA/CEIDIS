<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'name','description', 'summary', 'type', 'uc', 'hours', 'max_capacity', 'min_capacity'
      ];
    
    public function certificate()
    {
        return $this->belongsTo('App\Certificate');
    }

    public function students(){
        return $this->belongsToMany('\App\Student','student_makes_cursos')
            ->withPivot('course_id','init_date', 'finish_date', 'score',
            'approved', 'status', 'inscription_date', 'n_of_times_taken_course');
    }

    public function payments(){
        return $this->belongsToMany('\App\Payment','payment_associated_courses')
            ->withPivot('course_id','regist_date');
    }

    public function teachers(){
        return $this->belongsToMany('\App\Teacher','teacher_teach_courses')
            ->withPivot('course_id','date');
    }
}
