@extends('layout')
@section('content')
<h2 class="text-center  my-5"><strong> Let's meet and connect 🌈</strong></h2>
<div>
  <div class="row row-cols-1 row-cols-md-3">
    @foreach ($user as $u)
    <div class="col-md-4">
      <div class="card col-md-10 text-center mx-auto p-3 mb-5 bg-body rounded shadow border-0">
        <img src="{{asset('uploads/'.$u->pic)}}" class="mx-auto shadow rounded-circle" alt="..." width="130"
          height="120" style="border: 0px solid #a78bfa">
        <div class="card-body" style="color:#a78bfa; ">
          <h5 class="card-title fw-bolder">{{$u->name}}</h5>
          <p class="card-text">{{$u->userbio}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item "><a href="http://github.com/{{$u->github}}"
              class="text-decoration-none link-secondary" target="_blank">Github</a>
          </li>
          <li class="list-group-item"><a href="http://linkedin.com/in/{{$u->linkedin}}"
              class="text-decoration-none link-secondary" target="_blank">LinkedIn</a>
          </li>
          <li class="list-group-item"><a href="http://twitter.com/{{$u->twitter}}"
              class="text-decoration-none link-secondary" target="_blank">Twitter</a>
          </li>
        </ul>
        <div class="card-body">
          <a class="btn shadow" href="mailto:{{$u->email}}" style="background-color:#a78bfa; color:white;">Send Mail</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection