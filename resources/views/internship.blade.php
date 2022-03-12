@extends('layouts.ck')
<style>
  .ck-btn{
        
        background-image: linear-gradient(99deg, rgb(247, 69, 48), rgb(255, 50, 120));
        border: 1px solid transparent;
        border:none;
        color: white;
        padding: 12px 46px !important;
        font-weight:400;
        display: inline-block;
        cursor: pointer;
        font-size: 16px;
        border-radius: 100px;
        box-shadow: rgb(247 123 155 / 71%) 0px 3px 16px 0px;
    }
</style>
@section('content')
    {{-- <div class="alert bg-primary-alt text-primary m-0 text-center fw-400 ck-font" role="alert" style="border-radius:0">
    New masterclasses has been launched 🥳 <a href="{{url('/event')}}" class="alert-link">Check Now</a>. Limited seats available.
  </div> --}}
    
    @include('layouts.ck-header')
    <div class="container">
        @include('layouts.alert')
    </div>

    
    <section class="pt-0 pt-md-0 pt-lg-0 pt-xlg-0 ">
        <div class="container mt-0 pt-lg-5 hero">
            <div class="row justify-content-center align-items-cente">
                <div class="col-md-6">
                    <h1 class="fw-bold display-4 mt-5">Internship Program In
                      <span class="wd_highlight1">Frontend Development</span>  </h1>
                    <p>Master in-demand full-stack or backend skills with real work experience of building
                        professional work-like projects. Gain the skills and experience needed to crack jobs
                        in unicorns, MNCs, & more.</p>

                        <a href="" class="btn btn-dark btn-lg px-5 rounded-pill">Enroll Now</a>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('assets/img/Homepage-Hero.webp')}}" class="img-fluid" alt="">
                </div>

            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center">
                    <h1 class="fw-bold">Developers From Crio <br>
                        Have Cracked Careers In</h1>
                </div>
                <div class="col-md-12">
                    @foreach ($users as $user)
                        <div class="card rounded-pill  d-inline-block  m-2">
                            <div class="d-flex px-2  py-1">
                                <img src="{{$user->avatar}}" class="avatar" alt="">
                                <div class="mx-3">
                                    <h4 class="fs-5 m-0">{{$user->name}}</h4>
                                    <p class="m-0">{{$user->college}}</p>
                                </div>
                            </div>
                            
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>