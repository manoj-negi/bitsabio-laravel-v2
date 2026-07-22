<!-- Download PDF Modal -->
<div class="modal fade glass-white" id="downloadPdfModal" tabindex="-1" aria-labelledby="downloadPdfModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Header -->
            <div class="modal-header border-0 pb-0 px-4 pt-3">

                <button type="button" class="cs-close-modal btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>

            </div>

            <!-- Body -->
            <div class="modal-body cs-modal-body px-4 pt-0 pb-4">

                <!-- Heading -->
                <span class="text-uppercase text-primary fw-semibold small">
                    DOWNLOAD COURSE PDF
                </span>

                <h3 class="fw-bold mt-2 mb-2">
                    Start Your IT Career 🚀
                </h3>

                <p class="text-muted small mb-3">
                    Fill in your details to receive the complete course brochure.
                </p>


                <!-- Form -->
                @include('components.courseForm')

                <!-- Simple Note -->
                <div class="text-center mt-3">

                    <small class="text-muted d-block">
                        <i class="bi bi-envelope-check text-primary me-1"></i>
                        Your course PDF will be sent to your email after submitting the form.
                    </small>

                </div>

            </div>

        </div>
    </div>

</div>
