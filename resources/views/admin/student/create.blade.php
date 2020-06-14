@extends('admin.layout')

@section('content')

    @include('admin.includes.errors')
    <div class="d-flex justify-content-between  mb-3">
        <h4 class="text-primary">Students/Add New</h4>
        <a class="btn btn-sm btn-primary" href="{{route('admin.student.index')}}">Back</a>
    </div>

    <form action="{{route('admin.student.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Name:</label>
            <input class="form-control" type="text" name="name">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input class="form-control" type="email" name="email">
        </div>
        <div class="form-group">
            <label>Specialitty:</label>
            <input class="form-control" type="text" name="spec">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>

    </form>

@endsection