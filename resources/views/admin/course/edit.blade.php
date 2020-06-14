@extends('admin.layout')

@section('content')

    @include('admin.includes.errors')
    <div class="d-flex justify-content-between  mb-3">
        <h4 class="text-primary">Course/Edit/ {{$course->name}}</h4>
        <a class="btn btn-sm btn-primary" href="{{route('admin.course.index')}}">Back</a>
    </div>

    <form action="{{route('admin.course.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$course->id}}">
        <div class="form-group">
            <label>Name:</label>
            <input class="form-control" type="text" name="name" value="{{$course->name}}">
        </div>

        <div class="form-group">
            <label>Category:</label>
            <select class="custom-select" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" @if($course->category_id == $category->id) selected @endif>{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Trainer:</label>
            <select class="custom-select" name="trainer_id">
                @foreach ($trainers as $trainer)
                    <option value="{{$trainer->id}}" @if($course->trainer_id == $trainer->id) selected @endif>{{$trainer->name}}</option>
                @endforeach
            </select>
        </div>
        
        
        
        <div class="form-group">
            <label>Small Description:</label>
            <input class="form-control" type="text" name="small_desc" value="{{$course->small_desc}}">
        </div>
        <div class="form-group">
            <label>Description:</label>
            <textarea class="form-control" type="text" name="desc" cols="30" rows="8">{{$course->desc}}</textarea>
        </div>
        <div class="form-group">
            <label> Price:</label>
            <input class="form-control" type="text" name="price" value="{{$course->price}}">
        </div>
        <img src="{{asset('uploads/courses/'.$course->img)}}" height="100px">
        <div class="form-group">
            <label>Image:</label>
            <input class="form-control-file" type="file" name="img">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>

    </form>


@endsection