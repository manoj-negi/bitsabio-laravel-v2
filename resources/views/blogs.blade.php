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
                <a href="{{ url('/blog-detail') }}" class="blog-card" data-category="rag" data-aos="fade-up" data-aos-delay="100">
                    <div class="blog-card-image">
                        <img src="{{ asset('images/edu-bg.jpg') }}">
                    </div>
                    <div class="blog-card-content">
                        <span class="blog-category">RAG & LLMs</span>
                        <h3>Building Production-Ready RAG Systems</h3>
                        <p>A complete guide to implementing Retrieval-Augmented Generation for enterprise applications, from data ingestion to deployment.</p>
                        <div class="blog-meta">
                            <span>By Sarah Chen</span>
                            <span>·</span>
                            <span>Jan 28, 2026</span>
                            <span>·</span>
                            <span>8 min read</span>
                        </div>
                    </div>
                </a>
                
              <a href="{{ url('/blog-detail') }}" class="blog-card"  data-category="data"  data-aos="fade-up" data-aos-delay="200">
                    <div class="blog-card-image">
                        <img src="{{ asset('images/purple-tech-modern.png') }}">
                    </div>
                    <div class="blog-card-content">
                        <span class="blog-category">Data Science</span>
                        <h3>Vector Databases Explained</h3>
                        <p>Understanding semantic search, embeddings, and choosing the right vector database for your AI application.</p>
                        <div class="blog-meta">
                            <span>By Michael Torres</span>
                            <span>·</span>
                            <span>Jan 25, 2026</span>
                            <span>·</span>
                            <span>6 min read</span>
                        </div>
                    </div>
                </a>
                
                <a href="{{ url('/blog-detail') }}"  class="blog-card" data-category="ai"  data-aos="fade-up" data-aos-delay="300">
                    <div class="blog-card-image">
                        <img src="{{ asset('images/futuristic-ai-chip-circuit-board.jpg') }}">
                    </div>
                    <div class="blog-card-content">
                        <span class="blog-category">AI & ML</span>
                        <h3>Fine-Tuning LLMs for Business Use</h3>
                        <p>Learn how to customize large language models for specific domains and improve accuracy with your own data.</p>
                        <div class="blog-meta">
                            <span>By Alex Kumar</span>
                            <span>·</span>
                            <span>Jan 22, 2026</span>
                            <span>·</span>
                            <span>10 min read</span>
                        </div>
                    </div>
                </a>
                  
                <a href="{{ url('/blog-detail') }}"  class="blog-card" data-category="product"   data-aos="fade-up" data-aos-delay="400">
                     <div class="blog-card-image">
                        <img src="{{ asset('images/futuristic-ai-chip-circuit-board.jpg') }}">
                    </div>
                    <div class="blog-card-content">
                        <span class="blog-category">Product & UX</span>
                        <h3>Designing AI-First User Experiences</h3>
                        <p>Best practices for creating intuitive interfaces that make complex AI features accessible to everyone.</p>
                        <div class="blog-meta">
                            <span>By Emma Wilson</span>
                            <span>·</span>
                            <span>Jan 20, 2026</span>
                            <span>·</span>
                            <span>7 min read</span>
                        </div>
                    </div>
                </a>
                
                <a href="{{ url('/blog-detail') }}"  class="blog-card" data-category="engineering"  data-aos="fade-up" data-aos-delay="500">
                    <div class="blog-card-image">
                        <img src="{{ asset('images/edu-bg.jpg') }}">
                    </div>
                    <div class="blog-card-content">
                        <span class="blog-category">Engineering</span>
                        <h3>MLOps Best Practices for 2026</h3>
                        <p>Infrastructure patterns and deployment strategies for scaling machine learning models in production.</p>
                        <div class="blog-meta">
                            <span>By David Park</span>
                            <span>·</span>
                            <span>Jan 18, 2026</span>
                            <span>·</span>
                            <span>12 min read</span>
                        </div>
                    </div>
                </a>
                
                <a href="{{ url('/blog-detail') }}"  class="blog-card" data-category="engineering"  data-aos="fade-up" data-aos-delay="600">
                    <div class="blog-card-image">
                        <img src="{{ asset('images/purple-tech-modern.png') }}">
                    </div>
                    <div class="blog-card-content">
                        <span class="blog-category">AI & ML</span>
                        <h3>Prompt Engineering Fundamentals</h3>
                        <p>Master the art of crafting effective prompts that unlock the full potential of language models.</p>
                        <div class="blog-meta">
                            <span>By Lisa Martinez</span>
                            <span>·</span>
                            <span>Jan 15, 2026</span>
                            <span>·</span>
                            <span>5 min read</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

  @endsection