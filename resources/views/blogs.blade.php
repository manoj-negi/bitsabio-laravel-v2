@extends('layouts.app')

@section('content')




    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 data-aos="fade-up">AI Insights & Engineering Guides</h1>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Practical AI knowledge, implementation strategies, and real-world case studies
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Filters -->
    <section class="py-4">
        <div class="container">
            <div class="filter-pills" data-aos="fade-up">
                <div class="filter-pill active" data-filter="all">All</div>
                <div class="filter-pill" data-filter="ai">AI & ML</div>
                <div class="filter-pill" data-filter="rag">RAG & LLMs</div>
                <div class="filter-pill" data-filter="data">Data Science</div>
                <div class="filter-pill" data-filter="product">Product & UX</div>
                <div class="filter-pill" data-filter="engineering">Engineering</div>
            </div>
        </div>
    </section>

    <!-- Blog Grid -->
    
    <section class="py-5">
        <div class="container">
            <div class="blog-grid">

                @forelse($blogs as $blog)

                    <a href="{{ url('/blog/' . $blog->slug) }}" 
                    class="blog-card" 
                    data-category="{{ strtolower($blog->category) }}" 
                    data-aos="fade-up">

                        <!-- Image -->
                        <div class="blog-card-image">
                            <img src="{{ asset('storage/' . $blog->image) }}" 
                                alt="{{ $blog->title }}">
                        </div>

                        <!-- Content -->
                        <div class="blog-card-content">

                            <span class="blog-category">
                                {{ $blog->category }}
                            </span>

                            <h3>{{ $blog->title }}</h3>

                            <p>
                                {{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 120) }}
                            </p>

                            <div class="blog-meta">
                                <span>By {{ $blog->author }}</span>
                                <span>·</span>
                                <span>
                                    {{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}
                                </span>
                                <span>·</span>
                                <span>{{ $blog->read_time }} min read</span>
                            </div>

                        </div>
                    </a>

                @empty
                    <div class="text-center">
                        <p>No blogs found</p>
                    </div>
                @endforelse

            </div>
        </div>
    </section>

     <!-- Final CTA -->
    <section class="py-5">
        <div class="container">
            <div class="cta-banner-2">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="text-start me-md-4" data-aos="fade-up">
                            <h2>Stay Updated with Latest Tech Insights</h2>
                            <p class="text-white mb-3">Get new articles, tutorials, and industry updates directly in your inbox. No noise, just precision.</p> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <input type="email" class="email-form-control me-3" placeholder="Enter your email" required="" >
                            <a href="#work" class="btn btn-white">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  @endsection

