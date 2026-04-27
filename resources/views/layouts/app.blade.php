<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AI-First Digital Agency - Web Development, AI Solutions, UI/UX Design, SEO & Digital Growth Services">
    <title>BitSabio - AI-First Digital Agency</title>

    <!-- CSS -->
    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>

    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">


    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
</head>
<body>

    {{-- NAVBAR --}}
    @include('partials.navbar')

    {{-- PAGE CONTENT --}}
    @yield('content')

    {{-- FOOTER --}}
    @include('partials.footer')

    <!-- JS -->
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- Bootstrap -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    /* =============================
       AOS INIT
    ============================= */
    AOS.init({
        duration: 800,
        easing: 'ease-out-cubic',
        once: true,
        offset: 100
    });

    /* =============================
       SLICK SLIDERS
    ============================= */
    if (window.jQuery) {
        $('.hero-slider').slick({
            dots: false,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 6000
        });

        $('.autoplay').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 5000,
            cssEase: 'linear',
            infinite: true,
            arrows: false,
            dots: false,
            pauseOnHover: false
        });
    }

    /* =============================
       FORM VALIDATION (ALL FORMS)
    ============================= */
    const forms = document.querySelectorAll('.needs-validation');

    forms.forEach(form => {
        form.addEventListener('submit', function (event) {

            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            } else {
                handleFormSubmit(form);
            }

            form.classList.add('was-validated');
        });
    });

    /* =============================
       FORM SUBMIT LOADER
    ============================= */
    function handleFormSubmit(form) {

        const button = form.querySelector('#submitBtn');
        const loader = form.querySelector('#btnLoader');
        const text = form.querySelector('#btnText');

        if (loader) loader.classList.remove('d-none');
        if (text) text.innerText = "Sending...";
        if (button) button.disabled = true;

        // delay for UX (optional)
        setTimeout(() => {
            form.submit();
        }, 1200);
    }

    /* =============================
       RESET BUTTON ON LOAD
    ============================= */
    window.addEventListener('load', function () {
        document.querySelectorAll('#submitBtn').forEach(btn => btn.disabled = false);
        document.querySelectorAll('#btnLoader').forEach(ld => ld.classList.add('d-none'));
        document.querySelectorAll('#btnText').forEach(txt => txt.innerText = "Send Message");
    });

    /* =============================
       BLOG FILTER
    ============================= */
    const buttons = document.querySelectorAll('.filter-pill');
    const cards = document.querySelectorAll('.blog-card');

    buttons.forEach(button => {
        button.addEventListener('click', () => {

            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            const filter = button.dataset.filter;

            cards.forEach(card => {
                const category = card.dataset.category;
                card.style.display = (filter === 'all' || filter === category) ? 'block' : 'none';
            });

        });
    });

    /* =============================
       SCROLL TAB AUTO SWITCH
    ============================= */
    // const tabs = [
    //     "#v-pills-webDevlopment-tab",
    //     "#v-pills-machine-tab",
    //     "#v-pills-branding-tab",
    //     "#v-pills-seo-tab",
    //     "#v-pills-performance-tab",
    //     "#v-pills-mobileFirst-tab"
    // ];

    // const section = document.querySelector("#services");

    // if (section) {
    //     window.addEventListener("scroll", () => {

    //         const scrollTop = window.scrollY;
    //         const sectionTop = section.offsetTop;
    //         const sectionHeight = section.offsetHeight;

    //         if (scrollTop >= sectionTop && scrollTop <= sectionTop + sectionHeight) {

    //             const relativeScroll = scrollTop - sectionTop;
    //             const stepHeight = sectionHeight / tabs.length;
    //             const index = Math.floor(relativeScroll / stepHeight);

    //             const tab = document.querySelector(tabs[index]);

    //             if (tab && !tab.classList.contains("active")) {
    //                 new bootstrap.Tab(tab).show();
    //             }
    //         }
    //     });
    // }

});
</script>

</body>
</html>