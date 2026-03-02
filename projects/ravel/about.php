<?php $pageTitle = 'About Us'; ?>
<?php include 'includes/header.php'; ?>

<style>
.hero-section {
    background: linear-gradient(135deg, var(--bg-secondary) 0%, var(--bg-primary) 100%);
    padding: 5rem 0;
    position: relative;
    overflow: hidden;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 50%;
    height: 100%;
    background: radial-gradient(circle at center, rgba(39, 160, 237, 0.1) 0%, transparent 70%);
}

.section-padding {
    padding: 5rem 0;
}

.bg-theme-gradient {
    background: linear-gradient(135deg, var(--color-primary) 0%, #1e8fd6 100%);
}

.bg-theme-light {
    background: var(--bg-secondary);
}

.foundation-card {
    background: var(--bg-tertiary);
    border: 1px solid var(--border-color);
    border-radius: 16px;
    padding: 2.5rem;
    height: 100%;
    transition: all 0.3s ease;
}

.foundation-card:hover {
    border-color: var(--color-primary);
    transform: translateY(-5px);
}

.foundation-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--color-primary) 0%, #1e8fd6 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    font-size: 2rem;
    color: white;
}

.foundation-card h3 {
    color: var(--text-primary);
    font-weight: 700;
    margin-bottom: 1rem;
}

.foundation-card p {
    color: var(--text-muted);
    line-height: 1.7;
    margin-bottom: 0;
}

.stat-card {
    background: var(--bg-tertiary);
    border: 1px solid var(--border-color);
    border-radius: 12px;
    padding: 1.5rem;
}

.stat-card h3 {
    font-size: 2.5rem;
    margin-bottom: 0.25rem;
}

.team-card {
    background: var(--bg-secondary);
    border: 1px solid var(--border-color);
    border-radius: 16px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.team-card:hover {
    border-color: var(--color-primary);
    transform: translateY(-5px);
}

.team-image {
    position: relative;
    height: 280px;
    background: var(--bg-tertiary);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 5rem;
    color: var(--color-primary);
}

.team-info {
    padding: 1.5rem;
}

.team-info h4 {
    color: var(--text-primary);
    font-weight: 700;
    margin-bottom: 0.25rem;
}

.advantage-card {
    background: var(--bg-tertiary);
    border: 1px solid var(--border-color);
    border-radius: 12px;
    padding: 1.5rem;
    display: flex;
    gap: 1rem;
    height: 100%;
    transition: all 0.3s ease;
}

.advantage-card:hover {
    border-color: var(--color-primary);
}

.advantage-icon {
    width: 50px;
    height: 50px;
    border-radius: 10px;
    background: rgba(39, 160, 237, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    color: var(--color-primary);
    font-size: 1.5rem;
}

.advantage-content h4 {
    color: var(--text-primary);
    font-weight: 600;
    font-size: 1.1rem;
    margin-bottom: 0.5rem;
}

.advantage-content p {
    color: var(--text-muted);
    font-size: 0.9rem;
    margin-bottom: 0;
    line-height: 1.6;
}
</style>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold text-white mb-4">About Ravel Solutions</h1>
                <p class="lead text-white opacity-75 mb-4">We are passionate about connecting exceptional talent with innovative companies, creating lasting partnerships that drive success for everyone involved.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="#our-story" class="btn btn-light btn-lg px-4">Our Story</a>
                    <a href="jobs.php" class="btn btn-outline-light btn-lg px-4">Browse Jobs</a>
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
                <h2 class="display-5 fw-bold mb-4">Our Story</h2>
                <p class="lead" style="color: var(--text-secondary);">Founded with a vision to revolutionize the recruitment industry, Ravel Solutions has grown from a small startup to a trusted partner for companies worldwide.</p>
                <p style="color: var(--text-muted);">Our journey began when we recognized the gap between exceptional talent and the companies that needed them most. We set out to build bridges, not just place candidates, but create meaningful connections that drive mutual success.</p>
                <p style="color: var(--text-muted);">Today, we're proud to have facilitated thousands of successful placements across diverse industries, helping both individuals find their dream roles and companies build their dream teams.</p>
                <div class="row g-3 mt-4">
                    <div class="col-6">
                        <div class="stat-card text-center">
                            <h3 class="text-primary fw-bold mb-1" style="color: var(--color-primary) !important;">5000+</h3>
                            <p style="color: var(--text-muted); margin-bottom: 0;">Successful Placements</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card text-center">
                            <h3 class="fw-bold mb-1" style="color: var(--color-primary);">500+</h3>
                            <p style="color: var(--text-muted); margin-bottom: 0;">Partner Companies</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div style="background: var(--bg-tertiary); border-radius: 16px; height: 400px; display: flex; align-items: center; justify-content: center; border: 1px solid var(--border-color);">
                    <div class="text-center">
                        <i class="bi bi-building" style="font-size: 5rem; color: var(--color-primary);"></i>
                        <h4 class="mt-3" style="color: var(--text-primary);">Building the Future of Work</h4>
                        <p style="color: var(--text-muted);">One connection at a time</p>
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
                <h2 class="display-5 fw-bold mb-4">Our Foundation</h2>
                <p class="lead" style="color: var(--text-secondary);">The principles that guide everything we do</p>
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
                <h2 class="display-5 fw-bold mb-4">Meet Our Leadership</h2>
                <p class="lead" style="color: var(--text-secondary);">The experienced professionals driving our vision forward</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="team-card text-center">
                    <div class="team-image">
                        <i class="bi bi-person-circle"></i>
                    </div>
                    <div class="team-info">
                        <h4>Sarah Johnson</h4>
                        <p style="color: var(--color-primary); font-weight: 600;">Chief Executive Officer</p>
                        <p style="color: var(--text-muted); font-size: 0.9rem;">15+ years in talent acquisition and strategic HR leadership.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="team-card text-center">
                    <div class="team-image">
                        <i class="bi bi-person-circle"></i>
                    </div>
                    <div class="team-info">
                        <h4>Michael Chen</h4>
                        <p style="color: var(--color-primary); font-weight: 600;">Chief Technology Officer</p>
                        <p style="color: var(--text-muted); font-size: 0.9rem;">Expert in recruitment technology and platform development.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="team-card text-center">
                    <div class="team-image">
                        <i class="bi bi-person-circle"></i>
                    </div>
                    <div class="team-info">
                        <h4>Emily Rodriguez</h4>
                        <p style="color: var(--color-primary); font-weight: 600;">Head of Operations</p>
                        <p style="color: var(--text-muted); font-size: 0.9rem;">Operational excellence and client relationship management specialist.</p>
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
                <h2 class="display-5 fw-bold mb-4">Why Choose Ravel Solutions?</h2>
                <p class="lead" style="color: var(--text-secondary);">What sets us apart in the competitive recruitment landscape</p>
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
                        <i class="bi bi-shield-check"></i>
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
                        <i class="bi bi-globe"></i>
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
                <p class="lead text-white opacity-75 mb-4">Let's start building your dream team together. Our experts are ready to understand your needs and deliver exceptional results.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="contact.php" class="btn btn-light btn-lg px-5">Contact Us Today</a>
                    <a href="jobs.php" class="btn btn-outline-light btn-lg px-5">Browse Jobs</a>
                </div>
                <div class="mt-4">
                    <small class="text-white opacity-75">Join 500+ companies who trust us with their talent needs</small>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
