@extends('layouts.t-admin-sidebar')
@section('content')
@include('layouts.t-alert')

<!-- Flatpickr CSS & JS CDN for Date Range Picker -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<style>
    /* Flatpickr premium custom styles */
    .flatpickr-calendar {
        border: 1px solid #e5e5e5 !important;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
        border-radius: 8px !important;
        font-family: inherit !important;
        width: 615px !important; /* Accommodate 2 months side by side */
    }
    .flatpickr-months {
        padding: 8px 12px 0 12px !important;
    }
    .flatpickr-months .flatpickr-month {
        color: #1f2937 !important;
    }
    .flatpickr-current-month span.cur-month {
        font-weight: 600 !important;
    }
    .flatpickr-weekday {
        color: #4b5563 !important;
        font-weight: 500 !important;
    }
    .flatpickr-day {
        color: #374151 !important;
        border-radius: 0px !important;
        border: 0 !important;
    }
    .flatpickr-day.selected, .flatpickr-day.startRange, .flatpickr-day.endRange,
    .flatpickr-day.selected.inRange, .flatpickr-day.startRange.inRange, .flatpickr-day.endRange.inRange,
    .flatpickr-day.selected:focus, .flatpickr-day.startRange:focus, .flatpickr-day.endRange:focus,
    .flatpickr-day.selected:hover, .flatpickr-day.startRange:hover, .flatpickr-day.endRange:hover {
        background: #2563eb !important;
        border-color: #2563eb !important;
        color: #fff !important;
    }
    .flatpickr-day.inRange {
        background: #eff6ff !important;
        box-shadow: -5px 0 0 #eff6ff, 5px 0 0 #eff6ff !important;
    }
    .flatpickr-day.selected.startRange, .flatpickr-day.startRange.startRange, .flatpickr-day.endRange.startRange {
        border-radius: 9999px 0 0 9999px !important;
    }
    .flatpickr-day.selected.endRange, .flatpickr-day.startRange.endRange, .flatpickr-day.endRange.endRange {
        border-radius: 0 9999px 9999px 0 !important;
    }
    .flatpickr-day.selected.startRange.endRange {
        border-radius: 9999px !important;
    }
    .flatpickr-months .flatpickr-prev-month, .flatpickr-months .flatpickr-next-month {
        border: 1px solid #e5e5e5 !important;
        border-radius: 6px !important;
        height: 32px !important;
        width: 32px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        padding: 0 !important;
        top: 10px !important;
    }
    .flatpickr-months .flatpickr-prev-month svg, .flatpickr-months .flatpickr-next-month svg {
        position: static !important;
        margin: 0 !important;
    }
    .flatpickr-months .flatpickr-prev-month {
        left: 10px !important;
    }
    .flatpickr-months .flatpickr-next-month {
        right: 10px !important;
    }
</style>

