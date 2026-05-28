    <!-- ========== FOOTER ========== -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4 mb-4">
                <!-- Brand Column -->
                <div class="col-lg-4">
                    <div class="footer-brand gradient-text">
                        <a href="/">
                            <img src="{{ asset('images/bitsabio_logo.webp') }}">
                        </a>
                    </div>
                    <p class="footer-description">
                        We build intelligent web applications and AI-powered solutions that help businesses grow and succeed in the digital age.
                    </p>
                  
                </div>

                <div class="col-lg-1 col-md-4"></div>
                <!-- Services Column -->
                <div class="col-lg-2 col-md-4">
                    <h5 class="footer-title">Services</h5>
                    <ul class="footer-links">
                        <li><a href="{{url('/services/web-app') }}">Web Development</a></li>
                        <li><a href="{{url('/services/ai-solution')}}">App Development</a></li>
                        <li><a href="{{url('/services/ui-ux')}}">Custom Software Solution</a></li>
                        <li><a href="{{ url('/services/digital-marketing') }}">Digital Marketing</a></li>
                        <!-- <li><a href="#services">Performance</a></li> -->
                        <!-- <li><a href="#services">Mobile Development</a></li> -->
                    </ul>
                </div>

                <!-- Company Column -->
                <div class="col-lg-2 col-md-4">
                    <h5 class="footer-title">Company</h5>
                    <ul class="footer-links">
                        <li><a href="{{url('/about')}}">About Us</a></li>
                        
                        
                        <!-- <li><a href="#process">Our Process</a></li> -->
                        <!-- <li><a href="#work">Case Studies</a></li> -->
                        <!-- <li><a href="#">Careers</a></li> -->
                        <li><a href="{{url('blogs')}}">Blogs</a></li>
                        <li><a href="{{url('/contact')}}">Contact</a></li>
                        <li><a href="{{ url('/faq') }}">FAQ</a></li>
                    </ul>
                </div>

            

                <!-- Newsletter Column -->
                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title">Contact</h5>
                        <div class="footer-contact">
                            <a href="mailto:contact@bitsabio.in">
                                <i class="bi bi-envelope"></i>
                                contact@bitsabio.in
                            </a>
                            <a href="tel:+ +917717320084">
                                <i class="bi bi-telephone"></i>
                                +91 7717320084
                            </a>
                            <a 
                                href="https://maps.app.goo.gl/Uia6ng7hmgkPbSuq9"
                                target="_blank" class="location-link"
                            >
                                <i class="bi bi-geo-alt"></i>
                                D-229 Prosperity Arcade, Phase 8b,<br/> Industrial Area Mohali, 160071
                            </a>
                        </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p class="text-secondary small mb-0">
                    © 2026 BitSabio. All rights reserved.
                </p>
                <div class="social-links">
                    <a href="https://www.linkedin.com/company/bitsabio-pvt-ltd" class="social-link">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="https://www.facebook.com/bitsabio.in" class="social-link">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <!-- <a href="#" class="social-link">
                        <i class="bi bi-github"></i>
                    </a> -->
                    <a href="https://www.instagram.com/bitsabio.in" class="social-link">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>