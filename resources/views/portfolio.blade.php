@extends('layouts.app')
@section('meta_title', 'BitSabio - Portfolio')

@section('meta_description', 'Explore BitSabio portfolio showcasing successful web development, AI projects, branding, and digital transformation solutions.')
@section('meta_keywords', 'portfolio, web development projects, AI projects, case studies')
@section('og_title', 'BitSabio Portfolio')
@section('og_description', 'Discover our latest projects and success stories.')

@section('content')
      <!-- ========== HERO SECTION ========== -->
    <section class="page-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hero-badge aos-init aos-animate" data-aos="fade-down">
                        <i class="bi bi-briefcase-fill" style="color: var(--gradient-blue); font-size: 10px;"></i>
                        <span>OUR PORTFOLIO</span>
                    </div>
                    <h1 data-aos="fade-up" class="aos-init aos-animate">Products Built For <span class="color-liner-004ED0">Real Businesses & Real Users</span></h1>
                    <p data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                        We turn complex business challenges into high-performing mobile solutions. Over 50+ projects delivered for global enterprises.
                    </p>
                    <div class="d-flex align-items-center gap-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <a href="{{route('contact')}}" class="btn btn-gradient btn-lg">Start Your Project</a>
                        <a href="{{route('services')}}" class="btn btn-gray btn-lg">Explore Services</a>
                    </div>
                </div>
                <div class="col-lg-5 text-center aos-init aos-animate" data-aos="fade-left" data-aos-delay="200">
                    <img src="./images/trans03.webp" alt="Portfolio showcase" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- ========== TRUST SIGNALS ========== -->
    <section class="py-5" style="background: var(--bg-overlay); backdrop-filter: blur(10px); border-top: 1px solid var(--glass-border); border-bottom: 1px solid var(--glass-border);">
        <div class="container">
            <p class="text-center text-secondary mb-4">Trusted by innovative companies worldwide</p>
            <div class="row g-4">
                <div class="col-6 col-md-2 text-center" data-aos="fade-up" data-aos-delay="0">
                    <h5 class="text-secondary">Company A</h5>
                </div>
                <div class="col-6 col-md-2 text-center" data-aos="fade-up" data-aos-delay="100">
                    <h5 class="text-secondary">Company B</h5>
                </div>
                <div class="col-6 col-md-2 text-center" data-aos="fade-up" data-aos-delay="200">
                    <h5 class="text-secondary">Company C</h5>
                </div>
                <div class="col-6 col-md-2 text-center" data-aos="fade-up" data-aos-delay="300">
                    <h5 class="text-secondary">Company D</h5>
                </div>
                <div class="col-6 col-md-2 text-center" data-aos="fade-up" data-aos-delay="400">
                    <h5 class="text-secondary">Company E</h5>
                </div>
                <div class="col-6 col-md-2 text-center" data-aos="fade-up" data-aos-delay="500">
                    <h5 class="text-secondary">Company F</h5>
                </div>
            </div>
        </div>
    </section>

 <!-- ========== Focus on the Outcomes that Matter ========== -->
<section class="py-5">
    <div class="section-header aos-init aos-animate" data-aos="fade-up">
        <h3 class="section-title gradient-text">Focus on the Outcomes that Matter</h3>
        <p class="section-subtitle">We don't just build apps<br/> we build engines for business success and user delight.</p>
    </div>
    <div class="container">
        <div class="row">
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="0">
                    <div class="glass-card p-4 h-100">
                        <div class="service-icon mb-3">
                            <i class="bi bi-robot"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Improved User Engagement</h4>
                        <p class="text-secondary small">Crafting interfaces that keep users coming back through intuitive design and sticky features.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="0">
                    <div class="glass-card p-4 h-100">
                        <div class="service-icon mb-3">
                            <i class="bi bi-robot"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Faster Operations</h4>
                        <p class="text-secondary small">Automating workflows to save significant time and reduce operational overhead for your team.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="0">
                    <div class="glass-card p-4 h-100">
                        <div class="service-icon mb-3">
                            <i class="bi bi-robot"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Better Customer Experience</h4>
                        <p class="text-secondary small">Seamless, friction-free journeys that build enduring brand loyalty and positive word-of-mouth.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="0">
                    <div class="glass-card p-4 h-100">
                        <div class="service-icon mb-3">
                            <i class="bi bi-robot"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Increased Revenue</h4>
                        <p class="text-secondary small">Smart monetization strategies and conversion optimization that drive measurable bottom-line growth.</p>
                    </div>
                </div>
        
        </div>
    </div>
