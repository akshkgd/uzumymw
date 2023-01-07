@extends('layouts.ck-admin')

@section('content')

    <!-- main dashboard -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-6 col-md">
                <div class="stat-cell stat-cell-red p-2">
                    <p class="stat-cell-title">Total Users</p>
                    <p class="stat-cell-value">{{ $users }}</p>
                </div>

            </div>
            <div class="col-6 col-md">
                <div class="stat-cell stat-cell-purple p-2">
                    <p class="stat-cell-title">Users (This Month)</p>
                    <p class="stat-cell-value">{{ $usersThisMonth }}</p>
                </div>

            </div>
            <div class="col-6 col-md">
                <div class="stat-cell stat-cell-yellow p-2">
                    <p class="stat-cell-title">Previous Month</p>
                    <p class="stat-cell-value">{{ $usersPreviousMonth }}</p>
                </div>

            </div>
            <div class="col-6 col-md">
                <div class="stat-cell stat-cell-teal p-2">
                    <p class="stat-cell-title">Total Earnings</p>
                    <p class="stat-cell-value">{{ $total }}</p>
                </div>

            </div>
            <div class="col-6 col-md">
                <div class="stat-cell stat-cell-green p-2">
                    <p class="stat-cell-title">Earnings This Month</p>
                    <p class="stat-cell-value">{{$month}}</p>
                </div>

            </div>
            <div class="col-6 col-md">
                <div class="stat-cell stat-cell-yellow p-2">
                    <p class="stat-cell-title">Previous Month</p>
                    <p class="stat-cell-value">{{$previousMonth}}</p>
                </div>

            </div>
        </div>
    </div>




    <!-- main dashboard ends -->

    <!-- First row (equally spaced) -->
    <div class="row row-eq-spacing d-none">
        <div class="col-6 col-xl-3">
            <div class="card">
                <h2 class="card-title">Users</h2>
                <h4>{{ $users }}</h3>
                    <a href="{{ url('/admin/students') }}" class="btn btn-outline-primary d-block">Students</a>
            </div>
        </div>
        <div class="col-6 col-xl-3">
            <div class="card">
                <h2 class="card-title">Live Batches</h2>
                <h4>{{ $batches }}</h3>
                    <a href="{{ url('/admin/batches') }}" class="btn btn-outline-primary d-block"> </i>Details</a>
            </div>
        </div>
        <!-- Overflow occurs here on large screens (and down) -->
        <!-- Therefore, a v-spacer is added at this point -->
        <div class="v-spacer d-xl-none"></div> <!-- d-xl-none = display: none only on extra large screens (> 1200px) -->
        <div class="col-6 col-xl-3">
            <div class="card">
                <h2 class="card-title">Users</h2>
                <h4>345</h3>

                    <a href="{{ url('/user') }}" class="btn btn-outline-primary d-block"> </i>Details</a>
            </div>
        </div>
        <div class="col-6 col-xl-3">
            <div class="card">
                <h2 class="card-title">Suppliers</h2>
                <h4>1</h3>
                    <a href="{{ url('/supplier') }}" class="btn btn-outline-primary d-block"> </i>Details</a>
            </div>
        </div>
    </div>
@endsection
