<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{    

    protected $fillable = [
        'name','phone','spec','img'
    ];

    public function courses(){
        return $this->hasMany('App\Course');
    }
}
