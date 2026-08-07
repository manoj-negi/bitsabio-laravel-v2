@extends('layouts.app')
@section('meta_title', $course->tags['meta']['title'] ?? $course->title . ' | BitSabio')
@section('meta_description', $course->tags['meta']['description'] ?? '')
@section('meta_keywords', $course->tags['meta']['keywords'] ?? '')
@section('meta_robots', $course->tags['meta']['robots'] ?? 'index, follow')
@section('meta_canonical', $course->tags['meta']['canonical'] ?? url()->current())


{{-- open graph --}}
@section('og_title', $course->tags['open_graph']['title'] ?? $course->title)

@section('og_description', $course->tags['open_graph']['description'] ?? ($course->tags['meta']['description'] ?? ''))
@section('og_type', $course->tags['open_graph']['type'] ?? 'article')
@section('og_url', $course->tags['open_graph']['url'] ?? url()->current())

@section('content')

    <!-- Page Hero -->
    <section class="page-hero" style="background-color: var(--color-surface);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    {{-- <div class="hero-badge" data-aos="fade-down">
                        <i class="bi bi-stars" style="color: var(--gradient-blue);"></i>
                        <span>Industry-Recognized DevOps Training Program</span>
                    </div> --}}
                    <h1 data-aos="fade-up">{{ $course->hero_title_black }} <span
                            class="color-liner-004ED0">{{ $course->hero_title_blue }}
                            @if (isset($location))
                                <span class="text-dark">in {{ $location->name }}</span>
                            @endif
                        </span> </h1>
                    {{-- <p data-aos="fade-up" data-aos-delay="100">{{ $course->hero_description }}</p> --}}
                    @php
                        $heroDescription = $course->hero_description;

                        $heroDescription = str_replace(
                            '{{ location }}',
                            isset($location) ? 'in ' . $location->name : '',
                            $heroDescription,
                        );
                    @endphp

                    <p data-aos="fade-up" data-aos-delay="100">
                        {{ $heroDescription }}
                    </p>
                    @if (!empty($course->average_salary))
                        {{-- <div class="dvt-salary" data-aos="fade-up">
                            
                            Average Salary Package
                            <span class="color-liner-004ED0">
                                {{ $course->average_salary['min_salary'] ?? '' }}
                                @if (!empty($course->average_salary['max_salary']))
                                    - {{ $course->average_salary['max_salary'] }}
                                @endif
                            </span>
                        </div> --}}
                        <div class="dvt-salary">
                            <h4 class="">Average Salary Package</h4>
                            <div class="dvt-salary-amount color-liner-004ED0">
                                {{ $course->average_salary['min_salary'] ?? '' }}
                                @if (!empty($course->average_salary['max_salary']))
                                    - {{ $course->average_salary['max_salary'] }}
                                @endif
                            </div>
                            <ul class="dvt-perks color-liner-004ED0">
                                <li>100% Placement Assistance</li>
                                <li>Live Projects</li>
                                <li>Industry-Recognized Certification</li>

                                <li>Learn from Expert Mentors</li>
                            </ul>
                        </div>
                    @endif
                    {{-- <div class="row mt-4 mb-4">
                        <div class="col-6">
                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill text-primary"></i>
                                Live Projects
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill text-primary"></i>
                                Certification
                            </div>
                        </div>

                        <div class="col-6 mt-3">
                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill text-primary"></i>
                                Placement Assistance
                            </div>
                        </div>

                        <div class="col-6 mt-3">
                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill text-primary"></i>
                                Expert Mentors
                            </div>
                        </div>
                    </div> --}}
                    <div class="d-flex align-items-center">
                        <a href="#contact" class="btn btn-gradient btn-lg me-3" data-aos="fade-up" data-aos-delay="200">
                            Enroll Now
                        </a>
                        <a href="{{ route('course.curriculum', $course->slug) }}" class="btn btn-glass text-primary"
                            data-aos="fade-up" data-aos-delay="200">
                            View curriculum
                        </a>
                        {{-- <a href="#work" class="btn btn-glass text-primary">Download PDF <i class="bi bi-download text-primary"></i></a> --}}
                        {{-- <a type="button" class="btn btn-glass text-primary" data-bs-toggle="modal"
                            data-bs-target="#downloadPdfModal">
                            Download PDF
                            <i class="bi bi-download text-primary"></i>
                        </a> --}}
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="contact-hero-img">
                        <img class="rounded-3" src="{{ url('/public/storage/' . $course->hero_image) }}"
                            alt="{{ $course->title }}">

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Course Content  --}}
    <section class="py-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-9">
                    @php
                        $content = str_replace(
                            ['{{ location }}', '{{ location }}'],
                            isset($location) ? 'in ' . $location->name : '',
                            $course->content,
                        );
                    @endphp

                    {!! $content !!}
                </div>

                <div class="col-lg-3">
                    <div class="sticky-top">
                        @include('components.courseForm')
                        <a href="{{ route('course.curriculum', $course->slug) }}"
                            class="btn btn-glass w-100 justify-content-center mt-2 text-primary" data-aos="fade-up"
                            data-aos-delay="200">
                            View curriculum
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </section>
    {{-- <div class="blog-detail-content">
    {!! $blog->content !!}
    </div> --}}

    <!-- ========== STATS ========== -->
    <div id="stats-section" class="info-lable">
        <div class="container">

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="info-lable-box d-flex align-items-start bg-white border rounded-3 p-4 h-100 shadow-sm">

                        <i class="bi bi-code-square text-primary fs-3"></i>

                        <div class="ps-3">
                            <p class="m-0 fw-semibold">
                                100% Practical Training
                            </p>

                            <small class="text-muted">
                                Focus on hands-on coding and implementation from day one.
                            </small>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info-lable-box d-flex align-items-start bg-white border rounded-3 p-4 h-100 shadow-sm">

                        <i class="bi bi-rocket-takeoff text-primary"></i>
                        <div class="ps-3">
                            <p class="m-0 fw-semibold">Industry Projects</p>
                            <small>
                                Work on real-world datasets and production-level AI problems.
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info-lable-box d-flex align-items-start bg-white border rounded-3 p-4 h-100 shadow-sm">

                        <i class="bi bi-people text-primary"></i>
                        <div class="ps-3">
                            <p class="m-0 fw-semibold">Interview Preparation</p>
                            <small>
                                Mock interviews and technical round practice with mentors.
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info-lable-box d-flex align-items-start bg-white border rounded-3 p-4 h-100 shadow-sm">

                        <i class="bi bi-file-earmark-text text-primary"></i>
                        <div class="ps-3">
                            <p class="m-0 fw-semibold">Resume Building</p>
                            <small>
                                Crafting AI-focused profiles that attract top-tier recruiters.
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info-lable-box d-flex align-items-start bg-white border rounded-3 p-4 h-100 shadow-sm">

                        <i class="bi bi-patch-check text-primary"></i>
                        <div class="ps-3">
                            <p class="m-0 fw-semibold">Global Certification</p>
                            <small>
                                Earn a recognized certificate to validate your AI expertise.
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info-lable-box d-flex align-items-start bg-white border rounded-3 p-4 h-100 shadow-sm">
                        <i class="bi bi-person-workspace text-primary fs-3"></i>
                        <div class="ps-3">
                            <p class="m-0 fw-semibold">Placement Support</p>
                            <small>
                                Access to our network of 500+ hiring partners in tech.
                            </small>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    {{-- Curriculum Preview  --}}
    {{-- <section class="page-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h3 class="text-center mb-3" data-aos="fade-up">
                        Structured, Module-by-Module Learning
                    </h3>
                    <div class="container py-5">
                        <div class="accordion custom-accordion" id="faqAccordion">
                            @foreach (collect($course->curriculum_preview)->take(4) as $index => $module)
                                <div class="accordion-item mb-3">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }}"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq{{ $index }}">
                                            <div>
                                                <small class="text-primary d-block">
                                                    MODULE {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                                </small>
                                                {{ $module['title'] ?? '' }}
                                            </div>
                                        </button>
                                    </h3>
                                    <div id="faq{{ $index }}"
                                        class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            {!! $module['description'] ?? '' !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="text-center mt-4">
                            <a href="{{ route('course.curriculum', $course->slug) }}"
                                class="fw-semibold text-primary text-decoration-none">
                                View Detailed Curriculum →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- @if (!empty($course->module))
        {!! $course->module !!}
    @endif --}}
    @if (!empty($course->module))
    <div id="module-preview">
        {!! $course->module !!}
    </div>
