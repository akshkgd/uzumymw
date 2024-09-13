@extends('layouts.t-student')
@section('content')
@include('layouts.t-teacher-nav')

{{-- Enrollment details --}}

<section class="mt-32  sm:max-w-6xl w-full mx-auto">
    <div class="container mx-auto px-4">
        @include('layouts.alert')
        <div class="flex justify-center">
            <div class="w-full">
                <h1 class="text-xl font-bold">{{$batch->name}} Enrollments - B{{$batch->id}}</h1>
        <div class="">
            <h1>Schedule: {{ \Carbon\Carbon::parse($batch->startDate)->format('d M Y') }} - {{ \Carbon\Carbon::parse($batch->endDate)->format('d M Y') }}</h1>
            <h1>Total users: {{$enrollments->count()}}</h1>
        </div>
        
        <div class="flex my-3 gap-3">
            <a href="{{url()->previous()}}" class=" bg-neutral-100 inline-block border  text-neutral-900 hover:border-neutral-300 hover:bg-white rounded-full py-2 px-4 ">Back to enrollments</a>

            <a href="{{ action('TeacherController@generateAllCertificate', $batch->id) }}" class="bg-violet-100 inline-block border border-violet-300 text-violet-700 rounded-full py-2 px-4">Generate All Certificates</a>

        </div>
        
        

@endsection
