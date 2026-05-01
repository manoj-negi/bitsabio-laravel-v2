@extends('layouts.app')

@section('content')
    
    <section class="page-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 data-aos="fade-up">Enterprise-Grade RAG & LLM Solutions for Intelligent Automation</h1>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Design and deploy AI systems that integrate vector search, real-time data retrieval, and large language models to deliver precise, scalable, and context-aware outputs across your applications.
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
                <img src="{{ asset('images/icons/tech_logo_2 (1) (1).png') }}" alt="tech_logo_2">
            </div>

            <div class="powered-by-icon">
                <img src="{{ asset('images/icons/tech_logo_3 (1).png') }}" alt="tech_logo_3">
            </div>

            <div class="powered-by-icon">
                <img src="{{ asset('images/icons/figma.svg') }}" alt="Figma">
            </div>

            <div class="powered-by-icon">
                <img src="{{ asset('images/icons/tech_logo_7 (1).png') }}" alt="tech_logo_7">
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
        'title' => 'LangChain',
        'desc' => 'Framework for building RAG pipelines, managing prompts, and orchestrating LLM-powered workflows.',
        'image' => 'adobe.svg',
        'delay' => 300
    ],
    [
        'title' => 'TensorFlow & PyTorch',
        'desc' => 'Deep learning frameworks used for training, fine-tuning, and deploying advanced AI and language models.',
        'image' => 'tensorflow (1).svg',
        'delay' => 300
    ],
    [
        'title' => 'LlamaIndex',
        'desc' => 'Data framework for connecting, indexing, and retrieving information from structured and unstructured data sources.',
        'image' => 'solidjs.svg',
        'delay' => 300
    ],
    [
        'title' => 'OpenAI & LLM APIs',
        'desc' => 'Powerful language models for generating intelligent, context-aware responses in real-time applications.',
        'image' => 'zapier (1).svg',
        'delay' => 300
    ],
]
    @endphp
    @php
$services = [
    
    [
        'title' => 'RAG-Based AI Systems',
        'desc' => 'Build intelligent AI systems that combine real-time data retrieval with large language models to generate accurate, context-aware responses.',
        'icon' => 'bi-database',
        'delay' => 300
    ],
    [
        'title' => 'Custom LLM Development',
        'desc' => 'Design and fine-tune large language models tailored to your business needs for smarter automation and decision-making.',
        'icon' => 'bi-cpu',
        'delay' => 300
    ],
    [
        'title' => 'Semantic Search Systems',
        'desc' => 'Implement vector-based search solutions that retrieve highly relevant information using embeddings and advanced retrieval techniques.',
        'icon' => 'bi-search',
        'delay' => 300
    ],
    [
        'title' => 'AI Knowledge Base',
        'desc' => 'Convert your documents, databases, and internal resources into intelligent knowledge systems accessible through natural language queries.',
        'icon' => 'bi-journal-text',
        'delay' => 300
    ],
    [
        'title' => 'Prompt Engineering',
        'desc' => 'Optimize prompts and model interactions to improve response accuracy, consistency, and overall AI performance.',
        'icon' => 'bi-lightbulb',
        'delay' => 300
    ],
    [
        'title' => 'LLM-Powered Automation',
        'desc' => 'Automate complex workflows using AI-driven decision-making powered by large language models.',
        'icon' => 'bi-gear',
        'delay' => 300
    ],
    [
        'title' => 'Vector Database Integration',
        'desc' => 'Integrate vector databases to enable efficient storage, retrieval, and similarity search across large datasets.',
        'icon' => 'bi-server',
        'delay' => 300
    ],
    [
        'title' => 'Conversational AI Assistants',
        'desc' => 'Build advanced AI assistants that understand context and provide intelligent, human-like interactions using RAG and LLM.',
        'icon' => 'bi-chat-dots',
        'delay' => 300
    ],
];
@endphp
<section id="solutions" class="py-5 gradient-bg position-relative">
    <div class="container">

        <div class="section-header" data-aos="fade-up">
            <div class="section-badge">
                <i class="bi bi-robot"></i>
                <span>RAG & LLM Powered</span>
            </div>

            <h2 class="section-title gradient-text">
                Intelligent RAG & LLM Solutions for Data-Driven Businesses
            </h2>

            <p class="section-subtitle">
                Build AI systems that combine real-time data retrieval with advanced language models to deliver accurate, context-aware, and reliable insights at scale.
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
                Explore RAG & LLM Solutions
            </a>
        </div>

    </div>
</section>
        <!-- ========== PROCESS SECTION ========== -->
    <section id="process" class="py-5 my-5" style="background: var(--bg-overlay);">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title gradient-text">Our RAG & LLM Development Process</h2>
                <p class="section-subtitle">A structured approach to building intelligent AI systems that combine real-time data retrieval with powerful language models for accurate and scalable solutions.</p>
            </div>

            <div class="row g-4">
                <!-- Step 1 -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                    <div class="glass-card process-card">
                        <div class="process-icon">
                            <i class="bi bi-lightbulb"></i>
                        </div>
                        <h4 class="process-title">Discovery & Use Case Analysis</h4>
                        <p class="process-description">We identify your business needs, data sources, and AI use cases to design a tailored RAG architecture.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="glass-card process-card">
                        <div class="process-icon">
                            <i class="bi bi-pencil"></i>
                        </div>
                        <h4 class="process-title">Data Processing & Embedding</h4>
                        <p class="process-description">We collect, clean, and convert your data into vector embeddings, enabling efficient semantic search and retrieval.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="glass-card process-card">
                        <div class="process-icon">
                            <i class="bi bi-code-square"></i>
                        </div>
                        <h4 class="process-title">Retrieval & LLM Integration</h4>
                        <p class="process-description">We integrate vector databases with large language models to fetch relevant information and generate context-aware responses.</p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="glass-card process-card">
                        <div class="process-icon">
                            <i class="bi bi-rocket-takeoff"></i>
                        </div>
                        <h4 class="process-title">Deployment & Continuous Optimization</h4>
                        <p class="process-description">We deploy scalable AI systems, monitor performance, and continuously improve accuracy and efficiency.</p>
                    </div>
                </div>
            </div>  
        </div>
    </section>

   <!-- Final CTA -->
    <section class="py-5">
        <div class="container">
            <div class="cta-banner" data-aos="fade-up">
                <h2>Ready to Build Intelligent RAG & LLM Solutions for Your Business?</h2>
                <p>Transform your data into powerful AI systems using Retrieval-Augmented Generation and large language models—delivering accurate, context-aware insights and scalable automation across your workflows.</p>
                <a href="{{url('/contact')}}" class="btn btn-lg">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                   Talk to a RAG & LLM Expert 
                </a>
            </div>
        </div>
    </section>

    <section id="solutions" class="py-5 gradient-bg position-relative">
    <div class="container">

        <div class="section-header" data-aos="fade-up">
            <div class="section-badge">
                <i class="bi bi-robot"></i>
                <span>RAG & LLM Technology Stack</span>
            </div>

            <h2 class="section-title gradient-text">
              Powering RAG & LLM Systems with Advanced AI Infrastructure    
            </h2>
        </div>

        <div class="row g-4 mb-4">

            @foreach($tech as $technology)
                <div class="col-md-6 col-lg-3"
                     data-aos="zoom-in"
                     data-aos-delay="{{ $technology['delay'] }}">

                    <div class="glass-card p-4 h-100">

                    <div class="service-icon icon-clean mb-3">
                        <img src="{{ asset('images/icons/' . $technology['image']) }}" alt="technology" width="40">
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