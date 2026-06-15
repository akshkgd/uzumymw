@extends('layouts.t-admin-sidebar')
@section('content')
@include('layouts.t-alert')

@php
    $payment = $enrollment->payments()->orderBy('paid_at', 'asc')->first();
    $totalPaid = $enrollment->amountPaid / 100;
    $payable = $enrollment->payable_in_rupees;
    $remaining = max(0, $payable - $totalPaid);
    
    // Progress calculation
    $ts = $enrollment->time_spent ?? 0;
    $hrs = floor($ts / 60);
    $mins = $ts % 60;
    $timeSpentText = $hrs > 0 
        ? $hrs . ' ' . ($hrs == 1 ? 'hour' : 'hours') . ' ' . $mins . ' min'
        : $mins . ' min';
    $progressText = ($enrollment->progress ?? 0) . '% ' . $timeSpentText;

    // accessTill formatting
    $accessTillDate = null;
    if ($enrollment->accessTill) {
        $accessTillDate = \Carbon\Carbon::parse($enrollment->accessTill);
    } elseif ($enrollment->startFrom) {
        $accessTillDate = \Carbon\Carbon::parse($enrollment->startFrom)->addYear();
    } elseif ($enrollment->paidAt) {
        $accessTillDate = \Carbon\Carbon::parse($enrollment->paidAt)->addYear();
    }
    $accessTillText = $accessTillDate ? $accessTillDate->format('jS M Y') : 'Standard';
    $isExpired = $accessTillDate && $accessTillDate->isPast();
@endphp

