
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Codekaro - Live Coding Classes learn to code like a pro')</title>
    <meta name="keywords" content="@yield('meta_keywords','Codekaro try to bring latest courses to students. Not only that we provide a dedicated team to answer their doubts.')">
    <meta name="og:description" content="@yield('meta_description','Codekaro try to bring latest courses to students. Not only that we provide a dedicated team to answer their doubts.')">
    <link rel="canonical" href="{{url()->current()}}"/>
    <link rel="icon" href="{{asset('/assets/img/chrome-icon.png')}}">
    <meta name="facebook-domain-verification" content="nlndijpgith63pnf9skj942enj02m8" />
    <!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1180474805808058');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1180474805808058&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HC9ETJV29G"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HC9ETJV29G');
    </script>
    <style>
      @keyframes hideLoader{0%{ width: 100%; height: 100%; }100%{ width: 0; height: 0; }  }  body > div.loader{ position: fixed; background: white; width: 100%; height: 100%; z-index: 1071; opacity: 0; transition: opacity .5s ease; overflow: hidden; pointer-events: none; display: flex; align-items: center; justify-content: center;}body:not(.loaded) > div.loader{ opacity: 1;}body:not(.loaded){ overflow: hidden;}  body.loaded > div.loader{animation: hideLoader .5s linear .5s forwards;  } /* Typing Animation */.loading-animation {width: 6px;height: 6px;border-radius: 50%;animation: typing 1s linear infinite alternate;position: relative;left: -12px;}@keyframes typing {0% {background-color: rgba(100,100,100, 1);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 0.2);}25% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 2),24px 0px 0px 0px rgba(100,100,100, 0.2);}75% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 1);}}
    </style>
    <script type="text/javascript">
      window.addEventListener("load", function () {    document.querySelector('body').classList.add('loaded');  });
    </script>
    <link rel="stylesheet" href="{{asset('assets/css/ck.css')}}" />
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    
  </head>
  <body>
    <div class="d-none m-0 alert bg-primary text-center text-white fw-light rounded-0 border-0 smal d-non">
      New masterclasses has been launched! <a href="" class="text-white stretched-link nav-link d-inline p-0">Check Now</a> Limited seats available.
    </div>
    
@yield('content')

    <footer>
      <div class="container my-4">
        <div class="row">
          <div class="col-lg-6">
            <ul class="nav justify-content-center align-items-center h-100 justify-content-lg-start text-dark text-center mx-0 p-0" type="none">
              <li class="nav-item">
                <a class="nav-link text-dark active" aria-current="page" href="{{url('/about')}}">About Us</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link text-dark" href="{{url('/contact')}}">Contact Us</a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link text-dark"  href="{{url('/privacy')}}">Privacy Policy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark"  href="{{url('/privacy')}}">Teach Now</a>
              </li>
              
            </ul>
          </div>
          <div class="col-lg-6 text-right">
            <ul class="d-flex justify-content-center justify-content-lg-end text-dark m-0 p-0" type="none">
              
              <li class="nav-item">
                <a class="nav-link text-dark" href="#"><img height="30" src="{{asset('assets/img/facebook.svg')}}" alt=""></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark mt-1" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                </svg></a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link text-dark fs-5"  href="#"><img height="30" src="{{asset('assets/img/twitter.svg')}}" alt=""></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

        
<div class="">
  <div class="btn-g dropup d-non">
    <button type="button" class="btn btn-dark p-3 bg-light btn-round btn-floating dropdown-toggl" data-bs-toggle="dropdown" aria-expanded="false">
      ?
    </button>
    <ul class="dropdown-menu shadow">
      <!-- Dropdown menu links -->
      <li><a class="dropdown-item" href="#">Help</a></li>
      <li><a class="dropdown-item" href="#">WhatsApp Us</a></li>
      <li><a class="dropdown-item" href="#">Raise Ticket</a></li>
    </ul>
  </div>
