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
                <img src="{{asset('assets/img/team/circle-cropped.png')}}" alt="" class="avatar avatar-xlg">
                <h1 class="ck-font display-4 pt-3 fw-400 ">Himanshu Srivastava</h1>
                <p class="lead">I’m a web developer. I spend my whole day, practically every day, experimenting with JavaScript based libraries and frameworks; and inhaling a wide variety of potentially useless information through a few hundred RSS feeds. I build websites that delight and inform. I do it well.

                     I’m curious, and I enjoy work that challenges me to learn something new and stretch in a different direction. I do my best to stay on top of changes in the state of the art so that I can meet challenges with tools well suited to the job at hand.</p>


                <a href="https://twitter.com/coderhimanshu" class="m-1 btn  btn-primary-3" target="_blank">
                    <img class="icon" src="{{ asset('assets/img/icons/social/twitter.svg') }}"
                        alt="heart icon" data-inject-svg />
                    <span class="fw-400">Twitter</span>
                </a>
                <a href="https://www.linkedin.com/in/himanshu-srivastava/" target="_blank" class="m-1 btn btn-primary-3">
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