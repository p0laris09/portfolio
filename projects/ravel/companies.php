<?php $pageTitle = 'Companies'; ?>
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
    padding: 4rem 0;
}

.bg-theme-light {
    background: var(--bg-secondary);
}

.company-card {
    background: var(--bg-secondary);
    border: 1px solid var(--border-color);
    border-radius: 16px;
    padding: 2rem;
    height: 100%;
    transition: all 0.3s ease;
    position: relative;
}

.company-card:hover {
    border-color: var(--color-primary);
    transform: translateY(-5px);
}

.company-featured {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: var(--color-primary);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.7rem;
    font-weight: 600;
}

.company-logo {
    width: 80px;
    height: 80px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: white;
    margin-bottom: 1.5rem;
}

.company-card h4 {
    color: var(--text-primary);
    font-weight: 700;
    margin-bottom: 0.5rem;
}

.company-industry {
    color: var(--color-primary);
    font-size: 0.85rem;
    font-weight: 500;
    margin-bottom: 1rem;
}

.company-card p {
    color: var(--text-muted);
    font-size: 0.9rem;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.company-stats {
    display: flex;
    gap: 1.5rem;
    padding-top: 1rem;
    border-top: 1px solid var(--border-color);
}

.company-stat {
    text-align: center;
}

.company-stat span {
    display: block;
    font-weight: 700;
    color: var(--text-primary);
}

.company-stat small {
    color: var(--text-muted);
    font-size: 0.75rem;
}

.company-actions {
    display: flex;
    gap: 0.75rem;
    margin-top: 1.5rem;
}

.filter-section {
    background: var(--bg-secondary);
    border-radius: 12px;
    padding: 1.5rem;
    border: 1px solid var(--border-color);
    margin-bottom: 2rem;
}

.industry-badge {
    display: inline-block;
    padding: 0.5rem 1rem;
    background: var(--bg-tertiary);
    border: 1px solid var(--border-color);
    border-radius: 20px;
    margin: 0.25rem;
    font-size: 0.85rem;
    color: var(--text-secondary);
    cursor: pointer;
    transition: all 0.2s;
}

.industry-badge:hover, .industry-badge.active {
    background: var(--color-primary);
    border-color: var(--color-primary);
    color: white;
}

.stats-banner {
    background: linear-gradient(135deg, var(--color-primary) 0%, #1e8fd6 100%);
    border-radius: 16px;
    padding: 2rem;
    margin-bottom: 3rem;
}

.stats-banner .stat-item {
    text-align: center;
    color: white;
}

.stats-banner .stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    display: block;
}

.stats-banner .stat-label {
    opacity: 0.9;
    font-size: 0.9rem;
}
</style>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold text-white mb-4">Top Companies Hiring</h1>
                <p class="lead text-white opacity-75 mb-4">Discover amazing companies looking for talented professionals like you. Find your perfect workplace and take the next step in your career.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="jobs.php" class="btn btn-light btn-lg px-4">Browse All Jobs</a>
                    <a href="#companies" class="btn btn-outline-light btn-lg px-4">View Companies</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Banner -->
<section class="section-padding" style="padding-bottom: 2rem;">
    <div class="container">
        <div class="stats-banner">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Partner Companies</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">2,500+</span>
                        <span class="stat-label">Open Positions</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">15+</span>
                        <span class="stat-label">Industries</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">98%</span>
                        <span class="stat-label">Satisfaction Rate</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section id="companies">
    <div class="container">
        <div class="filter-section">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Search companies..." id="searchCompany">
                </div>
                <div class="col-md-8">
                    <div class="d-flex flex-wrap justify-content-end">
                        <span class="industry-badge active" onclick="filterCompanies('all')">All Industries</span>
                        <span class="industry-badge" onclick="filterCompanies('tech')">Technology</span>
                        <span class="industry-badge" onclick="filterCompanies('finance')">Finance</span>
                        <span class="industry-badge" onclick="filterCompanies('healthcare')">Healthcare</span>
                        <span class="industry-badge" onclick="filterCompanies('retail')">Retail</span>
                        <span class="industry-badge" onclick="filterCompanies('manufacturing')">Manufacturing</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Companies Grid -->
<section class="section-padding" style="padding-top: 0;">
    <div class="container">
        <div class="row g-4" id="companiesGrid">
            <!-- TechCorp Philippines -->
            <div class="col-lg-4 col-md-6" data-industry="tech">
                <div class="company-card">
                    <span class="company-featured">Featured</span>
                    <div class="company-logo" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                        <i class="bi bi-cpu"></i>
                    </div>
                    <h4>TechCorp Philippines</h4>
                    <span class="company-industry"><i class="bi bi-building me-1"></i> Technology</span>
                    <p>Leading software development company specializing in enterprise solutions and digital transformation services.</p>
                    <div class="company-stats">
                        <div class="company-stat">
                            <span>24</span>
                            <small>Open Jobs</small>
                        </div>
                        <div class="company-stat">
                            <span>500+</span>
                            <small>Employees</small>
                        </div>
                        <div class="company-stat">
                            <span>Makati</span>
                            <small>Location</small>
                        </div>
                    </div>
                    <div class="company-actions">
                        <a href="jobs.php" class="btn btn-primary-theme flex-grow-1">View Jobs</a>
                        <button class="btn btn-outline-secondary"><i class="bi bi-bookmark"></i></button>
                    </div>
                </div>
            </div>

            <!-- GlobalBank Inc -->
            <div class="col-lg-4 col-md-6" data-industry="finance">
                <div class="company-card">
                    <span class="company-featured">Featured</span>
                    <div class="company-logo" style="background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);">
                        <i class="bi bi-bank"></i>
                    </div>
                    <h4>GlobalBank Inc</h4>
                    <span class="company-industry"><i class="bi bi-building me-1"></i> Finance & Banking</span>
                    <p>One of the largest banking institutions in the region, offering comprehensive financial services and innovative digital banking solutions.</p>
                    <div class="company-stats">
                        <div class="company-stat">
                            <span>18</span>
                            <small>Open Jobs</small>
                        </div>
                        <div class="company-stat">
                            <span>2,000+</span>
                            <small>Employees</small>
                        </div>
                        <div class="company-stat">
                            <span>BGC</span>
                            <small>Location</small>
                        </div>
                    </div>
                    <div class="company-actions">
                        <a href="jobs.php" class="btn btn-primary-theme flex-grow-1">View Jobs</a>
                        <button class="btn btn-outline-secondary"><i class="bi bi-bookmark"></i></button>
                    </div>
                </div>
            </div>

            <!-- MediCare Plus -->
            <div class="col-lg-4 col-md-6" data-industry="healthcare">
                <div class="company-card">
                    <div class="company-logo" style="background: linear-gradient(135deg, #eb3349 0%, #f45c43 100%);">
                        <i class="bi bi-heart-pulse"></i>
                    </div>
                    <h4>MediCare Plus</h4>
                    <span class="company-industry"><i class="bi bi-building me-1"></i> Healthcare</span>
                    <p>Premier healthcare provider with a network of hospitals and clinics, committed to delivering excellent patient care.</p>
                    <div class="company-stats">
                        <div class="company-stat">
                            <span>32</span>
                            <small>Open Jobs</small>
                        </div>
                        <div class="company-stat">
                            <span>3,500+</span>
                            <small>Employees</small>
                        </div>
                        <div class="company-stat">
                            <span>Manila</span>
                            <small>Location</small>
                        </div>
                    </div>
                    <div class="company-actions">
                        <a href="jobs.php" class="btn btn-primary-theme flex-grow-1">View Jobs</a>
                        <button class="btn btn-outline-secondary"><i class="bi bi-bookmark"></i></button>
                    </div>
                </div>
            </div>

            <!-- CloudSync Solutions -->
            <div class="col-lg-4 col-md-6" data-industry="tech">
                <div class="company-card">
                    <div class="company-logo" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                        <i class="bi bi-cloud"></i>
                    </div>
                    <h4>CloudSync Solutions</h4>
                    <span class="company-industry"><i class="bi bi-building me-1"></i> Technology</span>
                    <p>Cloud infrastructure and DevOps specialists helping businesses modernize their IT infrastructure.</p>
                    <div class="company-stats">
                        <div class="company-stat">
                            <span>15</span>
                            <small>Open Jobs</small>
                        </div>
                        <div class="company-stat">
                            <span>200+</span>
                            <small>Employees</small>
                        </div>
                        <div class="company-stat">
                            <span>Ortigas</span>
                            <small>Location</small>
                        </div>
                    </div>
                    <div class="company-actions">
                        <a href="jobs.php" class="btn btn-primary-theme flex-grow-1">View Jobs</a>
                        <button class="btn btn-outline-secondary"><i class="bi bi-bookmark"></i></button>
                    </div>
                </div>
            </div>

            <!-- ShopMart Retail -->
            <div class="col-lg-4 col-md-6" data-industry="retail">
                <div class="company-card">
                    <div class="company-logo" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                        <i class="bi bi-shop"></i>
                    </div>
                    <h4>ShopMart Retail</h4>
                    <span class="company-industry"><i class="bi bi-building me-1"></i> Retail</span>
                    <p>Leading retail chain with over 100 stores nationwide, offering a wide range of products and excellent customer service.</p>
                    <div class="company-stats">
                        <div class="company-stat">
                            <span>45</span>
                            <small>Open Jobs</small>
                        </div>
                        <div class="company-stat">
                            <span>5,000+</span>
                            <small>Employees</small>
                        </div>
                        <div class="company-stat">
                            <span>Nationwide</span>
                            <small>Location</small>
                        </div>
                    </div>
                    <div class="company-actions">
                        <a href="jobs.php" class="btn btn-primary-theme flex-grow-1">View Jobs</a>
                        <button class="btn btn-outline-secondary"><i class="bi bi-bookmark"></i></button>
                    </div>
                </div>
            </div>

            <!-- PrecisionMfg Corp -->
            <div class="col-lg-4 col-md-6" data-industry="manufacturing">
                <div class="company-card">
                    <div class="company-logo" style="background: linear-gradient(135deg, #434343 0%, #000000 100%);">
                        <i class="bi bi-gear"></i>
                    </div>
                    <h4>PrecisionMfg Corp</h4>
                    <span class="company-industry"><i class="bi bi-building me-1"></i> Manufacturing</span>
                    <p>Industry leader in precision manufacturing and engineering solutions for automotive and electronics sectors.</p>
                    <div class="company-stats">
                        <div class="company-stat">
                            <span>28</span>
                            <small>Open Jobs</small>
                        </div>
                        <div class="company-stat">
                            <span>1,500+</span>
                            <small>Employees</small>
                        </div>
                        <div class="company-stat">
                            <span>Cavite</span>
                            <small>Location</small>
                        </div>
                    </div>
                    <div class="company-actions">
                        <a href="jobs.php" class="btn btn-primary-theme flex-grow-1">View Jobs</a>
                        <button class="btn btn-outline-secondary"><i class="bi bi-bookmark"></i></button>
                    </div>
                </div>
            </div>

            <!-- DataWise Analytics -->
            <div class="col-lg-4 col-md-6" data-industry="tech">
                <div class="company-card">
                    <div class="company-logo" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                        <i class="bi bi-graph-up"></i>
                    </div>
                    <h4>DataWise Analytics</h4>
                    <span class="company-industry"><i class="bi bi-building me-1"></i> Technology</span>
                    <p>Data analytics and business intelligence company helping organizations make data-driven decisions.</p>
                    <div class="company-stats">
                        <div class="company-stat">
                            <span>12</span>
                            <small>Open Jobs</small>
                        </div>
                        <div class="company-stat">
                            <span>150+</span>
                            <small>Employees</small>
                        </div>
                        <div class="company-stat">
                            <span>Makati</span>
                            <small>Location</small>
                        </div>
                    </div>
                    <div class="company-actions">
                        <a href="jobs.php" class="btn btn-primary-theme flex-grow-1">View Jobs</a>
                        <button class="btn btn-outline-secondary"><i class="bi bi-bookmark"></i></button>
                    </div>
                </div>
            </div>

            <!-- WealthAdvisors PH -->
            <div class="col-lg-4 col-md-6" data-industry="finance">
                <div class="company-card">
                    <div class="company-logo" style="background: linear-gradient(135deg, #a18cd1 0%, #fbc2eb 100%);">
                        <i class="bi bi-piggy-bank"></i>
                    </div>
                    <h4>WealthAdvisors PH</h4>
                    <span class="company-industry"><i class="bi bi-building me-1"></i> Finance</span>
                    <p>Premier wealth management and financial advisory firm serving high-net-worth individuals and corporations.</p>
                    <div class="company-stats">
                        <div class="company-stat">
                            <span>8</span>
                            <small>Open Jobs</small>
                        </div>
                        <div class="company-stat">
                            <span>100+</span>
                            <small>Employees</small>
                        </div>
                        <div class="company-stat">
                            <span>BGC</span>
                            <small>Location</small>
                        </div>
                    </div>
                    <div class="company-actions">
                        <a href="jobs.php" class="btn btn-primary-theme flex-grow-1">View Jobs</a>
                        <button class="btn btn-outline-secondary"><i class="bi bi-bookmark"></i></button>
                    </div>
                </div>
            </div>

            <!-- HealthFirst Clinics -->
            <div class="col-lg-4 col-md-6" data-industry="healthcare">
                <div class="company-card">
                    <div class="company-logo" style="background: linear-gradient(135deg, #00c6fb 0%, #005bea 100%);">
                        <i class="bi bi-hospital"></i>
                    </div>
                    <h4>HealthFirst Clinics</h4>
                    <span class="company-industry"><i class="bi bi-building me-1"></i> Healthcare</span>
                    <p>Network of primary care clinics providing accessible and affordable healthcare services to communities.</p>
                    <div class="company-stats">
                        <div class="company-stat">
                            <span>22</span>
                            <small>Open Jobs</small>
                        </div>
                        <div class="company-stat">
                            <span>800+</span>
                            <small>Employees</small>
                        </div>
                        <div class="company-stat">
                            <span>Metro Manila</span>
                            <small>Location</small>
                        </div>
                    </div>
                    <div class="company-actions">
                        <a href="jobs.php" class="btn btn-primary-theme flex-grow-1">View Jobs</a>
                        <button class="btn btn-outline-secondary"><i class="bi bi-bookmark"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More -->
        <div class="text-center mt-5">
            <button class="btn btn-outline-secondary btn-lg px-5">
                <i class="bi bi-arrow-down me-2"></i>Load More Companies
            </button>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding" style="background: linear-gradient(135deg, var(--color-primary) 0%, #1e8fd6 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="display-6 fw-bold text-white mb-3">Are You an Employer?</h2>
                <p class="text-white opacity-75 mb-0">Post your job openings and connect with thousands of qualified candidates. Get started today and find your next great hire.</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <a href="#" class="btn btn-light btn-lg px-4">Post a Job</a>
            </div>
        </div>
    </div>
</section>

<script>
function filterCompanies(industry) {
    // Update active badge
    document.querySelectorAll('.industry-badge').forEach(badge => {
        badge.classList.remove('active');
    });
    event.target.classList.add('active');

    // Filter companies
    document.querySelectorAll('#companiesGrid > div').forEach(card => {
        if (industry === 'all' || card.dataset.industry === industry) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

// Search functionality
document.getElementById('searchCompany').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    document.querySelectorAll('#companiesGrid > div').forEach(card => {
        const companyName = card.querySelector('h4').textContent.toLowerCase();
        const companyDesc = card.querySelector('p').textContent.toLowerCase();
        if (companyName.includes(searchTerm) || companyDesc.includes(searchTerm)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
});
</script>

<?php include 'includes/footer.php'; ?>
