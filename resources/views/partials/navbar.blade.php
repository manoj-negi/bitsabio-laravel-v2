 <!-- ========== NAVBAR ========== -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand gradient-text" href="/">
                <!-- <img src="./images/bitsabio_logo.png" alt="logo"> -->
                <img src="{{ asset('images/bitsabio_logo.webp') }}" alt="logo">
            </a>
            
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="bi bi-list fs-3" style="color: var(--text-primary);"></i>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto align-items-center">

<li class="nav-item">
    <a class="nav-link {{ Request::segment(1) == null ? 'active-nav' : '' }}"
       href="{{ url('/') }}">
        Home
    </a>
</li>


        <li class="nav-item">
            <a class="nav-link {{ request()->is('about') ? 'active-nav' : '' }}"
               href="{{ url('/about') }}">
                About
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('services') ? 'active-nav' : '' }}"
               href="{{ url('/services') }}">
                Services
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('courses') ? 'active-nav' : '' }}"
               href="{{ url('/courses') }}">
                Courses
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('portfolio') ? 'active-nav' : '' }}"
               href="{{ url('/portfolio') }}">
                Portfolio
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('blogs') ? 'active-nav' : '' }}"
               href="{{ url('/blogs') }}">
                Blogs
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('contact') ? 'active-nav' : '' }}"
               href="{{ url('/contact') }}">
                Contact
            </a>
        </li>

        <li class="nav-item ms-3">
            <a href="{{ url('/contact') }}" class="get-start-btn btn-gradient">
                Get Started
            </a>
        </li>

    </ul>
</div>
        </div>
    </nav>