@extends('layouts.ck-admin')
@section('content')

<div class="container mt-5">
    <div class="card card-body">
        <div class="d-flex justify-content-between">
            <div class="">
                <h2 class="text-dark fw-bolder">{{$batch->name}}</h1>
                    <p class= " mt-0">From {{$batch->startDate->format('d M y')}} to {{ Carbon\Carbon::parse($batch->endDate)->format('d M Y') }} 
                        <span class=""><span class="text-green">{{$batch->payable}}</span></span> 
                    
                    </p>   
            </div>
            <div class="">
                <a href="" class="btn btn-muted ">Edit Batch</a>
    
            </div>
        </div>
         <div class="row mt-4">
        <div class="col-6 col-md">
            <div class="stat-cell stat-cell-red p-2">
                <p class="stat-cell-title">Total Paid Users</p>
                <p class="stat-cell-value">{{$totalPaidUsers}} <span style="font-size: 12px" class="small fw-light">test</span></p>
                
            </div>

        </div>
        
        <div class="col-6 col-md">
            <div class="stat-cell stat-cell-purple p-2">
                <p class="stat-cell-title">Total Earnings</p>
                <p class="stat-cell-value">{{$totalEarning}}</p>
            </div>

        </div>
        <div class="col-6 col-md">
            <div class="stat-cell stat-cell-yellow p-2">
                <p class="stat-cell-title">Live Course Earning</p>
                <p class="stat-cell-value">{{$classEarning}} <span style="font-size: 12px" class="small fw-light">{{$classEarningPercentage}}%</span></p>
            </div>

        </div>
        <div class="col-6 col-md">
            <div class="stat-cell stat-cell-teal p-2">
                <p class="stat-cell-title">Recordings Earnings</p>
                <p class="stat-cell-value">{{$certificateFeeEarning}} <span style="font-size: 12px" class="small fw-light">{{$certificateFeePercentage}}%</span> </p>
            </div>

        </div>
        <div class="col-6 col-md">
            <div class="stat-cell stat-cell-green p-2">
                <p class="stat-cell-title">Recordings Earning</p>
                <p class="stat-cell-value">{{$certificateFeeEarning}}</p>
            </div>

        </div>
        <div class="col-6 col-md">
            <div class="stat-cell stat-cell-blue p-2">
                <p class="stat-cell-title">Unpaid Users</p>
                <p class="stat-cell-value">{{$unpaidEnrollments->count()}}</p>
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
                                        <td scope="col">Webhook</th>
                                        <th scope="col">Amount paid</th>
                                        <td scope="col">Enrolled on </th>
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
                                            <td>{{ $enrollment->field2}}</td>
                                            <td>{{ ($enrollment->amountPaid) / 100 }}</td>
                                            <td>{{ Carbon\Carbon::parse($enrollment->paidAt)->format('D, d M Y') }}</td>
                                            <td>{{ $enrollment->created_at}} </td>

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
                                        <td scope="col">Status</th>  
                                        <td scope="col">Enrolled on </th>
                                        <td scope="col">Enrolled on </th>

                                        <td scope="col">Actions</th>
                                            <td scope="col">Actions</th>
                                    </tr>
                               
                                
                                    @foreach ($unpaidEnrollments as $enrollment)
                                        <tr>
                                            <td scope="row">{{ ++$i }}</th>
                                            <td> <img src="{{ $enrollment->students->avatar }}" alt=""
                                            class="avatar avatar-sm"> <a class="text-dark td-none" href="{{action('AdminController@studentDetails', $enrollment->students->id  )}}">{{ $enrollment->students->name }}</a></td></td>
                                            <td>{{ $enrollment->students->email }}</td>
                                            <td>{{ $enrollment->students->mobile }}</td>
                                            <td>{{ $enrollment->field2 }}</td>
                                            <td>{{ $enrollment->created_at->format('d M')}} </td>
                                            <td>{{ $enrollment->created_at}} </td>

                                            <td>
                                                <a href="{{action('AdminController@paymentReceived', Crypt::encrypt($enrollment->id) )}}" class="">Payment Received</a>
                                                
                                            </td>
                                            <td><a target="_blank" href="{{ action('CourseEnrollmentController@checkout', Crypt::encrypt($enrollment->id)) }}"
                                                    class=""> {{url('checkout', Crypt::encrypt($enrollment->id))}}  </a></td>

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
