@extends('layouts.app')
@section('content')
<style>
  .btn-google:hover{
    background-color: ;
    color:dodgerblue;
  }
</style>

  
</div>
<section class="min-vh-100 p-0 m-0">
  <div class="navbar-container">
    <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white" >
        @include('layouts.header')
    </nav>
  <div class="container">
    <div class="row justify-content-center mb-md-6">
      {{-- <div class="col-auto">
        <a href="index.html">
          <h4 class="">Codekaro</h1>
        </a>
      </div> --}}
    </div>
    <div class="row justify-content-center pt-3">
      <div class="col-xl-5 col-lg-5 col-md-6">
        <div class="text-center mb-4">
          <h1 class="mb-1">Welcome back</h1>
          <span>Enter your account details below</span>
        </div>
        <div class="py-3 d-none">
          <a href="{{ url('/redirect') }}" class="btn  btn-block btn-outline-primary-3 btn-google" ><img src="{{asset('assets/img/google.png')}}" alt="" style="height: 40px; padding-bottom:3px; margin-right:10px; ">Continue with Google </a>

                      
                  </div>
        <form method="POST" action="{{ route('login') }}">
          @csrf
          
           <div class="form-group row">
              


              <div class="col-md-12">
                <div class="form-floating mt-0 ">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  <label for="email">Email</label>
                </div>


                  
              </div>
          </div>

          <div class="form-group row">
              
            

            <div class="col-md-12">
              <div class="form-floating mt-0 ">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                <label for="password">Password</label>
              </div>


                
            </div>
        </div>

          

          

          <div class="form-group row mb-0">
              <div class="col-md-12 ">
                  <button type="submit" class="btn btn-block fw-400 btn-ck btn-primary">
                      {{ __('Continue with email') }}
                  </button>

                  @if (Route::has('password.request'))
                      <a class="btn btn px-0 py-2" href="{{ route('password.request') }}">
                          {{ __('Forgot Your Password?') }}
                      </a>
                  @endif
              </div>
          </div>
      </form>
      </div>
    </div>
  </div>
</section>

  @endsection