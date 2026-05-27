@extends('layouts.app')

@section('content')
    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hero-badge" data-aos="fade-down">
                        <i class="bi bi-cpu-fill" style="color: var(--gradient-blue); font-size: 10px;"></i>
                        <span>AI / ML SERVICES</span>
                    </div>
                    <h1 data-aos="fade-up">Build Intelligent Products with <span class="color-liner-004ED0">AI & Machine Learning</span></h1>
                    <p data-aos="fade-up" data-aos-delay="100">
                        We help you design, develop, and deploy production-ready AI solutions that automate workflows, improve decision-making, and unlock measurable growth.
                    </p>
                    <div class="d-flex align-items-center gap-3" data-aos="fade-up" data-aos-delay="200">
                        <a href="{{ url('/contact') }}" class="btn btn-gradient btn-lg">Book Free Consultation</a>
                        <a href="{{ url('/portfolio') }}" class="btn btn-gray btn-lg">View AI Projects</a>
                    </div>
                </div>
                <div class="col-lg-5 text-center" data-aos="fade-left" data-aos-delay="200">
                    <img src="{{ asset('images/service-hero-img.png') }}" alt="AI ML services" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Core Offerings -->
    <section class="py-5">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title gradient-text">AI/ML Solutions We Deliver</h2>
                <p class="section-subtitle">
                    End-to-end services from strategy to deployment, tailored to your business goals.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="glass-card p-4 h-100">
                        <div class="service-icon mb-3">
                            <i class="bi bi-robot"></i>
                        </div>
                        <h4 class="fw-bold mb-3">AI Assistants & Chatbots</h4>
                        <p class="text-secondary small mb-0">Context-aware assistants for support, operations, and internal knowledge workflows.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="glass-card p-4 h-100">
                        <div class="service-icon mb-3">
                            <i class="bi bi-diagram-3"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Workflow Automation</h4>
                        <p class="text-secondary small mb-0">Automate repetitive business tasks using AI agents and ML-driven process optimization.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                    <div class="glass-card p-4 h-100">
                        <div class="service-icon mb-3">
                            <i class="bi bi-bar-chart-line"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Predictive Analytics</h4>
                        <p class="text-secondary small mb-0">Forecast trends, customer behavior, and business outcomes with ML models.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
                    <div class="glass-card p-4 h-100">
                        <div class="service-icon mb-3">
                            <i class="bi bi-search"></i>
                        </div>
                        <h4 class="fw-bold mb-3">RAG & Knowledge Systems</h4>
                        <p class="text-secondary small mb-0">Enterprise-grade Retrieval-Augmented Generation for reliable, source-based answers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process -->
    <section class="py-5" style="background: var(--bg-overlay);">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title gradient-text">Our AI/ML Delivery Process</h2>
                <p class="section-subtitle">A practical framework that minimizes risk and accelerates value.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                    <div class="glass-card process-card">
                        <div class="process-number">01</div>
                        <div class="process-icon">
                            <i class="bi bi-lightbulb"></i>
                        </div>
                        <h4 class="process-title">Discovery</h4>
                        <p class="process-description">Define use cases, KPIs, data readiness, and implementation roadmap.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="glass-card process-card">
                        <div class="process-number">02</div>
                        <div class="process-icon">
                            <i class="bi bi-database-check"></i>
                        </div>
                        <h4 class="process-title">Data Engineering</h4>
                        <p class="process-description">Prepare, structure, and govern data pipelines for high-quality model outcomes.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="glass-card process-card">
                        <div class="process-number">03</div>
                        <div class="process-icon">
                            <i class="bi bi-cpu"></i>
                        </div>
                        <h4 class="process-title">Model Development</h4>
                        <p class="process-description">Train, evaluate, and validate ML models tailored to your domain.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="glass-card process-card">
                        <div class="process-number">04</div>
                        <div class="process-icon">
                            <i class="bi bi-rocket-takeoff"></i>
                        </div>
                        <h4 class="process-title">Deployment & MLOps</h4>
                        <p class="process-description">Deploy with monitoring, drift detection, and continuous optimization.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5">
        <div class="container">
            <div class="cta-banner" data-aos="fade-up">
                <h2>Ready to Launch Your AI/ML Initiative?</h2>
                <p>Partner with us to build scalable AI systems that create long-term business value.</p>
                <a href="{{ url('/contact') }}" class="btn btn-lg">
                    <i class="bi bi-chat-dots me-2"></i>
                    Talk to an AI Specialist
                </a>
            </div>
        </div>
    </section>
@endsection
