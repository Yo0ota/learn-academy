@extends('admin.layout')

@section('content')

    @include('admin.includes.errors')
    <div class="d-flex justify-content-between  mb-3">
        <h4 class="text-primary">Student/Edit/{{$student->name}}</h4>
        <a class="btn btn-sm btn-primary" href="{{route('admin.student.index')}}">Back</a>
    </div>

    <form action="{{route('admin.student.update')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$student->id}}">
        <div class="form-group">
            <label>Name:</label>
            <input class="form-control" type="text" name="name" value="{{$student->name}}">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input class="form-control" type="text" name="email" value="{{$student->email}}">
        </div>
        <div class="form-group">
            <label>Speciallity:</label>
            <input class="form-control" type="text" name="spec" value="{{$student->spec}}">
        </div>
       
        <button class="btn btn-primary" type="submit">Submit</button>

    </form>


@endsection