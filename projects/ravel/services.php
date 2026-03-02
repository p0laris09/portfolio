<?php $currentPage = 'services'; ?>
<?php include 'includes/header.php'; ?>

<style>
    .services-hero {
        padding: 4rem 0;
        background: linear-gradient(135deg, var(--bg-primary) 0%, var(--bg-secondary) 100%);
        position: relative;
        overflow: hidden;
    }
    
    .services-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background: 
            radial-gradient(circle at 20% 50%, rgba(39, 160, 237, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 50%, rgba(99, 102, 241, 0.1) 0%, transparent 50%);
    }
    
    .hero-badge {
        display: inline-block;
        background: rgba(39, 160, 237, 0.1);
        border: 1px solid rgba(39, 160, 237, 0.3);
        color: var(--color-primary);
        padding: 0.5rem 1rem;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 500;
        margin-bottom: 1.5rem;
    }
    
    .hero-title {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 1rem;
        line-height: 1.2;
    }
    
    .hero-title span {
        background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    .hero-description {
        font-size: 1.15rem;
        color: var(--text-secondary);
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.7;
    }
    
    .services-section {
        padding: 5rem 0;
    }
    
    .section-header {
        text-align: center;
        margin-bottom: 3rem;
    }
    
    .section-title {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }
    
    .section-subtitle {
        color: var(--text-secondary);
        font-size: 1.05rem;
        max-width: 600px;
        margin: 0 auto;
    }
    
    .service-card {
        background: var(--bg-secondary);
        border-radius: 16px;
        padding: 2rem;
        height: 100%;
        border: 1px solid var(--border-color);
        transition: all 0.3s ease;
    }
    
    .service-card:hover {
        transform: translateY(-5px);
        border-color: var(--color-primary);
        box-shadow: 0 10px 30px rgba(39, 160, 237, 0.1);
    }
    
    .service-icon {
        width: 60px;
        height: 60px;
        border-radius: 16px;
        background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
    }
    
    .service-icon i {
        font-size: 1.75rem;
        color: white;
    }
    
    .service-title {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 0.75rem;
    }
    
    .service-description {
        color: var(--text-secondary);
        font-size: 0.95rem;
        line-height: 1.6;
    }
    
    .industries-section {
        padding: 5rem 0;
        background: var(--bg-secondary);
    }
    
    .industry-card {
        background: var(--bg-primary);
        border-radius: 12px;
        padding: 1.5rem;
        text-align: center;
        border: 1px solid var(--border-color);
        transition: all 0.3s ease;
    }
    
    .industry-card:hover {
        border-color: var(--color-primary);
        transform: translateY(-3px);
    }
    
    .industry-icon {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        background: rgba(39, 160, 237, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
    }
    
    .industry-icon i {
        font-size: 1.5rem;
        color: var(--color-primary);
    }
    
    .industry-name {
        font-weight: 600;
        color: var(--text-primary);
        font-size: 0.95rem;
    }
    
    .process-section {
        padding: 5rem 0;
    }
    
    .process-step {
        position: relative;
        padding-left: 4rem;
        padding-bottom: 3rem;
    }
    
    .process-step:last-child {
        padding-bottom: 0;
    }
    
    .process-step::before {
        content: '';
        position: absolute;
        left: 20px;
        top: 50px;
        bottom: 0;
        width: 2px;
        background: var(--border-color);
    }
    
    .process-step:last-child::before {
        display: none;
    }
    
    .step-number {
        position: absolute;
        left: 0;
        top: 0;
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        color: white;
        font-size: 1.1rem;
    }
    
    .step-content {
        background: var(--bg-secondary);
        border-radius: 12px;
        padding: 1.5rem;
        border: 1px solid var(--border-color);
    }
    
    .step-title {
        font-weight: 600;
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
    }
    
    .step-description {
        color: var(--text-secondary);
        font-size: 0.9rem;
        margin: 0;
    }
    
    .cta-section {
        padding: 5rem 0;
        background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
        text-align: center;
    }
    
    .cta-title {
        font-size: 2.25rem;
        font-weight: 700;
        color: white;
        margin-bottom: 1rem;
    }
    
    .cta-description {
        font-size: 1.1rem;
        color: rgba(255, 255, 255, 0.9);
        max-width: 600px;
        margin: 0 auto 2rem;
    }
    
    .btn-cta {
        background: white;
        color: var(--color-primary);
        padding: 1rem 2rem;
        border-radius: 10px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s ease;
    }
    
    .btn-cta:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        color: var(--color-accent);
    }
    
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2rem;
        }
        
        .section-title {
            font-size: 1.75rem;
        }
        
        .cta-title {
            font-size: 1.75rem;
        }
    }
</style>

