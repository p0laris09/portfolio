<?php $pageTitle = 'Manage Jobs'; ?>
<?php include 'includes/header.php'; ?>

<style>
.admin-jobs { padding: 2rem 0; }

.page-header {
    background: var(--bg-secondary);
    border-radius: 16px;
    padding: 1.5rem;
    border: 1px solid var(--border-color);
    margin-bottom: 1.5rem;
}

.page-header h1 { font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem; }
.page-header p { color: var(--text-muted); margin: 0; }

.stat-pills {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.stat-pill {
    background: var(--bg-tertiary);
    padding: 0.75rem 1.25rem;
    border-radius: 25px;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.9rem;
}

.stat-pill .count { font-weight: 700; }
.stat-pill.total .count { color: var(--color-primary); }
.stat-pill.active .count { color: #28a745; }
.stat-pill.pending .count { color: #d39e00; }
.stat-pill.flagged .count { color: #dc3545; }

.filter-bar {
    background: var(--bg-secondary);
    border-radius: 12px;
    padding: 1rem 1.5rem;
    border: 1px solid var(--border-color);
    margin-bottom: 1.5rem;
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    align-items: center;
}

.filter-bar .search-input {
    flex: 1;
    min-width: 200px;
    position: relative;
}

.filter-bar .search-input input {
    width: 100%;
    padding: 0.5rem 1rem 0.5rem 2.5rem;
    background: var(--bg-tertiary);
    border: 1px solid var(--border-color);
    border-radius: 8px;
    color: var(--text-primary);
    font-size: 0.9rem;
}

.filter-bar .search-input input:focus { outline: none; border-color: var(--color-primary); }

.filter-bar .search-input i {
    position: absolute;
    left: 0.875rem;
    top: 50%;
    transform: translateY(-50%);
    color: var(--text-muted);
}

.filter-bar select {
    padding: 0.5rem 1rem;
    background: var(--bg-tertiary);
    border: 1px solid var(--border-color);
    border-radius: 8px;
    color: var(--text-primary);
    font-size: 0.9rem;
}

.filter-bar select:focus { outline: none; border-color: var(--color-primary); }

.jobs-table-card {
    background: var(--bg-secondary);
    border-radius: 16px;
    border: 1px solid var(--border-color);
    overflow: hidden;
}

.jobs-table {
    width: 100%;
    border-collapse: collapse;
}

.jobs-table th {
    background: var(--bg-tertiary);
    padding: 1rem 1.25rem;
    text-align: left;
    font-weight: 600;
    font-size: 0.85rem;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.jobs-table td {
    padding: 1rem 1.25rem;
    border-bottom: 1px solid var(--border-color);
    vertical-align: middle;
}

.jobs-table tr:last-child td { border-bottom: none; }
.jobs-table tr:hover { background: var(--bg-tertiary); }

.job-cell h6 { font-size: 0.95rem; font-weight: 600; margin: 0 0 0.25rem 0; }
.job-cell p { font-size: 0.8rem; color: var(--text-muted); margin: 0; }

.company-cell {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.company-logo {
    width: 32px;
    height: 32px;
    border-radius: 6px;
    background: var(--color-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 0.8rem;
    font-weight: 600;
}

.status-badge {
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 500;
    display: inline-block;
}

.status-badge.active { background: rgba(40, 167, 69, 0.15); color: #28a745; }
.status-badge.pending { background: rgba(255, 193, 7, 0.15); color: #d39e00; }
.status-badge.flagged { background: rgba(220, 53, 69, 0.15); color: #dc3545; }
.status-badge.expired { background: rgba(108, 117, 125, 0.15); color: #6c757d; }
.status-badge.closed { background: rgba(108, 117, 125, 0.15); color: #6c757d; }

.action-btn {
    padding: 0.375rem 0.625rem;
    background: transparent;
    border: 1px solid var(--border-color);
    border-radius: 6px;
    color: var(--text-secondary);
    transition: all 0.2s;
    margin-right: 0.25rem;
}

.action-btn:hover { border-color: var(--color-primary); color: var(--color-primary); }
.action-btn.success:hover { border-color: #28a745; color: #28a745; }
.action-btn.danger:hover { border-color: #dc3545; color: #dc3545; }

.table-responsive { overflow-x: auto; }

.pagination-wrapper {
    padding: 1rem 1.25rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1rem;
    border-top: 1px solid var(--border-color);
}

.pagination-info { font-size: 0.85rem; color: var(--text-muted); }

.bulk-actions {
    display: flex;
    gap: 0.5rem;
    align-items: center;
    margin-bottom: 1rem;
}

.bulk-actions span { font-size: 0.85rem; color: var(--text-muted); }

.applicants-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.25rem;
    padding: 0.25rem 0.5rem;
    background: var(--bg-tertiary);
    border-radius: 6px;
    font-size: 0.8rem;
}

.flag-reason {
    display: block;
    font-size: 0.75rem;
    color: #dc3545;
    margin-top: 0.25rem;
}
</style>

<div class="admin-jobs">
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-3 mb-lg-0">
                    <h1><i class="bi bi-briefcase me-2"></i>Manage Jobs</h1>
                    <p>Review and manage all job postings</p>
                </div>
                <div class="col-lg-7">
                    <div class="stat-pills justify-content-lg-end">
                        <div class="stat-pill total">
                            <i class="bi bi-briefcase"></i>
                            <span class="count">3,247</span>
                            <span>Total</span>
                        </div>
                        <div class="stat-pill active">
                            <i class="bi bi-check-circle"></i>
                            <span class="count">2,891</span>
                            <span>Active</span>
                        </div>
                        <div class="stat-pill pending">
                            <i class="bi bi-clock"></i>
                            <span class="count">42</span>
                            <span>Pending</span>
                        </div>
                        <div class="stat-pill flagged">
                            <i class="bi bi-flag"></i>
                            <span class="count">8</span>
                            <span>Flagged</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter Bar -->
        <div class="filter-bar">
            <div class="search-input">
                <i class="bi bi-search"></i>
                <input type="text" placeholder="Search jobs by title, company...">
            </div>
            <select>
                <option>All Status</option>
                <option>Active</option>
                <option>Pending Review</option>
                <option>Flagged</option>
                <option>Expired</option>
                <option>Closed</option>
            </select>
            <select>
                <option>All Categories</option>
                <option>Technology</option>
                <option>Design</option>
                <option>Marketing</option>
                <option>Finance</option>
                <option>Healthcare</option>
            </select>
            <select>
                <option>Sort: Newest First</option>
                <option>Sort: Oldest First</option>
                <option>Sort: Most Applicants</option>
                <option>Sort: Flagged First</option>
            </select>
        </div>

        <!-- Bulk Actions -->
        <div class="bulk-actions">
            <input type="checkbox" style="width: 18px; height: 18px;">
            <span>0 selected</span>
            <button class="btn btn-outline-secondary btn-sm" disabled>
                <i class="bi bi-check-circle me-1"></i>Approve
            </button>
            <button class="btn btn-outline-secondary btn-sm" disabled>
                <i class="bi bi-x-circle me-1"></i>Reject
            </button>
            <button class="btn btn-outline-secondary btn-sm" disabled>
                <i class="bi bi-flag me-1"></i>Flag
            </button>
        </div>

        <!-- Jobs Table -->
        <div class="jobs-table-card">
            <div class="table-responsive">
                <table class="jobs-table">
                    <thead>
                        <tr>
                            <th style="width: 40px;"><input type="checkbox" style="width: 16px; height: 16px;"></th>
                            <th>Job Details</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Applicants</th>
                            <th>Posted</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Pending Job -->
                        <tr>
                            <td><input type="checkbox" style="width: 16px; height: 16px;"></td>
                            <td>
                                <div class="job-cell">
                                    <h6>Senior Full Stack Developer</h6>
                                    <p><i class="bi bi-geo-alt"></i> Makati City • Full-time • ₱80K-120K</p>
                                </div>
                            </td>
                            <td>
                                <div class="company-cell">
                                    <div class="company-logo">TC</div>
                                    <span>TechCorp Ph</span>
                                </div>
                            </td>
                            <td><span class="status-badge pending"><i class="bi bi-clock me-1"></i>Pending</span></td>
                            <td><span class="applicants-badge"><i class="bi bi-people"></i> 0</span></td>
                            <td>15 min ago</td>
                            <td>
                                <button class="action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="action-btn success" title="Approve"><i class="bi bi-check-lg"></i></button>
                                <button class="action-btn danger" title="Reject"><i class="bi bi-x-lg"></i></button>
                            </td>
                        </tr>
                        <!-- Flagged Job -->
                        <tr style="background: rgba(220, 53, 69, 0.05);">
                            <td><input type="checkbox" style="width: 16px; height: 16px;"></td>
                            <td>
                                <div class="job-cell">
                                    <h6>Remote Data Entry - Earn ₱50K/week!</h6>
                                    <p><i class="bi bi-geo-alt"></i> Remote • Part-time • ₱200K-250K</p>
                                    <span class="flag-reason"><i class="bi bi-exclamation-triangle me-1"></i>Flagged: Suspicious salary claims</span>
                                </div>
                            </td>
                            <td>
                                <div class="company-cell">
                                    <div class="company-logo" style="background: #6c757d;">QJ</div>
                                    <span>QuickJobs Corp</span>
                                </div>
                            </td>
                            <td><span class="status-badge flagged"><i class="bi bi-flag me-1"></i>Flagged</span></td>
                            <td><span class="applicants-badge"><i class="bi bi-people"></i> 12</span></td>
                            <td>3 hours ago</td>
                            <td>
                                <button class="action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="action-btn success" title="Approve"><i class="bi bi-check-lg"></i></button>
                                <button class="action-btn danger" title="Remove"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        <!-- Active Job -->
                        <tr>
                            <td><input type="checkbox" style="width: 16px; height: 16px;"></td>
                            <td>
                                <div class="job-cell">
                                    <h6>UI/UX Designer</h6>
                                    <p><i class="bi bi-geo-alt"></i> BGC, Taguig • Full-time • ₱60K-90K</p>
                                </div>
                            </td>
                            <td>
                                <div class="company-cell">
                                    <div class="company-logo" style="background: #6f42c1;">DH</div>
                                    <span>DesignHub Inc</span>
                                </div>
                            </td>
                            <td><span class="status-badge active"><i class="bi bi-check-circle me-1"></i>Active</span></td>
                            <td><span class="applicants-badge"><i class="bi bi-people"></i> 35</span></td>
                            <td>1 hour ago</td>
                            <td>
                                <button class="action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="action-btn" title="Edit"><i class="bi bi-pencil"></i></button>
                                <button class="action-btn danger" title="Flag"><i class="bi bi-flag"></i></button>
                            </td>
                        </tr>
                        <!-- Active Job -->
                        <tr>
                            <td><input type="checkbox" style="width: 16px; height: 16px;"></td>
                            <td>
                                <div class="job-cell">
                                    <h6>Project Manager</h6>
                                    <p><i class="bi bi-geo-alt"></i> Remote • Full-time • ₱90K-130K</p>
                                </div>
                            </td>
                            <td>
                                <div class="company-cell">
                                    <div class="company-logo" style="background: #28a745;">GS</div>
                                    <span>GlobalTech Solutions</span>
                                </div>
                            </td>
                            <td><span class="status-badge active"><i class="bi bi-check-circle me-1"></i>Active</span></td>
                            <td><span class="applicants-badge"><i class="bi bi-people"></i> 28</span></td>
                            <td>4 hours ago</td>
                            <td>
                                <button class="action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="action-btn" title="Edit"><i class="bi bi-pencil"></i></button>
                                <button class="action-btn danger" title="Flag"><i class="bi bi-flag"></i></button>
                            </td>
                        </tr>
                        <!-- Active Job -->
                        <tr>
                            <td><input type="checkbox" style="width: 16px; height: 16px;"></td>
                            <td>
                                <div class="job-cell">
                                    <h6>Backend Developer</h6>
                                    <p><i class="bi bi-geo-alt"></i> Makati City • Full-time • ₱70K-100K</p>
                                </div>
                            </td>
                            <td>
                                <div class="company-cell">
                                    <div class="company-logo">TC</div>
                                    <span>TechCorp Ph</span>
                                </div>
                            </td>
                            <td><span class="status-badge active"><i class="bi bi-check-circle me-1"></i>Active</span></td>
                            <td><span class="applicants-badge"><i class="bi bi-people"></i> 42</span></td>
                            <td>1 day ago</td>
                            <td>
                                <button class="action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="action-btn" title="Edit"><i class="bi bi-pencil"></i></button>
                                <button class="action-btn danger" title="Flag"><i class="bi bi-flag"></i></button>
                            </td>
                        </tr>
                        <!-- Pending Job -->
                        <tr>
                            <td><input type="checkbox" style="width: 16px; height: 16px;"></td>
                            <td>
                                <div class="job-cell">
                                    <h6>Marketing Manager</h6>
                                    <p><i class="bi bi-geo-alt"></i> Ortigas Center • Full-time • ₱75K-100K</p>
                                </div>
                            </td>
                            <td>
                                <div class="company-cell">
                                    <div class="company-logo" style="background: #fd7e14;">MM</div>
                                    <span>MarketMasters</span>
                                </div>
                            </td>
                            <td><span class="status-badge pending"><i class="bi bi-clock me-1"></i>Pending</span></td>
                            <td><span class="applicants-badge"><i class="bi bi-people"></i> 0</span></td>
                            <td>30 min ago</td>
                            <td>
                                <button class="action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="action-btn success" title="Approve"><i class="bi bi-check-lg"></i></button>
                                <button class="action-btn danger" title="Reject"><i class="bi bi-x-lg"></i></button>
                            </td>
                        </tr>
                        <!-- Expired Job -->
                        <tr style="opacity: 0.7;">
                            <td><input type="checkbox" style="width: 16px; height: 16px;"></td>
                            <td>
                                <div class="job-cell">
                                    <h6>Junior Developer</h6>
                                    <p><i class="bi bi-geo-alt"></i> Cebu City • Full-time • ₱35K-50K</p>
                                </div>
                            </td>
                            <td>
                                <div class="company-cell">
                                    <div class="company-logo" style="background: #6c757d;">CS</div>
                                    <span>CebuSoft Inc</span>
                                </div>
                            </td>
                            <td><span class="status-badge expired"><i class="bi bi-clock-history me-1"></i>Expired</span></td>
                            <td><span class="applicants-badge"><i class="bi bi-people"></i> 89</span></td>
                            <td>30 days ago</td>
                            <td>
                                <button class="action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="action-btn" title="Renew"><i class="bi bi-arrow-clockwise"></i></button>
                                <button class="action-btn danger" title="Archive"><i class="bi bi-archive"></i></button>
                            </td>
                        </tr>
                        <!-- Closed Job -->
                        <tr style="opacity: 0.7;">
                            <td><input type="checkbox" style="width: 16px; height: 16px;"></td>
                            <td>
                                <div class="job-cell">
                                    <h6>Senior DevOps Engineer</h6>
                                    <p><i class="bi bi-geo-alt"></i> Remote • Full-time • ₱100K-150K</p>
                                </div>
                            </td>
                            <td>
                                <div class="company-cell">
                                    <div class="company-logo" style="background: #17a2b8;">CC</div>
                                    <span>CloudCorp</span>
                                </div>
                            </td>
                            <td><span class="status-badge closed"><i class="bi bi-x-circle me-1"></i>Closed</span></td>
                            <td><span class="applicants-badge"><i class="bi bi-people"></i> 156</span></td>
                            <td>15 days ago</td>
                            <td>
                                <button class="action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="action-btn" title="Reopen"><i class="bi bi-arrow-clockwise"></i></button>
                                <button class="action-btn danger" title="Archive"><i class="bi bi-archive"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="pagination-wrapper">
                <div class="pagination-info">
                    Showing 1-8 of 3,247 jobs
                </div>
                <nav>
                    <ul class="pagination mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">406</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
