@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
@section('content')

<div class="navbar-container">
    <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white"  >
        @include('layouts.header')
    </nav>
    
</div>

<div class="container">
    @include('layouts.alert')
</div>


<section class="vh-10 ">
    <div class="container">
        
        <div class="row ">
            <div class="col-lg-8 col-md-8">
                {{-- <h1 class="display-5">Understand the system design behind Zomato [Recorded Session]</h1> --}}
               <img src="{{asset('assets/img/testimonials/T6jCsf3.png')}}" alt="" class="img-fluid rounded mb-3">  
               <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure fugiat illo sunt perspiciatis excepturi modi ex rerum architecto, necessitatibus aspernatur non magnam provident porro? Modi facere non autem animi libero.
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit corporis voluptates fugiat quis facilis, amet aspernatur a corrupti. Nisi ut deserunt excepturi repellendus magni reiciendis. Quisquam magni voluptatum corrupti quibusdam.
                   
                   
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae hic error incidunt, vero molestias architecto iure eius nulla repellendus atque. Fugiat voluptatibus assumenda, illum molestias dolores temporibus deserunt accusamus corrupti.
                   Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia id voluptatem, molestias maxime dolorum at magnam ex sunt quis iste est molestiae provident sit illum optio, repellat magni esse. Totam.
               </p>
               
            
                
            </div> 
            <div class="col-md-4 ">
                <div class="card card-primary sticky-lg-top ">
                    <div class="card-body ">
                        <h1 class="lead-1">Understand the system design behind Zomato [Recorded Session]</h1>
                        <p class="lea m-0 text-dark">Start Time: 05:00 PM Saturday</p>
                   <p class="led m-0 text-dark">End Time: 05:00 PM Saturday</p>
                   <p class="lad m-0 text-dark">Duration: 2 Hours</p>
                        <p class="lead pt-1 m-0">Free</p>
                        <p class="lead m-0"> Live Class</p>
                        <p class="lead"> Linkedin sharable Certificate</p>
                          <a href="" class="btn btn-primary fw-400">Register Now</a>
                    </div>
                </div>
                <h1 class="lead-1 m-0">Invite your friends</h1>
            <p class="">and enjoy a shared experience</p>
                <a href="{{url()->current()}}" data-action="share/whatsapp/share"><img src="{{asset('assets/img/icons/social/twitter.svg')}}" alt="" class="icon mx-1"> </a>
                <a href="{{url()->current()}}" data-action="share/whatsapp/share"><img src="{{asset('assets/img/icons/social/facebook.svg')}}" alt="" class="icon mx-1"> </a>
            </div>
            

            </div>
        </div>
      
    </div>
</section>


{{-- @include('layouts.footer') --}}
@endsection