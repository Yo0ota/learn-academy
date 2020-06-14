@extends('admin.layout')
@section('content')

<div class="d-flex justify-content-between  mb-3">
    <h4 class="text-primary">Course/{{$course->name}} details</h4>
    <a class="btn btn-sm btn-primary" href="{{route('admin.course.index')}}">back</a>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Category</th>
        <th scope="col">Trainer</th>
        <th scope="col">Small Description</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
            <tr>
                <td>{{$course->Category->name}}</td>
                <td>{{$course->trainer->name}}</td>
                <td>{{$course->small_desc}}</td>
                <td>{{$course->desc}}</td>
                <td>
                    <a class="btn btn-sm btn-info" href="{{route('admin.course.edit' , $course->id)}}">Edit</a>
                </td>
            </tr>     
    </tbody>
  </table>


@endsection