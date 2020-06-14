@extends('admin.layout')
@section('content')

<div class="d-flex justify-content-between  mb-3">
    <h4 class="text-primary">Courses</h4>
    <a class="btn btn-sm btn-primary" href="{{route('admin.course.create')}}">Add New</a>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Details</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $courses as $course )
            <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>
                    <img src="{{asset('uploads/courses/'.$course->img)}}" height="50px"  >
                </td>
                <td>{{$course->name}}</td>
                <td>
                    <a class="btn btn-sm btn-primary" href="{{route('admin.course.show' , $course->id)}}">Show</a>
                </td>
                <td>{{$course->price}}</td>
                <td>
                    <a class="btn btn-sm btn-info" href="{{route('admin.course.edit' , $course->id)}}">Edit</a>
                    <a class="btn btn-sm btn-danger" href="{{route('admin.course.delete' , $course->id)}}">Delete</a>
                </td>
            </tr>
        @endforeach
     
    </tbody>
  </table>


@endsection