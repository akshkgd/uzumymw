@extends('layouts.app')
@section('content')


    <section class="min-vh-100 p-0 m-0">

        <div class="container">
            <div class="row justify-content-center mb-md-6">
                {{-- <div class="col-auto">
                    <a href="index.html">
                        <h4 class="">Codekaro</h1>
                    </a>
                </div> --}}
            </div>
            <div class="row justify-content-center pt-3">
                <div class="col-xl-5 col-lg-6 col-md-6 ">
                    <div class="text-center">
                        {{-- <a href="index.html"><h4 class="">Codekaro</h1></a> --}}
                    </div>

                    <div class="card p-3 border-none shadow-lg" style="border: 3px solid black">

                        <div class="text-cente mb-4">
                            <h1 class=" m-0 display-5">Sign in</h1>
                            <p class=" lead m-0 text-dark">Welcome back to codekaro</p>
                        </div>
                        
                        <form method="POST" action="{{ route('login') }}" >
                            @csrf

                            <div class="form-group row">
                                


                                <div class="col-md-12">
                                    <a href="{{url('/redirect')}}" class="btn btn-primary-3 mb-2 fw-400">Continue with Google</a>
                                    <div class="form-floating mt-0 ">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" placeholder="email">
                                        @error('email')
                                            <span class="invalid-feedback lead" role="alert">
                                                <p class="m-0">{{ $message }}</p>
                                            </span>
                                        @enderror
                                        <label for="email">Email</label>
                                    </div>



                                </div>
                            </div>

                            <div class="form-group row mb-2">



                                <div class="col-md-12">
                                    <div class="form-floating mt-0 ">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password" placeholder="password"
                                            style="background-color: white !important">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        @error('email')
                                            @if (Route::has('password.request'))
                                                <div class=" my-1">
                                                    <a class="fw-400 card-link " href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                </div>

                                            @endif
                                        @enderror
                                        <label for="password">Password</label>
                                    </div>



                                </div>

                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-12 ">
                                    <button type="submit" class="btn  btn-primary mb-2 fw-400 btn-block">
                                        {{ __('Login') }}
                                    </button>
                                    <p class="m-0 small">By continuing, you agree to Codekaro's Conditions of Use and <a
                                            href="{{ url('/privacy') }}" class="fw-400">Privacy policy</a>.
                                    </p>
                                    <div class="text-center mt-3">
                                        {{-- <p class="lead">New to Codekaro? <a href="{{url('/register')}}" class="fw-400">Join now</a></p> --}}
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="text-center">
                        {{-- <div class="py-2 d-non text-center">
          <a href="{{ url('/redirect') }}" class=" fw-400 p-1 btn btn-lg btn-primary-3 btn-block px-2" >Continue with Google</a>

                  </div> --}}
                  <p class="lead text-dark">New to codekaro? <a href="{{ url('/redirect') }}" class="card-link fw-400 ck-font">join now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
