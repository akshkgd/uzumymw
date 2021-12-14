<div class="container">
  @guest
  <a class="navbar-brand" href="{{url('/')}}">
    {{-- <img src="assets/img/tlogo.png" alt="Leap"> --}}
    <span style="" class="layer-">Codekaro
      
    </span>
    
  </a>  
  @endguest
  @auth
  <a class="navbar-brand" href="{{url('/home')}}">
    {{-- <img src="assets/img/tlogo.pn" alt="Leap"> --}}
    <span>Codekaro</span>
  </a> 
  @endauth
  
  <div class="d-flex align-items-center order-lg-3">
    {{-- <form>
      <div class="d-non collapse  input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon-1">
            <img class="icon" src="assets/img/icons/theme/general/search.svg" alt="search icon" data-inject-svg />
          </span>
        </div>
        <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon-1">
      </div>
    </form> --}}
    @auth
    
    <div class="dropdown ml-2">
      @if(Auth::user()->google_id == '')
      <img src="{{asset(Auth::user()->avatar)}}" alt="User" class="avatar avatar-sm dropdown-toggle" data-toggle="dropdown" data-hover="true" aria-haspopup="true" aria-expanded="false">
      @else
      <img src="{{Auth::user()->avatar}}" alt="User" class="avatar avatar-sm dropdown-toggle" data-toggle="dropdown" data-hover="true" aria-haspopup="true" aria-expanded="false">
      @endif
      <div class="dropdown-menu dropdown-menu-right dropdown-content mb-0 pb-0">
        <div class="dropdown-header">
          <h6 class="dropdown-ite m-0  text-dark ck-font">{{Auth::user()->name}}</h6>
          <p class="lea text-primary">{{Auth::user()->email}}</p>
        </div>
        
        <hr class="pb-2 mb-0">
        {{-- <a class="dropdown-item" href="{{url('/home')}}">
          <img class="icon text-dark mr-1" src="{{asset('assets/img/icons/theme/text/menu.svg')}}" alt="heart icon" data-inject-svg />
          <span class="">Dashboard</span>
        </a> --}}
        {{-- <a class="dropdown-item " href="{{url('/my-course')}}">
          <img class="icon text-dark mr-1" src="{{asset('assets/img/icons/theme/code/terminal.svg')}}" alt="heart icon" data-inject-svg />
          <span>My Learnings</span>
        </a> --}}
        <a class="dropdown-item" href="{{url('/my-account')}}">
          <img class="icon text-dark mr-1" src="{{asset('assets/img/icons/theme/general/user.svg')}}" alt="heart icon" data-inject-svg />
          <span>My Account</span>
        </a>
        <a href="{{route('logout')}}" class="dropdown-item"
          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      <img class="icon text-dark mr-1" src="{{asset('assets/img/icons/theme/navigation/sign-out.svg')}}" alt="heart icon" data-inject-svg />
                      <span>Logout</span>
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form> 
      </div>
    </div>
   
    @endauth

    @guest
    <a href="{{url('/login')}}" class=" text-primary-3" style="letter-spacing: 0;">Login</a>  
    <a href="{{url('/redirect')}}" class="btn btn-primary-3 ml-2 fw-400" style="letter-spacing: 0;">Try for Free</a>  
    @endguest
    <div class="ml-2">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <img class="icon navbar-toggler-open" src="{{asset('assets/img/icons/interface/menu.svg')}}" alt="menu interface icon" data-inject-svg />
        <img class="icon navbar-toggler-close" src="{{asset('assets/img/icons/interface/cross.svg')}}" alt="cross interface icon" data-inject-svg />
      </button>
    </div>
  </div>
  <div class="collapse navbar-collapse justify-content-between order-lg-2">
    <div class="py-2 py-lg-0">
      <ul class="navbar-nav">
        <li class="nav-item"><a href="{{url('/course')}}" class="nav-link">Courses</a>
        </li>
        <li class="nav-item"><a href="{{url('/event')}}" class="nav-link">Free Classes</a>
        </li>
        @guest
        {{-- <li class="nav-item"><a href="{{url('/faq')}}" class="nav-link">Faq</a> --}}
        </li>
        <li class="nav-item"><a href="{{url('/about')}}" class="nav-link">About</a>
        </li>
        @endguest
        @auth
        @if(Auth::user()->role == 0)
        <li class="nav-item"><a href="{{url('/my-course')}}" class="nav-link">My Courses</a>
        </li>
        @endif
      
        @if(Auth::user()->role == 1)
        <li class="nav-item"><a href="{{url('/my-classes')}}" class="nav-link">My Classes</a>
        
      </li> 

        @endauth
      @endif
      

      
      </ul>
    </div>
  </div>
</div>