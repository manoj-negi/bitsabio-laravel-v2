

@extends('layouts.app')

@section('content')

   <section class="page-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="hero-badge aos-init aos-animate" data-aos="fade-down">
                        <i class="bi bi-circle-fill" style="color: var(--gradient-blue); font-size: 7px;"></i>
                        <span>Error Code: 404</span>
                    </div>
                    <h1 data-aos="fade-up">404</h1>
                    <h2>Oops! Page Not Found</h2>
                    <p data-aos="fade-up" data-aos-delay="100">
                        The page you are trying to access may have been removed, renamed, or is temporarily unavailable. Let's get you back on track.
                     </p>
                    <div class="d-flex align-items-center">
                        <a href="{{url('/')}}" class="btn btn-gradient btn-lg me-3" data-aos="fade-up" data-aos-delay="200">
                       Back to Home
                    </a>
                    <a href="{{url('/contact')}}" class="btn btn-gray btn-lg" data-aos="fade-up" data-aos-delay="200">
                        Contact Support
                    </a>
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="">
                        <img class="rounded" src="./images/2151672002.jpg" alt="service-hero-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- ========== AI SOLUTIONS SECTION ========== -->
    <section id="solutions" class="py-5 position-relative" style="background-color: var(--color-surface);">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h3 class="section-title gradient-text">Suggested Destinations </h3>
            </div>

            <div class="row g-4 mb-4">
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="0">
                    <div class="glass-card p-4 h-100">
                        <div class="service-icon mb-3">
                            <i class="bi bi-mortarboard"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Courses</h4>
                        <p class="text-secondary small">Master AI-driven workflows and tools.</p>
                        <div class="text-end">
                            <a href="{{url('/courses')}}" class="btn fs-2 p-0">
                                <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="glass-card p-4 h-100">
                        <div class="service-icon mb-3">
                            <i class="bi bi-code-square"></i>
                        </div>
                        <h4 class="fw-bold mb-3">IT Services</h4>
                        <p class="text-secondary small">Custom engineering for your architecture.</p>
                        <div class="text-end">
                            <a href="{{url('/services')}}" class="btn fs-2 p-0">
                                <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="glass-card p-4 h-100">
                        <div class="service-icon mb-3">
                           <i class="bi bi-people"></i>
                        </div>
                        <h4 class="fw-bold mb-3">About Us</h4>
                        <p class="text-secondary small">TraLearn more about our agency mission.</p>
                        <div class="text-end">
                            <a href="{{url('about')}}" class="btn fs-2 p-0">
                                <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                    <div class="glass-card p-4 h-100">
                        <div class="service-icon mb-3">
                            <i class="bi bi-chat-left-dots"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Contact</h4>
                        <p class="text-secondary small">Get in touch with our support team.</p>
                        <div class="text-end">
                            <a href="{{url('contact')}}" class="btn fs-2 p-0">
                                <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>



@endsection

