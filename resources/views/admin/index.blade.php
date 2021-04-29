@extends('layouts.admin')

@section('content')

<!-- Page wrapper with content-wrapper inside -->
<!-- <div class="page-wrapper"> -->
<!-- <div class="content-wrapper"> -->
<!-- Container-fluid -->
<!-- <div class="container-fluid"> -->
<!-- First comes a content container with the main title -->
<div class="content">
    <h1 class="content-title font-size-22">Dashboard</h1>

    <div class="card justify-content-between d-flex bg-1">
        <div>
            <span>Purchase Today</span>
            <h1 class="card-title">₹897777</h1>
        </div>


        <div>
            <span>Purchase This Month</span>
            <h1 class="card-title">₹78777</h1>
        </div>
        <div>
            <span>Purchase Previous Month</span>
            <h1 class="card-title">₹76999</h1>
        </div>
        <div>
            <span>Purchase Analysis (This Month)</span>


        </div>
        <div>
            <span>Total Purchase</span>
            <h1 class="card-title">₹670000</h1>
        </div>




    </div>

</div>

<!-- First row (equally spaced) -->
<div class="row row-eq-spacing">
    <div class="col-6 col-xl-3">
      <div class="card">
        <h2 class="card-title">Users</h2>
        <h4>{{$users}}</h3>
          <a href="{{url('/admin/students')}}" class="btn btn-outline-primary d-block">Students</a>
      </div>
    </div>
    <div class="col-6 col-xl-3">
      <div class="card">
        <h2 class="card-title">Live Batches</h2>
        <h4>{{$batches}}</h3>
          <a href="{{url('/admin/batches')}}" class="btn btn-outline-primary d-block"> </i>Details</a>
      </div>
    </div>
    <!-- Overflow occurs here on large screens (and down) -->
    <!-- Therefore, a v-spacer is added at this point -->
    <div class="v-spacer d-xl-none"></div> <!-- d-xl-none = display: none only on extra large screens (> 1200px) -->
    <div class="col-6 col-xl-3">
      <div class="card">
        <h2 class="card-title">Users</h2>
        <h4>345</h3>
  
          <a href="{{url('/user')}}" class="btn btn-outline-primary d-block"> </i>Details</a>
      </div>
    </div>
    <div class="col-6 col-xl-3">
      <div class="card">
        <h2 class="card-title">Suppliers</h2>
        <h4>1</h3>
          <a href="{{url('/supplier')}}" class="btn btn-outline-primary d-block"> </i>Details</a>
      </div>
    </div>
  </div>
@endsection