@extends('layouts.app')
@section('content')


<section>
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-4 text-center">
                <img src="{{asset('assets/img/hero.svg')}}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-lg-8 text-center">
                <h1 class="pt-2 pb-0 mb-0 display-3">404</h1>
                <h2 class="display">We are coding...</h2>
                @guest
                    <a href="{{url('/')}}" class="btn btn-lg btn-success">Go back to Home</a>
                @endguest
                @auth
                <a href="{{url('/home')}}" class="btn btn-success">Go back to home</a>
                @endauth
            </div>
        </div> 
                
            </div>
        </div>
    </div>
</section>
@endsection