</div>


    <!-- register modal -->
    <div class="modal" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-5 shadow">
          <div class="modal-header p-5 pb-4 border-bottom-0">
            <!-- <h5 class="modal-title">Modal title</h5> -->
            <h2 class="fw-bold mb-0">Sign up for free</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
    
          <div class="modal-body p-5 pt-0">
            <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit" style="border-radius: 33px;">Continue with Google</button>
            <button class="w-100 mb-2 btn btn-lg rounded-4 btn-outline-dark" onclick="displayRegisterForm()" id="continue-email-register-button" style="border-radius: 33px;">Continue with Email</button>
            <form class="" id="register-form">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Your Name</label>
                  </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Sign up</button>
              
              
            </form>
            <small class="text-muted text-center">By clicking Sign up, you agree to the terms of use.</small>
          </div>
        </div>
      </div>
      </div>

    
      <!-- register modal ends -->

      <!-- login modal -->
    <div class="modal" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded-5 shadow">
              <div class="modal-header px-lg-5 p-4 border-bottom-0">
                <!-- <h5 class="modal-title">Modal title</h5> -->
                <h2 class="display- fw-bolder">Login Now </h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
        
              <div class="modal-body px-lg-5 p-4  pt-0">
                <p class="fs-6">Login to your account to see all your upcoming classes.</p>
                <button onclick="originalLoginForm()" id="goBackBtn" class="btn ck-outline-btn">Go back</button>
                <a href="{{ url('/redirect') }}" class="w-100 mb-3 btn btn-lg rounded-pill fw-light btn-dark " style="font-size: 16px; padding: 10px 0;" id="continue-gmail-login-button" type="submit">Continue with Google</a>
                <button class="w-100 mb-2 btn btn-lg rounded-pill btn-outline-dark" style="font-size: 16px; padding: 10px 0;" onclick="displayLoginForm()" id="continue-email-login-button" style="border-radius: 33px;">Continue with Email</button>
                <form method="POST" action="{{ route('login') }}" class="d-non " id="login-form">
                  @csrf

                  <div class="form-group row">



                      <div class="col-md-12">

                          <div class="form-floating mt-0 ">
                              <input id="email" type="email"
                                  class="form-control input-email @error('email') is-invalid @enderror" name="email"
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
                                  class="form-control input-password @error('password') is-invalid @enderror" name="password"
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
                          <button type="submit" class="btn  btn-dark rounded-pill px-4 mb-2 fw-400">
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
            </div>
          </div>
          </div>
    
        
          <!-- login modal ends -->
          <!-- masterclass modal -->
    <div class="modal" id="masterclass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-md modal-dialog-centered" role="document">
          <div class="modal-content rounded-5 shado">
            <div class="modal-header pt-4 pb-4 px-3 pb-4 border-bottom-0">
              <!-- <h5 class="modal-title">Modal title</h5> -->
              <h4 class="fw-bol fs-4 fw-70 mb-0">Book your free masterclass</h2>
              <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
      
            <div class="modal-body py-2 px-3 pt-0">
              
              
              <div class="card masterclass-hover  mb-3 p-3">
                <a href="" class="btn m-0 p-0" style="text-align: left;">
                  
                    <div class="">
                      <h5 class=" m-0">Web Development Bootcamp</h3>
                      <p>From Wed, 16 January 6:00 PM to 7:00 PM</p>
                    </div>
                   <div class=""> <p class="success-pill">5 seats left</p></div>
                  
                </a>
                
              </div>
              
              
              <!-- <a href="" class="btn btn-primary fw-light rounded-pill px-4">Enroll Now</a> -->
            <p class="small">Enroll Now and join now for free</p>
            </div>
          </div>
        </div>
        </div>
  
      
        <!-- masterclass modal ends -->


          <script>
            document.getElementById('goBackBtn').style.display = "none";
              displayLoginForm = ()=>{
                  document.getElementById('login-form').style.display = "block";
                  document.getElementById('continue-email-login-button').style.display = "none";
                  document.getElementById('continue-gmail-login-button').style.display = "none";
                  document.getElementById('goBackBtn').style.display = "block";
              }
            displayRegisterForm = ()=>{
                document.getElementById('register-form').style.display = "block";
                document.getElementById('continue-email-register-button').style.display = "none";
                document.getElementById('goBackBtn').style.display = "block";
            }
            originalLoginForm =() =>{
              document.getElementById('login-form').style.display = "none";
              document.getElementById('continue-email-login-button').style.display = "block";
              document.getElementById('continue-gmail-login-button').style.display = "block";
              document.getElementById('goBackBtn').style.display = "none";
            }
        </script>

    <script src="{{asset('assets/js/ck.js')}}"></script>
  </body>
</html>
