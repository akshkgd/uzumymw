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
                <div class="col-lg-8 col-md-12 order-sm-1">
                    <div class="card card-body bg-primary text-light hidden-lg m-0 mb-3 d-none">
                        <span class="h2 ck-font fw-400 d-block ck-fon">{{$event->name}}</span>
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
                            <a href="#" class="btn btn-lg mt-2 btn-white ck-font fw-400">Enroll now</a>
                    </div>
                    
                    <h1 class="display-5 ">{{ $event->name }}</h1>
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


                </div>
                <div class="col-lg-4 col-md-12 order-sm-2">
                    <div class="card border-none  shadow-lg sticky-lg-top">

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
            </div>
        </div>
    </section>

    @include('layouts.footer')
@endsection
