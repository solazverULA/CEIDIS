<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $table = 'certificates';

    protected $fillable = [
        'code','background', 'course_id'
      ];

      public function Course()
      {
        return $this->hasOne('App\Course');
      }

      public function students() {
        return $this->belongsToMany('\App\Student','student_apply_for_certificates')
            ->withPivot('certif_id','status');
      }
}
