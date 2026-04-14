@extends('layouts.app')

@section('content')
    
    <section class="page-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 data-aos="fade-up">Turning Your Ideas into Intelligent, AI-Powered Web Experiences</h1>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Transform your business with production-ready AI solutions that deliver measurable results
                    </p>
                    <a href="{{url('/contact')}}" class="btn btn-gradient btn-lg" data-aos="fade-up" data-aos-delay="200">
                        Book Free Consultation
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== TRUST SIGNALS ========== -->
 <section class="py-5">
    <div class="container">
        <p class="text-center text-secondary mb-5">Powered by Modern Technologies</p>

        <div class="autoplay powered-by">

            <div class="powered-by-icon">
                <img src="{{ asset('images/icons/aws (1).svg') }}" alt="AWS">
            </div>

            <div class="powered-by-icon">
                <img src="{{ asset('images/icons/bootstrap (1).svg') }}" alt="Bootstrap">
            </div>

            <div class="powered-by-icon">
                <img src="{{ asset('images/icons/laravel (1).svg') }}" alt="Laravel">
            </div>

            <div class="powered-by-icon">
                <img src="{{ asset('images/icons/adobe.svg') }}" alt="Adobe">
            </div>

            <div class="powered-by-icon">
                <img src="{{ asset('images/icons/astro-icon-dark.svg') }}" alt="Astro">
            </div>

            <div class="powered-by-icon">
                <img src="{{ asset('images/icons/solidjs.svg') }}" alt="SolidJS">
            </div>

            <div class="powered-by-icon">
                <img src="{{ asset('images/icons/svelte.svg') }}" alt="Svelte">
            </div>

            <div class="powered-by-icon">
                <img src="{{ asset('images/icons/mailchimp (1).svg') }}" alt="Mailchimp">
            </div>

            <div class="powered-by-icon">
                <img src="{{ asset('images/icons/mongodb (1).svg') }}" alt="MongoDB">
            </div>

            <div class="powered-by-icon">
                <img src="{{ asset('images/icons/nodejs (1).svg') }}" alt="NodeJS">
            </div>

            <div class="powered-by-icon">
                <img src="{{ asset('images/icons/react.svg') }}" alt="React">
            </div>

            <div class="powered-by-icon">
                <img src="{{ asset('images/icons/tailwind-css (1).svg') }}" alt="Tailwind">
            </div>

            <div class="powered-by-icon">
                <img src="{{ asset('images/icons/blender.svg') }}" alt="Blender">
            </div>

            <div class="powered-by-icon">
                <img src="{{ asset('images/icons/tech_logo_2 (1) (1).png') }}" alt="">
            </div>

            <div class="powered-by-icon">
                <img src="{{ asset('images/icons/tech_logo_3 (1).png') }}" alt="">
            </div>

            <div class="powered-by-icon">
                <img src="{{ asset('images/icons/figma.svg') }}" alt="Figma">
            </div>

            <div class="powered-by-icon">
                <img src="{{ asset('images/icons/tech_logo_7 (1).png') }}" alt="">
            </div>

            <div class="powered-by-icon">
                <img src="{{ asset('images/icons/tensorflow (1).svg') }}" alt="TensorFlow">
            </div>

            <div class="powered-by-icon">
                <img src="{{ asset('images/icons/zapier (1).svg') }}" alt="Zapier">
            </div>

        </div>
    </div>
</section>
    @php
    $tech = [
            [
                'title' => 'Python',
                'desc' => '  Python is the backbone of AI development, powering machine learning, deep learning, and data-driven applications using powerful libraries.',
                'image' => 'adobe.svg',
                'delay' => 300
            ],
            [
                'title' => 'TensorFlow & PyTorch',
                'desc' => ' We use advanced deep learning frameworks like TensorFlow and PyTorch to build neural networks and intelligent AI models.',
                'image' => 'tensorflow (1).svg',
                'delay' => 300
            ],
               [
                'title' => 'Natural Language Processing',
                'desc' => ' Build chatbots and AI assistants that understand and respond to human language using NLP techniques and models.',
                'image' => 'solidjs.svg',
                'delay' => 300
            ],   [
                'title' => 'Data Science',
                'desc' => ' Transform raw data into actionable insights using data analysis, visualization, and machine learning techniques.',
                'image' => 'zapier (1).svg',
                'delay' => 300
            ],

    ]
    @endphp
    @php