<div class="max-w-3xl mx-auto px-4 py-4">
    <!-- Header -->
    <div class="mb-4 flex flex-col gap-3">
        <div>
            <h1 class="text-xl font-semibold text-neutral-900">Enrollment Details</h1>
            <p class="text-sm text-neutral-700 font-normal">Manage transactions, view payments, and configure access settings.</p>
        </div>
        <div class="flex items-center gap-2">
            <button type="button" onclick="openAddPaymentModal()" class="bg-black hover:bg-neutral-950 text-white text-xs font-normal py-2 px-3.5 transition-colors flex items-center gap-1">
                Add Payment
            </button>
            <a href="/admin/batch-enrollment/{{ $enrollment->batchId }}" class="border border-neutral-300 hover:bg-neutral-50 text-neutral-700 text-xs font-normal py-2 px-3.5 transition-colors flex items-center gap-1">
                Back to Enrollments
            </a>
        </div>
    </div>

    <!-- Summary Stats Grid -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-4">
        @if($remaining == 0)
            <div class="border border-green-200 p-3 bg-green-100 text-green-600">
                <span class="text-green-500 block text-[10px] font-normal uppercase tracking-wider mb-1">Paid</span>
                <span class="text-xl font-normal text-green-600">₹{{ number_format($totalPaid) }}</span>
            </div>
        @else
            <div class="border border-orange-200 p-3 bg-orange-100 text-orange-600">
                <span class="text-orange-500 block text-[10px] font-normal uppercase tracking-wider mb-1">Paid</span>
                <span class="text-xl font-normal text-orange-600">₹{{ number_format($totalPaid) }}</span>
            </div>
        @endif
        <div class="border border-neutral-200 p-3 bg-white">
            <span class="text-neutral-500 block text-[10px] font-normal uppercase tracking-wider mb-1">Remaining</span>
            <span class="text-xl font-normal text-neutral-900">₹{{ number_format($remaining) }}</span>
        </div>
        @if($isExpired)
            <div class="border border-red-200 p-3 bg-red-100 text-red-600">
                <span class="text-red-500 block text-[10px] font-normal uppercase tracking-wider mb-1">Access Till</span>
                <span class="text-xl font-normal text-red-600 block leading-none">Expired </span>
                <!-- <span class="text-xs text-red-600 block leading-none mt-1">{{ $accessTillText }}</span> -->
            </div>
        @else
            <div class="border border-neutral-200 p-3 bg-white">
                <span class="text-neutral-500 block text-[10px] font-normal uppercase tracking-wider mb-1">Access Till</span>
                <span class="text-xl font-normal text-neutral-900">{{ $accessTillText }}</span>
            </div>
        @endif
        <div class="border border-neutral-200 p-3 bg-white">
            <span class="text-neutral-500 block text-[10px] font-normal uppercase tracking-wider mb-1">Progress</span>
            <span class="text-xl font-normal text-neutral-900">{{ $progressText }}</span>
        </div>
    </div>

    <!-- Student Info Section -->
    <div class="bg-white border border-neutral-200 p-4 mb-4">
        <!-- <h3 class="text-sm font-normal text-neutral-900 uppercas tracking-wider mb-3 border-b border-neutral-100 pb-1.5">Student Details</h3> -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-sm font-normal">
            <div>
                <span class="text-neutral-500 block text-[10px] font-normal uppercase tracking-wider mb-0.5">Name</span>
                <span class="text-neutral-900 font-normal text-bas">{{$enrollment->students->name}}</span>
            </div>
            <div class="min-w-0">
                <span class="text-neutral-500 block text-[10px] font-normal uppercase tracking-wider mb-0.5">Email</span>
                <span class="text-neutral-900 font-normal block truncate" title="{{$enrollment->students->email}}">{{$enrollment->students->email}}</span>
            </div>
            <div>
                <span class="text-neutral-500 block text-[10px] font-normal uppercase tracking-wider mb-0.5">Batch Name</span>
                <span class="text-neutral-900 font-normal">{{$batch->name}}</span>
            </div>
        </div>
    </div>

    <!-- Payments / Transactions History Section -->
    <div class="bg-white mb-4">
        <div class="flex items-center justify-between mb-4">
            <div class="hidden">
                <h3 class="text-lg font-medium text-neutral-900">Payments</h3>
                <p class="text-sm text-neutral-700 font-normal mt-0.5">
                    History of all transactions logged for this enrollment.
                </p>
            </div>
            
        </div>

        @if($enrollment->payments->isEmpty())
            <div class="text-center py-12 border border-dashed border-neutral-200">
                <p class="text-sm text-neutral-400 font-normal">No payment transactions recorded yet.</p>
            </div>
        @else
            <div class="border border-neutral-200 bg-white">
                <table class="w-full text-sm text-left text-neutral-500">
                    <thead class="text-xs text-neutral-600 uppercase bg-white">
                        <tr class="border-b border-neutral-200">
                            <th class="px-4 py-2 font-normal text-left tracking-wider">Paid At</th>
                            <th class="px-4 py-2 font-normal text-left tracking-wider">Amount</th>
                            <th class="px-4 py-2 font-normal text-left tracking-wider">Notes</th>
                            <th class="px-4 py-2 font-normal text-right tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-neutral-200 bg-white">
                        @foreach($enrollment->payments()->orderBy('paid_at', 'desc')->get() as $p)
                            <tr class="text-neutral-900 font-normal">
                                <td class="px-4 py-3 font-normal">{{ \Carbon\Carbon::parse($p->paid_at)->format('M j, Y g:i A') }}</td>
                                <td class="px-4 py-3 font-normal">₹{{ number_format($p->amount / 100) }}</td>
                                <td class="px-4 py-3 font-normal text-neutral-400">
                                    {{ $p->remarks ?? '-' }}
                                </td>
                                <td class="px-4 py-3 font-normal text-right">
                                    <div class="flex items-center justify-end gap-1.5">
                                        <button type="button" onclick="openEditPaymentModal({{ $p->id }}, {{ $p->amount / 100 }}, '{{ $p->purpose }}', '{{ $p->transaction_id }}', '{{ $p->invoice_id }}', '{{ $p->payment_method }}', '{{ \Carbon\Carbon::parse($p->paid_at)->format('Y-m-d') }}', {{ $p->is_gst_applicable ? 1 : 0 }}, '{{ addslashes($p->remarks) }}')" class="text-neutral-400 hover:text-black transition-colors p-1" title="Edit Payment">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil">
                                                <path d="M12 20h9"/>
                                                <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/>
                                            </svg>
                                        </button>
                                        <form action="{{ route('deletePayment', $p->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this payment transaction? This will automatically update the parent enrollment totals.')" class="inline">
                                            @csrf
                                            <button type="submit" class="text-neutral-400 hover:text-red-600 transition-colors p-1" title="Delete Payment">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-2">
                                                    <path d="M3 6h18"/>
                                                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/>
                                                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/>
                                                    <line x1="10" y1="11" x2="10" y2="17"/>
                                                    <line x1="14" y1="11" x2="14" y2="17"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>


    <!-- Course Access Settings Form at the bottom -->
    <div class="bg-white border border-neutral-200 p-4">
        <form action="{{ route('updatePaymentStatus') }}" method="POST">
            @csrf
            <input type="hidden" name="enrollmentId" value="{{$enrollment->id}}">
            
            <div class="space-y-3">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="startFrom" class="block text-xs font-normal text-neutral-700 mb-0.5">Start From (Access begins from)</label>
                        <input type="date" id="startFrom" name="startFrom" value="{{ $enrollment->startFrom ? \Carbon\Carbon::parse($enrollment->startFrom)->format('Y-m-d') : '' }}"
                            class="w-full border border-neutral-200 px-3 py-1.5 text-sm font-normal focus:outline-none focus:border-violet-500 focus:ring-0">
                    </div>

                    <div>
                        <label for="accessTill" class="block text-xs font-normal text-neutral-700 mb-0.5">Access Till</label>
                        <input type="date" id="accessTill" name="accessTill" value="{{$enrollment->accessTill}}"
                            class="w-full border border-neutral-200 px-3 py-1.5 text-sm font-normal focus:outline-none focus:border-violet-500 focus:ring-0">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="override_access_days" class="block text-xs font-normal text-neutral-700 mb-0.5">Override Access Days</label>
                        <input type="number" id="override_access_days" name="override_access_days" min="0" value="{{$enrollment->override_access_days}}"
                            class="w-full border border-neutral-200 px-3 py-1.5 text-sm font-normal focus:outline-none focus:border-violet-500 focus:ring-0" placeholder="e.g. 10 (Leave blank for normal timeline)">
                        <p class="text-xs text-neutral-700 mt-0.5 font-normal">
                            Current days passed since payment: <span class="font-normal text-neutral-950">{{ $enrollment->paidAt ? \Carbon\Carbon::now()->diffInDays(\Carbon\Carbon::parse($enrollment->paidAt)) : '0 (Unpaid)' }}</span>
                        </p>
                    </div>

                    <div>
                        <label for="batchId" class="block text-xs font-normal text-neutral-700 mb-0.5">Batch ID</label>
                        <input type="text" id="batchId" name="batchId" value="{{$enrollment->batchId}}"
                            class="w-full border border-neutral-200 px-3 py-1.5 text-sm font-normal focus:outline-none focus:border-violet-500 focus:ring-0">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="amountPayable" class="block text-xs font-normal text-neutral-700 mb-0.5">Amount Payable (₹)</label>
                        <input type="number" id="amountPayable" name="amountPayable" value="{{ $payable }}" step="0.01" min="0"
                            class="w-full border border-neutral-200 px-3 py-1.5 text-sm font-normal focus:outline-none focus:border-violet-500 focus:ring-0">
                    </div>
                    <div>
                        <label for="status" class="block text-xs font-normal text-neutral-700 mb-0.5">Enrollment Status</label>
                        <select name="status" id="status" class="w-full border border-neutral-200 px-3 py-1.5 text-sm font-normal focus:outline-none focus:border-violet-500 focus:ring-0 bg-white">
                            <option value="1" {{ $enrollment->status == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $enrollment->status == 0 ? 'selected' : '' }}>Not Active</option>
                            <option value="2" {{ $enrollment->status == 2 ? 'selected' : '' }}>Banned</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="hasPaid" class="block text-xs font-normal text-neutral-700 mb-0.5">Payment Status (Has Paid)</label>
                        <select name="hasPaid" id="hasPaid" class="w-full border border-neutral-200 px-3 py-1.5 text-sm font-normal focus:outline-none focus:border-violet-500 focus:ring-0 bg-white">
                            <option value="1" {{ $enrollment->hasPaid == 1 ? 'selected' : '' }}>Yes (Paid)</option>
                            <option value="0" {{ $enrollment->hasPaid == 0 ? 'selected' : '' }}>No (Unpaid)</option>
                        </select>
                    </div>
                </div>

                @if($batch->type == 2)
                <div class="pt-1">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" name="certificateFee" class="form-checkbox text-black focus:ring-0 focus:ring-offset-0 border-neutral-300 bg-neutral-100 font-normal" 
                            {{ $enrollment->certificateFee > 1 ? 'checked' : '' }}
                            onchange="updateBonusAmount(this.checked)">
                        <span class="ml-2 text-xs font-normal text-neutral-700">Grant Bonuses</span>
                    </label>
                    <input type="hidden" name="certificateFee" id="bonusAmount" value="{{ $enrollment->certificateFee ?? 0 }}">
                </div>
                @endif
            </div>

            <!-- Form Submit -->
            <div class="mt-2 pt-2 border-neutral-100 flex justify-end">
                <button type="submit" class="bg-black hover:bg-neutral-900 text-white text-xs font-normal py-2 px-4 transition-colors">
                    Update Access Policy
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Add Payment Modal -->
<div id="addPaymentModal" class="fixed inset-0 bg-neutral-900/50 backdrop-blur-sm z-[100] hidden items-center justify-center p-4 transition-opacity duration-300 opacity-0">
    <div class="bg-white border border-neutral-100 max-w-md w-full max-h-[90vh] flex flex-col relative transform scale-95 transition-all duration-300">
        <!-- Close Button -->
        <button onclick="closeAddPaymentModal()" class="absolute top-3 right-3 text-neutral-400 hover:text-neutral-600 focus:outline-none z-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        <!-- Header (Fixed) -->
        <div class="px-5 pt-4 pb-1.5 bg-white">
            <h3 class="font-semibold text-neutral-900">Add New Payment</h3>
            <p class="text-sm text-neutral-600 font-normal">Record a new payment for this enrollment.</p>
        </div>

        <!-- Scrollable Form Body -->
        <div class="flex-1 overflow-y-auto px-5 py-2 bg-white">
            <form action="{{ route('addManualPayment') }}" method="POST" id="addPaymentFormInner">
                @csrf
                <input type="hidden" name="enrollmentId" value="{{$enrollment->id}}">

                <div class="space-y-2.5">
                    <div>
                        <label for="new_amount" class="block text-xs font-normal text-neutral-700 mb-0.5">Amount (₹)</label>
                        <input type="number" id="new_amount" name="amount" required step="0.01" min="1"
                            class="w-full border border-neutral-200 px-3 py-1.5 text-sm font-normal focus:outline-none focus:border-violet-500 focus:ring-0" placeholder="0">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="new_transactionId" class="block text-xs font-normal text-neutral-700 mb-0.5">Payment ID</label>
                            <input type="text" id="new_transactionId" name="transactionId" placeholder="pay_..."
                                class="w-full border border-neutral-200 px-3 py-1.5 text-sm font-normal focus:outline-none focus:border-violet-500 focus:ring-0">
                        </div>
                        <div>
                            <label for="new_invoiceId" class="block text-xs font-normal text-neutral-700 mb-0.5">Order ID</label>
                            <input type="text" id="new_invoiceId" name="invoiceId" placeholder="order_..."
                                class="w-full border border-neutral-200 px-3 py-1.5 text-sm font-normal focus:outline-none focus:border-violet-500 focus:ring-0">
                        </div>
                    </div>

                    <div>
                        <label for="new_paymentMethod" class="block text-xs font-normal text-neutral-700 mb-0.5">Payment Method</label>
                        <div class="relative">
                            <select name="paymentMethod" id="new_paymentMethod" class="w-full border border-neutral-200 rounded-none px-3 py-1.5 text-sm font-normal focus:outline-none focus:border-violet-500 focus:ring-0 appearance-none pr-8 bg-white">
                                <option value="upi">UPI / QR Code</option>
                                <option value="cash">Cash</option>
                                <option value="bank_transfer">Bank Transfer</option>
                                <option value="card">Card</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-neutral-500">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label for="new_paidAt" class="block text-xs font-normal text-neutral-700 mb-0.5">Payment Date</label>
                        <input type="date" id="new_paidAt" name="paidAt" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                            class="w-full border border-neutral-200 px-3 py-1.5 text-sm font-normal focus:outline-none focus:border-violet-500 focus:ring-0">
                    </div>

                    <div class="flex items-center pt-0.5">
                        <input type="hidden" name="is_gst_applicable" value="0" />
                        <input type="checkbox" id="new_is_gst_applicable" name="is_gst_applicable" value="1" checked
                            class="w-3.5 h-3.5 text-black border-neutral-200 rounded focus:ring-0 focus:ring-offset-0">
                        <label for="new_is_gst_applicable" class="ml-2 text-[11px] font-normal text-neutral-600">Include in GST Reports</label>
                    </div>

                    <div>
                        <label for="new_remarks" class="block text-xs font-normal text-neutral-700 mb-0.5">Notes</label>
                        <input type="text" id="new_remarks" name="remarks" class="w-full border border-neutral-200 px-3 py-1.5 text-sm font-normal focus:outline-none focus:border-violet-500 focus:ring-0" placeholder="Optional notes...">
                    </div>
                </div>
            </form>
        </div>

        <!-- Footer Buttons (Fixed) -->
        <div class="px-5 pt-1.5 pb-4 bg-white flex justify-end gap-3">
            <button type="button" onclick="closeAddPaymentModal()" class="border border-neutral-300 hover:bg-neutral-50 text-neutral-700 text-xs font-normal py-1.5 px-3.5 transition-colors">
                Cancel
            </button>
            <button type="submit" form="addPaymentFormInner" class="bg-black hover:bg-neutral-950 text-white text-xs font-normal py-1.5 px-4 transition-colors">
                Save Payment
            </button>
        </div>
    </div>
