<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_apply_for_certificate extends Model
{
    protected $table = 'student_apply_for_certificates';

    protected $fillable = [
        'status','student_id', 'certif_id',
      ];
}
