<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_associated_course extends Model
{
    protected $table = 'payment_associated_courses';

    protected $fillable = [
        'regist_date','voucher_id', 'course_id',
      ];
}
