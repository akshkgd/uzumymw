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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HC9ETJV29G"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HC9ETJV29G');
    </script>
   
    <!-- CSS only -->
    <link href="{{asset('css/admin.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/ck-style.css')}}" rel="stylesheet" type="text/css" media="all" />

    {{-- <link rel="preload" as="font" href="assets/fonts/Inter-UI-upright.var.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="assets/fonts/Inter-UI.var.woff2" type="font/woff2" crossorigin="anonymous"> --}}
  </head>

  <body>
  
 
 
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container">
        <a class="navbar-brand text-primar fw-700 fs-4" style="color:#0066ff" href="{{url('/home')}}">
            Codekaro
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarScroll"
          aria-controls="navbarScroll"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul
            class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
            style="--bs-scroll-height: 100px"
          >
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Course
                </a>
                <ul class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">New Course</a></li>
                  <li><a class="dropdown-item" href="#">All Course</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Webinars
                </a>
                <ul class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">New Webinar</a></li>
                  <li><a class="dropdown-item" href="#">All Webinar</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Quick Actions
                </a>
                <ul class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{url('admin/feedbacks')}}">Feedbacks</a></li>
                  <li><a class="dropdown-item" href="#">All Webinar</a></li>
                  <li><a class="dropdown-item" href="{{url('admin/css-enrollments')}}">CSS Enrollments</a></li>
                  <li><a class="dropdown-item" href="{{url('admin/add-access')}}">Grant Access</a></li>


                </ul>
              </li>
          </ul>
          <ul class="navbar-nav">
            <li class="dropdown ms-2">
				<a
					class="rounded-circle"
					href="#"
					role="button"
					data-bs-toggle="dropdown"
				>
					<div class="" >
						<img alt="avatar" src="{{Auth::user()->avatar}}" class="avatar-sm"/>
					</div>
				</a>
            <div class="dropdown-menu dropdown-menu-end shadow">
                <div class="dropdow px-3">
                    <div class="d-flex">
                        <div class=" avatar-md avatar-indicators avatar-online">
                            <img
                                alt="avatar"
                                src="{{Auth::user()->avatar}}"
                                class="rounded-circle" height="50"/>
                        </div>
                        <div class="ms-3 lh-1">
                            <p class="mt-2">{{Auth::user()->user_name}}</h5>
                            <small class="mb-0 text-muted">{{Auth::user()->email}}</p>
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <ul class="list-unstyled">
                    <li class="dropdown-submenu">
                        <a
                            class="dropdown-item dropdown-list-group-item dropdown-toggle"
                            href="#"
                        >
                            <i class="fe fe-circle me-2"></i>Status
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <span class="badge-dot bg-success me-2"></span>Online
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <span class="badge-dot bg-secondary me-2"></span>Offline
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <span class="badge-dot bg-warning me-2"></span>Away
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <span class="badge-dot bg-danger me-2"></span>Busy
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="dropdown-item" href="./pages/profile-edit.html">
                            <i class="fe fe-user me-2"></i>Profile
                        </a>
                    </li>
                    <li>
                        <a
                            class="dropdown-item"
                            href="./pages/student-subscriptions.html"
                        >
                            <i class="fe fe-star me-2"></i>Subscription
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="fe fe-settings me-2"></i>Settings
                        </a>
                    </li>
                </ul>
                <div class="dropdown-divider"></div>
                <ul class="list-unstyled">
                    <li>
                        {{-- <a class="dropdown-item" href="./index.html">
                            <i class="fe fe-power me-2"></i>Sign Out
                        </a> --}}
                        <a href="{{route('logout')}}" class="dropdown-item"
          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      <span>Logout</span>
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form> 
                    </li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <!-- navbar ends -->
    @yield('content')











          <script>
            displayRegisterForm = ()=>{
                document.getElementById('register-form').style.display = "block";
                document.getElementById('continue-email-register-button').style.display = "none";
            }

            function timeOfDay() {
                let hour = new Date().getHours();
                if (hour >= 4 && hour <= 11) return 'Morning';
                if (hour >= 12 && hour <= 16) return 'Afternoon';
                if (hour >= 17 && hour <= 20) return 'Evening';
                if (hour >= 21 || hour <= 3) return 'Night';
            }
            document.getElementById("time").innerHTML = (`Good ${timeOfDay()},`);
            if (timeOfDay() == 'Morning') {
                document.getElementById("test").style.background = "#f8d2c3";
                document.getElementById("greet").style.color = "#f28b82";
            }
            if (timeOfDay() == 'Afternoon') {
                document.getElementById("test").style.background = "#ffefc3";
                document.getElementById("greet").style.color = "#fbc129";
            }
            if (timeOfDay() == 'Evening') {
                document.getElementById("test").style.background = "#ceead6";
                document.getElementById("greet").style.color = "#4185f4";
            }
            if (timeOfDay() == 'Night') {
                document.getElementById("test").style.background = "#d2e3fc";
                document.getElementById("greet").style.color = "#4185f4";
            }
        </script>

    <script src="{{asset('/js/ck-js.js')}}"></script>
  </body>
</html>
