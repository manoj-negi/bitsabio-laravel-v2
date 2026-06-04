<div class="enquery-popup-form">
    <h5>Enroll Now</h5>    
        <form method="POST" action="{{route ('contact.send')}}" class="needs-validation" novalidate>
            @csrf
            <input type="hidden" name="inquiry_type" value="course">
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