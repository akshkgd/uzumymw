@extends('layouts.t-admin-sidebar')

@section('content')

<div class="container mx-auto mt5 hidde">
    <div class="p-6">
        <div class="flex justify-between items-center">
            <div class="">
                <h2 class="text-xl font-bold text-gray-800">{{$batch->name}}</h2>
                <p class="mt-1 text-gray-600">From {{Carbon\Carbon::parse($batch->endDate)->format('d M Y')}} to {{ Carbon\Carbon::parse($batch->endDate)->format('d M Y') }} 
                    <span class="text-green-600"> {{$batch->payable}} </span> 
                </p>   
            </div>
            
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-4">
            {{-- <div class="bg-red-500  p-4 border rounded-lg">
                <p class="font-medium">Total Paid Users</p>
                <p class="text-2xl">{{ $totalPaidUsers }} <span class="text-xs">test</span></p>
            </div> --}}

            <div class="  p-4 border rounded-lg">
                <p class="text-sm font- mb-2 text-neutral-700">Total Earnings</p>
                <p class="text-2xl">{{ $totalEarning }}</p>
            </div>

            <div class=" p-4 border rounded-lg">
                <p class="text-sm font- mb-2 text-neutral-700">Live Course Earning</p>
                <p class="text-2xl">{{ $classEarning }} <span class="text-xs">{{ $classEarningPercentage }}%</span></p>
            </div>

            <div class="  p-4 border rounded-lg">
                <p class="text-sm font- mb-2 text-neutral-700">Recordings Earnings</p>
                <p class="text-2xl">{{ $certificateFeeEarning }} <span class="text-xs">{{ $certificateFeePercentage }}%</span></p>
            </div>

            <div class="  p-4 border rounded-lg">
                <p class="text-sm font- mb-2 text-neutral-700">Recordings Earning</p>
                <p class="text-2xl">{{ $certificateFeeEarning }}</p>
            </div>

            {{-- <div class="  p-4 border rounded-lg">
                <p class="text-sm font- mb-2 text-neutral-700">Unpaid Users</p>
                <p class="text-2xl">{{ $unpaidEnrollments->count() }}</p>
            </div> --}}
        </div>
    </div>
</div>

{{-- Enrollment details --}}

<section class="container mx-auto mt-5">
    @include('layouts.alert')
    <div class=" p-6">
        <h3 class="text-lg font-bold text-gray-800 mb-4">Students Enrolled</h3>
        <div class="overflow-x-auto border rounded-xl">
            <table class="min-w-full table-auto borde rounded-xl border-gray-300">
                <thead class="bg-gray-10 border-b">
                    <tr>
                        <th class="px-5 py-3  font-medium text-left">#</th>
                        <th class="px-5 py-3  font-medium text-left">Name</th>
                        <th class="px-5 py-3  font-medium text-left">Email</th>
                        {{-- <th class="px-5 py-3  font-medium text-left">Mobile</th> --}}
                        <th class="px-5 py-3  font-medium text-left">Amount</th>
                        <th class="px-5 py-3  font-medium text-left">Date</th>
                        
                        <th class="px-5 py-3  font-medium text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($paidEnrollments as $enrollment)
                    <tr class="text-sm">
                        <td class="px-4 py-4">{{ ++$i }}</td>
                        <td class="px-4 py-4">
                            
                            <a href="{{action('AdminController@studentDetails', $enrollment->students->id)}}" class="text-violet-600">{{ $enrollment->students->name }}</a>
                        </td>
                        <td class="px-4 py-4">{{ $enrollment->students->email }}</td>
                        {{-- <td class="px-4 py-2">{{ $enrollment->students->mobile }}</td> --}}
                        <td class="px-4 py-4">{{ number_format($enrollment->amountPaid / 100, 2) }}</td>
                        <td class="px-4 py-4">{{ Carbon\Carbon::parse($enrollment->paidAt)->format('D, d M Y') }}</td>
                        {{-- <td class="px-4 py-2">{{ $enrollment->field2 }}</td>
                        <td class="px-4 py-2">{{ $enrollment->students->field1 }}</td>
                        <td class="px-4 py-2">{{ $enrollment->students->field2 }}</td> --}}
                        <td class="px-4 py-4">
                            <a href="{{action('AdminController@paymentReceived', Crypt::encrypt($enrollment->id))}}" class="text-neutral-600">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Students with Pending Payment --}}
    <div class="bg-white shadow rounded-lg p-6 mt-5">
        <h4 class="text-lg font-bold text-gray-800 mb-4">Students with Pending Payment</h4>
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-gray-600 font-semibold border-b">#</th>
                        <th class="px-4 py-2 text-left text-gray-600 font-semibold border-b">Name</th>
                        <th class="px-4 py-2 text-left text-gray-600 font-semibold border-b">Email</th>
                        <th class="px-4 py-2 text-left text-gray-600 font-semibold border-b">Mobile</th>
                        <th class="px-4 py-2 text-left text-gray-600 font-semibold border-b">Status</th>
                        <th class="px-4 py-2 text-left text-gray-600 font-semibold border-b">Enrolled On</th>
                        <th class="px-4 py-2 text-left text-gray-600 font-semibold border-b">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($unpaidEnrollments as $enrollment)
                    <tr>
                        <td class="px-4 py-2">{{ ++$i }}</td>
                        <td class="px-4 py-2 flex items-center">
                            <img src="{{ $enrollment->students->avatar }}" alt="" class="w-8 h-8 rounded-full mr-2">
                            <a href="{{action('AdminController@studentDetails', $enrollment->students->id)}}" class="text-blue-600">{{ $enrollment->students->name }}</a>
                        </td>
                        <td class="px-4 py-2">{{ $enrollment->students->email }}</td>
                        <td class="px-4 py-2">{{ $enrollment->students->mobile }}</td>
                        <td class="px-4 py-2">{{ $enrollment->field2 }}</td>
                        <td class="px-4 py-2">{{ $enrollment->created_at->format('d M') }}</td>
                        <td class="px-4 py-2">
                            <a href="{{action('AdminController@paymentReceived', Crypt::encrypt($enrollment->id))}}" class="text-green-600">Payment Received</a>
                            <a target="_blank" href="{{ action('CourseEnrollmentController@checkout', Crypt::encrypt($enrollment->id)) }}" class="text-blue-600">Checkout</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection



{{-- @extends('layouts.ck-admin')
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
                                        <th scope="col">Amount paid</th>
                                        <td scope="col">Enrolled on </th>
                                        <td scope="col">Source</th>
                                        <td scope="col">Medium</th>
                                        <td scope="col">Campaign</th>
                                        
                                        

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
                                            <td>{{ ($enrollment->amountPaid) / 100 }}</td>
                                            <td>{{ Carbon\Carbon::parse($enrollment->paidAt)->format('D, d M Y') }}</td>
                                            <td>{{ $enrollment->field2 }}</td>
                                            
                                            <td>{{ $enrollment->students->field1 }}</td>
                                            <td>{{ $enrollment->students->field2 }}</td>
                                            <td>{{ $enrollment->students->field3 }}</td>

                                            

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
@endsection --}}
