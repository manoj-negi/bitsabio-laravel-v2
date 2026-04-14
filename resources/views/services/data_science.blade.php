@extends('layouts.app')

@section('content')
    
    <section class="page-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 data-aos="fade-up">Advanced Data Science & Analytics for Modern Businesses</h1>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Leverage advanced analytics, machine learning, and data-driven strategies to uncover patterns, predict trends, and make smarter business decisions.
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
        'desc' => 'Core programming language for data analysis, machine learning, and building scalable data pipelines.',
        'image' => 'adobe.svg',
        'delay' => 300
    ],
    [
        'title' => 'TensorFlow & PyTorch',
        'desc' => 'Leading frameworks for developing, training, and deploying machine learning and deep learning models.',
        'image' => 'tensorflow (1).svg',
        'delay' => 300
    ],
    [
        'title' => 'Pandas & NumPy',
        'desc' => 'Powerful libraries for data manipulation, processing, and numerical computing in analytics workflows.',
        'image' => 'adobe.svg',
        'delay' => 300
    ],
    [
        'title' => 'Power BI / Tableau',
        'desc' => 'Advanced visualization tools for creating interactive dashboards and transforming data into insights.',
        'image' => 'adobe.svg',
        'delay' => 300
    ],
]
    
    @endphp
    @php
$services = [
    [
        'title' => 'Data Analysis',
        'desc' => 'Analyze complex datasets to uncover patterns, trends, and meaningful insights for better decision-making.',
        'icon' => 'bi-bar-chart',
        'delay' => 300
    ],
    [
        'title' => 'Predictive Analytics',
        'desc' => 'Use machine learning models to forecast trends, behaviors, and future outcomes based on historical data.',
        'icon' => 'bi-graph-up-arrow',
        'delay' => 300
    ],
    [
        'title' => 'Data Visualization',
        'desc' => 'Transform data into interactive dashboards and visual reports for clear and actionable insights.',
        'icon' => 'bi-pie-chart',
        'delay' => 300
    ],
    [
        'title' => 'Business Intelligence',
        'desc' => 'Build BI solutions that help organizations monitor performance and make data-driven decisions.',
        'icon' => 'bi-speedometer2',
        'delay' => 300
    ],
    [
        'title' => 'Data Engineering',
        'desc' => 'Design and manage data pipelines to collect, process, and store large-scale structured and unstructured data.',
        'icon' => 'bi-diagram-3',
        'delay' => 300
    ],
    [
        'title' => 'Machine Learning Models',
        'desc' => 'Develop and deploy ML models to automate analysis and improve accuracy in decision-making.',
        'icon' => 'bi-cpu',
        'delay' => 300
    ],
    [
        'title' => 'Real-Time Analytics',
        'desc' => 'Process and analyze streaming data to gain instant insights and respond to events in real time.',
        'icon' => 'bi-lightning',
        'delay' => 300
    ],
    [
        'title' => 'Data-Driven Decision Systems',
        'desc' => 'Implement systems that leverage data insights to optimize business strategies and operations.',
        'icon' => 'bi-gear',
        'delay' => 300
    ],
];
@endphp
<section id="solutions" class="py-5 gradient-bg position-relative">
    <div class="container">

        <div class="section-header" data-aos="fade-up">
            <div class="section-badge">
                <i class="bi bi-robot"></i>
                <span>Data-Driven Solutions</span>
            </div>

            <h2 class="section-title gradient-text">
                 Data Science & Analytics That Drive Business Growth
            </h2>

            <p class="section-subtitle">
               Unlock the power of your data with intelligent analytics, forecasting models, and insights that fuel strategic decision-making.
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
                Explore Data Science Solutions
            </a>
        </div>

    </div>
</section>
        <!-- ========== PROCESS SECTION ========== -->
    <section id="process" class="py-5 my-5" style="background: var(--bg-overlay);">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title gradient-text">Our Data Science & Analytics Process</h2>
                <p class="section-subtitle">A structured, data-driven approach to collect, analyze, and transform data into actionable insights that drive smarter business decisions.</p>
            </div>

            <div class="row g-4">
                <!-- Step 1 -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                    <div class="glass-card process-card">
                        <div class="process-icon">
                            <i class="bi bi-lightbulb"></i>
                        </div>
                        <h4 class="process-title">Data Collection</h4>
                        <p class="process-description">We analyze your data sources, business goals, and key metrics to define a clear analytics strategy.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="glass-card process-card">
                        <div class="process-icon">
                            <i class="bi bi-pencil"></i>
                        </div>
                        <h4 class="process-title">Data Preparation & Processing</h4>
                        <p class="process-description">We clean, organize, and transform raw data into structured formats suitable for analysis and modeling.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="glass-card process-card">
                        <div class="process-icon">
                            <i class="bi bi-code-square"></i>
                        </div>
                        <h4 class="process-title">Analysis & Modeling</h4>
                        <p class="process-description">We apply statistical analysis and machine learning models to uncover patterns, trends, and predictive insights.</p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="glass-card process-card">
                        <div class="process-icon">
                            <i class="bi bi-rocket-takeoff"></i>
                        </div>
                        <h4 class="process-title">Visualization & Optimization</h4>
                        <p class="process-description">We present insights through dashboards and reports, enabling continuous monitoring and data-driven improvements.</p>
                    </div>
                </div>
            </div>  
        </div>
    </section>

   <!-- Final CTA -->
    <section class="py-5">
        <div class="container">
            <div class="cta-banner" data-aos="fade-up">
                <h2>Build Data-Driven Systems That Power Business Outcomes</h2>
                <p>From data pipelines to predictive models and interactive dashboards, we design scalable analytics solutions that convert raw data into actionable intelligence.</p>
                <a href="{{url('/contact')}}" class="btn btn-lg">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                   Build Your Data Solution
                </a>
            </div>
        </div>
    </section>

    <section id="solutions" class="py-5 gradient-bg position-relative">
    <div class="container">

        <div class="section-header" data-aos="fade-up">
            <div class="section-badge">
                <i class="bi bi-robot"></i>
                <span>DATA SCIENCE TECHNOLOGY STACK</span>
            </div>

            <h2 class="section-title gradient-text">
                Powering Data Science & Analytics with Modern Data Infrastructure
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