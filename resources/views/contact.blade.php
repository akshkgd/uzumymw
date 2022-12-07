@extends('layouts.app')
@section('content')
<div class="navbar-container ">
  <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white">
    @include('layouts.header')
  </nav>
</div>



<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5  ">
        <div class="text-center">
          <img src="{{asset('assets/img/groups.png')}}" alt="" class="img-fluid">
          <h1 class="display-5">Contact Us</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
    <div class="container">
      <div class="row text-center">
        <div class="col-sm-4 mb-3 mb-sm-0">
          <h3 class="h2">Visit</h3>
          <span class="lead">
            585/9 gaughat
            <br>Prayagraj, Uttar Pradesh
            <br>
          </span>
        </div>
        <div class="col-sm-4 mb-3 mb-sm-0">
          <h3 class="h2">Email</h3>
          <a href="#" class="lead">info@codekaro.in</a>
        </div>
        <div class="col-sm-4 mb-3 mb-sm-0">
          <h3 class="h2">Call</h3>
          <span class="lead">
            8542929271
          </span>
          <div class="text-small text-muted">Mon - Fri, 9am - 5pm</div>
        </div>
      </div>
    </div>
  </section>

  @include('layouts.footer')
@endsection