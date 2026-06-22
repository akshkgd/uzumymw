@extends('layouts.t-student')
@section('content')
    @include('layouts.t-student-nav')
    <style>
        .v:last-child{
            border: none !important
        }
    </style>
    <main class="mt-28 flex flex-col justify-center align-middle py-12">
        <div class="mt-2">
          <div class="sm:w-[750px] mx-auto w-full px-4 md:px-0 text-center">
            <h2 class="text-2xl cal-sans leading-9 text-neutral-800">
              Payments & Invoices
            </h2>
            <p class="text-neutral-500 mt-1">View your payment history and download invoices for your enrolled courses.</p>
          </div>
          
          <div class="mt-8 px-4">
            <div class="sm:w-[750px] w-full mx-auto border border-gray-200 rounded-2xl parent bg-white overflow-hidden">
                @if($payments->isEmpty())
                    <div class="p-8 text-center text-neutral-500">
                        <svg class="w-12 h-12 mx-auto text-neutral-300 mb-3" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                        </svg>
                        No payments or invoices found.
                    </div>
                @else
                    <!-- Responsive Table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-white">
                                <tr>
                                    <th class="px-6 py-4 text-left text-sm font-normal text-neutral-500 tracking-wider">Course / Purpose</th>
                                    <th class="px-6 py-4 text-left text-sm font-normal text-neutral-500 tracking-wider">Date</th>
                                    <th class="px-6 py-4 text-left text-sm font-normal text-neutral-500 tracking-wider">Method</th>
                                    <th class="px-6 py-4 text-right text-sm font-normal text-neutral-500 tracking-wider">Amount</th>
                                    <th class="px-6 py-4 text-right text-sm font-normal text-neutral-500 tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 bg-white">
                                @foreach($payments as $payment)
                                    <tr class="hover:bg-neutral-50/50 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-normal text-neutral-900 leading-tight">
                                                {{ optional(optional($payment->enrollment)->batch)->name ?? $payment->purpose ?? 'Course Enrollment' }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-500">
                                            {{ $payment->paid_at ? \Carbon\Carbon::parse($payment->paid_at)->format('d M Y') : 'N/A' }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-500 uppercase">
                                            {{ $payment->payment_method ?? 'Online' }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-normal text-neutral-900 text-right">
                                            ₹{{ number_format($payment->amount / 100, 2) }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <a href="{{ route('invoice.download', $payment->course_enrollment_id) }}" 
                                               class="inline-flex items-center justify-center w-8 h-8 text-neutral-500 hover:text-neutral-900 hover:bg-neutral-100 rounded-lg transition-all active:scale-[0.98]"
                                               title="Download Invoice">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
          </div>
        </div>
    </main>
@endsection
