@extends('layouts.app')

@section('content')

 <!-- Page Hero -->
    <section class="page-hero" style="background-color: var(--color-surface);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h1 data-aos="fade-up">{{ $course->hero_title_black }} <span class="color-liner-004ED0">{{$course->hero_title_blue}}</span> </h1>
                    <p data-aos="fade-up" data-aos-delay="100">{{$course->hero_description}}</p>
                    <div class="d-flex align-items-center">
                    <a href="" class="btn btn-gradient btn-lg me-3" data-aos="fade-up" data-aos-delay="200">
                        Enroll Now
                    </a>
                   
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="">
                         <img class="rounded-3" src="{{ url('/public/storage/' . $course->hero_image) }}" alt="{{ $course->title }}">                                                                                    
                        
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

                    <div class="">
                    <img src="" alt="">
                    </div>

                    <div>
                        {!! $course->content !!}
                    </div>

                </div>

            </div>
            <div class="col-md-3">
                    <div class="blog-right-side">
                        @include('components.edu-from')
                            <h5 class="mt-5"> Courses Offered</h5>
                            
                           <ul>
                                @foreach($courses as $course)
                                    <li>
                                        <a href="{{ url('/course/' . $course->slug) }}">
                                            {{ $course->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                    </div>
            </div>
        </div>
    </div>
</Section>

@include('components.mainInquiryForm')





@endsection