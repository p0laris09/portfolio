<?php $pageTitle = 'My Applications'; ?>
<?php include 'includes/header.php'; ?>

<style>
.applications-page { padding: 2rem 0; }

.page-header {
    margin-bottom: 2rem;
}

.page-header h1 {
    font-size: 1.75rem;
    font-weight: 700;
    margin-bottom: 0.25rem;
}

.stat-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 1rem;
    margin-bottom: 2rem;
}

.stat-card {
    background: var(--bg-secondary);
    border-radius: 12px;
    padding: 1.25rem;
    border: 1px solid var(--border-color);
    text-align: center;
}

.stat-card h3 {
    font-size: 1.75rem;
    font-weight: 700;
    margin-bottom: 0.25rem;
}

.stat-card p {
    color: var(--text-muted);
    font-size: 0.8rem;
    margin: 0;
}

.stat-card.primary h3 { color: var(--color-primary); }
.stat-card.warning h3 { color: #ffc107; }
.stat-card.success h3 { color: #28a745; }
.stat-card.info h3 { color: #17a2b8; }

.filter-tabs {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
    margin-bottom: 1.5rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid var(--border-color);
}

.filter-btn {
    padding: 0.5rem 1rem;
    background: var(--bg-secondary);
    border: 1px solid var(--border-color);
    border-radius: 20px;
    color: var(--text-secondary);
    font-size: 0.85rem;
    cursor: pointer;
    transition: all 0.2s;
}

.filter-btn:hover { border-color: var(--color-primary); }
.filter-btn.active { background: var(--color-primary); border-color: var(--color-primary); color: white; }

.application-card {
    background: var(--bg-secondary);
    border-radius: 16px;
    margin-bottom: 1rem;
    border: 1px solid var(--border-color);
    overflow: hidden;
    display: flex;
}

.application-status-bar {
    width: 4px;
    flex-shrink: 0;
}

.application-status-bar.interview { background: var(--color-primary); }
.application-status-bar.offer { background: #28a745; }
.application-status-bar.pending { background: #ffc107; }
.application-status-bar.rejected { background: #dc3545; }

.application-content {
    flex: 1;
    padding: 1.25rem;
}

.application-header {
    display: flex;
    gap: 1rem;
    margin-bottom: 1rem;
    flex-wrap: wrap;
}

.company-logo {
    width: 56px;
    height: 56px;
    border-radius: 12px;
    background: var(--color-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.5rem;
    flex-shrink: 0;
}

.job-info { flex: 1; min-width: 200px; }
.job-info h3 { font-size: 1.1rem; font-weight: 600; margin-bottom: 0.25rem; }
.company-name { font-size: 0.9rem; color: var(--color-primary); margin-bottom: 0.375rem; }
.job-meta { display: flex; gap: 1rem; flex-wrap: wrap; font-size: 0.8rem; color: var(--text-muted); }

.application-status { flex-shrink: 0; }

.status-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.375rem;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
}

.status-badge.interview { background: rgba(39, 160, 237, 0.15); color: var(--color-primary); }
.status-badge.offer { background: rgba(40, 167, 69, 0.15); color: #28a745; }
.status-badge.pending { background: rgba(255, 193, 7, 0.15); color: #d39e00; }
.status-badge.rejected { background: rgba(220, 53, 69, 0.15); color: #dc3545; }

.application-details {
    display: flex;
    gap: 2rem;
    flex-wrap: wrap;
    margin-bottom: 1rem;
    padding: 1rem;
    background: var(--bg-tertiary);
    border-radius: 10px;
}

.detail-item .label {
    display: block;
    font-size: 0.75rem;
    color: var(--text-muted);
    margin-bottom: 0.25rem;
}

.detail-item .value {
    font-size: 0.875rem;
    color: var(--text-primary);
}

.detail-item .value.highlight { color: var(--color-primary); font-weight: 600; }

.application-actions {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.progress-tracker {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 1rem;
    padding: 0 1rem;
}

.progress-step {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.5rem;
}

.progress-step .step-icon {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: var(--bg-tertiary);
    border: 2px solid var(--border-color);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--text-muted);
    font-size: 0.9rem;
}

.progress-step.completed .step-icon { background: var(--color-primary); border-color: var(--color-primary); color: white; }
.progress-step.active .step-icon { border-color: var(--color-primary); color: var(--color-primary); }
.progress-step span { font-size: 0.7rem; color: var(--text-muted); }
.progress-step.completed span, .progress-step.active span { color: var(--text-primary); }

.progress-line {
    flex: 1;
    height: 2px;
    background: var(--border-color);
    margin: 0 0.5rem;
    margin-bottom: 1.5rem;
}

.progress-line.completed { background: var(--color-primary); }

.pagination .page-link { background: var(--bg-secondary); border-color: var(--border-color); color: var(--text-secondary); }
.pagination .page-item.active .page-link { background: var(--color-primary); border-color: var(--color-primary); }
</style>

<div class="applications-page">
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <h1>My Applications</h1>
            <p style="color: var(--text-muted);">Track and manage your job applications</p>
        </div>

        <!-- Stats Cards -->
        <div class="stat-cards">
            <div class="stat-card primary">
                <h3>24</h3>
                <p>Total Applied</p>
            </div>
            <div class="stat-card warning">
                <h3>12</h3>
                <p>Under Review</p>
            </div>
            <div class="stat-card info">
                <h3>5</h3>
                <p>Interview</p>
            </div>
            <div class="stat-card success">
                <h3>2</h3>
                <p>Offers</p>
            </div>
        </div>

        <!-- Filter Tabs -->
        <div class="filter-tabs">
            <button class="filter-btn active">All (24)</button>
            <button class="filter-btn">Under Review (12)</button>
            <button class="filter-btn">Interview (5)</button>
            <button class="filter-btn">Offer (2)</button>
            <button class="filter-btn">Rejected (5)</button>
        </div>

        <!-- Applications List -->
        <div class="applications-list">
            <!-- Application - Interview -->
            <div class="application-card">
                <div class="application-status-bar interview"></div>
                <div class="application-content">
                    <div class="application-header">
                        <div class="company-logo"><i class="bi bi-building"></i></div>
                        <div class="job-info">
                            <h3>Senior Full Stack Developer</h3>
                            <p class="company-name">TechCorp Philippines Inc. <i class="bi bi-patch-check-fill"></i></p>
                            <div class="job-meta">
                                <span><i class="bi bi-geo-alt"></i> Makati City</span>
                                <span><i class="bi bi-briefcase"></i> Full-time</span>
                                <span><i class="bi bi-currency-dollar"></i> ₱80K - ₱120K</span>
                            </div>
                        </div>
                        <div class="application-status">
                            <span class="status-badge interview"><i class="bi bi-calendar-event"></i> Interview Scheduled</span>
                        </div>
                    </div>
                    <div class="application-details">
                        <div class="detail-item">
                            <span class="label">Applied on</span>
                            <span class="value">March 15, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="label">Interview Date</span>
                            <span class="value highlight">March 25, 2024 at 2:00 PM</span>
                        </div>
                    </div>
                    <div class="application-actions">
                        <button class="btn btn-primary-theme btn-sm"><i class="bi bi-camera-video me-1"></i>Join Interview</button>
                        <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-eye me-1"></i>View Job</button>
                        <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-chat me-1"></i>Message</button>
                    </div>
                </div>
            </div>

            <!-- Application - Offer -->
            <div class="application-card">
                <div class="application-status-bar offer"></div>
                <div class="application-content">
                    <div class="application-header">
                        <div class="company-logo" style="background: #28a745;"><i class="bi bi-heart-pulse"></i></div>
                        <div class="job-info">
                            <h3>Healthcare Data Analyst</h3>
                            <p class="company-name">MediCare Plus Corp. <i class="bi bi-patch-check-fill"></i></p>
                            <div class="job-meta">
                                <span><i class="bi bi-geo-alt"></i> Quezon City</span>
                                <span><i class="bi bi-briefcase"></i> Full-time</span>
                                <span><i class="bi bi-currency-dollar"></i> ₱70K - ₱90K</span>
                            </div>
                        </div>
                        <div class="application-status">
                            <span class="status-badge offer"><i class="bi bi-trophy"></i> Offer Received</span>
                        </div>
                    </div>
                    <div class="application-details">
                        <div class="detail-item">
                            <span class="label">Applied on</span>
                            <span class="value">March 1, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="label">Offer Amount</span>
                            <span class="value highlight">₱85,000 / month</span>
                        </div>
                        <div class="detail-item">
                            <span class="label">Respond by</span>
                            <span class="value" style="color: #ffc107;">March 28, 2024</span>
                        </div>
                    </div>
                    <div class="application-actions">
                        <button class="btn btn-success btn-sm"><i class="bi bi-check-circle me-1"></i>Accept Offer</button>
                        <button class="btn btn-outline-danger btn-sm"><i class="bi bi-x-circle me-1"></i>Decline</button>
                        <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-file-text me-1"></i>View Offer Letter</button>
                    </div>
                </div>
            </div>

            <!-- Application - Pending with Progress -->
            <div class="application-card">
                <div class="application-status-bar pending"></div>
                <div class="application-content">
                    <div class="application-header">
                        <div class="company-logo" style="background: #17a2b8;"><i class="bi bi-bank"></i></div>
                        <div class="job-info">
                            <h3>Financial Analyst</h3>
                            <p class="company-name">Metro Finance Inc. <i class="bi bi-patch-check-fill"></i></p>
                            <div class="job-meta">
                                <span><i class="bi bi-geo-alt"></i> Ortigas, Pasig</span>
                                <span><i class="bi bi-briefcase"></i> Full-time</span>
                                <span><i class="bi bi-currency-dollar"></i> ₱45K - ₱65K</span>
                            </div>
                        </div>
                        <div class="application-status">
                            <span class="status-badge pending"><i class="bi bi-clock"></i> Under Review</span>
                        </div>
                    </div>
                    <div class="progress-tracker">
                        <div class="progress-step completed">
                            <div class="step-icon"><i class="bi bi-check"></i></div>
                            <span>Applied</span>
                        </div>
                        <div class="progress-line completed"></div>
                        <div class="progress-step active">
                            <div class="step-icon"><i class="bi bi-hourglass-split"></i></div>
                            <span>Review</span>
                        </div>
                        <div class="progress-line"></div>
                        <div class="progress-step">
                            <div class="step-icon"><i class="bi bi-camera-video"></i></div>
                            <span>Interview</span>
                        </div>
                        <div class="progress-line"></div>
                        <div class="progress-step">
                            <div class="step-icon"><i class="bi bi-trophy"></i></div>
                            <span>Decision</span>
                        </div>
                    </div>
                    <div class="application-actions">
                        <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-eye me-1"></i>View Job</button>
                        <button class="btn btn-outline-danger btn-sm"><i class="bi bi-x-circle me-1"></i>Withdraw</button>
                    </div>
                </div>
            </div>

            <!-- Application - Rejected -->
            <div class="application-card" style="opacity: 0.8;">
                <div class="application-status-bar rejected"></div>
                <div class="application-content">
                    <div class="application-header">
                        <div class="company-logo" style="background: #6f42c1;"><i class="bi bi-palette"></i></div>
                        <div class="job-info">
                            <h3>UX/UI Designer</h3>
                            <p class="company-name">Design Studio PH</p>
                            <div class="job-meta">
                                <span><i class="bi bi-geo-alt"></i> BGC, Taguig</span>
                                <span><i class="bi bi-briefcase"></i> Full-time</span>
                                <span><i class="bi bi-currency-dollar"></i> ₱50K - ₱80K</span>
                            </div>
                        </div>
                        <div class="application-status">
                            <span class="status-badge rejected"><i class="bi bi-x-circle"></i> Not Selected</span>
                        </div>
                    </div>
                    <div class="application-details">
                        <div class="detail-item">
                            <span class="label">Applied on</span>
                            <span class="value">February 28, 2024</span>
                        </div>
                        <div class="detail-item" style="flex: 1;">
                            <span class="label">Feedback</span>
                            <span class="value">We appreciated your application! We've decided to move forward with candidates whose experience more closely matches our current needs.</span>
                        </div>
                    </div>
                    <div class="application-actions">
                        <a href="jobs.php" class="btn btn-outline-secondary btn-sm"><i class="bi bi-search me-1"></i>Find Similar Jobs</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <nav class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
