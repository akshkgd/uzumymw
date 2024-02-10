
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
</script><script type="text/javascript">
    window.addEventListener("load", function () {    document.querySelector('body').classList.add('loaded');  });
  </script>
  {{-- <link rel="stylesheet" href="{{asset('assets/css/ck.css')}}" /> --}}
  <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
  
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11206387820"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'AW-11206387820');
</script>
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<script>
  WebFontConfig = {
    google: { families: ['Poppins:400,600,700&display=swap'] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
    wf.async = 'true';
    document.head.appendChild(wf);
  })();
</script>


    <style>
        .modal {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1055;
    display: none;
    width: 100%;
    height: 100%;
    overflow-x: hidden;
    overflow-y: auto;
    outline: 0;
}
.modal-dialog {
    position: relative;
    width: auto;
    margin: 0.5rem;
    pointer-events: none;
}
.modal.fade .modal-dialog {
    transition: transform 0.3s ease-out;
    transform: translate(0, -50px);
}
@media (prefers-reduced-motion: reduce) {
    .modal.fade .modal-dialog {
        transition: none;
    }
}
.modal.show .modal-dialog {
    transform: none;
}
.modal.modal-static .modal-dialog {
    transform: scale(1.02);
}
.modal-dialog-scrollable {
    height: calc(100% - 1rem);
}
.modal-dialog-scrollable .modal-content {
    max-height: 100%;
    overflow: hidden;
}
.modal-dialog-scrollable .modal-body {
    overflow-y: auto;
}
.modal-dialog-centered {
    display: flex;
    align-items: center;
    min-height: calc(100% - 1rem);
}
.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid none;
    border-radius: 22px;
    outline: 0;
}
.modal-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1050;
    width: 100vw;
    height: 100vh;
    background-color: #000;
}
.modal-backdrop.fade {
    opacity: 0;
}
.modal-backdrop.show {
    opacity: 0.5;
}
        * {
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }
        .recording-container {
            padding: 1rem 0.75rem;
            border: 1px solid lightgray;
            display: flex;
        }

        .recording-container p {
            margin: 0;
        }

        input {
            border-radius: 12px !important;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #efa30e;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            position: relative;
            overflow: hidden;
            animation: gradientAnimation 3s infinite linear;
        }

        .enrollment-button {
            background-image: linear-gradient(99deg, rgb(247, 69, 48), rgb(255, 50, 120));
            /* background-image: linear-gradient(99deg, rgb(0, 184, 46), rgb(0, 224, 134)); */
            border: none;
            color: white;
            padding: 16px !important;
            width: 100%;
            font-weight: 400 !important;
            display: inline-block;
            cursor: pointer;
            font-size: 18px;
            font-weight: bolder;
            border-radius: 12px;
            margin: 1px 0 0 0;
        }

        @keyframes shakeAnimation {

            0%,
            100% {
                transform: translateX(0);
            }

            10%,
            30%,
            50%,
            70%,
            90% {
                transform: translateX(-5px);
            }

            20%,
            40%,
            60%,
            80% {
                transform: translateX(5px);
            }
        }

        .button.shake {
            animation: shakeAnimation 0.3s linear;
        }

        @media(max-width:586px) {
            .modal-dialog {
                align-items: end !important;
            }

            .modal-dialog-centered {
                align-items: end !important;
            }

            .m-cta {
                display: flex;
                justify-content: space-between;
                padding: 10px 16px;
                width: 100%;
                background-color: #fff;
                position: fixed;
                bottom: 0;
                background-color: #272727
            }

            .btn-floating {
                display: none !important;
            }

            .ck-btn {
                display: none;
            }

            .l-cta {
                display: none;
            }
        }

        @media(min-width:586px) {
            .modal-dialog {
                align-items: center !important;
            }

            .modal-dialog-centered {
                align-items: center !important;
            }

            .m-cta {
                display: none;
            }

            .l-cta {
                display: block;
            }

            .ck-btn {

                background-image: linear-gradient(99deg, rgb(247, 69, 48), rgb(255, 50, 120));
                border: 1px solid transparent;
                border: none;
                text-decoration: none;
                color: white;
                padding: 12px 46px !important;
                font-weight: 400;
                display: inline-block;
                cursor: pointer;
                font-size: 16px;
                border-radius: 100px;
                /* box-shadow: rgb(247 123 155 / 71%) 0px 3px 16px 0px; */
            }
        }

        .bg-dark {
            background-color: #272727 !important;
            border-radius: 16px;
            padding: 16px
        }

        .js-player {
            color: inherit !important;
        }

        .ck-btn:focus {
            outline: none !important;
            box-shadow: none;
        }

        .razorpay-payment-button {
            /* background-image: linear-gradient(99deg, rgb(247, 69, 48), rgb(255, 50, 120)); */
            /* background-image: linear-gradient(99deg, rgb(10, 255, 2), rgb(0, 255, 153)); */
            background-color: rgb(25, 208, 124);
            ;
            text-decoration: none;
            border: none;
            color: white;
            padding: 16px !important;
            width: 100%;
            font-weight: 400;
            display: inline-block;
            cursor: pointer;
            font-size: 22px;
            font-weight: bolder;
            border-radius: 16px;
            margin: 20px 0 0 0;
        }

        .razorpay-payment-button:hover {
            color: white !important;
        }



        .avatar-sm-sm {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .project {
            padding: 0 40px;

        }

        @media(max-width: 586px) {
            .text-sm-center {
                text-align: center !important;
            }
        }

        @media(min-width: 586px) {
            .text-sm-center {
                text-align: left !important;
            }
        }

        .card-dark {
            background-color: #464646;;
            border-radius: 12px;
            padding: 10px;
        }

        .gray-tag {
            background-color: rgb(235, 213, 255);
            display: inline-block;
            color: blueviolet !important;
            font-size: 18px;
            padding: 5px 30px;
            border-radius: 100px;
            font-weight: 400;
            margin: 20px 0 0 0;
        }

        .text-light {
            color: #fff !important;
        }

        .white {
            color: white !important;
        }

        .plyr--video {
            border-radius: 16px
        }

        .you-checkbox-item {
            box-shadow: none;
            cursor: pointer;
            background-color: #fff;
            border: 1px solid rgb(255 141 0 / 30%);
            margin-bottom: 10px;
            border-radius: 16px;
            justify-content: center;
            align-items: flex-start;
            padding-top: 12px;
            padding-bottom: 12px;
            padding-left: 15px;
            display: flex;
        }

        .green {
            box-shadow: none;
            cursor: pointer;
            background-color: #fff;
            border: 1px solid rgb(0, 255, 60 / 30%);
            margin-bottom: 10px;
            border-radius: 16px;
            justify-content: center;
            align-items: flex-start;
            padding-top: 12px;
            padding-bottom: 12px;
            padding-left: 15px;
            display: flex;
        }

        .you-checkbox {
            width: 40px;
            height: 40px;
            background-color: #fff;
            background-image: linear-gradient(125deg, #fab804, #e28c19);
            border-radius: 8px;
            flex: none;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .you-checkbox-green {
            width: 40px;
            height: 40px;
            background-color: #fff !important;
            background-image: linear-gradient(125deg, #29cf84, #00fd8b) !important;
            border-radius: 8px;
            flex: none;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .you-checkbox-check {
            width: 38px;
            height: 36px;
            cursor: pointer;
            background-color: #fff;
            border-radius: 6px;
            flex: 0 36px;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .you-checkbox-text {
            cursor: pointer;
            flex: 0 auto;
            margin-left: 10px;
            margin-right: 20px;
            font-size: 16px;
            font-weight: 500;
        }

        .shadow-card {
            border: 1px solid gray;
            border-radius: 14px;
            padding: 12px;
            box-shadow: 6px 6px 0 -2px #000;
        }

        .day {
            background-color: #fab804;
            padding: 4px 24px;
            display: inline-block;
            border-radius: 40px;
            border: 1px solid black;
            margin-bottom: 20px;
        }

        .item::before {
            content: url({{ asset('assets/img/arrow2.svg') }});
            width: 100px;
            height: 40px;
        }

        .you-checkbox-check-tick {
            display: none;
        }

        .you-checkbox-item.checked .you-checkbox-check-tick {
            display: block;
        }
        .animate-text {
            overflow: hidden;
            white-space: nowrap;
            display: flex;
            gap: 50px;
            align-items:center;
            height:50px;
            background-color: #efa30e;
            color:#030a21;
            /* color: white !important; */
        }
        .animate-text p{
            margin: 0
        }
        .accordion-body {
            padding: 1rem 1.25rem;
                background-color: white;!important
            }

.animated-text {
    /* color:  !important; */
    animation-name: slideRightToLeft;
    animation-duration: 8s;
    animation-iteration-count: infinite;
    animation-timing-function: linear !important;
}

@keyframes slideRightToLeft {
  0% {
    transform: translateX(100%);
  }
  100% {
    transform: translateX(-100%);
  }
}
/*! CSS Used from: Embedded */
*{-webkit-font-smoothing:antialiased!important;-moz-osx-font-smoothing:grayscale!important;}
input{border-radius:12px!important;}
.button{display:inline-block;padding:10px 20px;background-color:#efa30e;border-radius:12px;border:none;cursor:pointer;font-size:16px;position:relative;overflow:hidden;animation:gradientAnimation 3s infinite linear;}
.enrollment-button{background-image:linear-gradient(99deg, rgb(247, 69, 48), rgb(255, 50, 120));border:none;color:white;padding:16px!important;width:100%;font-weight:400!important;display:inline-block;cursor:pointer;font-size:18px;font-weight:bolder;border-radius:12px;margin:1px 0 0 0;}
@media (max-width:586px){
.modal-dialog{align-items:end!important;}
.modal-dialog-centered{align-items:end!important;}
.m-cta{display:flex;justify-content:space-between;padding:10px 16px;width:100%;background-color:#fff;position:fixed;bottom:0;background-color:#272727;}
.btn-floating{display:none!important;}
.ck-btn{display:none;}
.l-cta{display:none;}
}
@media (min-width:586px){
.modal-dialog{align-items:center!important;}
.modal-dialog-centered{align-items:center!important;}
.m-cta{display:none;}
.l-cta{display:block;}
.ck-btn{background-image:linear-gradient(99deg, rgb(247, 69, 48), rgb(255, 50, 120));border:1px solid transparent;border:none;text-decoration:none;color:white;padding:12px 46px!important;font-weight:400;display:inline-block;cursor:pointer;font-size:16px;border-radius:100px;}
}
.bg-dark{background-color:#272727!important;border-radius:16px;padding:16px;}
.ck-btn:focus{outline:none!important;box-shadow:none;}
.avatar-sm-sm{width:50px;height:50px;border-radius:50%;}
.card-dark{background-color:#464646;;             border-radius:12px;padding:10px;}
.text-light{color:#fff!important;}
.white{color:white!important;}
.you-checkbox-item{box-shadow:none;cursor:pointer;background-color:#fff;border:1px solid rgb(255 141 0 / 30%);margin-bottom:10px;border-radius:16px;justify-content:center;align-items:flex-start;padding-top:12px;padding-bottom:12px;padding-left:15px;display:flex;}
.you-checkbox{width:40px;height:40px;background-color:#fff;background-image:linear-gradient(125deg, #fab804, #e28c19);border-radius:8px;flex:none;justify-content:center;align-items:center;display:flex;}
.you-checkbox-green{width:40px;height:40px;background-color:#fff!important;background-image:linear-gradient(125deg, #29cf84, #00fd8b)!important;border-radius:8px;flex:none;justify-content:center;align-items:center;display:flex;}
.you-checkbox-check{width:38px;height:36px;cursor:pointer;background-color:#fff;border-radius:6px;flex:0 36px;justify-content:center;align-items:center;display:flex;}
.you-checkbox-text{cursor:pointer;flex:0 auto;margin-left:10px;margin-right:20px;font-size:16px;font-weight:500;}
.shadow-card{border:1px solid gray;border-radius:14px;padding:12px;box-shadow:6px 6px 0 -2px #000;}
.day{background-color:#fab804;padding:4px 24px;display:inline-block;border-radius:40px;border:1px solid black;margin-bottom:20px;}
.you-checkbox-check-tick{display:none;}
.animate-text{overflow:hidden;white-space:nowrap;display:flex;gap:50px;align-items:center;height:50px;background-color:#efa30e;color:#030a21;}
.animate-text p{margin:0;}
.accordion-body{padding:1rem 1.25rem;background-color:white;}
.animated-text{animation-name:slideRightToLeft;animation-duration:8s;animation-iteration-count:infinite;animation-timing-function:linear!important;}
*{-webkit-font-smoothing:antialiased!important;-moz-osx-font-smoothing:grayscale!important;}
input{border-radius:12px!important;}
.button{display:inline-block;padding:10px 20px;background-color:#efa30e;border-radius:12px;border:none;cursor:pointer;font-size:16px;position:relative;overflow:hidden;animation:gradientAnimation 3s infinite linear;}
.enrollment-button{background-image:linear-gradient(99deg, rgb(247, 69, 48), rgb(255, 50, 120));border:none;color:white;padding:16px!important;width:100%;font-weight:400!important;display:inline-block;cursor:pointer;font-size:18px;font-weight:bolder;border-radius:12px;margin:1px 0 0 0;}
@media (max-width:586px){
.modal-dialog{align-items:end!important;}
.modal-dialog-centered{align-items:end!important;}
.m-cta{display:flex;justify-content:space-between;padding:10px 16px;width:100%;background-color:#fff;position:fixed;bottom:0;background-color:#272727;}
.btn-floating{display:none!important;}
.ck-btn{display:none;}
.l-cta{display:none;}
}
@media (min-width:586px){
.modal-dialog{align-items:center!important;}
.modal-dialog-centered{align-items:center!important;}
.m-cta{display:none;}
.l-cta{display:block;}
.ck-btn{background-image:linear-gradient(99deg, rgb(247, 69, 48), rgb(255, 50, 120));border:1px solid transparent;border:none;text-decoration:none;color:white;padding:12px 46px!important;font-weight:400;display:inline-block;cursor:pointer;font-size:16px;border-radius:100px;}
}
.bg-dark{background-color:#272727!important;border-radius:16px;padding:16px;}
.ck-btn:focus{outline:none!important;box-shadow:none;}
.avatar-sm-sm{width:50px;height:50px;border-radius:50%;}
.card-dark{background-color:#464646;;             border-radius:12px;padding:10px;}
.text-light{color:#fff!important;}
.white{color:white!important;}
.you-checkbox-item{box-shadow:none;cursor:pointer;background-color:#fff;border:1px solid rgb(255 141 0 / 30%);margin-bottom:10px;border-radius:16px;justify-content:center;align-items:flex-start;padding-top:12px;padding-bottom:12px;padding-left:15px;display:flex;}
.you-checkbox{width:40px;height:40px;background-color:#fff;background-image:linear-gradient(125deg, #fab804, #e28c19);border-radius:8px;flex:none;justify-content:center;align-items:center;display:flex;}
.you-checkbox-green{width:40px;height:40px;background-color:#fff!important;background-image:linear-gradient(125deg, #29cf84, #00fd8b)!important;border-radius:8px;flex:none;justify-content:center;align-items:center;display:flex;}
.you-checkbox-check{width:38px;height:36px;cursor:pointer;background-color:#fff;border-radius:6px;flex:0 36px;justify-content:center;align-items:center;display:flex;}
.you-checkbox-text{cursor:pointer;flex:0 auto;margin-left:10px;margin-right:20px;font-size:16px;font-weight:500;}
.shadow-card{border:1px solid gray;border-radius:14px;padding:12px;box-shadow:6px 6px 0 -2px #000;}
.day{background-color:#fab804;padding:4px 24px;display:inline-block;border-radius:40px;border:1px solid black;margin-bottom:20px;}
.you-checkbox-check-tick{display:none;}
.animate-text{overflow:hidden;white-space:nowrap;display:flex;gap:50px;align-items:center;height:50px;background-color:#efa30e;color:#030a21;}
.animate-text p{margin:0;}
.accordion-body{padding:1rem 1.25rem;background-color:white;}
.animated-text{animation-name:slideRightToLeft;animation-duration:8s;animation-iteration-count:infinite;animation-timing-function:linear!important;}
body > div.loader{position:fixed;background:white;width:100%;height:100%;z-index:1071;opacity:0;transition:opacity .5s ease;overflow:hidden;pointer-events:none;display:flex;align-items:center;justify-content:center;}
body.loaded > div.loader{animation:hideLoader .5s linear .5s forwards;}
.f-2{background-color:#e7f3ff;border:none!important;border-radius:16px;}
.f-3{background-color:#fde7ea;border:none!important;border-radius:16px;}
.f-4{background-color:#e7f9e7;border:none!important;border-radius:16px;}
.f-5{background-color:#eff2ff;border:none!important;border-radius:16px;}
*,*::before,*::after{box-sizing:border-box;}
body{margin:0;font-family:var(--bs-body-font-family);font-size:var(--bs-body-font-size);font-weight:var(--bs-body-font-weight);line-height:var(--bs-body-line-height);color:var(--bs-body-color);text-align:var(--bs-body-text-align);background-color:var(--bs-body-bg);-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);}
h1,h2,h3,h4,h5{margin-top:0;margin-bottom:0.5rem;font-weight:500;line-height:1.2;}
h1{font-size:calc(1.375rem + 1.5vw);}
@media (min-width: 1200px){
h1{font-size:2.5rem;}
}
h2{font-size:calc(1.325rem + 0.9vw);}
@media (min-width: 1200px){
h2{font-size:2rem;}
}
h3{font-size:calc(1.3rem + 0.6vw);}
@media (min-width: 1200px){
h3{font-size:1.75rem;}
}
h4{font-size:calc(1.275rem + 0.3vw);}
@media (min-width: 1200px){
h4{font-size:1.5rem;}
}
h5{font-size:1.25rem;}
p{margin-top:0;margin-bottom:1rem;}
ul{padding-left:2rem;}
ul{margin-top:0;margin-bottom:1rem;}
strong{font-weight:bolder;}
small,.small{font-size:0.875em;}
a{color:#0d6efd;text-decoration:underline;}
a:hover{color:#0a58ca;}
img,svg{vertical-align:middle;}
label{display:inline-block;}
button{border-radius:0;}
button:focus:not(:focus-visible){outline:0;}
input,button{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
button{text-transform:none;}
button,[type="button"],[type="submit"]{-webkit-appearance:button;}
button:not(:disabled),[type="button"]:not(:disabled),[type="submit"]:not(:disabled){cursor:pointer;}
iframe{border:0;}
.display-3{font-size:calc(1.525rem + 3.3vw);font-weight:300;line-height:1.2;}
@media (min-width: 1200px){
.display-3{font-size:4rem;}
}
.display-6{font-size:calc(1.375rem + 1.5vw);font-weight:300;line-height:1.2;}
@media (min-width: 1200px){
.display-6{font-size:2.5rem;}
}
.container{width:100%;padding-right:var(--bs-gutter-x, 0.75rem);padding-left:var(--bs-gutter-x, 0.75rem);margin-right:auto;margin-left:auto;}
@media (min-width: 576px){
.container{max-width:540px;}
}
@media (min-width: 768px){
.container{max-width:720px;}
}
@media (min-width: 992px){
.container{max-width:960px;}
}
@media (min-width: 1200px){
.container{max-width:1140px;}
}
@media (min-width: 1400px){
.container{max-width:1320px;}
}
.row{--bs-gutter-x:1.5rem;--bs-gutter-y:0;display:flex;flex-wrap:wrap;margin-top:calc(var(--bs-gutter-y) * -1);margin-right:calc(var(--bs-gutter-x) * -.5);margin-left:calc(var(--bs-gutter-x) * -.5);}
.row > *{flex-shrink:0;width:100%;max-width:100%;padding-right:calc(var(--bs-gutter-x) * .5);padding-left:calc(var(--bs-gutter-x) * .5);margin-top:var(--bs-gutter-y);}
.col-6{flex:0 0 auto;width:50%;}
@media (min-width: 768px){
.col-md-4{flex:0 0 auto;width:33.33333333%;}
.col-md-5{flex:0 0 auto;width:41.66666667%;}
.col-md-7{flex:0 0 auto;width:58.33333333%;}
.col-md-8{flex:0 0 auto;width:66.66666667%;}
.col-md-10{flex:0 0 auto;width:83.33333333%;}
.col-md-12{flex:0 0 auto;width:100%;}
}
@media (min-width: 992px){
.col-lg-5{flex:0 0 auto;width:41.66666667%;}
.col-lg-10{flex:0 0 auto;width:83.33333333%;}
}
.form-control{display:block;width:100%;padding:0.375rem 0.75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;appearance:none;border-radius:0.25rem;transition:border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;}
@media (prefers-reduced-motion: reduce){
.form-control{transition:none;}
}
.form-control:focus{color:#212529;background-color:#fff;border-color:#86b7fe;outline:0;box-shadow:0 0 0 0.25rem rgba(13, 110, 253, 0.25);}
.form-control::placeholder{color:#6c757d;opacity:1;}
.form-control:disabled{background-color:#e9ecef;opacity:1;}
.form-floating{position:relative;}
.form-floating > .form-control{height:calc(3.5rem + 2px);line-height:1.25;}
.form-floating > label{position:absolute;top:0;left:0;height:100%;padding:1rem 0.75rem;pointer-events:none;border:1px solid transparent;transform-origin:0 0;transition:opacity 0.1s ease-in-out, transform 0.1s ease-in-out;}
@media (prefers-reduced-motion: reduce){
.form-floating > label{transition:none;}
}
.form-floating > .form-control{padding:1rem 0.75rem;}
.form-floating > .form-control::placeholder{color:transparent;}
.form-floating > .form-control:focus,.form-floating > .form-control:not(:placeholder-shown){padding-top:1.625rem;padding-bottom:0.625rem;}
.form-floating > .form-control:focus ~ label,.form-floating > .form-control:not(:placeholder-shown) ~ label{opacity:0.65;transform:scale(0.85) translateY(-0.5rem) translateX(0.15rem);}
.btn{display:inline-block;font-weight:400;line-height:1.5;color:#212529;text-align:center;text-decoration:none;vertical-align:middle;cursor:pointer;user-select:none;background-color:transparent;border:1px solid transparent;padding:0.375rem 0.75rem;font-size:1rem;border-radius:0.25rem;transition:color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;}
@media (prefers-reduced-motion: reduce){
.btn{transition:none;}
}
.btn:hover{color:#212529;}
.btn:focus{outline:0;box-shadow:0 0 0 0.25rem rgba(13, 110, 253, 0.25);}
.btn:disabled{pointer-events:none;opacity:0.65;}
.btn-primary{color:#fff;background-color:#0066ff;border-color:#0066ff;}
.btn-primary:hover{color:#fff;background-color:#0057d9;border-color:#0052cc;}
.btn-primary:focus{color:#fff;background-color:#0057d9;border-color:#0052cc;box-shadow:0 0 0 0.25rem rgba(38, 125, 255, 0.5);}
.btn-primary:active{color:#fff;background-color:#0052cc;border-color:#004dbf;}
.btn-primary:active:focus{box-shadow:0 0 0 0.25rem rgba(38, 125, 255, 0.5);}
.btn-primary:disabled{color:#fff;background-color:#0066ff;border-color:#0066ff;}
.btn-dark{color:#fff;background-color:#000000;border-color:#000000;}
.btn-dark:hover{color:#fff;background-color:black;border-color:black;}
.btn-dark:focus{color:#fff;background-color:black;border-color:black;box-shadow:0 0 0 0.25rem rgba(38, 38, 38, 0.5);}
.btn-dark:active{color:#fff;background-color:black;border-color:black;}
.btn-dark:active:focus{box-shadow:0 0 0 0.25rem rgba(38, 38, 38, 0.5);}
.btn-dark:disabled{color:#fff;background-color:#000000;border-color:#000000;}
.btn-outline-dark{color:#000000;border-color:#000000;}
.btn-outline-dark:hover{color:#fff;background-color:#000000;border-color:#000000;}
.btn-outline-dark:focus{box-shadow:0 0 0 0.25rem rgba(0, 0, 0, 0.5);}
.btn-outline-dark:active{color:#fff;background-color:#000000;border-color:#000000;}
.btn-outline-dark:active:focus{box-shadow:0 0 0 0.25rem rgba(0, 0, 0, 0.5);}
.btn-outline-dark:disabled{color:#000000;background-color:transparent;}
.btn-outline-muted{color:#b6b6b6;border-color:#b6b6b6;}
.btn-outline-muted:hover{color:#000;background-color:#b6b6b6;border-color:#b6b6b6;}
.btn-outline-muted:focus{box-shadow:0 0 0 0.25rem rgba(182, 182, 182, 0.5);}
.btn-outline-muted:active{color:#000;background-color:#b6b6b6;border-color:#b6b6b6;}
.btn-outline-muted:active:focus{box-shadow:0 0 0 0.25rem rgba(182, 182, 182, 0.5);}
.btn-outline-muted:disabled{color:#b6b6b6;background-color:transparent;}
.btn-lg{padding:0.5rem 1rem;font-size:1.25rem;border-radius:0.3rem;}
.collapse:not(.show){display:none;}
.dropup{position:relative;}
.dropdown-menu{position:absolute;z-index:1000;display:none;min-width:10rem;padding:0.5rem 0;margin:0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid none;border-radius:12px;}
.dropdown-item{display:block;width:100%;padding:0.65625rem 1rem;clear:both;font-weight:400;color:#212529;text-align:inherit;text-decoration:none;white-space:nowrap;background-color:transparent;border:0;}
.dropdown-item:hover,.dropdown-item:focus{color:#1e2125;background-color:#f1f1f1;}
.dropdown-item:active{color:#fff;text-decoration:none;background-color:#0d6efd;}
.dropdown-item:disabled{color:#adb5bd;pointer-events:none;background-color:transparent;}
.nav-link{display:block;padding:0.5rem 1rem;color:#0d6efd;text-decoration:none;transition:color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;}
@media (prefers-reduced-motion: reduce){
.nav-link{transition:none;}
}
.nav-link:hover,.nav-link:focus{color:#0a58ca;}
.navbar{position:relative;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;padding-top:0.5rem;padding-bottom:0.5rem;}
.card{position:relative;display:flex;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0, 0, 0, 0.125);border-radius:12px;}
.accordion-button{position:relative;display:flex;align-items:center;width:100%;padding:1rem 1.25rem;font-size:1rem;color:#212529;text-align:left;background-color:#fff;border:0;border-radius:0;overflow-anchor:none;transition:color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;}
@media (prefers-reduced-motion: reduce){
.accordion-button{transition:none;}
}
.accordion-button::after{flex-shrink:0;width:1.25rem;height:1.25rem;margin-left:auto;content:"";background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");background-repeat:no-repeat;background-size:1.25rem;transition:transform 0.2s ease-in-out;}
@media (prefers-reduced-motion: reduce){
.accordion-button::after{transition:none;}
}
.accordion-button:hover{z-index:2;}
.accordion-button:focus{z-index:3;border-color:white;outline:0;box-shadow:white;}
.accordion-header{margin-bottom:0;}
.accordion-item{background-color:#fff;border:1px solid rgba(0, 0, 0, 0.125);}
.accordion-item:first-of-type{border-top-left-radius:12px;border-top-right-radius:12px;}
.accordion-item:first-of-type .accordion-button{border-top-left-radius:11px;border-top-right-radius:11px;}
.accordion-item:last-of-type{border-bottom-right-radius:12px;border-bottom-left-radius:12px;}
.accordion-item:last-of-type .accordion-button.collapsed{border-bottom-right-radius:11px;border-bottom-left-radius:11px;}
.accordion-item:last-of-type .accordion-collapse{border-bottom-right-radius:12px;border-bottom-left-radius:12px;}
.accordion-body{padding:1rem 1.25rem;}
.alert{position:relative;padding:1rem 1rem;margin-bottom:1rem;border:1px solid transparent;border-radius:0.25rem;}
.btn-close{box-sizing:content-box;width:1em;height:1em;padding:0.25em 0.25em;color:#000;background:transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;border:0;border-radius:0.25rem;opacity:0.5;}
.btn-close:hover{color:#000;text-decoration:none;opacity:0.75;}
.btn-close:focus{outline:0;box-shadow:0 0 0 0.25rem rgba(13, 110, 253, 0.25);opacity:1;}
.btn-close:disabled{pointer-events:none;user-select:none;opacity:0.25;}
.modal{position:fixed;top:0;left:0;z-index:1055;display:none;width:100%;height:100%;overflow-x:hidden;overflow-y:auto;outline:0;}
.modal-dialog{position:relative;width:auto;margin:0.5rem;pointer-events:none;}
.modal-dialog-centered{display:flex;align-items:center;min-height:calc(100% - 1rem);}
.modal-content{position:relative;display:flex;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:1px solid none;border-radius:22px;outline:0;}
.modal-header{display:flex;flex-shrink:0;align-items:center;justify-content:space-between;padding:1rem 1rem;border-bottom:1px solid #dee2e6;border-top-left-radius:21px;border-top-right-radius:21px;}
.modal-header .btn-close{padding:0.5rem 0.5rem;margin:-0.5rem -0.5rem -0.5rem auto;}
.modal-body{position:relative;flex:1 1 auto;padding:1rem;}
@media (min-width: 576px){
.modal-dialog{max-width:500px;margin:1.75rem auto;}
.modal-dialog-centered{min-height:calc(100% - 3.5rem);}
}
.spinner-border{display:inline-block;width:2rem;height:2rem;vertical-align:-0.125em;border:0.25em solid currentColor;border-right-color:transparent;border-radius:50%;animation:0.75s linear infinite spinner-border;}
@media (prefers-reduced-motion: reduce){
.spinner-border{animation-duration:1.5s;}
}
.visually-hidden{position:absolute!important;width:1px!important;height:1px!important;padding:0!important;margin:-1px!important;overflow:hidden!important;clip:rect(0, 0, 0, 0)!important;white-space:nowrap!important;border:0!important;}
.stretched-link::after{position:absolute;top:0;right:0;bottom:0;left:0;z-index:1;content:"";}
.d-inline{display:inline!important;}
.d-inline-block{display:inline-block!important;}
.d-block{display:block!important;}
.d-flex{display:flex!important;}
.d-none{display:none!important;}
.shadow{box-shadow:0 0.5rem 1rem rgba(0, 0, 0, 0.15)!important;}
.border-0{border:0!important;}
.border-bottom-0{border-bottom:0!important;}
.w-100{width:100%!important;}
.justify-content-center{justify-content:center!important;}
.justify-content-between{justify-content:space-between!important;}
.justify-content-around{justify-content:space-around!important;}
.align-items-center{align-items:center!important;}
.order-1{order:1!important;}
.order-2{order:2!important;}
.order-3{order:3!important;}
.m-0{margin:0!important;}
.mx-2{margin-right:0.5rem!important;margin-left:0.5rem!important;}
.my-2{margin-top:0.5rem!important;margin-bottom:0.5rem!important;}
.my-3{margin-top:1rem!important;margin-bottom:1rem!important;}
.my-5{margin-top:3rem!important;margin-bottom:3rem!important;}
.mt-0{margin-top:0!important;}
.mt-1{margin-top:0.25rem!important;}
.mt-2{margin-top:0.5rem!important;}
.mt-3{margin-top:1rem!important;}
.mt-4{margin-top:1.5rem!important;}
.mt-5{margin-top:3rem!important;}
.me-3{margin-right:1rem!important;}
.mb-0{margin-bottom:0!important;}
.mb-1{margin-bottom:0.25rem!important;}
.mb-2{margin-bottom:0.5rem!important;}
.mb-3{margin-bottom:1rem!important;}
.mb-4{margin-bottom:1.5rem!important;}
.mb-5{margin-bottom:3rem!important;}
.ms-2{margin-left:0.5rem!important;}
.p-0{padding:0!important;}
.p-2{padding:0.5rem!important;}
.p-3{padding:1rem!important;}
.p-4{padding:1.5rem!important;}
.p-5{padding:3rem!important;}
.px-3{padding-right:1rem!important;padding-left:1rem!important;}
.px-4{padding-right:1.5rem!important;padding-left:1.5rem!important;}
.px-5{padding-right:3rem!important;padding-left:3rem!important;}
.py-2{padding-top:0.5rem!important;padding-bottom:0.5rem!important;}
.py-5{padding-top:3rem!important;padding-bottom:3rem!important;}
.pt-0{padding-top:0!important;}
.pt-4{padding-top:1.5rem!important;}
.pt-5{padding-top:3rem!important;}
.pb-4{padding-bottom:1.5rem!important;}
.fs-2{font-size:calc(1.325rem + 0.9vw)!important;}
.fs-3{font-size:calc(1.3rem + 0.6vw)!important;}
.fs-4{font-size:calc(1.275rem + 0.3vw)!important;}
.fs-5{font-size:1.25rem!important;}
.fs-6{font-size:1rem!important;}
.fw-light{font-weight:300!important;}
.fw-lighter{font-weight:lighter!important;}
.fw-bold{font-weight:700!important;}
.fw-bolder{font-weight:bolder!important;}
.text-center{text-align:center!important;}
.text-primary{--bs-text-opacity:1;color:rgba(var(--bs-primary-rgb), var(--bs-text-opacity))!important;}
.text-danger{--bs-text-opacity:1;color:rgba(var(--bs-danger-rgb), var(--bs-text-opacity))!important;}
.text-dark{--bs-text-opacity:1;color:rgba(var(--bs-dark-rgb), var(--bs-text-opacity))!important;}
.text-muted{--bs-text-opacity:1;color:#6c757d!important;}
.text-success{--bs-text-opacity:1;color:rgba(var(--bs-success-rgb), var(--bs-text-opacity))!important;}
.text-white{--bs-text-opacity:1;color:rgba(var(--bs-white-rgb), var(--bs-text-opacity))!important;}
.bg-primary{--bs-bg-opacity:1;background-color:rgba(var(--bs-primary-rgb), var(--bs-bg-opacity))!important;}
.bg-dark{--bs-bg-opacity:1;background-color:rgba(var(--bs-dark-rgb), var(--bs-bg-opacity))!important;}
.rounded{border-radius:0.25rem!important;}
.rounded-0{border-radius:0!important;}
.rounded-circle{border-radius:50%!important;}
.rounded-pill{border-radius:50rem!important;}
@media (min-width: 768px){
.d-md-flex{display:flex!important;}
}
@media (min-width: 992px){
.order-lg-1{order:1!important;}
.order-lg-2{order:2!important;}
.mt-lg-5{margin-top:3rem!important;}
.px-lg-5{padding-right:3rem!important;padding-left:3rem!important;}
.pt-lg-5{padding-top:3rem!important;}
}
@media (min-width: 1200px){
.fs-2{font-size:2rem!important;}
.fs-3{font-size:1.75rem!important;}
.fs-4{font-size:1.5rem!important;}
}
.btn-floating{position:fixed;z-index:1030;bottom:1.5rem;right:1.5rem;}
.btn-round{width:3rem;height:3rem;line-height:2rem;border-radius:50%;padding:0;background:#040303;display:flex;align-items:center;justify-content:center;}
#login-form{display:none;}
#register-form{display:none;}
.border-none{border:none!important;}
.fw-600{font-weight:600!important;}
.ck-rounded{border-radius:16px!important;}
.f-2{background-color:#e7f3ff;border:none!important;border-radius:16px;}
.f-3{background-color:#fde7ea;border:none!important;border-radius:16px;}
.f-4{background-color:#e7f9e7;border:none!important;border-radius:16px;}
.f-5{background-color:#eff2ff;border:none!important;border-radius:16px;}
.fb-s{background-color:#ffffff;border:none!important;border-radius:16px;}
.success-pill{background-color:#eaffea;color:rgb(44, 194, 69);border-radius:126px;display:inline-block;margin:0;padding:0;font-size:12px;padding:2px 12px;}
.small{font-size:.75rem;}
*{color:black;}
.ck-outline-btn{border:1px solid lightgrey;border-radius:22px;font-weight:400;margin-top:3px;margin-bottom:3px;}
.ck-outline-btn:hover{border:1px solid rgb(50, 122, 255);color:rgb(50, 122, 255);background-color:rgb(227, 237, 255);border-radius:22px;font-weight:400;margin-top:3px;margin-bottom:3px;}
.input-email{border:1px solid rgb(172, 172, 172);border-bottom:none;border-radius:12px 12px 0 0;padding-left:10px;margin-top:10px;}
.input-email:focus{border:2px solid black;border-radius:12px;background-color:white;box-shadow:none;}
.input-password{border:1px solid rgb(172, 172, 172);border-radius:0 0 12px 12px;padding-left:10px;}
.input-password:focus{border:2px solid black;border-radius:12px;background-color:white;box-shadow:none;}
@media all{
.volume__small-wave{animation:VOLUME_SMALL_WAVE_FLASH 2s infinite;opacity:0;}
.volume__large-wave{animation:VOLUME_LARGE_WAVE_FLASH 2s infinite .3s;opacity:0;}
}
#wistia_chrome_23 #wistia_grid_43_wrapper .w-css-reset{font-size:14px;}
#wistia_chrome_23 #wistia_grid_43_wrapper div.w-css-reset{box-sizing:inherit;box-shadow:none;color:inherit;display:block;float:none;font:inherit;font-family:inherit;font-style:normal;font-weight:normal;font-size:inherit;letter-spacing:0;line-height:inherit;margin:0;max-height:none;max-width:none;min-height:0;min-width:0;padding:0;position:static;text-decoration:none;text-transform:none;text-shadow:none;transition:none;word-wrap:normal;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-user-select:none;-webkit-font-smoothing:antialiased;}
#wistia_chrome_23 #wistia_grid_43_wrapper button.w-css-reset{box-sizing:inherit;box-shadow:none;color:inherit;display:block;float:none;font:inherit;font-family:inherit;font-style:normal;font-weight:normal;font-size:inherit;letter-spacing:0;line-height:inherit;margin:0;max-height:none;max-width:none;min-height:0;min-width:0;padding:0;position:static;text-decoration:none;text-transform:none;text-shadow:none;transition:none;word-wrap:normal;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-user-select:none;-webkit-font-smoothing:antialiased;}
#wistia_chrome_23 #wistia_grid_43_wrapper img.w-css-reset{box-sizing:inherit;box-shadow:none;color:inherit;display:block;float:none;font:inherit;font-family:inherit;font-style:normal;font-weight:normal;font-size:inherit;letter-spacing:0;line-height:inherit;margin:0;max-height:none;max-width:none;min-height:0;min-width:0;padding:0;position:static;text-decoration:none;text-transform:none;text-shadow:none;transition:none;word-wrap:normal;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-user-select:none;-webkit-font-smoothing:antialiased;}
#wistia_chrome_23 #wistia_grid_43_wrapper svg.w-css-reset{box-sizing:inherit;box-shadow:none;color:inherit;display:block;float:none;font:inherit;font-family:inherit;font-style:normal;font-weight:normal;font-size:inherit;letter-spacing:0;line-height:inherit;margin:0;max-height:none;max-width:none;min-height:0;min-width:0;padding:0;position:static;text-decoration:none;text-transform:none;text-shadow:none;transition:none;word-wrap:normal;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-user-select:none;-webkit-font-smoothing:antialiased;}
#wistia_chrome_23 #wistia_grid_43_wrapper svg.w-css-reset{display:inline;}
#wistia_chrome_23 #wistia_grid_43_wrapper button.w-css-reset{background-attachment:scroll;background-color:transparent;background-image:none;background-position:0 0;background-repeat:no-repeat;background-size:100% 100%;border:0;border-radius:0;outline:none;position:static;}
#wistia_chrome_23 #wistia_grid_43_wrapper img.w-css-reset{border:0;display:inline-block;vertical-align:top;border-radius:0;outline:none;position:static;}
#wistia_chrome_23 #wistia_grid_43_wrapper .w-css-reset-tree{font-size:14px;}
#wistia_chrome_23 #wistia_grid_43_wrapper .w-css-reset-tree div{box-sizing:inherit;box-shadow:none;color:inherit;display:block;float:none;font:inherit;font-family:inherit;font-style:normal;font-weight:normal;font-size:inherit;letter-spacing:0;line-height:inherit;margin:0;max-height:none;max-width:none;min-height:0;min-width:0;padding:0;position:static;text-decoration:none;text-transform:none;text-shadow:none;transition:none;word-wrap:normal;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-user-select:none;-webkit-font-smoothing:antialiased;}
#wistia_chrome_23 #wistia_grid_43_wrapper .w-css-reset-tree span{box-sizing:inherit;box-shadow:none;color:inherit;display:block;float:none;font:inherit;font-family:inherit;font-style:normal;font-weight:normal;font-size:inherit;letter-spacing:0;line-height:inherit;margin:0;max-height:none;max-width:none;min-height:0;min-width:0;padding:0;position:static;text-decoration:none;text-transform:none;text-shadow:none;transition:none;word-wrap:normal;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-user-select:none;-webkit-font-smoothing:antialiased;}
#wistia_chrome_23 #wistia_grid_43_wrapper .w-css-reset-tree button{box-sizing:inherit;box-shadow:none;color:inherit;display:block;float:none;font:inherit;font-family:inherit;font-style:normal;font-weight:normal;font-size:inherit;letter-spacing:0;line-height:inherit;margin:0;max-height:none;max-width:none;min-height:0;min-width:0;padding:0;position:static;text-decoration:none;text-transform:none;text-shadow:none;transition:none;word-wrap:normal;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-user-select:none;-webkit-font-smoothing:antialiased;}
#wistia_chrome_23 #wistia_grid_43_wrapper .w-css-reset-tree svg{box-sizing:inherit;box-shadow:none;color:inherit;display:block;float:none;font:inherit;font-family:inherit;font-style:normal;font-weight:normal;font-size:inherit;letter-spacing:0;line-height:inherit;margin:0;max-height:none;max-width:none;min-height:0;min-width:0;padding:0;position:static;text-decoration:none;text-transform:none;text-shadow:none;transition:none;word-wrap:normal;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-user-select:none;-webkit-font-smoothing:antialiased;}
#wistia_chrome_23 #wistia_grid_43_wrapper .w-css-reset-tree span{display:inline;}
#wistia_chrome_23 #wistia_grid_43_wrapper .w-css-reset-tree svg{display:inline;}
#wistia_chrome_23 #wistia_grid_43_wrapper .w-css-reset-tree button{background-attachment:scroll;background-color:transparent;background-image:none;background-position:0 0;background-repeat:no-repeat;background-size:100% 100%;border:0;border-radius:0;outline:none;position:static;}
#wistia_chrome_23 #wistia_grid_43_wrapper .w-css-reset-button-important{border-radius:0!important;color:#fff!important;}
#wistia_grid_43_wrapper{-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box;font-family:Arial,sans-serif;font-size:14px;height:100%;position:relative;text-align:left;width:100%;}
#wistia_grid_43_wrapper *{-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box;}
#wistia_grid_43_above{position:relative;}
#wistia_grid_43_main{display:block;height:100%;position:relative;}
#wistia_grid_43_behind{height:100%;left:0;position:absolute;top:0;width:100%;}
#wistia_grid_43_center{height:100%;overflow:hidden;position:relative;width:100%;}
#wistia_grid_43_front{display:none;height:100%;left:0;position:absolute;top:0;width:100%;}
#wistia_grid_43_top_inside{position:absolute;left:0;top:0;width:100%;}
#wistia_grid_43_top{width:100%;position:absolute;bottom:0;left:0;}
#wistia_grid_43_bottom_inside{position:absolute;left:0;bottom:0;width:100%;}
#wistia_grid_43_bottom{width:100%;position:absolute;top:0;left:0;}
#wistia_grid_43_left_inside{height:100%;position:absolute;left:0;top:0;}
#wistia_grid_43_left{height:100%;position:absolute;right:0;top:0;}
#wistia_grid_43_right_inside{height:100%;right:0;position:absolute;top:0;}
#wistia_grid_43_right{height:100%;left:0;position:absolute;top:0;}
#wistia_grid_43_below{position:relative;}
/*! CSS Used from: Embedded */
body > div.loader{position:fixed;background:white;width:100%;height:100%;z-index:1071;opacity:0;transition:opacity .5s ease;overflow:hidden;pointer-events:none;display:flex;align-items:center;justify-content:center;}
body.loaded > div.loader{animation:hideLoader .5s linear .5s forwards;}
/*! CSS Used from: http://localhost:8000/assets/css/ck.css */
.f-2{background-color:#e7f3ff;border:none!important;border-radius:16px;}
.f-3{background-color:#fde7ea;border:none!important;border-radius:16px;}
.f-4{background-color:#e7f9e7;border:none!important;border-radius:16px;}
.f-5{background-color:#eff2ff;border:none!important;border-radius:16px;}
:root{--bs-blue:#0d6efd;--bs-indigo:#6610f2;--bs-purple:#6f42c1;--bs-pink:#d63384;--bs-red:#dc3545;--bs-orange:#fd7e14;--bs-yellow:#ffc107;--bs-green:#198754;--bs-teal:#20c997;--bs-cyan:#0dcaf0;--bs-white:#fff;--bs-gray:#6c757d;--bs-gray-dark:#343a40;--bs-gray-100:#f8f9fa;--bs-gray-200:#e9ecef;--bs-gray-300:#dee2e6;--bs-gray-400:#ced4da;--bs-gray-500:#adb5bd;--bs-gray-600:#6c757d;--bs-gray-700:#495057;--bs-gray-800:#343a40;--bs-gray-900:#212529;--bs-primary:#0066ff;--bs-primary-alt:#efeaff;--bs-danger:#f21361;--bs-dark:#000000;--bs-muted:#b6b6b6;--bs-success:#17c964;--bs-primary-rgb:0, 102, 255;--bs-primary-alt-rgb:239, 234, 255;--bs-danger-rgb:242, 19, 97;--bs-dark-rgb:0, 0, 0;--bs-muted-rgb:182, 182, 182;--bs-success-rgb:23, 201, 100;--bs-white-rgb:255, 255, 255;--bs-black-rgb:0, 0, 0;--bs-body-rgb:33, 37, 41;--bs-font-sans-serif:system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";--bs-font-monospace:SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;--bs-gradient:linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));--bs-body-font-family:Poppins, sans-serif;--bs-body-font-size:1rem;--bs-body-font-weight:400;--bs-body-line-height:1.5;--bs-body-color:#212529;--bs-body-bg:#fff;}
*,*::before,*::after{box-sizing:border-box;}
@media (prefers-reduced-motion: no-preference){
:root{scroll-behavior:smooth;}
}
body{margin:0;font-family:var(--bs-body-font-family);font-size:var(--bs-body-font-size);font-weight:var(--bs-body-font-weight);line-height:var(--bs-body-line-height);color:var(--bs-body-color);text-align:var(--bs-body-text-align);background-color:var(--bs-body-bg);-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);}
h1,h2,h3,h4,h5{margin-top:0;margin-bottom:0.5rem;font-weight:500;line-height:1.2;}
h1{font-size:calc(1.375rem + 1.5vw);}
@media (min-width: 1200px){
h1{font-size:2.5rem;}
}
h2{font-size:calc(1.325rem + 0.9vw);}
@media (min-width: 1200px){
h2{font-size:2rem;}
}
h3{font-size:calc(1.3rem + 0.6vw);}
@media (min-width: 1200px){
h3{font-size:1.75rem;}
}
h4{font-size:calc(1.275rem + 0.3vw);}
@media (min-width: 1200px){
h4{font-size:1.5rem;}
}
h5{font-size:1.25rem;}
p{margin-top:0;margin-bottom:1rem;}
ul{padding-left:2rem;}
ul{margin-top:0;margin-bottom:1rem;}
strong{font-weight:bolder;}
small,.small{font-size:0.875em;}
a{color:#0d6efd;text-decoration:underline;}
a:hover{color:#0a58ca;}
img,svg{vertical-align:middle;}
label{display:inline-block;}
button{border-radius:0;}
button:focus:not(:focus-visible){outline:0;}
input,button{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
button{text-transform:none;}
button,[type="button"],[type="submit"]{-webkit-appearance:button;}
button:not(:disabled),[type="button"]:not(:disabled),[type="submit"]:not(:disabled){cursor:pointer;}
iframe{border:0;}
.display-3{font-size:calc(1.525rem + 3.3vw);font-weight:300;line-height:1.2;}
@media (min-width: 1200px){
.display-3{font-size:4rem;}
}
.display-6{font-size:calc(1.375rem + 1.5vw);font-weight:300;line-height:1.2;}
@media (min-width: 1200px){
.display-6{font-size:2.5rem;}
}
.container{width:100%;padding-right:var(--bs-gutter-x, 0.75rem);padding-left:var(--bs-gutter-x, 0.75rem);margin-right:auto;margin-left:auto;}
@media (min-width: 576px){
.container{max-width:540px;}
}
@media (min-width: 768px){
.container{max-width:720px;}
}
@media (min-width: 992px){
.container{max-width:960px;}
}
@media (min-width: 1200px){
.container{max-width:1140px;}
}
@media (min-width: 1400px){
.container{max-width:1320px;}
}
.row{--bs-gutter-x:1.5rem;--bs-gutter-y:0;display:flex;flex-wrap:wrap;margin-top:calc(var(--bs-gutter-y) * -1);margin-right:calc(var(--bs-gutter-x) * -.5);margin-left:calc(var(--bs-gutter-x) * -.5);}
.row > *{flex-shrink:0;width:100%;max-width:100%;padding-right:calc(var(--bs-gutter-x) * .5);padding-left:calc(var(--bs-gutter-x) * .5);margin-top:var(--bs-gutter-y);}
.col-6{flex:0 0 auto;width:50%;}
@media (min-width: 768px){
.col-md-4{flex:0 0 auto;width:33.33333333%;}
.col-md-5{flex:0 0 auto;width:41.66666667%;}
.col-md-7{flex:0 0 auto;width:58.33333333%;}
.col-md-8{flex:0 0 auto;width:66.66666667%;}
.col-md-10{flex:0 0 auto;width:83.33333333%;}
.col-md-12{flex:0 0 auto;width:100%;}
}
@media (min-width: 992px){
.col-lg-5{flex:0 0 auto;width:41.66666667%;}
.col-lg-10{flex:0 0 auto;width:83.33333333%;}
}
.form-control{display:block;width:100%;padding:0.375rem 0.75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;appearance:none;border-radius:0.25rem;transition:border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;}
@media (prefers-reduced-motion: reduce){
.form-control{transition:none;}
}
.form-control:focus{color:#212529;background-color:#fff;border-color:#86b7fe;outline:0;box-shadow:0 0 0 0.25rem rgba(13, 110, 253, 0.25);}
.form-control::placeholder{color:#6c757d;opacity:1;}
.form-control:disabled{background-color:#e9ecef;opacity:1;}
.form-floating{position:relative;}
.form-floating > .form-control{height:calc(3.5rem + 2px);line-height:1.25;}
.form-floating > label{position:absolute;top:0;left:0;height:100%;padding:1rem 0.75rem;pointer-events:none;border:1px solid transparent;transform-origin:0 0;transition:opacity 0.1s ease-in-out, transform 0.1s ease-in-out;}
@media (prefers-reduced-motion: reduce){
.form-floating > label{transition:none;}
}
.form-floating > .form-control{padding:1rem 0.75rem;}
.form-floating > .form-control::placeholder{color:transparent;}
.form-floating > .form-control:focus,.form-floating > .form-control:not(:placeholder-shown){padding-top:1.625rem;padding-bottom:0.625rem;}
.form-floating > .form-control:focus ~ label,.form-floating > .form-control:not(:placeholder-shown) ~ label{opacity:0.65;transform:scale(0.85) translateY(-0.5rem) translateX(0.15rem);}
.btn{display:inline-block;font-weight:400;line-height:1.5;color:#212529;text-align:center;text-decoration:none;vertical-align:middle;cursor:pointer;user-select:none;background-color:transparent;border:1px solid transparent;padding:0.375rem 0.75rem;font-size:1rem;border-radius:0.25rem;transition:color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;}
@media (prefers-reduced-motion: reduce){
.btn{transition:none;}
}
.btn:hover{color:#212529;}
.btn:focus{outline:0;box-shadow:0 0 0 0.25rem rgba(13, 110, 253, 0.25);}
.btn:disabled{pointer-events:none;opacity:0.65;}
.btn-primary{color:#fff;background-color:#0066ff;border-color:#0066ff;}
.btn-primary:hover{color:#fff;background-color:#0057d9;border-color:#0052cc;}
.btn-primary:focus{color:#fff;background-color:#0057d9;border-color:#0052cc;box-shadow:0 0 0 0.25rem rgba(38, 125, 255, 0.5);}
.btn-primary:active{color:#fff;background-color:#0052cc;border-color:#004dbf;}
.btn-primary:active:focus{box-shadow:0 0 0 0.25rem rgba(38, 125, 255, 0.5);}
.btn-primary:disabled{color:#fff;background-color:#0066ff;border-color:#0066ff;}
.btn-dark{color:#fff;background-color:#000000;border-color:#000000;}
.btn-dark:hover{color:#fff;background-color:black;border-color:black;}
.btn-dark:focus{color:#fff;background-color:black;border-color:black;box-shadow:0 0 0 0.25rem rgba(38, 38, 38, 0.5);}
.btn-dark:active{color:#fff;background-color:black;border-color:black;}
.btn-dark:active:focus{box-shadow:0 0 0 0.25rem rgba(38, 38, 38, 0.5);}
.btn-dark:disabled{color:#fff;background-color:#000000;border-color:#000000;}
.btn-outline-dark{color:#000000;border-color:#000000;}
.btn-outline-dark:hover{color:#fff;background-color:#000000;border-color:#000000;}
.btn-outline-dark:focus{box-shadow:0 0 0 0.25rem rgba(0, 0, 0, 0.5);}
.btn-outline-dark:active{color:#fff;background-color:#000000;border-color:#000000;}
.btn-outline-dark:active:focus{box-shadow:0 0 0 0.25rem rgba(0, 0, 0, 0.5);}
.btn-outline-dark:disabled{color:#000000;background-color:transparent;}
.btn-outline-muted{color:#b6b6b6;border-color:#b6b6b6;}
.btn-outline-muted:hover{color:#000;background-color:#b6b6b6;border-color:#b6b6b6;}
.btn-outline-muted:focus{box-shadow:0 0 0 0.25rem rgba(182, 182, 182, 0.5);}
.btn-outline-muted:active{color:#000;background-color:#b6b6b6;border-color:#b6b6b6;}
.btn-outline-muted:active:focus{box-shadow:0 0 0 0.25rem rgba(182, 182, 182, 0.5);}
.btn-outline-muted:disabled{color:#b6b6b6;background-color:transparent;}
.btn-lg{padding:0.5rem 1rem;font-size:1.25rem;border-radius:0.3rem;}
.collapse:not(.show){display:none;}
.dropup{position:relative;}
.dropdown-menu{position:absolute;z-index:1000;display:none;min-width:10rem;padding:0.5rem 0;margin:0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid none;border-radius:12px;}
.dropdown-item{display:block;width:100%;padding:0.65625rem 1rem;clear:both;font-weight:400;color:#212529;text-align:inherit;text-decoration:none;white-space:nowrap;background-color:transparent;border:0;}
.dropdown-item:hover,.dropdown-item:focus{color:#1e2125;background-color:#f1f1f1;}
.dropdown-item:active{color:#fff;text-decoration:none;background-color:#0d6efd;}
.dropdown-item:disabled{color:#adb5bd;pointer-events:none;background-color:transparent;}
.nav-link{display:block;padding:0.5rem 1rem;color:#0d6efd;text-decoration:none;transition:color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;}
@media (prefers-reduced-motion: reduce){
.nav-link{transition:none;}
}
.nav-link:hover,.nav-link:focus{color:#0a58ca;}
.navbar{position:relative;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;padding-top:0.5rem;padding-bottom:0.5rem;}
.card{position:relative;display:flex;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0, 0, 0, 0.125);border-radius:12px;}
.accordion-button{position:relative;display:flex;align-items:center;width:100%;padding:1rem 1.25rem;font-size:1rem;color:#212529;text-align:left;background-color:#fff;border:0;border-radius:0;overflow-anchor:none;transition:color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;}
@media (prefers-reduced-motion: reduce){
.accordion-button{transition:none;}
}
.accordion-button::after{flex-shrink:0;width:1.25rem;height:1.25rem;margin-left:auto;content:"";background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");background-repeat:no-repeat;background-size:1.25rem;transition:transform 0.2s ease-in-out;}
@media (prefers-reduced-motion: reduce){
.accordion-button::after{transition:none;}
}
.accordion-button:hover{z-index:2;}
.accordion-button:focus{z-index:3;border-color:white;outline:0;box-shadow:white;}
.accordion-header{margin-bottom:0;}
.accordion-item{background-color:#fff;border:1px solid rgba(0, 0, 0, 0.125);}
.accordion-item:first-of-type{border-top-left-radius:12px;border-top-right-radius:12px;}
.accordion-item:first-of-type .accordion-button{border-top-left-radius:11px;border-top-right-radius:11px;}
.accordion-item:last-of-type{border-bottom-right-radius:12px;border-bottom-left-radius:12px;}
.accordion-item:last-of-type .accordion-button.collapsed{border-bottom-right-radius:11px;border-bottom-left-radius:11px;}
.accordion-item:last-of-type .accordion-collapse{border-bottom-right-radius:12px;border-bottom-left-radius:12px;}
.accordion-body{padding:1rem 1.25rem;}
.alert{position:relative;padding:1rem 1rem;margin-bottom:1rem;border:1px solid transparent;border-radius:0.25rem;}
.btn-close{box-sizing:content-box;width:1em;height:1em;padding:0.25em 0.25em;color:#000;background:transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;border:0;border-radius:0.25rem;opacity:0.5;}
.btn-close:hover{color:#000;text-decoration:none;opacity:0.75;}
.btn-close:focus{outline:0;box-shadow:0 0 0 0.25rem rgba(13, 110, 253, 0.25);opacity:1;}
.btn-close:disabled{pointer-events:none;user-select:none;opacity:0.25;}
.modal{position:fixed;top:0;left:0;z-index:1055;display:none;width:100%;height:100%;overflow-x:hidden;overflow-y:auto;outline:0;}
.modal-dialog{position:relative;width:auto;margin:0.5rem;pointer-events:none;}
.modal-dialog-centered{display:flex;align-items:center;min-height:calc(100% - 1rem);}
.modal-content{position:relative;display:flex;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:1px solid none;border-radius:22px;outline:0;}
.modal-header{display:flex;flex-shrink:0;align-items:center;justify-content:space-between;padding:1rem 1rem;border-bottom:1px solid #dee2e6;border-top-left-radius:21px;border-top-right-radius:21px;}
.modal-header .btn-close{padding:0.5rem 0.5rem;margin:-0.5rem -0.5rem -0.5rem auto;}
.modal-body{position:relative;flex:1 1 auto;padding:1rem;}
@media (min-width: 576px){
.modal-dialog{max-width:500px;margin:1.75rem auto;}
.modal-dialog-centered{min-height:calc(100% - 3.5rem);}
}
.spinner-border{display:inline-block;width:2rem;height:2rem;vertical-align:-0.125em;border:0.25em solid currentColor;border-right-color:transparent;border-radius:50%;animation:0.75s linear infinite spinner-border;}
@media (prefers-reduced-motion: reduce){
.spinner-border{animation-duration:1.5s;}
}
.visually-hidden{position:absolute!important;width:1px!important;height:1px!important;padding:0!important;margin:-1px!important;overflow:hidden!important;clip:rect(0, 0, 0, 0)!important;white-space:nowrap!important;border:0!important;}
.stretched-link::after{position:absolute;top:0;right:0;bottom:0;left:0;z-index:1;content:"";}
.d-inline{display:inline!important;}
.d-inline-block{display:inline-block!important;}
.d-block{display:block!important;}
.d-flex{display:flex!important;}
.d-none{display:none!important;}
.shadow{box-shadow:0 0.5rem 1rem rgba(0, 0, 0, 0.15)!important;}
.border-0{border:0!important;}
.border-bottom-0{border-bottom:0!important;}
.w-100{width:100%!important;}
.justify-content-center{justify-content:center!important;}
.justify-content-between{justify-content:space-between!important;}
.justify-content-around{justify-content:space-around!important;}
.align-items-center{align-items:center!important;}
.order-1{order:1!important;}
.order-2{order:2!important;}
.order-3{order:3!important;}
.m-0{margin:0!important;}
.mx-2{margin-right:0.5rem!important;margin-left:0.5rem!important;}
.my-2{margin-top:0.5rem!important;margin-bottom:0.5rem!important;}
.my-3{margin-top:1rem!important;margin-bottom:1rem!important;}
.my-5{margin-top:3rem!important;margin-bottom:3rem!important;}
.mt-0{margin-top:0!important;}
.mt-1{margin-top:0.25rem!important;}
.mt-2{margin-top:0.5rem!important;}
.mt-3{margin-top:1rem!important;}
.mt-4{margin-top:1.5rem!important;}
.mt-5{margin-top:3rem!important;}
.me-3{margin-right:1rem!important;}
.mb-0{margin-bottom:0!important;}
.mb-1{margin-bottom:0.25rem!important;}
.mb-2{margin-bottom:0.5rem!important;}
.mb-3{margin-bottom:1rem!important;}
.mb-4{margin-bottom:1.5rem!important;}
.mb-5{margin-bottom:3rem!important;}
.ms-2{margin-left:0.5rem!important;}
.p-0{padding:0!important;}
.p-2{padding:0.5rem!important;}
.p-3{padding:1rem!important;}
.p-4{padding:1.5rem!important;}
.p-5{padding:3rem!important;}
.px-3{padding-right:1rem!important;padding-left:1rem!important;}
.px-4{padding-right:1.5rem!important;padding-left:1.5rem!important;}
.px-5{padding-right:3rem!important;padding-left:3rem!important;}
.py-2{padding-top:0.5rem!important;padding-bottom:0.5rem!important;}
.py-5{padding-top:3rem!important;padding-bottom:3rem!important;}
.pt-0{padding-top:0!important;}
.pt-4{padding-top:1.5rem!important;}
.pt-5{padding-top:3rem!important;}
.pb-4{padding-bottom:1.5rem!important;}
.fs-2{font-size:calc(1.325rem + 0.9vw)!important;}
.fs-3{font-size:calc(1.3rem + 0.6vw)!important;}
.fs-4{font-size:calc(1.275rem + 0.3vw)!important;}
.fs-5{font-size:1.25rem!important;}
.fs-6{font-size:1rem!important;}
.fw-light{font-weight:300!important;}
.fw-lighter{font-weight:lighter!important;}
.fw-bold{font-weight:700!important;}
.fw-bolder{font-weight:bolder!important;}
.text-center{text-align:center!important;}
.text-primary{--bs-text-opacity:1;color:rgba(var(--bs-primary-rgb), var(--bs-text-opacity))!important;}
.text-danger{--bs-text-opacity:1;color:rgba(var(--bs-danger-rgb), var(--bs-text-opacity))!important;}
.text-dark{--bs-text-opacity:1;color:rgba(var(--bs-dark-rgb), var(--bs-text-opacity))!important;}
.text-muted{--bs-text-opacity:1;color:#6c757d!important;}
.text-success{--bs-text-opacity:1;color:rgba(var(--bs-success-rgb), var(--bs-text-opacity))!important;}
.text-white{--bs-text-opacity:1;color:rgba(var(--bs-white-rgb), var(--bs-text-opacity))!important;}
.bg-primary{--bs-bg-opacity:1;background-color:rgba(var(--bs-primary-rgb), var(--bs-bg-opacity))!important;}
.bg-dark{--bs-bg-opacity:1;background-color:rgba(var(--bs-dark-rgb), var(--bs-bg-opacity))!important;}
.rounded{border-radius:0.25rem!important;}
.rounded-0{border-radius:0!important;}
.rounded-circle{border-radius:50%!important;}
.rounded-pill{border-radius:50rem!important;}
@media (min-width: 768px){
.d-md-flex{display:flex!important;}
}
@media (min-width: 992px){
.order-lg-1{order:1!important;}
.order-lg-2{order:2!important;}
.mt-lg-5{margin-top:3rem!important;}
.px-lg-5{padding-right:3rem!important;padding-left:3rem!important;}
.pt-lg-5{padding-top:3rem!important;}
}
@media (min-width: 1200px){
.fs-2{font-size:2rem!important;}
.fs-3{font-size:1.75rem!important;}
.fs-4{font-size:1.5rem!important;}
}
.btn-floating{position:fixed;z-index:1030;bottom:1.5rem;right:1.5rem;}
.btn-round{width:3rem;height:3rem;line-height:2rem;border-radius:50%;padding:0;background:#040303;display:flex;align-items:center;justify-content:center;}
#login-form{display:none;}
#register-form{display:none;}
.border-none{border:none!important;}
.fw-600{font-weight:600!important;}
.ck-rounded{border-radius:16px!important;}
.f-2{background-color:#e7f3ff;border:none!important;border-radius:16px;}
.f-3{background-color:#fde7ea;border:none!important;border-radius:16px;}
.f-4{background-color:#e7f9e7;border:none!important;border-radius:16px;}
.f-5{background-color:#eff2ff;border:none!important;border-radius:16px;}
.fb-s{background-color:#ffffff;border:none!important;border-radius:16px;}
.success-pill{background-color:#eaffea;color:rgb(44, 194, 69);border-radius:126px;display:inline-block;margin:0;padding:0;font-size:12px;padding:2px 12px;}
.small{font-size:.75rem;}
*{color:black;}
.ck-outline-btn{border:1px solid lightgrey;border-radius:22px;font-weight:400;margin-top:3px;margin-bottom:3px;}
.ck-outline-btn:hover{border:1px solid rgb(50, 122, 255);color:rgb(50, 122, 255);background-color:rgb(227, 237, 255);border-radius:22px;font-weight:400;margin-top:3px;margin-bottom:3px;}
.input-email{border:1px solid rgb(172, 172, 172);border-bottom:none;border-radius:12px 12px 0 0;padding-left:10px;margin-top:10px;}
.input-email:focus{border:2px solid black;border-radius:12px;background-color:white;box-shadow:none;}
.input-password{border:1px solid rgb(172, 172, 172);border-radius:0 0 12px 12px;padding-left:10px;}
.input-password:focus{border:2px solid black;border-radius:12px;background-color:white;box-shadow:none;}
/*! CSS Used from: Embedded ; media=all */
@media all{
.volume__small-wave{animation:VOLUME_SMALL_WAVE_FLASH 2s infinite;opacity:0;}
.volume__large-wave{animation:VOLUME_LARGE_WAVE_FLASH 2s infinite .3s;opacity:0;}
}
/*! CSS Used from: Embedded */
#wistia_chrome_23 #wistia_grid_43_wrapper .w-css-reset{font-size:14px;}
#wistia_chrome_23 #wistia_grid_43_wrapper div.w-css-reset{box-sizing:inherit;box-shadow:none;color:inherit;display:block;float:none;font:inherit;font-family:inherit;font-style:normal;font-weight:normal;font-size:inherit;letter-spacing:0;line-height:inherit;margin:0;max-height:none;max-width:none;min-height:0;min-width:0;padding:0;position:static;text-decoration:none;text-transform:none;text-shadow:none;transition:none;word-wrap:normal;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-user-select:none;-webkit-font-smoothing:antialiased;}
#wistia_chrome_23 #wistia_grid_43_wrapper button.w-css-reset{box-sizing:inherit;box-shadow:none;color:inherit;display:block;float:none;font:inherit;font-family:inherit;font-style:normal;font-weight:normal;font-size:inherit;letter-spacing:0;line-height:inherit;margin:0;max-height:none;max-width:none;min-height:0;min-width:0;padding:0;position:static;text-decoration:none;text-transform:none;text-shadow:none;transition:none;word-wrap:normal;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-user-select:none;-webkit-font-smoothing:antialiased;}
#wistia_chrome_23 #wistia_grid_43_wrapper img.w-css-reset{box-sizing:inherit;box-shadow:none;color:inherit;display:block;float:none;font:inherit;font-family:inherit;font-style:normal;font-weight:normal;font-size:inherit;letter-spacing:0;line-height:inherit;margin:0;max-height:none;max-width:none;min-height:0;min-width:0;padding:0;position:static;text-decoration:none;text-transform:none;text-shadow:none;transition:none;word-wrap:normal;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-user-select:none;-webkit-font-smoothing:antialiased;}
#wistia_chrome_23 #wistia_grid_43_wrapper svg.w-css-reset{box-sizing:inherit;box-shadow:none;color:inherit;display:block;float:none;font:inherit;font-family:inherit;font-style:normal;font-weight:normal;font-size:inherit;letter-spacing:0;line-height:inherit;margin:0;max-height:none;max-width:none;min-height:0;min-width:0;padding:0;position:static;text-decoration:none;text-transform:none;text-shadow:none;transition:none;word-wrap:normal;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-user-select:none;-webkit-font-smoothing:antialiased;}
#wistia_chrome_23 #wistia_grid_43_wrapper svg.w-css-reset{display:inline;}
#wistia_chrome_23 #wistia_grid_43_wrapper button.w-css-reset{background-attachment:scroll;background-color:transparent;background-image:none;background-position:0 0;background-repeat:no-repeat;background-size:100% 100%;border:0;border-radius:0;outline:none;position:static;}
#wistia_chrome_23 #wistia_grid_43_wrapper img.w-css-reset{border:0;display:inline-block;vertical-align:top;border-radius:0;outline:none;position:static;}
#wistia_chrome_23 #wistia_grid_43_wrapper .w-css-reset-tree{font-size:14px;}
#wistia_chrome_23 #wistia_grid_43_wrapper .w-css-reset-tree div{box-sizing:inherit;box-shadow:none;color:inherit;display:block;float:none;font:inherit;font-family:inherit;font-style:normal;font-weight:normal;font-size:inherit;letter-spacing:0;line-height:inherit;margin:0;max-height:none;max-width:none;min-height:0;min-width:0;padding:0;position:static;text-decoration:none;text-transform:none;text-shadow:none;transition:none;word-wrap:normal;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-user-select:none;-webkit-font-smoothing:antialiased;}
#wistia_chrome_23 #wistia_grid_43_wrapper .w-css-reset-tree span{box-sizing:inherit;box-shadow:none;color:inherit;display:block;float:none;font:inherit;font-family:inherit;font-style:normal;font-weight:normal;font-size:inherit;letter-spacing:0;line-height:inherit;margin:0;max-height:none;max-width:none;min-height:0;min-width:0;padding:0;position:static;text-decoration:none;text-transform:none;text-shadow:none;transition:none;word-wrap:normal;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-user-select:none;-webkit-font-smoothing:antialiased;}
#wistia_chrome_23 #wistia_grid_43_wrapper .w-css-reset-tree button{box-sizing:inherit;box-shadow:none;color:inherit;display:block;float:none;font:inherit;font-family:inherit;font-style:normal;font-weight:normal;font-size:inherit;letter-spacing:0;line-height:inherit;margin:0;max-height:none;max-width:none;min-height:0;min-width:0;padding:0;position:static;text-decoration:none;text-transform:none;text-shadow:none;transition:none;word-wrap:normal;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-user-select:none;-webkit-font-smoothing:antialiased;}
#wistia_chrome_23 #wistia_grid_43_wrapper .w-css-reset-tree svg{box-sizing:inherit;box-shadow:none;color:inherit;display:block;float:none;font:inherit;font-family:inherit;font-style:normal;font-weight:normal;font-size:inherit;letter-spacing:0;line-height:inherit;margin:0;max-height:none;max-width:none;min-height:0;min-width:0;padding:0;position:static;text-decoration:none;text-transform:none;text-shadow:none;transition:none;word-wrap:normal;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-user-select:none;-webkit-font-smoothing:antialiased;}
#wistia_chrome_23 #wistia_grid_43_wrapper .w-css-reset-tree span{display:inline;}
#wistia_chrome_23 #wistia_grid_43_wrapper .w-css-reset-tree svg{display:inline;}
#wistia_chrome_23 #wistia_grid_43_wrapper .w-css-reset-tree button{background-attachment:scroll;background-color:transparent;background-image:none;background-position:0 0;background-repeat:no-repeat;background-size:100% 100%;border:0;border-radius:0;outline:none;position:static;}
#wistia_chrome_23 #wistia_grid_43_wrapper .w-css-reset-button-important{border-radius:0!important;color:#fff!important;}
/*! CSS Used from: Embedded */
#wistia_grid_43_wrapper{-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box;font-family:Arial,sans-serif;font-size:14px;height:100%;position:relative;text-align:left;width:100%;}
#wistia_grid_43_wrapper *{-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box;}
#wistia_grid_43_above{position:relative;}
#wistia_grid_43_main{display:block;height:100%;position:relative;}
#wistia_grid_43_behind{height:100%;left:0;position:absolute;top:0;width:100%;}
#wistia_grid_43_center{height:100%;overflow:hidden;position:relative;width:100%;}
#wistia_grid_43_front{display:none;height:100%;left:0;position:absolute;top:0;width:100%;}
#wistia_grid_43_top_inside{position:absolute;left:0;top:0;width:100%;}
#wistia_grid_43_top{width:100%;position:absolute;bottom:0;left:0;}
#wistia_grid_43_bottom_inside{position:absolute;left:0;bottom:0;width:100%;}
#wistia_grid_43_bottom{width:100%;position:absolute;top:0;left:0;}
#wistia_grid_43_left_inside{height:100%;position:absolute;left:0;top:0;}
#wistia_grid_43_left{height:100%;position:absolute;right:0;top:0;}
#wistia_grid_43_right_inside{height:100%;right:0;position:absolute;top:0;}
#wistia_grid_43_right{height:100%;left:0;position:absolute;top:0;}
#wistia_grid_43_below{position:relative;}
/*! CSS Used keyframes */
@keyframes slideRightToLeft{0%{transform:translateX(100%);}100%{transform:translateX(-100%);}}
@keyframes slideRightToLeft{0%{transform:translateX(100%);}100%{transform:translateX(-100%);}}
@keyframes hideLoader{0%{width:100%;height:100%;}100%{width:0;height:0;}}
@keyframes hideLoader{0%{width:100%;height:100%;}100%{width:0;height:0;}}
@keyframes VOLUME_SMALL_WAVE_FLASH{0%{opacity:0;}33%{opacity:1;}66%{opacity:1;}100%{opacity:0;}}
@keyframes VOLUME_SMALL_WAVE_FLASH{0%{opacity:0;}33%{opacity:1;}66%{opacity:1;}100%{opacity:0;}}
@keyframes VOLUME_LARGE_WAVE_FLASH{0%{opacity:0;}33%{opacity:1;}66%{opacity:1;}100%{opacity:0;}}
@keyframes VOLUME_LARGE_WAVE_FLASH{0%{opacity:0;}33%{opacity:1;}66%{opacity:1;}100%{opacity:0;}}
    </style>
</head>
<body>
    <div class="container">
        @include('layouts.alert')
    </div>
    <div class="animate-text" style="display: none">
        <p class="animated-text"> Diwali special 80% Off</p>
        
        <p class="animated-text">Diwali special 80% Off</p>
        <p class="animated-text">Diwali special 80% Off</p>
        <p class="animated-text">Diwali special 80% Off</p>
        <p class="animated-text">Diwali special 80% Off</p>
        <p class="animated-text">Diwali special 80% Off</p>
        <p class="animated-text">Diwali special 80% Off</p>
        <p class="animated-text">Diwali special 80% Off</p>


      </div>
      
    <section class="pt-5" style=" background-color: #212121;">
        <div class="container">
            <div class="row justify-content-center align-items-cente">
                <div class="col-md-10">
                    <main class="text-center">
                        <h1 class="display-6 fw-bod  " style=" line-height:1.5; color:aliceblue; font-weight:600">Learn CSS in just 5 days to create <span style="color:#efa30e;">Netflix, chatgpt and Youtube</span>Like Designs.</h1>


                        <p style="font-size:1vw;" class="fs-5 text-white text-center">Master Advance concepts of CSS to create frontend designes of websites like <span style="color:#efa30e;">YouTube, Netflix and ChatGPT</span> in just 5 days! The must have bootcamp in 2024. </p>




                    </main>
                </div>

                <div class="col-lg-5 mt-5  mb-4 order-2 order-lg-1">
                    <div class="bg-dark container" style="background-color: #333333 !important; opacity:90%">
                        <div class="row">

                            <div class=" col-6 mb-3">
                                <div class="card-dark">
                                    <div class="  text-white fs-6 d-flex align-items-center" style="gap:12px">
                                        <img src="{{ asset('assets/img/l1.svg') }}" alt="">
                                        5 Days Live <br> (Lang: Hinglish) 
                                    </div>
                                </div>

                            </div>
                            <div class=" col-6 mb-3">
                                <div class="card-dark">
                                    <div class="  text-white fs-6 d-flex align-items-center" style="gap:12px">
                                        <img src="{{ asset('assets/img/l2.svg') }}" alt="">
                                        Zoom Sessions
                                    </div>
                                </div>

                            </div>
                            <div class="col-6  mb-3">
                                <div class="card-dark">
                                    <div class="  text-white fs-6 d-flex align-items-center" style="gap:12px">
                                        <img src="{{ asset('assets/img/l3.svg') }}" alt="">
                                        From 19th February
                                    </div>
                                </div>

                            </div>
                            <div class="col-6  mb-3">
                                <div class="card-dark">
                                    <div class="  text-white fs-6 d-flex align-items-center" style="gap:12px">
                                        <img src="{{ asset('assets/img/l4.svg') }}" alt="">
                                        From 8 PM (IST)
                                    </div>
                                </div>
                            </div>
                            {{-- <h5 class="text-whitbe">More than 30,000 students have attended the bootcamp so far</h5> --}}
                            <div class="d-flex align-items-center margin-top:20px" style="gap:20px">
                                <img src="{{ asset('assets/img/team/ashish black.png') }}"  height="100" width="100"
                                    style="border-radius: 14px" loading="lazy" alt="">
                                <div class="text-white">
                                    <h4 class="fs-5 m-0 text-white">Ashish Shukla</h4>
                                    <p class="small m-0 mt-1 text-white">I am a full stack developer and instructor
                                        passionate about educating students through engaging lessons. Ex AOSPL, Lido
                                        Learning
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5 mt-5 order-1 order-lg-2">
                    <div class="bg-dark p-2" style="background-color: #333333 !important">
                        <script src="https://fast.wistia.com/embed/medias/jqqnsy9mj6.jsonp" async></script>
                        <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
                        <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                            <div class="wistia_responsive_wrapper"
                                style="height:100%;left:0;position:absolute;top:0;width:100%;">
                                <div class="wistia_embed wistia_async_jqqnsy9mj6 videoFoam=true"
                                    style="height:100%;position:relative;width:100%">
                                    <div class="wistia_swatch"
                                        style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;">
                                        <img src="https://fast.wistia.com/embed/medias/jqqnsy9mj6/swatch"
                                            style="filter:blur(5px);height:100%;object-fit:contain;width:100%;"
                                            alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div id="js-player" style="border-radius: 16px; color:white;" class="js-player" data-plyr-provider="youtube" data-plyr-embed-id="slentvTk3gY"></div> --}}

                </div>
                <div class="col-lg-10 order-3 l-cta">
                    <div class="mb-5 white">
                        <a href="" style="width:100% !important"
                            class="text-center ck-btn ck-rounded btn-lg mt-3  px-5"
                            class="btn ck-btn ck-rounded btn-lg   px-5" data-bs-toggle="modal" data-bs-target="#enroll">
                            <h2 class="fs-3 mb-1 text-white fw-bold">Kickstart your webdev journey for just ₹99! </h2>
                            <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <section class="py-5">
        <div class="container  pt-5">
            <div class="text-center">
                <h1 class="fw-bold fs-2 " style="">We have designed a <br> flexible program for you</h1>
            </div>
            <div class="row justify-content-center">

                <div class="col-md-5 mt-4">
                    <div class="card text-center f-3">
                        <div class="p-2">
                            <img src="{{ asset('assets/img/hd.svg') }}" alt="">
                            <h2 class="fs-5 mt-2">Have doubts?</h2>
                            <p class="">Fear not, peer to peer group will help you out any issue, big or small.</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-5 mt-4">
                    <div class="card text-center f-2">
                        <div class="p-2">
                            <img src="{{ asset('assets/img/wtr.svg') }}" alt="">
                            <h2 class="fs-5 mt-2">Get Certificate!</h2>
                            <p>Receive a linkedIn shareable certificate after the completion of live classes</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-5 mt-4">
                    <div class="card text-center f-4">
                        <div class="p-2">
                            <img src="{{ asset('assets/img/time.svg') }}" alt="">
                            <h2 class="fs-5 mt-2">All Live classes</h2>
                            <p class="">Watch all the classes live and clear your doubts instantly.</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-5 mt-4">
                    <div class="card text-center f-5">
                        <div class="p-2">
                            <img src="{{ asset('assets/img/project.svg') }}" alt="" height="70">
                            <h2 class="fs-5 mt-2">Project-based Learning</h2>
                            <p class="">An immersive project-based curriculum focused on practical developer skills.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
            <h1 class="fw-bold fs-2 text-center mb-5">What our students are saying?</h1>

                <div class="col-md-10 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            
                            <script src="https://fast.wistia.com/embed/medias/899pebmzcy.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><span class="wistia_embed wistia_async_899pebmzcy popover=true" style="display:inline-block;height:215px;position:relative;width:100%; object-fit:cover; border-radius:14px">&nbsp;</span>
                        </div> 
                        <div class="col-md-4">
                            <script src="https://fast.wistia.com/embed/medias/b7aqu7ig31.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><span class="wistia_embed wistia_async_b7aqu7ig31 popover=true" style="display:inline-block;height:215px;position:relative;width:100%; object-fit:cover">&nbsp;</span>
                        </div>
                        <div class="col-md-4">
                            <script src="https://fast.wistia.com/embed/medias/y6fq318u8b.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><span class="wistia_embed wistia_async_y6fq318u8b popover=true" style="display:inline-block;height:215px;position:relative;width:100%; object-fit:cover">&nbsp;</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="row justify-content-center">
        <div class="">
            <h1 class="fw-bold fs-2 text-center">What exactly we will learn & build?</h1>
        </div>
    <section>

    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 mb-5">
                    <div class="shadow-card mt-5">
                        <div class="day">Day 1</div>
                        <h3 class="fs-3 fw-bold">Introduction to CSS</h2>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> CSS Implementation</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Typography</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Box Model & Usecases</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Creating login and
                                feedback pages</div>
                                <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Understanding Usecases</div>
                    </div>
                    <div class="shadow-card mt-5">
                        <div class="day">Day 2</div>
                        <h3 class="fs-3 fw-bold">Learn use of Positions</h2>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Pseudo Elements &amp;
                                Pseudo Classes</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Creating pages of Twitter
                                &amp; LinkedIn</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Creating Static Blog</div>
                    </div>
                    
                    <div class="shadow-card mt-5">
                        <div class="day">Day 3</div>
                        <h3 class="fs-3 fw-bold">Master Flexbox</h2>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt="">Master Flexbox</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt="">Responsive design using
                                flexbox</div>
                                <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Understanding Usecases</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Creating a zomato clone</div>
                    </div>
                    <div class="shadow-card mt-5">
                        <div class="day">Day 4</div>
                        <h3 class="fs-3 fw-bold">Master Responsive designs</h2>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt="">Media Queries</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt="">Media queries examples and usecases</div>
                                <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt="">Creating Animations</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt="">Using animations in real world examples.</div>
                    </div>

                    <div class="shadow-card mt-5">
                        <div class="day">Day 5</div>
                        <h3 class="fs-3 fw-bold">Major Project: Create YouTube Clone</h2>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Bonus: Host your project
                                Online</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Bonus: Get your linkedIn
                                shareable certificate</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Bonus: Full stack Roadmap
                            </div>

                    </div>

                    

                    <div class="my-5 text-center l-cta">
                        <a href="" data-bs-toggle="modal" data-bs-target="#enroll"
                            class="btn ck-btn ck-rounded btn-lg   px-5" data-bs-toggle="modal" data-bs-target="#enroll">
                            <h2 class="fs-3 mb-1 text-white fw-bold">Kickstart your webdev journey for just ₹99</h2>
                            <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                        </a>
                    </div>
                </div>
            </div>
    </section>

    {{-- feedbacks start --}}
    <section class="my-5 fb-s">
        <div class="container pt-lg-5 mt-lg-5">
          <div class="text-center">
          <h1 class=" fw-bolder">Students Love Codekaro</h1>
          <p class="fs-5 mb-5">Here's what 32160+ satisfied students have to say about learning with codekaro.</p>
          </div>
          <div class="row" data-masonry='{"percentPosition": true }'>
            <div class="col-md-4 my-3">
              <div class="card p-3 feedback-card">
                <div class="d-flex mb-3 justify-content-between align-items-center" >
                    <div class="d-flex" style="align-items: center; gap:8px; ">
                        <img loading="lazy" src="{{asset('assets/img/cssf4.jpeg')}}" class="avatar-sm-sm" alt="">
                        <div class="">
                            <p class="m-0 text-dark ">Mayank Gupta</h4>
                            <p class="m-0 small">Student, IIT Bombay</p>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                      </svg>
                  </div>
                <p class="fs-6">Hey everyone, i am thrilled to share my 5 days how to css bootcamp journey was amazing. I used to stuck at CSS from a very long time and Ashish Shukla sir made this a cup of tea for me in a very less time.

                    <br> <br>Thanks Ashish Shukla
                    <br>Thanks codekaro.in
                    
                    <br> <br>certificate link: https://lnkd.in/dZkZdsC9</p>
                
              </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card p-3 feedback-card">
                  <div class="d-flex mb-3 justify-content-between align-items-center" >
                      <div class="d-flex" style="align-items: center; gap:8px; ">
                          <img loading="lazy" src="{{asset('assets/img/cssf1.jpeg')}}" class="avatar-sm-sm" alt="">
                          <div class="">
                              <p class="m-0 text-dark ">Akhila Cheryala</h4>
                              <p class="m-0 small">Passionate front-end developer...</p>
                          </div>
                      </div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                      </svg>
                    </div>
                  <p class="fs-6">Hi guys 😄
                    Take a look at this Airbnb website Clone 🎉 <br><br>
                    Very Excited to present my latest web development project 🤩 Airbnb website clone built entirely with HTML and CSS! <br><br>
                    Its my First web dev project, Thank you for making it easy for me Ashish Shukla #codekaro 😎 🚀 5 days #howtoCSS bootcamp helped me so much.
                    
                </p>
                  
                </div>
              </div>

              <div class="col-md-4 my-3">
                <div class="card p-3 feedback-card">
                  <div class="d-flex mb-3 justify-content-between align-items-center" >
                      <div class="d-flex" style="align-items: center; gap:8px; ">
                          <img loading="lazy" src="https://pbs.twimg.com/profile_images/1058774434104827904/E7aXNaoE_400x400.jpg" class="avatar-sm-sm" alt="">
                          <div class="">
                              <p class="m-0 text-dark ">Ravi Sadariya</h4>
                              <p class="m-0 small">GITAM University </p>
                          </div>
                      </div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                      </svg>
                    </div>
                  <p class="fs-6">@ashish Really a great tutor for learning  web development
                    
            </p>
                  
                </div>
              </div>


              <div class="col-md-4 my-3">
                <div class="card p-3 feedback-card">
                  <div class="d-flex mb-3 justify-content-between align-items-center" >
                      <div class="d-flex" style="align-items: center; gap:8px; ">
                          <img loading="lazy" src="{{asset('assets/img/cssf2.jpeg')}}" class="avatar-sm-sm" alt="">
                          <div class="">
                              <p class="m-0 text-dark ">Snehasri Motamarri</h4>
                              <p class="m-0 small">Vice President at Pioneers club, Visakhapatnam </p>
                          </div>
                      </div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                      </svg>
                    </div>
                  <p class="fs-6">I recently completed a 5-day CSS Bootcamp led by Ashish Shukla , the esteemed founder & CEO of Codekaro ✨</p>
                  <p class="fs-6">These 5 intensive days were nothing short of a rewarding journey, marked by insightful learning experiences that propelled me towards indulging in the art of CSS and HTML ! 🚀</p>
                  <p class="fs-6">The curriculum was thoughtfully structured, with each day dedicated to a distinct aspect of web design:</p>
                  <p class="fs-6">Ashish Shukla sir's guidance and the interactive learning environment made this bootcamp an unforgettable experience 💫</p>
                  
                </div>
              </div>

              <div class="col-md-4 my-3">
                <div class="card p-3 feedback-card">
                  <div class="d-flex mb-3 justify-content-between align-items-center" >
                      <div class="d-flex" style="align-items: center; gap:8px; ">
                          <img loading="lazy" src="{{asset('assets/img/cssf3.jpeg')}}" class="avatar-sm-sm" alt="">
                          <div class="">
                              <p class="m-0 text-dark ">Manjiri Pund</h4>
                              <p class="m-0 small">-- </p>
                          </div>
                      </div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                      </svg>
                    </div>
                  <p class="fs-6">I am overwhelmed to share that I have completed the CSS bootcamp conducted by Codekaro .</p>
                  <p class="fs-6">Initially I didn't had any clue about CSS , i started with a complete blank mind but after attending all the 5 days live session I am able to do lots of stuff </p>
                  <p class="fs-6">like creating a clone of website like instagram , LinkedIn and Netflix on my own. 🥳</p>
                  <p class="fs-6">A very special thank you to Ashish Shukla who taught exceptionally well and cleared all my doubts.</p>
                  
                </div>
              </div>
              <div class="col-md-4 my-3 ">
                <div class="card p-3 feedback-card">
                  <div class="d-flex mb-3 justify-content-between align-items-center" >
                      <div class="d-flex" style="align-items: center; gap:8px; ">
                          <img loading="lazy" src="{{asset('assets/img/cssf5.jpeg')}}" class="avatar-sm-sm" alt="">
                          <div class="">
                              <p class="m-0 text-dark ">Cherish Vuppala</h4>
                              <p class="m-0 small">Student at Sri Vasavi Engineering College </p>
                          </div>
                      </div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                      </svg>
                    </div>
                  <p class="fs-6">@Ashish Shukla
                    It's an amazing workshop! by you sir, enjoyed a lot , learnt subtle things in CSS, it's only day-3 but still I believe I can build frontend on my own.</p>
                  <p class="fs-6">I never thought I would master things in such short span, before taking the course, I was like it might be a scam, ok anyway let me try this, it's only 199rs and finally now,</p>
                  <p class="fs-6"> I am so glad that I have made the best possible decision! by joining this workshop.
                </p>
                  
                </div>
              </div>
            
            
            
            
          </div>
        </div>
      </section>

    {{-- feedbacks end --}}





    {{-- <section class="pt-0 pt-md-0 pt-lg-5 pb-5 mb-5 ">
        <div class="container mt-0 hero">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center">
                    <h1 class="fw-bold display-6 mt-5">Grab your <span class="wd_highlight">Internship certificate</span> after completing 30 days live Bootcamp</span></h1>
                    
                        <img src="{{asset('assets/img/dummy-certificate.png')}}" class=" mt-5 img-fluid shadow-lg ck-rounded" style="padding:-20px" alt="">
                        
                </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1 class="fs-2"></h1>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center mb-5">
                    <h1 class="fs-2 fw-bold">Still Wondering If the Program is for YOU?</h1>
                    <p class="m-0">Please check all boxes, where your answer is YES!</p>
                </div>
                <div class="col-md-5">
                    <div class="you-checkbox-item" onclick="toggleCheckbox(this)">
                        <div class="you-checkbox">
                            <div class="you-checkbox-check">
                                <img src="https://uploads-ssl.webflow.com/5fdb2866020c200cd7fd7369/60cb9e9002293160e1b739d6_tick.svg"
                                    loading="lazy" alt="" class="you-checkbox-check-tick">
                            </div>
                        </div>
                        <div class="you-checkbox-text">I am a student and I want to kickstart my web dev journey.</div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="you-checkbox-item" onclick="toggleCheckbox(this)">
                        <div class="you-checkbox">
                            <div class="you-checkbox-check">
                                <img src="https://uploads-ssl.webflow.com/5fdb2866020c200cd7fd7369/60cb9e9002293160e1b739d6_tick.svg"
                                    loading="lazy" alt="" class="you-checkbox-check-tick">
                            </div>
                        </div>
                        <div class="you-checkbox-text">I have been learning web dev for a while now but still I am
                            confused!</div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="you-checkbox-item" onclick="toggleCheckbox(this)">
                        <div class="you-checkbox">
                            <div class="you-checkbox-check">
                                <img src="https://uploads-ssl.webflow.com/5fdb2866020c200cd7fd7369/60cb9e9002293160e1b739d6_tick.svg"
                                    loading="lazy" alt="" class="you-checkbox-check-tick">
                            </div>
                        </div>
                        <div class="you-checkbox-text">I am an aspiring web developer but I have no clue on where to start
                            from.</div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="you-checkbox-item" onclick="toggleCheckbox(this)">
                        <div class="you-checkbox">
                            <div class="you-checkbox-check">
                                <img src="https://uploads-ssl.webflow.com/5fdb2866020c200cd7fd7369/60cb9e9002293160e1b739d6_tick.svg"
                                    loading="lazy" alt="" class="you-checkbox-check-tick">
                            </div>
                        </div>
                        <div class="you-checkbox-text">I am in job and I want to switch my profile as a full stack
                            developer</div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="you-checkbox-item" onclick="toggleCheckbox(this)">
                        <div class="you-checkbox">
                            <div class="you-checkbox-check">
                                <img src="https://uploads-ssl.webflow.com/5fdb2866020c200cd7fd7369/60cb9e9002293160e1b739d6_tick.svg"
                                    loading="lazy" alt="" class="you-checkbox-check-tick">
                            </div>
                        </div>
                        <div class="you-checkbox-text">I am a freelancer and I want to widen my skills as a freelance
                            developer</div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="you-checkbox-item" onclick="toggleCheckbox(this)">
                        <div class="you-checkbox">
                            <div class="you-checkbox-check">
                                <img src="https://uploads-ssl.webflow.com/5fdb2866020c200cd7fd7369/60cb9e9002293160e1b739d6_tick.svg"
                                    loading="lazy" alt="" class="you-checkbox-check-tick">
                            </div>
                        </div>
                        <div class="you-checkbox-text">I am from non IT background but i want to build my career in the
                            field of web dev</div>
                    </div>
                </div>

            </div>
        </div>
        <p class="text-center my-2 px-3">If you checked ANY of the boxes above, then you’re invited to join The How to CSS
            Bootcamp😁</p>
        <div class="my-5 text-center l-cta">
            <a href="" data-bs-toggle="modal" data-bs-target="#enroll"
                class="btn ck-btn ck-rounded btn-lg   px-5" data-bs-toggle="modal" data-bs-target="#enroll">
                <h2 class="fs-3 mb-1 text-white fw-bold">Kickstart your webdev journey for just ₹99</h2>
                <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
            </a>
        </div>

    </section>
    <section>
        <div class="container my-5 pt-5">
            <div class="text-center">
                <h1 class=" mx-xl-8 mb-0 fw-600">Meet Your Mentor</h1>
                {{-- <p class="lead mb-4">Here's what some of our 1123 satisfied students have to say about learning with codekaro.</p> --}}
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 mt-4 text-center">
                    <img src="{{ asset('assets/img/team/ashish black.png') }}" alt="" class="rounded-circle"
                        height="130px">
                    <h2 class="mt-3 fw-bold">Ashish Shukla</h2>
                    <p class="fs-5 ">I am a freelance web developer and instructor, passionate about educating students
                        through engaging lessons. Ex AOSPL, Lido Learning</p>
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="container text-center ct my-5 py-5  ">
            <div class="row justify-content-center">
                <h1 id=" my-3 " class="fw-bold my-5">Time Is Running Out. <br> Grab Your Spot Fast!</h1>
                <div class="col-md-7 text-center">
                    <div id="countdown" class="text-center">
                        <ul type="none" class="navbar">
                            <li class="d-inlin fs-5 fw-bold"><span id="days"
                                    class="d-block display-3  fw-bold"></span>days</li>
                            <li class="d-inlin fs-5 fw-bold"><span id="hours"
                                    class="d-block display-3 fw-bold"></span>Hours</li>
                            <li class="d-inline fs-5 fw-bold"><span id="minutes"
                                    class="d-block display-3 fw-bold"></span>Minutes</li>
                            <li class="d-inline fs-5 fw-bold"><span id="seconds"
                                    class="d-block display-3 fw-bold"></span>Seconds</li>
                        </ul>
                    </div>
                    {{-- <div id="content" class="emoji">
                    <span>🥳</span>
                    <span>🎉</span>
                    <span>🎂</span>
                    <p id="headline"></p>
                  </div> --}}
                </div>

                <div class="my-5 l-cta">
                    <a href="" data-bs-toggle="modal" data-bs-target="#enroll"
                        class="btn ck-btn ck-rounded btn-lg   px-5">
                        <h2 class="fs-3 mb-1 text-white fw-bold">Kickstart your webdev journey for just ₹99</h2>
                        <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                    </a>
                </div>
                <p class="text-danger">Once the timer hits zero, pricing will be increased to 899.00/-</p>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-centr">
                    <h1 class="fs-2 fw-bold text-center">Frequently Asked Questions
                    </h1>

                    <div class="accordion my-3" id="accordionExample">
                        <div class="accordion-item" style="background-color: #efa30e" style="background-color: #efa30e">
                            <h2 class="accordion-header" id="heading85">
                                <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse85" aria-expanded="true" aria-controls="collapse85">
                                    How does the program work?
                                </button>
                            </h2>
                            <div id="collapse85" class="accordion-collapse collapse" aria-labelledby="heading85"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body"
                                    style=" border-radius: 0 0 12px 12px"
                                    style=" border-radius: 0 0 12px 12px">
                                    <p>The program is a live bootcamp where you can attend all sessions in real-time.
                                        Support is available for any queries. The bootcamp offers an immersive learning
                                        experience to acquire knowledge and skills for web development.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion my-3" id="accordionExample">
                        <div class="accordion-item" style="background-color: #efa30e">
                            <h2 class="accordion-header" id="heading86">
                                <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse86" aria-expanded="true" aria-controls="collapse86">
                                    I made the payment but didn’t receive any confirmation or email from codekaro, what do I
                                    do?
                                </button>
                            </h2>
                            <div id="collapse86" class="accordion-collapse collapse" aria-labelledby="heading86"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body"
                                    style=" border-radius: 0 0 12px 12px">
                                    <p>Well, in most cases it should not happen. Make sure you give us 5-10 minutes in case
                                        you don’t receive any emails right away. Even then if you don’t receive anything
                                        from us, then please write to info@codekaro.in and our awesome support team will
                                        clarify your problems in 24-48 hours.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion my-3" id="accordionExample">
                        <div class="accordion-item" style="background-color: #efa30e">
                            <h2 class="accordion-header" id="heading87">
                                <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse87" aria-expanded="true" aria-controls="collapse87">
                                    I don't know a lot about web dev but I want to become a web developer. Should I take the
                                    Program?
                                </button>
                            </h2>
                            <div id="collapse87" class="accordion-collapse collapse" aria-labelledby="heading87"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body"
                                    style=" border-radius: 0 0 12px 12px">
                                    <p>Definitely. You should take the program as it will help you kickstart your journey as
                                        a web developer and also pick you up from the bed and make you stop procrastinating
                                        on the idea of becoming a web developer.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion my-3" id="accordionExample">
                        <div class="accordion-item" style="background-color: #efa30e">
                            <h2 class="accordion-header" id="heading88">
                                <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse88" aria-expanded="true" aria-controls="collapse88">
                                    I am not from computer science background. Will this program help me?
                                </button>
                            </h2>
                            <div id="collapse88" class="accordion-collapse collapse" aria-labelledby="heading88"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body"
                                    style=" border-radius: 0 0 12px 12px">
                                    <p>The goal of this program is to help you start your journey no matter what your
                                        situation is. It doesn't matter if you are from comouter science background or not,
                                        you'll be able to do it :)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion my-3" id="accordionExample">
                        <div class="accordion-item" style="background-color: #efa30e">
                            <h2 class="accordion-header" id="heading89">
                                <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse89" aria-expanded="true" aria-controls="collapse89">
                                    Can I get a refund?
                                </button>
                            </h2>
                            <div id="collapse89" class="accordion-collapse collapse" aria-labelledby="heading89"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body"
                                    style=" border-radius: 0 0 12px 12px">
                                    <p>No, currently we don’t have a refund policy.</p>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="accordion my-3" id="accordionExample">
                        <div class="accordion-item" style="background-color: #efa30e">
                            <h2 class="accordion-header" id="heading91">
                                <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse91" aria-expanded="true" aria-controls="collapse91">
                                    How will I access the content?
                                </button>
                            </h2>
                            <div id="collapse91" class="accordion-collapse collapse" aria-labelledby="heading91"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body"
                                    style=" border-radius: 0 0 12px 12px">
                                    <p>After you purchase the program, you’ll receive an email with all the details.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="my-5 l-cta text-center">
                        <a href="" data-bs-toggle="modal" data-bs-target="#enroll"
                            class="btn ck-btn ck-rounded btn-lg   px-5" data-bs-toggle="modal" data-bs-target="#enroll">
                            <h2 class="fs-3 mb-1 text-white fw-bold">Kickstart your webdev journey for just ₹99</h2>
                            <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                        </a>
                    </div>
                </div>
            </div>
    </section>

    <div class="m-cta text-light">
        <div class="">
            <p class="m-0 fw-bold text-light"> ₹99 <span class="small text-white fw-light"
                    style="text-decoration: line-through"> ₹ 899 </span></p>
            <p class="small m-0 text-light">Offer ends in <span class="text-light" id="hours2"></span> : <span
                    class="text-light" id="minutes2"></span> : <span class="text-light" id="seconds2"></span> </p>
        </div>
        <button data-bs-toggle="modal" data-bs-target="#enroll" class="bt button ">Join Bootcamp Now</button>
    </div>


    {{-- enrollment model  starts --}}
    <div class="modal" id="enroll" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded-5 shadow">
                {{-- <div class="modal-header px-5 pb-4 border-bottom-0 text-center"> --}}
                <!-- <h5 class="modal-title">Modal title</h5> -->
                {{-- <h2 class=" mb-0 fs-4">Join 30 days live Bootcamp</h2> --}}
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                {{-- </div> --}}

                <div class="modal-body p-4 pt-0 text-center mt-4">
                    {{-- <p class="small pt-3 fs-6">Modern CSS from the beginning - all the way up to Javascript expert level!</p> --}}
                    <h2 class=" mb-0 fs-3 fw-bold">Join 5 days live CSS bootcamp!</h2>
                    {{-- <p class="my-3 " style="font-size: 14px">Offer valid till</p> --}}
                    <div class="col-md-12 text-center mt-0 d-none">
                        <div id="countdown" class="">
                            <ul type="none" class="navbar justify-content-around p-0 text-center">
                                <li class="d-inlin fs-6"><span id="days1" class="d-block display-6 fw-bold"></span>
                                    <span>days</span> </li>
                                <li class="d-inlin fs-6"><span id="hours1"
                                        class="d-block display-6 fw-bold "></span>Hours</li>
                                <li class="d-inlin fs-6"><span id="minutes1"
                                        class="d-block display-6 fw-bold"></span>Minutes</li>
                                <li class="d-inlinx fs-6"><span id="seconds1"
                                        class="d-block display-6 fw-bold"></span>Seconds</li>
                            </ul>
                        </div>
                    </div>
                    <form action="{{ route('course-enrollment-auto') }}" method="POST" class="">
                        @csrf
                        <input type="hidden" name="source" value="{{ app('request')->input('utm_source') }}">
                        <input type="hidden" name="medium" value="{{ app('request')->input('utm_medium') }}">
                        <input type="hidden" name="campaign" value="{{ app('request')->input('utm_campaign') }}">


                        <div class="form-floating mt-3 mb-2">
                            <input type="text" required class="form-control" id="floatingInput" name="name"
                                placeholder="name@example.com" @auth value="{{ Auth::user()->name }}" @endauth>
                            <label for="floatingInput">Full Name</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" required class="form-control" id="floatingInput" name="email"
                                placeholder="name@example.com" @auth value="{{ Auth::user()->email }}" @endauth>
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="number" required class="form-control" id="floatingInput" name="mobile"
                                placeholder="name@example.com" @auth value="{{ Auth::user()->mobile }}" @endauth>
                            <label for="floatingInput">Mobile Number</label>
                        </div>
                        <div class="text-left p-3 mb-2" style="border: 1px solid #29cf84; text-align:left; border-radius: 12px" >
                            {{-- <div class="py-2" style="color:green">57% of Learners Choose this option to get 3x value</div>     --}}
                            <div class="text-left fw-600 mb-3 fs-6">VIP upgrade <span style="color:#29cf84; ">(Most Loved)</span></div>
                                {{-- <div class="text-left  text-muted my-2" style="font-size: 14px">Get access to curated list of 100+ frontend Interview questions and 25+ projects with chatGPT prompts that will increase your productivity by 10x! </div> --}}
                                {{-- <div class="d-flex align-items-center mb-2" style="gap: 8px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#29cf84" class="bi bi-check-all" viewBox="0 0 16 16">
                                        <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z"/>
                                      </svg>
                                      <span>1 Private zoom coaching call</span>
                                </div> --}}
                                {{-- <div class="d-flex align-items-center mb-2" style="gap: 8px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#29cf84" class="bi bi-check-all" viewBox="0 0 16 16">
                                        <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z"/>
                                      </svg>
                                      <span>Career guidance from Ashish</span>
                                </div> --}}
                                <div class="d-flex align-items-center mb-2" style="gap: 8px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#29cf84" class="bi bi-check-all" viewBox="0 0 16 16">
                                        <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z"/>
                                      </svg>
                                      <span>Get bootcamp recordings</span>
                                </div>
                                <div class="d-flex align-items-center mb-2" style="gap: 8px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#29cf84" class="bi bi-check-all" viewBox="0 0 16 16">
                                        <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z"/>
                                      </svg>
                                      <span>Get Javascript Crash Course (Recorded)</span>
                                </div>
                                <div class="d-flex align-items-center mb-2" style="gap: 8px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#29cf84" class="bi bi-check-all" viewBox="0 0 16 16">
                                        <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z"/>
                                      </svg>
                                      <span>Get 50+ Interview Questions</span>
                                </div>
                                <div class="d-flex align-items-center mb-2" style="gap: 8px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#29cf84" class="bi bi-check-all" viewBox="0 0 16 16">
                                        <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z"/>
                                      </svg>
                                      <span>Get 25+ HTML, CSS & JS projects</span>
                                </div>
                                
                                
                                <div>
                                    <span class="fs-6 fw-bold">₹199.00</span>
                                    <span style="text-decoration: line-through">₹2999.00</span>
                                </div>
                                
                                <div class="">
                                    <input type="checkbox" id="myCheckbox" name="myCheckbox" style="transform: scale(2); margin-left:6px; margin-right: 10px; margin-top:12px;" onchange="toggleRecordingCheckbox(this)">
                                    <label for="myCheckbox" style="">Yes, I need this.</label>
                                </div>

  
                                {{-- <div class="you-checkbox-item align-items-center p-0 m-0" style="border: 1px solid white; text-align:left; justify-content: left" onclick="toggleRecordingCheckbox(this)">
                            
                            
                            <div class="you-checkbox-green" >
                                <div class="you-checkbox-check">
                                    <img height="26px"
                                        src="https://uploads-ssl.webflow.com/5fdb2866020c200cd7fd7369/5feb5c987b9f08745a9463d2_check-mark-black-outline.svg"
                                        loading="lazy" alt="" class="you-checkbox-check-tick">
                                </div>
                            </div>
                            <div class="you-checkbox-text text-lef">
                                <div>Yes, I will take it.<span class="small text-success">(Most Popular)</span></div>
                                
                            </div>
                        </div> --}}
                    </div>
                        <p class="d-none">Three months access of recordings. Only available if you attend. This is <strong>EARLY
                                Bird</strong> offer, It will increase to 499 once the timer hits zero.
                        </p>
                        <input type="hidden" name="courseId" value="73">
                        <input type="hidden" id="recordingsCheckbox" name="recordingsCheckbox" value="0">
                        <button type="submit" class="enrollment-button d-flex align-items-center justify-content-center"
                            onclick="startLoader()">Join bootcamp now at Rs.<span class="text-white"
                                id="price">99</span>
                            <div id="loader" class="loade d-inline-block ms-2"></div>
                        </button>
                        <p style="font-size: 12px;" class="mt-3 mb-0 text-left">By registering here, I agree to Codekaro's
                            Terms & Conditions and Privacy Policy</p>
                    </form>

                    {{-- <p class="" style="color:red">Once the timer hits zero, pricing will be increased to 2199.00/-</p> --}}


                </div>

            </div>
        </div>
    </div>
    </div>
    {{-- enrollment model ends --}}




    {{-- enrollment model old  starts --}}
    {{-- <div class="modal" id="enroll" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded-5 shadow">

                <div class="modal-body p-4 pt-0 text-center mt-4">
                    <h2 class=" mb-0 fs-3 fw-bold ">Join 5 days live web dev bootcamp!</h2>
                    <div class="col-md-12 text-center mt-4">
                        <div id="countdown" class="d-non">
                            <ul type="none" class="navbar justify-content-around p-0 text-center">
                                <li class="d-inlin fs-6"><span id="days1" class="d-block display-6 fw-bold"></span>
                                    <span>days</span>
                                </li>
                                <li class="d-inlin fs-6"><span id="hours1"
                                        class="d-block display-6 fw-bold "></span>Hours</li>
                                <li class="d-inlin fs-6"><span id="minutes1"
                                        class="d-block display-6 fw-bold"></span>Minutes</li>
                                <li class="d-inlinx fs-6"><span id="seconds1"
                                        class="d-block display-6 fw-bold"></span>Seconds</li>
                            </ul>
                        </div>
                    </div>
                    @guest
                        <form action="{{ route('payment-success') }}" method="POST" class="">
                            @csrf
                            <script src="https://checkout.razorpay.com/v1/checkout.js" data-key='rzp_live_YFwQzuSuorFCPM' data-amount="9900"
                                data-buttontext="Join the bootcamp now" 
                                data-name="Codekaro" 
                                data-description="How to CSS"
                                data-image="{{ asset('assets/img/codekaro-dark.png') }}" data-theme.color="#0066ff">
                                @auth
                                data - prefill.name = "{{ Auth::user()->name }}"
                                data - prefill.email = "{{ Auth::user()->email }}"
                                data - prefill.contact = "{{ Auth::user()->mobile }}"
                                @endauth
                            </script>
                            <input type="hidden" name="courseId" value="33">
                        </form>
                    @endguest
                    @auth
                        <a href="{{ url('/enroll/33') }}" class=" razorpay-payment-button">Join the bootcamp now</a>

                    @endauth
                    <p class="" style="color:red">Once the timer hits zero, pricing will be increased to 899.00/-
                    </p>


                </div>

            </div>
        </div>
    </div>
    </div> --}}
    {{-- enrollment mode ends --}}

    <script>
        function toggleRecordingCheckbox(checkboxItem) {
            const checkbox = document.getElementById("recordingsCheckbox");
            const priceElement = document.getElementById("price");


            if (checkbox.value === "0") {
                checkbox.value = "1";
                checkboxItem.classList.add("checked");
                priceElement.innerText = "298";

            } else {
                checkbox.value = "0";
                checkboxItem.classList.remove("checked");
                priceElement.innerText = "99";

            }
        }

        function toggleCheckbox(checkboxItem) {
            checkboxItem.classList.toggle('checked');
        }

        function startTimer() {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;

            let targetDate = localStorage.getItem("targetDate");
            let expiration = localStorage.getItem("expiration");

            if (!targetDate || !expiration || new Date().getTime() > expiration) {
                targetDate = new Date();
                targetDate.setDate(targetDate.getDate() + 1); // Set target date to tomorrow
                targetDate.setHours(0, 0, 0, 0); // Set target time to midnight (12:00 AM)
                expiration = new Date(targetDate.getFullYear(), targetDate.getMonth(), targetDate.getDate(), 23, 59, 59,
                    999).getTime(); // Set expiration to end of the target date

                localStorage.setItem("targetDate", targetDate.getTime());
                localStorage.setItem("expiration", expiration);
            } else {
                targetDate = new Date(parseInt(targetDate));
            }

            function updateCountdown() {
                const now = new Date().getTime();
                let distance = targetDate.getTime() - now;

                if (distance <= 0) {
                    // Reset target date to the next day
                    targetDate.setDate(targetDate.getDate() + 1);
                    targetDate.setHours(0, 0, 0, 0); // Set target time to midnight (12:00 AM)
                    expiration = new Date(targetDate.getFullYear(), targetDate.getMonth(), targetDate.getDate(), 23, 59, 59,
                        999).getTime(); // Set expiration to end of the target date

                    localStorage.setItem("targetDate", targetDate.getTime());
                    localStorage.setItem("expiration", expiration);

                    // Recalculate the distance with the updated target date
                    distance = targetDate.getTime() - now;
                }

                const days = Math.floor(distance / day);
                const hours = Math.floor((distance % day) / hour);
                const minutes = Math.floor((distance % hour) / minute);
                const seconds = Math.floor((distance % minute) / second);

                document.getElementById("days").innerText = days;
                document.getElementById("hours").innerText = hours;
                document.getElementById("minutes").innerText = minutes;
                document.getElementById("seconds").innerText = seconds;

                document.getElementById("days1").innerText = days;
                document.getElementById("hours1").innerText = hours;
                document.getElementById("minutes1").innerText = minutes;
                document.getElementById("seconds1").innerText = seconds;

                document.getElementById("hours2").innerText = hours;
                document.getElementById("minutes2").innerText = minutes;
                document.getElementById("seconds2").innerText = seconds;
                if (distance < 0) {
                    clearInterval(timer);
                    document.getElementById("headline").innerText = "Class has Started!";
                    document.getElementById("countdown").style.display = "none";
                    document.getElementById("content").style.display = "block";
                    localStorage.removeItem("targetDate");
                    localStorage.removeItem("expiration");
                }
            }

            updateCountdown();
            const timer = setInterval(updateCountdown, 1000);
        }

        startTimer();

        function addShakeAnimation() {
            var button = document.querySelector('.button');
            button.classList.add('shake');
            setTimeout(function() {
                button.classList.remove('shake');
            }, 300);
        }

        setInterval(addShakeAnimation, 3000);
    </script>
{{-- <script src="{{asset('js/codekaro.js')}}" defer></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>
</html>