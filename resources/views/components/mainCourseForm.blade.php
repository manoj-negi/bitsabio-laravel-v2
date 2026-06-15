    <section id="contact" class="cta-section gradient-bg">
        <div class="container">
            <div class="glass-card cta-card" data-aos="zoom-in">
                <div class="text-center mb-5">
                    <h3 class="section-title gradient-text mb-2">
                        Ready to Start Your Learning Journey?
                    </h3>
                    <p class="lead text-secondary">
                       Join our expert-led training programs and build real-world skills. Fill out the form and get a free consultation to choose the right course.
 
                    </p>
                </div>
                
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="cta-options">
                            <div class="cta-option" data-aos="fade-up" data-aos-delay="0">
                                <i class="bi bi-geo-alt" style="color: var(--gradient-blue);"></i>
                                <div class="">
                                    <div class="cta-option-title">Location :</div>
                                    <div class="cta-option-text">D-229 Prosperity Arcade, Phase 8b,</div>
                                </div>
                                
                            </div>

                            <div class="cta-option" data-aos="fade-up" data-aos-delay="100">
                                <i class="bi bi-envelope" style="color: var(--gradient-purple);"></i>
                                <div>
                                    <div class="cta-option-title">Email Address :</div>
                                    <div class="cta-option-text">contact@bitsabio.in</div>
                                </div>

                            </div>

                            <div class="cta-option" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-telephone" style="color: var(--gradient-cyan);"></i>
                                <div>
                                    <div class="cta-option-title">CAll Us :</div>
                                    <div class="cta-option-text">+917717320084</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="enquery-form">    
                            <form method="POST" action="{{route ('contact.send')}}" id="homeForm" class="needs-validation" novalidate>
                                @csrf
                                <input type="hidden" name="inquiry_type" value="course">
                                
                                <!-- NAME -->
                                <div class="mb-3">
                                    <label class="form-label">Your name *</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>

                                <!-- EMAIL + PHONE -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email *</label>
                                            <input type="email" name="email" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Contact number *</label>
                                            <input type="tel" name="phone" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                             <div class="mb-3">
                                 <label class="form-label">Select Course</label>
                                <select name="course_name" class="form-select">
                                    <option value="" disabled selected>Select Course</option>
                                    <option value="full_stack">Full Stack Web Developer</option>
                                    <option value="data_science">Data Science</option>
                                    <option value="data_analyst_ai">Data Analyst With AI</option>
                                    <option value="machine_learning">Machine Learning</option>
                                    <option value="ai_engineer">AI Engineer</option>
                                    <option value="deep_learning">Deep Learning</option>
                                    <option value="generative_ai">Generative AI (LLMs, RAG)</option>
                                    <option value="data_analyst">Data Analyst</option>
                                    <option value="ai_training">Artificial Intelligence</option>
                                    <option value="python">Python</option>
                                    <option value="devops">DevOps</option>
                                    <option value="cloud_security">Cloud Security</option>
                                    <option value="cyber_security_analyst">Cyber Security Analyst</option>
                                    <option value="automation_testing">Automation Testing</option>
                                    <option value="aws">AWS Cloud</option>
                                    <option value="azure">Azure Training</option>
                                    <option value="java">Java Training</option>
                                    <option value="php">PHP</option>
                                    <option value="digital_marketing">Digital Marketing</option>
                                    <option value="ccna">CCNA Training</option>
                                    <option value="it_security">IT Security</option>
                                    <option value="linux">Linux</option>
                                    <option value="mcsa">MCSA-Server</option>
                                    <option value="other">Other</option>

                                </select>

                                <div class="invalid-feedback">
                                    Please select a course
                                </div>
                            </div>
                                <!-- MESSAGE -->
                                <div class="mb-3">
                                    <label class="form-label">Your Requirement</label>
                                    <textarea name="message" placeholder="Tell us what you want to learn" class="form-control" rows="3"></textarea>
                                </div>

                                {{-- <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="300">
                                    <a href="{{ url('/contact') }}"class="btn btn-gradient" id="submitBtn">
                                        Enroll Now
                                        <i class="bi bi-arrow-right ms-2"></i>
                                    </a>
                                </div> --}}
                                   <button class="btn btn-gradient text-center mt-4" id="submitBtn">
                                        <i class="bi bi-calendar-check me-2"></i>
                                        Enroll Now
                                        <i class="bi bi-arrow-right ms-2"></i>
                                    </button>

                            </form>
                        </div>
                    </div>
                </div>
               
                <div class="trust-indicators">
                    
                    {{-- <span>•</span> --}}
                    <span>We’ll contact you within 24 hours to guide you.</span>
                </div>
            </div>
        </div>
    </section>
