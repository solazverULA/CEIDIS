<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';

    protected $fillable = [
        'position','user_id',
      ];


    public function courses(){
        return $this->belongsToMany('\App\Course','teacher_teach_courses')
            ->withPivot('teacher_id','date');
    }
}
