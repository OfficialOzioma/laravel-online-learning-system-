<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Job extends Model
{
    public function admin() {

        return $this->belongsTo(Admin::class);
    }
    public function jobApplications(){
        return $this->hasMany(JobApplication::class);
    }

    public function users(){
       return $this->belongsToMany(User::class);
    }

   
}
