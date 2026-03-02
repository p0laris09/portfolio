@extends('layouts.app')

@section('title', 'Contact Us - Ravel Solutions')

@section('content')
<!-- Hero Section -->
<section class="section-padding bg-theme-gradient">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-3 fw-bold text-white mb-4">Contact Us</h1>
                <p class="lead text-white opacity-90 mb-5">Ready to transform your hiring process? Get in touch with our expert team and discover how we can help you find exceptional talent.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="#contact-form" class="btn btn-light btn-lg px-4">Send Message</a>
                    <a href="tel:+15551234567" class="btn btn-outline-light btn-lg px-4">Call Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Methods -->
<section class="section-padding">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-theme-dark mb-4">Multiple Ways to Connect</h2>
                <p class="lead text-theme-secondary">Choose the method that works best for you. Our team is ready to assist with your recruitment needs.</p>
            </div>
        </div>
        
        <div class="row g-4 mb-5">
            <div class="col-lg-4 col-md-6">
                <div class="contact-method-card text-center">
                    <div class="contact-icon">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <h4>Phone Support</h4>
                    <p class="mb-3">Speak directly with our recruitment specialists for immediate assistance.</p>
                    <a href="tel:+15551234567" class="btn btn-outline-theme">(555) 123-4567</a>
                    <small class="d-block mt-2 text-muted">Mon-Fri 9AM-6PM EST</small>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="contact-method-card text-center">
                    <div class="contact-icon">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <h4>Email Us</h4>
                    <p class="mb-3">Send us your questions and we'll respond within 24 hours.</p>
                    <a href="mailto:contact@ravelsolutions.com" class="btn btn-outline-theme">contact@ravelsolutions.com</a>
                    <small class="d-block mt-2 text-muted">Quick response guaranteed</small>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="contact-method-card text-center">
                    <div class="contact-icon">
                        <i class="bi bi-chat-dots-fill"></i>
                    </div>
                    <h4>Live Chat</h4>
                    <p class="mb-3">Get instant answers to your questions through our live chat support.</p>
                    <button class="btn btn-outline-theme" onclick="openChat()">Start Chat</button>
                    <small class="d-block mt-2 text-muted">Available business hours</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form and Info -->
<section class="section-padding bg-theme-light" id="contact-form">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="contact-form-card">
                    <h3 class="mb-4">Send Us a Message</h3>
                    <p class="text-theme-secondary mb-4">Fill out the form below and our team will get back to you within 24 hours.</p>
                    
                    <form class="contact-form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="firstName" class="form-label">First Name *</label>
                                <input type="text" class="form-control" id="firstName" required>
                            </div>
                            <div class="col-md-6">
                                <label for="lastName" class="form-label">Last Name *</label>
                                <input type="text" class="form-control" id="lastName" required>
                            </div>
                        </div>
                        
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="company" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="company">
                        </div>
                        
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject *</label>
                            <select class="form-control" id="subject" required>
                                <option value="">Select a topic...</option>
                                <option value="recruitment">Recruitment Services</option>
                                <option value="staffing">Contract Staffing</option>
                                <option value="consulting">HR Consulting</option>
                                <option value="training">Training & Development</option>
                                <option value="partnership">Partnership Opportunities</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <label for="message" class="form-label">Message *</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Tell us about your recruitment needs, project requirements, or any questions you have..." required></textarea>
                        </div>
                        
                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="newsletter">
                                <label class="form-check-label" for="newsletter">
                                    Subscribe to our newsletter for industry insights and updates
                                </label>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary-theme btn-lg px-5">
                            <i class="bi bi-send me-2"></i>Send Message
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Contact Information -->
            <div class="col-lg-5">
                <div class="contact-info-card">
                    <h3 class="mb-4">Get in Touch</h3>
                    
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <h5>Our Office</h5>
                            <p>123 Business Street<br>Suite 100<br>New York, NY 10001</p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div>
                            <h5>Business Hours</h5>
                            <p>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 2:00 PM<br>Sunday: Closed</p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div>
                            <h5>Support</h5>
                            <p>24/7 online support<br>Emergency hotline available<br>Dedicated account managers</p>
                        </div>
                    </div>
                    
                    <div class="social-links mt-4">
                        <h5 class="mb-3">Follow Us</h5>
                        <div class="d-flex gap-3">
                            <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section-padding">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-theme-dark mb-4">Frequently Asked Questions</h2>
                <p class="lead text-theme-secondary">Quick answers to common questions about our services.</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                How quickly can you find candidates for our open positions?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our typical turnaround time is 2-4 weeks for most positions, though this can vary based on role complexity and market conditions. For urgent needs, we offer expedited services.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                What industries do you specialize in?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We specialize in Technology, Healthcare, Finance, Engineering, and many other sectors. Our recruiters have deep industry expertise to understand your specific needs.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Do you offer contract and permanent placements?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we offer both contract and permanent staffing solutions, including contract-to-hire arrangements that give you flexibility in your hiring decisions.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                What is your fee structure?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our fees are competitive and transparent. We offer different pricing models including contingency, retained search, and hourly consulting rates. Contact us for a custom quote.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
