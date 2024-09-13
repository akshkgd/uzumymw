@extends('layouts.t-student')
@section('content')
    @include('layouts.t-admin-nav')

    <!-- main dashboard -->

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Admin Dashboard</h1>
        
        <!-- Filter Form -->
        <form method="GET" action="{{ url('/home') }}" class="mb-6">
            <div class="mb-4">
                <label for="range" class="block text-gray-700 font-medium mb-2">Select Date Range:</label>
                <select name="range" id="range" class="block w-full border border-gray-300 rounded-md p-2">
                    <option value="7" {{ request('range') == '7' ? 'selected' : '' }}>Last 7 Days</option>
                    <option value="30" {{ request('range') == '30' ? 'selected' : '' }}>Last 30 Days</option>
                    <option value="365" {{ request('range') == '365' ? 'selected' : '' }}>Last 1 Year</option>
                    <option value="custom" {{ request('range') == 'custom' ? 'selected' : '' }}>Custom Range</option>
                </select>
            </div>
    
            <!-- Custom Date Range Fields -->
            <div id="custom-range-fields" class="mb-4" style="display: none;">
                <div class="mb-4">
                    <label for="start_date" class="block text-gray-700 font-medium mb-2">Start Date:</label>
                    <input type="date" name="start_date" class="block w-full border border-gray-300 rounded-md p-2" value="{{ request('start_date') }}">
                </div>
                <div class="mb-4">
                    <label for="end_date" class="block text-gray-700 font-medium mb-2">End Date:</label>
                    <input type="date" name="end_date" class="block w-full border border-gray-300 rounded-md p-2" value="{{ request('end_date') }}">
                </div>
            </div>
    
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                Filter
            </button>
        </form>
    
        <!-- Dashboard Statistics -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-white shadow-md rounded-md p-4">
                <h3 class="text-xl font-bold mb-2">Users This Period</h3>
                <p class="text-gray-600">{{ $usersThisPeriod }}</p>
            </div>
    
            <div class="bg-white shadow-md rounded-md p-4">
                <h3 class="text-xl font-bold mb-2">Users Previous Period</h3>
                <p class="text-gray-600">{{ $usersPreviousPeriod }}</p>
            </div>
    
            <div class="bg-white shadow-md rounded-md p-4">
                <h3 class="text-xl font-bold mb-2">Total Batches</h3>
                <p class="text-gray-600">{{ $batches }}</p>
            </div>
    
            <div class="bg-white shadow-md rounded-md p-4">
                <h3 class="text-xl font-bold mb-2">Total Revenue This Period</h3>
                <p class="text-gray-600">{{ $totalThisPeriod }}</p>
            </div>
    
            <div class="bg-white shadow-md rounded-md p-4">
                <h3 class="text-xl font-bold mb-2">Total Revenue Previous Period</h3>
                <p class="text-gray-600">{{ $totalPreviousPeriod }}</p>
            </div>
        </div>
    </div>
    
    <script>
        // JavaScript to toggle the visibility of custom date range fields
        function toggleCustomRange() {
            var range = document.getElementById('range').value;
            var customRangeFields = document.getElementById('custom-range-fields');
            if (range === 'custom') {
                customRangeFields.style.display = 'block';
            } else {
                customRangeFields.style.display = 'none';
            }
        }
    
        // Call function on page load to ensure proper state
        window.onload = toggleCustomRange;
    </script>



    
@endsection
