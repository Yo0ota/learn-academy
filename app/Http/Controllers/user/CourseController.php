<?php

namespace App\Http\Controllers\user;

use App\Category;
use App\Course;
use App\http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function category($id){
        $data['category'] = Category::where('id' , $id)->first();
        $data['courses'] = Course::where('category_id' , $id)->paginate(3);
        return view('user.courses.category')->with($data);
    }

    public function show($id , $c_id){
        $data['course'] = Course::where('id' , $c_id)->first();
        return view('user.courses.show')->with($data);
    }
   
}
