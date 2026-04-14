@extends('layouts.app')

@section('content')

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 data-aos="fade-up">AI & Digital Services Built for Scale</h1>
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

    <!-- Core AI Services -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <div class="section-badge" data-aos="fade-down">Core AI Capabilities</div>
                <h2 data-aos="fade-up">Intelligent Systems That Scale</h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Enterprise-grade AI solutions designed for production environments
                </p>
            </div>
            
            <div class="service-grid">
               <a href="{{ url('/services/ai') }}" class="service-card-link" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card-compact">
                        <div class="icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <path d="M12 2a3 3 0 0 0-3 3v4a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3z"></path>
                                <path d="M12 9v12"></path>
                                <path d="M18.5 13.5L12 21 5.5 13.5"></path>
                            </svg>
                        </div>
                        <h3>AI & Machine Learning</h3>
                        <p>Build intelligent systems that learn from data and improve decision-making accuracy</p>
                        <span class="view-link">
                            View Details
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </span>
                    </div>
                </a>
                
                 <a href="{{ url('/services/rag_solution') }}" class="service-card-link" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card-compact">
                        <div class="icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path d="M12 1v6m0 6v6"></path>
                                <path d="M17 7l-10 10m0-10l10 10"></path>
                            </svg>
                        </div>
                        <h3>RAG & LLM Solutions</h3>
                        <p>Deploy context-aware AI systems that eliminate hallucinations and provide accurate answers</p>
                        <span class="view-link">
                            View Details
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </span>
                    </div>
                </a>                
                <a href="{{ url('/services/data_science') }}" class="service-card-link" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card-compact">
                        <div class="icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                            </svg>
                        </div>
                        <h3>Data Science & Analytics</h3>
                        <p>Extract insights from complex data and predict trends with advanced analytics</p>
                        <span class="view-link">
                            View Details
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </span>
                    </div>
                </a>
                
                <a href="service-detail.html" class="service-card-link" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card-compact">
                        <div class="icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                        </div>
                        <h3>AI Automation</h3>
                        <p>Streamline workflows and reduce manual tasks with intelligent automation</p>
                        <span class="view-link">
                            View Details
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </span>
                    </div>
                </a>

                <a href="service-detail.html" class="service-card-link" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card-compact">
                        <div class="icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <path d="M4 15a4 4 0 0 1 4-4h1a5 5 0 0 1 10 1h1a3 3 0 0 1 0 6H8a4 4 0 0 1-4-3z"></path>
                            </svg>
                        </div>
                        <h3>Cloud Infrastructure & Scaling</h3>
                        <p>Build and manage scalable cloud systems that handle growth, performance, and high availability</p>
                        <span class="view-link">
                            View Details
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </span>
                    </div>
                </a>

            <a href="service-detail.html" class="service-card-link" data-aos="fade-up" data-aos-delay="600">
                <div class="service-card-compact">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M6 9l-4 3 4 3"></path>
                            <path d="M18 9l4 3-4 3"></path>
                            <path d="M14 4l-4 16"></path>
                        </svg>
                    </div>
                    <h3>Backend Systems & APIs</h3>
                    <p>Design robust backend architectures and APIs that power scalable and high-performance applications</p>
                    <span class="view-link">
                        View Details
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </span>
                </div>
            </a>
            </div>
        </div>
    </section>

    <!-- Engineering Services -->
    <section class="py-5" style="background-color: var(--color-surface);">
        <div class="container">
            <div class="text-center mb-5">
                <div class="section-badge badge-purple" data-aos="fade-down">Digital Engineering</div>
                <h2 data-aos="fade-up">End-to-End Development</h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    From concept to deployment, we build products that users love
                </p>
            </div>
            
            <div class="service-grid">
                <div class="service-card-compact" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                    </div>
                    <h3>AI Web Applications</h3>
                    <p>Modern web apps powered by AI with seamless UX and scalable architecture</p>
                    <span class="view-link">
                        View Details
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </span>
                </div>
                
                <div class="service-card-compact" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                            <line x1="12" y1="18" x2="12.01" y2="18"></line>
                        </svg>
                    </div>
                    <h3>Mobile App Development</h3>
                    <p>Native and cross-platform mobile apps with AI capabilities built-in</p>
                    <span class="view-link">
                        View Details
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </span>
                </div>
                
                <div class="service-card-compact" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path d="M12 1v6m0 6v6M5.64 5.64l4.24 4.24m4.24 4.24l4.24 4.24M1 12h6m6 0h6M5.64 18.36l4.24-4.24m4.24-4.24l4.24-4.24"></path>
                        </svg>
                    </div>
                    <h3>UI/UX for AI Products</h3>
                    <p>Human-centered design that makes complex AI simple and intuitive</p>
                    <span class="view-link">
                        View Details
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </span>
                </div>
                
                <div class="service-card-compact" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <h3>Cloud Deployment</h3>
                    <p>Secure, scalable infrastructure on AWS, GCP, or Azure with MLOps pipelines</p>
                    <span class="view-link">
                        View Details
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </span>
                </div>

                <!-- API Development Card  -->
            <div class="service-card-compact" data-aos="fade-up" data-aos-delay="300">
                <div class="icon">
                    <svg width="24" height="24" fill="none" stroke="white" stroke-width="2">
                        <path d="M16 3h5v5"></path>
                        <path d="M8 21H3v-5"></path>
                        <line x1="21" y1="3" x2="14" y2="10"></line>
                        <line x1="3" y1="21" x2="10" y2="14"></line>
                    </svg>
                </div>
                <h3>API Development</h3>
                <p>Robust REST & GraphQL APIs with seamless third-party integrations</p>
                <span class="view-link">View Details →</span>
            </div>

            <!-- AI ChatbotS Card  -->
            <div class="service-card-compact" data-aos="fade-up" data-aos-delay="400">
                <div class="icon">
                    <svg width="24" height="24" fill="none" stroke="white" stroke-width="2">
                        <path d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"></path>
                    </svg>
                </div>
                <h3>AI Chatbots</h3>
                <p>Smart chatbots & automation tools to enhance customer engagement</p>
                <span class="view-link">View Details →</span>
            </div>

            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 data-aos="fade-up">Why Choose Us</h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    We deliver AI solutions that actually work in production
                </p>
            </div>
            
            <div class="feature-highlight">
                <div class="feature-card-horizontal" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polygon points="10 8 16 12 10 16 10 8"></polygon>
                        </svg>
                    </div>
                    <div>
                        <h4>Production-Ready AI</h4>
                        <p>Not just demos—we build systems that handle real-world complexity and scale</p>
                    </div>
                </div>
                
                <div class="feature-card-horizontal" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4>Secure Systems</h4>
                        <p>Enterprise-grade security with SOC 2 compliance and data privacy controls</p>
                    </div>
                </div>
                
                <div class="feature-card-horizontal" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg>
                    </div>
                    <div>
                        <h4>Scalable Architecture</h4>
                        <p>Built to grow from MVP to millions of users without major rewrites</p>
                    </div>
                </div>
                
                <div class="feature-card-horizontal" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                    </div>
                    <div>
                        <h4>Business-First Approach</h4>
                        <p>We focus on ROI, not just technology—measurable results that drive growth</p>
                    </div>
                </div>

                <div class="feature-card-horizontal" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="5" cy="12" r="2"></circle>
                            <circle cx="12" cy="12" r="2"></circle>
                            <circle cx="19" cy="12" r="2"></circle>
                            <line x1="7" y1="12" x2="10" y2="12"></line>
                            <line x1="14" y1="12" x2="17" y2="12"></line>
                        </svg>
                    </div>
                    <div>
                        <h4>End-to-End AI Development</h4>
                        <p>From idea to deployment—we handle everything including data, models, APIs, and scaling.</p>
                    </div>
                </div>

                <div class="feature-card-horizontal" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="9"></circle>
                            <polyline points="12 7 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <div>
                        <h4>Real-Time Processing</h4>
                        <p>Process and analyze data instantly with real-time AI systems for faster decision-making.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-5">
        <div class="container">
            <div class="cta-banner" data-aos="fade-up">
                <h2>Not sure which service fits your needs?</h2>
                <p>Let's discuss your challenges and find the right AI solution for your business</p>
                <a href="{{url('/contact')}}" class="btn btn-lg">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                    Talk to an AI Expert
                </a>
            </div>
        </div>
    </section>
@endsection
   

