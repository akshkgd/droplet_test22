@extends('layouts.app')

@section('content')
@if(Auth::user()->is_verified == 0)
<div class="container">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey! {{Auth::user()->name}}</strong> Your identity is under approval. 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>

@endif

@if(Auth::user()->is_verified == 1)
<div class="container">
<div class="success success-warning success-dismissible fade show" role="alert">
  <strong>Congrats! {{Auth::user()->name}}</strong> Your identity has been approved. 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>

@endif

<div class="container">
    <div class="row justify-content-center">
    <div class="col-sm-7">
            <div class="card">
            <div class="card-header">Update your Details</div>
            <div class="card-body">
            <form method="POST" action="{{ route('task.update', Auth::User()->id) }}">
             @method('Patch')           
            @csrf
                <div class="form-group row pl-3 pr-3">
                    <label for="name">Name</label>
                    <input id="name" name="name"  type="text" class="form-control" value="{{Auth::user()->name}}">
                </div>
                <div class="form-group row pl-3 pr-3">
                    <label for="email">Email</label>
                    <input id="email" name="email"  type="text" class="form-control" value="{{Auth::user()->email}}">
                </div>
                <div class="form-group row pl-3 pr-3">
                    <label for="mobile">Mobile Number</label>
                    <input id="mobile" name="mobile"  type="text" class="form-control" value="{{Auth::user()->mobile}}">
                </div>
                <div class="form-group row pl-3 pr-3">
                    <label for="address">Address</label>
                    <input id="address" name="address" placeholder="your address"  type="text" class="form-control" value="{{Auth::user()->address}}">
                </div>
                <div class="form-group row pl-3 pr-3">
                    <label for="aadhar">Aadhar card Number</label>
                    <input id="aadhar" name="aadhar" placeholder="your aadhar card" type="text" class="form-control" value="{{Auth::user()->aadhar}}">
                </div>

                <button type="submit" class="btn btn-primary">Update profile</button>
                </form>
            </div>
            </div>
            
        </div>
        <div class="col-sm-5">
        <div class="card" >
  <!-- <img src="{{asset('bg.jpeg')}}" class="card-img-top" alt="..."> -->
  <div class="card-body">
  @if(Auth::User()->is_verified == 0)
  <div class="alert alert-warning" role="alert"> Your identity is under approval. 
 
  
</div>
@endif
@if(Auth::User()->is_verified == 1)
<div class="alert alert-success" role="alert"> Your identity is Approved and Active. 
  
</div>
@endif
  <h5 class="card-title">{{Auth::User()->name}}</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    @if(Auth::User()->is_verified == 1)
    <h5>Unique Id: {{Auth::User()->uniqueid}}</h5>
@endif



    <a href="{{route('showId', Auth::User()->id)}}" class="btn btn-primary">View identity</a>

  </div>
</div>
        </div>
    </div>
</div>

@endsection