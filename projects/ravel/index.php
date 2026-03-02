<?php $pageTitle = 'Home'; ?>
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

.hero-title {
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 1.5rem;
    line-height: 1.2;
}

.hero-title span {
    color: var(--color-primary);
}

.hero-subtitle {
    font-size: 1.25rem;
    color: var(--text-muted);
    margin-bottom: 2rem;
    max-width: 500px;
}

.search-box {
    background: var(--bg-secondary);
    border-radius: 16px;
    padding: 1.5rem;
    border: 1px solid var(--border-color);
    max-width: 700px;
}

.search-box .form-control {
    padding: 0.875rem 1rem;
    font-size: 1rem;
}

.stats-section {
    padding: 4rem 0;
    background: var(--bg-secondary);
    border-top: 1px solid var(--border-color);
    border-bottom: 1px solid var(--border-color);
}

.stat-item {
    text-align: center;
    padding: 1.5rem;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--color-primary);
    display: block;
}

.stat-label {
    color: var(--text-muted);
    font-size: 0.9rem;
}

.featured-jobs {
    padding: 4rem 0;
}

.section-title {
    font-size: 1.75rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
}

.job-card {
    background: var(--bg-secondary);
    border: 1px solid var(--border-color);
    border-radius: 12px;
    padding: 1.5rem;
    transition: all 0.2s;
    height: 100%;
}

.job-card:hover {
    border-color: var(--color-primary);
    transform: translateY(-2px);
}

