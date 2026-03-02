@extends('layouts.app')

@section('title', 'Services - Ravel Solutions')

@section('content')
<!-- Hero Section -->
<section class="section-padding bg-theme-gradient">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-3 fw-bold text-white mb-4">Our Services</h1>
                <p class="lead text-white opacity-90 mb-5">Comprehensive recruitment and talent solutions designed to connect exceptional talent with innovative companies across all industries.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="#services" class="btn btn-light btn-lg px-4">Explore Services</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg px-4">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="section-padding" id="services">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-theme-dark mb-4">What We Offer</h2>
                <p class="lead text-theme-secondary">Our comprehensive suite of services is designed to address every aspect of your talent acquisition and workforce management needs.</p>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Core Services -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card h-100">
                    <div class="service-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h3>Talent Recruitment</h3>
                    <p>Connect with top-tier professionals across various industries through our extensive network and advanced matching algorithms.</p>
                    <ul class="service-features">
                        <li>Executive Search</li>
                        <li>Direct Hire Placement</li>
                        <li>Industry Specialization</li>
                        <li>Global Talent Pool</li>
                    </ul>
                    <a href="#" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="service-card h-100">
                    <div class="service-icon">
                        <i class="bi bi-search"></i>
                    </div>
                    <h3>Candidate Screening</h3>
                    <p>Comprehensive evaluation process including technical assessments, background verification, and cultural fit analysis.</p>
                    <ul class="service-features">
                        <li>Technical Skills Assessment</li>
                        <li>Background Verification</li>
                        <li>Personality Profiling</li>
                        <li>Reference Checks</li>
                    </ul>
                    <a href="#" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="service-card h-100">
                    <div class="service-icon">
                        <i class="bi bi-briefcase-fill"></i>
                    </div>
                    <h3>Job Posting & Marketing</h3>
                    <p>Strategic job posting across multiple platforms with employer branding to attract the right candidates.</p>
                    <ul class="service-features">
                        <li>Multi-Platform Posting</li>
                        <li>Employer Branding</li>
                        <li>Targeted Advertising</li>
                        <li>Application Management</li>
                    </ul>
                    <a href="#" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="service-card h-100">
                    <div class="service-icon">
                        <i class="bi bi-handshake"></i>
                    </div>
                    <h3>Contract Staffing</h3>
                    <p>Flexible workforce solutions for temporary, contract, and project-based assignments with rapid deployment.</p>
                    <ul class="service-features">
                        <li>Temporary Staffing</li>
                        <li>Contract-to-Hire</li>
                        <li>Project Teams</li>
                        <li>Rapid Deployment</li>
                    </ul>
                    <a href="#" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="service-card h-100">
                    <div class="service-icon">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <h3>HR Consulting</h3>
                    <p>Strategic human resources consulting to optimize your talent acquisition processes and workforce planning.</p>
                    <ul class="service-features">
                        <li>Recruitment Strategy</li>
                        <li>Process Optimization</li>
                        <li>Workforce Planning</li>
                        <li>Market Analysis</li>
                    </ul>
                    <a href="#" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="service-card h-100">
                    <div class="service-icon">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>
                    <h3>Training & Development</h3>
                    <p>Professional development programs and skills training to enhance candidate capabilities and career growth.</p>
                    <ul class="service-features">
                        <li>Skills Development</li>
                        <li>Career Coaching</li>
                        <li>Certification Programs</li>
                        <li>Soft Skills Training</li>
                    </ul>
                    <a href="#" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Industry Expertise -->
<section class="section-padding bg-theme-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-theme-dark mb-4">Industry Expertise</h2>
                <p class="lead text-theme-secondary">We specialize in recruiting for diverse industries with deep understanding of sector-specific requirements.</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="industry-card text-center">
                    <div class="industry-icon">
                        <i class="bi bi-cpu"></i>
                    </div>
                    <h4>Technology</h4>
                    <p>Software development, cybersecurity, data science, and emerging tech roles.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="industry-card text-center">
                    <div class="industry-icon">
                        <i class="bi bi-hospital"></i>
                    </div>
                    <h4>Healthcare</h4>
                    <p>Medical professionals, healthcare administration, and biotech specialists.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="industry-card text-center">
                    <div class="industry-icon">
                        <i class="bi bi-bank"></i>
                    </div>
                    <h4>Finance</h4>
                    <p>Banking, investment, fintech, and financial services expertise.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="industry-card text-center">
                    <div class="industry-icon">
                        <i class="bi bi-gear-wide-connected"></i>
                    </div>
                    <h4>Engineering</h4>
                    <p>Mechanical, electrical, civil, and specialized engineering roles.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section-padding">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-theme-dark mb-4">Our Process</h2>
                <p class="lead text-theme-secondary">A streamlined, efficient approach to finding the perfect match between talent and opportunity.</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">1</div>
                    <h4>Discovery</h4>
                    <p>Understanding your requirements, culture, and specific needs through detailed consultation.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">2</div>
                    <h4>Search</h4>
                    <p>Leveraging our network and advanced tools to identify and attract qualified candidates.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">3</div>
                    <h4>Screening</h4>
                    <p>Comprehensive evaluation including technical assessment and cultural fit analysis.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number">4</div>
                    <h4>Placement</h4>
                    <p>Facilitating the perfect match with ongoing support throughout the placement process.</p>
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
                <h2 class="display-5 fw-bold text-white mb-4">Ready to Transform Your Hiring?</h2>
                <p class="lead text-white opacity-90 mb-5">Join hundreds of companies who trust Ravel Solutions for their talent acquisition needs. Let's discuss how we can help you build your dream team.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg px-5">Get Started Today</a>
                    <a href="tel:+1234567890" class="btn btn-outline-light btn-lg px-5">Call Us Now</a>
                </div>
                <div class="mt-4">
                    <small class="text-white opacity-75">Free consultation • No obligation • Quick response</small>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
