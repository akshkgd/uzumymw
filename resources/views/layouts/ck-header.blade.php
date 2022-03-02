<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light  bg-white">
    <div class="container">
      <a class="navbar-brand fw-700 text-primary fs-5" href="#">
         Codekaro
      </a>
      
      <span>
        @guest
        <button type="button" class="btn btn-dark px-4 rounded-pill hidden-lg" data-bs-toggle="modal" data-bs-target="#login">
          Login </button>
        @endguest
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      </span>
      
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scrol">
          
          <li class="nav-item">
            <a class="nav-link" href="#">Free Classes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Course</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">About Us</a>
            </li>
          

          
        </ul>
        <form class="d-flex">
          <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
          <a href="" class="nav-link text-dark" data-bs-toggle="modal" data-bs-target="#register">Register</a>
@guest
          <button type="button" class="btn btn-dark px-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#login">
              Login </button>
@endguest
        </form>
      </div>
    </div>
  </nav>

  <!-- navbar ends -->