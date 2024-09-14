@extends('layouts.t-admin')
@section('content')
@include('layouts.t-admin-nav')

{{-- Enrollment details --}}

<section class="mt-32  sm:max-w-6xl w-full mx-auto">
    <div class="container mx-auto px-4">
        @include('layouts.alert')
        <div class="flex justify-center">
            <div class="w-full">
                <h1 class="text-xl font-bold">Learners</h1>
                <p class="text-sm text-neutral-700">Manage your learners</p>
        
        
        
        
        <!-- Search Bar -->
        <div class="my-4">
            <input type="tex" id="searchInput" onkeyup="searchTable()" placeholder="Search by name, email, or phone number" class="w-full px-4 py-2 border border-neutral-200 rounded-lg focus:outline-none focus:ring-0">
        </div>

                <div class="bg-white border rounded-lg">
                    <div class="overflow-x-auto ">
                        <div class="content mt-8">
                            <h3 class="text-xl font-semibold mb-4">Enrollments</h3>
                            <div class="card p-0">
                                <table class="min-w-full divide-y divide-neutral-200">
                                    <thead class="">
                                        <tr class="text-black">
                                            <th class="px-5 py-3 font-medium text-left">Course</th>
                                            <th class="px-5 py-3 font-medium text-left">Enrolled On</th>
                                            <th class="px-5 py-3 font-medium text-left">Fees</th>
                                            <th class="px-5 py-3 font-medium text-left">College</th>
                                            <th class="px-5 py-3 font-medium text-left" width="280px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($enrollments as $enrollment)
                                        <tr class="{{ $enrollment->hasPaid == 1 ? 'table-success bg-green-50' : '' }}">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{$enrollment->batch->name}}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ \Carbon\Carbon::parse($enrollment->paidAt)->format('D d M y') }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{$enrollment->amountPaid > 0 ? $enrollment->amountPaid / 100 : 0}}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{$user->college}}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm">Beginner</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




{{-- 
@extends('layouts.admin')

@section('content')
<!-- Content -->
<div class="content card p-0 pt-20">
    <div class="text-center">
        <img src="{{$user->avatar}}" class="img-fluid rounded-circle" alt="">
        <h2 class="m-0">{{$user->name}}</h1>
        <p class="m-0 p-0"> <span class="text-muted">Joined On</span> {{$user->created_at->format('d M Y')}}</p>
        <p class="text-muted p-0 mt-0 pb-5">Last Activity {{$user->lastActivity->format('D, d M Y h:i A')}}</p>
        <div class="pt-10">
            @if ($user->status == 1)
            <a href="{{action('AdminController@banStudent', $user->id)}}" class="btn btn-danger">Ban Account</a> 
            @else
            <a href="{{action('AdminController@activateStudent', $user->id)}}" class="btn btn-success">Activate Account</a>
            @endif
            @if($user->role == 0)
            <a href="{{action('AdminController@makeTeacher', $user->id)}}" class="btn btn-primary">Upgrade</a>
            @else
            <a href="{{action('AdminController@downgradeTeacher', $user->id)}}" class="btn btn-secondary">Downgrade</a>
            
            @endif
            
            
           
            
        </div>
       
    </div>
<div class="table-responsive">
    <table class="table table-responsive border-top mt-20 pl-0 pr-0">
        <tr>
            <th>Email</th>
            <th>Mobile</th>
            <th>Mobile</th>
            <th>Level</th>
            <th width="280px">Action</th>
        </tr>
        
        <tr>
           <td>{{$user->email}}</td>
           <td>  <a href="{{action('AdminController@studentDetails', $user->id )}}">{{$user->name}}</a>   </td>
           <td>{{$user->mobile}}</td>
           <td>{{$user->college}}</td>
           <td>Begginer</td>    
        </tr> 
       
    </table>
</div>
    
</div>

<div class="content">
    <h3>Enrollments</h2>
        <div class="card p-0">
            <table class="table pl-0 pr-0">
                <tr>
                    
                    <th>Course</th>
                    <th>Enrolled On</th>
                    <th>Fees</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($enrollments as $enrollment)
                @if ($enrollment->hasPaid ==1)
                <tr class="table-success">
                @else
                   <tr>
                @endif
                
                   <td>{{$enrollment->batch->name}}</td>
                   <td>{{ \Carbon\Carbon::parse($enrollment->paidAt)->format('D d M y') }}</td>
                   <td>{{$enrollment->amountPaid > 0 ? $enrollment->amountPaid/100 : 0}}</td>
                   <td>{{$user->college}}</td>
                   <td>Begginer</td>    
                </tr>  
                @endforeach
                
               
            </table>
        </div>
</div>
@endsection --}}