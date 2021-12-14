@extends('layouts.ck-admin')
@section('content')

<div class="container mt-5">
    <div class="card card-body">
        <h4 class="text-dark">Workshops Overview</h4>
         <div class="row mt-4">
        <div class="col-6 col-md">
            <div class="stat-cell stat-cell-red p-2">
                <p class="stat-cell-title">Total Workshops</p>
                <p class="stat-cell-value">{{$workshops}}</p>
            </div>

        </div>
        
        <div class="col-6 col-md">
            <div class="stat-cell stat-cell-purple p-2">
                <p class="stat-cell-title">Total Users</p>
                <p class="stat-cell-value">{{$users}}</p>
            </div>

        </div>
        <div class="col-6 col-md">
            <div class="stat-cell stat-cell-yellow p-2">
                <p class="stat-cell-title">Paid Conversions</p>
                <p class="stat-cell-value">{{$paidUsers}}</p>
            </div>

        </div>
        
        <div class="col-6 col-md">
            <div class="stat-cell stat-cell-green p-2">
                <p class="stat-cell-title">Conversions</p>
                <p class="stat-cell-value">{{$paidUsers}}</p>
            </div>

        </div>
        
        
    </div>
</div>
</div>



    {{-- Enrollment details --}}

@endsection
