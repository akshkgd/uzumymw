@extends('layouts.app')

@section('content')

<div class="navbar-container">
    <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white" data-sticky="top">
        @include('layouts.header')
    </nav>
    
</div>
<section class="">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-10 col-xlg-10">
            @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
        @endif
            <div class="row align-items-center justify-content-between o-hidden">
              <div class="col-md-6 order-sm-2 mb-5 mb-sm-0" data-aos="fade-left">
                <img src="{{asset('assets/img/check-email-illustration@2x.png')}}" alt="Image">
              </div>
              <div class="col-md-6 pr-xl-5 order-sm-1">
                <h1 class="display-5 pb-3">Check your email!</h1>
                <p class="lead">To start using Codekaro, confirm your email address with the email we sent to <strong>{{Auth::user()->email}}</strong></p>
                <a href="https://mail.google.com/mail/#search/from%3Acodekaro+in%3Aanywhere" class="btn btn-primary">Open Inbox</a>
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-primary align-baseline">{{ __('Resend email') }}</button>
                </form>
                      
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  

@endsection
