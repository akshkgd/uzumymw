@extends('layouts.app')
@section('content')


    <div class="navbar-container">
        <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white">
            @include('layouts.header2')
        </nav>

    </div>

    <section class="min-vh-10 p-0">

        <div class="container">
            <div class="row justify-content-center mb-md-6">

                <div class="col-md-5 pr-xl-5 order-sm-1 mt-5">
                    <div class="text-center">
                        {{-- <a href="index.html"><h4 class="">Codekaro</h1></a> --}}
                    </div>

                    <div class="">

                        <div class="text-center mb-4">
                            <h2 style="font-size:34px" class="display-4 mx-xl-8 mb-1">Welcome Back</h1>
                                <p class="m-0  text-dark">Login to your account to see all your upcoming classes. </p>
                        </div>
                        <a href="{{ url('/redirect') }}" id="continue-google-login-button"
                            class="btn btn-primary-3 py-2 mb-2 fw-400 rounded-pill w-100">Continue with Google</a>
                        <button class="btn btn-outline-primary-3 py-2 mb-2 fw-400 rounded-pill w-100"
                            style="border:1px solid black" onclick="displayLoginForm()" id="continue-email-login-button"
                            style="border-radius: 33px;">Continue with Email</button>


                        <form method="POST" action="{{ route('login') }}" class="d-none " id="login-form">
                            @csrf

                            <div class="form-group row">



                                <div class="col-md-12">

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
                                    <button type="submit" class="btn  btn-primary-3 mb-2 fw-400">
                                        {{ __('Login') }}
                                    </button>

                                    </p>
                                    <div class="text-center mt-3">
                                        {{-- <p class="lead">New to Codekaro? <a href="{{url('/register')}}" class="fw-400">Join now</a></p> --}}
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="text-center">
                        <p class="m-0  text-dark">By continuing, you agree to Codekaro's Conditions of Use and <a
                                href="{{ url('/privacy') }}" class="fw-400">Privacy policy</a>. </p>
                        <p style="font-size:22px" class="mt-3 text-dark">New to codekaro? <a href="{{ url('/register') }}"
                                class="card-link fw-400 ck-font">Join Now</a></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

        <script>
            displayLoginForm = () => {
                let loginForm = document.getElementById('login-form');
                loginForm.classList.remove('d-none');
                document.getElementById('continue-email-login-button').style.display = "none";
                document.getElementById('continue-google-login-button').style.display = "none";
            }
        </script>
        <script>
            displayRegisterForm = () => {
                document.getElementById('register-form').style.display = "block";
                document.getElementById('continue-email-register-button').style.display = "none";
            }
        </script>
        <script>
            
            var isChrome = !!window.chrome; // "!!" converts the object to a boolean value
            var isSafari = !!window.safari;
            var isFirefox = !!window.firefox;
            console.log(isFirefox)
            console.log(isSafari);
            console.log(isChrome);
            if(isChrome != true && isSafari != true && isFirefox != true){
            document.getElementById('continue-google-login-button').style.display = 'block';
            // displayLoginForm()
    }
            </script>
    </section>




    <section class="d-none">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10 col-xlg-10">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row align-items-center justify-content-between o-hidden">
                        <div class="col-md-6 order-sm-2 mb-5 mb-sm-0">
                            <img src="{{ asset('assets/img/name-password-illustration@2x.png') }}" alt="Image">
                        </div>
                        <div class="col-md-6 pr-xl-5 order-sm-1">
                            <h1 class="display-5 pb-3">Welcome Back</h1>
                            <p class="lead">You can change your password for security reasons or reset it if you
                                forget it by entering registered mail id.</p>
                            {{-- <a href="https://mail.google.com/mail/#search/from%3Acodekaro+in%3Aanywhere" class="btn btn-primary">Open Inbox</a> --}}
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-floating ">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                                placeholder="full name">
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
