<!doctype html>
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
    
    <link href="{{asset('assets/css/theme-software-library.css')}}" rel="stylesheet" type="text/css" media="all" />
    </head>

  <body>
    <div class="loader">
      <div class="loading-animation"></div>
    </div>
  @yield('content')
 
    <script src="/js/app.js" defer></script>
    <script>
      console.log('hi');
      function loadVideo(){
        // document.getElementById('player').innerHTML = '<div id="player" class="plyr" data-plyr-provider="youtube" data-plyr-embed-id="'+videoId+'"></div>';
        document.getElementById('title').innerHTML = 'jfdkjfkdjf';
    </script>
  </body>
</html>
