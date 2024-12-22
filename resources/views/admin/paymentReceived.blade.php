@extends('layouts.t-admin-sidebar')
@section('content')
@include('layouts.t-alert')

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
                    <input type="text" id="invoiceId" name="invoiceId" value="{{$enrollment->invoiceId}}"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                </div>

                <div class="mb-4">
                    <label for="transactionId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Transaction ID</label>
                    <input type="text" id="transactionId" name="transactionId" value="{{$enrollment->transactionId}}"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                </div>

                <div class="mb-4">
                    <label for="paymentMethod" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment Method</label>
                    <input type="text" id="paymentMethod" name="paymentMethod" value="{{$enrollment->paymentMethod}}"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                </div>

                <div class="mb-4">
                    <label for="amountPaid" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount Paid</label>
                    <input type="text" id="amountPaid" name="amountPaid" value="{{$enrollment->amountPaid}}"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                </div>

                <div class="mb-4">
                    <label for="hasPaid" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Has Paid</label>
                    <input type="text" id="hasPaid" name="hasPaid" value="{{$enrollment->hasPaid}}"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                </div>

                <div class="mb-4">
                    <label for="paidAt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paid At</label>
                    <input type="date" id="paidAt" name="paidAt" value="{{$enrollment->paidAt}}"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                </div>

                <div class="mb-4">
                    <label for="accessTill" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Access Till</label>
                    <input type="date" id="accessTill" name="accessTill" value="{{$enrollment->accessTill}}"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                </div>

                <input type="hidden" name="enrollmentId" value="{{$enrollment->id}}">

                <!-- Submit Button -->
                <button type="submit" 
                    class="w-full bg-black hover:bg-black text-white font-normal py-2.5 px-4">
                    Update Payment Details
                </button>
            </form>
        </div>
    </div>
</section>

@endsection