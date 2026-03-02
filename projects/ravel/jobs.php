<?php $pageTitle = 'Browse Jobs'; ?>
<?php include 'includes/header.php'; ?>

<style>
.jobs-page { padding: 2rem 0; }

.search-header {
    background: linear-gradient(135deg, var(--bg-secondary) 0%, var(--bg-tertiary) 100%);
    padding: 2rem;
    border-radius: 16px;
    margin-bottom: 2rem;
    border: 1px solid var(--border-color);
}

.filter-sidebar {
    background: var(--bg-secondary);
    border-radius: 16px;
    padding: 1.5rem;
    border: 1px solid var(--border-color);
    position: sticky;
    top: 20px;
}

.filter-title {
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 1.25rem;
    padding-bottom: 0.75rem;
    border-bottom: 1px solid var(--border-color);
}

.filter-group { margin-bottom: 1.25rem; }

.filter-label {
    display: block;
    font-size: 0.8rem;
    font-weight: 500;
    color: var(--text-secondary);
    margin-bottom: 0.5rem;
}

.checkbox-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.85rem;
    color: var(--text-secondary);
    cursor: pointer;
    padding: 0.25rem 0;
}

.checkbox-item .count {
    color: var(--text-muted);
    font-size: 0.75rem;
    margin-left: auto;
}

.job-card {
    background: var(--bg-secondary);
    border: 1px solid var(--border-color);
    border-radius: 16px;
    padding: 1.5rem;
    margin-bottom: 1rem;
    transition: all 0.2s;
}

.job-card:hover {
    border-color: var(--color-primary);
}

.job-card.featured {
    border-left: 4px solid var(--color-primary);
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

.job-title {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 0.25rem;
}

.company-name {
    color: var(--color-primary);
    font-size: 0.9rem;
}

.job-meta {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    font-size: 0.8rem;
    color: var(--text-muted);
    margin-top: 0.75rem;
}

.skill-tag {
    display: inline-block;
    padding: 0.25rem 0.625rem;
    background: var(--bg-tertiary);
    border-radius: 4px;
    font-size: 0.75rem;
    color: var(--text-secondary);
    margin-right: 0.375rem;
    margin-bottom: 0.375rem;
}

.salary-range {
    font-weight: 600;
    color: var(--text-primary);
}

.featured-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.25rem;
    padding: 0.25rem 0.5rem;
    background: rgba(39, 160, 237, 0.15);
    color: var(--color-primary);
    border-radius: 4px;
    font-size: 0.7rem;
    font-weight: 500;
}

.results-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
    flex-wrap: wrap;
    gap: 1rem;
}

.pagination .page-link {
    background: var(--bg-secondary);
    border-color: var(--border-color);
    color: var(--text-secondary);
}

.pagination .page-item.active .page-link {
    background: var(--color-primary);
    border-color: var(--color-primary);
}
</style>

