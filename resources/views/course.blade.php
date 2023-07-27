@extends('layouts.ck')

@section('content')
@include('layouts.ck-header')
<style>
    .fi {
    height: 160px;
    width: max-content;
    object-fit: cover;
    object-position: center center;

}
.bg-mute{
    background-color: #e6e6e6 !important;
}
.cd {
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
    padding-top: 16px !important;
    padding-bottom: 16px !important;
    font-size: 14px;
    background-color: rgb(255, 244, 231);
}
.fs-small{
    font-size: .9rem;
    color:rgb(56, 56, 56);
}
.danger-alert{
    background-color: rgb(255, 219, 219);
    color: rgb(204, 56, 56);
    font-size: 14px;
}
.bi-star-half::before {
    padding-bottom: 3px;
}
body{
    /* background-color: rgb(246, 246, 246); */
}

</style>
    <div class="container pb-0 pt-5">
      <div class="row align-items-center justify-content-center o-hidden">
        {{-- <div class="col-md-4 order-sm-2 mb-5 mb-sm-0" data-aos="fade-left">
          <img src="assets/img/t.svg" alt="Image">
        </div> --}}
        <div class="col-md-8 pr-xl-5 order-sm-1 text-center d-none">
            <h2 class="display- fw-bol"> @auth
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
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col">
                {{-- <h1 class="display-6 ck-font">Lets do Coding! </h1> --}}
                    <div class="row">
                        @foreach ($batches as $batch)
                        @if($batch->topicId <20)
                        <div class="col-md-6 col-lg-4 mt-5">
                            <a class="card hover-shadow-sm border-none shadow"
                                href="{{action('BatchController@details', $batch->id )}}">
                                <img src="{{ asset('storage/'.$batch->img) }}" alt="Image" class="card-img-top course-card">

                                {{-- <img src="{{ asset($batch->img) }}" alt="Image" class="card-img-top"> --}}
                                <div class="card-bod d-flex flex-column">
                                    <div class="py-2 px-3">
                                        <div class="pills">
                                            <span class="badge badge-pill badge-primary bg-mute text-dark fw-light">Live Classes</span>
                                            <span class="badge badge-pill badge-primary bg-mute text-dark fw-lighter">English</span>
                                        </div>
                                        <h1 class="mb-0 ck-font fw-400 fs-5 mt-3">{{$batch->name}}</h1>
                                        
                                            <p class="mt-2 pt-2 fs-small">Starts on {{Carbon\Carbon::parse($batch->startDate)->format('D, d M Y')}}</p> 
                                            <p class="fs-small">Late evening classes</p>
                                            
                                            <div class="mt-4 d-flex justify-content-between align-items-end">
                                                <div class="">
                                                    <p class="small m-0">Price</p>
                                                    <p>Rs {{$batch->payable}}</p>
                                                </div>
                                                <div class="">
                                                    <p class="badge badge-pill badge-primary bg-primary text-light fw-light  px-4 fs-7" style="padding: 10px 16px;">More Details</p>
                                                </div>
                                            </div>
                                            

                                    </div>
                                    {{-- <div class="f-3-botto cd px-3 py-2">
                                        Lorem ipsum dolor sit amet consectetur.
                                    </div> --}}
                                </div>
                            </a>
                        </div>  

                        @endif
                        @endforeach
                        {{-- card test --}}
                        
                        
                       
                      



                    </div>
            </div>
        </div>

    </div>
</section>
<div class="mt-5 pt-5"></div>
@include('layouts.ck-footer')
@endsection