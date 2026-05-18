@extends('layouts.app')

@section('content')

 <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h1 data-aos="fade-up">{{ $content->hero_title_black }} <span class="color-liner-004ED0">{{$content->hero_title_blue}}</span> </h1>
                    <p data-aos="fade-up" data-aos-delay="100">{{$content->hero_description}}</p>
                    <div class="d-flex align-items-center">
                        <a href="{{url('.storage/app.private/hero-images/01KRJXMFVR9TFPRSETDPC159GR.webp')}}" class="btn btn-gradient btn-lg me-3" data-aos="fade-up" data-aos-delay="200">
                        Enroll Now
                    </a>
                   
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="">
                        {{-- <img src="./images/service-hero-img.webp" alt="service-hero-img"> --}}
                        <img src="{{ url('/public/storage/' . $content->hero_image) }}" alt="{{ $content->title }}">                                                                                    
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

<Section>
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <div class="">

                    <div class="">
                    <img src="" alt="">
                    </div>

                    {{-- <h3>{{ $content->title }}</h3> --}}

                    {{-- <p>{{ $content->short_description }}</p> --}}

                    <div>
                        {!! $content->description !!}
                    </div>

                </div>

            </div>
            <div class="col-md-3">
                    <div class="blog-right-side">
                        @include('components.edu-from')
                            <h5 class="mt:3px"> Courses Offered</h5>
                            <ul>
                                    <li><a href="">Data Science</a></li>
                                    <li><a href="">Python</a></li>
                                    <li><a href="">Data Analyst</a></li>
                                    <li><a href="">Artificial Intelligence & Machine Learning</a></li>
                                    <li><a href="">Full Stack Development</a></li>
                                    <li><a href="">PHP Training</a></li>
                                    <li><a href="">Digital Marketing</a></li>
                                    <li><a href="">Java Training</a></li>
                                    <li><a href="">AWS Cloud</a></li>
                                    <li><a href="">DevOps</a></li>
                                    <li><a href="">Azure Training</a></li>
                                    <li><a href="">IT Security</a></li>
                                    <li><a href="">LINUX Training</a></li>
                                    <li><a href="">MCSA-Server</a></li>
                                    <li><a href="">Web Design</a></li>
                                    <li><a href="">Web Development</a></li>
                                    <li><a href="">UI UX Design</a></li>
                            </ul>
                    </div>
            </div>
        </div>
    </div>
</Section>



@endsection