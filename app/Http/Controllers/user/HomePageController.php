<?php

namespace App\Http\Controllers\user;

use App\Content;
use App\Course;
use App\Http\Controllers\Controller;
use App\Student;
use App\Testimonial;
use App\Trainer;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $data['banner'] = Content::select('content')->where('name' , 'banner')->first();
        $data['courses_content'] = Content::select('content')->where('name' , 'courses')->first();
        $data['testmonials'] = Content::select('content')->where('name' , 'testmonials')->first();
        $data['feature'] = Content::select('content')->where('name' , 'main feature')->first();
        $data['feature1'] = Content::select('content')->where('name' , 'feature1')->first();
        $data['feature2'] = Content::select('content')->where('name' , 'feature2')->first();
        $data['feature3'] = Content::select('content')->where('name' , 'feature3')->first();
        $data['footer'] = Content::select('content')->where('name' , 'footer')->first();

        $data['courses'] = Course::orderBy('id')
        ->take(3)
        ->get();

        $data['courses_count'] = Course::count();
        $data['trainers_count']  = Trainer::count();
        $data['students_count']  = Student::count();

        $data['testimonials'] = Testimonial::orderBy('id')
        ->take(3)
        ->get();
        
        return view('user.index')->with($data);
    }

}
