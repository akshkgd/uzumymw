@extends('layouts.app')
<style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> </>
</style>
@section('content')

    {{-- <div class="navbar-container">
        <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white"> --}}
            <div class="navbar-container ">
                <nav class="navbar navbar-expand-lg navbar-dark" data-overlay >
                    <div class="container">
    
                        <a class="navbar-brand" href="{{url('/home')}}">
                          <span>Codekaro</span>
                        </a> 
                      
                        
                        <div class="d-flex align-items-center order-lg-3">
                        
                      
                          <a href="{{url()->previous()}}" class="btn btn-light border-none px-3 py-1  fw-400" style="letter-spacing: 0;">Go Back</a>  
                         
                          
                        </div>
                        
                      </div>
        </nav>

    </div>

    <section class="bg-dark text-light header-inner p-0 jarallax o-hidden" data-overlay data-jarallax data-speed="0.2">
        <img src="{{asset('assets/img/teacher-recruitment-banner.jpeg')}}" alt="Image" class="jarallax-img opacity-100">
        <div class="container py-0 layer-2">
          
          <div class="row my-4 my-md-6 justify-content-center" data-aos="fade-up">
            <div class="col-lg-9 col-xl-8  text-center">
              <h1 class="display-4">Teach with us</h1>
              <p class="lead " style="padding-bottom: 250px">The place where transformation happens not only for students, but also for you, the tutor.
                With a culture of growth, the objective is to learn, practice and evolve.</p>
                
            </div>
          </div>
        </div>
        
        {{-- <div class="divider flip-x">
          <img src="assets/img/dividers/divider-1.svg" alt="graphical divider" data-inject-svg />
        </div> --}}
      </section>

<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="teacher-card">
                    <img src="{{asset('assets/img/teacher-icon-1.png')}}" alt="" class="teacher-icon">
                    <h5>Flexible work hours</h5>
                    <p class="lead">From home</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="teacher-card">
                    <img src="{{asset('assets/img/teacher-icon-2.png')}}" alt="" class="teacher-icon">
                    <h5>Competitive pay</h5>
                    <p class="lead">With incentives</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="teacher-card">
                    <img src="{{asset('assets/img/teacher-icon-3.png')}}" alt="" class="teacher-icon">
                    <h5>Upscale skill sets</h5>
                    <p class="lead">Through value-addition</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="teacher-card">
                    <img src="{{asset('assets/img/teacher-icon-4.png')}}" alt="" class="teacher-icon">
                    <h5>Network and learn</h5>
                    <p class="lead">With a community</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="text-center">
                    <h1>Codekaro is an online tech-versity that enhances the skills of students</h1>
                    {{-- <p>Our induction process includes elevating your potential to be one of Codekaro’s beloved teachers. All you need is a positive outlook and we take care of the rest!</p> --}}
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 mt-5">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('assets/img/si.png')}}" alt="" class="">
                    <div class="ml-2">
                        <h4 class="m-0">11000+ </h4>
                        <p class="m-0">Students</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-5">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('assets/img/ai.png')}}" alt="" class="">
                    <div class="ml-2">
                        <h4 class="m-0">50+ </h4>
                        <p class="m-0">Teachers</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-5">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('assets/img/mi.png')}}" alt="" class="">
                    <div class="ml-2">
                        <h4 class="m-0">10000+ g </h4>
                        <p class="m-0">Students</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-5">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('assets/img/ti.png')}}" alt="" class="">
                    <div class="ml-2">
                        <h4 class="m-0">100000+ </h4>
                        <p class="m-0">Hours Teach</p>
                    </div>
                </div>
            </div>
</section>

<section class="mb-0 pb-0">
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="text-center">
                    <h1>How to become a teacher</h1>
                    <p>Our induction process includes elevating your potential to be one of Codekaro’s beloved teachers. All you need is a positive outlook and we take care of the rest!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mt-4">
                <div class="text-center">
                       <img src="{{asset('assets/img/wtr.svg')}}" alt="">
                      
                      <p>Step 1</p>
                      <h5 class="mb-0">Application Form</h5>
                      <p>Tell us about yourself and what teaching means to you</p>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="text-center">
                    <img src="{{asset('assets/img/time.svg')}}" alt="">
                   
                   <p>Step 2</p>
                   <h5 class="mb-0">Show us your skills</h5>
                   <p>Show us your teaching skills and demonstrate your content knowledge</p>
             </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="text-center">
                    <img src="{{asset('assets/img/hd.svg')}}" alt="">
                   
                   <p>Step 3</p>
                   <h5 class="mb-0">Interview</h5>
                   <p>Explore if Lido is the best fit for you and if you are the best fit for Lido</p>
             </div>
            </div>
            

        </div>
    <div class="text-center my-5">
        <a href="" class="btn btn-dark">Start Application</a>
    </div>


    </div>

    
</section>



@include('layouts.footer')
    @endsection