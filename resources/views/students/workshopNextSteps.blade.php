<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Development Masterclass</title>
    <meta name="keywords" content="Get started as a front-end web developer using HTML, CSS, JavaScript and Bootstrap. The modern web development course for everyone!">
    <meta name="og:description" content="Get started as a front-end web developer using HTML, CSS, JavaScript and Bootstrap. The modern web development course for everyone!">
    <link rel="canonical" href="https://codekaro.in/web-development-live-masterclass"/>
    <link rel="icon" href="https://codekaro.in/assets/img/chrome-icon.png">
    <meta name="facebook-domain-verification" content="nlndijpgith63pnf9skj942enj02m8" />
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
  fbq('init', '438131724437018');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=438131724437018&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Meta Pixel Code -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HC9ETJV29G"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HC9ETJV29G');
    </script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/ck_light.css')}}">
    <style>

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold" href="{{url('/home')}}">Codekaro</a>
          
          
        </div>
      </nav>  
<section>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card f-1 text-center ">
                    <div class="p-3">
                        <h1 class="display-2">🎉</h1>
                      <h2 class="fs-1">Hi {!! strtok(Auth::User()->name, ' ') !!}, you have successfully enrolled for the <span class="wd_highlight1">{{$workshop->name}}</span> </h4>
                      <p class="mt-5">Next Step</p>
                      <a href="{{$workshop->groupLink}}" class="btn btn-success btn-lg py-3 px-5 rounded-pill my-2" style="background-color: #25D366; border:1px solid #25D366;">Join WhatsApp Group Now</a>
                      {{-- <a href="{{url('/home')}}" class="btn btn-dark btn-lg py-3 px-4 rounded-pill my-2" style="">2. Complete your Profile</a> --}}

                    </div>
                    <div class="cd f-1-bottom p-3">
                        you will get all the updates of assignments, upcoming classes on  the WhatsApp group, so make sure you join this without fail!
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>


    
    <section class="d-none">
        <div class="container text-center ct">
            <h1 id="headlin fw-600 mb-0">Live class is starting in</h1>
            <div id="countdown">
              <ul>
                <li><span id="days"></span>days</li>
                <li><span id="hours"></span>Hours</li>
                <li><span id="minutes"></span>Minutes</li>
                <li><span id="seconds"></span>Seconds</li>
              </ul>
            </div>
            <div id="content" class="emoji">
              <span>🥳</span>
              <span>🎉</span>
              <span>🎂</span>
              <p id="headline"></p>
            </div>
            
          </div>
  </section>


  {{-- <a href="https://wa.me/917355191435?text=Hey I have issue while enrolling in free Web Development Bootcamp" target="_blank" class="btn btn-light p-3 bg-light btn-round btn-floating" >
    <img src="{{asset('assets/img/whatsapp.7130c1f8.png')}}" alt="" height="50" width="50">
      </a> --}}

  <footer class="bd-footer p-3 p-md-5 mt-5 bg-light text-center text-sm-left">
    <div class="container">
    <ul class="bd-footer-links">
    <li><a href="https://codekaro.in/about">About</a></li>
    <li><a href="https://codekaro.in/contact">Contact</a></li>
    <li><a href="https://codekaro.in/privacy">Privacy Policy</a></li>
    </ul>
    <p>©2020-21 Codekaro All Rights Reserved.</p>
    </div>
    </footer>
    <script>
        (function () {
        const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  let birthday = "02 21, 2022 18:30:00",
      let birthday = ({{ Carbon\Carbon::parse($workshop->startDate)->format('m d, Y h:i:s') }}).toString(),
      
      countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        let now = new Date().getTime(),
            distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
          let headline = document.getElementById("headline"),
              countdown = document.getElementById("countdown"),
              content = document.getElementById("content");

          headline.innerText = "Class has Started!";
          countdown.style.display = "none";
          content.style.display = "block";

          clearInterval(x);
        }
        //seconds
      }, 0)
  }());
    </script>
    
    
</body>

</html>
