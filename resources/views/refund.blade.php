@extends('layouts.ck')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container ">
     
      <a class="navbar-brand fw-bold text-primary fs-4" href="{{url('/')}}">Codekaro</a>
    </div>
</nav>

<div class="container mt-5 pt-5">

<h2 style="text-align: center;"><b>Refund & Cancellation Policy</b></h2>
<p>Last updated: 2021-07-20</p>
<p>There is a strict no refund & no cancellation policy. You are entitled to a refund only in the case where you have not been allotted the course after payment.</p>
</div>


{{-- <div class="d-flex">
    @include('layouts.ck-footer')
</div> --}}
@endsection