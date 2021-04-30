<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codekaro - Live Coding Classes learn to code like a pro</title>
    <meta name="description" content="Codekaro try to bring latest courses to students. Not only that we provide a dedicated team to answer their doubts.">

    <link rel="icon" href="{{asset('/assets/img/chrome-icon.png')}}">
    <style>
      @keyframes hideLoader{0%{ width: 100%; height: 100%; }100%{ width: 0; height: 0; }  }  body > div.loader{ position: fixed; background: white; width: 100%; height: 100%; z-index: 1071; opacity: 0; transition: opacity .5s ease; overflow: hidden; pointer-events: none; display: flex; align-items: center; justify-content: center;}body:not(.loaded) > div.loader{ opacity: 1;}body:not(.loaded){ overflow: hidden;}  body.loaded > div.loader{animation: hideLoader .5s linear .5s forwards;  } /* Typing Animation */.loading-animation {width: 6px;height: 6px;border-radius: 50%;animation: typing 1s linear infinite alternate;position: relative;left: -12px;}@keyframes typing {0% {background-color: rgba(100,100,100, 1);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 0.2);}25% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 2),24px 0px 0px 0px rgba(100,100,100, 0.2);}75% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 1);}}
    </style>
    <script type="text/javascript">
      window.addEventListener("load", function () {    document.querySelector('body').classList.add('loaded');  });
    </script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" media="all" />
    {{-- <link rel="preload" as="font" href="assets/fonts/Inter-UI-upright.var.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="assets/fonts/Inter-UI.var.woff2" type="font/woff2" crossorigin="anonymous"> --}}
  </head>

  <body>
    {{-- <div class="loader">
      <div class="loading-animation"></div>
    </div> --}}
  @yield('content')
  @auth
  {{-- <a href="#" class="btn btn-dark p-3 bg-dark btn-round btn-floating">
    <img class="icon " src="assets/img/icons/theme/communication/chat-4.svg" alt="twitter social icon" data-inject-svg />
  </a> --}}
  @endauth
    <script src="/js/app.js" defer></script>
    
  </body>
</html>
