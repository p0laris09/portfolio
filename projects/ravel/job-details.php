<?php $pageTitle = 'Job Details'; ?>
<?php include 'includes/header.php'; ?>

<style>
.job-details-page { padding: 2rem 0; }

.breadcrumb-nav {
    margin-bottom: 1.5rem;
}

.breadcrumb {
    background: transparent;
    padding: 0;
    margin: 0;
}

.breadcrumb-item a { color: var(--text-muted); }
.breadcrumb-item.active { color: var(--text-secondary); }
.breadcrumb-item + .breadcrumb-item::before { color: var(--text-muted); }

.job-header {
    background: var(--bg-secondary);
    border-radius: 16px;
    padding: 2rem;
    border: 1px solid var(--border-color);
    margin-bottom: 1.5rem;
}

.company-logo-lg {
    width: 80px;
    height: 80px;
    border-radius: 16px;
    background: var(--color-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 2rem;
}

.job-title-lg {
    font-size: 1.75rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
}

.company-name-lg {
    font-size: 1.1rem;
    color: var(--color-primary);
}

.job-meta-lg {
    display: flex;
    gap: 1.5rem;
    flex-wrap: wrap;
    margin-top: 1rem;
    font-size: 0.9rem;
    color: var(--text-muted);
}

.apply-section {
    text-align: right;
}

.salary-lg {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--color-primary);
    margin-bottom: 0.5rem;
}

.content-section {
    background: var(--bg-secondary);
    border-radius: 16px;
    padding: 2rem;
    border: 1px solid var(--border-color);
    margin-bottom: 1.5rem;
}

.section-heading {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 1rem;
    padding-bottom: 0.75rem;
    border-bottom: 1px solid var(--border-color);
}

.description-content {
    color: var(--text-secondary);
    line-height: 1.7;
}

.description-content ul {
    padding-left: 1.25rem;
    margin-top: 0.75rem;
}

.description-content li {
    margin-bottom: 0.5rem;
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 1rem;
}

.benefit-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem;
    background: var(--bg-tertiary);
    border-radius: 8px;
}

.benefit-item i {
    color: var(--color-primary);
    font-size: 1.25rem;
}

.skill-tag-lg {
    display: inline-block;
    padding: 0.5rem 1rem;
    background: var(--bg-tertiary);
    border-radius: 6px;
    font-size: 0.85rem;
    color: var(--text-secondary);
    margin-right: 0.5rem;
    margin-bottom: 0.5rem;
}

.sidebar-card {
    background: var(--bg-secondary);
    border-radius: 16px;
    padding: 1.5rem;
    border: 1px solid var(--border-color);
    margin-bottom: 1.5rem;
}

.sidebar-card h5 {
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.overview-item {
    display: flex;
    justify-content: space-between;
    padding: 0.75rem 0;
    border-bottom: 1px solid var(--border-color);
}

.overview-item:last-child { border-bottom: none; }

.overview-label {
    color: var(--text-muted);
    font-size: 0.85rem;
}

.overview-value {
    font-weight: 500;
    color: var(--text-primary);
    font-size: 0.85rem;
}

.similar-job {
    display: flex;
    gap: 0.75rem;
    padding: 1rem 0;
    border-bottom: 1px solid var(--border-color);
}

.similar-job:last-child { border-bottom: none; }

.similar-job-logo {
    width: 40px;
    height: 40px;
    border-radius: 8px;
    background: var(--bg-tertiary);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--color-primary);
}

.similar-job h6 {
    font-size: 0.9rem;
    margin: 0 0 0.25rem 0;
}

.similar-job p {
    font-size: 0.8rem;
    color: var(--text-muted);
    margin: 0;
}
</style>

