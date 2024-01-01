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
     
    <a class="navbar-brand fw-bold fs-4" href="{{url('/home')}}">Codekaro</a>

    <span class="ms-auto">
      
      
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
    </span>
    
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      
      <div class="navbar-nav">
        <a class="nav-link ms-3" aria-current="page" href="{{url('/event')}}">Free Classes</a>
        <a class="nav-link" href="{{url('/course')}}">Course</a>
        <a class="nav-link" href="{{url('/about')}}">About us</a>
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
                                    height="32" />
                                    
                            </div>
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-end shadow w-10">
                            <div class="dropdown ">
                                
                            </div>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="dropdown-item" href="{{url('/home')}}"> Dashboard</a>
                                </li>
                                
                                <li>
                                    <a class="dropdown-item" href="{{url('/my-account')}}">My Account</a>
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
