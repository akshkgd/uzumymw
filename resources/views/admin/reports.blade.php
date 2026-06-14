@extends('layouts.t-admin-sidebar')

@section('content')
<link rel="preconnect" href="https://cdnjs.cloudflare.com">
<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">

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
            <h1 class="text-xl font-semibold text-neutral-900">Analytics Dashboard</h1>
            <p class="text-sm text-neutral-700 font-normal">Get an insight into your sales, engagement, and school activity metrics.</p>
        </div>
        <div>
            <div class="flex flex-col sm:flex-row gap-3 items-end md:items-center">
                <div class="relative w-48">
                    <select id="dateRange" class="w-full border border-neutral-200 rounded-none px-3 py-1.5 text-sm font-normal focus:outline-none focus:border-violet-500 focus:ring-0 appearance-none pr-8 bg-white">
                        <option value="7">Last 7 Days</option>
                        <option value="30" selected>Last 30 Days</option>
                        <option value="this_month">This Month</option>
                        <option value="last_month">Last Month</option>
                        <option value="90">Last 3 Months</option>
                        <option value="this_year">This Year</option>
                        <option value="365">Last Year</option>
                        <option value="custom">Custom Range</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-neutral-500">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                        </svg>
                    </div>
                </div>
                
                <!-- Custom Date Range Picker Container -->
                <div id="customDateRange" class="hidden items-center gap-3">
                    <input type="hidden" id="startDate">
                    <input type="hidden" id="endDate">
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
            </div>
        </div>
    </div>

    <!-- Report Type Tabs -->
    <div class="mb-6 border-b border-neutral-200">
        <nav class="flex gap-6" aria-label="Tabs">
            <button type="button" onclick="switchReportTab('revenue')" id="tab-revenue"
                class="border-b-2 border-blue-600 py-2.5 text-sm font-medium text-blue-600 focus:outline-none transition-all">
                Revenue
            </button>
            <button type="button" onclick="switchReportTab('enrollment')" id="tab-enrollment"
                class="border-b-2 border-transparent py-2.5 text-sm font-medium text-neutral-500 hover:text-black hover:border-neutral-300 focus:outline-none transition-all">
                Enrollment & Signups
            </button>
            <button type="button" onclick="switchReportTab('learning')" id="tab-learning"
                class="border-b-2 border-transparent py-2.5 text-sm font-medium text-neutral-500 hover:text-black hover:border-neutral-300 focus:outline-none transition-all">
                Learning Time
            </button>
        </nav>
    </div>

    <!-- Report Sections -->

    <!-- Revenue Section -->
    <div id="content-revenue">
        <!-- Summary Stats Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-6">
            <div class="border border-neutral-200 p-3 bg-white">
                <span class="text-neutral-500 block text-[10px] font-normal uppercase tracking-wider mb-1">Total Revenue</span>
                <span class="text-xl font-normal text-neutral-900 block leading-tight">₹<span id="rev-total">0</span></span>
                <span id="rev-total-trend" class="text-[10px] font-normal block mt-1 leading-none"></span>
            </div>
            <div class="border border-neutral-200 p-3 bg-white">
                <span class="text-neutral-500 block text-[10px] font-normal uppercase tracking-wider mb-1">Daily Average</span>
                <span class="text-xl font-normal text-neutral-900 block leading-tight">₹<span id="rev-avg">0</span></span>
                <span class="text-[10px] text-neutral-400 block mt-1 leading-none font-normal">Per day during period</span>
            </div>
            <div class="border border-neutral-200 p-3 bg-white">
                <span class="text-neutral-500 block text-[10px] font-normal uppercase tracking-wider mb-1">Period Difference</span>
                <span class="text-xl font-normal text-neutral-900 block leading-tight"><span id="rev-diff-sign"></span>₹<span id="rev-diff">0</span></span>
                <span class="text-[10px] text-neutral-400 block mt-1 leading-none font-normal">Vs previous period</span>
            </div>
        </div>

        <!-- Chart -->
        <div class="border border-neutral-200 bg-white p-4">
            <div id="revenueChart" style="height: 400px;"></div>
        </div>
    </div>

    <!-- Enrollment Section -->
    <div id="content-enrollment" class="hidden">
        <!-- Summary Stats Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-6">
            <div class="border border-neutral-200 p-3 bg-white">
                <span class="text-neutral-500 block text-[10px] font-normal uppercase tracking-wider mb-1">New Enrollments</span>
                <span class="text-xl font-normal text-neutral-900 block leading-tight"><span id="enr-total">0</span></span>
                <span id="enr-total-trend" class="text-[10px] font-normal block mt-1 leading-none"></span>
            </div>
            <div class="border border-neutral-200 p-3 bg-white">
                <span class="text-neutral-500 block text-[10px] font-normal uppercase tracking-wider mb-1">New Signups</span>
                <span class="text-xl font-normal text-neutral-900 block leading-tight"><span id="sig-total">0</span></span>
                <span id="sig-total-trend" class="text-[10px] font-normal block mt-1 leading-none"></span>
            </div>
            <div class="border border-neutral-200 p-3 bg-white">
                <span class="text-neutral-500 block text-[10px] font-normal uppercase tracking-wider mb-1 font-normal">Conversion Rate</span>
                <span class="text-xl font-normal text-neutral-900 block leading-tight"><span id="enr-conv">0</span>%</span>
                <span class="text-[10px] text-neutral-400 block mt-1 leading-none font-normal">Signups to paid enrollments</span>
            </div>
        </div>

        <!-- Chart -->
        <div class="border border-neutral-200 bg-white p-4">
            <div id="signupsChart" style="height: 400px;"></div>
        </div>
    </div>

    <!-- Learning Section -->
    <div id="content-learning" class="hidden">
        <!-- Summary Stats Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-6">
            <div class="border border-neutral-200 p-3 bg-white">
                <span class="text-neutral-500 block text-[10px] font-normal uppercase tracking-wider mb-1">Total Learning Time</span>
                <span class="text-xl font-normal text-neutral-900 block leading-tight"><span id="lrn-total">0</span> Hrs</span>
                <span id="lrn-total-trend" class="text-[10px] font-normal block mt-1 leading-none"></span>
            </div>
            <div class="border border-neutral-200 p-3 bg-white">
                <span class="text-neutral-500 block text-[10px] font-normal uppercase tracking-wider mb-1 font-normal">Daily Average</span>
                <span class="text-xl font-normal text-neutral-900 block leading-tight"><span id="lrn-avg">0</span> Hrs</span>
                <span class="text-[10px] text-neutral-400 block mt-1 leading-none font-normal">Per day during period</span>
            </div>
            <div class="border border-neutral-200 p-3 bg-white">
                <span class="text-neutral-500 block text-[10px] font-normal uppercase tracking-wider mb-1 font-normal">Active Minutes</span>
                <span class="text-xl font-normal text-neutral-900 block leading-tight"><span id="lrn-active">0</span> Mins</span>
                <span class="text-[10px] text-neutral-400 block mt-1 leading-none font-normal">Total minutes spent</span>
            </div>
        </div>

        <!-- Chart -->
        <div class="border border-neutral-200 bg-white p-4">
            <div id="learningTimeChart" style="height: 400px;"></div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.4.3/echarts.min.js" defer></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const signupsChart = echarts.init(document.getElementById('signupsChart'));
    const revenueChart = echarts.init(document.getElementById('revenueChart'));
    const learningTimeChart = echarts.init(document.getElementById('learningTimeChart'));
    const dateRangeSelect = document.getElementById('dateRange');
    const customDateRange = document.getElementById('customDateRange');
    const startDateInput = document.getElementById('startDate');
    const endDateInput = document.getElementById('endDate');
    let pickerInstance = null;
    let currentTab = 'revenue';

    // Hide custom date range initially
    customDateRange.style.display = 'none';
    
    // Set default dates when switching to custom
    dateRangeSelect.addEventListener('change', function() {
        if (this.value === 'custom') {
            customDateRange.style.display = 'flex';
            
            // Set default dates (last 7 days)
            const end = new Date();
            const start = new Date();
            start.setDate(start.getDate() - 6);
            
            startDateInput.value = start.toISOString().split('T')[0];
            endDateInput.value = end.toISOString().split('T')[0];

            if (pickerInstance) {
                pickerInstance.setDate([startDateInput.value, endDateInput.value]);
            }
        } else {
            customDateRange.style.display = 'none';
            fetchData(this.value);
        }
    });

    // Initialize flatpickr range datepicker
    pickerInstance = flatpickr("#date_range_picker", {
        mode: "range",
        maxDate: "today",
        closeOnSelect: false,
        showMonths: 2,
        dateFormat: "Y-m-d",
        altInput: true,
        altFormat: "j F Y",
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
                    startDateInput.value = start;
                    endDateInput.value = end;
                    instance.close();
                    fetchData('custom', start, end);
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
                startDateInput.value = start;
                endDateInput.value = end;
            }
        }
    });

    window.switchReportTab = function(tabType) {
        currentTab = tabType;
        const tabs = ['revenue', 'enrollment', 'learning'];
        tabs.forEach(t => {
            const tabEl = document.getElementById(`tab-${t}`);
            const contentEl = document.getElementById(`content-${t}`);
            
            if (t === tabType) {
                tabEl.classList.remove('border-transparent', 'text-neutral-500');
                tabEl.classList.add('border-blue-600', 'text-blue-600');
                contentEl.classList.remove('hidden');
            } else {
                tabEl.classList.remove('border-blue-600', 'text-blue-600');
                tabEl.classList.add('border-transparent', 'text-neutral-500');
                contentEl.classList.add('hidden');
            }
        });

        // Resize charts to fit parent
        setTimeout(() => {
            if (tabType === 'revenue') {
                revenueChart.resize();
            } else if (tabType === 'enrollment') {
                signupsChart.resize();
            } else if (tabType === 'learning') {
                learningTimeChart.resize();
            }
        }, 50);
    }

    function getSelectedDaysCount() {
        const range = dateRangeSelect.value;
        if (range === '7') return 7;
        if (range === '30') return 30;
        if (range === '90') return 90;
        if (range === '365') return 365;
        if (range === 'today' || range === 'yesterday') return 1;
        
        const startVal = startDateInput.value;
        const endVal = endDateInput.value;
        if (startVal && endVal) {
            const start = new Date(startVal);
            const end = new Date(endVal);
            const diffTime = Math.abs(end - start);
            return Math.ceil(diffTime / (1000 * 60 * 60 * 24)) + 1 || 30;
        }
        return 30;
    }

    function fetchData(range, startDate = null, endDate = null) {
        let url = `/admin/reports-data?range=${range}`;
        if (range === 'custom') {
            url += `&start_date=${startDate}&end_date=${endDate}`;
        }
        fetch(url)
            .then(res => res.json())
            .then(data => {
                updateCharts(data);
                updateMetrics(data.metrics);
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    }

    function updateTrendElement(elementId, trend, change) {
        const el = document.getElementById(elementId);
        if (change === 0) {
            el.textContent = 'No Change';
            el.className = 'text-[10px] text-neutral-500 font-normal block mt-1 leading-none';
        } else {
            el.textContent = `${trend === 'up' ? 'Up' : 'Down'} ${Math.abs(change)}%`;
            el.className = `text-[10px] font-normal block mt-1 leading-none ${trend === 'up' ? 'text-green-600' : 'text-red-600'}`;
        }
    }

    function updateMetrics(metrics) {
        const days = getSelectedDaysCount();
        
        // Revenue Report
        document.getElementById('rev-total').textContent = numberFormat(metrics.revenue.current);
        updateTrendElement('rev-total-trend', metrics.revenue.trend, metrics.revenue.change);
        
        const revAvg = days > 0 ? (metrics.revenue.current / days) : 0;
        document.getElementById('rev-avg').textContent = numberFormat(Math.round(revAvg));
        
        const revDiff = metrics.revenue.difference;
        document.getElementById('rev-diff-sign').textContent = revDiff >= 0 ? '+' : '-';
        document.getElementById('rev-diff').textContent = numberFormat(Math.abs(revDiff));

        // Enrollment Report
        document.getElementById('enr-total').textContent = numberFormat(metrics.enrollments.current);
        updateTrendElement('enr-total-trend', metrics.enrollments.trend, metrics.enrollments.change);
        
        document.getElementById('sig-total').textContent = numberFormat(metrics.signups.current);
        updateTrendElement('sig-total-trend', metrics.signups.trend, metrics.signups.change);
        
        const conversion = metrics.signups.current > 0 ? ((metrics.enrollments.current / metrics.signups.current) * 100).toFixed(1) : '0';
        document.getElementById('enr-conv').textContent = conversion;

        // Learning Report
        document.getElementById('lrn-total').textContent = numberFormat(metrics.learningTime.current);
        updateTrendElement('lrn-total-trend', metrics.learningTime.trend, metrics.learningTime.change);
        
        const lrnAvg = days > 0 ? (metrics.learningTime.current / days) : 0;
        document.getElementById('lrn-avg').textContent = lrnAvg.toFixed(1);
        
        document.getElementById('lrn-active').textContent = numberFormat(Math.round(metrics.learningTime.current * 60));
    }

    function numberFormat(val) {
        return new Intl.NumberFormat('en-IN').format(val);
    }

    function updateCharts(data) {
        // Signups Chart
        signupsChart.setOption({
            title: { 
                text: 'Signups & Enrollments',
                left: '20px',
                top: '10px'
            },
            tooltip: {
                show: true,
                trigger: 'axis',
                backgroundColor: 'rgba(255, 255, 255, 0.9)',
                borderColor: '#ccc',
                borderWidth: 1,
                textStyle: {
                    color: '#333'
                },
                formatter: function(params) {
                    let result = `${params[0].axisValue}<br/>`;
                    params.forEach(param => {
                        result += `${param.seriesName}: ${param.value}<br/>`;
                    });
                    return result;
                }
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '15%',
                top: '15%',
                containLabel: true
            },
            legend: {
                data: ['Current Period', 'Previous Period'],
                bottom: '5px'
            },
            xAxis: {
                type: 'category',
                data: data.signupsEnrollments.map(d => d.date),
                axisLabel: {
                    rotate: 45
                }
            },
            yAxis: {
                type: 'value',
                name: 'Number of Signups',
                nameLocation: 'middle',
                nameGap: 50
            },
            series: [
                {
                    name: 'Current Period',
                    type: 'line',
                    data: data.signupsEnrollments.map(d => d.signups),
                    smooth: true,
                    symbol: 'circle',
                    symbolSize: 0,
                    itemStyle: {
                        color: '#2563eb'
                    },
                    areaStyle: {
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                            { offset: 0, color: 'rgba(37, 99, 235, 0.3)' },
                            { offset: 1, color: 'rgba(37, 99, 235, 0.1)' }
                        ])
                    }
                },
                {
                    name: 'Previous Period',
                    type: 'line',
                    data: data.signupsEnrollments.map(d => d.previousSignups || 0),
                    smooth: true,
                    symbol: 'circle',
                    symbolSize: 0,
                    itemStyle: {
                        color: '#adb5bd'
                    },
                    areaStyle: {
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                            { offset: 0, color: 'rgba(173, 181, 189, 0.3)' },
                            { offset: 1, color: 'rgba(173, 181, 189, 0.1)' }
                        ])
                    }
                }
            ]
        });

        // Revenue Chart
        revenueChart.setOption({
            title: { 
                text: 'Revenue Comparison',
                left: '20px',
                top: '10px'
            },
            tooltip: {
                show: true,
                trigger: 'axis',
                backgroundColor: 'rgba(255, 255, 255, 0.9)',
                borderColor: '#ccc',
                borderWidth: 1,
                textStyle: {
                    color: '#333'
                },
                formatter: function(params) {
                    let result = `${params[0].axisValue}<br/>`;
                    params.forEach(param => {
                        result += `${param.seriesName}: ₹${numberFormat(param.value)}<br/>`;
                    });
                    return result;
                }
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '15%',
                top: '15%',
                containLabel: true
            },
            legend: {
                data: ['Current Period', 'Previous Period'],
                bottom: '5px'
            },
            xAxis: {
                type: 'category',
                data: data.revenue.map(d => d.date),
                axisLabel: {
                    rotate: 45
                }
            },
            yAxis: {
                type: 'value',
                name: '',
                nameLocation: 'middle',
                nameGap: 50,
                axisLabel: {
                    formatter: '₹{value}'
                }
            },
            series: [
                {
                    name: 'Current Period',
                    type: 'line',
                    data: data.revenue.map(d => d.amount),
                    smooth: true,
                    symbol: 'circle',
                    symbolSize: 0,
                    itemStyle: {
                        color: '#16a34a'
                    },
                    areaStyle: {
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                            { offset: 0, color: 'rgba(22, 163, 74, 0.3)' },
                            { offset: 1, color: 'rgba(22, 163, 74, 0.1)' }
                        ])
                    }
                },
                {
                    name: 'Previous Period',
                    type: 'line',
                    data: data.revenue.map(d => d.previousAmount || 0),
                    smooth: true,
                    symbol: 'circle',
                    symbolSize: 0,
                    itemStyle: {
                        color: '#adb5bd'
                    },
                    areaStyle: {
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                            { offset: 0, color: 'rgba(173, 181, 189, 0.3)' },
                            { offset: 1, color: 'rgba(173, 181, 189, 0.1)' }
                        ])
                    }
                }
            ]
        });

        // Learning Time Chart
        learningTimeChart.setOption({
            title: { 
                text: 'Learning Time (hours)',
                left: '20px',
                top: '10px'
            },
            tooltip: {
                trigger: 'axis',
                formatter: function(params) {
                    let result = params[0].name + '<br/>';
                    params.forEach(param => {
                        result += param.seriesName + ': ' + param.value + ' hrs<br/>';
                    });
                    return result;
                }
            },
            legend: {
                data: ['Current Period', 'Previous Period'],
                bottom: '5px'
            },
            xAxis: {
                type: 'category',
                data: data.learningTime.map(d => d.date),
                axisLabel: {
                    rotate: 45
                }
            },
            yAxis: {
                type: 'value',
                axisLabel: {
                    formatter: '{value} hrs'
                }
            },
            series: [
                {
                    name: 'Current Period',
                    type: 'bar',
                    data: data.learningTime.map(d => d.hours),
                    itemStyle: {
                        color: '#2563eb'
                    }
                },
                {
                    name: 'Previous Period',
                    type: 'bar',
                    data: data.learningTime.map(d => d.previousHours),
                    itemStyle: {
                        color: '#adb5bd'
                    }
                }
            ]
        });
    }

    // Initial load
    fetchData('30');
});
</script>
@endsection