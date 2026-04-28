@extends('layouts.app')

@section('content')


    <!-- Blog Detail Hero -->
    <section class="blog-detail-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <span class="blog-category" data-aos="fade-down">{{ $blog->category }}</span>
                    <h1 data-aos="fade-up" data-aos-delay="100">{{ $blog->blog_heading }}</h1>
                    
                    {{-- Image --}}
                    <div class="blog-detail-img mt-3">
                         <img src="{{ $blog->image }}" alt="{{ $blog->title }}">
                    </div>

                    <div class="blog-detail-meta" data-aos="fade-up" data-aos-delay="200">
                        <span>{{$blog->author }} </span>

                        <span>·</span>
                        {{-- <span>January 28, 2026</span> --}}
                        <span>
                            {{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}
                        </span>
                        <span>·</span>
                        <span>{{ $blog->read_time }} </span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Blog Content -->
    <div class="blog-detail-content">
    {!! $blog->content !!}
    </div>

    <!-- CTA Section -->
    <section class="py-5" style="background-color: var(--color-surface);">
        <div class="container">
            <div class="cta-banner" data-aos="fade-up">
                <h2>Want this built for your business?</h2>
                <p>Our team has deployed RAG systems handling millions of queries. Let's discuss your use case.</p>
                <a href="{{url('/contact')}}" class="btn btn-lg">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                    Contact Us
                </a>
            </div>
        </div>
    </section>

  @endsection
