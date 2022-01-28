@extends('layouts.app')
@section('content')
    <div class="navbar-container">
        <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white"
            data-sticky="top">
            @include('layouts.header')
        </nav>

    </div>

    <div class="container">
        @include('layouts.alert')
    </div>

   {{-- live courses --}}
   @if ($batches->count() > 0)
   <section data-reading-position class="mt-5">
       <div class="container">
           <div class="row justify-content-center">
               <div class="col-xl-8 col-lg-9 text-center mb-3">
                   <h2 class="display-5 mx-xl-8 ">Learn what fascinates you for free</h2>
                   <p class="lead">
                       More than 9000 students have attended our Masterclasses and loved them.
                   </p>
               </div>
           </div>

           <div class="row justify-content-center">



               {{-- <div class="controls-light a mb-6" data-flickity='{ "autoPlay": true, "imagesLoaded": true, "wrapAround": true }'> --}}
               @foreach ($batches as $batch)

                   <div class=" col-md-6 col-lg-4 d-flex ">
                       @if ($batch->topicId == 1)
                           <a class="card hover-shadow-sm border-none shadow-lg shadow-3d"
                               href="{{ url('web-development-live-masterclass') }}">
                           @elseif($batch->topicId == 2)
                               <a class="card hover-shadow-sm border-none shadow-lg shadow-3d"
                                   href="{{ url('python-masterclass') }}">
                           @else
                           <a class="card hover-shadow-sm border-none shadow-lg shadow-3d"
                           href="{{ action('WorkshopController@details', $batch->id) }}">
                       @endif
                       <div class="flex-grow-1">
                           @if($batch->topicId == 1)
                               <img src="{{ asset('assets/img/wd-masterclass.png') }}" class="card-img-top" alt="" >
                           @elseif($batch->topicId == 2)
                               <img src="{{ asset('assets/img/ck_header.png') }}" class="card-img-top" alt="" >
                           @else
                           <img src="{{ asset('storage/'.$batch->img) }}" loading="lazy" alt="Image"
                               class="card-img-top" >
                           @endif
                           <div class="card-bod d-flex flex-column">
                               <div class=" p-2">
                                   <h5 class="mb-2 ck-font fw-400">{{ $batch->name }} </h1>
                                       <p class="lea m-0 text-dark"> <strong> From
                                               {{ Carbon\Carbon::parse($batch->startDate)->format('D, d M') }}
                                           </strong> <span class="text-muted">at
                                               {{ Carbon\Carbon::parse($batch->nextClass)->format('h:i A') }}</span>
                                       </p>

                                       <p class="lad m-0 text-dark">Schedule: {{ $batch->schedule }}</p>

                               </div>
                           </div>
                       </div>
                       <div class="d-flex flex-wrap align-items-center">
                           <span class="badge badge-pill badge-ck-primary fw-400 m-1">Live Session</span>
                           <span class="badge badge-pill badge-ck-success fw-400 m-1">Free</span>
                       </div>
                       </a>
                   </div>


               @endforeach


           </div>

       </div>
       </div>
       </div>

       </div>
   </section>
@endif

{{-- live courses ends --}}
@endsection
