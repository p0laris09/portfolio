@extends('layouts.app')

@section('title', 'About Us - Ravel Solutions')

@section('content')
<!-- Hero Section -->
<section class="section-padding bg-theme-gradient">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-3 fw-bold text-white mb-4">About Ravel Solutions</h1>
                <p class="lead text-white opacity-90 mb-5">We are passionate about connecting exceptional talent with innovative companies, creating lasting partnerships that drive success for everyone involved.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="#our-story" class="btn btn-light btn-lg px-4">Our Story</a>
                    <a href="{{ route('services') }}" class="btn btn-outline-light btn-lg px-4">Our Services</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Company Overview -->
<section class="section-padding" id="our-story">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold text-theme-dark mb-4">Our Story</h2>
                <p class="lead text-theme-secondary mb-4">Founded with a vision to revolutionize the recruitment industry, Ravel Solutions has grown from a small startup to a trusted partner for companies worldwide.</p>
                <p class="text-theme-secondary mb-4">Our journey began when we recognized the gap between exceptional talent and the companies that needed them most. We set out to build bridges, not just place candidates, but create meaningful connections that drive mutual success.</p>
                <p class="text-theme-secondary mb-4">Today, we're proud to have facilitated thousands of successful placements across diverse industries, helping both individuals find their dream roles and companies build their dream teams.</p>
                <div class="row g-3 mt-4">
                    <div class="col-6">
                        <div class="stat-card text-center">
                            <h3 class="text-theme-primary fw-bold mb-1">5000+</h3>
                            <p class="text-theme-secondary mb-0">Successful Placements</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card text-center">
                            <h3 class="text-theme-primary fw-bold mb-1">500+</h3>
                            <p class="text-theme-secondary mb-0">Partner Companies</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-image-card">
                    <img src="{{ asset('images/office.jpg') }}" alt="Our Team" class="img-fluid rounded-3">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <h4 class="text-white fw-bold">Building the Future of Work</h4>
                            <p class="text-white opacity-90">One connection at a time</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission, Vision, Values -->
<section class="section-padding bg-theme-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-theme-dark mb-4">Our Foundation</h2>
                <p class="lead text-theme-secondary">The principles that guide everything we do</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="foundation-card text-center">
                    <div class="foundation-icon">
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>To provide innovative recruitment solutions that bridge the gap between talented professionals and forward-thinking companies, creating lasting partnerships that drive success for all parties involved.</p>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="foundation-card text-center">
                    <div class="foundation-icon">
                        <i class="bi bi-eye-fill"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>To be the leading platform that transforms how organizations find talent and how professionals discover their next career opportunity, making the recruitment process more human and effective.</p>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="foundation-card text-center">
                    <div class="foundation-icon">
                        <i class="bi bi-heart-fill"></i>
                    </div>
                    <h3>Our Values</h3>
                    <p>Integrity, excellence, innovation, and genuine care for people. We believe that great companies are built by great people, and we're committed to making those connections happen.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="section-padding">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-theme-dark mb-4">Meet Our Leadership</h2>
                <p class="lead text-theme-secondary">The experienced professionals driving our vision forward</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="team-card text-center">
                    <div class="team-image">
                        <img src="{{ asset('images/team-1.jpg') }}" alt="CEO" class="img-fluid">
                        <div class="team-overlay">
                            <div class="social-links">
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Sarah Johnson</h4>
                        <p class="text-theme-primary fw-semibold">Chief Executive Officer</p>
                        <p class="text-theme-secondary">15+ years in talent acquisition and strategic HR leadership.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="team-card text-center">
                    <div class="team-image">
                        <img src="{{ asset('images/team-2.jpg') }}" alt="CTO" class="img-fluid">
                        <div class="team-overlay">
                            <div class="social-links">
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Michael Chen</h4>
                        <p class="text-theme-primary fw-semibold">Chief Technology Officer</p>
                        <p class="text-theme-secondary">Expert in recruitment technology and platform development.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="team-card text-center">
                    <div class="team-image">
                        <img src="{{ asset('images/team-3.jpg') }}" alt="Head of Operations" class="img-fluid">
                        <div class="team-overlay">
                            <div class="social-links">
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Emily Rodriguez</h4>
                        <p class="text-theme-primary fw-semibold">Head of Operations</p>
                        <p class="text-theme-secondary">Operational excellence and client relationship management specialist.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="section-padding bg-theme-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-theme-dark mb-4">Why Choose Ravel Solutions?</h2>
                <p class="lead text-theme-secondary">What sets us apart in the competitive recruitment landscape</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6 col-md-6">
                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="bi bi-lightning-charge-fill"></i>
                    </div>
                    <div class="advantage-content">
                        <h4>Speed & Efficiency</h4>
                        <p>Our streamlined process and extensive network enable us to deliver qualified candidates faster than traditional methods.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6">
                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="bi bi-shield-check-fill"></i>
                    </div>
                    <div class="advantage-content">
                        <h4>Quality Assurance</h4>
                        <p>Rigorous screening processes ensure that every candidate we present meets your exact requirements and cultural fit.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6">
                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="bi bi-globe-americas"></i>
                    </div>
                    <div class="advantage-content">
                        <h4>Global Reach</h4>
                        <p>Access to talent pools across multiple markets and regions, giving you the best candidates regardless of location.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6">
                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="advantage-content">
                        <h4>Personalized Service</h4>
                        <p>Dedicated account managers who understand your business and provide tailored solutions for your unique needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding bg-theme-gradient">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-white mb-4">Ready to Partner With Us?</h2>
                <p class="lead text-white opacity-90 mb-5">Let's start building your dream team together. Our experts are ready to understand your needs and deliver exceptional results.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg px-5">Contact Us Today</a>
                    <a href="{{ route('services') }}" class="btn btn-outline-light btn-lg px-5">View Our Services</a>
                </div>
                <div class="mt-4">
                    <small class="text-white opacity-75">Join 500+ companies who trust us with their talent needs</small>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
