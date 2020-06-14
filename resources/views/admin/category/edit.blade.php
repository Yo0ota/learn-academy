@extends('admin.layout')

@section('content')

    @include('admin.includes.errors')
    <div class="d-flex justify-content-between  mb-3">
        <h4 class="text-primary">Ctegory/Edit/{{$category->name}}</h4>
        <a class="btn btn-sm btn-primary" href="{{route('admin.category.index')}}">Back</a>
    </div>

    <form action="{{route('admin.category.update')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$category->id}}">
        <div class="form-group">
            <label>Name:</label>
            <input class="form-control" type="text" name="name" value="{{$category->name}}">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>

    </form>


@endsection