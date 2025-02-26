@extends('layouts.t-admin-sidebar')

@section('content')
<div class="container mx-auto p-6">
    <!-- Date Range Filter -->
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-lg font-bold">Analytics Dashboard</h2>
        <div class="flex gap-4 items-center">
            <select id="dateRange" class="rounded-md border-gray-300 focus:border-indigo-500 focus:outline-none">
                <option value="7">Last 7 Days</option>
                <option value="30">Last 30 Days</option>
                <option value="this_month">This Month</option>
                <option value="last_month">Last Month</option>
                <option value="90">Last 3 Months</option>
                <option value="this_year">This Year</option>
                <option value="365">Last Year</option>
                <option value="custom">Custom Range</option>
            </select>
            
            <!-- Custom Date Range -->
            <div id="customDateRange" class="hidden items-center space-x-2">
                <input type="date" 
                       id="startDate" 
                       class="rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                       max="{{ date('Y-m-d') }}">
                <span class="text-gray-600">to</span>
                <input type="date" 
                       id="endDate" 
                       class="rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                       max="{{ date('Y-m-d') }}">
                <button id="applyCustomDate" 
                        class="bg-neutral-800 text-white px-6 py-2 rounded-md hover:bg-black focus:outline-none ">
                    Apply
                </button>
            </div>
        </div>
    </div>

    <!-- Metrics -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
        <div class="bg-white border rounded-lg  px-6 py-3">
            <h3 class="text-gray-700">New Signups</h3>
            <p class="text-3x font-bold "><span id="signupsCount">0</span> users</p>
            <p class="" id="signupsTrend"></p>
        </div>
        <div class="bg-white rounded-lg border px-6 py-3">
            <h3 class="text-gray-700">New Enrollments</h3>
            <p class="text-3 font-bold"><span id="enrollmentsCount">0</span></p>
            <p class="" id="enrollmentsTrend"></p>
        </div>
        <div class="bg-white rounded-lg border px-6 py-3">
            <h3 class="text-gray-700">Revenue</h3>
            <p class="text-l font-bold ">₹<span id="revenueCount">0</span></p>
            <p class="" id="revenueTrend"></p>
        </div>
        <div class="bg-white rounded-lg border px-6 py-3">
            <h3 class="text-gray-700">Learning Time</h3>
            <p class="text-3x font-bold mt-"><span id="learningTimeCount">0</span> Hrs</p>
            <p class="mt-" id="learningTimeTrend"></p>
        </div>
    </div>

    <!-- Charts -->
    <div class="grid grid-cols-1 gap-6">
        <!-- Signups and Enrollments side by side -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg border">
                <div id="signupsChart" style="height: 400px;"></div>
            </div>
            <div class="bg-white p-6 rounded-lg border">
                <div id="enrollmentsChart" style="height: 400px;"></div>
            </div>
        </div>
        
        <!-- Revenue chart full width -->
        <div class="bg-white p-6 rounded-lg border">
            <div id="revenueChart" style="height: 400px;"></div>
        </div>

        <!-- Learning Time chart full width -->
        <div class="bg-white p-6 rounded-lg border">
            <div id="learningTimeChart" style="height: 400px;"></div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const signupsChart = echarts.init(document.getElementById('signupsChart'));
    const revenueChart = echarts.init(document.getElementById('revenueChart'));
    const enrollmentsChart = echarts.init(document.getElementById('enrollmentsChart'));
    const learningTimeChart = echarts.init(document.getElementById('learningTimeChart'));
    const dateRangeSelect = document.getElementById('dateRange');
    const customDateRange = document.getElementById('customDateRange');
    const startDateInput = document.getElementById('startDate');
    const endDateInput = document.getElementById('endDate');
    
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
        } else {
            customDateRange.style.display = 'none';
            fetchData(this.value);
        }
    });

    // Validate date range
    endDateInput.addEventListener('change', function() {
        if (startDateInput.value && this.value < startDateInput.value) {
            this.value = startDateInput.value;
        }
    });

    startDateInput.addEventListener('change', function() {
        if (endDateInput.value && this.value > endDateInput.value) {
            endDateInput.value = this.value;
        }
    });

    document.getElementById('applyCustomDate').addEventListener('click', function() {
        const startDate = startDateInput.value;
        const endDate = endDateInput.value;
        if (startDate && endDate) {
            fetchData('custom', startDate, endDate);
        }
    });

    function fetchData(range, startDate = null, endDate = null) {
        let url = `/admin/reports-data?range=${range}`;
        if (range === 'custom') {
            url += `&start_date=${startDate}&end_date=${endDate}`;
        }
        console.log(url);
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

    function updateCharts(data) {
        // Signups Chart
        signupsChart.setOption({
            title: { 
                text: 'Signups Comparison',
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
                        color: '#5e72e4'
                    },
                    areaStyle: {
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                            { offset: 0, color: 'rgba(94, 114, 228, 0.3)' },
                            { offset: 1, color: 'rgba(94, 114, 228, 0.1)' }
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

        // Enrollments Chart - Simplified approach
        enrollmentsChart.setOption({
            title: { 
                text: 'Enrollments',
                left: '20px',
                top: '10px'
            },
            tooltip: {
                trigger: 'axis'
            },
            xAxis: {
                type: 'category',
                data: data.signupsEnrollments.map(d => d.date),
                axisLabel: {
                    rotate: 45
                }
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                name: 'Enrollments',
                type: 'bar',
                data: data.signupsEnrollments.map(d => d.enrollments || 0),
                itemStyle: {
                    color: '#2dce89'
                }
            }]
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
                        result += `${param.seriesName}: ₹${param.value}<br/>`;
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
                        color: '#2dce89'
                    },
                    areaStyle: {
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                            { offset: 0, color: 'rgba(45, 206, 137, 0.3)' },
                            { offset: 1, color: 'rgba(45, 206, 137, 0.1)' }
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
                        color: '#5e72e4'
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

    function updateMetrics(metrics) {
        document.getElementById('signupsCount').textContent = metrics.signups.current;
        document.getElementById('signupsTrend').textContent = `${metrics.signups.trend === 'up' ? '↑' : '↓'} ${Math.abs(metrics.signups.change)}%`;
        
        document.getElementById('enrollmentsCount').textContent = metrics.enrollments.current;
        document.getElementById('enrollmentsTrend').textContent = `${metrics.enrollments.trend === 'up' ? '↑' : '↓'} ${Math.abs(metrics.enrollments.change)}%`;
        
        document.getElementById('revenueCount').textContent = metrics.revenue.current;
        document.getElementById('revenueTrend').textContent = `${metrics.revenue.trend === 'up' ? '↑' : '↓'} ${Math.abs(metrics.revenue.change)}%`;
        
        document.getElementById('learningTimeCount').textContent = metrics.learningTime.current;
        document.getElementById('learningTimeTrend').textContent = `${metrics.learningTime.trend === 'up' ? '↑' : '↓'} ${Math.abs(metrics.learningTime.change)}%`;
    }

    // Initial load
    fetchData('30');
});
</script>
@endsection