@endif
<div class="text-center mt-4">
    <a href="{{ route('course.curriculum', $course->slug) }}"
        class="fw-semibold text-primary text-decoration-none">
        View Detailed Curriculum →
    </a>
</div>

    <section class="page-hero">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <h3 class="text-center mb-3" data-aos="fade-up">
                    Structured, Module-by-Module Learning
                </h3>

                <div class="container py-5">

                    @if (!empty($course->module))
                        @php
                            $doc = new DOMDocument();
                            libxml_use_internal_errors(true);
                            $doc->loadHTML('<?xml encoding="utf-8" ?>' . $course->module);
                            libxml_clear_errors();

                            $xpath = new DOMXPath($doc);

                            // Get all dvt-section divs
                            $sections = $xpath->query("//div[contains(concat(' ', normalize-space(@class), ' '), ' dvt-section ')]");
                        @endphp

                        @foreach ($sections as $index => $section)
                            @break($index >= 2)

                            {!! $doc->saveHTML($section) !!}
                        @endforeach
                    @endif

                    <div class="text-center mt-4">
                        <a href="{{ route('course.curriculum', $course->slug) }}"
                            class="fw-semibold text-primary text-decoration-none">
                            View Detailed Curriculum →
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
    
    <!-- ========== ToolS and Technology ========== -->
    <section class="py-5 bg-light">
        <div class="container">

            <div class="text-center mb-5">
                <h3 class="section-title gradient-text">
                    Tools & Technologies You'll Master
                </h3>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($course->serviceIcons as $icon)
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="tool-card text-center">
                            <img src="{{ asset('public/storage/' . $icon->image) }}"
                                alt="{{ $icon->name }}"class="img-fluid mb-2 tool-icon">
                            <h6>
                                {{ strtoupper($icon->name) }}
                            </h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">
                Projects You Will Build
            </h2>
            <div class="row g-4">
                @foreach ($course->projects_you_will_build ?? [] as $project)
                    <div class="col-lg-4 col-md-6">
                        <div class="glass-card h-100 p-0 overflow-hidden">
                            <img class="course-card-img w-100"
                                src="{{ asset('public/storage/' . $project['Projects_image']) }}"
                                alt="{{ $project['title'] }}">
                            <div class="p-4">
                                <h5>
                                    {{ $project['title'] }}
                                </h5>
                                <p class="small text-muted">
                                    {{ $project['description'] }}
                                </p>
                                <div class="d-flex gap-2 flex-wrap">
                                    @foreach ($project['tags'] ?? [] as $tag)
                                        <span class="blog-category">
                                            {{ strtoupper($tag) }}
                                        </span>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Your Success Path --}}
    <section class="py-5" style="background-color: var(--color-surface-light);">
        <div class="container">
            <div class="text-center mb-5">
                <h3 class="fw-bold">Your Path to Success</h3>
                <p class="text-muted">
                    Follow a structured roadmap designed to make you industry-ready.
                </p>
            </div>
            <div class="journey-wrapper position-relative">

                <!-- Timeline Line -->
                <div class="journey-line"></div>

                <div class="row justify-content-center text-center">

                    <div class="col-lg col-md-3 col-6 mb-4">
                        <div class="bg-primary text-white rounded-circle shadow p-3 d-inline-flex align-items-center justify-content-center mb-3"
                            style="width:70px;height:70px;">1</div>
                        <h6 class="step-title">Choose Course</h6>
                    </div>

                    <div class="col-lg col-md-3 col-6 mb-4">
                        <div class="bg-primary text-white rounded-circle shadow p-3 d-inline-flex align-items-center justify-content-center mb-3"
                            style="width:70px;height:70px;">2</div>
                        <h6 class="step-title">Attend Training</h6>
                    </div>

                    <div class="col-lg col-md-3 col-6 mb-4">
                        <div class="bg-primary text-white rounded-circle shadow p-3 d-inline-flex align-items-center justify-content-center mb-3"
                            style="width:70px;height:70px;">3</div>
                        <h6 class="step-title">Complete Assignments</h6>
                    </div>

                    <div class="col-lg col-md-3 col-6 mb-4">
                        <div class="bg-primary text-white rounded-circle shadow p-3 d-inline-flex align-items-center justify-content-center mb-3"
                            style="width:70px;height:70px;">4</div>
                        <h6 class="step-title">Build Real Projects</h6>
                    </div>

                    <div class="col-lg col-md-3 col-6 mb-4">
                        <div class="bg-primary text-white rounded-circle shadow p-3 d-inline-flex align-items-center justify-content-center mb-3"
                            style="width:70px;height:70px;">5</div>
                        <h6 class="step-title">Get Mentorship</h6>
                    </div>

                    <div class="col-lg col-md-3 col-6 mb-4">
                        <div class="bg-primary text-white rounded-circle shadow p-3 d-inline-flex align-items-center justify-content-center mb-3"
                            style="width:70px;height:70px;">6</div>
                        <h6 class="step-title">Interview Prep</h6>
                    </div>

                    <div class="col-lg col-md-3 col-6 mb-4">
                        <div class="bg-primary text-white rounded-circle shadow p-3 d-inline-flex align-items-center justify-content-center mb-3"
                            style="width:70px;height:70px;">7</div>
                        <h6 class="step-title">Launch Career</h6>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="py-5 my-5" id="faq">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-center mb-5">
                        Frequently Asked Questions
                    </h2>
                    @if (!empty($course->faqs))
                        <div class="accordion custom-accordion" id="courseFaqAccordion">
                            @foreach ($course->faqs as $index => $faq)
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#courseFaq{{ $index }}"
                                            aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                            aria-controls="courseFaq{{ $index }}">
                                            {{ $loop->iteration }}. {{ $faq['question'] }}
                                        </button>
                                    </h3>
                                    <div id="courseFaq{{ $index }}"
                                        class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                        data-bs-parent="#courseFaqAccordion">
                                        <div class="accordion-body">
                                            {!! $faq['answer'] !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    {{-- High-Growth Career Roles --}}
    {{-- <section class="section-contact-options py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">
                High-Growth Career Roles
            </h2>
            <div class="contact-options">
                @foreach ($course->career_roles ?? [] as $index => $role)
                    <div class="contact-option-card" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                        <div class="icon-box">
                            <i class="{{ $role['icon'] ?? 'bi bi-cpu' }} text-primary"></i>
                        </div>
                        <h3>{{ $role['title'] }}</h3>
                        <p class="mb-1">
                            {{ $role['subtitle'] }}
                        </p>
                        <h4 class="text-primary">
                            {{ $role['salary'] }}
                        </h4>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}


    {{-- Google review form  --}}
    @include('components.google-reviews')
    @include('components.download-pdf-modal')

    {{-- <Section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <div class="">
                    <div>
                        {!! $course->content !!}
                    </div>

                </div>

            </div>
            <div class="col-md-3">
                    <div class="blog-right-side">
                        @include('components.courseForm')
                            <h5 class="mt-5"> Courses Offered</h5>
                            
                           <ul>
                                @foreach ($courses as $course)
                                    <li>
                                        <a href="{{ url('/training/' . $course->slug) }}">
                                            {{ $course->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                    </div>
            </div>
        </div>
    </div>
</Section> --}}

    @include('components.mainCourseForm')

@endsection


{{-- 


<section class="section section-alt" id="curriculum">
  <div class="container">
    <div class="section-head reveal">
      <div class="eyebrow">Course Curriculum</div>
      <h2>Structured, Module-by-Module Learning</h2>
      <p>Every module builds on the last — from HTML fundamentals to MERN/PERN engineering, AI-powered development and your capstone project.</p>
    </div>
    <div class="curriculum accordion" id="curriculumAccordion">
      <div class="acc-item open">
        <div class="acc-head">
          <div class="acc-title"><div class="acc-badge">01</div><div><b>HTML5, CSS3 &amp; Responsive Web Design</b><small>Foundations</small></div></div>
          <svg class="acc-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
        </div>
        <div class="acc-panel" style="max-height:220px;">
          <div class="acc-panel-inner">
            <p>Build a strong foundation in semantic HTML5, modern CSS3 (Flexbox, Grid, animations), mobile-first responsive design and accessibility best practices used across every production website.</p>
          </div>
        </div>
      </div>

      <div class="acc-item">
        <div class="acc-head">
          <div class="acc-title"><div class="acc-badge">02</div><div><b>JavaScript (ES6+) &amp; DOM Programming</b><small>Core Language</small></div></div>
          <svg class="acc-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
        </div>
        <div class="acc-panel">
          <div class="acc-panel-inner">
            <ul>
              <li>Variables, Functions &amp; Scope</li><li>ES6+ Syntax &amp; Destructuring</li><li>Promises &amp; Async/Await</li>
              <li>DOM Manipulation</li><li>Fetch API &amp; JSON</li><li>Error Handling</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="acc-item">
        <div class="acc-head">
          <div class="acc-title"><div class="acc-badge">03</div><div><b>React.js &amp; Frontend Engineering</b><small>Frontend Framework</small></div></div>
          <svg class="acc-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
        </div>
        <div class="acc-panel">
          <div class="acc-panel-inner">
            <ul>
              <li>Components &amp; Props</li><li>Hooks (useState, useEffect)</li><li>React Router</li>
              <li>Context API &amp; Redux</li><li>Forms &amp; Validation</li><li>Component Testing</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="acc-item">
        <div class="acc-head">
          <div class="acc-title"><div class="acc-badge">04</div><div><b>Next.js &amp; TypeScript</b><small>Modern Frontend</small></div></div>
          <svg class="acc-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
        </div>
        <div class="acc-panel">
          <div class="acc-panel-inner">
            <p>Learn TypeScript for type-safe applications, then build production-grade apps with Next.js — server-side rendering, the App Router, API routes and static site generation.</p>
          </div>
        </div>
      </div>

      <div class="acc-item">
        <div class="acc-head">
          <div class="acc-title"><div class="acc-badge">05</div><div><b>Node.js &amp; Express.js</b><small>Backend Development</small></div></div>
          <svg class="acc-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
        </div>
        <div class="acc-panel">
          <div class="acc-panel-inner">
            <ul>
              <li>Node.js Runtime &amp; NPM</li><li>Express Routing &amp; Middleware</li><li>Error Handling</li>
              <li>File Uploads</li><li>Environment Config</li><li>API Structuring</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="acc-item">
        <div class="acc-head">
          <div class="acc-title"><div class="acc-badge">06</div><div><b>MongoDB &amp; Mongoose (MERN)</b><small>NoSQL Database</small></div></div>
          <svg class="acc-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
        </div>
        <div class="acc-panel">
          <div class="acc-panel-inner">
            <ul>
              <li>Schema &amp; Model Design</li><li>CRUD Operations</li><li>Aggregation Pipelines</li>
              <li>Indexing &amp; Performance</li><li>Relationships</li><li>Atlas Cloud Hosting</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="acc-item">
        <div class="acc-head">
          <div class="acc-title"><div class="acc-badge">07</div><div><b>PostgreSQL &amp; Prisma/Sequelize (PERN)</b><small>SQL Database</small></div></div>
          <svg class="acc-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
        </div>
        <div class="acc-panel">
          <div class="acc-panel-inner">
            <ul>
              <li>Relational Schema Design</li><li>Joins &amp; Transactions</li><li>ORM with Prisma/Sequelize</li>
              <li>Migrations &amp; Seeding</li><li>Query Optimization</li><li>Cloud-Hosted Postgres</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="acc-item">
        <div class="acc-head">
          <div class="acc-title"><div class="acc-badge">08</div><div><b>REST APIs &amp; GraphQL</b><small>API Development</small></div></div>
          <svg class="acc-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
        </div>
        <div class="acc-panel">
          <div class="acc-panel-inner">
            <ul>
              <li>REST API Design</li><li>API Versioning</li><li>GraphQL Schemas &amp; Resolvers</li>
              <li>Apollo Server/Client</li><li>API Documentation</li><li>Rate Limiting</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="acc-item">
        <div class="acc-head">
          <div class="acc-title"><div class="acc-badge">09</div><div><b>Authentication, Security &amp; Testing</b><small>Production-Ready Apps</small></div></div>
          <svg class="acc-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
        </div>
        <div class="acc-panel">
          <div class="acc-panel-inner">
            <ul>
              <li>JWT &amp; OAuth 2.0</li><li>Password Hashing (bcrypt)</li><li>Role-Based Access Control</li>
              <li>Unit Testing (Jest)</li><li>E2E Testing (Cypress)</li><li>OWASP Security Basics</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="acc-item">
        <div class="acc-head">
          <div class="acc-title"><div class="acc-badge">10</div><div><b>Git, Docker &amp; Cloud Deployment</b><small>DevOps for Full Stack</small></div></div>
          <svg class="acc-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
        </div>
        <div class="acc-panel">
          <div class="acc-panel-inner">
            <ul>
              <li>Git Branching &amp; PRs</li><li>Dockerizing Full Stack Apps</li><li>CI/CD with GitHub Actions</li>
              <li>Deploying to AWS (EC2, Amplify)</li><li>Vercel &amp; Render Deployment</li><li>Environment &amp; Secrets Management</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="acc-item">
        <div class="acc-head">
          <div class="acc-title"><div class="acc-badge">11</div><div><b>AI-Powered Full Stack Development (Bonus Module)</b><small>2026 Edge</small></div></div>
          <svg class="acc-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
        </div>
        <div class="acc-panel">
          <div class="acc-panel-inner">
            <ul>
              <li>AI Coding Assistants (Copilot, Cursor)</li><li>Prompt-to-Code Workflows</li><li>OpenAI/Anthropic API Integration</li>
              <li>Streaming AI Responses in React</li><li>RAG &amp; Vector Databases</li><li>AI Feature Cost &amp; Rate Management</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="acc-item">
        <div class="acc-head">
          <div class="acc-title"><div class="acc-badge">12</div><div><b>Capstone Project &amp; Interview Prep</b><small>Career Launch</small></div></div>
          <svg class="acc-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
        </div>
        <div class="acc-panel">
          <div class="acc-panel-inner">
            <p>Combine everything into one end-to-end capstone: a deployed full stack application with authentication, a database-backed API and an AI-powered feature — followed by DSA/mock interviews and resume review.</p>
          </div>
        </div>
      </div>

    </div>
   </div>
</section> --}}