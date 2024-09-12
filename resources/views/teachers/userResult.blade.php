@extends('layouts.t-student')
@section('content')
@include('layouts.t-student-nav')
@if($users->count()>0)
<section>
    <div class="mt-32 sm:max-w-3xl w-full mx-auto">
        <h1 class="text-xl font-bold">Search Results for {{$query}}</h1>
        
        
        <a href="{{url()->previous()}}" class="my-3 bg-violet-100 inline-block borde border-violet-700 text-violet-700 rounded-full py-2 px-4 ">Back to dashboard</a>

        <div class="flex flex-col mt-8 border rounded-xl">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-neutral-200">
                            <thead>
                                <tr class="text-neutral-500">
                                    <th class="px-5 py-3  font-medium text-left ">Name</th>
                                    <th class="px-5 py-3  font-medium text-left">Email</th>
                                    <th class="px-5 py-3 font-medium text-left ">Mobile</th>
                                    <th class="px-5 py-3 font-medium text-left ">SignedUp</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-neutral-200">
                                @foreach ($users as $user)
                                <tr class="text-neutral-800">
                                    <td class="px-5 py-4 font-medium whitespace-nowrap">
                                        <a href="{{ route('user.enrollments', $user->id) }}" class="text-violet-700 hover:text-violet-800">{{ $user->name }}</a>
                                    </td>
                                    <td class="px-5 py-4 t whitespace-nowrap">{{ $user->email }}m</td>
                                    <td class="px-5 py-4  whitespace-nowrap">{{ $user->mobile }}</td>
                                    <td class="px-5 py-4 text-sm whitespace-nowrap">{{ \Carbon\Carbon::parse($user->created_at)->format('h:i A, d F Y') }}</td>
                                    
                                </tr> 
                                @endforeach
                                
    </div>
</section>
@else
    <div class="h-[90vh] flex items-center ">
        <div class="mx-auto sm:max-w-xl text-center">
            <img src="{{asset('assets/img/yo.svg')}}" class="h-40 inline" alt="">
            <h2 class="text-xl  font-semibold">No users found with {{$query}}</h2>
            <p class="text-neutral-600">Search user with a different email or phone number or conform with the user for the correct credentials.</p>
        </div>
    </div>
@endif
@endsection