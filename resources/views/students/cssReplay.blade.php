@extends('layouts.dashboard')
@section('content')
@section('title', 'CSS Bootcamp replay')
<style>
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
      <div class="col-lg-8 h-full hidden-sm ">
        <div style="padding:50% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/914505788?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="CSS Bootcamp replay day 1"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
        <p class="mt-4">
            <p class="text-danger">This is areplay video and only for reference. The replay will only be available till 10:00 AM</p>
            
            <p><stron>Complete your day 1 Assignment:</strong> <a href="https://docs.google.com/document/d/1Oomd_qbPVyyJlpe7Hy0nSlKtQI1hO17agbIGhnWbOTc/edit?usp=sharing">here</a></p>
      <p><stron>Join the discussion group to submit your assignment:</strong> <a href="https://chat.whatsapp.com/Hu0179u2QvQ7Qn0fl52Uec">Discussion Group</a></p>
      <p><stron>The discussion group will be open tomorrow at 05:00 PM to 07:00 PM to Submit Assignments.</strong></p>
  </p>
    </div>
      
    </div>
  </div>
</section>


@endsection()