<?php $pageTitle = 'Applicant Dashboard'; ?>
<?php include 'includes/header.php'; ?>

<style>
.dashboard-page { padding: 2rem 0; }

.welcome-card {
    background: linear-gradient(135deg, var(--bg-secondary) 0%, var(--bg-tertiary) 100%);
    border-radius: 16px;
    padding: 2rem;
    border: 1px solid var(--border-color);
    margin-bottom: 1.5rem;
}

.welcome-card h1 {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
}

.welcome-card p {
    color: var(--text-muted);
    margin: 0;
}

.stat-card {
    background: var(--bg-secondary);
    border-radius: 12px;
    padding: 1.25rem;
    border: 1px solid var(--border-color);
    height: 100%;
}

.stat-card .stat-icon {
    width: 48px;
    height: 48px;
    border-radius: 10px;
    background: rgba(39, 160, 237, 0.15);
    color: var(--color-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    margin-bottom: 1rem;
}

.stat-card .stat-icon.success { background: rgba(40, 167, 69, 0.15); color: #28a745; }
.stat-card .stat-icon.warning { background: rgba(255, 193, 7, 0.15); color: #d39e00; }
.stat-card .stat-icon.info { background: rgba(23, 162, 184, 0.15); color: #17a2b8; }

.stat-card h3 {
    font-size: 1.75rem;
    font-weight: 700;
    margin-bottom: 0.25rem;
}

.stat-card p {
    color: var(--text-muted);
    font-size: 0.85rem;
    margin: 0;
}

.content-card {
    background: var(--bg-secondary);
    border-radius: 16px;
    padding: 1.5rem;
    border: 1px solid var(--border-color);
    margin-bottom: 1.5rem;
}

.card-header-title {
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 1rem;
    padding-bottom: 0.75rem;
    border-bottom: 1px solid var(--border-color);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.job-item {
    display: flex;
    gap: 1rem;
    padding: 1rem 0;
    border-bottom: 1px solid var(--border-color);
}

.job-item:last-child { border-bottom: none; }

.job-logo {
    width: 48px;
    height: 48px;
    border-radius: 10px;
    background: var(--color-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.25rem;
    flex-shrink: 0;
}

.job-info h5 {
    font-size: 0.95rem;
    font-weight: 600;
    margin-bottom: 0.25rem;
}

.job-info .company {
    font-size: 0.85rem;
    color: var(--color-primary);
}

.job-info .meta {
    font-size: 0.8rem;
    color: var(--text-muted);
    margin-top: 0.25rem;
}

.status-badge {
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 500;
}

.status-badge.pending { background: rgba(255, 193, 7, 0.15); color: #d39e00; }
.status-badge.interview { background: rgba(39, 160, 237, 0.15); color: var(--color-primary); }
.status-badge.offer { background: rgba(40, 167, 69, 0.15); color: #28a745; }

.profile-progress {
    background: var(--bg-tertiary);
    border-radius: 10px;
    height: 8px;
    overflow: hidden;
    margin-bottom: 0.5rem;
}

.profile-progress-bar {
    background: var(--color-primary);
    height: 100%;
    border-radius: 10px;
    transition: width 0.3s;
}

.quick-action {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem;
    background: var(--bg-tertiary);
    border-radius: 8px;
    margin-bottom: 0.5rem;
    transition: all 0.2s;
    text-decoration: none;
    color: var(--text-secondary);
}

.quick-action:hover {
    background: var(--border-color);
    color: var(--text-primary);
}

.quick-action i {
    font-size: 1.25rem;
    color: var(--color-primary);
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

.profile-avatar {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: var(--color-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 2rem;
    font-weight: 600;
    margin: 0 auto 1rem;
}
</style>

<div class="dashboard-page">
    <div class="container">
        <!-- Welcome Card -->
        <div class="welcome-card">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1>Welcome back, Juan!</h1>
                    <p>Here's what's happening with your job search today.</p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <a href="jobs.php" class="btn btn-primary-theme">
                        <i class="bi bi-search me-2"></i>Find Jobs
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Stats Row -->
                <div class="row g-3 mb-4">
                    <div class="col-md-3 col-6">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="bi bi-send"></i>
                            </div>
                            <h3>12</h3>
                            <p>Applications</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-card">
                            <div class="stat-icon warning">
                                <i class="bi bi-hourglass-split"></i>
                            </div>
                            <h3>5</h3>
                            <p>Under Review</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-card">
                            <div class="stat-icon info">
                                <i class="bi bi-calendar-check"></i>
                            </div>
                            <h3>3</h3>
                            <p>Interviews</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-card">
                            <div class="stat-icon success">
                                <i class="bi bi-trophy"></i>
                            </div>
                            <h3>1</h3>
                            <p>Offers</p>
                        </div>
                    </div>
                </div>

                <!-- Recent Applications -->
                <div class="content-card">
                    <div class="card-header-title">
                        <span><i class="bi bi-clock-history me-2"></i>Recent Applications</span>
                        <a href="applicant-applications.php" style="font-size: 0.85rem;">View All</a>
                    </div>
                    
                    <div class="job-item">
                        <div class="job-logo"><i class="bi bi-building"></i></div>
                        <div class="job-info flex-grow-1">
                            <h5>Senior Full Stack Developer</h5>
                            <p class="company">TechCorp Philippines Inc. <i class="bi bi-patch-check-fill"></i></p>
                            <p class="meta"><i class="bi bi-geo-alt"></i> Makati City • Applied 2 days ago</p>
                        </div>
                        <span class="status-badge interview"><i class="bi bi-calendar-event me-1"></i>Interview</span>
                    </div>
                    
                    <div class="job-item">
                        <div class="job-logo" style="background: #28a745;"><i class="bi bi-heart-pulse"></i></div>
                        <div class="job-info flex-grow-1">
                            <h5>Healthcare Data Analyst</h5>
                            <p class="company">MediCare Plus Corp. <i class="bi bi-patch-check-fill"></i></p>
                            <p class="meta"><i class="bi bi-geo-alt"></i> Quezon City • Applied 1 week ago</p>
                        </div>
                        <span class="status-badge offer"><i class="bi bi-trophy me-1"></i>Offer</span>
                    </div>
                    
                    <div class="job-item">
                        <div class="job-logo" style="background: #17a2b8;"><i class="bi bi-bank"></i></div>
                        <div class="job-info flex-grow-1">
                            <h5>Financial Analyst</h5>
                            <p class="company">Metro Finance Inc. <i class="bi bi-patch-check-fill"></i></p>
                            <p class="meta"><i class="bi bi-geo-alt"></i> Ortigas, Pasig • Applied 3 days ago</p>
                        </div>
                        <span class="status-badge pending"><i class="bi bi-clock me-1"></i>Pending</span>
                    </div>
                </div>

                <!-- Recommended Jobs -->
                <div class="content-card">
                    <div class="card-header-title">
                        <span><i class="bi bi-stars me-2"></i>Recommended for You</span>
                        <a href="jobs.php" style="font-size: 0.85rem;">View All</a>
                    </div>
                    
                    <div class="job-item">
                        <div class="job-logo" style="background: #6f42c1;"><i class="bi bi-code-slash"></i></div>
                        <div class="job-info flex-grow-1">
                            <h5>Full Stack Developer</h5>
                            <p class="company">Innovation Labs Inc.</p>
                            <p class="meta"><i class="bi bi-geo-alt"></i> BGC, Taguig • ₱70K - ₱100K</p>
                        </div>
                        <a href="job-details.php" class="btn btn-sm btn-outline-secondary">View</a>
                    </div>
                    
                    <div class="job-item">
                        <div class="job-logo" style="background: #fd7e14;"><i class="bi bi-terminal"></i></div>
                        <div class="job-info flex-grow-1">
                            <h5>Backend Developer</h5>
                            <p class="company">Digital Solutions PH</p>
                            <p class="meta"><i class="bi bi-geo-alt"></i> Remote • ₱65K - ₱90K</p>
                        </div>
                        <a href="job-details.php" class="btn btn-sm btn-outline-secondary">View</a>
                    </div>
                    
                    <div class="job-item">
                        <div class="job-logo" style="background: #dc3545;"><i class="bi bi-braces"></i></div>
                        <div class="job-info flex-grow-1">
                            <h5>React Developer</h5>
                            <p class="company">StartUp Inc.</p>
                            <p class="meta"><i class="bi bi-geo-alt"></i> Cebu City • ₱55K - ₱80K</p>
                        </div>
                        <a href="job-details.php" class="btn btn-sm btn-outline-secondary">View</a>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Profile Card -->
                <div class="sidebar-card text-center">
                    <div class="profile-avatar">JD</div>
                    <h5 class="mb-1">Juan Dela Cruz</h5>
                    <p style="color: var(--text-muted); font-size: 0.85rem; margin-bottom: 1rem;">Full Stack Developer</p>
                    <a href="#" class="btn btn-outline-secondary btn-sm w-100">
                        <i class="bi bi-pencil me-1"></i>Edit Profile
                    </a>
                </div>

                <!-- Profile Completion -->
                <div class="sidebar-card">
                    <h5><i class="bi bi-person-check me-2"></i>Profile Completion</h5>
                    <div class="profile-progress">
                        <div class="profile-progress-bar" style="width: 75%;"></div>
                    </div>
                    <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 1rem;">75% Complete</p>
                    <p style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 0.5rem;">
                        <i class="bi bi-check-circle text-success me-1"></i> Basic Information
                    </p>
                    <p style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 0.5rem;">
                        <i class="bi bi-check-circle text-success me-1"></i> Work Experience
                    </p>
                    <p style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 0.5rem;">
                        <i class="bi bi-circle text-muted me-1"></i> Upload Resume
                    </p>
                    <p style="font-size: 0.8rem; color: var(--text-secondary); margin-bottom: 0;">
                        <i class="bi bi-circle text-muted me-1"></i> Add Certifications
                    </p>
                </div>

                <!-- Quick Actions -->
                <div class="sidebar-card">
                    <h5><i class="bi bi-lightning me-2"></i>Quick Actions</h5>
                    <a href="#" class="quick-action">
                        <i class="bi bi-file-earmark-arrow-up"></i>
                        <span>Upload Resume</span>
                    </a>
                    <a href="applicant-applications.php" class="quick-action">
                        <i class="bi bi-collection"></i>
                        <span>View Applications</span>
                    </a>
                    <a href="#" class="quick-action">
                        <i class="bi bi-bookmark"></i>
                        <span>Saved Jobs</span>
                    </a>
                    <a href="#" class="quick-action">
                        <i class="bi bi-gear"></i>
                        <span>Account Settings</span>
                    </a>
                </div>

                <!-- Upcoming Interviews -->
                <div class="sidebar-card">
                    <h5><i class="bi bi-calendar-event me-2"></i>Upcoming Interviews</h5>
                    <div style="padding: 0.75rem; background: var(--bg-tertiary); border-radius: 8px; margin-bottom: 0.75rem;">
                        <p style="font-weight: 600; margin-bottom: 0.25rem; font-size: 0.9rem;">TechCorp Philippines</p>
                        <p style="color: var(--text-muted); font-size: 0.8rem; margin-bottom: 0.5rem;">Senior Full Stack Developer</p>
                        <p style="color: var(--color-primary); font-size: 0.85rem; margin: 0;">
                            <i class="bi bi-clock me-1"></i>Mar 25, 2024 at 2:00 PM
                        </p>
                    </div>
                    <a href="#" class="btn btn-outline-secondary btn-sm w-100">
                        <i class="bi bi-camera-video me-1"></i>Join Meeting
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
