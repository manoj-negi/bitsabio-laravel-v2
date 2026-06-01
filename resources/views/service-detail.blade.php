@extends('layouts.app')
@section('meta_title', $service->tags['meta']['title'] ?? $service->title . ' | BitSabio')
@section('meta_description', $service->tags['meta']['description'] ?? '')
@section('meta_keywords', $service->tags['meta']['keywords'] ?? '')
@section('meta_robots', $service->tags['meta']['robots'] ?? 'index, follow')
@section('meta_canonical', $service->tags['meta']['canonical'] ?? url()->current())


{{-- open graph --}}
@section('og_title', $service->tags['open_graph']['title'] ?? $service->title)

@section('og_description', 
    $service->tags['open_graph']['description'] 
    ?? $service->tags['meta']['description'] 
    ?? ''
)
@section('og_type', $service->tags['open_graph']['type'] ?? 'article')
@section('og_url', $service->tags['open_graph']['url'] ?? url()->current())

@section('content')

 <!-- Page Hero -->
    <section class="page-hero" style="background-color: var(--color-surface);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h1 data-aos="fade-up">{{ $service->hero_title_black }} <span class="color-liner-004ED0">{{$service->hero_title_blue}}</span> </h1>
                    <p data-aos="fade-up" data-aos-delay="100">{{$service->hero_description}}</p>
                    <div class="d-flex align-items-center">
                    <a href="" class="btn btn-gradient btn-lg me-3" data-aos="fade-up" data-aos-delay="200">
                        Enroll Now
                    </a>
                   
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="">
                        <img src="{{ url('/public/storage/' . $service->hero_image) }}" alt="{{ $service->title }}">                                                                                    
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

<Section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <div class="">
                   <div>
                        {!! $service->content !!}
                    </div>

                </div>

            </div>
            <div class="col-md-3">
                    <div class="blog-right-side">
                        @include('components.serviceForm')
                            <h5 class="mt-5"> Services Offered</h5>
                            
                           <ul>
                                @foreach($services as $service)
                                    <li>
                                        <a href="{{ url('/service/' . $service->slug) }}">
                                            {{ $service->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                    </div>
            </div>
        </div>
    </div>
</Section>

@include('components.inquiryForm')



@endsection