.job-card .company-logo {
    width: 48px;
    height: 48px;
    border-radius: 10px;
    background: var(--color-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.25rem;
}

.job-card h5 {
    font-size: 1rem;
    font-weight: 600;
    margin: 0.75rem 0 0.25rem;
    color: var(--text-primary);
}

.job-card .company-name {
    font-size: 0.85rem;
    color: var(--color-primary);
}

.job-card .job-meta {
    font-size: 0.8rem;
    color: var(--text-muted);
    margin-top: 0.75rem;
}

.job-card .job-meta span {
    margin-right: 1rem;
}

.job-card .salary {
    font-weight: 600;
    color: var(--text-primary);
    margin-top: 0.75rem;
    font-size: 0.9rem;
}

.category-section {
    padding: 4rem 0;
}

.category-card {
    background: var(--bg-secondary);
    border: 1px solid var(--border-color);
    border-radius: 12px;
    padding: 2rem;
    text-align: center;
    transition: all 0.2s;
}

.category-card:hover {
    border-color: var(--color-primary);
    transform: translateY(-3px);
}

.category-card i {
    font-size: 2.5rem;
    color: var(--color-primary);
    margin-bottom: 1rem;
}

.category-card h5 {
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.category-card p {
    font-size: 0.85rem;
    color: var(--text-muted);
    margin: 0;
}
</style>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="hero-title">Find Your <span>Dream Job</span> in the Philippines</h1>
                <p class="hero-subtitle">Connect with top employers and discover opportunities that match your skills and career goals.</p>
                
                <div class="search-box">
                    <div class="row g-2">
                        <div class="col-md-5">
                            <input type="text" class="form-control" placeholder="Job title or keyword">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Location">
                        </div>
                        <div class="col-md-3">
                            <a href="jobs.php" class="btn btn-primary-theme w-100" style="padding: 0.875rem;">
                                <i class="bi bi-search me-1"></i> Search
                            </a>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span style="font-size: 0.85rem; color: var(--text-muted);">Popular: </span>
                        <a href="jobs.php" style="font-size: 0.85rem; margin-right: 0.75rem;">Software Developer</a>
                        <a href="jobs.php" style="font-size: 0.85rem; margin-right: 0.75rem;">Marketing</a>
                        <a href="jobs.php" style="font-size: 0.85rem; margin-right: 0.75rem;">Design</a>
                        <a href="jobs.php" style="font-size: 0.85rem;">Remote</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block text-center">
                <img src="https://via.placeholder.com/500x400/161B22/27A0ED?text=Find+Your+Career" alt="Hero" style="max-width: 100%; border-radius: 20px; opacity: 0.8;">
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6">
                <div class="stat-item">
                    <span class="stat-number">15K+</span>
                    <span class="stat-label">Active Jobs</span>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-item">
                    <span class="stat-number">8K+</span>
                    <span class="stat-label">Companies</span>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-item">
                    <span class="stat-number">50K+</span>
                    <span class="stat-label">Job Seekers</span>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-item">
                    <span class="stat-number">25K+</span>
                    <span class="stat-label">Placements</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Jobs -->
<section class="featured-jobs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="section-title">Featured Jobs</h2>
                <p style="color: var(--text-muted); margin: 0;">Latest opportunities from top employers</p>
            </div>
            <a href="jobs.php" class="btn btn-outline-secondary">View All Jobs <i class="bi bi-arrow-right ms-1"></i></a>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <a href="job-details.php" style="text-decoration: none;">
                    <div class="job-card">
                        <div class="company-logo"><i class="bi bi-building"></i></div>
                        <h5>Senior Full Stack Developer</h5>
                        <p class="company-name">TechCorp Philippines Inc. <i class="bi bi-patch-check-fill"></i></p>
                        <div class="job-meta">
                            <span><i class="bi bi-geo-alt"></i> Makati City</span>
                            <span><i class="bi bi-briefcase"></i> Full-time</span>
                        </div>
                        <p class="salary">₱80,000 - ₱120,000 / month</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="job-details.php" style="text-decoration: none;">
                    <div class="job-card">
                        <div class="company-logo" style="background: #28a745;"><i class="bi bi-palette"></i></div>
                        <h5>UI/UX Designer</h5>
                        <p class="company-name">Creative Studio PH <i class="bi bi-patch-check-fill"></i></p>
                        <div class="job-meta">
                            <span><i class="bi bi-geo-alt"></i> BGC, Taguig</span>
                            <span><i class="bi bi-briefcase"></i> Full-time</span>
                        </div>
                        <p class="salary">₱50,000 - ₱80,000 / month</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="job-details.php" style="text-decoration: none;">
                    <div class="job-card">
                        <div class="company-logo" style="background: #6f42c1;"><i class="bi bi-graph-up"></i></div>
                        <h5>Digital Marketing Manager</h5>
                        <p class="company-name">Growth Agency Co.</p>
                        <div class="job-meta">
                            <span><i class="bi bi-geo-alt"></i> Remote</span>
                            <span><i class="bi bi-briefcase"></i> Full-time</span>
                        </div>
                        <p class="salary">₱60,000 - ₱90,000 / month</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="job-details.php" style="text-decoration: none;">
                    <div class="job-card">
                        <div class="company-logo" style="background: #17a2b8;"><i class="bi bi-bank"></i></div>
                        <h5>Financial Analyst</h5>
                        <p class="company-name">Metro Finance Inc. <i class="bi bi-patch-check-fill"></i></p>
                        <div class="job-meta">
                            <span><i class="bi bi-geo-alt"></i> Ortigas, Pasig</span>
                            <span><i class="bi bi-briefcase"></i> Full-time</span>
                        </div>
                        <p class="salary">₱45,000 - ₱65,000 / month</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="job-details.php" style="text-decoration: none;">
                    <div class="job-card">
                        <div class="company-logo" style="background: #fd7e14;"><i class="bi bi-people"></i></div>
                        <h5>HR Manager</h5>
                        <p class="company-name">Human Capital Solutions</p>
                        <div class="job-meta">
                            <span><i class="bi bi-geo-alt"></i> Quezon City</span>
                            <span><i class="bi bi-briefcase"></i> Full-time</span>
                        </div>
                        <p class="salary">₱55,000 - ₱75,000 / month</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="job-details.php" style="text-decoration: none;">
                    <div class="job-card">
                        <div class="company-logo" style="background: #dc3545;"><i class="bi bi-heart-pulse"></i></div>
                        <h5>Healthcare Data Analyst</h5>
                        <p class="company-name">MediCare Plus Corp. <i class="bi bi-patch-check-fill"></i></p>
                        <div class="job-meta">
                            <span><i class="bi bi-geo-alt"></i> Alabang</span>
                            <span><i class="bi bi-briefcase"></i> Full-time</span>
                        </div>
                        <p class="salary">₱70,000 - ₱90,000 / month</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="category-section">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="section-title">Browse by Category</h2>
            <p style="color: var(--text-muted);">Explore opportunities in your field</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-3 col-6">
                <a href="jobs.php" style="text-decoration: none;">
                    <div class="category-card">
                        <i class="bi bi-code-slash"></i>
                        <h5>Technology</h5>
                        <p>3,250 jobs</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-6">
                <a href="jobs.php" style="text-decoration: none;">
                    <div class="category-card">
                        <i class="bi bi-megaphone"></i>
                        <h5>Marketing</h5>
                        <p>1,840 jobs</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-6">
                <a href="jobs.php" style="text-decoration: none;">
                    <div class="category-card">
                        <i class="bi bi-palette"></i>
                        <h5>Design</h5>
                        <p>980 jobs</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-6">
                <a href="jobs.php" style="text-decoration: none;">
                    <div class="category-card">
                        <i class="bi bi-cash-stack"></i>
                        <h5>Finance</h5>
                        <p>1,520 jobs</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-6">
                <a href="jobs.php" style="text-decoration: none;">
                    <div class="category-card">
                        <i class="bi bi-heart-pulse"></i>
                        <h5>Healthcare</h5>
                        <p>890 jobs</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-6">
                <a href="jobs.php" style="text-decoration: none;">
                    <div class="category-card">
                        <i class="bi bi-mortarboard"></i>
                        <h5>Education</h5>
                        <p>620 jobs</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-6">
                <a href="jobs.php" style="text-decoration: none;">
                    <div class="category-card">
                        <i class="bi bi-headset"></i>
                        <h5>Customer Service</h5>
                        <p>2,150 jobs</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-6">
                <a href="jobs.php" style="text-decoration: none;">
                    <div class="category-card">
                        <i class="bi bi-truck"></i>
                        <h5>Operations</h5>
                        <p>740 jobs</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
