@extends('layouts.t-admin-sidebar')
@section('content')
@include('layouts.t-alert')

@php
    $payment = $enrollment->payments()->orderBy('paid_at', 'asc')->first();
@endphp

<section class="max-w-xl mx-auto border p-3 my-4">
    <div class="relative bg-white dark:bg-gray-700">
        <!-- Header -->
        <div class="flex items-center justify-between p-4 md:p-5 rounded-t">
            <div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">{{$batch->name}}</h3>
                <p class="text-sm text-neutral-600">Update payment details for this enrollment.</p>
            </div>
        </div>

        <!-- Form Body -->
        <div class="px-4 pb-4 md:px-5 md:pb-5">
            <!-- Student Information -->
            <div class="mb-6">
                <p class="text-sm text-gray-700"><span class="font-medium">Student Name:</span> {{$enrollment->students->name}}</p>
                <p class="text-sm text-gray-700"><span class="font-medium">Email:</span> {{$enrollment->students->email}}</p>
                <p class="text-sm text-gray-700"><span class="font-medium">Mobile:</span> {{$enrollment->students->mobile}}</p>
            </div>

            <!-- Payment Form -->
            <form action="{{ route('updatePaymentStatus') }}" method="POST">
                @csrf
                
                <!-- Form fields - using consistent styling -->
                <div class="mb-4">
                    <label for="batchId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Batch ID</label>
                    <input type="text" id="batchId" name="batchId" value="{{$enrollment->batchId}}"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                </div>

                <div class="mb-4">
                    <label for="invoiceId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Invoice ID</label>
                    <input type="text" id="invoiceId" name="invoiceId" value="{{ $payment->invoice_id ?? $enrollment->invoiceId }}"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                </div>

                <div class="mb-4">
                    <label for="transactionId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Transaction ID</label>
                    <input type="text" id="transactionId" name="transactionId" value="{{ $payment->transaction_id ?? $enrollment->transactionId }}"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                </div>

                <div class="mb-4">
                    <label for="paymentMethod" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment Method</label>
                    <input type="text" id="paymentMethod" name="paymentMethod" value="{{ $payment->payment_method ?? $enrollment->paymentMethod }}"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                </div>

                <div class="mb-4">
                    <label for="amountPaid" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount Paid (in paisa)</label>
                    <input type="text" id="amountPaid" name="amountPaid" value="{{ $payment->amount ?? $enrollment->amountPaid }}"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                </div>

                <div class="mb-4">
                    <label for="paidAt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paid At</label>
                    <input type="date" id="paidAt" name="paidAt" value="{{ $payment ? ($payment->paid_at ? \Carbon\Carbon::parse($payment->paid_at)->format('Y-m-d') : '') : ($enrollment->paidAt ? \Carbon\Carbon::parse($enrollment->paidAt)->format('Y-m-d') : '') }}"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                </div>

                <!-- New Multi-payment Fields -->
                <div class="mb-4">
                    <label for="purpose" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment Purpose</label>
                    <select name="purpose" id="purpose" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                        <option value="enrollment" {{ ($payment->purpose ?? 'enrollment') == 'enrollment' ? 'selected' : '' }}>Enrollment / Installment</option>
                        <option value="renewal" {{ ($payment->purpose ?? '') == 'renewal' ? 'selected' : '' }}>Renewal</option>
                    </select>
                </div>

                <div class="mb-4 flex items-center">
                    <input type="checkbox" id="is_gst_applicable" name="is_gst_applicable" value="1" {{ ($payment->is_gst_applicable ?? true) ? 'checked' : '' }}
                        class="w-4 h-4 text-violet-600 bg-gray-100 border-gray-300 rounded focus:ring-0 focus:ring-offset-0">
                    <label for="is_gst_applicable" class="ml-2 text-sm font-medium text-gray-900 dark:text-white">Include in GST/Tax Reports</label>
                </div>

                <div class="mb-4">
                    <label for="remarks" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Admin Remarks</label>
                    <textarea id="remarks" name="remarks" rows="2" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5" placeholder="e.g. Offline/cash payment details">{{ $payment->remarks ?? '' }}</textarea>
                </div>

                <!-- Existing Access Control Fields -->
                <div class="mb-4">
                    <label for="startFrom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start From (Access begins from)</label>
                    <input type="date" id="startFrom" name="startFrom" value="{{ $enrollment->startFrom ? \Carbon\Carbon::parse($enrollment->startFrom)->format('Y-m-d') : '' }}"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                </div>

                <div class="mb-4">
                    <label for="accessTill" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Access Till</label>
                    <input type="date" id="accessTill" name="accessTill" value="{{$enrollment->accessTill}}"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                </div>

                <div class="mb-4">
                    <label for="override_access_days" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Override Access Days</label>
                    <input type="number" id="override_access_days" name="override_access_days" min="0" value="{{$enrollment->override_access_days}}"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5" placeholder="e.g. 10 (Leave blank for normal timeline)">
                    <p class="text-xs text-neutral-500 mt-1">
                        Current days passed since payment: <span class="font-semibold text-gray-950">{{ $enrollment->paidAt ? \Carbon\Carbon::now()->diffInDays(\Carbon\Carbon::parse($enrollment->paidAt)) : '0 (Unpaid)' }}</span>
                    </p>
                </div>

                @if($batch->type == 2)
                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="certificateFee" class="form-checkbox" 
                            {{ $enrollment->certificateFee > 1 ? 'checked' : '' }}
                            onchange="updateBonusAmount(this.checked)">
                        <span class="ml-2 text-sm font-medium text-gray-900 dark:text-white">Grant Bonuses</span>
                    </label>
                    <input type="hidden" name="certificateFee" id="bonusAmount" value="{{ $enrollment->certificateFee ?? 0 }}">
                </div>
                @endif
                <input type="hidden" name="enrollmentId" value="{{$enrollment->id}}">

                <!-- Submit Button -->
                <button type="submit" 
                    class="w-full bg-black hover:bg-black text-white font-normal py-2.5 px-4 mb-2">
                    Update Primary Payment Details
                </button>
            </form>
        </div>
    </div>
