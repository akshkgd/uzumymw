@extends('layouts.app')

@section('content')
<div class="navbar-container ">
    <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white">
        @include('layouts.header')
    </nav>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<style>
    .fi {
    height: 160px;
    width: max-content;
    object-fit: cover;
    object-position: center center;

}
.bi-star-half::before {
    padding-bottom: 3px;
}
body{
    /* background-color: rgb(250, 250, 250); */
}

</style>
    <div class="container pb-0 pt-5">
      <div class="row align-items-center justify-content-center o-hidden">
        {{-- <div class="col-md-4 order-sm-2 mb-5 mb-sm-0" data-aos="fade-left">
          <img src="assets/img/t.svg" alt="Image">
        </div> --}}
        <div class="col-md-8 pr-xl-5 order-sm-1 text-center">
            <h1 class="display-5 "> @auth
                Hi <span>{!!strtok(Auth::user()->name, "
                         ")!!}</span>,  <br>
                 @endauth Let's learn coding with live classes</h1>
            <div class="my-4">
              {{-- <p class="lead">There are 72M students learning to code around the world. We try to make learning more
                  accessible, equitable and more seamless for them.</p> --}}
            </div>
            
        </div>
      </div>
    </div>
   
  </section>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                {{-- <h1 class="display-6 ck-font">Lets do Coding! </h1> --}}
                    <div class="row">
                        @foreach ($batches as $batch)
                        <div class="col-md-6 col-lg-4">
                            <a class="card hover-shadow-sm border-none shadow"
                                href="{{action('BatchController@details', $batch->id )}}">
                                <img src="{{ asset('storage/'.$batch->img) }}" alt="Image" class="card-img-top">
                                <div class="card-bod d-flex flex-column">
                                    <div class=" p-2">
                                        <h4 class="mb-0 ck-font fw-400">{{$batch->name}}</h6>
                                        
                                            <p class="m-0 pt-2">From {{Carbon\Carbon::parse($batch->startDate)->format('D, d M Y')}} to {{Carbon\Carbon::parse($batch->endDate)->format('D, d M Y')}}</p> 
                                            <p class=""> <strong>Schedule</strong> {{$batch->schedule}}</p>
                                            
                                         

                                    </div>
                                </div>
                            </a>
                        </div>  

                        <div class=" col-md-6 col-lg-4 d-flex ">
                            <a class="card hover-shadow-sm border-none shadow-lg shadow-3d"
                                href="{{ action('WorkshopController@details', $batch->id) }}">
                                <div class="flex-grow-1">
                                <img src="{{ asset('storage/'.$batch->img) }}" loading="lazy" alt="Image"
                                    class="card-img-top">
                                <div class="card-bod d-flex flex-column">
                                    <div class=" p-2">
                                        <h4 class="mb-0 ck-font fw-400">{{$batch->name}} </h1>
                                            <p class="lea m-0 text-dark">Start Time: {{ Carbon\Carbon::parse($batch->nextClass)->format('h:i A') }}
                                                {{ Carbon\Carbon::parse($batch->startDate)->format('D, d M Y') }}</p>
                                            <p class="lad m-0 text-dark">Duration: 2 Hours</p>

                                    </div>
                                </div>
                                </div>
                                    <div class="d-flex flex-wrap align-items-center">
                                        <span class="badge badge-pill badge-ck-primary  m-1">Live Session</span>
                                        <span class="badge badge-pill badge-ck-success  m-1">Free</span>
                                    </div>
                            </a>
                        </div>
                        @endforeach
                        {{-- card test --}}
                        
                        
                       
                      



                    </div>
            </div>
        </div>

    </div>
</section>

<section class="pt-5 d-none">
    <div class="container">
        <div class="row">
            
            {{-- test --}}
            <div class="col-md-6 col-lg-3  col-xlg-3">
                <div class="card border-non shado hover-shadow-sm border-none shadow">
                    <a href="#1" class="stretched-link ">
                        <img src="assets/img/course-react.jpg" alt="Image" class="card-img-top">
                    </a>
                    <div class="p-2 align-items-start">
                        <div class="">
                            <h5 class="lead m-0 p-0" style="font-weight: 500;">React Js ndkejde</h5>
                        </div>
                        
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit 
                        </p>
                        <div class="d-flex justify-content-between">
                            <p class='pt-2 mb-0 text-warning'> <i class='bi bi-star-half'></i> 4.{!!rand(0,9)!!} <span class='text-muted pl-1'> {!!rand(1,100)!!} Votes</span></h4>
                            <p class='pt-2 mb-0 '>Rs. 499</p>
                        </div>
                        
                        
                    </div>
                    
                </div>
            </div>

            {{-- test --}}

            <div class="col-md-6 col-lg-3  col-xlg-3" >
                <div class="card border-non shado hover-shadow-sm border-none shadow ">
                    <a href="#1" class="stretched-link ">
                        <img src="assets/img/course-css.jpg" alt="Image" class="card-img-top" >
                    </a>
                    <div class="p-2 align-items-start">
                        <div class="">
                            <h5 class="lead m-0 p-0" style="font-weight: 500;">React Js ndkejde</h5>
                        </div>
                        
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit 
                        </p>
                        <div class="d-flex justify-content-between">
                            <p class='pt-2 mb-0 text-warning'> <i class='bi bi-star-half'></i> 4.{!!rand(0,9)!!} <span class='text-muted pl-1'> {!!rand(1,100)!!} Votes</span></h4>
                            <p class='pt-2 mb-0 '>Rs. 499</p>
                        </div>
                        
                        
                    </div>
                    
                </div>
            </div>
          
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="display-5 fw-40 p-3">We have designed a <span class="text-primary">flexible program</span>   for you</h2>
            <div class="col-md-4">
                <div class="card card-dark p-2 text-center">
                    <div class="text-center">
                        <img src="{{asset('/assets/img/missed-class-logo.svg')}}" alt="" class="avatar avatar-lg ">
                    </div>
                    <h4 class="ck-font">Missed a class?</h4>
                    <p class="lead">Watch the recording later, with teaching assistants available to solve your doubts
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-dark p-2 text-center">
                    <div class="text-center">
                        <img src="{{asset('/assets/img/office.svg')}}" alt="" class="avatar avatar-lg ">
                    </div>
                    <h4 class="ck-font">Jobs & class timings clash?</h4>
                    <p class="lead">Our classes are held in the evening to make sure college schedules do not clash with our classes.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-dark p-2 text-center">
                    <div class="text-center">
                        <img src="{{asset('/assets/img/revise.svg')}}" alt="" class="avatar avatar-lg ">
                    </div>
                    <h4 class="ck-font">Want to revise?</h4>
                    <p class="lead">Access assignments/notes lifelong and recordings upto 6 months post course completion
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-dark p-2 text-center">
                    <div class="text-center">
                        <img src="{{asset('/assets/img/doubts.svg')}}" alt="" class="avatar avatar-lg ">
                    </div>
                    <h4 class="ck-font">Have Doubts?</h4>
                    <p class="lead">Get them resolved over text / video by our expert teaching assistants!
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-dark p-2 text-center">
                    <div class="text-center">
                        <img src="{{asset('/assets/img/family-logo.svg')}}" alt="" class="avatar avatar-lg ">
                    </div>
                    <h4 class="ck-font">College / family needs time??</h4>
                    <p class="lead">Pause your course and restart a month later with the next batch!
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>


@include('layouts.footer')
@endsection