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
                        <img src="./images/contact.webp" alt="contact-hero-img">
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
                    {{-- <a href="https://wa.me/+91 7717320084" target="_blank" >Open WhatsApp</a> --}}
                    <a href="https://wa.me/917717320084" target="_blank">Open WhatsApp</a>
                    <p>Available for immediate assistance.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Inquiry Form  --}}
    @include('components.mainServiceForm')

@endsection