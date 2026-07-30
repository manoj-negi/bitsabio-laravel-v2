@extends('layouts.app')
@section('meta_title', 'Frequently Asked Questions | BitSabio')
@section('meta_description', 'Find answers to frequently asked questions about BitSabio services, web development, AI solutions, SEO, digital marketing, project timelines, pricing, and support.')
@section('meta_keywords', 'FAQ, frequently asked questions, BitSabio FAQ, web development questions, AI solutions FAQ, SEO services FAQ, digital marketing FAQ')
@section('og_title', 'Frequently Asked Questions | BitSabio')
@section('og_description', 'Get answers to common questions about our web development, AI, SEO, and digital services.')

@section('content')
    <section class="page-hero" id="faq">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h3 class="text-center mb-3" data-aos="fade-up">Frequently Asked Questions</h2>
                    <div class="container py-5">
                        <div class="accordion custom-accordion" id="faqAccordion">

                            <!-- Item 1 -->
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    How quickly will you respond?
                                    </button>
                                </h3>
                                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                    We pride ourselves on our responsiveness. Our standard is to get back to you within one business day, though usually, it’s even faster.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Do you offer custom training for corporate teams?
                                </button>
                            </h3>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                Yes, we provide tailored corporate training programs based on your team's needs and goals.
                                </div>
                            </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Can I schedule a free 30-minute discovery call?
                                </button>
                            </h3>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                Absolutely! You can book a free discovery call through our contact page or WhatsApp.
                                </div>
                            </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                What services does BitSabio offer?
                                </button>
                            </h3>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                We provide end-to-end IT solutions including web development, custom software development, UI/UX design, API integrations, and performance optimization.
                                </div>
                            </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                Do you build custom web applications?
                                </button>
                            </h3>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                Yes, we specialize in building scalable, custom web applications tailored to your business requirements using modern technologies like React, Next.js, and Laravel.
                                </div>
                            </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                How long does it take to complete a project?
                                </button>
                            </h3>
                            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                Project timelines depend on complexity and requirements. A basic website may take 1–2 weeks, while larger custom platforms can take several weeks or months.
                                </div>
                            </div>
                            </div>

                            <!-- Item 7 -->
                            <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                                Do you offer website maintenance and support?
                                </button>
                            </h3>
                            <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                Yes, we provide ongoing maintenance, updates, security monitoring, and performance optimization to ensure your website runs smoothly.
                                </div>
                            </div>
                            </div>

                            <!-- Item 8 -->
                            <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                                Can you improve my website’s speed and SEO?
                                </button>
                            </h3>
                            <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                Absolutely. We optimize Core Web Vitals, improve loading speed, fix technical SEO issues, and enhance overall performance to boost search rankings.
                                </div>
                            </div>
                            </div>

                            <!-- Item 9 -->
                            <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq9">
                                Do you work with startups or only established businesses?
                                </button>
                            </h3>
                            <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                We work with both startups and established businesses. Whether you're launching a new idea or scaling an existing product, we can help.
                                </div>
                            </div>
                            </div>

                            <!-- Item 10 -->
                            <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq10">
                                What technologies do you use?
                                </button>
                            </h3>
                            <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                We use modern technologies such as React, Next.js, Angular, Node.js, Laravel, and cloud platforms to build scalable and high-performance solutions.
                                </div>
                            </div>
                            </div>

                            <!-- Item 11 -->
                            <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq11">
                                Do you provide UI/UX design services?
                                </button>
                            </h3>
                            <div id="faq11" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                Yes, we design intuitive and user-friendly interfaces that enhance user experience and increase engagement.
                                </div>
                            </div>
                            </div>

                            <!-- Item 12 -->
                            <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq12">
                                How can I get started with BitSabio?
                                </button>
                            </h3>
                            <div id="faq12" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                You can contact us via our website, WhatsApp, or email. Share your requirements, and our team will guide you through the next steps.
                                </div>
                            </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

{{-- Form  --}}

@include('components.inquiryForm')

@endsection