<div class="modal fade" id="globalModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4 rounded-4">
            <!-- Close -->
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal">         </button>

            <!-- Icon -->
            <div id="modalIcon" class="mx-auto mb-3 d-flex align-items-center justify-content-center" style="width:70px; height:70px; background:#28a745; border-radius:50%;">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"> 
                    <polyline points="5 13 9 17 19 7"></polyline>
                </svg>
            </div>

            <!-- Title -->
            <h3 class="fw-bold mb-3" id="modalTitle">Success</h3>

            <!-- Dynamic Content -->
            <div id="modalMessage" class="text-muted"></div>

            <!-- Buttons -->
            <div class="mt-4 text-end">

                <a href="#" id="modalButton" class="btn btn-primary rounded-pill px-4 d-none">
                    View More
                </a>
                <button class="btn btn-success rounded-pill px-4" data-bs-dismiss="modal">
                    OK
                </button>
            </div>

            <!-- OK -->
            <div class="mt-3">

            </div>
        </div>
    </div>
</div>