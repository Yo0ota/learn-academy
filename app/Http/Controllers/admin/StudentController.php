<?php

namespace App\Http\Controllers\admin;

use App\Course;
use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        $data['students'] = Student::select('id' , 'name' , 'email' , 'spec')->orderBy('id', 'DESC')->get();
        return view('admin.student.index')->with($data);
    }
    public function create(){
        return view('admin.student.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|string|max:191|unique:students',
            'spec' => 'nullable|string|max:50',
           
        ]);

        Student::create($data);
        return redirect(route('admin.student.index'));

    }
    public function edit($id){
        $data['student'] = Student::findOrFail($id);
        return view('admin.student.edit')->with($data);
    }
    public function update(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|string|max:191|unique:students',
            'spec' => 'nullable|string|max:50',
        ]);
       

        Student::findOrFail($request->id)->update($data);
        return redirect(route('admin.student.index'));
    }
    public function delete($id){
        Student::findOrFail($id)->delete();
        return back();
    }
    public function show($id){
        $data['courses'] = Student::findOrFail($id)->courses;
        $data['student_id'] = $id; 
        return view('admin.student.show')->with($data);

    }
    public function approve($id , $c_id){
        DB::table('course_student')->where('student_id' , $id)->where('course_id' , $c_id)->update([
            'status' => 'approve'
        ]);

        return back();

    }
    public function reject($id , $c_id){
        DB::table('course_student')->where('student_id' , $id)->where('course_id' , $c_id)->update([
            'status' => 'reject'
        ]);
        return back();
    }
    public function addCourse($id){
        $data['student_id'] = $id;
       $data['courses'] = Course::select('id' , 'name')->get();
       return view('admin.student.add_course')->with($data);
    }
    public function storeCourse($id , Request $request){
        $data = $request->validate([
            'course_id' => 'required|exists:courses,id'
        ]);
        DB::table('course_student')->insert([
            'student_id' => $id,
            'course_id' => $data['course_id']
        ]);
        return redirect(route('admin.student.show', $id));
    }
}
