@extends('layouts.t-student')
@section('content')
@include('layouts.t-student-nav')

{{-- Enrollment details --}}

<section class="mt-32 sm:max-w-6xl w-full mx-auto">
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
                <div class="p-5">
                    
                </div>
                <div class="bg-white border rounded-lg">
                    

                    <div class="overflow-x-auto ">
                        <table class="min-w-full divide-y divide-neutral-200">
                            <thead class="">
                                <tr class="text-neutral-800">
                                    <th class="px-5 py-3  font-medium text-left ">#</th>
                                    <th class="px-5 py-3  font-medium text-left ">Name</th>
                                    <th class="px-5 py-3  font-medium text-left">Email</th>
                                    <th class="px-5 py-3  font-medium text-left">Mobile</th>
                                    <th class="px-5 py-3  font-medium text-left">Date</th>
                                    <th class="px-5 py-3  font-medium text-left">Certificate</th>
                                    <th class="px-5 py-3  font-medium text-left">Progress</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($enrollments as $enrollment)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ ++$i }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $enrollment->students->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $enrollment->students->email }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-violet-700"><a href="tel:+{{$enrollment->students->mobile}}">{{ $enrollment->students->mobile }}</a></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ \Carbon\Carbon::parse($enrollment->paidAt)->format('d M y') }}  {{$enrollment->amountPaid / 100}}Rs</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        @if ($enrollment->certificateId == '')
                                            <a href="{{ action('TeacherController@generateCertificate', $enrollment->id) }}" class="text-violet-700 hover:text-violet-800">Generate Certificate</a>
                                        @else
                                            {{ $enrollment->certificateId }}
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm"><a href="{{ url('/progress/' . $enrollment->id) }}" class="text-violet-700 hover:text-violet-800">Progress</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
