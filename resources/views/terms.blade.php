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

        <h1 class="text-2xl mb-2">Terms and Conditions</h1>
        <p class="text-gray-600 mb-8">Last Updated: June 10, 2026</p>

        <p>
            By enrolling in any course, mentorship program, workshop, or batch
            offered by Codekaro / Efslon Coding School, you agree to the following
            Terms and Conditions.
        </p>

        <h2 class="text-xl mt-10 mb-4">1. Refund Policy</h2>

        <p>
            All course, mentorship, workshop, and program fees are non-refundable
            after enrollment.
        </p>

        <p>
            Any token amount paid towards seat reservation or enrollment is
            non-refundable.
        </p>

        <h2 class="text-xl mt-10 mb-4">2. Batch Completion Timeline</h2>

        <p>
            Batch completion may differ by a maximum of three (3) months from the
            originally communicated completion date.
        </p>

        <p>
            We will make reasonable efforts to complete the batch on time;
            however, unforeseen circumstances or logistical constraints may
            occasionally cause delays.
        </p>

        <h2 class="text-xl mt-10 mb-4">3. Class Cancellations</h2>

        <p>Classes may be cancelled or postponed due to:</p>

        <ul class="list-disc pl-6">
            <li>Internet issues</li>
            <li>Health issues of the instructor</li>
            <li>Important holidays</li>
            <li>Other unforeseen circumstances</li>
        </ul>

        <p class="mt-4">
            In such cases, the class will be rescheduled for the next available
            session.
        </p>

        <h2 class="text-xl mt-10 mb-4">4. Minimum Student Requirement</h2>

        <p>
            Live sessions will not be conducted if no students are available to
            attend the session.
        </p>

        <p>
            A minimum level of student participation may be required for
            conducting a live session.
        </p>

        <h2 class="text-xl mt-10 mb-4">5. Batch Shifting</h2>

        <p>
            Students may request one (1) batch shift within two (2) years from
            the date of enrollment, subject to seat availability.
        </p>

        <p>
            Once a batch shift has been provided, no additional batch shifts
            will be permitted.
        </p>

        <h2 class="text-xl mt-10 mb-4">6. Student Code of Conduct</h2>

        <p>
            Students are expected to maintain a respectful and professional
            learning environment.
        </p>

        <p>Any student found:</p>

        <ul class="list-disc pl-6">
            <li>Violating community guidelines</li>
            <li>Sharing hate speech</li>
            <li>Sharing religious or political propaganda</li>
            <li>Harassing other students or staff</li>
            <li>Sharing inappropriate content</li>
            <li>Disrupting learning activities</li>
        </ul>

        <p class="mt-4">
            May be removed from the batch, discussion groups, community
            platforms, or learning platform without prior notice and without
            any refund.
        </p>

        <h2 class="text-xl mt-10 mb-4">7. Course Access Period</h2>

        <p>
            All cohort enrollments include one (1) year of access to:
        </p>

        <ul class="list-disc pl-6">
            <li>Course materials</li>
            <li>Recorded sessions</li>
            <li>Associated resources</li>
        </ul>

        <p class="mt-4">
            The access period is calculated from the start date of the batch.
        </p>

        <p>
            After the access period expires, access to the course content will
            be revoked.
        </p>

        <p>
            Students who wish to continue accessing the content must pay the
            applicable renewal fee.
        </p>

        <p>
            Codekaro reserves the right to revise renewal pricing at any time.
        </p>

        <h2 class="text-xl mt-10 mb-4">8. Mentorship Program Terms</h2>

        <p>
            Mentorship programs operate on a custom timeline that will be
            mutually discussed and agreed upon during onboarding.
        </p>

        <p>
            The mentorship duration may vary from three (3) to six (6) months
            depending on the student's availability and learning pace.
        </p>

        <p>
            Mentorship sessions and support will only be provided within the
            agreed mentorship timeline.
        </p>

        <p>
            Mentorship enrollments also include one (1) year of platform access
            from the start date, during which students may revisit course
            materials and resources.
        </p>

        <p>
            Upon expiry of the one-year access period, students must pay the
            applicable renewal fee to regain access.
        </p>

        <p>
            No extensions will be granted outside the renewal process.
        </p>

        <h2 class="text-xl mt-10 mb-4">9. Intellectual Property</h2>

        <p>
            All course materials, including but not limited to videos,
            recordings, notes, assignments, PDFs, source code, presentations,
            templates, and resources are the intellectual property of Codekaro /
            Efslon Coding School.
        </p>

        <p>
            Students may access and use these materials solely for their
            personal learning purposes.
        </p>

        <p>
            Reproduction, redistribution, resale, public sharing, recording,
            downloading, or commercial use of any course material without prior
            written permission is strictly prohibited.
        </p>

        <h2 class="text-xl mt-10 mb-4">10. Account Sharing Policy</h2>

        <p>
            Course access is intended for a single enrolled student only.
        </p>

        <p>
            Sharing login credentials, recordings, downloadable resources, or
            course access with any third party is prohibited.
        </p>

        <p>
            Violation of this policy may result in immediate suspension or
            termination of access without refund.
        </p>

        <h2 class="text-xl mt-10 mb-4">11. Placement Disclaimer</h2>

        <p>
            Codekaro does not guarantee job placement, internship opportunities,
            interview calls, salary outcomes, freelance projects, or career
            advancement.
        </p>

        <p>
            Student outcomes depend on individual effort, consistency, skill
            development, communication ability, market conditions, and factors
            beyond our control.
        </p>

        <h2 class="text-xl mt-10 mb-4">12. Recording Consent</h2>

        <p>
            Live classes, doubt sessions, mentorship calls, webinars, and
            community events may be recorded for educational and operational
            purposes.
        </p>

        <p>
            By participating in such sessions, students consent to these
            recordings being made and shared with enrolled students where
            applicable.
        </p>

        <h2 class="text-xl mt-10 mb-4">13. Technical Requirements</h2>

        <p>
            Students are responsible for maintaining a stable internet
            connection, suitable hardware, and compatible software required to
            access the course and platform.
        </p>

        <p>
            Codekaro shall not be responsible for learning disruptions caused by
            a student's device, internet connection, or software issues.
        </p>

        <h2 class="text-xl mt-10 mb-4">14. Limitation of Liability</h2>

        <p>
            To the maximum extent permitted by applicable law, Codekaro /
            Efslon Coding School shall not be liable for any indirect,
            incidental, consequential, special, or punitive damages arising
            from participation in any course, mentorship program, workshop,
            community, or use of the platform.
        </p>

        <h2 class="text-xl mt-10 mb-4">15. Changes to Terms</h2>

        <p>
            Codekaro / Efslon Coding School reserves the right to update or
            modify these Terms and Conditions at any time.
        </p>

        <p>
            Continued participation in the course or use of the platform shall
            constitute acceptance of any revised terms.
        </p>

        <h2 class="text-xl mt-10 mb-4">16. Governing Law and Jurisdiction</h2>

        <p>
            These Terms and Conditions shall be governed by and construed in
            accordance with the laws of India.
        </p>

        <p>
            Any dispute arising out of or relating to these Terms and
            Conditions shall be subject to the exclusive jurisdiction of the
            courts located in Kanpur, Uttar Pradesh.
        </p>

        <h2 class="text-xl mt-10 mb-4">17. Contact</h2>

        <p>
            For any questions regarding these Terms and Conditions, please
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