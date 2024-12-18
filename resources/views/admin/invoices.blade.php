@extends('layouts.t-admin-sidebar')

@section('content')
<div class="container mx-auto mt-10 sm:px-5">

    <form method="GET" action="{{ route('admin.invoices.list') }}" class="mb-4 flex gap-4">
        @php
            $currentYear = now()->format('Y');
            $months = [
                '01' => 'January',
                '02' => 'February',
                '03' => 'March',
                '04' => 'April',
                '05' => 'May',
                '06' => 'June',
                '07' => 'July',
                '08' => 'August',
                '09' => 'September',
                '10' => 'October',
                '11' => 'November',
                '12' => 'December',
            ];
        @endphp
        <div class="flex w-full justify-between items-center">
            <div class="flex gap-6">
                <div>
                    <label for="month" class="block text-sm font-medium text-gray-700 pl-1">Select Month</label>
                    <select name="month" id="month"
                        class="border-gray-300 rounded mt-1 focus:outline-none"
                        onchange="this.form.submit()">
                        @foreach($months as $key => $value)
                            <option value="{{ $key }}" {{ $key == $month ? 'selected' : '' }}>{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="year" class="block text-sm font-medium text-gray-700">Select Year</label>
                    <select name="year" id="year"
                        class="border-gray-300 rounded mt-1 focus:outline-none"
                        onchange="this.form.submit()">
                        @for($y = $currentYear; $y >= ($currentYear - 5); $y--)
                            <option value="{{ $y }}" {{ $y == $year ? 'selected' : '' }}>{{ $y }}</option>
                        @endfor
                    </select>
                </div>
            </div>
            <!-- No Filter button needed now since the form auto-submits on select change -->
        </div>
    </form>
    

    @if($enrollments->count() > 0)
        <table class="min-w-full mt-4 border rounded-xl text-sm">
            <thead>
                <tr class="border-b">
                    <th class="px-4 py-3 text-left">Invoice ID</th>
                    <th class="px-4 py-3 text-left">User Name</th>
                    <th class="px-4 py-3 text-left">Course/Batches</th>
                    <th class="px-4 py-3 text-left">Amount Paid</th>
                    <th class="px-4 py-3 text-left">Paid At</th>
                    <th class="px-4 py-3 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($enrollments as $enrollment)
                    <tr class="border-b">
                        <td class="px-4 py-3">{{ $enrollment->invoiceId }}</td>
                        <td class="px-4 py-3">{{ $enrollment->students->name ?? 'N/A' }}</td>
                        <td class="px-4 py-3">{{ $enrollment->batch->name ?? 'N/A' }}</td>
                        <td class="px-4 py-3">{{ $enrollment->amountPaid }}</td>
                        <td class="px-4 py-3">{{ $enrollment->paidAt }}</td>
                        <td class="px-4 py-3">
                            <a href="{{ route('admin.invoices.download', $enrollment->invoiceId) }}" class="text-violet-600 hover:underline">Download</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="mt-4">No invoices found for the selected month/year.</p>
    @endif
</div>
@endsection
