@extends('layouts.t-student')

@section('content')
<style>
    body {
        font-family: "Inter", sans-serif;
        font-optical-sizing: auto;
    }

    .cal-sans {
        font-family: "Cal Sans", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    h1,h2,h3,h4,h5,h6 {
        font-family: "Cal Sans", sans-serif;
        letter-spacing: 0.01em;
        font-weight: 400;
        font-style: normal;
    }
</style>

<header id="sticky-header"
    class="sticky top-0 z-[20] h-14 flex items-center justify-center w-full duration-500 ease-out bg-white border-b bg-opacity-90 backdrop-blur-md border-neutral-200 border-opacity-40">
    <div class="flex items-center justify-between w-full px-4 mx-auto max-w-5xl py-1">
        <div class="relative z-10 flex items-center">
            <a href="{{ url('/') }}"
                class="font-sans text-lg flex items-center gap-2 text-black no-underline">
                <span class="text-xl font-bold cal-sans text-neutral-800">Codekaro</span>
            </a>
        </div>

        <a href="{{ url('/') }}"
            class="border px-4 py-3 rounded-lg text-sm hover:bg-gray-50">
            Back to Home
        </a>
    </div>
</header>

<div class="max-w-4xl mx-auto px-4 py-12">
    <div class="prose prose-gray max-w-none">

        <h1 class="text-2xl mb-2">Refund Policy</h1>
        <p class="text-gray-600 mb-8">Last Updated: June 10, 2026</p>

        <p>
            This Refund Policy applies to all courses, mentorship programs,
            workshops, bootcamps, and educational services offered by
            Codekaro / Efslon Coding School.
        </p>

        <h2 class="text-xl mt-10 mb-4">1. No Refund Policy</h2>

        <p>
            All payments made towards courses, mentorship programs, workshops,
            bootcamps, and other educational services are non-refundable.
        </p>

        <p>
            Once enrollment is confirmed and access to the course, platform,
            community, recordings, or learning resources has been provided,
            no refund requests will be entertained under any circumstances.
        </p>

        <h2 class="text-xl mt-10 mb-4">2. Token Amounts</h2>

        <p>
            Any token amount, booking amount, seat reservation fee, or advance
            payment made to reserve a seat in any batch is strictly
            non-refundable.
        </p>

        <h2 class="text-xl mt-10 mb-4">3. Change of Mind</h2>

        <p>
            Refunds will not be provided for reasons including but not limited to:
        </p>

        <ul class="list-disc pl-6">
            <li>Change of mind after enrollment</li>
            <li>Lack of time to attend classes</li>
            <li>Personal commitments</li>
            <li>Job, college, or family obligations</li>
            <li>Relocation or travel</li>
            <li>Failure to complete the course</li>
            <li>Failure to attend live sessions</li>
            <li>Dissatisfaction due to lack of personal effort or participation</li>
        </ul>

        <h2 class="text-xl mt-10 mb-4">4. Batch Transfers Instead of Refunds</h2>

        <p>
            Students who are unable to continue with their current batch may be
            eligible for a batch shift as per the Terms and Conditions.
        </p>

        <p>
            Batch shifting is provided as an alternative to refund requests and
            remains subject to the policies outlined in the Terms and Conditions.
        </p>

        <h2 class="text-xl mt-10 mb-4">5. Payment Disputes and Chargebacks</h2>

        <p>
            Students agree to contact Codekaro support before initiating any
            payment dispute, chargeback, or reversal request with a bank,
            credit card provider, UPI provider, or payment gateway.
        </p>

        <p>
            Initiating a fraudulent or unjustified chargeback after receiving
            access to course materials, mentorship services, recordings,
            community access, or educational resources may result in:
        </p>

        <ul class="list-disc pl-6">
            <li>Immediate suspension of course access</li>
            <li>Removal from the community and mentorship programs</li>
            <li>Permanent account termination</li>
            <li>Recovery proceedings as permitted by applicable law</li>
        </ul>

        <h2 class="text-xl mt-10 mb-4">6. Exceptional Circumstances</h2>

        <p>
            Any refund granted under exceptional circumstances shall be solely
            at the discretion of Codekaro and shall not create any obligation
            to provide refunds in future cases.
        </p>

        <h2 class="text-xl mt-10 mb-4">7. Changes to This Policy</h2>

        <p>
            Codekaro reserves the right to update or modify this Refund Policy
            at any time without prior notice.
        </p>

        <p>
            Continued use of our services after any modifications constitutes
            acceptance of the updated Refund Policy.
        </p>

        <h2 class="text-xl mt-10 mb-4">8. Contact Us</h2>

        <p>
            If you have any questions regarding this Refund Policy, please
            contact us through our official support channels.
        </p>

        <div class="mt-4 p-4 border rounded-lg bg-gray-50">
            <p><strong>Codekaro / Efslon Coding School</strong></p>
            <p>Email: info@codekaro.in</p>
            <p>Website: https://codekaro.in</p>
        </div>

    </div>
</div>

@endsection