<div class="max-w-5xl mx-auto px-4 py-4">
    <!-- Header -->
    <div class="mb-6 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div>
            <h1 class="text-xl font-semibold text-neutral-900">Analytics</h1>
            <p class="text-sm text-neutral-700 font-normal">Get an insight into your sales, engagement, and school activity metrics.</p>
        </div>
        <div>
            <form method="GET" action="{{ url('/home') }}" class="flex flex-col sm:flex-row gap-3 items-end md:items-center" id="filterForm">
                <div class="relative w-48">
                    <select name="range" id="range" class="w-full border border-neutral-200 rounded-none px-3 py-1.5 text-sm font-normal focus:outline-none focus:border-violet-500 focus:ring-0 appearance-none pr-8 bg-white" onchange="toggleCustomRange()">
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
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-neutral-500">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                        </svg>
                    </div>
                </div>
                <div id="custom-range-fields" class="flex items-center gap-3 {{ request('range') == 'custom' ? '' : 'hidden' }}">
                    <input type="hidden" name="start_date" id="start_date" value="{{ request('start_date') }}">
                    <input type="hidden" name="end_date" id="end_date" value="{{ request('end_date') }}">
                    <div class="relative w-60">
                        <input type="text" id="date_range_picker" placeholder="Select date range" readonly
                            class="w-full border border-neutral-200 px-3 py-1.5 text-sm font-normal focus:outline-none focus:border-violet-500 focus:ring-0 bg-white pr-10 cursor-pointer">
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-neutral-500">
                            <svg class="h-4 w-4 text-neutral-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Summary Stats Grid -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
        <!-- Users (New Signups) -->
        <div class="border border-neutral-200 p-3 bg-white">
            <span class="text-neutral-500 block text-[10px] font-normal uppercase tracking-wider mb-1">New Signups</span>
            <span class="text-xl font-normal text-neutral-900 block leading-tight">{{ $usersThisPeriod }} users</span>
            @if ($usersThisPeriod > 0 || $usersPreviousPeriod > 0)
                <span class="text-[10px] font-normal block mt-1 leading-none">
                    @if ($userChangePercent > 0)
                        <span class="text-green-600 font-normal">Up {{ round($userChangePercent) }}% (+{{ $usersThisPeriod - $usersPreviousPeriod }})</span>
                    @elseif ($userChangePercent < 0)
                        <span class="text-red-600 font-normal">Down {{ round(abs($userChangePercent)) }}% (-{{ abs($usersThisPeriod - $usersPreviousPeriod) }})</span>
                    @else
                        <span class="text-neutral-500 font-normal">No Change</span>
                    @endif
                </span>
            @else
                <span class="text-[10px] text-neutral-400 block mt-1 leading-none font-normal">No signups</span>
            @endif
        </div>

        <!-- Enrollments (Paid Members) -->
        <div class="border border-neutral-200 p-3 bg-white">
            <span class="text-neutral-500 block text-[10px] font-normal uppercase tracking-wider mb-1">New Enrollments</span>
            <span class="text-xl font-normal text-neutral-900 block leading-tight">{{ $enrollmentsThisPeriod }} enrollments</span>
            @if ($enrollmentsThisPeriod > 0 || $enrollmentsPreviousPeriod > 0)
                <span class="text-[10px] font-normal block mt-1 leading-none">
                    @if ($enrollmentChangePercent > 0)
                        <span class="text-green-600 font-normal">Up {{ round($enrollmentChangePercent) }}% (+{{ $enrollmentsThisPeriod - $enrollmentsPreviousPeriod }})</span>
                    @elseif ($enrollmentChangePercent < 0)
                        <span class="text-red-600 font-normal">Down {{ round(abs($enrollmentChangePercent)) }}% (-{{ abs($enrollmentsThisPeriod - $enrollmentsPreviousPeriod) }})</span>
                    @else
                        <span class="text-neutral-500 font-normal">No Change</span>
                    @endif
                </span>
            @else
                <span class="text-[10px] text-neutral-400 block mt-1 leading-none font-normal">No enrollments</span>
            @endif
        </div>

        <!-- Revenue This Period -->
        <div class="border border-neutral-200 p-3 bg-white">
            <span class="text-neutral-500 block text-[10px] font-normal uppercase tracking-wider mb-1 font-normal">Revenue</span>
            <span class="text-xl font-normal text-neutral-900 block leading-tight">₹{{ number_format($totalThisPeriod, 0) }}</span>
            <span class="text-[10px] font-normal block mt-1 leading-none">
                @if ($revenueChangePercent > 0)
                    <span class="text-green-600 font-normal">Up {{ round($revenueChangePercent) }}% (+₹{{ number_format($totalThisPeriod - $totalPreviousPeriod) }})</span>
                @elseif ($revenueChangePercent < 0)
                    <span class="text-red-600 font-normal">Down {{ round(abs($revenueChangePercent)) }}% (-₹{{ number_format(abs($totalThisPeriod - $totalPreviousPeriod)) }})</span>
                @else
                    <span class="text-neutral-500 font-normal">No Change</span>
                @endif
            </span>
        </div>

        <!-- Learning Time -->
        <div class="border border-neutral-200 p-3 bg-white">
            <span class="text-neutral-500 block text-[10px] font-normal uppercase tracking-wider mb-1 font-normal">Learning Time</span>
            <span class="text-xl font-normal text-neutral-900 block leading-tight">{{ $totalLearningTimeThisPeriod }} Hrs</span>
            @if ($totalLearningTimeThisPeriod > 0 || $totalLearningTimePreviousPeriod > 0)
                <span class="text-[10px] font-normal block mt-1 leading-none">
                    @if ($learningTimeChangePercent > 0)
                        <span class="text-green-600 font-normal">Up {{ round($learningTimeChangePercent) }}% (+{{ $totalLearningTimeThisPeriod - $totalLearningTimePreviousPeriod }} Hrs)</span>
                    @elseif ($learningTimeChangePercent < 0)
                        <span class="text-red-600 font-normal">Down {{ round(abs($learningTimeChangePercent)) }}% (-{{ abs($totalLearningTimeThisPeriod - $totalLearningTimePreviousPeriod) }} Hrs)</span>
                    @else
                        <span class="text-neutral-500 font-normal">No Change</span>
                    @endif
                </span>
            @else
                <span class="text-[10px] text-neutral-400 block mt-1 leading-none font-normal">No learning time</span>
            @endif
        </div>
    </div>

    <!-- Enrolled Learners Section (Conditional) -->
    @if ($enrollmentsDetailsThisPeriod->isNotEmpty())
        <div class="bg-white mb-4">
            <div class="mb-4">
                <h3 class="text-lg font-medium text-neutral-900">Enrolled Learners</h3>
                <p class="text-sm text-neutral-700 font-normal mt-0.5">
                    Manage and view active learners for the selected period.
                </p>
            </div>

            <div class="border border-neutral-200 bg-white">
                <table class="w-full text-sm text-left text-neutral-500">
                    <thead class="text-xs text-neutral-400 uppercase bg-white">
                        <tr class="border-b border-neutral-200">
                            <th class="px-4 py-2 font-normal text-left tracking-wider">Name</th>
                            <th class="px-4 py-2 font-normal text-left tracking-wider">Email</th>
                            <th class="px-4 py-2 font-normal text-left tracking-wider">Amount</th>
                            <th class="px-4 py-2 font-normal text-left tracking-wider">Campaign</th>
                            <th class="px-4 py-2 font-normal text-right tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-neutral-200 bg-white">
                        @foreach ($enrollmentsDetailsThisPeriod as $enrollment)
                            <tr class="text-neutral-900 font-normal">
                                <td class="px-4 py-3.5 font-normal">
                                    <a href="{{action('AdminController@studentDetails', $enrollment->students->id)}}" class="hover:text-black transition-colors font-medium text-violet-600">
                                        {{ $enrollment->students->name }}
                                    </a>
                                </td>
                                <td class="px-4 py-3.5 font-normal text-neutral-500">{{ $enrollment->students->email }}</td>
                                <td class="px-4 py-3.5 font-normal">
                                    ₹{{ number_format($enrollment->amountPaid / 100, 0) }} 
                                    <span class="text-[10px] text-neutral-400 font-normal uppercase ml-1">({{ $enrollment->paymentMethod }})</span>
                                </td>
                                <td class="px-4 py-3.5 font-normal text-neutral-400">{{ $enrollment->students->field2 ?: 'organic' }}</td>
                                <td class="px-4 py-3.5 font-normal text-right">
                                    <a href="{{action('AdminController@paymentReceived', Crypt::encrypt($enrollment->id))}}" class="text-neutral-400 hover:text-black transition-colors p-1" title="Edit Payment">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil inline-block">
                                            <path d="M12 20h9"/>
                                            <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4 flex justify-end">
                {{ $enrollmentsDetailsThisPeriod->appends(request()->query())->links() }}
            </div>
        </div>
    @endif
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
            // Auto-submit for preset ranges
            if (window.event && window.event.type === 'change') {
                form.submit();
            }
        }
    }

    // On page load, initialize Flatpickr and show/hide the custom fields
    window.addEventListener('DOMContentLoaded', function() {
        var range = document.getElementById('range').value;
        var customRangeFields = document.getElementById('custom-range-fields');
        
        if (range === 'custom') {
            customRangeFields.classList.remove('hidden');
        } else {
            customRangeFields.classList.add('hidden');
        }

        // Initialize flatpickr range datepicker
        flatpickr("#date_range_picker", {
            mode: "range",
            maxDate: "today",
            closeOnSelect: false,
            showMonths: 2,
            dateFormat: "Y-m-d",
            altInput: true,
            altFormat: "j F Y",
            defaultDate: [
                document.getElementById('start_date').value,
                document.getElementById('end_date').value
            ].filter(Boolean),
            onReady: function(selectedDates, dateStr, instance) {
                // Create container for footer buttons (matching Cancel and Apply style)
                const container = document.createElement("div");
                container.className = "flex justify-end gap-2 p-3 border-t border-neutral-100 bg-white w-full";
                
                const cancelBtn = document.createElement("button");
                cancelBtn.type = "button";
                cancelBtn.className = "border border-neutral-300 hover:bg-neutral-50 text-neutral-700 text-xs font-normal py-1.5 px-3.5 transition-colors";
                cancelBtn.textContent = "Cancel";
                cancelBtn.addEventListener("click", () => {
                    instance.close();
                });
                
                const applyBtn = document.createElement("button");
                applyBtn.type = "button";
                applyBtn.className = "bg-blue-600 hover:bg-blue-700 text-white text-xs font-normal py-1.5 px-4 transition-colors rounded";
                applyBtn.textContent = "Apply";
                applyBtn.addEventListener("click", () => {
                    if (instance.selectedDates.length === 2) {
                        const start = instance.formatDate(instance.selectedDates[0], "Y-m-d");
                        const end = instance.formatDate(instance.selectedDates[1], "Y-m-d");
                        document.getElementById('start_date').value = start;
                        document.getElementById('end_date').value = end;
                        document.getElementById('filterForm').submit();
                    } else {
                        instance.close();
                    }
                });
                
                container.appendChild(cancelBtn);
                container.appendChild(applyBtn);
                instance.calendarContainer.appendChild(container);
            },
            onChange: function(selectedDates, dateStr, instance) {
                if (instance.selectedDates.length === 2) {
                    const start = instance.formatDate(instance.selectedDates[0], "Y-m-d");
                    const end = instance.formatDate(instance.selectedDates[1], "Y-m-d");
                    document.getElementById('start_date').value = start;
                    document.getElementById('end_date').value = end;
                }
            }
        });
    });
</script>
@endsection