</section>

<!-- ==========  Case Study ========== -->

<section class="py-5 case-study">
<div class="container">
    <div class="mb-5">
        <div class="row align-items-end">
            <div class="col-md-7">
                <div class="">
                    <h2 data-aos="fade-up" class="aos-init aos-animate">Selected Case Studies</h2>
                    <p class="section-subtitle aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        We don't just build software; we architect the digital future of your enterprise through precision engineering and advanced intelligence.
                    </p>
                </div>
            </div>
            {{-- <div class="col-md-5">
                <div class="text-end">
                    <a class="view-link">
                        View All Projects
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>

            </div> --}}
        </div>
    </div>
    <!-- project 1 -->
    <div class="row mb-5">
        @foreach ($portfolios as $portfolio)
            
        <div class="col-md-6">
            <div>
                <h3 class="mb-4">{{$portfolio->title}}</h3>
                <div>
                    <h6 class="color-gradient-blue">THE PROBLEM</h6>
                    <p>{{$portfolio->problem_description}}</p>
                </div>
                <div>
                    <h6 class="color-gradient-blue">OUR SOLUTION</h6>
                    <p>{{$portfolio->solution_description}}</p>
                </div>
                <div class="mb-4">
                    @foreach($portfolio->technologies as $technology)
                        <span class="badge-portfolio">{{ $technology }}</span>
                    @endforeach
                    {{-- <span class="badge-portfolio">Node.js</span>
                    <span class="badge-portfolio">AWS</span> --}}
                </div>
                

                <div class="stat-card mt-5">
                    <div class="stat-content">
                        <h4 class="mb-2">{{$portfolio->result_title}}</h4>
                        <p class="mb-0">{{$portfolio->result_description}}</p>
                    </div>
                </div>
            </div>         
        </div>
        <div class="col-md-6">
            <img src="./images/slide3.jpg"  alt="Portfolio showcase" class="img-fluid">
              {{-- <img src="{{$portfolio->image}}" alt=""> --}}
        </div>
        @endforeach

    </div>
<!-- Project 2 -->
 <div class="row mb-5">
        <div class="col-md-6">
            <img src="./images/data-science.jpg" alt="Portfolio showcase" class="img-fluid">
        </div>
        <div class="col-md-6">
            <div>
                <h3 class="mb-4">Medewerker</h3>
                <div>
                    <h6 class="color-gradient-blue">THE PROBLEM</h6>
                    <p>Inconsistent internal communication and fragmented employee tools leading to low engagement in enterprise environments.</p>
                </div>
                <div>
                    <h6 class="color-gradient-blue">OUR SOLUTION</h6>
                    <p>Developed a unified employee portal app with real-time notifications, task management, and seamless legacy system integration.</p>
                </div>
                <div class="mb-4">
                    <span class="badge-portfolio">Flutter</span>
                    <span class="badge-portfolio">GraphQL</span>
                    <span class="badge-portfolio">Firebase</span>
                </div>
                

                <div class="stat-card mt-5">
                    <div class="stat-content">
                        <h4 class="mb-2">35% Increase</h4>
                        <p class="mb-0">In transaction throughput during national sales events.</p>
                    </div>
                </div>
            </div>         
        </div>
    </div>
</div>
</section>
   
