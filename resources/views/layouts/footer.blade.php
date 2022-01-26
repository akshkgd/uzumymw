<footer class="pb-5 bg-primary-3 text-light">
      <div class="container">
        <div class="row mb-4 justify-content-center">
          <div class="col-auto">
            <a href="index.html" class=""> <h2 class="text-muted">Codekaro</h1>
              <!-- <img src="assets/img/logo-white.svg" alt="Leap" class="icon icon-lg"> -->
            </a>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col">
            <ul class="nav justify-content-center">
              <li class="nav-item"><a href="{{url('/course')}}" class="nav-link">Courses</a>
              </li>
              <li class="nav-item"><a href="{{url('/about')}}" class="nav-link">About Us</a>
              </li>
              <li class="nav-item"><a href="{{url('/contact-us')}}" class="nav-link">Contact Us</a>
              </li>
              <li class="nav-item"><a href="{{url('/privacy')}}" class="nav-link">Privacy Policy</a>
              </li>
              <li class="nav-item"><a href="{{url('/teach')}}" class="nav-link">Become a Teacher</a></li>
              <li class="nav-item"><a href="https://codekaro.freshdesk.com/support/home" class="nav-link">Raise Ticket</a></li> {{-- <li class="nav-item"><a href="#" class="nav-link">Elements</a> --}} </li>
            </ul>
          </div>
        </div>
        <div class="row justify-content-center mt-5 mb-5">
          <div class="col-auto">
            <ul class="nav">
              <li class="nav-item">
                <a href="https://www.instagram.com/codekaro.in/" class="nav-link">
                  <img class="icon " src="{{asset('assets/img/icons/social/instagram.svg')}}" alt="instagram social icon" data-inject-svg />
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <img class="icon " src="{{asset('assets/img/icons/social/twitter.svg')}}" alt="twitter social icon" data-inject-svg />
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <img class="icon " src="{{asset('assets/img/icons/social/youtube.svg')}}" alt="youtube social icon" data-inject-svg />
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <img class="icon " src="{{asset('assets/img/icons/social/medium.svg')}}" alt="medium social icon" data-inject-svg />
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <img class="icon " src="{{asset('assets/img/icons/social/facebook.svg')}}" alt="facebook social icon" data-inject-svg />
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-xl-10">
            <small class="text-muted">&copy;2021 All Rights Reserved. Codekaro is a registered bussiness under Efslon global solutions. </small>
          </div>
        </div>
      </div>
     
    </footer>
    {{-- <a href="#" class="btn back-to-top p-3 btn-primary btn-round" data-smooth-scroll data-aos="fade-up" data-aos-offset="100" data-aos-mirror="true" data-aos-once="false">
      <img class="icon" src="assets/img/icons/social/facebook.svg" alt="arrow-up icon" data-inject-svg />
    </a> --}}
    {{-- <div class="dropup">
      <button class="btn btn-dark p-3 bg-dark btn-round btn-floating" data-smooth-scroll data-aos="fade-up" data-aos-offset="150" data-aos-mirror="true" data-aos-once="false" data-toggle="tooltip" data-placement="left" tile="Chat on WhatsApp" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="icon " src="assets/img/icons/theme/communication/chat-4.svg" alt="twitter social icon" data-inject-svg />
        </button>
      <div class="dropdown-menu">
        <h6 class="dropdown-header">Heading</h6>
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </div> --}}

    <div class="dropu">
      {{-- <a href="https://api.whatsapp.com/send/?phone=917355191435" class="btn btn-dark rounded-pill bg-dark  btn-floating" data-smooth-scroll data-aos="fade-up" data-aos-offset="150" data-aos-mirror="true" data-aos-once="false"  data-placement="left"  type="button" aria-haspopup="true" aria-expanded="false">
       <span>Chat on WhatsApp</span> <img class="icon " src="{{asset('assets/img/icons/theme/communication/chat-4.svg')}}" alt="twitter social icon" data-inject-svg />
      </a> --}}
      {{-- <script>
        function initFreshChat() {
          window.fcWidget.init({
            token: "b925c806-4051-48e0-8a3c-1afc12db5946",
            host: "https://wchat.in.freshchat.com"
          });
        }
        function initialize(i,t){var e;i.getElementById(t)?initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,e.src="https://wchat.in.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))}function initiateCall(){initialize(document,"Freshdesk Messaging-js-sdk")}window.addEventListener?window.addEventListener("load",initiateCall,!1):window.attachEvent("load",initiateCall,!1);
      </script> --}}
     {{-- <div class="dropdown-menu">
        <h6 class="dropdown-header">Heading</h6>
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div> --}}
      <script> (function (d, w, c) { if(!d.getElementById("spd-busns-spt")) { var n = d.getElementsByTagName('script')[0], s = d.createElement('script'); var loaded = false; s.id = "spd-busns-spt"; s.async = "async"; s.setAttribute("data-self-init", "false"); s.setAttribute("data-init-type", "opt"); s.src = 'https://cdn.in-freshbots.ai/assets/share/js/freshbots.min.js'; s.setAttribute("data-client", "d75c9881e6c2d2ee972af1fa53a000fa71357eda"); s.setAttribute("data-bot-hash", "76bf697914c605533ab6ce73d8e8b0337b920698"); s.setAttribute("data-env", "prod"); s.setAttribute("data-region", "in"); if (c) { s.onreadystatechange = s.onload = function () { if (!loaded) { c(); } loaded = true; }; } n.parentNode.insertBefore(s, n); } }) (document, window, function () { Freshbots.initiateWidget({ autoInitChat: false, getClientParams: function () { return ; } }, function(successResponse) { }, function(errorResponse) { }); }); </script>
    </div>
    
