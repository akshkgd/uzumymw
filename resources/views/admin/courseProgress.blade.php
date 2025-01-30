@extends('layouts.t-admin-sidebar')
@section('content')

<section class="mt-5 sm:max-w-8xl  mx-auto">
    <div class="container mx-auto px-4">
        <h1 class="text-xl font-bold">{{$enrollment->batch->name}}</h1>
        <div class="flex gap-5">
            <h1>{{$enrollment->students->name}}</h1>
            <h1>{{$enrollment->students->email}}</h1>
        </div>
        <div class="flex gap-5">
            <h1>{{$enrollment->batch->name}}</h1>
            <h1 class="text-neutral-600">Start date: {{ \Carbon\Carbon::parse($enrollment->paidAt)->format('d M Y') }}</h1>
        </div>

        <a href="{{url()->previous()}}" class="my-3 bg-violet-100 inline-block borde border-violet-700 text-violet-700 rounded-full py-2 px-4 ">Back to enrollments</a>

        <div class="flex flex-col mt-8 border rounded-xl">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-neutral-200">
                            <thead>
                                <tr class="text-neutral-500">
                                    <th class="px-5 py-3  font-medium text-left ">Topic</th>
                                    <th class="px-5 py-3  font-medium text-left">Time Spent</th>
                                    <th class="px-5 py-3 font-medium text-left ">Times Visited</th>
                                    <th class="px-5 py-3 font-medium text-left ">Last access</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-neutral-200">
                                @foreach ($courseProgress as $progress)
                                <tr class="text-neutral-800">
                                    <td class="px-5 py-4  font-medium whitespace-nowrap">{{ $progress->content->title }}</td>
                                    <td class="px-5 py-4 t whitespace-nowrap">{{ $progress->timeSpent }}m</td>
                                    <td class="px-5 py-4  whitespace-nowrap">{{ $progress->visited }}</td>
                                    <td class="px-5 py-4 text-sm whitespace-nowrap">{{ \Carbon\Carbon::parse($progress->lastAccess)->format('h:i A, d F Y') }}</td>
                                    
                                </tr> 
                                @endforeach
                                
    </div>
</section>
@endsection