<!-- Hero Section -->
<section class="services-hero">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center position-relative">
                <span class="hero-badge">
                    <i class="bi bi-stars me-2"></i>
                    Our Services
                </span>
                <h1 class="hero-title">
                    Comprehensive <span>Staffing Solutions</span> for Your Business
                </h1>
                <p class="hero-description">
                    From talent acquisition to workforce management, we provide end-to-end staffing services 
                    designed to help your business thrive in today's competitive landscape.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="services-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">What We Offer</h2>
            <p class="section-subtitle">
                Discover our comprehensive range of staffing and recruitment services tailored to meet your unique needs.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <h3 class="service-title">Talent Recruitment</h3>
                    <p class="service-description">
                        Connect with pre-screened, qualified candidates ready to contribute to your team's success. 
                        Our extensive talent pool ensures you find the perfect match.
                    </p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-person-check"></i>
                    </div>
                    <h3 class="service-title">Candidate Screening</h3>
                    <p class="service-description">
                        Thorough background checks, skills assessments, and reference verification to ensure 
                        you hire with confidence and peace of mind.
                    </p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-megaphone"></i>
                    </div>
                    <h3 class="service-title">Job Posting</h3>
                    <p class="service-description">
                        Maximize your reach with strategic job postings across multiple platforms and our 
                        extensive network of active job seekers.
                    </p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <h3 class="service-title">Contract Staffing</h3>
                    <p class="service-description">
                        Flexible staffing solutions for project-based work, seasonal demands, or temporary 
                        coverage without long-term commitments.
                    </p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-briefcase"></i>
                    </div>
                    <h3 class="service-title">HR Consulting</h3>
                    <p class="service-description">
                        Expert guidance on HR policies, compliance, employee relations, and workforce 
                        optimization to strengthen your organization.
                    </p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-lightbulb"></i>
                    </div>
                    <h3 class="service-title">Training & Development</h3>
                    <p class="service-description">
                        Invest in your workforce with customized training programs designed to enhance 
                        skills, boost productivity, and drive results.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Industries Section -->
<section class="industries-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Industries We Serve</h2>
            <p class="section-subtitle">
                Specialized staffing expertise across diverse industries and sectors.
            </p>
        </div>
        
        <div class="row g-3 justify-content-center">
            <div class="col-6 col-md-4 col-lg-3">
                <div class="industry-card">
                    <div class="industry-icon">
                        <i class="bi bi-laptop"></i>
                    </div>
                    <p class="industry-name">Technology</p>
                </div>
            </div>
            
            <div class="col-6 col-md-4 col-lg-3">
                <div class="industry-card">
                    <div class="industry-icon">
                        <i class="bi bi-hospital"></i>
                    </div>
                    <p class="industry-name">Healthcare</p>
                </div>
            </div>
            
            <div class="col-6 col-md-4 col-lg-3">
                <div class="industry-card">
                    <div class="industry-icon">
                        <i class="bi bi-bank"></i>
                    </div>
                    <p class="industry-name">Finance</p>
                </div>
            </div>
            
            <div class="col-6 col-md-4 col-lg-3">
                <div class="industry-card">
                    <div class="industry-icon">
                        <i class="bi bi-gear"></i>
                    </div>
                    <p class="industry-name">Manufacturing</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="process-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-header">
                    <h2 class="section-title">Our Process</h2>
                    <p class="section-subtitle">
                        A streamlined approach to connecting you with the right talent.
                    </p>
                </div>
                
                <div class="process-steps">
                    <div class="process-step">
                        <span class="step-number">1</span>
                        <div class="step-content">
                            <h4 class="step-title">Understand Your Needs</h4>
                            <p class="step-description">
                                We begin by thoroughly understanding your requirements, company culture, 
                                and the specific skills you need in a candidate.
                            </p>
                        </div>
                    </div>
                    
                    <div class="process-step">
                        <span class="step-number">2</span>
                        <div class="step-content">
                            <h4 class="step-title">Source & Screen</h4>
                            <p class="step-description">
                                Our recruiters tap into our vast network and databases to identify 
                                candidates, then rigorously screen them against your criteria.
                            </p>
                        </div>
                    </div>
                    
                    <div class="process-step">
                        <span class="step-number">3</span>
                        <div class="step-content">
                            <h4 class="step-title">Present Top Candidates</h4>
                            <p class="step-description">
                                We present you with a shortlist of the most qualified candidates, 
                                complete with detailed profiles and our professional assessments.
                            </p>
                        </div>
                    </div>
                    
                    <div class="process-step">
                        <span class="step-number">4</span>
                        <div class="step-content">
                            <h4 class="step-title">Support & Follow-Up</h4>
                            <p class="step-description">
                                After placement, we continue to provide support to ensure a successful 
                                integration and long-term satisfaction for both parties.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2 class="cta-title">Ready to Transform Your Workforce?</h2>
        <p class="cta-description">
            Partner with Ravel Solutions today and discover how our staffing expertise 
            can help your business reach new heights.
        </p>
        <a href="signup.php" class="btn-cta">
            Get Started
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