</section>

<section class="max-w-xl mx-auto border p-3 my-4">
    <div class="relative bg-white dark:bg-gray-700">
        <!-- Header -->
        <div class="flex items-center justify-between p-4 md:p-5 rounded-t">
            <div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Record New Installment / Renewal</h3>
                <p class="text-sm text-neutral-600">Log an additional manual transaction for this enrollment.</p>
            </div>
        </div>

        <!-- Form Body -->
        <div class="px-4 pb-4 md:px-5 md:pb-5">
            <form action="{{ route('addManualPayment') }}" method="POST">
                @csrf
                <input type="hidden" name="enrollmentId" value="{{$enrollment->id}}">

                <div class="mb-4">
                    <label for="new_amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount (in Rupees)</label>
                    <input type="number" id="new_amount" name="amount" required step="0.01" min="1"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5" placeholder="e.g. 5000">
                </div>

                <div class="mb-4">
                    <label for="new_paidAt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment Date</label>
                    <input type="date" id="new_paidAt" name="paidAt" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                </div>

                <div class="mb-4">
                    <label for="new_paymentMethod" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment Method</label>
                    <select name="paymentMethod" id="new_paymentMethod" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                        <option value="cash">Cash</option>
                        <option value="upi">UPI / GPay / PhonePe</option>
                        <option value="bank_transfer">Bank Transfer (NEFT/IMPS)</option>
                        <option value="card">Credit/Debit Card</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="new_transactionId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Transaction Reference / ID (Optional)</label>
                    <input type="text" id="new_transactionId" name="transactionId"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5" placeholder="e.g. UPI Ref Number or Cash Receipt #">
                </div>

                <div class="mb-4">
                    <label for="new_invoiceId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Invoice Number (Optional)</label>
                    <input type="text" id="new_invoiceId" name="invoiceId"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5" placeholder="e.g. INV-2026-X">
                </div>

                <div class="mb-4">
                    <label for="new_purpose" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment Purpose</label>
                    <select name="purpose" id="new_purpose" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                        <option value="enrollment">Enrollment Installment / Balance</option>
                        <option value="renewal">Renewal / Extension</option>
                    </select>
                </div>

                <div class="mb-4 flex items-center">
                    <input type="checkbox" id="new_is_gst_applicable" name="is_gst_applicable" value="1" checked
                        class="w-4 h-4 text-violet-600 bg-gray-100 border-gray-300 rounded focus:ring-0 focus:ring-offset-0">
                    <label for="new_is_gst_applicable" class="ml-2 text-sm font-medium text-gray-900 dark:text-white">Include in GST/Tax Reports</label>
                </div>

                <div class="mb-4">
                    <label for="new_remarks" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Remarks / Comments</label>
                    <textarea id="new_remarks" name="remarks" rows="2" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5" placeholder="e.g. Cash received at office, discount applied"></textarea>
                </div>

                <button type="submit" 
                    class="w-full bg-violet-600 hover:bg-violet-700 text-white font-normal py-2.5 px-4">
                    Log Transaction
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Transaction History list -->
<section class="max-w-xl mx-auto border p-3 my-4 bg-white dark:bg-gray-700">
    <div class="p-4">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">Transaction History</h3>
        @if($enrollment->payments->isEmpty())
            <p class="text-sm text-gray-500">No payment transactions recorded yet.</p>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th class="px-4 py-2">Date</th>
                            <th class="px-4 py-2">Amount</th>
                            <th class="px-4 py-2">Purpose</th>
                            <th class="px-4 py-2">GST</th>
                            <th class="px-4 py-2">Method</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($enrollment->payments()->orderBy('paid_at', 'desc')->get() as $p)
                            <tr class="border-b">
                                <td class="px-4 py-2 text-xs">{{ \Carbon\Carbon::parse($p->paid_at)->format('d-M-Y') }}</td>
                                <td class="px-4 py-2 text-xs font-semibold text-gray-900">₹{{ number_format($p->amount / 100, 2) }}</td>
                                <td class="px-4 py-2 text-xs">
                                    <span class="px-2 py-1 text-2xs rounded-full font-medium {{ $p->purpose == 'renewal' ? 'bg-blue-100 text-blue-800' : 'bg-green-100 text-green-800' }}">
                                        {{ ucfirst($p->purpose) }}
                                    </span>
                                </td>
                                <td class="px-4 py-2 text-xs">{{ $p->is_gst_applicable ? 'Yes' : 'No' }}</td>
                                <td class="px-4 py-2 text-xs">{{ strtoupper($p->payment_method ?? 'N/A') }}</td>
                            </tr>
                            @if($p->remarks)
                                <tr class="bg-gray-50 text-xs">
                                    <td colspan="5" class="px-4 py-1.5 text-gray-400 italic">
                                        Remarks: {{ $p->remarks }}
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</section>

<script>
    function updateBonusAmount(checked) {
        document.getElementById('bonusAmount').value = checked ? '199' : '0';
    }
</script>

@endsection