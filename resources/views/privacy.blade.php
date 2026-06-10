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

        <h1 class="text-2xl mb-2">Privacy Policy</h1>
        <p class="text-gray-600 mb-8">Last Updated: 23rd October 2023</p>

        <p>
            Welcome to Codekaro ("Company", "we", "our", or "us").
        </p>

        <p>
            This Privacy Policy explains how we collect, use, store, and protect your
            personal information when you use our website, courses, mentorship programs,
            learning platform, and related services ("Services").
        </p>

        <p>
            By using our Services, you agree to the collection and use of information
            in accordance with this Privacy Policy.
        </p>

        <h2 class="text-xl mt-10 mb-4">1. Information We Collect</h2>

        <p>We may collect the following information:</p>

        <h3 class="text-lg mt-6 mb-2">Personal Information</h3>
        <ul class="list-disc pl-6">
            <li>Full name</li>
            <li>Email address</li>
            <li>Mobile number</li>
            <li>Billing and payment information</li>
            <li>Profile information provided by you</li>
        </ul>

        <h3 class="text-lg mt-6 mb-2">Learning Information</h3>
        <ul class="list-disc pl-6">
            <li>Course enrollments</li>
            <li>Course progress</li>
            <li>Assignment submissions</li>
            <li>Quiz and assessment results</li>
            <li>Certificates earned</li>
        </ul>

        <h3 class="text-lg mt-6 mb-2">Technical Information</h3>
        <ul class="list-disc pl-6">
            <li>IP address</li>
            <li>Browser type</li>
            <li>Device information</li>
            <li>Operating system</li>
            <li>Usage and activity logs</li>
        </ul>

        <h3 class="text-lg mt-6 mb-2">Communication Information</h3>
        <ul class="list-disc pl-6">
            <li>Support requests</li>
            <li>Feedback submissions</li>
            <li>Messages sent through our platform</li>
        </ul>

        <h2 class="text-xl mt-10 mb-4">2. How We Use Your Information</h2>

        <p>We use your information to:</p>

        <ul class="list-disc pl-6">
            <li>Provide access to courses and mentorship programs</li>
            <li>Process payments and enrollments</li>
            <li>Track learning progress</li>
            <li>Deliver course-related communications</li>
            <li>Respond to support requests</li>
            <li>Improve our platform and services</li>
            <li>Prevent fraud and unauthorized access</li>
            <li>Comply with legal obligations</li>
            <li>Send marketing and promotional communications (you may opt out at any time)</li>
        </ul>

        <h2 class="text-xl mt-10 mb-4">3. Payment Processing</h2>

        <p>
            Payments made through our platform may be processed by third-party
            payment providers such as Razorpay, Cashfree, or other authorized
            payment partners.
        </p>

        <p>
            We do not store your complete debit card, credit card, UPI PIN,
            or banking credentials on our servers.
        </p>

        <p>
            Payment providers process your payment information according to
            their own privacy policies and security standards.
        </p>

        <h2 class="text-xl mt-10 mb-4">4. Cookies and Analytics</h2>

        <p>
            We may use cookies and similar technologies to:
        </p>

        <ul class="list-disc pl-6">
            <li>Keep you signed in</li>
            <li>Remember your preferences</li>
            <li>Improve website performance</li>
            <li>Measure user engagement</li>
            <li>Analyze traffic and platform usage</li>
        </ul>

        <p class="mt-4">
            We may also use analytics and advertising tools such as Google Analytics,
            Meta Pixel, and similar services to understand how users interact with
            our platform.
        </p>

        <p>
            You may disable cookies through your browser settings, although some
            features of the platform may not function properly.
        </p>

        <h2 class="text-xl mt-10 mb-4">5. Information Sharing</h2>

        <p>
            We do not sell your personal information.
        </p>

        <p>
            We may share information with:
        </p>

        <ul class="list-disc pl-6">
            <li>Payment service providers</li>
            <li>Learning platform and hosting providers</li>
            <li>Analytics providers</li>
            <li>Customer support tools</li>
            <li>Government authorities when required by law</li>
        </ul>

        <p class="mt-4">
            All third-party service providers are required to handle information
            securely and only for authorized purposes.
        </p>

        <h2 class="text-xl mt-10 mb-4">6. Data Security</h2>

        <p>
            We implement reasonable administrative, technical, and organizational
            safeguards to protect your information against unauthorized access,
            disclosure, alteration, or destruction.
        </p>

        <p>
            However, no method of transmission over the internet or electronic
            storage is completely secure, and we cannot guarantee absolute security.
        </p>

        <h2 class="text-xl mt-10 mb-4">7. Data Retention</h2>

        <p>
            We retain your information for as long as necessary to:
        </p>

        <ul class="list-disc pl-6">
            <li>Provide course access and student services</li>
            <li>Maintain academic and transaction records</li>
            <li>Comply with legal and regulatory requirements</li>
            <li>Resolve disputes and enforce our agreements</li>
        </ul>

        <p class="mt-4">
            When information is no longer required, we may securely delete or
            anonymize it.
        </p>

        <h2 class="text-xl mt-10 mb-4">8. Children's Privacy</h2>

        <p>
            Our Services are primarily intended for individuals who are at least
            18 years of age.
        </p>

        <p>
            If a parent or guardian believes that a minor has provided personal
            information without appropriate consent, they may contact us and we
            will take reasonable steps to remove such information where applicable.
        </p>

        <h2 class="text-xl mt-10 mb-4">9. Third-Party Links</h2>

        <p>
            Our platform may contain links to third-party websites or services.
        </p>

        <p>
            We are not responsible for the privacy practices, content, or policies
            of such third-party websites. We encourage users to review their privacy
            policies before providing personal information.
        </p>

        <h2 class="text-xl mt-10 mb-4">10. Changes to This Privacy Policy</h2>

        <p>
            We may update this Privacy Policy from time to time.
        </p>

        <p>
            Any changes will be posted on this page along with the updated effective
            date. Continued use of our Services after such changes constitutes
            acceptance of the revised Privacy Policy.
        </p>

        <h2 class="text-xl mt-10 mb-4">11. Contact Us</h2>

        <p>
            If you have any questions, concerns, or requests regarding this Privacy
            Policy, please contact us:
        </p>

        <div class="mt-4 p-4 border rounded-lg bg-gray-50">
            <p><strong>Codekaro / Efslon Coding School</strong></p>
            <p>Email: info@codekaro.in</p>
            <p>Website: https://codekaro.in</p>
        </div>

    </div>
</div>
@endsection