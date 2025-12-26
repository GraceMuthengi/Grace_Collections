@extends("layouts.website")
@section("title", "Grace Collections - Contact Us")



@section("content")
   <section class="contact" id="contact">
        <div class="contact-container">
            <div class="contact-header">
                <h2 class="section-title">Get In Touch</h2>
                <p class="section-subtitle">We'd love to hear from you</p>
            </div>
            
            <div class="contact-content">
                <div class="contact-form-wrapper">
                    <form id="contactForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" id="firstName" name="firstName" placeholder="John" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" id="lastName" name="lastName" placeholder="Doe" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="john@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" placeholder="How can we help?" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" placeholder="Tell us more about your inquiry..." required></textarea>
                        </div>
                        <button type="submit" class="form-submit">Send Message</button>
                    </form>
                </div>
                
                <div class="contact-info">
                    <div class="info-item">
                        <div class="info-icon">📍</div>
                        <div class="info-content">
                            <h3>Visit Our Flagship Store</h3>
                            <p>Moi Avenue<br>
                            Star Mall<br>
                            Third Floor C13</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">📞</div>
                        <div class="info-content">
                            <h3>Call Us</h3>
                            <p>Main: <a href="tel:+254716621754">+254 716 621 754</a><br>
                            Mon-Fri, 9AM-6PM EAT</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">✉️</div>
                        <div class="info-content">
                            <h3>Email Us</h3>
                            <p>General: <a href="mailto:info@gracecollections.co.ke">info@gracecollections.co.ke</a><br>
                            Support: <a href="mailto:support@gracecollections.co.ke">support@gracecollections.co.ke</a><br>
                            Press: <a href="mailto:press@gracecollections.co.ke">press@gracecollections.co.ke</a></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="map-section">
                <div class="map-container">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.818705091398!2d36.82100087350051!3d-1.2825862356190183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11e5c2971b1b%3A0x8b9e75aa40651df1!2sStar%20Shopping%20Mall!5e0!3m2!1sen!2ske!4v1766246393758!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection