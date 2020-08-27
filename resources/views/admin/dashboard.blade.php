@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
        <div class="card p-3">
        <h1>Total Users</h1>
        <h3>{{$users->count()}}</h3>
        </div>
        </div>
    </div>
</div>

<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="card p-3">
            <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
      <th scope="col">Aadhar</th>
      <th scope="col">option</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)  
  <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->mobile}}</td>
      <td>{{$user->address}}</td>
      <td>{{$user->aadhar}}</td>
      <td><a href="{{ route('profile.update', $user->id) }}">Approve</a></td>
    </tr>
    @endforeach
            </div>
        </div>
    </div>
</div>
@endsection