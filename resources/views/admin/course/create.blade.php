@extends('admin.layout')

@section('content')

    @include('admin.includes.errors')
    <div class="d-flex justify-content-between  mb-3">
        <h4 class="text-primary">Courses/Add New</h4>
        <a class="btn btn-sm btn-primary" href="{{route('admin.course.index')}}">Back</a>
    </div>

    <form action="{{route('admin.course.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name:</label>
            <input class="form-control" type="text" name="name">
        </div>

        <div class="form-group">
            <label>Category:</label>
            <select class="custom-select" name="category_id">
                <option disabled selected >Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Trainer:</label>
            <select class="custom-select" name="trainer_id">
                <option disabled selected >Select Trainer</option>
                @foreach ($trainers as $trainer)
                    <option value="{{$trainer->id}}">{{$trainer->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Small Description:</label>
            <input class="form-control" type="text" name="small_desc">
        </div>
        <div class="form-group">
            <label>Description:</label>
            <textarea class="form-control" type="text" name="desc" cols="30" rows="8"></textarea>
        </div>
        <div class="form-group">
            <label>Image:</label>
            <input class="form-control-file" type="file" name="img">
        </div>
        <div class="form-group">
            <label>Price:</label>
            <input class="form-control" type="text" name="price">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>

    </form>


@endsection