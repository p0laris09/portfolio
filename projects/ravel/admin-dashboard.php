<?php $pageTitle = 'Admin Dashboard'; ?>
<?php include 'includes/header.php'; ?>

<style>
.admin-dashboard { padding: 2rem 0; }

.admin-header {
    background: linear-gradient(135deg, var(--bg-secondary) 0%, var(--bg-tertiary) 100%);
    border-radius: 16px;
    padding: 2rem;
    border: 1px solid var(--border-color);
    margin-bottom: 1.5rem;
}

.admin-header h1 { font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem; }
.admin-header p { color: var(--text-muted); margin: 0; }

.stat-card {
    background: var(--bg-secondary);
    border-radius: 12px;
    padding: 1.5rem;
    border: 1px solid var(--border-color);
    height: 100%;
}

.stat-card .stat-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1rem;
}

.stat-card .stat-icon {
    width: 48px;
    height: 48px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
}

.stat-card .stat-icon.users { background: rgba(39, 160, 237, 0.15); color: var(--color-primary); }
.stat-card .stat-icon.jobs { background: rgba(40, 167, 69, 0.15); color: #28a745; }
.stat-card .stat-icon.companies { background: rgba(111, 66, 193, 0.15); color: #6f42c1; }
.stat-card .stat-icon.revenue { background: rgba(255, 193, 7, 0.15); color: #d39e00; }

.stat-card .trend {
    font-size: 0.8rem;
    padding: 0.25rem 0.5rem;
    border-radius: 20px;
}

.stat-card .trend.up { background: rgba(40, 167, 69, 0.15); color: #28a745; }
.stat-card .trend.down { background: rgba(220, 53, 69, 0.15); color: #dc3545; }

.stat-card h3 { font-size: 2rem; font-weight: 700; margin-bottom: 0.25rem; }
.stat-card p { color: var(--text-muted); font-size: 0.9rem; margin: 0; }

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

.activity-item {
    display: flex;
    gap: 1rem;
    padding: 1rem 0;
    border-bottom: 1px solid var(--border-color);
    align-items: flex-start;
}

.activity-item:last-child { border-bottom: none; }

.activity-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.activity-icon.user-add { background: rgba(39, 160, 237, 0.15); color: var(--color-primary); }
.activity-icon.job-post { background: rgba(40, 167, 69, 0.15); color: #28a745; }
.activity-icon.company-add { background: rgba(111, 66, 193, 0.15); color: #6f42c1; }
.activity-icon.alert { background: rgba(220, 53, 69, 0.15); color: #dc3545; }
.activity-icon.hire { background: rgba(255, 193, 7, 0.15); color: #d39e00; }

.activity-content { flex: 1; }
.activity-content p { margin: 0; font-size: 0.9rem; }
.activity-content .time { font-size: 0.8rem; color: var(--text-muted); margin-top: 0.25rem; }

.user-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.75rem 0;
    border-bottom: 1px solid var(--border-color);
}

.user-row:last-child { border-bottom: none; }

.user-info {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.user-avatar {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: var(--color-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 0.8rem;
    font-weight: 600;
}

.user-details h6 { font-size: 0.9rem; margin: 0; font-weight: 600; }
.user-details p { font-size: 0.8rem; color: var(--text-muted); margin: 0; }

.user-badge {
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 500;
}

.user-badge.applicant { background: rgba(39, 160, 237, 0.15); color: var(--color-primary); }
.user-badge.contractor { background: rgba(40, 167, 69, 0.15); color: #28a745; }

.quick-stats-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
}

.quick-stat-item {
    background: var(--bg-tertiary);
    padding: 1rem;
    border-radius: 10px;
    text-align: center;
}

.quick-stat-item h4 { font-size: 1.5rem; font-weight: 700; margin-bottom: 0.25rem; }
.quick-stat-item p { font-size: 0.75rem; color: var(--text-muted); margin: 0; }

.job-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.75rem 0;
    border-bottom: 1px solid var(--border-color);
    flex-wrap: wrap;
    gap: 0.5rem;
}

.job-row:last-child { border-bottom: none; }

.job-info h6 { font-size: 0.9rem; margin: 0 0 0.25rem 0; font-weight: 600; }
.job-info p { font-size: 0.8rem; color: var(--text-muted); margin: 0; }

.status-badge {
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 500;
}

.status-badge.active { background: rgba(40, 167, 69, 0.15); color: #28a745; }
.status-badge.pending { background: rgba(255, 193, 7, 0.15); color: #d39e00; }
.status-badge.flagged { background: rgba(220, 53, 69, 0.15); color: #dc3545; }

.chart-placeholder {
    background: var(--bg-tertiary);
    border-radius: 10px;
    height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--text-muted);
    font-size: 0.9rem;
}

.admin-nav-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1rem;
    border-radius: 10px;
    color: var(--text-secondary);
    text-decoration: none;
    transition: all 0.2s;
    margin-bottom: 0.5rem;
}

.admin-nav-item:hover { background: var(--bg-tertiary); color: var(--text-primary); }
.admin-nav-item.active { background: var(--color-primary); color: white; }
.admin-nav-item i { font-size: 1.1rem; width: 24px; }
</style>

<div class="admin-dashboard">
    <div class="container">
        <!-- Admin Header -->
        <div class="admin-header">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1><i class="bi bi-shield-check me-2"></i>Admin Dashboard</h1>
                    <p>Platform overview and management</p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <span style="font-size: 0.9rem; color: var(--text-muted);">
                        <i class="bi bi-calendar me-1"></i>Last updated: Today, 2:30 PM
                    </span>
                </div>
            </div>
        </div>

        <!-- Stats Row -->
        <div class="row g-3 mb-4">
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-icon users"><i class="bi bi-people"></i></div>
                        <span class="trend up"><i class="bi bi-arrow-up"></i> 12%</span>
                    </div>
                    <h3>15,842</h3>
                    <p>Total Users</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-icon jobs"><i class="bi bi-briefcase"></i></div>
                        <span class="trend up"><i class="bi bi-arrow-up"></i> 8%</span>
                    </div>
                    <h3>3,247</h3>
                    <p>Active Jobs</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-icon companies"><i class="bi bi-building"></i></div>
                        <span class="trend up"><i class="bi bi-arrow-up"></i> 5%</span>
                    </div>
                    <h3>892</h3>
                    <p>Companies</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-icon revenue"><i class="bi bi-currency-dollar"></i></div>
                        <span class="trend up"><i class="bi bi-arrow-up"></i> 18%</span>
                    </div>
                    <h3>₱2.4M</h3>
                    <p>Monthly Revenue</p>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Platform Activity Chart -->
                <div class="content-card">
                    <div class="card-header-title">
                        <span><i class="bi bi-graph-up me-2"></i>Platform Activity</span>
                        <select style="padding: 0.25rem 0.75rem; background: var(--bg-tertiary); border: 1px solid var(--border-color); border-radius: 6px; color: var(--text-primary); font-size: 0.85rem;">
                            <option>Last 7 Days</option>
                            <option>Last 30 Days</option>
                            <option>Last 90 Days</option>
                        </select>
                    </div>
                    <div class="chart-placeholder">
                        <div class="text-center">
                            <i class="bi bi-bar-chart" style="font-size: 2rem; display: block; margin-bottom: 0.5rem;"></i>
                            Activity Chart Placeholder
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="content-card">
                    <div class="card-header-title">
                        <span><i class="bi bi-activity me-2"></i>Recent Activity</span>
                        <a href="#" style="font-size: 0.85rem;">View All</a>
                    </div>
                    
                    <div class="activity-item">
                        <div class="activity-icon user-add"><i class="bi bi-person-plus"></i></div>
                        <div class="activity-content">
                            <p><strong>Maria Reyes</strong> registered as a new applicant</p>
                            <span class="time">5 minutes ago</span>
                        </div>
                    </div>
                    
                    <div class="activity-item">
                        <div class="activity-icon job-post"><i class="bi bi-briefcase"></i></div>
                        <div class="activity-content">
                            <p><strong>TechCorp Philippines</strong> posted a new job: Senior Full Stack Developer</p>
                            <span class="time">15 minutes ago</span>
                        </div>
                    </div>
                    
                    <div class="activity-item">
                        <div class="activity-icon hire"><i class="bi bi-check-circle"></i></div>
                        <div class="activity-content">
                            <p><strong>GlobalTech Solutions</strong> hired <strong>Rafael Lorenzo</strong> as Tech Lead</p>
                            <span class="time">1 hour ago</span>
                        </div>
                    </div>
                    
                    <div class="activity-item">
                        <div class="activity-icon company-add"><i class="bi bi-building"></i></div>
                        <div class="activity-content">
                            <p><strong>StartupXYZ Inc.</strong> registered as a new company</p>
                            <span class="time">2 hours ago</span>
                        </div>
                    </div>
                    
                    <div class="activity-item">
                        <div class="activity-icon alert"><i class="bi bi-flag"></i></div>
                        <div class="activity-content">
                            <p>Job posting flagged for review: "Remote Data Entry" by <strong>QuickJobs Corp</strong></p>
                            <span class="time">3 hours ago</span>
                        </div>
                    </div>
                </div>

                <!-- Recent Job Postings -->
                <div class="content-card">
                    <div class="card-header-title">
                        <span><i class="bi bi-briefcase me-2"></i>Recent Job Postings</span>
                        <a href="admin-jobs.php" style="font-size: 0.85rem;">Manage All</a>
                    </div>
                    
                    <div class="job-row">
                        <div class="job-info">
                            <h6>Senior Full Stack Developer</h6>
                            <p>TechCorp Philippines • Posted 15 min ago</p>
                        </div>
                        <span class="status-badge pending"><i class="bi bi-clock me-1"></i>Pending Review</span>
                    </div>
                    
                    <div class="job-row">
                        <div class="job-info">
                            <h6>UI/UX Designer</h6>
                            <p>DesignHub Inc • Posted 1 hour ago</p>
                        </div>
                        <span class="status-badge active"><i class="bi bi-check-circle me-1"></i>Active</span>
                    </div>
                    
                    <div class="job-row">
                        <div class="job-info">
                            <h6>Remote Data Entry</h6>
                            <p>QuickJobs Corp • Posted 3 hours ago</p>
                        </div>
                        <span class="status-badge flagged"><i class="bi bi-flag me-1"></i>Flagged</span>
                    </div>
                    
                    <div class="job-row">
                        <div class="job-info">
                            <h6>Project Manager</h6>
                            <p>GlobalTech Solutions • Posted 4 hours ago</p>
                        </div>
                        <span class="status-badge active"><i class="bi bi-check-circle me-1"></i>Active</span>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Admin Quick Links -->
                <div class="content-card">
                    <h5 style="font-size: 1rem; font-weight: 600; margin-bottom: 1rem;">
                        <i class="bi bi-grid me-2"></i>Quick Access
                    </h5>
                    <a href="admin-users.php" class="admin-nav-item">
                        <i class="bi bi-people"></i>
                        <span>Manage Users</span>
                    </a>
                    <a href="admin-jobs.php" class="admin-nav-item">
                        <i class="bi bi-briefcase"></i>
                        <span>Manage Jobs</span>
                    </a>
                    <a href="#" class="admin-nav-item">
                        <i class="bi bi-building"></i>
                        <span>Companies</span>
                    </a>
                    <a href="#" class="admin-nav-item">
                        <i class="bi bi-flag"></i>
                        <span>Reports & Flags</span>
                    </a>
                    <a href="#" class="admin-nav-item">
                        <i class="bi bi-gear"></i>
                        <span>Settings</span>
                    </a>
                </div>

                <!-- Quick Stats -->
                <div class="content-card">
                    <h5 style="font-size: 1rem; font-weight: 600; margin-bottom: 1rem;">
                        <i class="bi bi-lightning me-2"></i>Today's Stats
                    </h5>
                    <div class="quick-stats-grid">
                        <div class="quick-stat-item">
                            <h4 style="color: var(--color-primary);">128</h4>
                            <p>New Users</p>
                        </div>
                        <div class="quick-stat-item">
                            <h4 style="color: #28a745;">45</h4>
                            <p>New Jobs</p>
                        </div>
                        <div class="quick-stat-item">
                            <h4 style="color: #6f42c1;">892</h4>
                            <p>Applications</p>
                        </div>
                        <div class="quick-stat-item">
                            <h4 style="color: #d39e00;">23</h4>
                            <p>Hires</p>
                        </div>
                    </div>
                </div>

                <!-- New Users -->
                <div class="content-card">
                    <div class="card-header-title">
                        <span><i class="bi bi-person-plus me-2"></i>New Users</span>
                        <a href="admin-users.php" style="font-size: 0.85rem;">View All</a>
                    </div>
                    
                    <div class="user-row">
                        <div class="user-info">
                            <div class="user-avatar">MR</div>
                            <div class="user-details">
                                <h6>Maria Reyes</h6>
                                <p>5 minutes ago</p>
                            </div>
                        </div>
                        <span class="user-badge applicant">Applicant</span>
                    </div>
                    
                    <div class="user-row">
                        <div class="user-info">
                            <div class="user-avatar" style="background: #28a745;">TC</div>
                            <div class="user-details">
                                <h6>TechCorp Inc.</h6>
                                <p>2 hours ago</p>
                            </div>
                        </div>
                        <span class="user-badge contractor">Contractor</span>
                    </div>
                    
                    <div class="user-row">
                        <div class="user-info">
                            <div class="user-avatar" style="background: #6f42c1;">JC</div>
                            <div class="user-details">
                                <h6>Juan Carlos</h6>
                                <p>3 hours ago</p>
                            </div>
                        </div>
                        <span class="user-badge applicant">Applicant</span>
                    </div>
                    
                    <div class="user-row">
                        <div class="user-info">
                            <div class="user-avatar" style="background: #17a2b8;">SX</div>
                            <div class="user-details">
                                <h6>StartupXYZ</h6>
                                <p>4 hours ago</p>
                            </div>
                        </div>
                        <span class="user-badge contractor">Contractor</span>
                    </div>
                </div>

                <!-- System Alerts -->
                <div class="content-card">
                    <h5 style="font-size: 1rem; font-weight: 600; margin-bottom: 1rem;">
                        <i class="bi bi-exclamation-triangle me-2"></i>System Alerts
                    </h5>
                    
                    <div style="padding: 0.75rem; background: rgba(220, 53, 69, 0.1); border-radius: 8px; margin-bottom: 0.5rem; font-size: 0.85rem;">
                        <i class="bi bi-flag me-2" style="color: #dc3545;"></i>
                        <strong>3</strong> jobs flagged for review
                    </div>
                    
                    <div style="padding: 0.75rem; background: rgba(255, 193, 7, 0.1); border-radius: 8px; margin-bottom: 0.5rem; font-size: 0.85rem;">
                        <i class="bi bi-people me-2" style="color: #d39e00;"></i>
                        <strong>12</strong> pending company verifications
                    </div>
                    
                    <div style="padding: 0.75rem; background: rgba(39, 160, 237, 0.1); border-radius: 8px; font-size: 0.85rem;">
                        <i class="bi bi-chat-dots me-2" style="color: var(--color-primary);"></i>
                        <strong>5</strong> support tickets open
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