$services = [
    [
        'title' => 'AI Chatbots',
        'desc' => '24/7 intelligent customer support that understands context and provides accurate responses.',
        'icon' => 'bi-robot',
        'delay' => 300
    ],
    [
        'title' => 'AI Content Generation',
        'desc' => 'reate high-quality blogs, product descriptions, and marketing content instantly using advanced generative AI models.',
        'icon' => 'bi-chat-square-text',
        'delay' => 300
    ],
    [
        'title' => 'Data Analytics',
        'desc' => 'Transform raw data into actionable insights with AI-powered analytics and reporting.',
        'icon' => 'bi-bar-chart',
        'delay' => 300
    ],
    [
        'title' => 'Process Automation',
        'desc' => 'Automate repetitive tasks and workflows to save time and reduce operational costs.',
        'icon' => 'bi-diagram-3',
        'delay' => 300
    ],
    [
        'title' => 'AI Process Automation ',
        'desc' => 'Build intelligent systems that understand, interpret, and respond to human language in real time.',
        'icon' => 'bi-gear',
        'delay' => 300
    ],
    [
        'title' => 'AI Recommendations',
        'desc' => 'Deliver personalized recommendations to users based on behavior, preferences, and real-time data insights.',
        'icon' => 'bi-stars',
        'delay' => 300
    ],
       [
        'title' => 'Computer Vision',
        'desc' => 'Analyze images and videos using AI for object detection, facial recognition, and visual data processing.',
        'icon' => 'bi-camera',
        'delay' => 300
    ],
       [
        'title' => 'Natural Language Processing ',
        'desc' => 'Build intelligent systems that understand, interpret, and respond to human language in real time.',
        'icon' => 'bi-graph-up',
        'delay' => 300
    ],
];
@endphp
<section id="solutions" class="py-5 gradient-bg position-relative">
    <div class="container">

        <div class="section-header" data-aos="fade-up">
            <div class="section-badge">
                <i class="bi bi-robot"></i>
                <span>AI-Powered</span>
            </div>

            <h2 class="section-title gradient-text">
                Transformative AI Solutions for Modern Businesses
            </h2>

            <p class="section-subtitle">
                Build intelligent systems that automate workflows and elevate user experiences
            </p>
        </div>

        <div class="row g-4 mb-4">

            @foreach($services as $service)
                <div class="col-md-6 col-lg-3"
                     data-aos="zoom-in"
                     data-aos-delay="{{ $service['delay'] }}">

                    <div class="glass-card p-4 h-100">

                        <div class="service-icon mb-3">
                            <i class="bi {{ $service['icon'] }}"></i>
                        </div>

                        <h4 class="fw-bold mb-3">
                            {{ $service['title'] }}
                        </h4>

                        <p class="text-secondary small">
                            {{ $service['desc'] }}
                        </p>

                    </div>
                </div>
            @endforeach

        </div>

        <div class="text-center" data-aos="fade-up">
            <a href="#contact" class="btn btn-gradient">
                Explore AI Solutions
            </a>
        </div>

    </div>
</section>
        <!-- ========== PROCESS SECTION ========== -->
    <section id="process" class="py-5 my-5" style="background: var(--bg-overlay);">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title gradient-text">Our AI Development Process</h2>
                <p class="section-subtitle"> A structured, AI-first approach to design, build, and scale intelligent solutions that drive real business impact.</p>
            </div>

            <div class="row g-4">
                <!-- Step 1 -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                    <div class="glass-card process-card">
                        <div class="process-icon">
                            <i class="bi bi-lightbulb"></i>
                        </div>
                        <h4 class="process-title">Discovery & Strategy</h4>
                        <p class="process-description">We analyze your goals, target audience, and market to create a data-driven strategy.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="glass-card process-card">
                        <div class="process-icon">
                            <i class="bi bi-pencil"></i>
                        </div>
                        <h4 class="process-title">Design & Prototype</h4>
                        <p class="process-description">Beautiful, user-centered designs that align with your brand and convert visitors.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="glass-card process-card">
                        <div class="process-icon">
                            <i class="bi bi-code-square"></i>
                        </div>
                        <h4 class="process-title">Development & Testing</h4>
                        <p class="process-description">Clean, scalable code built with best practices, rigorously tested for quality.</p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="glass-card process-card">
                        <div class="process-icon">
                            <i class="bi bi-rocket-takeoff"></i>
                        </div>
                        <h4 class="process-title">Launch & Optimization</h4>
                        <p class="process-description">Smooth deployment with ongoing support, monitoring, and continuous improvements.</p>
                    </div>
                </div>
            </div>  
        </div>
    </section>

   <!-- Final CTA -->
    <section class="py-5">
        <div class="container">
            <div class="cta-banner" data-aos="fade-up">
                <h2>Looking to build powerful AI solutions for your business?</h2>
                <p>  From AI chatbots to intelligent automation and data-driven insights, 
      we help you design and deploy scalable AI systems tailored to your needs.</p>
                <a href="{{url('/contact')}}" class="btn btn-lg">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                    Talk to an AI Expert
                </a>
            </div>
        </div>
    </section>

    <section id="solutions" class="py-5 gradient-bg position-relative">
    <div class="container">

        <div class="section-header" data-aos="fade-up">
            <div class="section-badge">
                <i class="bi bi-robot"></i>
                <span>AI TECHNOLOGY STACK</span>
            </div>

            <h2 class="section-title gradient-text">
                We use AI, modern tools, and cloud platforms to create smart and scalable solutions.
            </h2>
        </div>

        <div class="row g-4 mb-4">

            @foreach($tech as $technology)
                <div class="col-md-6 col-lg-3"
                     data-aos="zoom-in"
                     data-aos-delay="{{ $technology['delay'] }}">

                    <div class="glass-card p-4 h-100">

                    <div class="service-icon icon-clean mb-3">
                        <img src="{{ asset('images/icons/' . $technology['image']) }}" alt="" width="40">
                    </div>

                        <h4 class="fw-bold mb-3">
                            {{ $technology['title'] }}
                        </h4>

                        <p class="text-secondary small">
                            {{ $technology['desc'] }}
                        </p>

                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>
    
@endsection