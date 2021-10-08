@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
<style>
    li {
        margin-bottom: 3px;
    }

</style>
@section('title', '' . e($event->name))
@section('meta_keywords', '' . e($event->name))
@section('meta_description', '' . e($event->description))
@section('content')

    <div class="navbar-container">
        <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white">
            @include('layouts.header')
        </nav>

    </div>

    <div class="container">
        @include('layouts.alert')
    </div>


   


    <section class="d-non ">
        <div class="container">
           

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-12 order-sm-2">
                    <div class="card border-none  shadow-lg sticky-lg-top hidden-sm">

                        <div class="p-2">
                            <img src="{{ asset('storage/' . $event->img) }}" alt="Image" class="card-img-to rounded mb-3">
                            <h2 class="ck-font lead-1  m-0">{{ $event->name }}</h1>
                                <p class="text-primary">Only {{ $event->limit }} Seats<span class="text-dark">,
                                        available on the first come first serve basis</span></p>
                                <h5 class="ck-font fw-400 m-0 lead">
                                    {{ Carbon\Carbon::parse($event->startDate)->format('D, d M') }} {{ Carbon\Carbon::parse($event->nextClass)->format('h:i A') }}
                                    </h6>
                                    <p class="ck-font fw-400 text-dark">Schedule: {{ $event->schedule }}</p>
                                </h5>


                                {{-- <h5 class="ck-font fw-400">This Free Course Includes</h6> --}}

                                <ul class="px-3 ">
                                    <li>LinkedIn sharable Certificate</li>
                                    <li>Lifetime Access to projects</li>
                                    <li>Assignments for practice</li>
                                </ul>

                                <a href="{{ action('WorkshopEnrollmentController@checkEnroll', $event->id) }}"
                                    class="btn btn-lg btn-outline-primary-3 btn-block fw-400">Enroll now for free</a>
                        </div>








                    </div>
                </div>
                <div class="col-lg-8 col-md-12 order-sm-1">
                    
                    
                    <h1 class="display-5 ">{{ $event->name }}</h1>
                    <div class="hidden-lg">
                        <img src="{{ asset('storage/' . $event->img) }}" alt="Image" class="card-img-to rounded mb-3">
                        
                        <p class="lead pr-xl-3 m-0">
                            Live Classes from
                            {{ Carbon\Carbon::parse($event->startDate)->format('D, d M') }} @if($event->endDate != '')
                            to
                            {{ Carbon\Carbon::parse($event->endDate)->format('d M') }}
                            @endif
                        </p>
                        <p class="ck-font fw-400 m-0">Schedule: {{ $event->schedule }}</p>
                        <p class="ck-font fw-400 ">Seat Limit: {{ $event->limit }}</p>
                        <h5 class="ck-font fw-400 ">This Free Course Includes</h6>

                            <ul class="px-3">
                                <li>LinkedIn sharable Certificate</li>
                                <li>Lifetime Access to projects</li>
                                <li>Assignments for practice</li>
                                <li>No hidden charges</li>
                            </ul>
                    </div>
                    <p class="lead">{{$event->description}}</p>
                    
                    {{-- <img src="{{asset('assets/img/testimonials/T6jCsf3.png')}}" alt="" class="img-fluid rounded mb-3"> --}}
                    {!! $event->about !!}

                    <div class="card card-bod">

                        <div class="bg-primary-2-alt rounded p-2">
                            <h5>About Mentor</h5>
                            <div class=" d-flex align-items-center mb-2">
                                <img src="{{ $event->teacher->avatar }}" alt="{{ $event->teacher->name }}"
                                    class="avatar avatar-lg mr-3">
                                <div>
                                    <h6 class="mb-0 ck-font">{{ $event->teacher->name }}</h6>
                                    <a href="#" class="text-dark fw-400">{{ $event->teacher->email }}</a>
                                </div>

                            </div>
                            <p class="pt-0 mt-0">{{ $event->teacher->bio }}</p>
                        </div>
                    </div>

                    <div class="my-2 w-100">
                        <blockquote class="twitter-tweet">
                            <p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a>
                                today I attend 1st class of this bootcamp it just awesome 🔥🔥<br>I learn so much new thinks
                                and also eager to learn more like 👍👍</p>&mdash; Sakshi Tannirwar (@sakshitannirwa8) <a
                                href="https://twitter.com/sakshitannirwa8/status/1414999822948442116?ref_src=twsrc%5Etfw">July
                                13, 2021</a>
                        </blockquote>
                    </div>
                    <div class="my-2">
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                        <blockquote class="twitter-tweet">
                            <p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a>
                                Nice explanations for every single word of coding, and to so much interactive and so much
                                learnable and so on</p>&mdash; saravanachandru S K (@saravanachandr8) <a
                                href="https://twitter.com/saravanachandr8/status/1409863395700928514?ref_src=twsrc%5Etfw">June
                                29, 2021</a>
                        </blockquote>
                    </div>
                    <div class="my-2">
                        <blockquote class="twitter-tweet">
                            <p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a>
                                Congrats Codekaro team.., you are doing a wonderful job and your session are helpful for my
                                carrer..thankyou</p>&mdash; Nandhakumar (@nandhank_) <a
                                href="https://twitter.com/nandhank_/status/1407353108187996162?ref_src=twsrc%5Etfw">June 22,
                                2021</a>
                        </blockquote>
                    </div>
                    <div class="my-2">
                        <blockquote class="twitter-tweet">
                            <p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a>
                                you are simply superb in delivering the content in a simple manner, hoping to learn lot more
                                stuff from you</p>&mdash; Akhilesh (@Akhiles34785868) <a
                                href="https://twitter.com/Akhiles34785868/status/1409496613207216134?ref_src=twsrc%5Etfw">June
                                28, 2021</a>
                        </blockquote>
                    </div>


                </div>
                
            </div>
        </div>
    </section>
    @include('layouts.footer')
    <div class="slider-menu mt-5">

        <h3 class="ck-font ">Free <span class="lead "
                style="text-decoration: line-through;">₹99</span> </h3>
        <br>
        <a href="{{ action('WorkshopEnrollmentController@checkEnroll', $event->id) }}"
            class="btn btn-primary-3 fw-400 ck-font btn-lg w-100">Enroll Now</a>
    </div>

    
@endsection
