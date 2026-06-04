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
                            <form method="POST" action="{{ route('contact.send') }}" class="needs-validation" novalidate>
                                @csrf
                                <input type="hidden" name="inquiry_type" value="service">
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
                                    <label for="number" class="form-label">Phone Number</label>
                                    <input type="tel" name="phone" id="phone" class="form-control">
                                </div>
                             
                                <!-- Project Type -->
                                <div class="mb-3">
                                    <label for="projectType" class="form-label">Project Type</label>
                                    <select id="projectType" name="project_type" class="form-select">
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
                                    
                                </div>

                                <!-- Message -->
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea id="message" name="message" class="form-control" rows="4"></textarea>
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

            