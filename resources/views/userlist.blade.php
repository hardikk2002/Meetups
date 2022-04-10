@extends('layout')
@section('content')
<h1>user list page</h1>
<div>
  <ul>
    @foreach ($user as $u)
    <li><span>{{$u->id}}</span> <span>{{$u->name}}</span> <span>{{$u->email}}</span> <span>{{$u->linkedin}}</span>
      <span>{{$u->github}}</span> <span>{{$u->twitter}}</span>
    </li>
    @endforeach
  </ul>
</div>
@endsection