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
    <section class="page-hero " style="background-color: var(--color-surface)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h1 data-aos="fade-up">
                        {{-- <span class="color-liner-004ED0"> --}}
                        {{ $interviewQuestion->title }}
                        {{-- </span> --}}
                    </h1>

                    @if ($interviewQuestion->short_description)
                        <p data-aos="fade-up" data-aos-delay="100">
                            {{ $interviewQuestion->short_description }}
                        </p>
                    @endif

                    @if ($interviewQuestion->average_salary)
                        <h4 data-aos="fade-up">
                            Average Salary Package:
                            <span class="color-liner-004ED0">
                                {{ $interviewQuestion->average_salary['min_salary'] ?? '' }}
                            </span>
                            <span data-aos="fade-up">to</span>
                            <span class="color-liner-004ED0">
                                {{ $interviewQuestion->average_salary['max_salary'] ?? '' }}
                            </span>
                        </h4>
                    @endif

                    <div class="row mt-4 mb-4">
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
                    </div>

                </div>

                <div class="col-md-5">
                    <div class="">
                        <img src="{{ asset('public/storage/' . $interviewQuestion->image) }}"
                            alt="{{ $interviewQuestion->title }}">
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- Course Content  --}}
    {{-- <section class="py-5">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg">
                    <h2 class="mb-4">
                        {{ $interviewQuestion->title }}
                    </h2>
                    @if (!empty($interviewQuestion->content))
                        @foreach ($interviewQuestion->content as $item)
                            <div class="mb-5">
                                <h4 class="fw-bold mb-3">
                                    {{ $loop->iteration }}. {{ $item['question'] }}
                                </h4>
                                <div class="interview-answer">
                                    {!! $item['answer'] !!}
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section> --}}

    {{--  Curriculum Breakdown  --}}
    <section class="page-hero py-5 my-5" id="faq">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h3 class="text-center mb-3" data-aos="fade-up">{{ $interviewQuestion->title }}</h3>
                    <div class="container py-5">
                        <div class="accordion custom-accordion" id="faqAccordion">
                            @foreach ($interviewQuestion->content as $item)
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq{{ $loop->iteration }}">
                                            {{ $loop->iteration }}. {{ $item['question'] }}
                                        </button>
                                    </h3>
                                    <div id="faq{{ $loop->iteration }}"
                                        class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            {!! $item['answer'] !!}
                                            @if (!empty($item['code']))
                                                <div class="mt-3">
                                                    <pre class="bg-dark text-white p-3 rounded overflow-auto"><code>{{ $item['code'] }}</code></pre>
                                                </div>
                                            @endif
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

    <!-- CTA Section -->
    @include('components.inquiryForm')

@endsection
