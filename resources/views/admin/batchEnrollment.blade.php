@extends('layouts.ck-admin')
@section('content')
<div class="container mt-5">
    <div class="card card-body">
        <div class="d-flex justify-content-between">
        <div class="">
            <h4 class="text-dark my-3">{{$batch->name}}</h1>
                <p>From {{$batch->startDate->format('d M y')}} to {{ Carbon\Carbon::parse($batch->endDate)->format('d M Y') }} ( <span class="text-dark">{{$batch->payable}}</span> )</p>    
        </div>
        <div class="">
            <a href="" class="btn btn-primary mt-3">Edit Batch</a>

        </div>
    </div>
         <div class="row">
        <div class="col-6 col-md">
            <div class="stat-cell stat-cell-red p-2">
                <p class="stat-cell-title">Total Users</p>
                <p class="stat-cell-value">{{$totalUsers}}</p>
            </div>

        </div>
        
        <div class="col-6 col-md">
            <div class="stat-cell stat-cell-purple p-2">
                <p class="stat-cell-title">Paid Users</p>
                <p class="stat-cell-value">{{$paidUsers}}</p>
            </div>

        </div>
        <div class="col-6 col-md">
            <div class="stat-cell stat-cell-yellow p-2">
                <p class="stat-cell-title">Unpaid Users</p>
                <p class="stat-cell-value">{{$unpaidUsers}}</p>
            </div>

        </div>
        <div class="col-6 col-md">
            <div class="stat-cell stat-cell-teal p-2">
                <p class="stat-cell-title">Earnings</p>
                <p class="stat-cell-value">{{$earning}}</p>
            </div>

        </div>
        <div class="col-6 col-md">
            <div class="stat-cell stat-cell-green p-2">
                <p class="stat-cell-title">Teacher Share</p>
                <p class="stat-cell-value">{{$teacherEarning}}</p>
            </div>

        </div>
        <div class="col-6 col-md">
            <div class="stat-cell stat-cell-blue p-2">
                <p class="stat-cell-title">Profit</p>
                <p class="stat-cell-value">{{$profit}}</p>
            </div>

        </div>
        
    </div>
</div>
</div>



    {{-- Enrollment details --}}

    <section>
        <div class="container mt-5">
            @include('layouts.alert')
            <div class="row justify-content-center">
                <div class="col-lg-12 col-xl-12 col-sm-12 col-md-12 ">
                    
                    <div class="card mb-5">
                        <div class="card-boy">
                            <div class="p-3">
                                <h3 class="fs-5 text-dark">Students Enrolled</h3>
                            </div>
                            <div class="table-responsive">
                            <table class="table table-responsive">
                               
                                    <tr>
                                        <td scope="col">#</th>
                                        <td scope="col">Name</th>
                                        <td scope="col">Email</th>
                                        <td scope="col">Mobile</th>
                                        <td scope="col">Enrolled on </th>
                                        <td scope="col">Actions</th>

                                    </tr>
                               
                                    @foreach ($paidEnrollments as $enrollment)
                                        <tr>
                                            <td scope="row">{{ ++$i }}</th>
                                            <td> <img src="{{ $enrollment->students->avatar }}" alt=""
                                            class="avatar avatar-sm">
                                            <a class="text-dark td-none" href="{{action('AdminController@studentDetails', $enrollment->students->id  )}}">{{ $enrollment->students->name }}</a></td>
                                            <td>{{ $enrollment->students->email }}</td>
                                            <td>{{ $enrollment->students->mobile }}</td>
                                            <td>{{ $enrollment->created_at->format('d M ')}}</td>
                                            <td>
                                                <a href="{{action('AdminController@paymentReceived', Crypt::encrypt($enrollment->id) )}}" class="">Payment Received</a>
                                            </td>

                                        </tr>
                                    @endforeach

                               
                            </table>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-boy">
                            <div class="p-3">
                                <h4 class="ck-font">Students with pending Payment</h3>
                            </div>
                            <div class="table-responsive">
                            <table class="table table-responsive">
                                
                                    <tr>
                                        <td scope="col">#</th>
                                        <td scope="col">Name</th>
                                        <td scope="col">Email</th>
                                        <td scope="col">Mobile</th>
                                        <td scope="col">Enrolled on </th>
                                        <td scope="col">Actions</th>
                                    </tr>
                               
                                
                                    @foreach ($unpaidEnrollments as $enrollment)
                                        <tr>
                                            <td scope="row">{{ ++$i }}</th>
                                            <td> <img src="{{ $enrollment->students->avatar }}" alt=""
                                            class="avatar avatar-sm"> <a class="text-dark td-none" href="{{action('AdminController@studentDetails', $enrollment->students->id  )}}">{{ $enrollment->students->name }}</a></td></td>
                                            <td>{{ $enrollment->students->email }}</td>
                                            <td>{{ $enrollment->students->mobile }}</td>
                                            <td>{{ $enrollment->created_at->format('d M')}}</td>
                                            <td>
                                                <a href="{{action('AdminController@paymentReceived', Crypt::encrypt($enrollment->id) )}}" class="">Payment Received</a>
                                            </td>

                                        </tr>
                                    @endforeach

                              
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
