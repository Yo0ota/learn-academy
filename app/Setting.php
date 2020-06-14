<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'name', 'logo', 'favicon','city','address','phone','work_hours','email','map','fb','twitter','insta',
    ];
}
