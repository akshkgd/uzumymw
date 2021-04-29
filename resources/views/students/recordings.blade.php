@extends('layouts.app')
@section('content')
<style>
  .fw-400{
    font-weight: 400 !important;
  }
</style>
<div class="navbar-container ">
  <nav class="navbar navbar-expand-lg navbar-light border-bottom-0" data-overlay>
    @include('layouts.header')
  </nav>
</div>

    
@isset($content)
 @if($content->count()>0)   


<section>
  <div class="container pt-5">
    <div class="row justify-content-cente">
      <div class="col-lg-8 col-xl-8">
        <div class="rounded o-hidden">
           
  
        
    @isset($video)
        
    
    <div class="plyr" data-plyr-provider="youtube" data-plyr-embed-id="{{$video->videoLink}}"></div>
    <h1 class="lead-1 pt-3 pb-0">{{$video->title}}</h1>
    <div class="">
        {!!$video->desc!!}
    </div>
  </div>
  @endisset
    

       
           
       
      </div>
      <div class="col-lg-4 col-xl-4">
        <div class=" card card-dark">
          <div class="">
            <h3 class="px-3 py-3 m-0 ck-font fw-400">More Details</h3>
            @foreach ($content as $c)
            <a href="{{action('StudentController@recordings', [$batchId, $c->videoLink])}}" class="list-group-item-card list-group-item-action  lead fw-40"> {{$c->title}} </a>
            @endforeach
            
        
          </div>
        </div>
      </div>
    </div>


    


  </div>
  </div>
</section>
@else
<section class="">
    <div class="container mt-5 pt-5">
        
        <div class="row justify-content-center text-center">
            <div class="col-lg-5 col-md-5 d-non">
                <img src="{{asset('assets/img/search_1.png')}}" alt="" class="img-fluid">
                <h1 class="lead-1">No recordings found, </h1>
            <p class="lead">Recordings will be added shortly, for more details get in touch with your mentor.</p>
            <a href="{{url('/home')}}" class="btn btn-primary fw-400">Homepage</a>
            <a href="{{action('BatchController@batchDetails', $batchId )}}" class="btn btn-outline-primary fw-400">Course Details</a>

            </div>
        </div>
      
    </div>
</section>
@endif
@endisset

@endsection