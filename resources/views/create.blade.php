@extends('layout')
@section('content')

<div class="container">
  <h1 class="text-center  my-5">Get registered, meet Awesome minds 🙋😎</h1>
  <form action=" /createsubmit" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="text" name="email" required class="form-control" id="exampleInputEmail1"
        aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" required class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" name="name" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Small Intro</label>
      <input type="text" name="userbio" required class="form-control" id="exampleInputEmail1"
        aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">LinkedIn Username</label>
      <input type="text" name="linkedin" required class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Github Username</label>
      <input type="text" name="github" required class="form-control" id="exampleInputEmail1"
        aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Twitter Username</label>
      <input type="text" name="twitter" required class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Profile Pic</label>
      <input type="file" name="pic" required class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary my-3 mb-5">Submit</button>
  </form>
</div>
@endsection