@extends('layouts.ck')
@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container ">
     
      <a class="navbar-brand fw-bold text-primary fs-4" href="{{url('/')}}">Codekaro</a>
    </div>
</nav>


<section class="pt-0 pt-md-0 pt-lg-0 pt-xlg-0 ">
    <div class="container mt-0 pt-lg-5 hero align-items-center" style="">
        <div class="row justify-content-center ">
          <div class="col-sm-4 col-lg-3 mt-5 text-center">
            <img src="{{asset('assets/img/4041.png')}}" class="hero-img" alt="">
          </div>
        </div>
        <div class="row justify-content-center ">
          <div class="col-lg-8 text-center">
            <div class="">
              <!-- fw-700 fw-sm-ligh ck-mt-sm-5 -->
              <h1 class="display-3 fw-bolder mt-2"><span class="highlighter- wd_highlight1">Ooops...</span> 
            </h1>
            <p class="fs-">
              404, The page you are looking for does not exist.
            </p>
            <p></p>
            <a href="" class="btn btn-dark rounded-pill fw-light px-5 text-capitalize">Go Back</a>
            <!-- <img src="./img/discord.svg" alt="" class="img-fluid hidden-lg mt-5"> -->
  
          </div>
</section>
@endsection