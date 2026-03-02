<?php $pageTitle = 'Contractor Dashboard'; ?>
<?php include 'includes/header.php'; ?>

<style>
.contractor-dashboard { padding: 2rem 0; }

.welcome-card {
    background: linear-gradient(135deg, var(--bg-secondary) 0%, var(--bg-tertiary) 100%);
    border-radius: 16px;
    padding: 2rem;
    border: 1px solid var(--border-color);
    margin-bottom: 1.5rem;
}

.welcome-card h1 { font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem; }
.welcome-card p { color: var(--text-muted); margin: 0; }

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
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    margin-bottom: 1rem;
}

.stat-card .stat-icon.primary { background: rgba(39, 160, 237, 0.15); color: var(--color-primary); }
.stat-card .stat-icon.success { background: rgba(40, 167, 69, 0.15); color: #28a745; }
.stat-card .stat-icon.warning { background: rgba(255, 193, 7, 0.15); color: #d39e00; }
.stat-card .stat-icon.info { background: rgba(23, 162, 184, 0.15); color: #17a2b8; }

.stat-card h3 { font-size: 1.75rem; font-weight: 700; margin-bottom: 0.25rem; }
.stat-card p { color: var(--text-muted); font-size: 0.85rem; margin: 0; }

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

.applicant-item {
    display: flex;
    gap: 1rem;
    padding: 1rem 0;
    border-bottom: 1px solid var(--border-color);
    align-items: center;
}

.applicant-item:last-child { border-bottom: none; }

.applicant-avatar {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: var(--color-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 600;
    flex-shrink: 0;
}

.applicant-info { flex: 1; }
.applicant-info h5 { font-size: 0.95rem; font-weight: 600; margin-bottom: 0.25rem; }
.applicant-info .position { font-size: 0.85rem; color: var(--text-muted); }

.match-score {
    padding: 0.375rem 0.75rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
}

.match-score.high { background: rgba(40, 167, 69, 0.15); color: #28a745; }
.match-score.medium { background: rgba(39, 160, 237, 0.15); color: var(--color-primary); }

.job-posting-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 0;
    border-bottom: 1px solid var(--border-color);
    flex-wrap: wrap;
    gap: 0.5rem;
}

.job-posting-item:last-child { border-bottom: none; }
.job-posting-item h5 { font-size: 0.95rem; font-weight: 600; margin-bottom: 0.25rem; }
.job-posting-item .meta { font-size: 0.8rem; color: var(--text-muted); }

.status-badge {
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 500;
}

.status-badge.active { background: rgba(40, 167, 69, 0.15); color: #28a745; }
.status-badge.pending { background: rgba(255, 193, 7, 0.15); color: #d39e00; }

.quick-stat {
    text-align: center;
    padding: 1rem;
    background: var(--bg-tertiary);
    border-radius: 10px;
}

.quick-stat h4 { font-size: 1.5rem; font-weight: 700; margin-bottom: 0.25rem; }
.quick-stat p { font-size: 0.75rem; color: var(--text-muted); margin: 0; }

.interview-item {
    padding: 1rem;
    background: var(--bg-tertiary);
    border-radius: 10px;
    margin-bottom: 0.75rem;
}

.interview-item:last-child { margin-bottom: 0; }
.interview-item h5 { font-size: 0.9rem; font-weight: 600; margin-bottom: 0.25rem; }
.interview-item .candidate { font-size: 0.85rem; color: var(--text-muted); margin-bottom: 0.5rem; }
.interview-item .time { font-size: 0.85rem; color: var(--color-primary); }
</style>

<div class="contractor-dashboard">
    <div class="container">
        <!-- Welcome Card -->
        <div class="welcome-card">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1>Welcome back, TechCorp!</h1>
                    <p>Manage your job postings and review applicants.</p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <a href="#" class="btn btn-primary-theme">
                        <i class="bi bi-plus-lg me-2"></i>Post New Job
                    </a>
                </div>
            </div>
        </div>

        <!-- Stats Row -->
        <div class="row g-3 mb-4">
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-icon primary"><i class="bi bi-briefcase"></i></div>
                    <h3>12</h3>
                    <p>Active Jobs</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-icon success"><i class="bi bi-people"></i></div>
                    <h3>248</h3>
                    <p>Total Applicants</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-icon warning"><i class="bi bi-hourglass-split"></i></div>
                    <h3>38</h3>
                    <p>Pending Review</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-icon info"><i class="bi bi-calendar-check"></i></div>
                    <h3>8</h3>
                    <p>Interviews Today</p>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Recent Applications -->
                <div class="content-card">
                    <div class="card-header-title">
                        <span><i class="bi bi-person-lines-fill me-2"></i>Recent Applications</span>
                        <a href="contractor-applicants.php" style="font-size: 0.85rem;">View All</a>
                    </div>
                    
                    <div class="applicant-item">
                        <div class="applicant-avatar">MR</div>
                        <div class="applicant-info">
                            <h5>Maria Reyes</h5>
                            <p class="position">Applied for: Senior Full Stack Developer • 2 hours ago</p>
                        </div>
                        <span class="match-score high"><i class="bi bi-bullseye me-1"></i>92%</span>
                        <a href="contractor-applicants.php" class="btn btn-sm btn-primary-theme">Review</a>
                    </div>
                    
                    <div class="applicant-item">
                        <div class="applicant-avatar" style="background: #28a745;">JC</div>
                        <div class="applicant-info">
                            <h5>Juan Carlos Santos</h5>
                            <p class="position">Applied for: UI/UX Designer • 5 hours ago</p>
                        </div>
                        <span class="match-score high"><i class="bi bi-bullseye me-1"></i>88%</span>
                        <a href="contractor-applicants.php" class="btn btn-sm btn-primary-theme">Review</a>
                    </div>
                    
                    <div class="applicant-item">
                        <div class="applicant-avatar" style="background: #17a2b8;">AD</div>
                        <div class="applicant-info">
                            <h5>Anna De Guzman</h5>
                            <p class="position">Applied for: Project Manager • 1 day ago</p>
                        </div>
                        <span class="match-score medium"><i class="bi bi-bullseye me-1"></i>76%</span>
                        <a href="contractor-applicants.php" class="btn btn-sm btn-primary-theme">Review</a>
                    </div>
                    
                    <div class="applicant-item">
                        <div class="applicant-avatar" style="background: #6f42c1;">RN</div>
                        <div class="applicant-info">
                            <h5>Roberto Navarro</h5>
                            <p class="position">Applied for: Backend Developer • 1 day ago</p>
                        </div>
                        <span class="match-score medium"><i class="bi bi-bullseye me-1"></i>72%</span>
                        <a href="contractor-applicants.php" class="btn btn-sm btn-primary-theme">Review</a>
                    </div>
                </div>

                <!-- Active Job Postings -->
                <div class="content-card">
                    <div class="card-header-title">
                        <span><i class="bi bi-briefcase me-2"></i>Active Job Postings</span>
                        <a href="#" style="font-size: 0.85rem;">Manage All</a>
                    </div>
                    
                    <div class="job-posting-item">
                        <div>
                            <h5>Senior Full Stack Developer</h5>
                            <p class="meta"><i class="bi bi-geo-alt"></i> Makati City • <i class="bi bi-people"></i> 48 applicants</p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="status-badge active"><i class="bi bi-check-circle me-1"></i>Active</span>
                            <button class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                    </div>
                    
                    <div class="job-posting-item">
                        <div>
                            <h5>UI/UX Designer</h5>
                            <p class="meta"><i class="bi bi-geo-alt"></i> BGC, Taguig • <i class="bi bi-people"></i> 35 applicants</p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="status-badge active"><i class="bi bi-check-circle me-1"></i>Active</span>
                            <button class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                    </div>
                    
                    <div class="job-posting-item">
                        <div>
                            <h5>Project Manager</h5>
                            <p class="meta"><i class="bi bi-geo-alt"></i> Remote • <i class="bi bi-people"></i> 28 applicants</p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="status-badge active"><i class="bi bi-check-circle me-1"></i>Active</span>
                            <button class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                    </div>
                    
                    <div class="job-posting-item">
                        <div>
                            <h5>Backend Developer</h5>
                            <p class="meta"><i class="bi bi-geo-alt"></i> Makati City • <i class="bi bi-people"></i> 42 applicants</p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="status-badge pending"><i class="bi bi-clock me-1"></i>Pending</span>
                            <button class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Company Profile -->
                <div class="content-card text-center">
                    <div style="width: 80px; height: 80px; border-radius: 16px; background: var(--color-primary); display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-size: 2rem;">
                        <i class="bi bi-building"></i>
                    </div>
                    <h5 style="margin-bottom: 0.25rem;">TechCorp Philippines Inc.</h5>
                    <p style="color: var(--text-muted); font-size: 0.85rem; margin-bottom: 1rem;">Technology • Makati City</p>
                    <a href="#" class="btn btn-outline-secondary btn-sm w-100">
                        <i class="bi bi-pencil me-1"></i>Edit Company Profile
                    </a>
                </div>

                <!-- Quick Stats -->
                <div class="content-card">
                    <h5 style="font-size: 1rem; font-weight: 600; margin-bottom: 1rem;">
                        <i class="bi bi-graph-up me-2"></i>This Month
                    </h5>
                    <div class="row g-2">
                        <div class="col-6">
                            <div class="quick-stat">
                                <h4>156</h4>
                                <p>New Applications</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="quick-stat">
                                <h4>24</h4>
                                <p>Interviews</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="quick-stat">
                                <h4>8</h4>
                                <p>Offers Sent</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="quick-stat">
                                <h4>5</h4>
                                <p>Hires</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Interviews -->
                <div class="content-card">
                    <h5 style="font-size: 1rem; font-weight: 600; margin-bottom: 1rem;">
                        <i class="bi bi-calendar-event me-2"></i>Upcoming Interviews
                    </h5>
                    
                    <div class="interview-item">
                        <h5>Senior Full Stack Developer</h5>
                        <p class="candidate"><i class="bi bi-person me-1"></i>Maria Reyes</p>
                        <p class="time"><i class="bi bi-clock me-1"></i>Today, 2:00 PM</p>
                    </div>
                    
                    <div class="interview-item">
                        <h5>UI/UX Designer</h5>
                        <p class="candidate"><i class="bi bi-person me-1"></i>Juan Carlos Santos</p>
                        <p class="time"><i class="bi bi-clock me-1"></i>Tomorrow, 10:00 AM</p>
                    </div>
                    
                    <div class="interview-item">
                        <h5>Project Manager</h5>
                        <p class="candidate"><i class="bi bi-person me-1"></i>Anna De Guzman</p>
                        <p class="time"><i class="bi bi-clock me-1"></i>Mar 26, 3:00 PM</p>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="content-card">
                    <h5 style="font-size: 1rem; font-weight: 600; margin-bottom: 1rem;">
                        <i class="bi bi-lightning me-2"></i>Quick Actions
                    </h5>
                    <a href="#" class="btn btn-outline-secondary btn-sm w-100 mb-2">
                        <i class="bi bi-plus-lg me-1"></i>Post New Job
                    </a>
                    <a href="contractor-applicants.php" class="btn btn-outline-secondary btn-sm w-100 mb-2">
                        <i class="bi bi-people me-1"></i>View All Applicants
                    </a>
                    <a href="#" class="btn btn-outline-secondary btn-sm w-100">
                        <i class="bi bi-gear me-1"></i>Account Settings
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
