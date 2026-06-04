@extends('layouts.app')
{{-- meta tags --}}
@section('meta_title', $blog->tags['meta']['title'] ?? $blog->title. ' | BitSabio')
@section('meta_description', $blog->tags['meta']['description'] ?? '')
@section('meta_keywords', $blog->tags['meta']['keywords'] ?? '')
@section('meta_robots', $blog->tags['meta']['robots'] ?? 'index, follow')
@section('meta_canonical', $blog->tags['meta']['canonical'] ?? url()->current())


{{-- open graph --}}
@section('og_title', $blog->tags['open_graph']['title'] ?? $blog->title)

@section('og_description', 
    $blog->tags['open_graph']['description'] 
    ?? $blog->tags['meta']['description'] 
    ?? ''
)
@section('og_type', $blog->tags['open_graph']['type'] ?? 'article')
@section('og_url', $blog->tags['open_graph']['url'] ?? url()->current())

@section('content')

    <!-- Blog Detail Hero -->
    <section class="blog-detail-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <span class="blog-category" data-aos="fade-down">{{ $blog->category }}</span>
                    <h1 data-aos="fade-up" data-aos-delay="100">{{ $blog->short_description }}</h1>
                    
                    {{-- Image --}}
                    <div class="blog-detail-img mt-3">
                        <img src="{{ url('/public/storage/' . $blog->image) }}" alt="{{ $blog->title }}">                                                                                    

                    </div>

                    <div class="blog-detail-meta" data-aos="fade-up" data-aos-delay="200">
                        <span>{{$blog->author }} </span>

                        <span>·</span>
                        <span>
                            {{ $blog->created_at->format('M d, Y') }}

                        </span>
                     
                    </div>
                </div>
            </div>
<!-- Blog Content -->
    <div class="blog-detail-content">
    {!! $blog->content !!}
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
                            <button type="submit" class="btn btn-white">Subscribe</button>
                        </div>
                             {{-- MESSAGE --}}
                        <div id="subscriberMessage" class="mt-3 text-white"></div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Main inquiry form  --}}
      @include('components.mainCourseForm')
  @endsection
