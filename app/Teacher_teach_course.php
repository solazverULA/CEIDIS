<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher_teach_course extends Model
{
    protected $table = 'teacher_teach_courses';

    protected $fillable = [
        'date','course_id', 'teacher_id',
      ];
}
