<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $data['sett'] = Setting::first();
        return view('user.contact.index')->with($data);
    }
}
