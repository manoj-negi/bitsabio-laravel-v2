@extends('layouts.app')

@section('content')

   <section class="page-hero">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <div class="hero-badge aos-init aos-animate" data-aos="fade-down">
                        <i class="bi bi-circle-fill" style="color: var(--gradient-blue); font-size: 7px;"></i>
                        <span>Enterprise Redirection Suite</span>
                    </div>
                    <h1 data-aos="fade-up">301 Redirects</h1>
                    <h2>Seamlessly redirect old URLs to new destinations while preserving SEO rankings and user experience.</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Permanent URL redirection that helps maintain search engine rankings, prevents broken links and 404 errors, and improves website migration and restructuring.</p>
                    <div class="d-flex align-items-center">
                        <a href="{{url('/')}}" class="btn btn-gradient btn-lg me-3" data-aos="fade-up" data-aos-delay="200">
                       Get Redirect Setup<i class="bi bi-arrow-right-short"></i>
                    </a>
                    <a href="{{url('/contact')}}" class="btn btn-gray btn-lg" data-aos="fade-up" data-aos-delay="200">
                        Talk to Experts
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

