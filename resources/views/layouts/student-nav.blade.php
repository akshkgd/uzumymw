<style>
    @media (min-width: 992px){
.navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
    border: none;
    border-radius: 14px;
}}
.dropdown-item{
    padding: 10px 12px;
}
.dropdown-menu{
    width: 200px;
    border: none;
}
</style>
<nav class="navbar navbar-expand-lg navbar-light border-botto">
  <div class="container">
     
    <a class="navbar-brand fw-bold fs-5" href="{{url('/home')}}"><img src="{{asset('assets/img/black.svg')}}" height="40" alt=""></a>

    <span class="ms-auto">
      
      
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
    </span>
    
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      
      <div class="navbar-nav">
        {{-- <a class="nav-link ms-3" aria-current="page" href="{{url('/event')}}">Free Classes</a> --}}
        {{-- <a class="nav-link" href="{{url('/course')}}">Course</a> --}}
        {{-- <a class="nav-link" href="{{url('/about')}}">About us</a> --}}
      </div>
      <div class="ms-auto">
       
                @auth
                {{-- <div class="dropdown">
                    <button class="btn btn-outline-dar dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      Ashish
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end shadow">
                      <li><a class="dropdown-item" href="{{url('/my-account')}}">profile</a></li>
                      <li><a class="dropdown-item" href="{{url('/home')}}">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                      <li>
                        <a href="{{ route('logout') }}" class="dropdown-item fw-400 text-danger" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>

                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                        style="display: none;">
                        @csrf
                    </form>
                    </ul>
                  </div> --}}
                <ul class="navbar-nav">
                    <li class="dropdown ms-2">
                        <a class="rounded-circle" href="#" role="button" data-bs-toggle="dropdown">
                            <div class="">
                                <img alt="avatar" src="{{ Auth::user()->avatar }}" class="rounded-circle "
                                    height="42" />
                                    
                            </div>
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-end shadow w-10">
                            <div class="dropdown ">
                                
                            </div>
                            <ul class="list-unstyled">
                                {{-- <li><a class="dropdown-item dropdown-flex" href="{{url('/home')}}"> <img class="d-icon" height="20" src="{{asset('assets/img/dprofile.svg')}}" alt=""> <span>Dashboard</span></a></li> --}}
                                <li><a class="dropdown-item dropdown-flex" href="{{url('/my-account')}}"> <img class="d-icon" height="20" src="{{asset('assets/img/dprofile.svg')}}" alt=""> <span>Profile</span></a></li>
                                <li><a class="dropdown-item dropdown-flex" href="{{url('/home')}}"> <img class="d-icon" height="20" src="{{asset('assets/img/dcourses.svg')}}" alt=""> <span>Courses</span></a></li>
                                <li><a class="dropdown-item dropdown-flex" href="{{url('/payments')}}"> <img class="d-icon" height="20" src="{{asset('assets/img/dpayments.svg')}}" alt=""> <span>Payments History</span></a></li>
                                
                                {{-- <li><a class="dropdown-item" href="{{url('/my-account')}}">Profile</a></li> --}}
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    @php
                                        $email = Auth::user()->email;
                                        $obfuscatedEmail = substr($email, 0, 2) . str_repeat('•', strlen($email) - 6) . substr($email, -4);
                                    @endphp
                                    <a href="{{ route('logout') }}" class="dropdown-item fw-400 d-logout" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">Sign out
                                       <div class="mt-1">{{$obfuscatedEmail}}</div>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>

                                </li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>

                            </ul>
                        </div>
                    @endauth
                  
      </div>
    </div>
  </div>
</nav>
                
        

<!-- navbar ends -->
