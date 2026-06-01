@extends('layouts.app')

@section('meta_title', 'Privacy Policy | BitSabio')
@section('meta_description', 'Read BitSabio\'s Privacy Policy to understand how we collect, use, store, and protect your personal information when using our website, services, and training programs.')
@section('meta_keywords', 'Privacy Policy, Data Protection, Personal Information, User Privacy, BitSabio Privacy Policy, Website Privacy, Data Security')
@section('og_title', 'Privacy Policy | BitSabio')
@section('og_description', 'Learn how BitSabio collects, uses, and protects your information while providing web development, digital marketing, cloud, and training services.')

@section('content')

<section class="py-5">
    <div class="container">

        <h1 class="mt-4">Privacy Policy</h1>

        <p>
            At BitSabio, we value your privacy and are committed to protecting your personal information.
            This Privacy Policy explains how we collect, use, store, and safeguard information when you
            visit our website, submit inquiries, enroll in courses, or use our services.
        </p>

        <h2 class="mt-4">Information We Collect</h2>

        <p>We may collect the following information:</p>

        <ul>
            <li>Name and contact information</li>
            <li>Email address and phone number</li>
            <li>Company or organization details</li>
            <li>Course enrollment information</li>
            <li>Inquiry and support request details</li>
            <li>Technical information such as IP address, browser type, and device information</li>
        </ul>

        <h2 class="mt-4">How We Use Your Information</h2>

        <p>Your information may be used to:</p>

        <ul>
            <li>Respond to inquiries and support requests</li>
            <li>Provide services and training programs</li>
            <li>Improve website performance and user experience</li>
            <li>Send important updates and service notifications</li>
            <li>Analyze website traffic and visitor behavior</li>
            <li>Maintain security and prevent fraudulent activity</li>
        </ul>

        <h2 class="mt-4">Cookies & Analytics</h2>

        <p>
            Our website may use cookies and analytics tools such as Google Analytics to understand visitor
            behavior, improve website functionality, and enhance user experience. You can choose to disable
            cookies through your browser settings.
        </p>

        <h2 class="mt-4">Data Security</h2>

        <p>
            We implement appropriate technical and organizational measures to protect your personal information
            from unauthorized access, disclosure, alteration, or destruction.
        </p>

        <h2 class="mt-4">Third-Party Services</h2>

        <p>
            We may use trusted third-party services including cloud providers, analytics platforms,
            payment processors, and marketing tools to support our business operations.
        </p>

        <h2 class="mt-4">Information Sharing</h2>

        <p>
            BitSabio does not sell, rent, or trade your personal information to third parties.
            Information may only be shared when required by law or when necessary to provide requested services.
        </p>

        <h2 class="mt-4">Your Rights</h2>

        <p>
            You may request access, correction, or deletion of your personal information by contacting us.
            We will make reasonable efforts to comply with applicable privacy regulations.
        </p>

        <h2 class="mt-4">Changes to This Policy</h2>

        <p>
            We may update this Privacy Policy from time to time. Any changes will be posted on this page
            with an updated revision date.
        </p>

        <h2 class="mt-4">Contact Us</h2>

        <p>
            If you have any questions regarding this Privacy Policy or how your information is handled,
            please contact us through our Contact Us page.
        </p>

        <p class="mt-4">
            <strong>Last Updated:</strong> June 2026
        </p>

    </div>
</section>

@include('components.inquiryForm')

@endsection