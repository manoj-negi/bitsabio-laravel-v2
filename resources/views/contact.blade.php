@extends('layouts.app')

@section('content')

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 data-aos="fade-up">Let's Build Something Intelligent</h1>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Schedule a free consultation to discuss your AI project and explore solutions
                    </p>
                </div>
            </div>  
        </div>
    </section>

    <!-- Contact Options -->
    <section class="py-5">
        <div class="container">
            <div class="contact-options">
                <div class="contact-option-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </div>
                    <h3>Free Consultation</h3>
                    <p>30-minute strategy session to discuss your AI goals and potential solutions</p>
                </div>
                
                <div class="contact-option-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                    </div>
                    <h3>AI Project Discussion</h3>
                    <p>Technical deep-dive into requirements, architecture, and implementation roadmap</p>
                </div>
                
                <div class="contact-option-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3>Enterprise Inquiry</h3>
                    <p>Custom solutions for large-scale deployments with dedicated support teams</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="py-5" style="background-color: var(--color-surface);">
        <div class="container">
            <div class="">
                <h2 class="text-center mb-4">Send Us a Message</h2>


                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="feature-highlight" data-aos="fade-up" data-aos-delay="100">
                            <div class="feature-card-horizontal">
                                <div class="icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                </div>
                                <div>
                                    <h4>Email</h4>
                                    <p>contact@aidatalab.com</p>
                                </div>
                            </div>
                            
                            <div class="feature-card-horizontal">
                                <div class="icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                        <rect x="2" y="9" width="4" height="12"></rect>
                                        <circle cx="4" cy="4" r="2"></circle>
                                    </svg>
                                </div>
                                <div>
                                    <h4>LinkedIn</h4>
                                    <p>Connect with our team</p>
                                </div>
                            </div>
                            
                            <div class="feature-card-horizontal">
                                <div class="icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4>GitHub</h4>
                                    <p>Explore our open source projects</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contact-form-container" data-aos="fade-up">
                                    <!-- <form id="contactForm"> -->
                                <!-- @if(session('success'))
                        <div style="background: #28a745; color: white; padding: 12px; margin-bottom: 15px; border-radius: 5px;">
                            {{ session('success') }}
                        </div>
                        @endif -->

                        @if(session('success'))
                            <script>
                                document.addEventListener("readystatechange", function () {
                                    if (document.readyState === "interactive") {
                                        var modal = new bootstrap.Modal(document.getElementById('successModal'));
                                        modal.show();
                                    }
                                });
                            </script>
                        @endif
                            <form method="POST" action="/contact" class="needs-validation" novalidate>
                                @csrf

                                <!-- Name -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name *</label>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                    <div class="invalid-feedback">
                                        Please enter your name
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email" name="email" id="email" class="form-control" required>
                                    <div class="invalid-feedback">
                                        Please enter a valid email
                                    </div>
                                </div>

                                <!-- Company -->
                                <div class="mb-3">
                                    <label for="company" class="form-label">Company</label>
                                    <input type="text" name="company" id="company" class="form-control">
                                </div>

                                <!-- Project Type -->
                                <div class="mb-3">
                                    <label for="projectType" class="form-label">Project Type *</label>
                                    <select id="projectType" name="project_type" class="form-select" required>
                                        <option value="" selected disabled hidden>Select a service</option>
                                        <option value="ai-ml">AI & Machine Learning</option>
                                        <option value="rag">RAG Solutions</option>
                                        <option value="devops">DevOps</option>
                                        <option value="data-science">Data Science</option>
                                        <option value="automation">AI Automation</option>
                                        <option value="web-app">Web Application</option>
                                        <option value="mobile-app">Mobile App</option>
                                        <option value="mlops">MLOps & Deployment</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a service
                                    </div>
                                </div>

                                <!-- Message -->
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message *</label>
                                    <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
                                    <div class="invalid-feedback">
                                        Please enter your message
                                    </div>
                                </div>

                                <!-- Submit -->
                                    <button type="submit" name="sendmessage" class="form-submit" id="submitBtn">

                                        <span id="btnText">Send Message</span>

                                        <!-- ICON separate -->
                                        <span id="btnIcon">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <line x1="22" y1="2" x2="11" y2="13"></line>
                                                <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                            </svg>
                                        </span>

                                        <!-- LOADER -->
                                        <span id="btnLoader" class="spinner-border spinner-border-sm ms-2 d-none" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </span>

                                    </button>
                            </form>


                        
                    </div>
                    </div>
                    <div class="trust-indicators">
                            <div class="trust-item">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                <span>24-hour response</span>
                            </div>
                            
                            <div class="trust-item">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                </svg>
                                <span>NDA available</span>
                            </div>
                            
                            <div class="trust-item">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                                <span>Free consultation</span>
                            </div>
                        </div>
                </div>
                
             
            </div>
        </div>

                    <!-- Sucess Modal  -->
            <div class="modal fade" id="successModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center p-4 rounded-4">

                <!-- Close button -->
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal"></button>

                <!-- Icon -->
                <div class="mx-auto mb-3 d-flex align-items-center justify-content-center"
                    style="width:70px;height:70px;background:#28a745;border-radius:50%;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3">
                    <polyline points="5 13 9 17 19 7"></polyline>
                    </svg>
                </div>

                <!-- Title -->
                <h4 class="fw-bold">Success</h4>

                <!-- Message -->
                <p class="text-muted">
                    {{ session('success') ?? 'Your message has been sent successfully.' }}
                </p>

                <!-- Button -->
                <div class="d-flex justify-content-center mt-3">
                    <button 
                        class="btn btn-success rounded-pill px-4 py-2" style="width: auto;" data-bs-dismiss="modal"
                        >
                        OK
                    </button>
                </div>

                </div>
            </div>
            </div>

    </section>

    <!-- FAQ / Common Questions -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-center mb-5" data-aos="fade-up">Frequently Asked Questions</h2>
                    
                    <div class="problem-grid">
                        <div class="problem-card" data-aos="fade-up" data-aos-delay="100">
                            <h4>What's the typical project timeline?</h4>
                            <p>MVPs typically take 4-8 weeks. Full production systems range from 3-6 months depending on complexity.</p>
                        </div>
                        
                        <div class="problem-card" data-aos="fade-up" data-aos-delay="200">
                            <h4>Do you work with startups?</h4>
                            <p>Yes! We've helped dozens of startups build their AI-powered MVPs and scale to production.</p>
                        </div>
                        
                        <div class="problem-card" data-aos="fade-up" data-aos-delay="300">
                            <h4>What technologies do you use?</h4>
                            <p>We're tech-agnostic and choose the best tools for your needs—OpenAI, Claude, LangChain, AWS, GCP, and more.</p>
                        </div>
                        
                        <div class="problem-card" data-aos="fade-up" data-aos-delay="400">
                            <h4>Do you offer ongoing support?</h4>
                            <p>Yes, we provide maintenance packages, monitoring, and continuous improvement services after deployment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection