<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_makes_curso extends Model
{
    protected $table = 'student_makes_cursos';

    protected $fillable = [
        'student_id','course_id', 'init_date', 'finish_date', 'score',
        'approved', 'status', 'inscription_date', 'n_of_times_taken_course',
      ];
}
