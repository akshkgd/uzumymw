@extends('layouts.t-student')

@section('content')
@include('layouts.t-student-nav')

<section class="mt-32 sm:max-w-3xl w-full mx-auto">
    <h1 class="text-xl font-bold">Enrollments for {{ $user->name }}</h1>
    <div class="flex gap-5">
        <h1>{{ $user->email }}</h1>
        <h1>{{ $user->mobile }}</h1>
    </div>
    <div class="f gap-5">
        <h1>Last activity: {{ \Carbon\Carbon::parse($user->lastActivity)->format('h:i A, d M Y') }}
        </h1>
       <h1>Status: Active</h1>
    </div>
    <a href="{{ url()->previous() }}" class="my-3 bg-violet-100 inline-block border border-violet-700 text-violet-700 rounded-full py-2 px-4 ">Back to Search</a>

    @if($enrollments->count() > 0)
        <div class="flex flex-col mt-8 border rounded-xl">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-neutral-200">
                            <thead>
                                <tr class="text-neutral-500">
                                    <th class="px-5 py-3 font-medium text-left">Course Name</th>
                                    <th class="px-5 py-3 font-medium text-left">Schedule</th>
                                    <th class="px-5 py-3 font-medium text-left">Amount paid</th>
                                    <th class="px-5 py-3 font-medium text-left">Enrolled On</th>

                                </tr>
                            </thead>
                            <tbody class="divide-y divide-neutral-200">
                                @foreach ($enrollments as $enrollment)
                                <tr class="text-neutral-800">
                                    <td class="px-5 py-4 font-medium whitespace-nowrap">{{ $enrollment->batch->name }}</td>
                                    <td class="px-5 py-4 whitespace-nowrap">{{ \Carbon\Carbon::parse($enrollment->batch->startDate)->format('d M Y') }} - {{ \Carbon\Carbon::parse($enrollment->batch->endDate)->format('d M Y') }}</td>
                                    <td class="px-5 py-4 whitespace-nowrap">{{ $enrollment->amountPaid}} - {{ $enrollment->paymentMethod}}</td>
                                    <td class="px-5 py-4 whitespace-nowrap">{{ \Carbon\Carbon::parse($enrollment->paidAt)->format('d M Y') }}</td>

                                </tr> 
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @else
        <p>No enrollments found for this user.</p>
    @endif
</section>
@endsection
