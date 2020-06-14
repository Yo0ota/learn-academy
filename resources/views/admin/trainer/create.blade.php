@extends('admin.layout')

@section('content')

    @include('admin.includes.errors')
    <div class="d-flex justify-content-between  mb-3">
        <h4 class="text-primary">Trainers/Add New</h4>
        <a class="btn btn-sm btn-primary" href="{{route('admin.trainer.index')}}">Back</a>
    </div>

    <form action="{{route('admin.trainer.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name:</label>
            <input class="form-control" type="text" name="name">
        </div>
        <div class="form-group">
            <label>Phone:</label>
            <input class="form-control" type="text" name="phone">
        </div>
        <div class="form-group">
            <label>Specialitty:</label>
            <input class="form-control" type="text" name="spec">
        </div>
        <div class="form-group">
            <label>Image:</label>
            <input class="form-control-file" type="file" name="img">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>

    </form>


@endsection