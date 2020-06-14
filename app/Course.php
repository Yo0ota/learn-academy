<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = [
        'category_id', 'trainer_id', 'name','small_desc','desc','price','img',
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function trainer(){
        return $this->belongsTo('App\Trainer');
    }

    public function students(){
        return $this->belongsToMany('App\Student');
    }
}
