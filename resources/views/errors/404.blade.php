@extends('layouts.app')
@section('content')


<section class="">
    <div class="container mt-5 ">
        
        <div class="row justify-content-center text-center">
            <div class="col-lg-5 col-md-5 ">
                <img src="{{asset('assets/img/search_2.png')}}" alt="" class="img-fluid">
                <h1 class="lead-1">404 </h1>
            <p class="lead">This page can not be found.</p>
            <a href="{{url('/home')}}" class="btn btn-primary fw-400">Homepage</a>
            <a href="{{ url()->previous() }}" class="btn btn-outline-primary fw-400">Go Back</a>

            </div>
        </div>
      
    </div>
</section>
@endsection