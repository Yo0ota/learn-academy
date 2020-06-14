@extends('admin.layout')

@section('content')
<div class="d-flex justify-content-between  mb-3">
    <h4 class="text-primary">Students / Add Course</h4>
    <a class="btn btn-sm btn-primary" href="{{route('admin.student.index')}}">Back</a>
</div>

    @include('admin.includes.errors')

    <form action="{{route('admin.student.storeCourse' , $student_id)}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$student_id}}">
        <div class="form-group">
            <label>Courses:</label>
            <select class="custom-select" name="course_id">
                <option disabled selected >Select Course</option>
                @foreach ($courses as $course)
                    <option value="{{$course->id}}">{{$course->name}}</option>
                @endforeach
            </select>
        </div>
        

        <input class="btn btn-info" type="submit" value="Add Course">

    </form>


@endsection