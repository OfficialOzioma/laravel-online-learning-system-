<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $with = ['user'];
    protected $fillable = [
        'cv','user_id','job_id'
    ];

    public function user() {
       return $this->belongsTo(User::class);
    }
}
