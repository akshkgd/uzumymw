@extends('layouts.app')
@section('content')
<div class="navbar-container ">
    <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white">
      @include('layouts.header')
    </nav>
  </div>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <img src="{{asset('assets/img/team/arpit.png')}}" alt="" class="avatar avatar-xlg">
                <h1 class="ck-font display-4 pt-3 fw-400 ">Arpit Khare</h1>
                <p class="lead">I am pursuing M.Tech CSE from NIT Jamshedpur, a passionate instructor and coder. I am on a mission to help students inculcate the thinking capabilities by making them explore more about their interested fields.</p>


                <a href="https://twitter.com/itsarpitkhare" class="m-1 btn  btn-primary-3" target="_blank">
                    <img class="icon" src="{{ asset('assets/img/icons/social/twitter.svg') }}"
                        alt="heart icon" data-inject-svg />
                    <span class="fw-400">Twitter</span>
                </a>
                <a href="https://www.linkedin.com/in/arpit-khare-72824419b/" target="_blank" class="m-1 btn btn-primary-3">
                    <img class="icon" src="{{ asset('assets/img/icons/social/linkedin.svg') }}"
                        alt="heart icon" data-inject-svg />
                    <span class="fw-400">LinkedIn</span>
                </a>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
@endsection