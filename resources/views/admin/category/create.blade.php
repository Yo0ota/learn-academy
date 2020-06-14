@extends('admin.layout')

@section('content')

    @include('admin.includes.errors')
    <div class="d-flex justify-content-between  mb-3">
        <h4 class="text-primary">Ctegories/Add New</h4>
        <a class="btn btn-sm btn-primary" href="{{route('admin.category.index')}}">Back</a>
    </div>

    <form action="{{route('admin.category.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Name:</label>
            <input class="form-control" type="text" name="name">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>

    </form>


@endsection