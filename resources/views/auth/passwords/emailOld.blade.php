@extends('layouts.app')

@section('content')
<div class="navbar-container">
    <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white" data-sticky="top">
        @include('layouts.header2')
    </nav>
    
</div>




<section class="">
    <div class="container pt-5">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-10 col-xlg-10">
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <div class="row align-items-center justify-content-between o-hidden">
              <div class="col-md-6 order-sm-2 mb-5 mb-sm-0" >
                <img src="{{asset('assets/img/forgot-your-password@2x.png')}}" alt="Image">
              </div>
              <div class="col-md-6 pr-xl-5 order-sm-1">
                <h1 class="display-5 pb-3">Change or reset your password</h1>
                <p class="lead">You can change your password for security reasons or reset it if you forget it by entering registered mail id.</p>
                {{-- <a href="https://mail.google.com/mail/#search/from%3Acodekaro+in%3Aanywhere" class="btn btn-primary">Open Inbox</a> --}}
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-12">
                          <div class="form-floating ">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="full name">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="email">Email</label>
                          </div>
                          <button type="submit" class="btn btn-primary mt-2">
                            {{ __('Send Password Reset Link') }}
                        </button>
                        </div>
                    </div>
                    
                    <div class="form-group row mb-0">
                        <div class="">
                            
                        </div>
                    </div>
                </form>
                      
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection
