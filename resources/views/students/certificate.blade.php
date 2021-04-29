@extends('layouts.app')
@section('content')
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-12 col-md-12">
                <div class="card pb-0 ">
                    <div class="card-boy">

                        <section class="bg-primary-alt t has-divider mt-0 pt-0 rounded-lg" style="background:#ffefc3;; " data-overlay>
                            <div class="container pt-4 pb-0">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10 col-xl-8 text-center">
                                        <h1 class="lead pb-0 mb-2 text-warning">Codekaro E Certificate</h1>
                                        <h1 class="h2 m-0 text-warning" style="font-family: 'Pacifico', cursive; letter-spacing: 2px; color:#fbc129;"> Certificate of Participation </h1>

                                        
                                    </div>
                                </div>
                            </div>
                            <div class="divider">
                                <img src="assets/img/dividers/divider-2.svg" alt="graphical divider" data-inject-svg />
                            </div>
                        </section>



                    </div>

                    <div class="card-body ">
                        <div class="pt-1 text-center">
                            <h5 class="ck-font m-0 lead">This is to certify that</h3>
                            <h1 class="display-5">Sharvani Srivastava</h1>
                            <p class="lead mx-5 mb-0">has completed 15 days of online training session on <span class="text-dark">Machine Learning Bootcamp</span></p>
                            <p class="lead">4th Aug 2020</p>
                        </div>
                        <div class="row pb-0 pt-4">
                            <div class="col-sm-4 text-md-left text-center px-5">
                
                                <img src="{{asset('assets/img/ashish_sign.png')}}" alt="uu" >
                                <h4 class="pt-2 m-0 ck-font" >Ashish Shukla</h4>
                                <p class="text-muted">CEO - Codekaro</p>
                            </div>
                            <div class="col-sm-4 text-center  px-5 ">
                                <img src="{{asset('assets/img/codekaro-dark.png')}}" alt="" class="avatar avatar-xlg">
                                <!-- <img src="{{asset('assets/img/google.png')}}" alt="" class="avatar avatar-xlg"> -->
                                @if($batch->association !="")
                                <img src="{{asset('storage/'.$batch->logo)}}" alt="" class="avatar avatar-xlg">
                                @endif
                
                                <!-- <img src="{{asset('/img/avatar-1.svg')}}" alt=""> -->
                
                            </div>
                            <div class="col-sm-4 text-md-right text-center p-5">
                                <!-- <img src="{{asset('assets/img/ashish_sign.png')}}" alt="" style="height: 60px; width:172px;">
                                <h4>Ashish</h4>
                                <p class="text-muted">Instructor - Codekaro</p> -->
                                <h5 class=" ck-font m-0" style="color:#4185f4;">Certificate Id : {{$certificate->certificate_id}} 3z5gf6t</h5>
                            <p style="font-size:14px">Verify the authenticity of this certificate at <a href="" style="color:#4185f4;">https://codekaro.in/certificate/{{$certificate->certificate_id}}3z5gf6t</a></h6>
                            </div>
                        </div>
                        <div class="d-none" style="display: flex; justify-content:space-between">
                            <h5 class="text-primary ck-font">Certificate Id : {{$certificate->certificate_id}}</h5>
                            <h6 class="ck-font">Verify the authenticity of this certificate at <a href="">https://codekaro.in/certificate/{{$certificate->certificate_id}}</a></h6>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection