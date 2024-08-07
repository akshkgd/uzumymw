@extends('layouts.t-student')
@section('content')

<section>
    <div class="flex">
        <div class="w-72 bg-neutral-5 border-r border-neutral-200 h-screen fixed">
            <div class="h-14 border- flex items-center ">
                
                    <div class="px-3 text-lg font-medium">Frontend Cohort B66</div>
            </div>
            <button class="border py-1 px-3 rounded">Before you get started</button>

        </div>
        <div class="calc ml-72 player-container  h-screen">
            {{-- <div class="h-14 border-b">
                <div class="p-1">
                    
                </div>
            </div> --}}
            <div class="max-w-3xl mx-auto mt-12">
                <div class="bg-violet-100 h-96 w-full rounded-xl"></div>
            </div>
        </div>
    </div>
</section>

@endsection