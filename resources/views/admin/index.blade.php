@extends('layouts.t-admin-sidebar')
@section('content')
    {{-- @include('layouts.t-admin-nav') --}}
    <div class="container mx-auto p-4 mt-">
    
        
        <!-- Filter Form -->
        <div class="flex justify-between items-center mb-4">
            <div class="">
                <h1 class="">Analytics</h1>
            </div>
            <form method="GET" action="{{ url('/home') }}" class=" flex justify-end ">
                <div class="mb- w-60">
                    <select name="range" id="range" class="block w-full text-sm text-violet-700 bg-violet-100 border-none focus:ring-0 focus:border-none rounded-m p-2 pr-8 focus:outline-none" onchange="this.form.submit()">
                        <option value="today" {{ request('range', 'today') == 'today' ? 'selected' : '' }}>Today</option>
                        <option value="yesterday" {{ request('range') == 'yesterday' ? 'selected' : '' }}>Yesterday</option>
                        <option value="7" {{ request('range') == '7' ? 'selected' : '' }}>Last 7 Days</option>
                        <option value="30" {{ request('range') == '30' ? 'selected' : '' }}>Last 30 Days</option>
                        <option value="365" {{ request('range') == '365' ? 'selected' : '' }}>Last 1 Year</option>
                        <option value="this_month" {{ request('range') == 'this_month' ? 'selected' : '' }}>This Month</option>
                        <option value="last_month" {{ request('range') == 'last_month' ? 'selected' : '' }}>Last Month</option>
                        <option value="last_3_months" {{ request('range') == 'last_3_months' ? 'selected' : '' }}>Last 3 Months</option>
                    </select>
                    
                    
                    
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
            <div class="bg-white border w-full rounded-x p-4">
                <h3 class="text-sm font- mb-2 text-neutral-700">Failed Payments</h3>
                <p class="text-black text-xl mb-2">{{ $failedPaymentsThisPeriod }} </p>
                <p class="text-sm text-neutral-700">Failed Revenue: ₹{{ number_format($failedRevenueThisPeriod, 0) }}</p>
            </div>

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
    </div>
        







    <script>
        function toggleCustomRange() {
            var range = document.getElementById('range').value;
            var customRangeFields = document.getElementById('custom-range-fields');
            if (range === 'custom') {
                customRangeFields.classList.remove('hidden');
            } else {
                customRangeFields.classList.add('hidden');
            }
        }
    
        // Call function on page load to ensure proper state
        window.onload = toggleCustomRange;
    </script>
    

    
@endsection
