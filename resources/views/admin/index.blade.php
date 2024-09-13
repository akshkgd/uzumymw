@extends('layouts.t-student')
@section('content')
    @include('layouts.t-admin-nav')

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Admin Dashboard</h1>
        
        <!-- Filter Form -->
        <form method="GET" action="{{ url('/home') }}" class="mb-6">
            <div class="mb-4">
                <label for="range" class="block text-gray-700 font-medium mb-2">Select Date Range:</label>
                <select name="range" id="range" class="block w-full border border-gray-300 rounded-md p-2" onchange="this.form.submit()">
                    <option value="7" {{ request('range') == '7' ? 'selected' : '' }}>Last 7 Days</option>
                    <option value="30" {{ request('range') == '30' ? 'selected' : '' }}>Last 30 Days</option>
                    <option value="365" {{ request('range') == '365' ? 'selected' : '' }}>Last 1 Year</option>
                    <option value="this_month" {{ request('range') == 'this_month' ? 'selected' : '' }}>This Month</option>
                    <option value="last_month" {{ request('range') == 'last_month' ? 'selected' : '' }}>Last Month</option>
                    <option value="last_3_months" {{ request('range') == 'last_3_months' ? 'selected' : '' }}>Last 3 Months</option>
                </select>
            </div>
        </form>
    
        <!-- Dashboard Statistics -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Users This Period -->
            <div class="bg-white shadow-md rounded-md p-4">
                <h3 class="text-xl font-bold mb-2">Users This Period</h3>
                <p class="text-gray-600">{{ $usersThisPeriod }}</p>
                <p class="text-sm">
                    @if ($userChangePercent > 0)
                        <span class="text-green-500">Up {{ number_format($userChangePercent, 2) }}%</span>
                    @else
                        <span class="text-red-500">Down {{ number_format(abs($userChangePercent), 2) }}%</span>
                    @endif
                </p>
            </div>
    
            <!-- Revenue This Period -->
            <div class="bg-white shadow-md rounded-md p-4">
                <h3 class="text-xl font-bold mb-2">Revenue This Period</h3>
                <p class="text-gray-600">${{ number_format($totalThisPeriod, 2) }}</p>
                <p class="text-sm">
                    @if ($revenueChangePercent > 0)
                        <span class="text-green-500">Up {{ number_format($revenueChangePercent, 2) }}%</span>
                    @else
                        <span class="text-red-500">Down {{ number_format(abs($revenueChangePercent), 2) }}%</span>
                    @endif
                </p>
            </div>
    
            <!-- Total Batches -->
            <div class="bg-white shadow-md rounded-md p-4">
                <h3 class="text-xl font-bold mb-2">Total Batches</h3>
                <p class="text-gray-600">{{ $batches }}</p>
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
