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
                        <h2 style="font-size:34px" class="display-4 mx-xl-8 mb-1">Register Now</h1>
                            <p class="m-0  text-dark">Register to join all upcoming live classes! </p>
                    </div>
                    <a href="{{ url('/redirect') }}" id="continue-google-login-button"
                        class="btn btn-primary-3 py-2 mb-2 fw-400 rounded-pill w-100">Continue with Google</a>
                    <button class="btn btn-outline-primary-3 py-2 mb-2 fw-400 rounded-pill w-100"
                        style="border:1px solid black" onclick="displayLoginForm()" id="continue-email-login-button"
                        style="border-radius: 33px;">Continue with Email</button>
                    <form method="POST" action="{{ route('register') }}" class="d-none" id="login-form">
                        @csrf

                        {{-- <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6 ">
                                <input id="name" type="text" placeholder="Your Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> --}}
                        <div class="form-group row mb-2 ">



                            <div class="col-md-12">

                                <div class="form-floating mt-0 ">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" placeholder="name">
                                    @error('email')
                                        <span class="invalid-feedback lead" role="alert">
                                            <p class="m-0">{{ $message }}</p>
                                        </span>
                                    @enderror
                                    <label for="email">Your Name</label>
                                </div>



                            </div>
                        </div>
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
                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-dark fw-400">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
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
    if(navigator.userAgent.includes("Instagram")){
        document.getElementById('continue-google-login-button').style.display = 'none';
    }
    var isChrome = !!window.chrome; // "!!" converts the object to a boolean value
    var isSafari = !!window.safari;
    var isFirefox = !!window.firefox;
    console.log(isFirefox)
    console.log(isSafari);
    console.log(isChrome);
    if(isChrome != true && isSafari != true && isFirefox != true){
    document.getElementById('continue-google-login-button').style.display = 'block';
    displayLoginForm()
    }
 </script>
</section>
@endsection
