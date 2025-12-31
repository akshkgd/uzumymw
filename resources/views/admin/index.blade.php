@extends('layouts.t-admin-sidebar')
@section('content')
@include('layouts.t-alert')
    {{-- @include('layouts.t-admin-nav') --}}
    <div class="container mx-auto p-4 mt-4">
    
        
        <!-- Filter Form -->
        <div class="flex justify-between items-center mb-4">
            <div class="">
                <h1 class="text-xl font-bold">Analytics</h1>
                <p class="text-sm text-neutral-700">Get an insight into your sales, engagement, and school activity metrics.</p>
            </div>
            <form method="GET" action="{{ url('/home') }}" class=" flex justify-end gap-2 items-end" id="filterForm">
                <div class="mb- w-60">
                    <select name="range" id="range" class="block w-full h-[38px] text-sm text-violet-700 bg-violet-100 border-none focus:ring-0 focus:border-none rounded-m px-2 pr-8 focus:outline-none" onchange="toggleCustomRange()">
                        <option value="today" {{ request('range', 'today') == 'today' ? 'selected' : '' }}>Today</option>
                        <option value="yesterday" {{ request('range') == 'yesterday' ? 'selected' : '' }}>Yesterday</option>
                        <option value="7" {{ request('range') == '7' ? 'selected' : '' }}>Last 7 Days</option>
                        <option value="30" {{ request('range') == '30' ? 'selected' : '' }}>Last 30 Days</option>
                        <option value="365" {{ request('range') == '365' ? 'selected' : '' }}>Last 1 Year</option>
                        <option value="this_month" {{ request('range') == 'this_month' ? 'selected' : '' }}>This Month</option>
                        <option value="last_month" {{ request('range') == 'last_month' ? 'selected' : '' }}>Last Month</option>
                        <option value="last_3_months" {{ request('range') == 'last_3_months' ? 'selected' : '' }}>Last 3 Months</option>
                        <option value="custom" {{ request('range') == 'custom' ? 'selected' : '' }}>Custom Range</option>
                    </select>
                    
                    
                    
                </div>
                <div id="custom-range-fields" class="flex gap-2 items-end {{ request('range') == 'custom' ? '' : 'hidden' }}">
                    <div class="flex flex-col w-48">
                        <label for="start_date" class="text-xs text-neutral-600 mb-1">Start Date</label>
                        <input type="date" name="start_date" id="start_date" value="{{ request('start_date') }}" class="w-full h-[38px] text-sm text-violet-700 bg-violet-100 border-none focus:ring-0 focus:border-none rounded-m px-2 focus:outline-none" required>
                    </div>
                    <div class="flex flex-col w-48">
                        <label for="end_date" class="text-xs text-neutral-600 mb-1">End Date</label>
                        <input type="date" name="end_date" id="end_date" value="{{ request('end_date') }}" class="w-full h-[38px] text-sm text-violet-700 bg-violet-100 border-none focus:ring-0 focus:border-none rounded-m px-2 focus:outline-none" required>
                    </div>
                    <div class="flex flex-col">
                        <button type="submit" class="bg-violet-600 text-white h-[38px] px-6 rounded-m text-sm hover:bg-violet-700 whitespace-nowrap">Apply</button>
                    </div>
                </div>
            </form>
        </div>
        
    
        <!-- Dashboard Statistics -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Users (New Signups) -->
            <div class="bg-white border w-full rounded-x p-4 ">
                <h3 class="text-sm font- mb-2 text-neutral-700">New Signups</h3>
                <p class="text-black text-xl mb-2">{{ $usersThisPeriod }} users</p>
                @if ($usersThisPeriod > 0 || $usersPreviousPeriod > 0)
                    <p class="text-sm">
                        @if ($userChangePercent > 0)
                            <span class="text-green-500">Up {{ round($userChangePercent) }}% ({{ $usersThisPeriod - $usersPreviousPeriod }} more)</span>
                        @elseif ($userChangePercent < 0)
                            <span class="text-red-500">Down {{ round(abs($userChangePercent)) }}% ({{ abs($usersThisPeriod - $usersPreviousPeriod) }} fewer)</span>
                        @else
                            <span>No Change</span>
                        @endif
                    </p>
                @else
                    <p class="text-sm text-neutral-700 mb-0">No signups.</p>
                @endif
            </div>
    
            <!-- Enrollments (Paid Members) -->
            <div class="bg-white border w-full rounded-x p-4">
                <h3 class="text-sm font- mb-2 text-neutral-700">New Enrollments</h3>
                <p class="text-black text-xl mb-2">{{ $enrollmentsThisPeriod }} enrollments</p>
                @if ($enrollmentsThisPeriod > 0 || $enrollmentsPreviousPeriod > 0)
                    <p class="text-sm">
                        @if ($enrollmentChangePercent > 0)
                            <span class="text-green-500">Up {{ round($enrollmentChangePercent) }}% ({{ $enrollmentsThisPeriod - $enrollmentsPreviousPeriod }} more)</span>
                        @elseif ($enrollmentChangePercent < 0)
                            <span class="text-red-500">Down {{ round(abs($enrollmentChangePercent)) }}% ({{ abs($enrollmentsThisPeriod - $enrollmentsPreviousPeriod) }} fewer)</span>
                        @else
                            <span>No Change</span>
                        @endif
                    </p>
                @else
                    <p class="text-sm text-neutral-700">No enrollments.</p>
                @endif
            </div>
    
            <!-- Revenue This Period -->
            <div class="bg-white border w-full rounded-x p-4">
                <h3 class="text-sm font- mb-2 text-neutral-700">Revenue This Period</h3>
                <p class="text-black text-xl mb-2">₹{{ number_format($totalThisPeriod, 0) }}</p>
                <p class="text-sm">
                    @if ($revenueChangePercent > 0)
                        <span class="text-green-500">Up {{ round($revenueChangePercent) }}% (${{ number_format($totalThisPeriod - $totalPreviousPeriod, 0) }} more)</span>
                    @elseif ($revenueChangePercent < 0)
                        <span class="text-red-500">Down {{ round(abs($revenueChangePercent)) }}% (${{ number_format(abs($totalThisPeriod - $totalPreviousPeriod), 0) }} less)</span>
                    @else
                        <span>No Change</span>
                    @endif
                </p>
            </div>
    
            <!-- Failed Payments -->
            {{-- <div class="bg-white border w-full rounded-x p-4">
                <h3 class="text-sm font- mb-2 text-neutral-700">Failed Payments</h3>
                <p class="text-black text-xl mb-2">{{ $failedPaymentsThisPeriod }} </p>
                <p class="text-sm text-neutral-700">Failed Revenue: ₹{{ number_format($failedRevenueThisPeriod, 0) }}</p>
            </div> --}}

            <div class="bg-white border w-full rounded-x p-4">
                <h3 class="text-sm font- mb-2 text-neutral-700">Learning Time</h3>
                <p class="text-black text-xl mb-2">{{ $totalLearningTimeThisPeriod }} Hrs</p>
                @if ($totalLearningTimeThisPeriod > 0 || $totalLearningTimePreviousPeriod > 0)
                <p class="text-sm">
                    @if ($learningTimeChangePercent > 0)
                        <span class="text-green-500">Up {{ round($learningTimeChangePercent) }}% ({{ $totalLearningTimeThisPeriod - $totalLearningTimePreviousPeriod }} more Hrs)</span>
                    @elseif ($learningTimeChangePercent < 0)
                        <span class="text-red-500">Down {{ round(abs($learningTimeChangePercent)) }}% ({{ abs($totalLearningTimeThisPeriod - $totalLearningTimePreviousPeriod) }} fewer Hrs)</span>
                    @else
                        <span>No Change</span>
                    @endif
                </p>
            @else
                <p class="text-xs text-neutral-600">No learning time recorded during this period.</p>
            @endif
            </div>
        </div>
        {{-- enrolled users data --}}
        <div class="mt-12 mb-5">
            <h1 class="text-xl font-bold">Enrolled Learners</h1>
            <p class="text-sm text-neutral-700">Manage learners</p>
        </div>
        <div class="bg-white border rounded-l m">
           
            <div class="overflow-x-auto ">
                <table class="min-w-full table-auto borde rounded-xl border-gray-300">
                    <thead class="bg-gray-10 border-b">
                        <tr>
                            
                            <th class="px-5 py-3  font-medium text-left">Name</th>
                            <th class="px-5 py-3  font-medium text-left">Email</th>
                            {{-- <th class="px-5 py-3  font-medium text-left">Mobile</th> --}}
                            <th class="px-5 py-3  font-medium text-left">Amount</th>
                            <th class="px-5 py-3  font-medium text-left">Campaign</th>
                            
                            <th class="px-5 py-3  font-medium text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($enrollmentsDetailsThisPeriod as $enrollment)
                        <tr class="text-sm">
                            <td class="px-4 py-4">
                                
                                <a href="{{action('AdminController@studentDetails', $enrollment->students->id)}}" class="text-violet-600">{{ $enrollment->students->name }}</a>
                            </td>
                            <td class="px-4 py-4">{{ $enrollment->students->email }}</td>
                            {{-- <td class="px-4 py-2">{{ $enrollment->students->mobile }}</td> --}}
                            <td class="px-4 py-4">{{ number_format($enrollment->amountPaid / 100, 0) }} - {{$enrollment->paymentMethod}}</td>
                            <td class="px-4 py-4">{{ $enrollment->students->field1 ?: 'organic' }}</td>
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
            <div class="px-5 py-4">
                {{ $enrollmentsDetailsThisPeriod->appends(request()->query())->links() }}
            </div>
        </div>
    </div>
        







    <script>
        function toggleCustomRange() {
            var range = document.getElementById('range').value;
            var customRangeFields = document.getElementById('custom-range-fields');
            var form = document.getElementById('filterForm');
            
            if (range === 'custom') {
                customRangeFields.classList.remove('hidden');
            } else {
                customRangeFields.classList.add('hidden');
                // Auto-submit for preset ranges (only when user changes the select)
                if (event && event.type === 'change') {
                    form.submit();
                }
            }
        }
    
        // On page load, just show/hide the custom fields without submitting
        window.onload = function() {
            var range = document.getElementById('range').value;
            var customRangeFields = document.getElementById('custom-range-fields');
            
            if (range === 'custom') {
                customRangeFields.classList.remove('hidden');
            } else {
                customRangeFields.classList.add('hidden');
            }
        };
    </script>
    

    
@endsection
