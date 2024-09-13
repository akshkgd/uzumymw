@extends('layouts.t-student')
@section('content')
@include('layouts.t-teacher-nav')

<section>
    <div class="sm:max-w-6xl mx-auto mt-32 px-5 sm:px-0">
        <h1 class="font-semibold text-xl"><span id="time"></span> <span>{!! strtok(Auth::user()->name, ' ') !!}</span> </h1>
        <p class="text-neutral-600">Manage all your active courses here!</p>  
        {{-- <a class="text-violet-600" href="{{url('/my-classes')}}">See all batches</a> --}}
    </div>
</section>

<section>
    <div class="sm:max-w-6xl mb-32 px-5 sm:px-0 mx-auto mt-12 flex flex-wrap gap-5">
        @foreach ($batches as $batch)
        <div class="w-96 flex-grow sm:flex-grow-0 mt-3 sm:mt-0 border border-neutral-200 hover:border-orange-200 hover:bg-neutra-100 rounded-xl p-3">
            <div class="relativ">
            <img class="rounded-xl hidden" src="{{ 
         $batch->topicId == 100 ? asset('assets/img/htcss-bg.webp') :
         ($batch->topicId == 10 ? asset('assets/img/node.webp') :
         ($batch->topicId == 11 ? asset('assets/img/react.webp') :
         ($batch->topicId == 200 ? asset('assets/img/intensive.webp') : 
         asset('path/to/images/default.jpg'))))
     }}" 
     alt="Topic Image">
                </div>
            <h2 class="mt- text-l">{{$batch->name}}</h2>
            <p class="text-sm text-neutral-600">From {{ \Carbon\Carbon::parse($batch->startDate)->format('d M Y') }} - {{ \Carbon\Carbon::parse($batch->endDate)->format('d M Y') }}</p>
            <div class="my-3">
                <p>Upcoming: Intro to CSS</p>
                <p class="text-sm">Sat, 16th dec</p>
            </div>
            <div class="flex gap-4 justify-betwee text-gray-700 mt-8 ml-2">
                
                    <a href="{{ action('BatchController@classDetails', $batch->id) }}" class="hover:text-violet-600 -ml-2 flex inline-block items-center gap-"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-info" viewBox="0 0 16 16">
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                      </svg></a>
                    <a href="{{ action('TeacherController@enrollments', $batch->id) }}" class="hover:text-violet-600 flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                      </svg></a>
                      
                      <a href="{{ action('TeacherController@addContent', $batch->id) }}" class="hover:text-violet-600 flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-broadcast" viewBox="0 0 16 16">
                        <path d="M3.05 3.05a7 7 0 0 0 0 9.9.5.5 0 0 1-.707.707 8 8 0 0 1 0-11.314.5.5 0 0 1 .707.707m2.122 2.122a4 4 0 0 0 0 5.656.5.5 0 1 1-.708.708 5 5 0 0 1 0-7.072.5.5 0 0 1 .708.708m5.656-.708a.5.5 0 0 1 .708 0 5 5 0 0 1 0 7.072.5.5 0 1 1-.708-.708 4 4 0 0 0 0-5.656.5.5 0 0 1 0-.708m2.122-2.12a.5.5 0 0 1 .707 0 8 8 0 0 1 0 11.313.5.5 0 0 1-.707-.707 7 7 0 0 0 0-9.9.5.5 0 0 1 0-.707zM10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0"/>
                      </svg></a>
                

                  <a href="{{ action('TeacherController@addContent', $batch->id) }}" class="hover:text-violet-600 flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-justify-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"/>
                  </svg></a>

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
