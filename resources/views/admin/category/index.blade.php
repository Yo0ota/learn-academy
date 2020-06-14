@extends('admin.layout')
@section('content')

<div class="d-flex justify-content-between  mb-3">
    <h4 class="text-primary">Categories</h4>
    <a class="btn btn-sm btn-primary" href="{{route('admin.category.create')}}">Add New</a>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $categories as $category )
            <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{$category->name}}</td>
                <td>
                    <a class="btn btn-sm btn-info" href="{{route('admin.category.edit' , $category->id)}}">Edit</a>
                    <a class="btn btn-sm btn-danger" href="{{route('admin.category.delete' , $category->id)}}">Delete</a>
                </td>
            </tr>
        @endforeach
     
    </tbody>
  </table>


@endsection