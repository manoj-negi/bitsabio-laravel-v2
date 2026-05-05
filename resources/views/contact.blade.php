@extends('layouts.app')

@section('content')

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h1 data-aos="fade-up">Let’s Build <span class="color-liner-004ED0">Something Great</span> Together</h1>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Have a project, idea, or question? Our team is here to help you with AI solutions, development, and training.
                    </p>
                   <div class="hero-badge aos-init aos-animate" data-aos="fade-down">
                        <i class="bi bi-circle-fill" style="color: var(--gradient-blue); font-size: 7px;"></i>
                        <span>Available for partnerships</span>
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="contact-hero-img">
                        <img src="./images/contact.png" alt="contact-hero-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Options -->
    <section class="section-contact-options py-5">
        <div class="container">
            <div class="contact-options">
                <div class="contact-option-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <i class="bi bi-telephone text-primary"></i>
                    </div>
                    <h3>Call Us</h3>
                    <a href="tel:+919872100824">+91 9872100824</a>
                    <a href="tel:+917717320084">+91 7717320084</a>

                    <p>Available Mon-Fri, 9am-8pm</p>
                </div>
                
                <div class="contact-option-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                        <i class="bi bi-envelope text-primary"></i>
                    </div>
                    <h3>Email Us</h3>
                    <a href="e-mil">contact@bitsabio.in</a>
                    <p>We respond within 24 hours</p>
                </div>

                <div class="contact-option-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                        <i class="bi bi-geo-alt text-primary"></i>
                    </div>
                    <h3>Visit Us</h3>
                    <p>D-229, Phase 8b,</p>
                    <p>Industrial Area Mohali, 160071</p>
                </div>

                <div class="contact-option-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                        <i class="bi bi-chat-left-dots text-primary"></i>
                    </div>
                    <h3>Live Chat</h3>
                    <a href="https://wa.me/+91 7717320084" target="_blank" >Open WhatsApp</a>
                    <p>Available for immediate assistance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section id="contact-page-form" class="py-5" style="background-color: var(--color-surface);">
        <div class="container">
            <div class="">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="why-partner-us">
                            <h2 class="mb-4">Send Us a Message</h2>
                            <div class="innovators-card aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon">
                                    <i class="bi bi-lightning-charge-fill text-primary"></i>
                                </div>
                                <div>
                                    <h5>Quick Response</h5>
                                    <p>We value your time and aim for a 24-hour turnaround on all inquiries.</p>
                                </div>
                            </div>

                            <div class="innovators-card aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon">
                                    <i class="bi bi-person-fill-gear text-primary"></i>
                                </div>
                                <div>
                                    <h5>Expert Support</h5>
                                    <p>Direct access to our lead engineers and designers, no middle layers.</p>
                                </div>
                            </div>

                            <div class="innovators-card aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon">
                                    <i class="bi bi-stars text-primary"></i>
                                </div>
                                <div>
                                    <h5>Custom Solutions</h5>
                                    <p>No templates—everything is architected for your specific organizational goals.</p>
                                </div>
                            </div>

                            <div class="innovators-card aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon">
                                    <i class="bi bi-eye-fill text-primary"></i>
                                </div>
                                <div>
                                    <h5>Transparent Process</h5>
                                    <p>Clear, honest communication from the very first discovery call to launch.</p>
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
                            {{-- <form method="POST" action="/contact" class="needs-validation" novalidate> --}}
                                <form method="POST" action="{{ route('contact.send') }}">
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
                                
                                <!-- Phone Number -->
                                <div class="mb-3">
                                    <label for="number" class="form-label">Phone Number *</label>
                                    <input type="tel" name="phone" id="phone" class="form-control" required>
                                    <div class="invalid-feedback">
                                        Please enter phone number
                                    </div>
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
@include('components.faq')

@endsection