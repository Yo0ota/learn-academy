<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Admin Dashboard!</title>
    
</head>

<body style="background-color:#F0F8FF	">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Etrain</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('admin.home')}}">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('admin.course.index')}}">Courses</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('admin.category.index')}}">Categories</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('admin.trainer.index')}}">Trainers</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('admin.student.index')}}">Students</a>
            </li>
          </ul>
         
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('admin.logout')}}">Logout</a>
            </li>
          </ul>
        </div>
      </nav>