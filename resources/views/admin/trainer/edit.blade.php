@extends('admin.layout')

@section('content')

    @include('admin.includes.errors')
    <div class="d-flex justify-content-between  mb-3">
        <h4 class="text-primary">Trainer/Edit/{{$trainer->name}}</h4>
        <a class="btn btn-sm btn-primary" href="{{route('admin.trainer.index')}}">Back</a>
    </div>

    <form action="{{route('admin.trainer.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$trainer->id}}">
        <div class="form-group">
            <label>Name:</label>
            <input class="form-control" type="text" name="name" value="{{$trainer->name}}">
        </div>
        <div class="form-group">
            <label>Phone:</label>
            <input class="form-control" type="text" name="phone" value="{{$trainer->phone}}">
        </div>
        <div class="form-group">
            <label>Speciallity:</label>
            <input class="form-control" type="text" name="spec" value="{{$trainer->spec}}">
        </div>
        <img src="{{asset('uploads/trainers/'.$trainer->img)}}" height="100px">
        <div class="form-group">
            <label>Image:</label>
            <input class="form-control-file" type="file" name="img">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>

    </form>


@endsection