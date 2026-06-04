<div class="enquery-popup-form">
    <h5>Enroll Now</h5>    
        <form method="POST" action="{{route ('contact.send')}}" class="needs-validation" novalidate>
            @csrf
            <input type="hidden" name="inquiry_type" value="service">
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
                <textarea name="message" class="form-control" placeholder="Enter Message..." rows="1"required></textarea>
            </div>
            <div class="invalid-feedback">
                Enter Message...
            </div>
            <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="300">
                <button type ="submit"class="btn btn-gradient w-100 justify-content-center" id="submitBtn">
                    Submit
                </button>
            </div>
        </form>
</div>