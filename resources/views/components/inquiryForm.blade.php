<section id="contact" class="cta-section gradient-bg">
        <div class="container">
            <div class="glass-card cta-card" data-aos="zoom-in">
                <div class="text-center mb-5">
                    <h3 class="section-title gradient-text mb-2">
                        Ready to Transform Your Business?
                    </h3>
                    <p class="lead text-secondary">
                        Let's discuss how we can help you achieve your goals. Book a free 30-minute strategy call with our experts.
                    </p>
                </div>
                
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="cta-options">
                            <div class="cta-option" data-aos="fade-up" data-aos-delay="0">
                                <i class="bi bi-calendar-check" style="color: var(--gradient-blue);"></i>
                                <div class="">
                                    <div class="cta-option-title">Free Consultation</div>
                                    <div class="cta-option-text">30-minute strategy call</div>
                                </div>
                                
                            </div>

                            <div class="cta-option" data-aos="fade-up" data-aos-delay="100">
                                <i class="bi bi-chat-dots" style="color: var(--gradient-purple);"></i>
                                <div>
                                    <div class="cta-option-title">Quick Response</div>
                                    <div class="cta-option-text">Reply within 24 hours</div>
                                </div>

                            </div>

                            <div class="cta-option" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-envelope-check" style="color: var(--gradient-cyan);"></i>
                                <div>
                                    <div class="cta-option-title">No Commitment</div>
                                    <div class="cta-option-text">Free quote & proposal</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="enquery-form">    
                            <form method="POST" action={{route ('contact.send')}} class="needs-validation" novalidate>
                                @csrf
                                  <input type="hidden" name="inquiry_type" value="service">

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

                                <!-- MESSAGE -->
                                <div class="mb-3">
                                    <label class="form-label">Your Requirement</label>
                                    <textarea name="message" class="form-control" rows="3"></textarea>
                                </div>

                                <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="300">
                                    <button type ="submit" class="btn btn-gradient" id="submitBtn">
                                        <i class="bi bi-calendar-check me-2"></i>
                                        Book Free Consultation
                                        <i class="bi bi-arrow-right ms-2"></i>
                                    </button>
                                </div>
                    
                            </form>
                        </div>
                    </div>
                </div>

                

                
                <div class="trust-indicators">
                    <div class="d-flex align-items-center gap-2">
                        <div class="pulse-dot"></div>
                        <span>Available now</span>
                    </div>
                    <span>•</span>
                    <span>No credit card required</span>
                    <span>•</span>
                    <span>100% satisfaction guarantee</span>
                </div>
            </div>
        </div>
</section>