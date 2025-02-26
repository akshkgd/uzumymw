@extends('layouts.t-admin-sidebar')

@section('content')
<div class="container mx-auto p-6">
    <!-- Date Range Filter -->
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-lg font-bold">Analytics Dashboard</h2>
        <select id="dateRange" class="rounded-md border-gray-300">
            <option value="today">Today</option>
            <option value="yesterday">Yesterday</option>
            <option value="7">Last 7 Days</option>
            <option value="30">Last 30 Days</option>
            <option value="this_month">This Month</option>
            <option value="last_month">Last Month</option>
            <option value="90">Last 3 Months</option>
            <option value="365" selected>Last Year</option>
        </select>
    </div>

    <!-- Metrics -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
        <div class="bg-white border rounded-lg  px-6 py-3">
            <h3 class="text-gray-700">New Signups</h3>
            <p class="text-3 font-bold "><span id="signupsCount">0</span> users</p>
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
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-lg border">
            <div id="signupsChart" style="height: 400px;"></div>
        </div>
        <div class="bg-white p-6 rounded-lg border">
            <div id="revenueChart" style="height: 400px;"></div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const signupsChart = echarts.init(document.getElementById('signupsChart'));
    const revenueChart = echarts.init(document.getElementById('revenueChart'));

    document.getElementById('dateRange').addEventListener('change', function() {
        fetchData(this.value);
    });

    function fetchData(range) {
        fetch(`/admin/reports-data?range=${range}`)
            .then(res => res.json())
            .then(data => {
                updateCharts(data);
                updateMetrics(data.metrics);
            });
    }

    function updateCharts(data) {
        // Signups Chart
        signupsChart.setOption({
            title: { 
                text: 'Signups Comparison',
                left: 'center'
            },
            tooltip: {
                trigger: 'axis',
                axisPointer: {
                    type: 'border'
                }
            },
            legend: {
                data: ['Current Period', 'Previous Period'],
                top: '30px'
            },
            xAxis: {
                type: 'category',
                data: data.signupsEnrollments.map(d => d.date)
            },
            yAxis: {
                type: 'value',
                name: 'Number of Signups'
            },
            series: [
                {
                    name: 'Current Period',
                    type: 'line',
                    data: data.signupsEnrollments.map(d => d.signups),
                    smooth: true,
                    showSymbol: false,
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
                    showSymbol: false,
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
                left: 'left',
                
            },
            tooltip: {
                trigger: 'axis',
                axisPointer: {
                    type: 'border'
                },
                formatter: function(params) {
                    return params.map(param => {
                        return `${param.seriesName}: ₹${param.value}`
                    }).join('<br>');
                }
            },
            legend: {
                data: ['Current Period', 'Previous Period'],
                top: '30px',
                left: 'left',
                
            },
            xAxis: {
                type: 'category',
                data: data.revenue.map(d => d.date)
            },
            yAxis: {
                type: 'value',
                name: '',
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
                    showSymbol: false,
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
                    showSymbol: false,
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
    fetchData('365');
});
</script>
@endsection
