@extends('layouts.t-student')
@section('content')
@include('layouts.t-teacher-nav')

<section>
    <div class="sm:max-w-5xl mx-auto mt-32 px-5 sm:px-0">
        <h1 class="font-semibold text-xl"><span id="time"></span> <span>{!! strtok(Auth::user()->name, ' ') !!}</span> </h1>
        <p class="text-neutral-600">Manage all your active courses here!</p>  
        {{-- <a class="text-violet-600" href="{{url('/my-classes')}}">See all batches</a> --}}
    </div>
</section>

<section>
    <div class="sm:max-w-5xl mb-32 px-5 sm:px-0 mx-auto mt-12 flex flex-wrap gap-5">
        @foreach ($batches as $batch)
        <div class="w-72 mt-3 sm:mt-0">
            <div class="relative">
            <img class="rounded-xl" src="{{ 
         $batch->topicId == 100 ? asset('assets/img/htcss-bg.webp') :
         ($batch->topicId == 10 ? asset('assets/img/node.webp') :
         ($batch->topicId == 11 ? asset('assets/img/react.webp') :
         ($batch->topicId == 200 ? asset('assets/img/intensive.webp') : 
         asset('path/to/images/default.jpg'))))
     }}" 
     alt="Topic Image">
                <div class="absolute bottom-0 m-3 py- rounded-full text-sm px-4 bg-orange-50 text-orange-950">{{ \Carbon\Carbon::parse($batch->startDate)->format('d M Y') }} - {{ \Carbon\Carbon::parse($batch->endDate)->format('d M Y') }}</div>
            </div>
            <h2 class="mt-2 text-md">{{$batch->name}}</h2>
            {{-- <p class="text-neutral-600 text-sm mb-2">{{ \Carbon\Carbon::parse($batch->startDate)->format('d M Y') }} - {{ \Carbon\Carbon::parse($batch->endDate)->format('d M Y') }}</p> --}}
            <div class="flex gap-2 text-gray-700 mt-">
                <a href="{{ action('BatchController@classDetails', $batch->id) }}" class="hover:text-violet-600 -ml-2 flex items-center gap-"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-up-short rotate-45" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5"/>
                  </svg>Details</a>
                <a href="{{ action('TeacherController@enrollments', $batch->id) }}" class="hover:text-violet-600 flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-up-short rotate-45" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5"/>
                  </svg>Enrollments</a>
                  <a href="{{ action('TeacherController@addContent', $batch->id) }}" class="hover:text-violet-600 flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-up-short rotate-45" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5"/>
                  </svg>Content</a>

            </div>
        </div>
        @endforeach
    </div>
    </div>
</section>

<section class="mt-32">
    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex.</p>
</section>

<script>
    function timeOfDay() {
        let hour = new Date().getHours();
        if (hour >= 4 && hour <= 11) return 'Morning';
        if (hour >= 12 && hour <= 16) return 'Afternoon';
        if (hour >= 17 && hour <= 20) return 'Evening';
        if (hour >= 21 || hour <= 3) return 'Night';
    }
    document.getElementById("time").innerHTML = (`Good ${timeOfDay()},`);
    console.log(timeOfDay());
    if (timeOfDay() == 'Morning')
        document.getElementById("test").style.background = "#ffc10759";
    if (timeOfDay() == 'Afternoon')
        document.getElementById("test").style.background = "rgb(255 193 7 / 55%)";
    if (timeOfDay() == 'Evening')
        document.getElementById("test").style.background = "#28a74561";
    if (timeOfDay() == 'Night')
        document.getElementById("test").style.background = "#5ba0f561";

</script>

@endsection