</div>

<!-- Edit Payment Modal -->
<div id="editPaymentModal" class="fixed inset-0 bg-neutral-900/50 backdrop-blur-sm z-[100] hidden items-center justify-center p-4 transition-opacity duration-300 opacity-0">
    <div class="bg-white border border-neutral-100 max-w-md w-full max-h-[90vh] flex flex-col relative transform scale-95 transition-all duration-300">
        <!-- Close Button -->
        <button onclick="closeEditPaymentModal()" class="absolute top-3 right-3 text-neutral-400 hover:text-neutral-600 focus:outline-none z-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        <!-- Header (Fixed) -->
        <div class="px-5 pt-4 pb-1.5 bg-white">
            <h3 class="text-sm font-normal text-neutral-900">Edit Payment</h3>
            <p class="text-[11px] text-neutral-500 font-normal">Modify the recorded payment details.</p>
        </div>

        <!-- Scrollable Form Body -->
        <div class="flex-1 overflow-y-auto px-5 py-2 bg-white">
            <form id="editPaymentFormInner" action="" method="POST">
                @csrf

                <div class="space-y-2.5">
                    <div>
                        <label for="edit_amount" class="block text-[10px] font-normal text-neutral-600 mb-0.5">Amount (₹)</label>
                        <input type="number" id="edit_amount" name="amount" required step="0.01" min="1"
                            class="w-full border border-neutral-200 px-3 py-1.5 text-sm font-normal focus:outline-none focus:border-violet-500 focus:ring-0">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="edit_transactionId" class="block text-[10px] font-normal text-neutral-600 mb-0.5">Payment ID</label>
                            <input type="text" id="edit_transactionId" name="transactionId" placeholder="pay_..."
                                class="w-full border border-neutral-200 px-3 py-1.5 text-sm font-normal focus:outline-none focus:border-violet-500 focus:ring-0">
                        </div>
                        <div>
                            <label for="edit_invoiceId" class="block text-[10px] font-normal text-neutral-600 mb-0.5">Order ID</label>
                            <input type="text" id="edit_invoiceId" name="invoiceId" placeholder="order_..."
                                class="w-full border border-neutral-200 px-3 py-1.5 text-sm font-normal focus:outline-none focus:border-violet-500 focus:ring-0">
                        </div>
                    </div>

                    <div>
                        <label for="edit_paymentMethod" class="block text-[10px] font-normal text-neutral-600 mb-0.5">Payment Method</label>
                        <div class="relative">
                            <select name="paymentMethod" id="edit_paymentMethod" class="w-full border border-neutral-200 rounded-none px-3 py-1.5 text-sm font-normal focus:outline-none focus:border-violet-500 focus:ring-0 appearance-none pr-8 bg-white">
                                <option value="upi">UPI / QR Code</option>
                                <option value="cash">Cash</option>
                                <option value="bank_transfer">Bank Transfer</option>
                                <option value="card">Card</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-neutral-500">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label for="edit_paidAt" class="block text-[10px] font-normal text-neutral-600 mb-0.5">Payment Date</label>
                        <input type="date" id="edit_paidAt" name="paidAt"
                            class="w-full border border-neutral-200 px-3 py-1.5 text-sm font-normal focus:outline-none focus:border-violet-500 focus:ring-0">
                    </div>

                    <div class="flex items-center pt-0.5">
                        <input type="hidden" name="is_gst_applicable" value="0" />
                        <input type="checkbox" id="edit_is_gst_applicable" name="is_gst_applicable" value="1"
                            class="w-3.5 h-3.5 text-black border-neutral-200 rounded focus:ring-0 focus:ring-offset-0">
                        <label for="edit_is_gst_applicable" class="ml-2 text-[11px] font-normal text-neutral-600">Include in GST Reports</label>
                    </div>

                    <div>
                        <label for="edit_remarks" class="block text-[10px] font-normal text-neutral-600 mb-0.5">Notes</label>
                        <input type="text" id="edit_remarks" name="remarks" class="w-full border border-neutral-200 px-3 py-1.5 text-sm font-normal focus:outline-none focus:border-violet-500 focus:ring-0" placeholder="Optional notes...">
                    </div>
                </div>
            </form>
        </div>

        <!-- Footer Buttons (Fixed) -->
        <div class="px-5 pt-1.5 pb-4 bg-white flex justify-end gap-3">
            <button type="button" onclick="closeEditPaymentModal()" class="border border-neutral-300 hover:bg-neutral-50 text-neutral-700 text-xs font-normal py-1.5 px-3.5 transition-colors">
                Cancel
            </button>
            <button type="submit" form="editPaymentFormInner" class="bg-black hover:bg-neutral-950 text-white text-xs font-normal py-1.5 px-4 transition-colors">
                Save Changes
            </button>
        </div>
    </div>
