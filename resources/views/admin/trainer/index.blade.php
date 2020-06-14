@extends('admin.layout')
@section('content')

<div class="d-flex justify-content-between  mb-3">
    <h4 class="text-primary">Trainers</h4>
    <a class="btn btn-sm btn-primary" href="{{route('admin.trainer.create')}}">Add New</a>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col"> # </th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Specialitty</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $trainers as $trainer )
            <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>
                    <img src="{{asset('uploads/trainers/'.$trainer->img)}}" height="50px"  >
                </td>
                <td>{{$trainer->name}}</td>
                <td>
                    @if($trainer->phone !== null)
                        {{$trainer->phone}}
                    @else
                         <h6 class="text-danger"> not exist </h6>
                    @endif
                </td>
                <td>{{$trainer->spec}}</td>
                <td>
                    <a class="btn btn-sm btn-info" href="{{route('admin.trainer.edit' , $trainer->id)}}">Edit</a>
                    <a class="btn btn-sm btn-danger" href="{{route('admin.trainer.delete' , $trainer->id)}}">Delete</a>
                </td>
            </tr>
        @endforeach
     
    </tbody>
  </table>


@endsection