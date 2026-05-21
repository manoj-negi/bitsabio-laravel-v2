{{-- POP up --}}
<div class="modal fade  glass-white" id="infoPopup" tabindex="-1">
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

                        <div>
                            <div class="enquery-popup-form">    
                            <form method="POST" action="{{route ('contact.send')}}">
                                @csrf

                                <!-- NAME -->
                                <div class="mb-3">
                                    <input type="text" name="name" class="form-control" placeholder="Your name" required>
                                      <div class="invalid-feedback">
                                        Please enter your name
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                       <div class="invalid-feedback">
                                        Please enter a valid email
                                    </div>
                                </div>
                            
                                <div class="mb-3">
                                    <input type="tel" name="phone" class="form-control" placeholder="Contact Number" required>
                                       <div class="invalid-feedback">
                                        Please enter phone number
                                    </div>
                                </div>
                                 

                             <div class="mb-3">
                                <select name="course" class="form-select" required>
                                    <option value="" disabled selected>Select Course</option>

                                    <option value="full_stack">Full Stack Web Developer</option>
                                    <option value="data_science">Data Science</option>
                                    <option value="data_analyst_ai">Data Analyst With AI</option>
                                    <option value="machine_learning">Machine Learning</option>
                                    <option value="ai_engineer">AI Engineer</option>
                                    <option value="deep_learning">Deep Learning</option>
                                    <option value="generative_ai">Generative AI (LLMs, RAG)</option>
                                    <option value="data_analyst">Data Analyst</option>
                                    <option value="ai_training">Artificial Intelligence</option>
                                    <option value="python">Python</option>
                                    <option value="devops">DevOps</option>
                                    <option value="cloud_security">Cloud Security</option>
                                    <option value="cyber_security_analyst">Cyber Security Analyst</option>
                                    <option value="automation_testing">Automation Testing</option>
                                    <option value="aws">AWS Cloud</option>
                                    <option value="azure">Azure Training</option>
                                    <option value="java">Java Training</option>
                                    <option value="php">PHP</option>
                                    <option value="digital_marketing">Digital Marketing</option>
                                    <option value="ccna">CCNA Training</option>
                                    <option value="it_security">IT Security</option>
                                    <option value="linux">Linux</option>
                                    <option value="mcsa">MCSA-Server</option>
                                </select>

                                <div class="invalid-feedback">
                                    Please select a course
                                </div>
                            </div>
                                <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="300">
                                    <button type ="submit"class="btn btn-gradient w-100 justify-content-center" id="submitBtn">
                                        Start Learning Now
                                    </button>
                                </div>

                            </form>
                        </div>
                        </div>

                    
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