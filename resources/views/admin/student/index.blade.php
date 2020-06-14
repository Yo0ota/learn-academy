@extends('admin.layout')
@section('content')

<div class="d-flex justify-content-between  mb-3">
    <h4 class="text-primary">Students</h4>
    <a class="btn btn-sm btn-primary" href="{{route('admin.student.create')}}">Add New</a>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Speciallity</th>
        <th scope="col">Courses</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $students as $student )
            <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>
                    @if($student->spec !== null)
                    {{$student->spec}}
                @else
                     <h6 class="text-danger"> not exist </h6>
                @endif
                </td>
                <td>
                    {{--  @foreach ($courses as $course)
                        <p> {{$course->name}} <p>
                    @endforeach  --}}
                    <a class="btn btn-sm btn-primary" href="{{route('admin.student.show' , $student->id)}}">Show Courses</a>
                </td>
                <td>
                    <a class="btn btn-sm btn-info" href="{{route('admin.student.edit' , $student->id)}}">Edit</a>
                    <a class="btn btn-sm btn-danger" href="{{route('admin.student.delete' , $student->id)}}">Delete</a>
                </td>
            </tr>
        @endforeach
     
    </tbody>
  </table>


@endsection