<div class="job-details-page">
    <div class="container">
        <!-- Breadcrumb -->
        <nav class="breadcrumb-nav">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="jobs.php">Jobs</a></li>
                <li class="breadcrumb-item active">Senior Full Stack Developer</li>
            </ol>
        </nav>

        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Job Header -->
                <div class="job-header">
                    <div class="row align-items-start">
                        <div class="col-md-8">
                            <div class="d-flex gap-3">
                                <div class="company-logo-lg">
                                    <i class="bi bi-building"></i>
                                </div>
                                <div>
                                    <h1 class="job-title-lg">Senior Full Stack Developer</h1>
                                    <p class="company-name-lg mb-0">
                                        TechCorp Philippines Inc. 
                                        <i class="bi bi-patch-check-fill" title="Verified Company"></i>
                                    </p>
                                    <div class="job-meta-lg">
                                        <span><i class="bi bi-geo-alt me-1"></i> Makati City</span>
                                        <span><i class="bi bi-briefcase me-1"></i> Full-time</span>
                                        <span><i class="bi bi-laptop me-1"></i> Hybrid</span>
                                        <span><i class="bi bi-clock me-1"></i> Posted 2 days ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 apply-section mt-3 mt-md-0">
                            <p class="salary-lg">₱80K - ₱120K</p>
                            <p style="color: var(--text-muted); font-size: 0.85rem; margin-bottom: 1rem;">per month</p>
                            <button class="btn btn-primary-theme btn-lg w-100 mb-2">
                                <i class="bi bi-send me-2"></i>Apply Now
                            </button>
                            <button class="btn btn-outline-secondary w-100">
                                <i class="bi bi-bookmark me-2"></i>Save Job
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Job Description -->
                <div class="content-section">
                    <h2 class="section-heading">Job Description</h2>
                    <div class="description-content">
                        <p>We are looking for a talented Senior Full Stack Developer to join our growing team. You will be responsible for developing and maintaining web applications, working on both client and server-side code, and collaborating with cross-functional teams to deliver high-quality software solutions.</p>
                        
                        <p>As a senior member of the team, you will also be expected to mentor junior developers, participate in code reviews, and contribute to architectural decisions.</p>
                    </div>
                </div>

                <!-- Requirements -->
                <div class="content-section">
                    <h2 class="section-heading">Requirements</h2>
                    <div class="description-content">
                        <ul>
                            <li>Bachelor's degree in Computer Science, Engineering, or related field</li>
                            <li>5+ years of experience in full-stack web development</li>
                            <li>Strong proficiency in React.js, Node.js, and TypeScript</li>
                            <li>Experience with PostgreSQL or similar relational databases</li>
                            <li>Familiarity with AWS services (EC2, S3, Lambda, RDS)</li>
                            <li>Experience with Git version control and CI/CD pipelines</li>
                            <li>Strong problem-solving skills and attention to detail</li>
                            <li>Excellent communication skills in English</li>
                        </ul>
                    </div>
                </div>

                <!-- Nice to Have -->
                <div class="content-section">
                    <h2 class="section-heading">Nice to Have</h2>
                    <div class="description-content">
                        <ul>
                            <li>Experience with Docker and Kubernetes</li>
                            <li>Knowledge of microservices architecture</li>
                            <li>Experience with GraphQL</li>
                            <li>Contributions to open-source projects</li>
                            <li>AWS certifications</li>
                        </ul>
                    </div>
                </div>

                <!-- Benefits -->
                <div class="content-section">
                    <h2 class="section-heading">Benefits & Perks</h2>
                    <div class="benefits-grid">
                        <div class="benefit-item">
                            <i class="bi bi-heart-pulse"></i>
                            <span>Health Insurance</span>
                        </div>
                        <div class="benefit-item">
                            <i class="bi bi-calendar-check"></i>
                            <span>Paid Time Off</span>
                        </div>
                        <div class="benefit-item">
                            <i class="bi bi-house"></i>
                            <span>Work from Home</span>
                        </div>
                        <div class="benefit-item">
                            <i class="bi bi-mortarboard"></i>
                            <span>Training Budget</span>
                        </div>
                        <div class="benefit-item">
                            <i class="bi bi-gift"></i>
                            <span>13th Month Pay</span>
                        </div>
                        <div class="benefit-item">
                            <i class="bi bi-cup-hot"></i>
                            <span>Free Snacks</span>
                        </div>
                        <div class="benefit-item">
                            <i class="bi bi-laptop"></i>
                            <span>Equipment Provided</span>
                        </div>
                        <div class="benefit-item">
                            <i class="bi bi-graph-up-arrow"></i>
                            <span>Performance Bonus</span>
                        </div>
                    </div>
                </div>

                <!-- About Company -->
                <div class="content-section">
                    <h2 class="section-heading">About TechCorp Philippines Inc.</h2>
                    <div class="description-content">
                        <p>TechCorp Philippines is a leading technology company specializing in enterprise software solutions. With over 500 employees across offices in Manila, Cebu, and Davao, we serve clients ranging from startups to Fortune 500 companies.</p>
                        <p>Our mission is to transform businesses through innovative technology solutions while fostering a culture of continuous learning and growth for our team members.</p>
                        <a href="#" class="btn btn-outline-secondary mt-2">
                            <i class="bi bi-building me-1"></i> View Company Profile
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Job Overview -->
                <div class="sidebar-card">
                    <h5><i class="bi bi-info-circle me-2"></i>Job Overview</h5>
                    <div class="overview-item">
                        <span class="overview-label">Job Type</span>
                        <span class="overview-value">Full-time</span>
                    </div>
                    <div class="overview-item">
                        <span class="overview-label">Work Setup</span>
                        <span class="overview-value">Hybrid</span>
                    </div>
                    <div class="overview-item">
                        <span class="overview-label">Experience</span>
                        <span class="overview-value">5+ years</span>
                    </div>
                    <div class="overview-item">
                        <span class="overview-label">Education</span>
                        <span class="overview-value">Bachelor's Degree</span>
                    </div>
                    <div class="overview-item">
                        <span class="overview-label">Industry</span>
                        <span class="overview-value">Technology</span>
                    </div>
                    <div class="overview-item">
                        <span class="overview-label">Applications</span>
                        <span class="overview-value">48 applicants</span>
                    </div>
                </div>

                <!-- Required Skills -->
                <div class="sidebar-card">
                    <h5><i class="bi bi-lightbulb me-2"></i>Required Skills</h5>
                    <div>
                        <span class="skill-tag-lg">React.js</span>
                        <span class="skill-tag-lg">Node.js</span>
                        <span class="skill-tag-lg">TypeScript</span>
                        <span class="skill-tag-lg">PostgreSQL</span>
                        <span class="skill-tag-lg">AWS</span>
                        <span class="skill-tag-lg">Git</span>
                        <span class="skill-tag-lg">REST APIs</span>
                    </div>
                </div>

                <!-- Similar Jobs -->
                <div class="sidebar-card">
                    <h5><i class="bi bi-collection me-2"></i>Similar Jobs</h5>
                    
                    <a href="job-details.php" style="text-decoration: none; color: inherit;">
                        <div class="similar-job">
                            <div class="similar-job-logo"><i class="bi bi-code-slash"></i></div>
                            <div>
                                <h6>Full Stack Developer</h6>
                                <p>Innovation Labs • ₱70K - ₱100K</p>
                            </div>
                        </div>
                    </a>
                    
                    <a href="job-details.php" style="text-decoration: none; color: inherit;">
                        <div class="similar-job">
                            <div class="similar-job-logo"><i class="bi bi-terminal"></i></div>
                            <div>
                                <h6>Backend Developer</h6>
                                <p>Digital Solutions • ₱65K - ₱90K</p>
                            </div>
                        </div>
                    </a>
                    
                    <a href="job-details.php" style="text-decoration: none; color: inherit;">
                        <div class="similar-job">
                            <div class="similar-job-logo"><i class="bi bi-braces"></i></div>
                            <div>
                                <h6>React Developer</h6>
                                <p>StartUp Inc. • ₱55K - ₱80K</p>
                            </div>
                        </div>
                    </a>
                    
                    <a href="jobs.php" class="btn btn-outline-secondary w-100 mt-2">
                        View All Similar Jobs
                    </a>
                </div>

                <!-- Share Job -->
                <div class="sidebar-card">
                    <h5><i class="bi bi-share me-2"></i>Share This Job</h5>
                    <div class="d-flex gap-2">
                        <button class="btn btn-outline-secondary flex-fill">
                            <i class="bi bi-facebook"></i>
                        </button>
                        <button class="btn btn-outline-secondary flex-fill">
                            <i class="bi bi-linkedin"></i>
                        </button>
                        <button class="btn btn-outline-secondary flex-fill">
                            <i class="bi bi-twitter-x"></i>
                        </button>
                        <button class="btn btn-outline-secondary flex-fill">
                            <i class="bi bi-link-45deg"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
