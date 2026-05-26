{{-- POP up --}}
<div class="modal glass-white" id="infoPopup" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            
            <button type="button" class="cs-close-modal btn-close" data-bs-dismiss="modal"></button>
           
            <div class="cs-modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="modal-body-left">
                        <div class="ss-stats-card d-flex align-items-center">
                            
                            <!-- Icon -->
                            <div class="icon-box">
                            <i class="bi bi-people-fill"></i>
                            </div>

                            <!-- Text -->
                            <div class="ms-4">
                            <h2 class="mb-0 fw-bold text-white">500+</h2>
                            <p class="mb-0 text-light">Students Trained</p>
                            </div>

                        </div>
                        </div>

                     </div>
                    <div class="col-md-6">
                        <div class="modal-body-rigth">
                        <span class="mb-1">CAREER LAUNCHPAD</span>
                        
                        <h4 class="mb-1">Start Your IT Career Today 🚀</h4>
                        <p class="">Learn in-demand skills with real-world projects</p>
                        <ul class="popup-highlights ps-0">
                            <li>
                                Live Projects & Real Experience
                            </li>
                            <li>
                                Industry Expert Trainers
                            </li>
                            <li>
                               Career Guidance & Interview Preparation
                            </li>
                        </ul>

                @include('components.courseForm')
                    
                        <div class="text-center mt-2">
                            <h6 class="mb-0">Join Our Learning Community</h6>
                            <span>Start your IT journey with practical learning.</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>