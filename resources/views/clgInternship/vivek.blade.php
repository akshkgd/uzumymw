@extends('layouts.app')
@section('content')
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-12 col-md-12">
                <div class="card pb-0 shadow-lg" style="border:0px solid #feefc3;">
                    <div class="card-boy">

                        <section class="bg-primary-alt t has-divider mt-0 pt-0 rounded-lg" style="background:#ffefc3;; " data-overlay>
                            <div class="container pt-4 pb-0">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10 col-xl-8 text-center">
                                        <h1 class="lead pb-0 mb-2 text-warning">Codekaro E-Certificate</h1>
                                        <h1 class="h2 m-0 text-warning" style="font-family: 'Pacifico', cursive; letter-spacing: 2px; color:#fbc129;"> Certificate of Internship </h1>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="divider">
                                <img src="{{asset('assets/img/dividers/divider-2.svg')}}" alt="graphical divider" data-inject-svg />
                            </div>
                        </section>



                    </div>

                    <div class="card-body ">
                        <div class="pt-1 text-center">
                            <h5 class="ck-font m-0 lead">This is to certify that</h3>
                            <h1 class="display-5 m-1">Vivek Kumar Gupta</h1>
                            
                            <p class=" lead mx-5">From MMIT MAHARAJGANJ, has successfully completed <strong>Python with django</strong> training Internship from <strong>06th September </strong>  to  <strong>25th October 2021</strong></p>
                            <h4 class="text-s lead"></h4>
                            
                            
                            
                            
                                    <h5 class="lead">
                                        28th October 2021
                                        </p>
                            
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
                                
                
                                <!-- <img src="{{asset('/img/avatar-1.svg')}}" alt=""> -->
                
                            </div>
                            <div class="col-sm-4 text-md-right text-center px-5 mt-5">
                                
                                <h6 class=" ck-font m-0" style="color:#4185f4;">Certificate Id : 8be76c72dffcb7c7</h5>
                                    <p style="font-size: 14px" class="ck-font m-0">Verify the authenticity of this certificate <a href="https://codekaro.in/internship-certificate/8be76c72dffcb7c7" target="_blank">using this link</a></h6>
                            </div>
                        </div>
                        
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection