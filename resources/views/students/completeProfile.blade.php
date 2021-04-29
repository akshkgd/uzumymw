@extends('layouts.app')
@section('content')
<div class="navbar-container">
  <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white" >
      @include('layouts.header')
  </nav>
  
</div>

<section  class="">
  <div class="container mt-5 pt-5 mt-sm-0 pt-sm-0">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-10 col-xlg-10">
        @include('layouts.alert')
          <div class="row align-items-center justify-content-between o-hidden">
            <div class="col-md-6 order-sm-2 mb-5 mb-sm-0" data-aos="fade-left">
              <img src="{{asset('assets/img/name-password-illustration@2x.png')}}" alt="Image">
            </div>
            <div class="col-md-6 pr-xl-5 order-sm-1">
              <h1 class="display-5 p-0 m-0">Complete your profile</h1>
              <p class="lead pt-3">Hi, <strong>{{Auth::user()->name}}</strong> before you start your coding journey with codekaro let us know a bit more about you.</p>
              <div class="p">
                

                            
                        </div>
                    <form method="POST" action="{{ route('completeStudentsProfile') }}">
                        @csrf
                        
                         <div class="form-group row">
                            <div class="col-md-12">
                              <div class="form-floating ">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="mobile" value="{{ old('email') }}" required autocomplete="mobile" autofocus placeholder="full name">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="email">Mobile Number</label>
                              </div>
                            </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-12">
                            <div class="form-floating ">
                              <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="college" value="{{ old('email') }}" required autocomplete="mobile" autofocus placeholder="full name">
                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                              <label for="email">Your School / College</label>
                            </div>
                          </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-md-12">
                          <div class="form-floating ">
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="course" value="{{ old('email') }}" required autocomplete="mobile" autofocus placeholder="full name">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="email">Course</label>
                          </div>
                          </div>
                    </div>  

                      

                        

                        

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-bloc fw-40 btn-ck btn-outline-primary">
                                    {{ __('Save & Continue') }}
                                </button>

                                
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
 
 