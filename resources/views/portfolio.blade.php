@extends('layouts.app')

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
                    <img src="{{ asset('images/trans03.png') }}" alt="Portfolio showcase" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="glass-card p-4 h-100">
                        <h3 class="gradient-text mb-1">200+</h3>
                        <p class="mb-0 text-secondary">Projects Delivered</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="glass-card p-4 h-100">
                        <h3 class="gradient-text mb-1">50+</h3>
                        <p class="mb-0 text-secondary">Global Clients</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="glass-card p-4 h-100">
                        <h3 class="gradient-text mb-1">98%</h3>
                        <p class="mb-0 text-secondary">Client Satisfaction</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="glass-card p-4 h-100">
                        <h3 class="gradient-text mb-1">24/7</h3>
                        <p class="mb-0 text-secondary">Delivery Support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects -->
    <section class="py-5" style="background-color: var(--color-surface-light);">
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
                        <div class="icon">
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
                        <div class="icon">
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
                        <div class="icon">
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
                        <div class="icon">
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
                <h2 data-aos="fade-up">Industries We Build For</h2>
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

    <!-- CTA -->
    <section class="py-5">
        <div class="container">
            <div class="cta-banner" data-aos="fade-up">
                <h2>Have a Project in Mind?</h2>
                <p>Let us design and deliver your next AI-powered product with speed, quality, and measurable outcomes.</p>
                <a href="{{ url('/contact') }}" class="btn btn-lg">
                    <i class="bi bi-chat-dots me-2"></i>
                    Talk to Our Team
                </a>
            </div>
        </div>
    </section>
@endsection
