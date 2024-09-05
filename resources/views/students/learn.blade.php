@extends('layouts.t-student')
@section('content')
    {{-- @include('layouts.t-student-nav') --}}

    <section>
        <div class="flex max-w-7xl mx-auto ">
            <div class="sidebar box-border sm:px-4 2xl:pl-0 2xl:pr-4 sm:w-[390px] 2xl:w-[420px] bg-neutral-5  border-r border-neutral-300 border-opacity-40 h-screen ">
            <div class="">
                <h1 class="pt-10 text-lg font-semibold">Backend Cohort with Next js</h1>
                {{-- <p class="mt-0 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> --}}
            </div>
            <div class="progress">
                <p class="mb-2 text-sm text-gray-700">34% completed in 2h 41m</p>
                <div class="w-full h-1 bg-gray-100 ">
                    <div class="w-[44%] rounded-full h-1 bg-violet-500"></div>
                </div>
            </div>
            </div>
            <div class="container">
                <div class="mt-10 max-w-3xl mx-auto">  
                    <div style="position:relative;padding-top:56.25%;"><iframe src="https://iframe.mediadelivery.net/embed/200867/2f0f2514-207c-4386-8210-32295374ede9?autoplay=true&loop=false&muted=false&preload=true&responsive=true" loading="lazy" style="border:0;position:absolute;top:0;height:100%;width:100%;" allow="accelerometer;gyroscope;autoplay;encrypted-media;picture-in-picture;" allowfullscreen="true"></iframe></div>
                    <h1 class="mt-4 text-xl font-medium">Intro to node js</h1>
                </div>
            </div>
        </div>
    </section>



@endsection