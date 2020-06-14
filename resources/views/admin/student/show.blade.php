@extends('admin.layout')
@section('content')

  <div class="mb-3 d-flex justify-content-end ml-2">
    <a class="btn btn-sm btn-info mr-2" href="{{route('admin.student.addCourse' , $student_id)}}">Add to course</a>
    <a class="btn btn-sm btn-primary" href="{{route('admin.student.index')}}">back</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($courses as $course)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$course->name}}</td>
            <td>{{$course->pivot->status}}</td>
            <td>
                @if($course->pivot->status !== 'approve')
                  <a class="btn btn-sm btn-info" href="{{route('admin.student.approve' , [$student_id ,$course->id])}}">Approve</a>
                @endif

                @if($course->pivot->status !== 'reject')
                  <a class="btn btn-sm btn-danger" href="{{route('admin.student.reject' , [ $student_id ,$course->id])}}">Reject</a>
                @endif

            </td>
        </tr>
      @endforeach
    
    </tbody>
</table>

@endsection