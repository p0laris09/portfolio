<?php $pageTitle = 'Manage Applicants'; ?>
<?php include 'includes/header.php'; ?>

<style>
.contractor-applicants { padding: 2rem 0; }

.page-header {
    background: var(--bg-secondary);
    border-radius: 16px;
    padding: 1.5rem;
    border: 1px solid var(--border-color);
    margin-bottom: 1.5rem;
}

.page-header h1 { font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem; }
.page-header p { color: var(--text-muted); margin: 0; }

.stat-row {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.stat-mini {
    background: var(--bg-tertiary);
    padding: 0.75rem 1.25rem;
    border-radius: 10px;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.stat-mini i { font-size: 1.25rem; color: var(--color-primary); }
.stat-mini .stat-value { font-size: 1.25rem; font-weight: 700; }
.stat-mini .stat-label { font-size: 0.75rem; color: var(--text-muted); }

.filter-tabs {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
    margin-bottom: 1.5rem;
}

.filter-tab {
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.85rem;
    border: 1px solid var(--border-color);
    background: var(--bg-secondary);
    color: var(--text-secondary);
    transition: all 0.2s;
    text-decoration: none;
}

.filter-tab:hover { border-color: var(--color-primary); color: var(--text-primary); }
.filter-tab.active { background: var(--color-primary); border-color: var(--color-primary); color: white; }

.content-section { display: flex; gap: 1.5rem; }

.sidebar-filters {
    width: 280px;
    flex-shrink: 0;
}

.filter-card {
    background: var(--bg-secondary);
    border-radius: 16px;
    padding: 1.5rem;
    border: 1px solid var(--border-color);
    margin-bottom: 1rem;
}

.filter-card h5 { font-size: 1rem; font-weight: 600; margin-bottom: 1rem; }

.filter-group { margin-bottom: 1.25rem; }
.filter-group:last-child { margin-bottom: 0; }
.filter-group label { display: block; font-size: 0.85rem; color: var(--text-muted); margin-bottom: 0.5rem; }

.filter-group select, .filter-group input {
    width: 100%;
    padding: 0.625rem 0.875rem;
    background: var(--bg-tertiary);
    border: 1px solid var(--border-color);
    border-radius: 8px;
    color: var(--text-primary);
    font-size: 0.9rem;
}

.filter-group select:focus, .filter-group input:focus {
    outline: none;
    border-color: var(--color-primary);
}

.applicants-list { flex: 1; }

.applicant-card {
    background: var(--bg-secondary);
    border-radius: 16px;
    padding: 1.5rem;
    border: 1px solid var(--border-color);
    margin-bottom: 1rem;
    transition: all 0.2s;
}

.applicant-card:hover { border-color: var(--color-primary); }

.applicant-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1rem;
}

.applicant-main { display: flex; gap: 1rem; }

.applicant-avatar {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    background: var(--color-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.25rem;
    font-weight: 600;
    flex-shrink: 0;
}

.applicant-info h4 { font-size: 1.1rem; font-weight: 600; margin-bottom: 0.25rem; }
.applicant-info .position { color: var(--text-muted); font-size: 0.9rem; margin-bottom: 0.5rem; }

.applicant-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    font-size: 0.85rem;
    color: var(--text-muted);
}

.meta-item { display: flex; align-items: center; gap: 0.25rem; }

.match-badge {
    padding: 0.5rem 1rem;
    border-radius: 25px;
    font-weight: 600;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.match-badge.excellent { background: rgba(40, 167, 69, 0.15); color: #28a745; }
.match-badge.good { background: rgba(39, 160, 237, 0.15); color: var(--color-primary); }
.match-badge.moderate { background: rgba(255, 193, 7, 0.15); color: #d39e00; }

.skills-section {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin-bottom: 1rem;
}

.skill-tag {
    padding: 0.375rem 0.75rem;
    background: var(--bg-tertiary);
    border-radius: 20px;
    font-size: 0.8rem;
    color: var(--text-secondary);
}

.skill-tag.match { background: rgba(39, 160, 237, 0.15); color: var(--color-primary); }

.applicant-summary {
    background: var(--bg-tertiary);
    padding: 1rem;
    border-radius: 10px;
    margin-bottom: 1rem;
    font-size: 0.9rem;
    color: var(--text-secondary);
}

.applicant-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1rem;
}

.action-buttons { display: flex; gap: 0.5rem; flex-wrap: wrap; }

.status-badge {
    padding: 0.375rem 0.875rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
}

.status-badge.new { background: rgba(39, 160, 237, 0.15); color: var(--color-primary); }
.status-badge.screening { background: rgba(255, 193, 7, 0.15); color: #d39e00; }
.status-badge.interview { background: rgba(111, 66, 193, 0.15); color: #6f42c1; }
.status-badge.offer { background: rgba(40, 167, 69, 0.15); color: #28a745; }
.status-badge.rejected { background: rgba(220, 53, 69, 0.15); color: #dc3545; }

.experience-highlight {
    display: flex;
    gap: 1.5rem;
    margin-top: 0.5rem;
    font-size: 0.85rem;
}

.exp-item { display: flex; flex-direction: column; }
.exp-item span:first-child { color: var(--text-muted); font-size: 0.75rem; }
.exp-item span:last-child { font-weight: 600; color: var(--text-primary); }

@media (max-width: 991px) {
    .content-section { flex-direction: column; }
    .sidebar-filters { width: 100%; order: -1; }
}
</style>

<div class="contractor-applicants">
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <h1><i class="bi bi-people me-2"></i>Manage Applicants</h1>
                    <p>Review and manage all job applications</p>
                </div>
                <div class="col-lg-6">
                    <div class="stat-row justify-content-lg-end">
                        <div class="stat-mini">
                            <i class="bi bi-inbox"></i>
                            <div>
                                <div class="stat-value">248</div>
                                <div class="stat-label">Total</div>
                            </div>
                        </div>
                        <div class="stat-mini">
                            <i class="bi bi-clock" style="color: #d39e00;"></i>
                            <div>
                                <div class="stat-value">38</div>
                                <div class="stat-label">New</div>
                            </div>
                        </div>
                        <div class="stat-mini">
                            <i class="bi bi-calendar-check" style="color: #6f42c1;"></i>
                            <div>
                                <div class="stat-value">12</div>
                                <div class="stat-label">Interview</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter Tabs -->
        <div class="filter-tabs">
            <a href="#" class="filter-tab active">All Applicants (248)</a>
            <a href="#" class="filter-tab">New (38)</a>
            <a href="#" class="filter-tab">Screening (42)</a>
            <a href="#" class="filter-tab">Interview (12)</a>
            <a href="#" class="filter-tab">Offer (5)</a>
            <a href="#" class="filter-tab">Rejected (28)</a>
        </div>

        <div class="content-section">
            <!-- Sidebar Filters -->
            <div class="sidebar-filters">
                <div class="filter-card">
                    <h5><i class="bi bi-funnel me-2"></i>Filters</h5>
                    
                    <div class="filter-group">
                        <label>Job Position</label>
                        <select>
                            <option>All Positions</option>
                            <option>Senior Full Stack Developer</option>
                            <option>UI/UX Designer</option>
                            <option>Project Manager</option>
                            <option>Backend Developer</option>
                        </select>
                    </div>
                    
                    <div class="filter-group">
                        <label>Match Score</label>
                        <select>
                            <option>Any Match</option>
                            <option>Excellent (90%+)</option>
                            <option>Good (70-89%)</option>
                            <option>Moderate (50-69%)</option>
                        </select>
                    </div>
                    
                    <div class="filter-group">
                        <label>Experience Level</label>
                        <select>
                            <option>Any Experience</option>
                            <option>Entry Level (0-2 years)</option>
                            <option>Mid Level (3-5 years)</option>
                            <option>Senior (6-10 years)</option>
                            <option>Expert (10+ years)</option>
                        </select>
                    </div>
                    
                    <div class="filter-group">
                        <label>Applied Date</label>
                        <select>
                            <option>Any Time</option>
                            <option>Today</option>
                            <option>This Week</option>
                            <option>This Month</option>
                        </select>
                    </div>
                    
                    <button class="btn btn-primary-theme btn-sm w-100">Apply Filters</button>
                </div>
                
                <div class="filter-card">
                    <h5><i class="bi bi-sort-down me-2"></i>Sort By</h5>
                    <div class="filter-group">
                        <select>
                            <option>Most Recent First</option>
                            <option>Highest Match Score</option>
                            <option>Most Experience</option>
                            <option>Name (A-Z)</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Applicants List -->
            <div class="applicants-list">
                <!-- Applicant Card 1 - Excellent Match -->
                <div class="applicant-card">
                    <div class="applicant-header">
                        <div class="applicant-main">
                            <div class="applicant-avatar">MR</div>
                            <div class="applicant-info">
                                <h4>Maria Reyes</h4>
                                <p class="position">Applied for: Senior Full Stack Developer</p>
                                <div class="applicant-meta">
                                    <span class="meta-item"><i class="bi bi-geo-alt"></i> Makati City</span>
                                    <span class="meta-item"><i class="bi bi-briefcase"></i> 6 years exp</span>
                                    <span class="meta-item"><i class="bi bi-clock"></i> 2 hours ago</span>
                                </div>
                                <div class="experience-highlight">
                                    <div class="exp-item">
                                        <span>Current Role</span>
                                        <span>Full Stack Dev @ StartupXYZ</span>
                                    </div>
                                    <div class="exp-item">
                                        <span>Education</span>
                                        <span>BS Computer Science</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="match-badge excellent">
                            <i class="bi bi-bullseye"></i>92% Match
                        </div>
                    </div>
                    
                    <div class="skills-section">
                        <span class="skill-tag match">React</span>
                        <span class="skill-tag match">Node.js</span>
                        <span class="skill-tag match">TypeScript</span>
                        <span class="skill-tag match">PostgreSQL</span>
                        <span class="skill-tag">AWS</span>
                        <span class="skill-tag">Docker</span>
                    </div>
                    
                    <div class="applicant-summary">
                        Experienced full-stack developer with 6 years of experience building scalable web applications. Strong background in React and Node.js with expertise in cloud architecture...
                    </div>
                    
                    <div class="applicant-footer">
                        <span class="status-badge new"><i class="bi bi-star me-1"></i>New Application</span>
                        <div class="action-buttons">
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-file-earmark-text me-1"></i>View Resume</button>
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-chat me-1"></i>Message</button>
                            <button class="btn btn-primary-theme btn-sm"><i class="bi bi-calendar-plus me-1"></i>Schedule Interview</button>
                        </div>
                    </div>
                </div>

                <!-- Applicant Card 2 - Good Match -->
                <div class="applicant-card">
                    <div class="applicant-header">
                        <div class="applicant-main">
                            <div class="applicant-avatar" style="background: #28a745;">JC</div>
                            <div class="applicant-info">
                                <h4>Juan Carlos Santos</h4>
                                <p class="position">Applied for: UI/UX Designer</p>
                                <div class="applicant-meta">
                                    <span class="meta-item"><i class="bi bi-geo-alt"></i> BGC, Taguig</span>
                                    <span class="meta-item"><i class="bi bi-briefcase"></i> 4 years exp</span>
                                    <span class="meta-item"><i class="bi bi-clock"></i> 5 hours ago</span>
                                </div>
                                <div class="experience-highlight">
                                    <div class="exp-item">
                                        <span>Current Role</span>
                                        <span>Senior Designer @ DesignCo</span>
                                    </div>
                                    <div class="exp-item">
                                        <span>Education</span>
                                        <span>BS Multimedia Arts</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="match-badge excellent">
                            <i class="bi bi-bullseye"></i>88% Match
                        </div>
                    </div>
                    
                    <div class="skills-section">
                        <span class="skill-tag match">Figma</span>
                        <span class="skill-tag match">UI Design</span>
                        <span class="skill-tag match">UX Research</span>
                        <span class="skill-tag">Adobe XD</span>
                        <span class="skill-tag">Prototyping</span>
                        <span class="skill-tag">Design Systems</span>
                    </div>
                    
                    <div class="applicant-summary">
                        Creative UI/UX designer passionate about crafting intuitive user experiences. Portfolio includes work for multiple fintech and e-commerce platforms...
                    </div>
                    
                    <div class="applicant-footer">
                        <span class="status-badge screening"><i class="bi bi-hourglass me-1"></i>Under Screening</span>
                        <div class="action-buttons">
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-file-earmark-text me-1"></i>View Resume</button>
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-chat me-1"></i>Message</button>
                            <button class="btn btn-primary-theme btn-sm"><i class="bi bi-calendar-plus me-1"></i>Schedule Interview</button>
                        </div>
                    </div>
                </div>

                <!-- Applicant Card 3 - Interview Stage -->
                <div class="applicant-card">
                    <div class="applicant-header">
                        <div class="applicant-main">
                            <div class="applicant-avatar" style="background: #17a2b8;">AD</div>
                            <div class="applicant-info">
                                <h4>Anna De Guzman</h4>
                                <p class="position">Applied for: Project Manager</p>
                                <div class="applicant-meta">
                                    <span class="meta-item"><i class="bi bi-geo-alt"></i> Quezon City</span>
                                    <span class="meta-item"><i class="bi bi-briefcase"></i> 8 years exp</span>
                                    <span class="meta-item"><i class="bi bi-clock"></i> 1 day ago</span>
                                </div>
                                <div class="experience-highlight">
                                    <div class="exp-item">
                                        <span>Current Role</span>
                                        <span>PM Lead @ GlobalTech</span>
                                    </div>
                                    <div class="exp-item">
                                        <span>Education</span>
                                        <span>MBA, PMP Certified</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="match-badge good">
                            <i class="bi bi-bullseye"></i>76% Match
                        </div>
                    </div>
                    
                    <div class="skills-section">
                        <span class="skill-tag match">Agile/Scrum</span>
                        <span class="skill-tag match">Project Management</span>
                        <span class="skill-tag">PMP Certified</span>
                        <span class="skill-tag">Jira</span>
                        <span class="skill-tag">Stakeholder Mgmt</span>
                    </div>
                    
                    <div class="applicant-summary">
                        Seasoned project manager with 8+ years leading cross-functional teams. Successfully delivered 20+ projects valued at over ₱50M...
                    </div>
                    
                    <div class="applicant-footer">
                        <span class="status-badge interview"><i class="bi bi-calendar-check me-1"></i>Interview: Mar 26, 3:00 PM</span>
                        <div class="action-buttons">
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-file-earmark-text me-1"></i>View Resume</button>
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-chat me-1"></i>Message</button>
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-pencil me-1"></i>Reschedule</button>
                        </div>
                    </div>
                </div>

                <!-- Applicant Card 4 - Offer Stage -->
                <div class="applicant-card">
                    <div class="applicant-header">
                        <div class="applicant-main">
                            <div class="applicant-avatar" style="background: #6f42c1;">RL</div>
                            <div class="applicant-info">
                                <h4>Rafael Lorenzo</h4>
                                <p class="position">Applied for: Senior Full Stack Developer</p>
                                <div class="applicant-meta">
                                    <span class="meta-item"><i class="bi bi-geo-alt"></i> Makati City</span>
                                    <span class="meta-item"><i class="bi bi-briefcase"></i> 7 years exp</span>
                                    <span class="meta-item"><i class="bi bi-clock"></i> 3 days ago</span>
                                </div>
                                <div class="experience-highlight">
                                    <div class="exp-item">
                                        <span>Current Role</span>
                                        <span>Tech Lead @ FinanceApp</span>
                                    </div>
                                    <div class="exp-item">
                                        <span>Education</span>
                                        <span>MS Computer Engineering</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="match-badge excellent">
                            <i class="bi bi-bullseye"></i>95% Match
                        </div>
                    </div>
                    
                    <div class="skills-section">
                        <span class="skill-tag match">React</span>
                        <span class="skill-tag match">Node.js</span>
                        <span class="skill-tag match">TypeScript</span>
                        <span class="skill-tag match">PostgreSQL</span>
                        <span class="skill-tag match">AWS</span>
                        <span class="skill-tag match">Docker</span>
                    </div>
                    
                    <div class="applicant-summary">
                        Tech lead with extensive experience in full-stack development. Built and scaled applications serving millions of users. Strong leadership and mentoring abilities...
                    </div>
                    
                    <div class="applicant-footer">
                        <span class="status-badge offer"><i class="bi bi-check-circle me-1"></i>Offer Sent</span>
                        <div class="action-buttons">
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-file-earmark-text me-1"></i>View Resume</button>
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-chat me-1"></i>Message</button>
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-file-text me-1"></i>View Offer</button>
                        </div>
                    </div>
                </div>

                <!-- Applicant Card 5 - Rejected -->
                <div class="applicant-card" style="opacity: 0.7;">
                    <div class="applicant-header">
                        <div class="applicant-main">
                            <div class="applicant-avatar" style="background: #6c757d;">PT</div>
                            <div class="applicant-info">
                                <h4>Paolo Torres</h4>
                                <p class="position">Applied for: Backend Developer</p>
                                <div class="applicant-meta">
                                    <span class="meta-item"><i class="bi bi-geo-alt"></i> Cebu City</span>
                                    <span class="meta-item"><i class="bi bi-briefcase"></i> 2 years exp</span>
                                    <span class="meta-item"><i class="bi bi-clock"></i> 5 days ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="match-badge moderate">
                            <i class="bi bi-bullseye"></i>45% Match
                        </div>
                    </div>
                    
                    <div class="skills-section">
                        <span class="skill-tag">PHP</span>
                        <span class="skill-tag">Laravel</span>
                        <span class="skill-tag">MySQL</span>
                    </div>
                    
                    <div class="applicant-footer">
                        <span class="status-badge rejected"><i class="bi bi-x-circle me-1"></i>Not Suitable</span>
                        <div class="action-buttons">
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-file-earmark-text me-1"></i>View Resume</button>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav>
                    <ul class="pagination justify-content-center mt-4">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">10</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
