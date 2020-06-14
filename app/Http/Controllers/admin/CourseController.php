<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Course;
use App\Http\Controllers\Controller;
use App\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CourseController extends Controller
{
    public function index(){
        $data['courses'] = Course::select('id' , 'name' , 'price' , 'img')->orderBy('id', 'DESC')->get();
        return view('admin.course.index')->with($data);
    }
    public function create(){
        $data['categories'] = Category::select('id' , 'name')->get(); 
        $data['trainers'] = Trainer::select('id' , 'name')->get(); 
        return view('admin.course.create')->with($data);
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'category_id' => 'required|exists:categories,id',
            'trainer_id' => 'required|exists:trainers,id',
            'small_desc' => 'required|string|max:191',
            'desc' => 'required|string',
            'price' => 'required|integer',
            'img' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        $new_name = $data['img']->hashName();
        Image::make($data['img'])->resize(970,520)->save(public_path('uploads/courses/'.$new_name));
        $data['img'] = $new_name;

        Course::create($data);
        return redirect(route('admin.course.index'));

    }
    public function edit($id){
        $data['categories'] = Category::select('id' , 'name')->get(); 
        $data['trainers'] = Trainer::select('id' , 'name')->get(); 
        $data['course'] = Course::findOrFail($id);
        return view('admin.course.edit')->with($data);
    }
    public function update(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'category_id' => 'required|exists:categories,id',
            'trainer_id' => 'required|exists:trainers,id',
            'small_desc' => 'required|string|max:191',
            'desc' => 'required|string',
            'price' => 'required|integer',
            'img' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);
        $old_name = Course::findOrFail($request->id)->img;

        if($request->hasFile('img'))
        {
            Storage::disk('uploads')->delete('courses/'. $old_name);
            $new_name = $data['img']->hashName();
            Image::make($data['img'])->resize(970,520)->save(public_path('uploads/courses/'.$new_name));
            $data['img'] = $new_name;

        }
        else 
        {
            $data['img'] = $old_name;    
        }

        Course::findOrFail($request->id)->update($data);
        return redirect(route('admin.course.index'));
    }

    public function delete($id){
        $old_name = Course::findOrFail($id)->img; 
        Storage::disk('uploads')->delete('courses/'. $old_name);
        Course::findOrFail($id)->delete();
        return back();

    }

    public function show($id){
        // $data['courses'] = Course::select('category_id' , 'trainer_id' , 'small_desc' , 'desc')->get();
        $data['course'] = Course::findOrFail($id);
        return view('admin.course.show')->with($data);

    }
}
