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

<section>
    <div class="container mt-5">
        <div class="row mt-5 justify-content-center">
            <div class="col">
                {{-- <h1 class="display-6 ck-font">Lets do Coding! </h1> --}}
                    <div class="row">
                        <div class="col-md-6 col-lg-4 mt-5">
                            <a class="card hover-shadow-sm border-none shadow"
                                href="/join-fsd">
                                <img src="{{ asset('assets/img/backend.webp') }}" alt="Image" class="card-img-top course-card">

                                {{-- <img src="{{ asset($batch->img) }}" alt="Image" class="card-img-top"> --}}
                                <div class="card-bod d-flex flex-column">
                                    <div class="py-2 px-3">
                                        <div class="pills">
                                            <span class="badge badge-pill badge-primary bg-mute text-dark fw-light">On demand lectured</span>
                                            <span class="badge badge-pill badge-primary bg-mute text-dark fw-lighter">English</span>
                                        </div>
                                        <div class="d-flex mt-3 justify-content-between align-items-center">
                                            <h1 class="m-0 ck-font fw-400 fs-5 ">Fullstack Cohort</h1>
                                            <p class="m-0">Rs 41999</p>
                                        </div>
                                        
                                            <p class="mt-2 pt-2 fs-medium mb-0">Starts on 21st July</p> 
                                            <p class="fs-small mt-0">Weekends Live Sessions</p>
                                            
                                            
                                            

                                    </div>
                                    {{-- <div class="f-3-botto cd px-3 py-2">
                                        Lorem ipsum dolor sit amet consectetur.
                                    </div> --}}
                                </div>
                            </a>
                        </div>  

                        
                        {{-- card test --}}
                        
                        
                       
                      



                    </div>
            </div>
        </div>

    </div>
</section>
<div class="mt-5 pt-5"></div>
@include('layouts.ck-footer')
@endsection