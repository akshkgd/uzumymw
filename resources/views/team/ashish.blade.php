@extends('layouts.ck')
@section('content')
@include('layouts.ck-header')
<section>
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <img src="{{asset('assets/img/team/ashish black.png')}}" alt="" class="rounded-circle" height="120">
                <h1 class="ck-font display-5 wd_highlight1 pt-3 fw-bold ">Ashish Shukla</h1>
                <p class="lead">I am a freelance web developer and instructor passionate about educating students through engaging lessons. Ex AOSPL, Lido Learning</p>


                <a href="https://twitter.com/akshkgd" class="m-1 btn btn-dark" target="_blank">
                    Twitter
                </a>
                <a href="https://www.linkedin.com/in/ashish-shukla-a18886138/" target="_blank" class="m-1 btn btn-dark">
                    LinkedIn
                </a>
            </div>
        </div>
    </div>
</section>

@endsection