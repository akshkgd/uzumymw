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
    
  
      <a href="{{url()->previous()}}" class="btn btn-outline-primary-3 px-3 py-1  fw-400" style="letter-spacing: 0;">Go Back</a>  
     
      
    </div>
    
  </div>