<!-- ==========  Our End-to-End Expertise ========== -->

<section class="e2e-expertise py-60">
    <div class="container">
        <div class="section-header aos-init aos-animate" data-aos="fade-up">
            <h3 class="text-white">Our End-to-End Expertise</h3>
            <p class="color-BEC6E0">From concept to deployment, we provide the full stack of services to scale your mobile product.</p>
        </div>
        <div class="row g-3">
            <div class="col-md-4">
                <div class="dark-card h-100">
                    <div class="process-icon">
                        <i class="bi bi-phone"></i>
                    </div>
                    <h4 class="text-white">Mobile App Development</h4>
                    <p class="color-BEC6E0 mb-0">
                        Native iOS and Android excellence using Swift and Kotlin for high-performance applications.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dark-card h-100">
                    <div class="process-icon">
                        <i class="bi bi-window-dock"></i>
                    </div>
                    <h4 class="text-white">Cross Platform</h4>
                    <p class="color-BEC6E0 mb-0">
                        Leveraging Flutter and React Native to deliver consistent experiences across platforms from a single codebase.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dark-card h-100">
                    <div class="process-icon">
                        <i class="bi bi-palette"></i>
                    </div>
                    <h4 class="text-white">UI/UX Design</h4>
                    <p class="color-BEC6E0 mb-0">
                        User-centric design focused on accessibility, aesthetics, and high conversion rate optimization.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dark-card h-100">
                    <div class="process-icon">
                        <i class="bi bi-cloud"></i>
                    </div>
                    <h4 class="text-white">Cloud Infrastructure</h4>
                    <p class="color-BEC6E0 mb-0">
                        Scalable AWS and Google Cloud architectures designed to grow with your user base.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dark-card h-100">
                    <div class="process-icon">
                        <i class="bi bi-x-diamond"></i>
                    </div>
                    <h4 class="text-white">API Development</h4>
                    <p class="color-BEC6E0 mb-0">
                        Robust, secure, and fast REST and GraphQL APIs to power your mobile frontend.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dark-card h-100">
                    <div class="process-icon">
                        <i class="bi bi-code-square"></i>
                    </div>
                    <h4 class="text-white">DevOps</h4>
                    <p class="color-BEC6E0 mb-0">
                        Automated CI/CD pipelines ensuring fast deployment and maximum system uptime.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========  Built for Long-Term Success ========== -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="">
                        <h3 class="mb-4 aos-init aos-animate" data-aos="fade-up">Built for Long-Term Success</h3>
                        <div class="h-100">
                            <div class="innovators-card aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div>
                                    <h5>Dedicated Team</h5>
                                    <p>Assigned specialists who integrate with your vision, ensuring project continuity and focus.</p>
                                </div>
                            </div>
                        </div>

                        <div class="h-100">
                            <div class="innovators-card aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon">
                                    <i class="bi bi-eye"></i>
                                </div>
                                <div>
                                    <h5>Transparent Process</h5>
                                    <p>Weekly sprints, live demos, and open communication channels so you always know where we stand.</p>
                                </div>
                            </div>
                        </div>

                        <div class="h-100">
                            <div class="innovators-card aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon">
                                    <i class="bi bi-rocket"></i>
                                </div>
                                <div>
                                    <h5>Fast Delivery</h5>
                                    <p>Optimized development cycles that focus on getting your MVP to market rapidly without sacrificing quality.</p>
                                </div>
                            </div>
                        </div>

                        <div class="h-100">
                            <div class="innovators-card aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon">
                                   <i class="bi bi-headset"></i>
                                </div>
                                <div>
                                    <h5>Post Launch Support</h5>
                                    <p>Long-term maintenance and scaling support to ensure your app stays performant as you grow.</p>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="col-md-6">
                    <img src="./images/edu-home2.jpg" alt="trans03">
                </div>
            </div>

            
        </div>
    </section>
@endsection
