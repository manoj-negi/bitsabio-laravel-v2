@extends('layouts.app')
@section('meta_title', 'BitSabio - curriculum')

@section('meta_description',
    'Learn web development, AI technologies, design, and digital skills through practical
    courses and industry-focused training programs.')
@section('meta_keywords', 'web development courses, AI courses, programming training, digital skills')
@section('og_title', 'BitSabio Courses')
@section('og_description', 'Industry-ready courses and training programs.')

@section('content')

    <!-- ========== HERO SECTION ========== -->
    @foreach ($course->curriculum_hero ?? [] as $hero)
        <section class="page-hero">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <div class="hero-badge aos-init aos-animate" data-aos="fade-down">
                            <i class="bi bi-circle-fill" style="color: var(--gradient-blue); font-size: 7px;"></i>
                            <span>Professional Certification</span>
                        </div>
                        <h1 data-aos="fade-up"> {{ $hero['title'] }}</h1>

                        <p data-aos="fade-up" data-aos-delay="100">
                            {{ $hero['description'] }}
                        </p>
                        <div class="d-flex align-items-center">
                            <a href="#contact" class="btn btn-gradient btn-lg me-3" data-aos="fade-up" data-aos-delay="200">
                                Enroll Now
                            </a>
                            {{-- <a type="button" class="btn btn-glass text-primary" data-bs-toggle="modal"
                            data-bs-target="#downloadPdfModal">
                            Download PDF
                            <i class="bi bi-download text-primary"></i>
                        </a> --}}
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="contact-hero-img">
                            {{-- <img class="rounded" src="{{ url('/public/storage/' . $hero['curriculum-hero_image']) }}" --}}
                            {{-- alt="{{ $hero['title'] }}"> --}}
                            @include('components.courseForm')
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endforeach
    {{-- <div class="roadmap-view">
<div class="wrap">

  <span class="eyebrow">YOUR LEARNING PATH</span>
  <h1>The Complete Full-Stack Development Roadmap</h1>
  <p class="sub">A four-phase path — from web fundamentals to building, shipping and scaling production-ready full-stack applications.</p>

  <!-- PHASE 1 -->
  <div class="phase">
    <div class="rail"></div>
    <div class="num"><span class="n">1</span><span class="l">PHASE</span></div>
    <div class="card">
      <h2>Web Foundations</h2>
      <p class="desc">Before touching a framework, you master how the web actually works — markup, styling, logic and version control:
      <span class="tags" style="display:inline-flex;vertical-align:middle;">
        <span class="tag">HTML &amp; CSS</span><span class="arrow">→</span><span class="tag">JavaScript</span><span class="arrow">→</span><span class="tag">Git &amp; GitHub</span>
      </span></p>
      <div class="cols">
        <div class="col">
          <h3>Markup &amp; Styling</h3>
          <ul>
            <li><b>HTML5:</b> semantic structure, accessibility and forms.</li>
            <li><b>CSS3:</b> Flexbox, Grid, responsive design &amp; media queries.</li>
            <li><b>Tailwind CSS:</b> utility-first styling for fast iteration.</li>
          </ul>
        </div>
        <div class="col">
          <h3>Logic &amp; Tooling</h3>
          <ul>
            <li><b>JavaScript (ES6+):</b> DOM, async/await, fetch &amp; modules.</li>
            <li><b>Git &amp; GitHub:</b> branching, pull requests, collaboration.</li>
            <li><b>DevTools &amp; npm:</b> debugging and package management.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- PHASE 2 -->
  <div class="phase">
    <div class="rail"></div>
    <div class="num"><span class="n">2</span><span class="l">PHASE</span></div>
    <div class="card">
      <h2>Frontend Development <span class="badge">CLIENT-SIDE</span></h2>
      <p class="desc">Turn static pages into dynamic, interactive interfaces using a modern component framework.</p>
      <div class="cols">
        <div class="col">
          <h3>Framework &amp; State</h3>
          <ul>
            <li><b>React:</b> components, hooks, and the virtual DOM.</li>
            <li><b>State Management:</b> Context API, Zustand or Redux.</li>
            <li><b>Routing:</b> client-side navigation with React Router.</li>
          </ul>
        </div>
        <div class="col">
          <h3>Data &amp; Quality</h3>
          <ul>
            <li><b>API Integration:</b> REST &amp; fetching with React Query.</li>
            <li><b>TypeScript:</b> static typing for safer components.</li>
            <li><b>Testing:</b> unit tests with Vitest / React Testing Library.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- PHASE 3 -->
  <div class="phase">
    <div class="rail"></div>
    <div class="num"><span class="n">3</span><span class="l">PHASE</span></div>
    <div class="card">
      <h2>Backend Development <span class="badge">SERVER-SIDE</span></h2>
      <p class="desc">Move behind the interface — build the servers, databases and APIs that power your app.</p>
      <div class="cols">
        <div class="col">
          <h3>Server &amp; APIs</h3>
          <ul>
            <li><b>Node.js &amp; Express:</b> building RESTful APIs.</li>
            <li><b>Authentication:</b> JWT, OAuth &amp; session management.</li>
            <li><b>GraphQL:</b> flexible querying as an alternative to REST.</li>
          </ul>
        </div>
        <div class="col">
          <h3>Data &amp; Storage</h3>
          <ul>
            <li><b>SQL:</b> PostgreSQL schema design &amp; queries.</li>
            <li><b>NoSQL:</b> MongoDB for flexible document storage.</li>
            <li><b>ORMs:</b> Prisma or Sequelize for type-safe data access.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- PHASE 4 -->
  <div class="phase">
    <div class="num"><span class="n">4</span><span class="l">PHASE</span></div>
    <div class="card">
      <h2>Deployment &amp; Hands-On Projects <span class="badge">SHIP IT</span></h2>
      <p class="desc">Containerize, deploy and monitor real apps — plus the capstone projects you'll build in this course.</p>
      <div class="cols">
        <div class="col">
          <h3>DevOps Basics</h3>
          <ul>
            <li><b>Docker:</b> containerizing frontend &amp; backend services.</li>
            <li><b>CI/CD:</b> automated builds &amp; deploys with GitHub Actions.</li>
            <li><b>Hosting:</b> Vercel, Render or AWS for production apps.</li>
          </ul>
        </div>
        <div class="col">
          <h3>Starter Projects You'll Build</h3>
          <ul>
            <li><b>Full-Stack Blog:</b> auth, CRUD posts &amp; comments.</li>
            <li><b>Real-Time Chat App:</b> WebSockets &amp; live updates.</li>
            <li><b>E-Commerce Store:</b> cart, payments &amp; order dashboard.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

</div>
</div> --}}
 <!--Interactive Roadmap -->
    @if (!empty($course->roadmap_content))
        {!! $course->roadmap_content !!}
    @endif
    <!--Interactive Roadmap -->
    {{-- <section class="py-5" style="background-color: var(--color-surface);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <h2 class="mb-4" data-aos="fade-up">
                        Interactive Roadmap
                    </h2>
                    @foreach ($course->interactive_roadmap ?? [] as $index => $roadmap)
                        <div class="h-100">
                            <div class="innovators-card" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon">
                                    <i class="{{ $roadmap['icon'] }}"></i>
                                </div>
                                <div>
                                    <h5>
                                        {{ $roadmap['title'] }}
                                    </h5>
                                    <p>
                                        {{ $roadmap['description'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-3">
                    @include('components.courseForm')
                </div>
            </div>
        </div>
    </section> --}}

    {{--  Curriculum Breakdown  --}}
    <section class="page-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h3 class="text-center mb-3" data-aos="fade-up">
                        Structured, Module-by-Module Learning
                    </h3>
                    <div class="container py-5">
                        <div class="accordion custom-accordion" id="faqAccordion">
                            @foreach ($course->curriculum_preview ?? [] as $index => $module)
                                <div class="accordion-item mb-3">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }}" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq{{ $index }}">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Industry Projects --}}
    <section class="py-5">
        <div class="container">
            <h2 class="mb-5">
                Industry Projects
            </h2>
            <div class="blog-grid">
                @foreach ($course->industry_projects ?? [] as $index => $project)
                    <div class="blog-card" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                        <div class="blog-card-image">
                            <img src="{{ url('/public/storage/' . $project['industry_projects_image']) }}"
                                alt="{{ $project['title'] }}">
                        </div>
                        <div class="blog-card-content">
                            <span class="blog-category">
                                {{ implode(', ', $project['tags'] ?? []) }}
                            </span>
                            <h3>
                                {{ $project['title'] }}
                            </h3>
                            <p>
                                {{ $project['description'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Global Career Outcomes --}}

    <section class="py-5" style="background-color: var(--color-surface);">
        <div class="container">
            <div class="text-center mb-5">
                <h2 data-aos="fade-up">Global Career Outcomes</h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Our training approach is designed to help students gain practical skills, confidence, and career
                    success.
                </p>
            </div>

            <div class="service-grid">
                <div class="service-card-compact" data-aos="fade-up" data-aos-delay="100">
                    <h3>Practical Learning</h3>
                    <p class="color-liner-004ED0 fw-bold">Avg.
                        Salary:{{ $course->average_salary['practical_learning'] ?? '' }}</p>
                    <p>Learn through hands-on coding, live projects, case studies, and real-world implementation rather than
                        just theory.</p>
                </div>

                <div class="service-card-compact" data-aos="fade-up" data-aos-delay="200">
                    <h3>Expert Mentorship</h3>
                    <p class="color-liner-004ED0 fw-bold">Avg. Salary:
                        {{ $course->average_salary['expert_mentorship'] ?? '' }}</p>
                    <p>Get guidance from experienced industry professionals who help you learn the latest technologies and
                        best practices.</p>
                </div>

                <div class="service-card-compact" data-aos="fade-up" data-aos-delay="300">
                    <h3>Job-Oriented Training</h3>
                    <p class="color-liner-004ED0 fw-bold">Avg. Salary:
                        {{ $course->average_salary['expert_mentorship'] ?? '' }}</p>
                    <p>Our curriculum is designed according to current industry requirements to make students job-ready.</p>
                </div>
            </div>
    </section>
    {{-- <section class="py-5" style="background-color: var(--color-surface)"> --}}
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-0 pe-md-4">
                    <h4>What You Will Get at Bitsabio?</h4>
                    <p class="text-secondary">Industry-Focused Training with Real Results!</p>
                    <p data-aos="fade-up" data-aos-delay="100">Over the years, we have trained thousands of students and
                        professionals, helping them build strong technical skills and advance their careers in the IT
                        industry.</p>
                    <p>At Bitsabio, we provide 100% practical, job-oriented training programs designed for beginners as well
                        as experienced learners. Whether you are a student, job seeker, working professional, or
                        entrepreneur, our courses are tailored to help you gain real-world knowledge.</p>
                    <p>Our goal is to equip you with in-demand skills, hands-on project experience, and expert guidance so
                        you can confidently step into the tech industry and achieve long-term career success — all at
                        affordable pricing.</p>
                    <div class="mt-4" data-aos="fade-up" data-aos-delay="300">
                        <a href="#contact" type ="submit"class="btn btn-gradient justify-content-center" id="submitBtn">
                            Start Learning Now
                        </a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    {{-- <img class="rounded"  src="./images/certificate.png" alt="certificate"> --}}
                    <img class="rounded" src="{{ asset('images/certificate.png') }}" alt="certificate">
                </div>
            </div>
    </section>
    @include('components.download-pdf-modal')
    @include('components.mainCourseForm')


@endsection