<div class="jobs-page">
    <div class="container">
        <!-- Search Header -->
        <div class="search-header">
            <div class="row g-3 align-items-end">
                <div class="col-md-4">
                    <label class="filter-label">Job Title or Keyword</label>
                    <input type="text" class="form-control" placeholder="e.g. Software Developer">
                </div>
                <div class="col-md-3">
                    <label class="filter-label">Location</label>
                    <select class="form-select">
                        <option value="">All Locations</option>
                        <option>Makati City</option>
                        <option>BGC, Taguig</option>
                        <option>Quezon City</option>
                        <option>Ortigas, Pasig</option>
                        <option>Cebu City</option>
                        <option>Remote</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="filter-label">Category</label>
                    <select class="form-select">
                        <option value="">All Categories</option>
                        <option>Technology</option>
                        <option>Marketing</option>
                        <option>Finance</option>
                        <option>Design</option>
                        <option>Healthcare</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary-theme w-100">
                        <i class="bi bi-search me-1"></i> Search
                    </button>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Filters Sidebar -->
            <div class="col-lg-3 mb-4">
                <div class="filter-sidebar">
                    <h5 class="filter-title"><i class="bi bi-sliders me-2"></i>Filters</h5>
                    
                    <div class="filter-group">
                        <label class="filter-label">Job Type</label>
                        <label class="checkbox-item">
                            <input type="checkbox" checked> Full-time <span class="count">(856)</span>
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" checked> Part-time <span class="count">(124)</span>
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox"> Contract <span class="count">(89)</span>
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox"> Freelance <span class="count">(56)</span>
                        </label>
                    </div>

                    <div class="filter-group">
                        <label class="filter-label">Experience Level</label>
                        <label class="checkbox-item">
                            <input type="checkbox"> Entry Level <span class="count">(312)</span>
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" checked> Mid Level <span class="count">(445)</span>
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" checked> Senior Level <span class="count">(268)</span>
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox"> Executive <span class="count">(42)</span>
                        </label>
                    </div>

                    <div class="filter-group">
                        <label class="filter-label">Salary Range</label>
                        <select class="form-select">
                            <option value="">Any Salary</option>
                            <option>₱20,000 - ₱40,000</option>
                            <option>₱40,000 - ₱60,000</option>
                            <option>₱60,000 - ₱80,000</option>
                            <option>₱80,000 - ₱100,000</option>
                            <option>₱100,000+</option>
                        </select>
                    </div>

                    <div class="filter-group">
                        <label class="filter-label">Work Arrangement</label>
                        <label class="checkbox-item">
                            <input type="checkbox" checked> On-site <span class="count">(624)</span>
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" checked> Remote <span class="count">(289)</span>
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" checked> Hybrid <span class="count">(156)</span>
                        </label>
                    </div>

                    <div class="filter-group">
                        <label class="filter-label">Date Posted</label>
                        <select class="form-select">
                            <option value="">Any Time</option>
                            <option>Last 24 hours</option>
                            <option selected>Last 7 days</option>
                            <option>Last 30 days</option>
                        </select>
                    </div>

                    <button class="btn btn-outline-secondary w-100 mt-2">
                        <i class="bi bi-arrow-counterclockwise me-1"></i> Reset Filters
                    </button>
                </div>
            </div>

            <!-- Job Listings -->
            <div class="col-lg-9">
                <div class="results-header">
                    <span style="color: var(--text-muted);">Showing <strong style="color: var(--text-primary);">1,069</strong> jobs</span>
                    <select class="form-select" style="width: auto;">
                        <option>Sort by: Most Relevant</option>
                        <option>Sort by: Newest First</option>
                        <option>Sort by: Highest Salary</option>
                    </select>
                </div>

                <!-- Job Card 1 - Featured -->
                <a href="job-details.php" style="text-decoration: none; color: inherit;">
                    <div class="job-card featured">
                        <div class="d-flex gap-3">
                            <div class="company-logo"><i class="bi bi-building"></i></div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                                    <div>
                                        <span class="featured-badge"><i class="bi bi-star-fill"></i> Featured</span>
                                        <h3 class="job-title mt-2">Senior Full Stack Developer</h3>
                                        <p class="company-name mb-0">TechCorp Philippines Inc. <i class="bi bi-patch-check-fill"></i></p>
                                    </div>
                                    <span class="salary-range">₱80K - ₱120K / mo</span>
                                </div>
                                <div class="job-meta">
                                    <span><i class="bi bi-geo-alt"></i> Makati City</span>
                                    <span><i class="bi bi-briefcase"></i> Full-time</span>
                                    <span><i class="bi bi-laptop"></i> Hybrid</span>
                                    <span><i class="bi bi-clock"></i> Posted 2 days ago</span>
                                </div>
                                <div class="mt-3">
                                    <span class="skill-tag">React</span>
                                    <span class="skill-tag">Node.js</span>
                                    <span class="skill-tag">TypeScript</span>
                                    <span class="skill-tag">PostgreSQL</span>
                                    <span class="skill-tag">AWS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Job Card 2 -->
                <a href="job-details.php" style="text-decoration: none; color: inherit;">
                    <div class="job-card">
                        <div class="d-flex gap-3">
                            <div class="company-logo" style="background: #28a745;"><i class="bi bi-palette"></i></div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                                    <div>
                                        <h3 class="job-title">UI/UX Designer</h3>
                                        <p class="company-name mb-0">Creative Studio PH <i class="bi bi-patch-check-fill"></i></p>
                                    </div>
                                    <span class="salary-range">₱50K - ₱80K / mo</span>
                                </div>
                                <div class="job-meta">
                                    <span><i class="bi bi-geo-alt"></i> BGC, Taguig</span>
                                    <span><i class="bi bi-briefcase"></i> Full-time</span>
                                    <span><i class="bi bi-building"></i> On-site</span>
                                    <span><i class="bi bi-clock"></i> Posted 3 days ago</span>
                                </div>
                                <div class="mt-3">
                                    <span class="skill-tag">Figma</span>
                                    <span class="skill-tag">Adobe XD</span>
                                    <span class="skill-tag">User Research</span>
                                    <span class="skill-tag">Prototyping</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Job Card 3 -->
                <a href="job-details.php" style="text-decoration: none; color: inherit;">
                    <div class="job-card">
                        <div class="d-flex gap-3">
                            <div class="company-logo" style="background: #6f42c1;"><i class="bi bi-graph-up"></i></div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                                    <div>
                                        <h3 class="job-title">Digital Marketing Manager</h3>
                                        <p class="company-name mb-0">Growth Agency Co.</p>
                                    </div>
                                    <span class="salary-range">₱60K - ₱90K / mo</span>
                                </div>
                                <div class="job-meta">
                                    <span><i class="bi bi-geo-alt"></i> Remote</span>
                                    <span><i class="bi bi-briefcase"></i> Full-time</span>
                                    <span><i class="bi bi-house"></i> Work from Home</span>
                                    <span><i class="bi bi-clock"></i> Posted 5 days ago</span>
                                </div>
                                <div class="mt-3">
                                    <span class="skill-tag">SEO</span>
                                    <span class="skill-tag">Google Ads</span>
                                    <span class="skill-tag">Social Media</span>
                                    <span class="skill-tag">Analytics</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Job Card 4 -->
                <a href="job-details.php" style="text-decoration: none; color: inherit;">
                    <div class="job-card">
                        <div class="d-flex gap-3">
                            <div class="company-logo" style="background: #17a2b8;"><i class="bi bi-bank"></i></div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                                    <div>
                                        <h3 class="job-title">Financial Analyst</h3>
                                        <p class="company-name mb-0">Metro Finance Inc. <i class="bi bi-patch-check-fill"></i></p>
                                    </div>
                                    <span class="salary-range">₱45K - ₱65K / mo</span>
                                </div>
                                <div class="job-meta">
                                    <span><i class="bi bi-geo-alt"></i> Ortigas, Pasig</span>
                                    <span><i class="bi bi-briefcase"></i> Full-time</span>
                                    <span><i class="bi bi-building"></i> On-site</span>
                                    <span><i class="bi bi-clock"></i> Posted 1 week ago</span>
                                </div>
                                <div class="mt-3">
                                    <span class="skill-tag">Excel</span>
                                    <span class="skill-tag">Financial Modeling</span>
                                    <span class="skill-tag">SAP</span>
                                    <span class="skill-tag">Reporting</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Job Card 5 -->
                <a href="job-details.php" style="text-decoration: none; color: inherit;">
                    <div class="job-card">
                        <div class="d-flex gap-3">
                            <div class="company-logo" style="background: #dc3545;"><i class="bi bi-heart-pulse"></i></div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                                    <div>
                                        <h3 class="job-title">Healthcare Data Analyst</h3>
                                        <p class="company-name mb-0">MediCare Plus Corp. <i class="bi bi-patch-check-fill"></i></p>
                                    </div>
                                    <span class="salary-range">₱70K - ₱90K / mo</span>
                                </div>
                                <div class="job-meta">
                                    <span><i class="bi bi-geo-alt"></i> Alabang</span>
                                    <span><i class="bi bi-briefcase"></i> Full-time</span>
                                    <span><i class="bi bi-laptop"></i> Hybrid</span>
                                    <span><i class="bi bi-clock"></i> Posted 4 days ago</span>
                                </div>
                                <div class="mt-3">
                                    <span class="skill-tag">Python</span>
                                    <span class="skill-tag">SQL</span>
                                    <span class="skill-tag">Healthcare</span>
                                    <span class="skill-tag">Tableau</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Pagination -->
                <nav class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">42</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
