@extends('layouts.app')
@section('meta_title', 'BitSabio - Courses')

@section('meta_description', 'Learn web development, AI technologies, design, and digital skills through practical courses and industry-focused training programs.')
@section('meta_keywords', 'web development courses, AI courses, programming training, digital skills')
@section('og_title', 'BitSabio Courses')
@section('og_description', 'Industry-ready courses and training programs.')

@section('content')

    <!-- ========== HERO SECTION ========== -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-slider">
                <div class="px-3">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <!-- Badge -->
                            <div class="hero-badge" data-aos="fade-down">
                                <i class="bi bi-stars" style="color: var(--gradient-blue);"></i>
                                <span>FUTURE-PROOF YOUR CAREER</span>
                            </div>

                            <!-- Title -->
                            <h3 class="hero-title" data-aos="fade-up">
                                Explore <span class="color-liner-004ED0">Industry Ready</span> Tech Courses
                            </h3>

                            <!-- Subtitle -->
                            <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="100">
                                Master in-demand skills with hands-on training, real projects, and certification. Our curated curriculum is designed by industry veterans to take you from beginner to professional.
                            </p>

                            <!-- CTA Buttons -->
                            <div class="d-flex flex-column flex-sm-row gap-3 mb-5 mt-5" data-aos="fade-up" data-aos-delay="200">
                                <a href="#contact" class="btn btn-gradient">
                                    Browse All Courses
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                                <a href="#work" class="btn btn-glass">Talk to a Mentor</a>
                            </div>

                        </div>
                        <div class="col-lg-5">
                            <div class="edu-home-img">
                                <img class="rounded-3" src="./images/edu-home2.jpg" alt="edu-home">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-3">
                    <div class="row align-items-center">
                        <div class="col-lg-7 ">
                            <!-- Badge -->
                            <div class="hero-badge" data-aos="fade-down">
                                <i class="bi bi-stars" style="color: var(--gradient-blue);"></i>
                                <span>BUILD REAL-WORLD APPS</span>
                            </div>

                            <!-- Title -->
                            <h3 class="hero-title" data-aos="fade-up">
                                Become a <span class="color-liner-004ED0">Full Stack Developer</span>
                            </h3>

                            <!-- Subtitle -->
                            <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="100">
                                Build powerful web applications using modern technologies like MongoDB, Express, React, and Node.js. Learn by creating real-world projects from scratch.
                            </p>

                            <!-- CTA Buttons -->
                            <div class="d-flex flex-column flex-sm-row gap-3 mb-5 mt-5" data-aos="fade-up" data-aos-delay="200">
                                <a href="#contact" class="btn btn-gradient">
                                    Browse All Courses
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                                <a href="#work" class="btn btn-glass">Talk to a Mentor</a>
                            </div>

                        </div>
                        <div class="col-lg-5">
                            <div class="edu-home-img">
                                <img class="rounded-3" src="./images/slide2.jpg" alt="edu-home">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-3">
                    <div class="row align-items-center">
                        <div class="col-lg-7 ">
                            <!-- Badge -->
                            <div class="hero-badge" data-aos="fade-down">
                                <i class="bi bi-stars" style="color: var(--gradient-blue);"></i>
                                <span>ENTER THE AI ERA</span>
                            </div>

                            <!-- Title -->
                            <h3 class="hero-title" data-aos="fade-up">
                                Learn <span class="color-liner-004ED0">AI, Machine Learning, DevOps & RAG</span>
                            </h3>

                            <!-- Subtitle -->
                            <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="100">
                                Dive into AI, Machine Learning, and RAG-based systems. Work on real-world datasets, build intelligent apps, and understand how modern AI tools actually work.
                            </p>

                            <!-- CTA Buttons -->
                            <div class="d-flex flex-column flex-sm-row gap-3 mb-5 mt-5" data-aos="fade-up" data-aos-delay="200">
                                <a href="#contact" class="btn btn-gradient">
                                    Browse All Courses
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                                <a href="#work" class="btn btn-glass">Talk to a Mentor</a>
                            </div>

                        </div>
                        <div class="col-lg-5">
                            <div class="edu-home-img">
                                <img class="rounded-3" src="./images/slide3.jpg" alt="edu-home">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

        <!-- ========== STATS ========== -->

    <div id="stats-section" class="info-lable">
        <div class="container">
            
            <div class="row">
                <div class="col-md-3">
                    <div class="info-lable-box d-flex align-items-center">
                        <i class="bi bi-gear text-primary"></i>
                        <div class="ps-3">
                            <p class="m-0">INDUSTRY-RECOGNIZED</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info-lable-box d-flex align-items-center">
                        <i class="bi bi-rocket-takeoff text-primary"></i>
                        <div class="ps-3">
                            <p class="m-0">REAL-WORLD PROJECTS</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info-lable-box d-flex align-items-center">
                        
                        <i class="bi bi-people text-primary"></i>
                        <div class="ps-3">
                            <p class="m-0">EXPERT MENTORSHIP</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info-lable-box d-flex align-items-center">
                        <i class="bi bi-suitcase-lg text-primary"></i>
                        <div class="ps-3">
                            <p class="m-0">JOB PREPARATION</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!-- Courses section -->

  <section class="py-5">
        <div class="container">
            <div class="mb-5">
                <div class="row align-items-end">
                    <div class="col-md-7">
                        <div class="">
                            <h2 data-aos="fade-up" class="aos-init aos-animate">Master Job-Ready Skills with Hands-On Learning</h2>
                            <p class="section-subtitle aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                Learn by building real projects, guided by industry experts, and gain the confidence to start your tech career.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

             <div class="row g-4">
                @foreach($courses as $course)
                <div class="col-lg-3">
                        <div class="glass-card p-4 h-100">
                            {{-- <div class="icon-box">
                                <i class="bi bi-gear-wide-connected text-primary"></i>
                            </div> --}}
                            <div>
                                <img class="course-card-img rounded-3" src="{{ url('/public/storage/' . $course->hero_image) }}" alt="{{ $course->title }}">                                                                                    
                            </div>
                            <h5>{{$course->title}}</h5>
                            <p class="four-line-ellipsis">
                            {{$course->short_description}}
                            </p>
                            {{-- <div class="d-flex justify-content-between align-items-center my-5">
                                <div class="level-duration">
                                    <i class="bi bi-clock"></i>
                                    <span>{{$course->duration}}</span>
                                </div>
                                <div>
                                    <span class="level-tag">{{$course->level}}</span>
                                </div>
                            </div> --}}
                            <a href="{{ url('/training/' . $course->slug) }}" class="btn btn-white w-100 justify-content-center color-liner-004ED0" tabindex="0">View more</a>
                        </div>
                   
                </div>
                @endforeach

            </div>
        </div>
    </section>


    <!-- ========== AI SOLUTIONS SECTION ========== -->
    <section id="solutions" class="py-5 position-relative">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="section-badge">
                    <i class="bi bi-robot"></i>
                    <span>WHAT YOU’LL GET</span>
                </div>
                <h3 class="section-title gradient-text">Everything You Need to Start Your Tech Career</h3>
                <p class="section-subtitle">Learn practical skills, build real projects, and get guided support to grow from beginner to job-ready.</p>
            </div>

            <div class="row g-4 mb-4">
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="0">
                    <div class="glass-card p-4 h-100">
                        <div class="service-icon mb-3">
                            <i class="bi bi-robot"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Learn by Building</h4>
                        <p class="text-secondary small">Work on real projects instead of just theory.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="glass-card p-4 h-100">
                        <div class="service-icon mb-3">
                            <i class="bi bi-chat-square-text"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Real Project Experience</h4>
                        <p class="text-secondary small">Build portfolio-ready apps used in real scenarios.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="glass-card p-4 h-100">
                        <div class="service-icon mb-3">
                            <i class="bi bi-bar-chart"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Career Guidance</h4>
                        <p class="text-secondary small">Get direction on skills, roles, and growth path.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                    <div class="glass-card p-4 h-100">
                        <div class="service-icon mb-3">
                            <i class="bi bi-diagram-3"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Interview & Resume Prep</h4>
                        <p class="text-secondary small">Prepare with mock interviews and strong resumes.</p>
                    </div>
                </div>
            </div>

            <div class="text-center" data-aos="fade-up">
                <a href="#contact" class="btn btn-gradient">Join Now</a>
            </div>
        </div>
    </section>

        <!-- ========== STATS ========== -->

    <div id="stats-section" class="info-lable">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h3 class="section-title gradient-text">Real Results from Real Learning</h3>
                <p class="section-subtitle">Helping students build skills, complete projects, and confidently step into the tech industry.</p>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="info-lable-box d-flex align-items-center">
                        <i class="bi bi-patch-check"></i>
                        <div class="ps-3">
                            <h5 class="mb-0" data-target="200">500+ Students Trained</h5>
                            <p class="m-0">Successfully guided in tech careers</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info-lable-box d-flex align-items-center">
                        <svg width="" height="" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 19V18C18 15.7909 16.2091 14 14 14H10C7.79086 14 6 15.7909 6 18V19M23 19V18C23 15.7909 21.2091 14 19 14H18.5M1 19V18C1 15.7909 2.79086 14 5 14H5.5M17 11C18.6569 11 20 9.65685 20 8C20 6.34315 18.6569 5 17 5M7 11C5.34315 11 4 9.65685 4 8C4 6.34315 5.34315 5 7 5M15 8C15 9.65685 13.6569 11 12 11C10.3431 11 9 9.65685 9 8C9 6.34315 10.3431 5 12 5C13.6569 5 15 6.34315 15 8Z" stroke="#004ED0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="ps-3">
                            <h5 class="mb-0" data-target="50">100+ Real Projects Built</h5>
                            <p class="m-0">Hands-on learning experience</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info-lable-box d-flex align-items-center">
                        
                        <svg width="" height="" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><>ionicons-v5-c</ title><polyline points="352 144 464 144 464 256" style="fill:none;stroke:#004ED0;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><path d="M48,368,169.37,246.63a32,32,0,0,1,45.26,0l50.74,50.74a32,32,0,0,0,45.26,0L448,160" style="fill:none;stroke:#004ED0;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
                        <div class="ps-3">
                            <h5 class="mb-0" data-target="98">Career-Focused Training</h5>
                            <p class="m-0">Skills aligned with industry needs</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info-lable-box d-flex align-items-center">
                        <i class="">
                            <?xml version="1.0" encoding="iso-8859-1"?>
                                <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                <!DOCTYPE svg>
                                <svg fill="#004ED0" height="" width="" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                    viewBox="0 0 476.583 476.583" xml:space="preserve">
                                <g>
                                    <path d="M476.583,262.835c0-32.208-25.811-58.375-57.815-59.259c-2.33-3.642-5.623-6.553-9.505-8.495
                                        c5.14-76.723-61.653-157.01-144.843-167.175c-10.731-1.864-15.576-1.568-26.105-2.29C115.523,29.172,62.645,132.404,67.288,195.135
                                        c-3.851,1.942-7.097,4.829-9.411,8.433C25.841,204.421,0,230.604,0,262.835c0,32.224,25.841,58.407,57.878,59.261
                                        c4.239,6.631,11.632,11.057,20.079,11.057c13.169,0,23.853-10.677,23.853-23.853v-92.935c0-8.045-4.006-15.126-10.109-19.444
                                        c10.295-57.87,62.893-122.232,146.613-123.598c5.063,0.364,15.964,0.278,20.562,1.498c41.649,3.844,111.531,44.663,125.99,122.162
                                        c-6.056,4.325-10.031,11.376-10.031,19.382v92.935c0,10.017,6.18,18.55,14.922,22.091v10.117c0,26.415-17.842,49.594-43.373,56.364
                                        l-72.042,19.078c-3.882-5.148-9.767-8.687-16.74-8.687c-11.787,0-21.353,9.565-21.353,21.352c0,11.803,9.567,21.353,21.353,21.353
                                        c10.855,0,19.428-8.183,20.81-18.644l72.042-19.078c32.502-8.619,55.206-34.948,55.206-81.249
                                        c5.467-1.678,10.095-5.187,13.108-9.909C450.772,321.202,476.583,295.035,476.583,262.835z"/>
                                    <path d="M184.443,293.405h-23.201v-0.256c13.402-11.135,29.63-24.537,29.63-41.953c0-37.783-60.207-27.783-53.888-11.88
                                        c1.724,4.635,6.305,5.933,9.831,4.217c11.213-5.475,24.739-3.161,24.739,9.317c-0.374,13.767-20.546,29.173-36.448,43.561
                                        c-2.392,2.166-3.013,12.889,2.702,12.889h46.635C194.956,309.299,194.956,293.405,184.443,293.405z"/>
                                    <path d="M247.741,309.299c10.343,0,9.147-9.497,9.147-19.706c13.914,0,13.572-14.498,0-14.498v-44.421
                                        c0-2.222-1.802-4.023-4.023-4.023c-25.653,0-14.861-7.663-49.166,47.544c-2.794,4.542-3.354,15.398,2.283,15.398h32.596
                                        C238.578,299.78,237.383,309.299,247.741,309.299z M220.021,275.095v-0.256l11.057-18.052c2.796-5.211,4.969-10.041,7.625-15.382
                                        h0.512c-0.854,12.175-0.636,15.264-0.636,33.69H220.021z"/>
                                    <path d="M278.038,233.33v66.241c0,12.842,19.46,12.897,19.46,0v-26.129h31.913v26.191c0,12.75,19.334,12.796,19.334,0v-66.364
                                        c0-5.343-4.332-9.667-9.659-9.667c-13.278,0-9.675,19.31-9.675,32.93h-31.913V233.33
                                        C297.497,220.432,278.038,220.487,278.038,233.33z"/>
                                </g>
                                </svg>
                        </i>
                        <div class="ps-3">
                            <h5 class="mb-0">Interview & Career Support</h5>
                            <p class="m-0">Resume, mock interviews & guidance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== PROCESS SECTION ========== -->
    <section class="py-5 my-5" style="background: var(--bg-overlay);">
        <div class="container">
           

          <div class="row align-items-center">
            <div class="col-md-6">
                <div class="mb-3" data-aos="fade-up">
                    <h3 class="section-title gradient-text">About Bitsabio Learning</h3>
                    <p><b>Bitsabio</b> is a fast-growing <b>IT training company</b> focused on delivering practical, job-oriented learning. We help <b>students, professionals, and businesses </b>build </b>in-demand skills</b>and stay ahead in the evolving tech industry.</p>
                    <p>Our programs are designed with a <b>hands-on approach,</b>including <b>live projects</b> and <b>expert mentorship</b>. We aim to <b> bridge the gap between learning and industry needs,</b> helping individuals gain <b>real-world experience </b>and succeed in their careers.</p>
                                     
                    </ul>
                        <li>✔ Key Highlights</li>
                        <li>✔ Job-Oriented Training Programs</li>
                        <li>✔ Work on Live & Real-World Projects</li>
                        <li>✔ Skill Development with Practical Approach</li>
                        <li>✔ Career Guidance & Interview Preparation</li>
                        <li>✔ Affordable Courses with High Value</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
              <img class="rounded" src="./images/about-us.jpg" alt="about-home">
            </div>
          </div>
        </div>
    </section>


  <section class="py-5" style="background-color: var(--color-surface)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-0 pe-md-4">
                    <h4>What You Will Get at Bitsabio?</h4>
                    <p class="text-secondary">Industry-Focused Training with Real Results!</p>
                    <p data-aos="fade-up" data-aos-delay="100">Over the years, we have trained thousands of students and professionals, helping them build strong technical skills and advance their careers in the IT industry.</p>
                    <p>At Bitsabio, we provide 100% practical, job-oriented training programs designed for beginners as well as experienced learners. Whether you are a student, job seeker, working professional, or entrepreneur, our courses are tailored to help you gain real-world knowledge.</p>
                    <p>Our goal is to equip you with in-demand skills, hands-on project experience, and expert guidance so you can confidently step into the tech industry and achieve long-term career success — all at affordable pricing.</p>
                        <div class="mt-4" data-aos="fade-up" data-aos-delay="300">
                                    <button type ="submit"class="btn btn-gradient justify-content-center" id="submitBtn">
                                        Start Learning Now
                                    </button>
                        </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                  <img class="rounded"  src="./images/certificate.png" alt="certificate">

            </div>
        </div>
    </section>


    <!-- ========== CTA SECTION ========== -->
    @include('components.mainCourseForm')
     <!-- Modal sendmsg -->
   <div class="modal fade glass-white" id="sendmsg" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h3 class="modal-title fs-5">Send Message</h3>
                <i class="bi bi-x-circle cs-btn-close" data-bs-dismiss="modal"></i>
            </div>

            <div class="modal-body">

                

            </div>
        </div>
    </div>
</div>
        {{-- <script>
        document.getElementById("homeForm").addEventListener("submit", function () {
            document.getElementById("homeBtnText").innerText = "Sending...";
            document.getElementById("homeBtnLoader").classList.remove("d-none");
        });
        </script> --}}
@endsection