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
<section data-reading-position>
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9 text-center mb-3">
                <h2 class="display-5 mx-xl-8 ">Learn what fascinates you for free</h2>
                <p class="lead">
                    Here's what some of our 407 satisfied students have to say about learning with codekaro.
                </p>
            </div>
        </div>

        <div class="row justify-content-center">



            {{-- <div class="controls-light a mb-6" data-flickity='{ "autoPlay": true, "imagesLoaded": true, "wrapAround": true }'> --}}
                @foreach ($batches as $batch)
                
                <div class=" col-md-6 col-lg-4 d-flex ">
                    <a class="card hover-shadow-sm border-none shadow-lg shadow-3d"
                        href="{{ action('WorkshopController@details', $batch->id) }}">
                        <div class="flex-grow-1">
                        <img src="{{ asset('storage/'.$batch->img) }}" loading="lazy" alt="Image"
                            class="card-img-top">
                        <div class="card-bod d-flex flex-column">
                            <div class=" p-2">
                                <h4 class="mb-0 ck-font fw-400">{{$batch->name}} </h1>
                                    <p class="lea m-0 text-dark">Timing: {{ Carbon\Carbon::parse($batch->nextClass)->format('h:i A') }}
                                        {{ Carbon\Carbon::parse($batch->startDate)->format('D, d M Y') }}</p>
                                    <p class="lad m-0 text-dark">Schedule: {{$batch->schedule}}</p>

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


        </div>

    </div>
    </div>
    </div>

    </div>
</section>
@endif

{{-- live courses ends --}}
@endsection
