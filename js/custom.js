// js for active class in menu 
  $('.review-slider').slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1000,
  dots:true,
//   arrows:true,
//   centerMargin: '15px'
});

document.addEventListener("DOMContentLoaded", function () {

    let currentPath = window.location.pathname;

    // Fix home page
    if (currentPath === '') {
        currentPath = '/';
    }

    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {

        let linkPath = new URL(link.href).pathname;

        // Fix link home path
        if (linkPath === '') {
            linkPath = '/';
        }

        // Remove old active class
        link.classList.remove('active-nav');

        // Add active class
        if (currentPath === linkPath) {
            link.classList.add('active-nav');
        }

    });

});




$(document).ready(function () {

  const $services = $('#services');
  const $sections = $services.find('.services-content');

  const total = $sections.length;
  const buffer = 2;

  let ticking = false;

  $(window).on('scroll', function () {

    if (!ticking) {
      window.requestAnimationFrame(function () {

        const rect = $services[0].getBoundingClientRect();
        const sectionTop = rect.top;
        const sectionHeight = $services.outerHeight();

        const scrollInside = Math.abs(sectionTop);

        const maxScroll = sectionHeight - window.innerHeight;

        let progress = scrollInside / maxScroll;

        progress = Math.max(0, Math.min(1, progress));

        // 🔥 REMOVE BUFFER FROM CALCULATION
        const effectiveProgress = progress * ((total) / (total + buffer));

        let index = Math.floor(effectiveProgress * total);

        if (index >= total) index = total - 1;

        // update content
        $sections.removeClass('active');
        $sections.eq(index).addClass('active');

        ticking = false;

      });

      ticking = true;
    }

  });

});

// Stats counter js

document.addEventListener("DOMContentLoaded", function () {

    const section = document.querySelector("#stats-section");
    let hasRun = false;

    function startCounters() {

        // 🔥 Select counters ONLY inside this section
        const counters = section.querySelectorAll(".stats-value");

        counters.forEach(counter => {

            const targetText = counter.getAttribute("data-target");

            // Skip non-numbers like 24/7
            if (!/^\d+$/.test(targetText)) {
                counter.innerText = targetText;
                return;
            }

            const target = parseInt(targetText);
            let count = 0;
            const speed = 15;

            const updateCount = () => {
                if (count < target) {
                    count++;
                    counter.innerText = count + "+";
                    setTimeout(updateCount, speed);
                } else {
                    counter.innerText = target + "+";
                }
            };

            updateCount();
        });
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !hasRun) {
                startCounters();
                hasRun = true;
                observer.unobserve(section);
            }
        });
    }, { threshold: 0.5 });

    observer.observe(section);

});

$('.e2e-development').slick({
  dots: true,
  arrow: true,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  centerMargin: '60px',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 420,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
  ]
});
// $('.cmm-slider').slick({
//   prevArrow: '<button class="slick-prev"><i class="bi bi-chevron-left"></i></button>',
//   nextArrow: '<button class="slick-next"><i class="bi bi-chevron-right"></i></button>'
// });


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
            dots: true,
            arrows: false,
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
    const tabs = [
        "#v-pills-webDevlopment-tab",
        "#v-pills-machine-tab",
        "#v-pills-branding-tab",
        "#v-pills-seo-tab",
        "#v-pills-performance-tab",
        "#v-pills-mobileFirst-tab"
    ];

    const section = document.querySelector("#services");

    if (section) {
        window.addEventListener("scroll", () => {

            const scrollTop = window.scrollY;
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;

            if (scrollTop >= sectionTop && scrollTop <= sectionTop + sectionHeight) {

                const relativeScroll = scrollTop - sectionTop;
                const stepHeight = sectionHeight / tabs.length;
                const index = Math.floor(relativeScroll / stepHeight);

                const tab = document.querySelector(tabs[index]);

                if (tab && !tab.classList.contains("active")) {
                    new bootstrap.Tab(tab).show();
                }
            }
        });
    }

});

  $('.build-slide').slick({
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    fade: true,
    speed: 800
  });


// Initial pop up script  
  document.addEventListener("DOMContentLoaded", function () {

    const navType = performance.getEntriesByType("navigation")[0]?.type;

    if (!sessionStorage.getItem("popupShown") || navType === "reload") {

        setTimeout(function () {
            var popup = new bootstrap.Modal(document.getElementById('infoPopup'));
            popup.show();

            sessionStorage.setItem("popupShown", "true");

        }, 10000);
    }

});


// js for subscriberForm
document.getElementById('subscriberForm').addEventListener('submit', function(e) {

    e.preventDefault();

    let form = this;
    let url = form.dataset.url;

    let formData = new FormData(form);

    let button = document.getElementById('subscribeBtn');
    let message = document.getElementById('subscriberMessage');

    // LOADING
    button.innerText = 'Subscribing...';
    button.disabled = true;

    fetch(url, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': form.querySelector('[name=_token]').value,
            'Accept': 'application/json'
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {

        if (data.status === 'success') {

            button.innerText = 'Subscribed';
            message.innerHTML = data.message;

            form.reset();

        } else if (data.status === 'exists') {

            button.innerText = 'Subscribed';
            message.innerHTML = data.message;
        }

        button.disabled = false;

    })
    .catch(error => {

        console.log(error);

        button.innerText = 'Subscribe';
        button.disabled = false;

        message.innerHTML = 'Something went wrong.';
    });

});


tinymce.init({
selector: 'textarea',
plugins: 'code table lists link image',
toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright | bullist numlist | table | code'
});

// Global Modal Function

function showGlobalModal(data) {
    const modalTitle =
        document.getElementById("modalTitle");
    const modalMessage =
        document.getElementById("modalMessage");
    const modalButton =
        document.getElementById("modalButton");
    // Set title
    modalTitle.innerHTML = data.title;
    // Set message
    modalMessage.innerHTML = data.message;
    // Button logic
    if (data.button_text && data.button_link) {
        modalButton.classList.remove("d-none");
        modalButton.innerText = data.button_text;
        modalButton.href = data.button_link;
    } else {
        modalButton.classList.add("d-none");
    }
    // Show modal
    const modal =
        new bootstrap.Modal(
            document.getElementById("globalModal")
        );

    modal.show();

}

// pdf download js 
document.addEventListener('DOMContentLoaded', function () {

    const pdfModal = document.getElementById('downloadPdfModal');

    if (!pdfModal) return;

    pdfModal.addEventListener('show.bs.modal', function (event) {

        const button = event.relatedTarget;

        const course = button.dataset.course;
        const slug = button.dataset.slug;
        const description = button.dataset.description;

        document.getElementById('pdfModalTitle').innerText =
            'Download ' + course + ' Brochure';

        document.getElementById('pdfModalDescription').innerText =
            description;

        document.getElementById('pdfCourseSlug').value = slug;
        document.getElementById('pdfCourseName').value = course;

    });

});