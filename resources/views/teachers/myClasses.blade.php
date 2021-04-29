@extends('layouts.app')
<style>

</style>
@section('content')
<div class="navbar-container ">
    <nav class="navbar navbar-expand-lg navbar-light border-bottom-0 " data-overlay >
        @include('layouts.header')
    </nav>
</div>

<section class="pt-5 mt-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-8">
            @foreach ($batches as $batch)
          <a href="#" class="card card-body hover-shadow-sm" data-target="#panel-{{$batch->id}}" class="accordion-panel-title" data-toggle="collapse" role="button" aria-expanded="false">
            <h4 class="mb-2"  >{{$batch->name}}</h4>
            <span>This guide describes best practices when creating and managing assets</span>

            <h4 class="text- pt-2" style="letter-spacing: 0">Earnings: <span class="text-primary-3">{{$batch->earning}}</span></h4>
            
              <div class="collapse" id="panel-{{$batch->id}}">
                <div class="pt-3">
                  <p class="">
                    {{$batch->description}}
                  </p>
                  <h4 class="text-success">thjjhk{{$batch->earning}}</h4>
                </div>
              </div>

            <div class="d-flex justify-content-between align-items-center mt-3">
              <div class="d-flex align-items-center">
               
                <div class="text-small ml-2">
                    {{-- <div class="d-flex align-items-center mt-3">
                        <ul class="avatars mr-2">
                    @foreach ($batch->enrollments as $enrollment)
                    
                        <li>
                          <img src="{{$enrollment->students->avatar}}" alt="Avatar" class="avatar">
                        </li>
                        @endforeach
                      </ul>
                      <div class="text-small">
                        <span class="d-block">4 Articles</span>
                        <span class="text-muted">10th Oct</span>
                      </div>
                    
                    </div> --}}
                   
                  
                </div>
              </div>
              
            </div>
          </a>
          @endforeach

@endsection

