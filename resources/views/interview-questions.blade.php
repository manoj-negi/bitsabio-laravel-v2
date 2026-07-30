@extends('layouts.app')
@section('meta_title', 'BitSabio - interview-questions')

@section('meta_description',
    'Learn about BitSabio, our mission, team, expertise, and commitment to delivering
    innovative AI and digital solutions.')
@section('meta_keywords', 'about bitsabio, digital agency, AI experts, web development company')
@section('og_title', 'interview-questions')
@section('og_description', 'Meet the team behind BitSabio and discover our vision.')

@section('content')

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="hero-badge aos-init aos-animate" data-aos="fade-down">
                        <i class="bi bi-circle-fill" style="color: var(--gradient-blue); font-size: 7px;"></i>
                        <span>Trusted by 10,000+ Students & Developers</span>
                    </div>
                    <h1 data-aos="fade-up"> Master Technical<span class="color-liner-004ED0"> Interview Questions</span> </h1>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Prepare for technical interviews with carefully curated questions,
                        detailed explanations, coding examples, and company-specific interview
                        experiences from Google, Microsoft, Amazon, TCS, Infosys, Accenture,
                        Adobe, and many more.
                    </p>
                    <div class="d-flex align-items-center">
                        <a href="{{ url('/training') }}" class="btn btn-gradient btn-lg me-3" data-aos="fade-up"
                            data-aos-delay="200">
                            View all Courses
                        </a>
                        <a href="{{ url('#contact') }}" class="btn btn-gray btn-lg" data-aos="fade-up" data-aos-delay="200">
                            Enroll Now
                        </a>
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="">
                        <img src="./images/service-hero-img.webp" alt="service-hero-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== STATS ========== -->
    <div id="stats-section" class="info-lable">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h3 class="section-title gradient-text">Interview Questions & Expert Answers</h3>
                <p class="section-subtitle">Practice real interview questions, strengthen your technical skills, and prepare
                    confidently for your dream job.</p>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="info-lable-box d-flex align-items-center">
                        <i class="bi bi-patch-check"></i>
                        <div class="ps-3">
                            <h5 class="mb-0" data-target="200">1000+ Questions</h5>
                            <p class="m-0">Across Multiple Technologies</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info-lable-box d-flex align-items-center">
                        <svg width="" height="" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18 19V18C18 15.7909 16.2091 14 14 14H10C7.79086 14 6 15.7909 6 18V19M23 19V18C23 15.7909 21.2091 14 19 14H18.5M1 19V18C1 15.7909 2.79086 14 5 14H5.5M17 11C18.6569 11 20 9.65685 20 8C20 6.34315 18.6569 5 17 5M7 11C5.34315 11 4 9.65685 4 8C4 6.34315 5.34315 5 7 5M15 8C15 9.65685 13.6569 11 12 11C10.3431 11 9 9.65685 9 8C9 6.34315 10.3431 5 12 5C13.6569 5 15 6.34315 15 8Z"
                                stroke="#004ED0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="ps-3">
                            <h5 class="mb-0" data-target="50">25+ Technologies</h5>
                            <p class="m-0">Frontend, Backend, Java, Python & More</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info-lable-box d-flex align-items-center">

                        <svg width="" height="" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <>ionicons-v5-c</ title>
                            <polyline points="352 144 464 144 464 256"
                                style="fill:none;stroke:#004ED0;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                            <path d="M48,368,169.37,246.63a32,32,0,0,1,45.26,0l50.74,50.74a32,32,0,0,0,45.26,0L448,160"
                                style="fill:none;stroke:#004ED0;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                        </svg>
                        <div class="ps-3">
                            <h5 class="mb-0" data-target="98">Expert Answers</h5>
                            <p class="m-0">Detailed Explanations & Examples</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info-lable-box d-flex align-items-center">
                        <i class="">
                            <?xml version="1.0" encoding="iso-8859-1"?>
                            <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                            <!DOCTYPE svg>
                            <svg fill="#004ED0" height="" width="" version="1.1" id="Capa_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 476.583 476.583" xml:space="preserve">
                                <g>
                                    <path
                                        d="M476.583,262.835c0-32.208-25.811-58.375-57.815-59.259c-2.33-3.642-5.623-6.553-9.505-8.495
                                                                            c5.14-76.723-61.653-157.01-144.843-167.175c-10.731-1.864-15.576-1.568-26.105-2.29C115.523,29.172,62.645,132.404,67.288,195.135
                                                                            c-3.851,1.942-7.097,4.829-9.411,8.433C25.841,204.421,0,230.604,0,262.835c0,32.224,25.841,58.407,57.878,59.261
                                                                            c4.239,6.631,11.632,11.057,20.079,11.057c13.169,0,23.853-10.677,23.853-23.853v-92.935c0-8.045-4.006-15.126-10.109-19.444
                                                                            c10.295-57.87,62.893-122.232,146.613-123.598c5.063,0.364,15.964,0.278,20.562,1.498c41.649,3.844,111.531,44.663,125.99,122.162
                                                                            c-6.056,4.325-10.031,11.376-10.031,19.382v92.935c0,10.017,6.18,18.55,14.922,22.091v10.117c0,26.415-17.842,49.594-43.373,56.364
                                                                            l-72.042,19.078c-3.882-5.148-9.767-8.687-16.74-8.687c-11.787,0-21.353,9.565-21.353,21.352c0,11.803,9.567,21.353,21.353,21.353
                                                                            c10.855,0,19.428-8.183,20.81-18.644l72.042-19.078c32.502-8.619,55.206-34.948,55.206-81.249
                                                                            c5.467-1.678,10.095-5.187,13.108-9.909C450.772,321.202,476.583,295.035,476.583,262.835z" />
                                    <path
                                        d="M184.443,293.405h-23.201v-0.256c13.402-11.135,29.63-24.537,29.63-41.953c0-37.783-60.207-27.783-53.888-11.88
                                                                            c1.724,4.635,6.305,5.933,9.831,4.217c11.213-5.475,24.739-3.161,24.739,9.317c-0.374,13.767-20.546,29.173-36.448,43.561
                                                                            c-2.392,2.166-3.013,12.889,2.702,12.889h46.635C194.956,309.299,194.956,293.405,184.443,293.405z" />
                                    <path
                                        d="M247.741,309.299c10.343,0,9.147-9.497,9.147-19.706c13.914,0,13.572-14.498,0-14.498v-44.421
                                                                            c0-2.222-1.802-4.023-4.023-4.023c-25.653,0-14.861-7.663-49.166,47.544c-2.794,4.542-3.354,15.398,2.283,15.398h32.596
                                                                            C238.578,299.78,237.383,309.299,247.741,309.299z M220.021,275.095v-0.256l11.057-18.052c2.796-5.211,4.969-10.041,7.625-15.382
                                                                            h0.512c-0.854,12.175-0.636,15.264-0.636,33.69H220.021z" />
                                    <path
                                        d="M278.038,233.33v66.241c0,12.842,19.46,12.897,19.46,0v-26.129h31.913v26.191c0,12.75,19.334,12.796,19.334,0v-66.364
                                                                            c0-5.343-4.332-9.667-9.659-9.667c-13.278,0-9.675,19.31-9.675,32.93h-31.913V233.33
                                                                            C297.497,220.432,278.038,220.487,278.038,233.33z" />
                                </g>
                            </svg>
                        </i>
                        <div class="ps-3">
                            <h5 class="mb-0">Latest Questions</h5>
                            <p class="m-0">Regularly Updated Content</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Core AI Services -->
    <section class="py-5">
        <div class="container">

            <div class="mb-5">
                <div class="row align-items-end">
                    <div class="col-md-7">
                        <h2 data-aos="fade-up">Ace Every Interview. Land Your Dream Job.</h2>
                        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                            Explore curated interview questions, coding challenges, and expert explanations designed to help
                            students and professionals succeed in technical interviews.
                        </p>
                    </div>

                    {{-- <div class="col-md-5 text-end">
                        <a href="#" class="view-link">
                            Explore Interview Topics
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div> --}}
                </div>
            </div>

            <div class="row g-4">


                <div class="row g-4">

                    @foreach ($interviewQuestions as $question)
                        <div class="col-lg-3 col-md-6">
                            <div class="glass-card p-4 h-100">

                                <img class="course-card-img rounded-3 interview-icon"
                                    src="{{ asset('public/storage/' . $question->image) }}" alt="{{ $question->title }}">

                                <h5 class="mt-3">
                                    {{ $question->title }}
                                </h5>
                                {{-- 
                                @if ($question->short_description)
                                    <p class="four-line-ellipsis">
                                        {{ $question->short_description }}
                                    </p>
                                @endif --}}

                                {{-- <a href="{{ url(interview-detail) }}" --}}
                                {{-- <a href="/interview-detail"
                                    class="btn btn-white w-100 justify-content-center color-liner-004ED0">
                                    Explore Questions
                                </a> --}}
                                <a href="{{ route('interview-detail', $question->slug) }}"
                                    class="btn btn-white w-100 justify-content-center color-liner-004ED0">
                                    Explore Questions
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>


    <!-- CTA Section -->
    @include('components.inquiryForm')

@endsection
