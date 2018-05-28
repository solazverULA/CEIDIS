<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $fillable = [
        'voucher_id','quantity', 'date', 'status',
      ];

      public function students()
    {
        return $this->belongsTo('App\Student');
    }

    public function courses(){
        return $this->belongsToMany('\App\Course','payment_associated_courses')
            ->withPivot('voucher_id','regist_date');
    }
}