</div>

<script>
    function updateBonusAmount(checked) {
        document.getElementById('bonusAmount').value = checked ? '199' : '0';
    }

    function openAddPaymentModal() {
        const modal = document.getElementById('addPaymentModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        // Trigger reflow/timeout for animation
        setTimeout(() => {
            modal.classList.remove('opacity-0');
            modal.querySelector('div').classList.remove('scale-95');
        }, 10);
    }

    function closeAddPaymentModal() {
        const modal = document.getElementById('addPaymentModal');
        modal.classList.add('opacity-0');
        modal.querySelector('div').classList.add('scale-95');
        setTimeout(() => {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        }, 300);
    }

    function openEditPaymentModal(id, amount, purpose, transactionId, invoiceId, method, date, isGst, remarks) {
        const modal = document.getElementById('editPaymentModal');
        const form = document.getElementById('editPaymentFormInner');
        
        // Set Action URL
        form.action = `/admin/payments/${id}/update`;
        
        // Populate Fields
        document.getElementById('edit_amount').value = amount;
        
        document.getElementById('edit_transactionId').value = transactionId || '';
        document.getElementById('edit_invoiceId').value = invoiceId || '';
        document.getElementById('edit_paymentMethod').value = method || 'upi';
        document.getElementById('edit_paidAt').value = date;
        document.getElementById('edit_is_gst_applicable').checked = isGst === 1;
        document.getElementById('edit_remarks').value = remarks || '';
        
        // Open Modal
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        setTimeout(() => {
            modal.classList.remove('opacity-0');
            modal.querySelector('div').classList.remove('scale-95');
        }, 10);
    }

    function closeEditPaymentModal() {
        const modal = document.getElementById('editPaymentModal');
        modal.classList.add('opacity-0');
        modal.querySelector('div').classList.add('scale-95');
        setTimeout(() => {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        }, 300);
    }

    // Close modal when clicking on the backdrop
    window.addEventListener('click', function(event) {
        const addModal = document.getElementById('addPaymentModal');
        const editModal = document.getElementById('editPaymentModal');
        if (event.target === addModal) {
            closeAddPaymentModal();
        }
        if (event.target === editModal) {
            closeEditPaymentModal();
        }
    });
</script>

@endsection