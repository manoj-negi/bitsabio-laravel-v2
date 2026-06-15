@extends('layouts.app')
@section('meta_title', 'BitSabio - Blogs')

@section('meta_description', 'Read the latest articles, insights, tutorials, and industry trends on AI, web development, SEO, design, and digital growth.')
@section('meta_keywords', 'AI blog, web development blog, SEO articles, technology insights')
@section('og_title', 'BitSabio Blog')
@section('og_description', 'Latest articles and insights from BitSabio.')

@section('content')

    <!-- Page Hero -->
   <section class="page-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="hero-badge aos-init aos-animate" data-aos="fade-down">
                        <i class="bi bi-circle-fill" style="color: var(--gradient-blue); font-size: 7px;"></i>
                        <span>Enterprise AI Strategies</span>
                    </div>
                    <h1 data-aos="fade-up">AI Insights & <span class="color-liner-004ED0">Engineering Guides</span> </h1>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Practical AI knowledge, implementation strategies, and real-world case studies

                    </p>
                    <div class="d-flex align-items-center">
                        <a href="{{url('/contact')}}" class="btn btn-gradient btn-lg me-3" data-aos="fade-up" data-aos-delay="200">
                        Book Free Consultation
                    </a>
                    <a href="{{url('/services')}}" class="btn btn-gray btn-lg" data-aos="fade-up" data-aos-delay="200">
                        Explore Service
                    </a>
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="">
                        <img class="rounded" src="./images/data-science.jpg" alt="service-hero-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Filters -->
    <section class="py-4">
        <div class="container">
            <div class="filter-pills" data-aos="fade-up">
                <div class="filter-pill active" data-filter="all">All</div>
                <div class="filter-pill" data-filter="ai & ml">AI & ML</div>
                <div class="filter-pill" data-filter="rag & llm">RAG & LLMs</div>
                <div class="filter-pill" data-filter="data science">Data Science</div>
                <div class="filter-pill" data-filter="product & ux">Product & UX</div>
                <div class="filter-pill" data-filter="engineering">Engineering</div>
                <div class="filter-pill" data-filter="cybersecurity">Cybersecurity</div>

            </div>
        </div>
    </section>

    <!-- Blog Grid -->
    
    <section class="py-5">
        <div class="container">
            <div class="blog-grid">

                @forelse($blogs as $blog)
                    <a href="{{ url('/blog/' . $blog->slug) }}" class="blog-card" data-category="{{ strtolower($blog->category) }}" data-aos="fade-up" data-aos-delay="100">
                        <!-- Image -->
                        <div class="blog-card-image">  
                            {{-- <img src="{{ url('/public/storage/' . $blog->image) }}" alt="{{ $blog->title }}">                                                                                     --}}
                            <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}">

                            
                        </div>

                        <!-- Content -->
                        <div class="blog-card-content">
                            <span class="blog-category">{{ $blog->title }}</span>
                            <h3>{{ $blog->short_description}}</h3>

                            <p>
                                {{$blog->description}}
                            </p>

                            <div class="blog-meta">
                                <span>By {{ $blog->author }}</span>
                                <span>·</span>
                                <span>
                                   {{ $blog->created_at->format('M d, Y') }}
                                </span>
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
                        <form id="subscriberForm" data-url="{{ route('subscribe') }}">

                        @csrf
                        <div class="d-flex align-items-center">
                            <input type="email" class="email-form-control me-3" name="email" placeholder="Enter your email" required >
                            <button type="submit" class="btn btn-white" id="subscribeBtn">Subscribe</button>
                        </div>
                             {{-- MESSAGE --}}
                        <div id="subscriberMessage" class="mt-3 text-white text-start"></div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  @endsection

