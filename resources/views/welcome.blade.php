@extends('layouts.app')

@section('content')
<div class="container pt-2">
    <div class="row">
        <div class="col-sm-12">
        <div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has('alert-' . $msg))

    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
    @endif
    @endforeach
        </div>
    </div>
</div>
<div class="container pt-3 ">
    <div class="row">
        <div class="col-sm-5">
            <!-- <div class="pt-3 ">
                <img src="{{asset('/img/user.png')}}" alt="" class="avatar-hero"  > <span class="text-2">Get your own Unique Ientity with you!!</span> 
            </div> -->
            <div class="text-center pt-4">
                <h3>Unique Identification System</h3>
                <h4 class="text-muted">Search for a person using is identity number! New to UID??</h4>
                <button type="button" class="btn btn-outline-primary">Get Started</button>
                <button type="button" class="btn btn-outline-primary">Know More</button>
            </div>
            <div class="card mt-5">
                <div class="card-header" style="background-color: white; padding:8px">Search Identity using Identification Numbr!</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('search') }}">
                        @csrf
                        <div class="form-group row pl-3 pr-3">
                            <input id="search_value" name="search_value" placeholder="Search for a user" type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">search User</button>
                    </form>
                    <div class="pt-4">
                    <a href="#" class="card-link">Create your Identity</a>
                <a href="#" class="card-link">Know More</a>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-sm-7">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('/img/c11.jpeg')}}" class="d-block w-100 uid-car" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>First slide label</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('/img/c11.jpeg')}}" class="d-block w-100 uid-car" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Second slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('/img/c11.jpeg')}}" class="d-block w-100 uid-car" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Third slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>


    @endsection