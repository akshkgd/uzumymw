<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    @guest
    <a class="navbar-brand fw-bold text-primary fs-5" href="{{url('/')}}">Codekaro</a>
    @endguest
    @auth  
    <a class="navbar-brand fw-bold text-primary fs-5" href="{{url('/home')}}">Codekaro</a>
    @endauth
    <span class="ms-auto">
      @guest
      <a href="" type="button" class="btn btn-dark px-4 rounded-pill hidden-lg" data-bs-toggle="modal"
      data-bs-target="#login">
      Login </a>
      @endguest
      
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
    </span>
    
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      
      <div class="navbar-nav">
        <a class="nav-link " aria-current="page" href="{{url('/event')}}">Free Classes</a>
        <a class="nav-link" href="{{url('/course')}}">Course</a>
        <a class="nav-link" href="{{url('/about')}}">About us</a>
      </div>
      <div class="ms-auto">
        @guest
        <ul class="navbar-nav">
                    <a href="" class="nav-link " data-bs-toggle="modal" data-bs-target="#register">Register</a>
                    <a href="" type="button" class="btn btn-dark px-4 rounded-pill hidden-sm" data-bs-toggle="modal"
                        data-bs-target="#login">
                        Login </a>
                      </ul>
                @endguest
                @auth
                <ul class="navbar-nav">
                    <li class="dropdown ms-2">
                        <a class="rounded-circle" href="#" role="button" data-bs-toggle="dropdown">
                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                <img alt="avatar" src="{{ Auth::user()->avatar }}" class="rounded-circle mt-2"
                                    height="40" />
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end shadow">
                            <div class="dropdow px-3">
                                <div class="d-flex">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img alt="avatar" src="{{ Auth::user()->avatar }}" class="rounded-circle"
                                            height="50" />
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <p class="mt-2">Annette Black</h5>
                                            <small class="mb-0 text-muted">annette@geeksui.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="dropdown-item" href="./pages/profile-edit.html">
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./pages/profile-edit.html">
                                        My Classes
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./pages/profile-edit.html">
                                        My Account
                                    </a>
                                </li>

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
                        </div>
                    @endauth
                  
      </div>
    </div>
  </div>
</nav>
                
        

<!-- navbar ends -->
