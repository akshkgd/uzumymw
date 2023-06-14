
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
    <meta name="facebook-domain-verification" content="sqxnqkagio33ipi426hafktfp1x76s" />
<!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '606378664796034');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=606378664796034&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Meta Pixel Code -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-HC9ETJV29G"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HC9ETJV29G');
    </script> --}}

    <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-K8B392D');</script>
  <!-- End Google Tag Manager -->
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11206387820"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11206387820');
</script>

    <style>
      @keyframes hideLoader{0%{ width: 100%; height: 100%; }100%{ width: 0; height: 0; }  }  body > div.loader{ position: fixed; background: white; width: 100%; height: 100%; z-index: 1071; opacity: 0; transition: opacity .5s ease; overflow: hidden; pointer-events: none; display: flex; align-items: center; justify-content: center;}body:not(.loaded) > div.loader{ opacity: 1;}body:not(.loaded){ overflow: hidden;}  body.loaded > div.loader{animation: hideLoader .5s linear .5s forwards;  } /* Typing Animation */.loading-animation {width: 6px;height: 6px;border-radius: 50%;animation: typing 1s linear infinite alternate;position: relative;left: -12px;}@keyframes typing {0% {background-color: rgba(100,100,100, 1);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 0.2);}25% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 2),24px 0px 0px 0px rgba(100,100,100, 0.2);}75% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 1);}}
    </style>
    <script type="text/javascript">
      window.addEventListener("load", function () {    document.querySelector('body').classList.add('loaded');  });
    </script>
    <link rel="stylesheet" href="{{asset('assets/css/ck.css')}}" />
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    <script>
      var myModal = document.getElementById('staticBackdrop');
var modal = bootstrap.Modal.getOrCreateInstance(myModal)
modal.show()
  
    </script>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11206387820"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11206387820');
</script>
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K8B392D"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    <div class="d-none m-0 alert bg-primary text-center text-white fw-light rounded-0 border-0 smal d-non">
      New masterclasses has been launched! <a href="" class="text-white stretched-link nav-link d-inline p-0">Check Now</a> Limited seats available.
    </div>
    <div class="loader">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
    
@yield('content')

    
{{-- <script>
  (function (w, d, s, u) {
  w.gbwawc = {
  url: u,
  options: {
          waId: "+91917355191435",
          siteName: "Codekaro",
          siteTag: "Usually reply in 4 minutes",
          siteLogo: "https://waw.gallabox.com/chatbotavatars/1.png",
          widgetPosition: "RIGHT",
          triggerMessage: "",
          welcomeMessage: "Welcome to Gallabox! Convert conversations to actions...",
          brandColor: "#25D366",
          messageText: "",
          replyOptions: ['Free Masterclass','Courses',''],
      },
  };
  var h = d.getElementsByTagName(s)[0],
  j = d.createElement(s);
  j.async = true;
  j.src = u + "/whatsapp-widget.min.js?_=" + Math.random();
  h.parentNode.insertBefore(j, h);
  })(window, document, "script", "https://waw.gallabox.com");
  </script>
   --}}
        
<div class="">
  <div class="btn-g dropup d-non">
    <button type="button" class="btn btn-dark p-3 bg-light btn-round btn-floating dropdown-toggl" data-bs-toggle="dropdown" aria-expanded="false">
      ?
    </button>
    <ul class="dropdown-menu shadow">
      <!-- Dropdown menu links -->
      <li><a class="dropdown-item" href="{{url('/help')}}">Help</a></li>
      <li><a class="dropdown-item" href="https://api.whatsapp.com/send/?phone=+917355191435&text=ok" target="_blank">WhatsApp Us</a></li>
      <li><a class="dropdown-item" href="https://codekaro.freshdesk.com/support/home">Raise Ticket</a></li>
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


      {{-- enroll for course modal --}}
       
    <div class="card d-none border-none shadow p-fixe p-4 " style="position: fixed;
    z-index: 1030;
    left: 1.5rem; bottom:1.5rem; width:400px">
      <div class="d-md-flex align-items-center ">
        <img src="{{asset('assets/img/clockNudge.svg')}}" height="80" alt=""> 
      <div class="mx-2">
        
      <p style="font-size: 14px">Complete your payment now & kickstart your NTA-UGC-NET & SET Exams preparation</p>  
      <a href="" class="btn btn-primary fw-lighter px-4 rounded-pil rounded" style="border-radius: 9px !important;">Enroll Now</a>
      {{-- <a href="" class="btn btn-outline-dark">View Details</a> --}}
      </div>  
      </div>
    </div>
      {{-- enroll for course modal ends --}}
      
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
                <a href="{{ url('/redirect') }}" class="w-100 mb-3 btn btn-lg rounded-pill fw-light btn-primary " style="font-size: 16px; padding: 10px 0;" id="continue-gmail-login-button" type="submit">Continue with Google</a>
                <button class="w-100 mb-2 btn btn-lg rounded-pill btn-outline-muted text-dark" style="font-size: 16px; padding: 10px 0;" onclick="displayLoginForm()" id="continue-email-login-button" style="border-radius: 33px;">Continue with Email</button>
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
<button type="button" id="e" class="d-none" data-bs-toggle="modal" data-bs-target="#enroll">
  
</button>
    <script src="{{asset('js/codekaro.js')}}"></script>
    <script>
      // document.getElementById('e').click();
      // document.getElementById('enroll').style.display = "block";
    </script>
  </body>
</html>
