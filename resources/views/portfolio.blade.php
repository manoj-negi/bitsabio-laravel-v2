@extends('layouts.app')
@section('meta_title', 'BitSabio - Portfolio')

@section('meta_description', 'Explore BitSabio portfolio showcasing successful web development, AI projects, branding, and digital transformation solutions.')
@section('meta_keywords', 'portfolio, web development projects, AI projects, case studies')
@section('og_title', 'BitSabio Portfolio')
@section('og_description', 'Discover our latest projects and success stories.')

@section('content')
    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="hero-badge" data-aos="fade-down">
                        <i class="bi bi-briefcase-fill" style="color: var(--gradient-blue); font-size: 10px;"></i>
                        <span>OUR PORTFOLIO</span>
                    </div>
                    <h1 data-aos="fade-up">Selected Projects That Deliver <span class="color-liner-004ED0">Real Business Impact</span></h1>
                    <p data-aos="fade-up" data-aos-delay="100">
                        From AI products to modern web platforms, we build scalable digital experiences that improve performance, automate workflows, and accelerate growth.
                    </p>
                    <div class="d-flex align-items-center gap-3" data-aos="fade-up" data-aos-delay="200">
                        <a href="{{ url('/contact') }}" class="btn btn-gradient btn-lg">Start Your Project</a>
                        <a href="{{ url('/services') }}" class="btn btn-gray btn-lg">Explore Services</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center" data-aos="fade-left" data-aos-delay="200">
                    <img src="{{ asset('images/trans03.webp') }}" alt="Portfolio showcase" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    
    <!-- Support -->

    <div class="info-lable">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="info-lable-box d-flex align-items-center">
                        <i class="bi bi-patch-check"></i>
                        <div class="ps-3">
                            <h5 class="mb-0">200+ Projects</h5>
                            <p class="m-0">Delivered Worldwide</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info-lable-box d-flex align-items-center">
                        <svg width="" height="" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 19V18C18 15.7909 16.2091 14 14 14H10C7.79086 14 6 15.7909 6 18V19M23 19V18C23 15.7909 21.2091 14 19 14H18.5M1 19V18C1 15.7909 2.79086 14 5 14H5.5M17 11C18.6569 11 20 9.65685 20 8C20 6.34315 18.6569 5 17 5M7 11C5.34315 11 4 9.65685 4 8C4 6.34315 5.34315 5 7 5M15 8C15 9.65685 13.6569 11 12 11C10.3431 11 9 9.65685 9 8C9 6.34315 10.3431 5 12 5C13.6569 5 15 6.34315 15 8Z" stroke="#004ED0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="ps-3">
                            <h5 class="mb-0">50+ Clients</h5>
                            <p class="m-0">Enterprise Partners</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info-lable-box d-flex align-items-center">
                        
                        <svg width="" height="" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title>ionicons-v5-c</title><polyline points="352 144 464 144 464 256" style="fill:none;stroke:#004ED0;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><path d="M48,368,169.37,246.63a32,32,0,0,1,45.26,0l50.74,50.74a32,32,0,0,0,45.26,0L448,160" style="fill:none;stroke:#004ED0;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
                        <div class="ps-3">
                            <h5 class="mb-0">98% Success</h5>
                            <p class="m-0">Client Satisfaction</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info-lable-box d-flex align-items-center">
                        <i class="">
                            <?xml version="1.0" encoding="iso-8859-1"?>
                                <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                <!DOCTYPE svg>
                                <svg fill="#004ED0" height="" width="" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                    viewBox="0 0 476.583 476.583" xml:space="preserve">
                                <g>
                                    <path d="M476.583,262.835c0-32.208-25.811-58.375-57.815-59.259c-2.33-3.642-5.623-6.553-9.505-8.495
                                        c5.14-76.723-61.653-157.01-144.843-167.175c-10.731-1.864-15.576-1.568-26.105-2.29C115.523,29.172,62.645,132.404,67.288,195.135
                                        c-3.851,1.942-7.097,4.829-9.411,8.433C25.841,204.421,0,230.604,0,262.835c0,32.224,25.841,58.407,57.878,59.261
                                        c4.239,6.631,11.632,11.057,20.079,11.057c13.169,0,23.853-10.677,23.853-23.853v-92.935c0-8.045-4.006-15.126-10.109-19.444
                                        c10.295-57.87,62.893-122.232,146.613-123.598c5.063,0.364,15.964,0.278,20.562,1.498c41.649,3.844,111.531,44.663,125.99,122.162
                                        c-6.056,4.325-10.031,11.376-10.031,19.382v92.935c0,10.017,6.18,18.55,14.922,22.091v10.117c0,26.415-17.842,49.594-43.373,56.364
                                        l-72.042,19.078c-3.882-5.148-9.767-8.687-16.74-8.687c-11.787,0-21.353,9.565-21.353,21.352c0,11.803,9.567,21.353,21.353,21.353
                                        c10.855,0,19.428-8.183,20.81-18.644l72.042-19.078c32.502-8.619,55.206-34.948,55.206-81.249
                                        c5.467-1.678,10.095-5.187,13.108-9.909C450.772,321.202,476.583,295.035,476.583,262.835z"/>
                                    <path d="M184.443,293.405h-23.201v-0.256c13.402-11.135,29.63-24.537,29.63-41.953c0-37.783-60.207-27.783-53.888-11.88
                                        c1.724,4.635,6.305,5.933,9.831,4.217c11.213-5.475,24.739-3.161,24.739,9.317c-0.374,13.767-20.546,29.173-36.448,43.561
                                        c-2.392,2.166-3.013,12.889,2.702,12.889h46.635C194.956,309.299,194.956,293.405,184.443,293.405z"/>
                                    <path d="M247.741,309.299c10.343,0,9.147-9.497,9.147-19.706c13.914,0,13.572-14.498,0-14.498v-44.421
                                        c0-2.222-1.802-4.023-4.023-4.023c-25.653,0-14.861-7.663-49.166,47.544c-2.794,4.542-3.354,15.398,2.283,15.398h32.596
                                        C238.578,299.78,237.383,309.299,247.741,309.299z M220.021,275.095v-0.256l11.057-18.052c2.796-5.211,4.969-10.041,7.625-15.382
                                        h0.512c-0.854,12.175-0.636,15.264-0.636,33.69H220.021z"/>
                                    <path d="M278.038,233.33v66.241c0,12.842,19.46,12.897,19.46,0v-26.129h31.913v26.191c0,12.75,19.334,12.796,19.334,0v-66.364
                                        c0-5.343-4.332-9.667-9.659-9.667c-13.278,0-9.675,19.31-9.675,32.93h-31.913V233.33
                                        C297.497,220.432,278.038,220.487,278.038,233.33z"/>
                                </g>
                                </svg>
                        </i>
                        <div class="ps-3">
                            <h5 class="mb-0">24/7 Support</h5>
                            <p class="m-0">Expert Assistance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Projects -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 data-aos="fade-up">Featured Work</h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    A snapshot of outcomes we created for startups and enterprises.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card-compact h-100">
                        <div class="process-icon">
                            <i class="bi bi-robot"></i>
                        </div>
                        <h3>Enterprise AI Assistant</h3>
                        <p>
                            Built a secure RAG-powered assistant for an operations team to search SOPs, policies, and tickets in seconds, reducing manual query handling by 62%.
                        </p>
                        <div class="tech-stack mt-3">
                            <span class="tech-pill">LLM</span>
                            <span class="tech-pill">RAG</span>
                            <span class="tech-pill">Vector DB</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card-compact h-100">
                        <div class="process-icon">
                            <i class="bi bi-cart-check"></i>
                        </div>
                        <h3>Ecommerce Performance Revamp</h3>
                        <p>
                            Rebuilt storefront architecture and checkout flows to improve conversion rate by 34% and cut page load time from 4.2s to 1.7s on mobile.
                        </p>
                        <div class="tech-stack mt-3">
                            <span class="tech-pill">Laravel</span>
                            <span class="tech-pill">API</span>
                            <span class="tech-pill">Core Web Vitals</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card-compact h-100">
                        <div class="process-icon">
                            <i class="bi bi-bar-chart-line"></i>
                        </div>
                        <h3>Real-Time Analytics Dashboard</h3>
                        <p>
                            Delivered an executive dashboard that unified finance, sales, and support data, enabling leadership to make weekly decisions using live KPI alerts.
                        </p>
                        <div class="tech-stack mt-3">
                            <span class="tech-pill">Data Pipelines</span>
                            <span class="tech-pill">BI</span>
                            <span class="tech-pill">Automation</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card-compact h-100">
                        <div class="process-icon">
                            <i class="bi bi-cloud-check"></i>
                        </div>
                        <h3>Cloud Migration & DevOps</h3>
                        <p>
                            Migrated legacy infrastructure to a cloud-native setup with CI/CD and monitoring, improving release frequency and achieving 99.9% uptime.
                        </p>
                        <div class="tech-stack mt-3">
                            <span class="tech-pill">AWS/GCP</span>
                            <span class="tech-pill">CI/CD</span>
                            <span class="tech-pill">Observability</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h3 data-aos="fade-up">Industries We Build For</h3>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    We tailor solutions for high-impact domains where speed, reliability, and intelligence matter.
                </p>
            </div>

            <div class="problem-grid">
                <div class="problem-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon" style="background: var(--gradient-light);">
                        <i class="bi bi-heart-pulse"></i>
                    </div>
                    <h4>Healthcare</h4>
                    <p>Clinical workflows, compliance-friendly products, and automation tools.</p>
                </div>
                <div class="problem-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon" style="background: var(--gradient-light);">
                        <i class="bi bi-bank"></i>
                    </div>
                    <h4>Fintech</h4>
                    <p>Secure transaction systems, analytics, and fraud-aware intelligence layers.</p>
                </div>
                <div class="problem-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon" style="background: var(--gradient-light);">
                        <i class="bi bi-mortarboard"></i>
                    </div>
                    <h4>EdTech</h4>
                    <p>Learning platforms with personalization, engagement analytics, and scale.</p>
                </div>
                <div class="problem-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon" style="background: var(--gradient-light);">
                        <i class="bi bi-building"></i>
                    </div>
                    <h4>SaaS & Enterprise</h4>
                    <p>Platform engineering, process automation, and AI-driven productivity tools.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Main inquiry form  --}}
    @include('components.mainServiceForm')
@endsection
