@extends('layout')
@section('content')
<h2 class="text-center  my-5"><strong> Let's meet and connect 🌈</strong></h2>
<div>
  <div class="row row-cols-1 row-cols-md-2 g-4">
    @foreach ($user as $u)
    <div class="col">
      <div class="card text-center  rounded border-bottom  shadow p-3 mb-5 bg-body rounded">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <p class="card-img mt-4" style="font-size: 2rem"> 👤 </p>
        <div class="card-body">
          <h5 class="card-title">{{$u->name}}</h5>
          <p class="card-text">{{$u->userbio}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><a href="http://github.com/{{$u->github}}" class="text-decoration-none"
              target="_blank">Github</a>
          </li>
          <li class="list-group-item"><a href="http://linkedin.com/in/{{$u->linkedin}}" class="text-decoration-none"
              target="_blank">LinkedIn</a>
          </li>
          <li class="list-group-item"><a href="http://twitter.com/{{$u->twitter}}" class="text-decoration-none"
              target="_blank">Twitter</a>
          </li>
        </ul>
        <div class="card-body">
          <a class="btn btn-primary" href="mailto:{{$u->email}}">Send Mail</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection