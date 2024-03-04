@extends('layouts.student')
@section('content')
@section('title', 'CSS Bootcamp replay')
{{-- <link rel='stylesheet' href='https://cdn.plyr.io/3.5.6/plyr.css'> --}}
<link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
<style>
  *{

  }
    .form-control{
        border:1px solid lightgrey;
        border-right: none;
    }
    .form-control:hover{
        background-color: white;
    }
    .coupan{
        border:1px solid lightgrey;
        border-left: none;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        font-family: "Google Sans Display";
        font-weight:400;
    }
    
    @media(min-width:992px){
      .h-full{
      height: 100vh;
      }
      .hidden-lg{
        display: none;
      }
    }
    @media(max-width:992px){
      .btn-round{
      display: none !important;
      }
      .hidden-sm{
        display: none;
      }
    }
    .razorpay-payment-button{
        /* background-color: #4b2aad; */
        background-image: linear-gradient(99deg, rgb(48, 124, 247), rgb(50, 122, 255));
        border: 1px solid transparent;
        width:100%;
        margin-top: 24px;
        border:none;
        color: white;
        padding: 12px 46px !important;
        font-weight:400;
        display: inline-block;
        cursor: pointer;
        font-size: 16px;
        border-radius: 12px;
        /* box-shadow: rgb(247 123 155 / 71%) 0px 3px 16px 0px; */
    }
    .login-card{
      border-radius: 20px !important;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark border-bottom d-non">
  <div class="container text-center">
   
    <h1 class="navbar-brand m-0 fw-bold text-primary fs-4 text-center">Codekaro</h1>
  </div>
</nav>




{{-- new payment page start --}}
<section>
  <div class="container-fluid">
    <div class="row justify-content-center mt-5 pt-5">
      <div class="col-lg-8 h-full ">
        <div class="js-player" id="plyr" data-plyr-provider="youtube" data-plyr-embed-id="gRx2aQVmP30"></div>
        {{-- <div style="position:relative;padding-top:56.25%;"><iframe src="https://iframe.mediadelivery.net/embed/200867/20e7426b-ce21-485f-a369-f6d6a352a813?autoplay=true&loop=false&muted=false&preload=true&responsive=true" loading="lazy" style="border:0;position:absolute;top:0;height:100%;width:100%;" allow="accelerometer;gyroscope;autoplay;encrypted-media;picture-in-picture;" allowfullscreen="true"></iframe></div> --}}
        <p class="mt-4">
            <p class="text-danger">This is a replay video and only for reference. The replay will only be available till 12:00 PM</p>
            
            <p><stron>Complete your day 1 Assignment:</strong> <a href="https://docs.google.com/document/d/1Oomd_qbPVyyJlpe7Hy0nSlKtQI1hO17agbIGhnWbOTc/edit?usp=sharing">here</a></p>
      <p><stron>Join the discussion group to submit your assignment:</strong> <a href="https://chat.whatsapp.com/HdAhnQwukAS5L3pZudNuHk">Discussion Group</a></p>
      <p><stron>The discussion group will be open from 05:00 PM to 07:00 PM to Submit Assignments.</strong></p>
  </p>
    </div>
      
    </div>
  </div>
  <script src='https://cdn.plyr.io/3.5.6/plyr.js'></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const player = new Plyr('.js-player', {
                controls: [
                    'play-large',
                    
                    'rewind',
                    'play',
                    'fast-forward',
                    'progress',
                    'current-time',
                    'duration',
                    'mute',
                    'volume',
                    'settings',
                    
                    'airplay',
                    'fullscreen',
                    'quality' // Ensure quality control is included
                ],
                quality: {
                    default: 1080, // Set 1080p as the default quality
                    options: [1080, 720, 480, 360] // Add available quality options here
                }
            });
        });
    </script>
</section>


@endsection()