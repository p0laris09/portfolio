<?php $pageTitle = 'Manage Users'; ?>
<?php include 'includes/header.php'; ?>

<style>
.admin-users { padding: 2rem 0; }

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
.stat-pill.applicants .count { color: #28a745; }
.stat-pill.contractors .count { color: #6f42c1; }
.stat-pill.admins .count { color: #d39e00; }

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

.users-table-card {
    background: var(--bg-secondary);
    border-radius: 16px;
    border: 1px solid var(--border-color);
    overflow: hidden;
}

.users-table {
    width: 100%;
    border-collapse: collapse;
}

.users-table th {
    background: var(--bg-tertiary);
    padding: 1rem 1.25rem;
    text-align: left;
    font-weight: 600;
    font-size: 0.85rem;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.users-table td {
    padding: 1rem 1.25rem;
    border-bottom: 1px solid var(--border-color);
    vertical-align: middle;
}

.users-table tr:last-child td { border-bottom: none; }
.users-table tr:hover { background: var(--bg-tertiary); }

.user-cell {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.user-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: var(--color-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 600;
    font-size: 0.9rem;
    flex-shrink: 0;
}

.user-details h6 { font-size: 0.95rem; font-weight: 600; margin: 0 0 0.125rem 0; }
.user-details p { font-size: 0.8rem; color: var(--text-muted); margin: 0; }

.type-badge {
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 500;
    display: inline-block;
}

.type-badge.applicant { background: rgba(39, 160, 237, 0.15); color: var(--color-primary); }
.type-badge.contractor { background: rgba(40, 167, 69, 0.15); color: #28a745; }
.type-badge.admin { background: rgba(255, 193, 7, 0.15); color: #d39e00; }

.status-badge {
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 500;
    display: inline-block;
}

.status-badge.active { background: rgba(40, 167, 69, 0.15); color: #28a745; }
.status-badge.suspended { background: rgba(220, 53, 69, 0.15); color: #dc3545; }
.status-badge.pending { background: rgba(255, 193, 7, 0.15); color: #d39e00; }

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
</style>

<div class="admin-users">
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-3 mb-lg-0">
                    <h1><i class="bi bi-people me-2"></i>Manage Users</h1>
                    <p>View and manage all platform users</p>
                </div>
                <div class="col-lg-7">
                    <div class="stat-pills justify-content-lg-end">
                        <div class="stat-pill total">
                            <i class="bi bi-people"></i>
                            <span class="count">15,842</span>
                            <span>Total</span>
                        </div>
                        <div class="stat-pill applicants">
                            <i class="bi bi-person"></i>
                            <span class="count">12,456</span>
                            <span>Applicants</span>
                        </div>
                        <div class="stat-pill contractors">
                            <i class="bi bi-building"></i>
                            <span class="count">3,348</span>
                            <span>Contractors</span>
                        </div>
                        <div class="stat-pill admins">
                            <i class="bi bi-shield"></i>
                            <span class="count">38</span>
                            <span>Admins</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter Bar -->
        <div class="filter-bar">
            <div class="search-input">
                <i class="bi bi-search"></i>
                <input type="text" placeholder="Search users by name, email...">
            </div>
            <select>
                <option>All Types</option>
                <option>Applicants</option>
                <option>Contractors</option>
                <option>Admins</option>
            </select>
            <select>
                <option>All Status</option>
                <option>Active</option>
                <option>Suspended</option>
                <option>Pending</option>
            </select>
            <select>
                <option>Sort: Newest First</option>
                <option>Sort: Oldest First</option>
                <option>Sort: A-Z</option>
                <option>Sort: Z-A</option>
            </select>
            <button class="btn btn-primary-theme btn-sm">
                <i class="bi bi-plus-lg me-1"></i>Add User
            </button>
        </div>

        <!-- Bulk Actions -->
        <div class="bulk-actions">
            <input type="checkbox" style="width: 18px; height: 18px;">
            <span>0 selected</span>
            <button class="btn btn-outline-secondary btn-sm" disabled>
                <i class="bi bi-check-circle me-1"></i>Activate
            </button>
            <button class="btn btn-outline-secondary btn-sm" disabled>
                <i class="bi bi-x-circle me-1"></i>Suspend
            </button>
            <button class="btn btn-outline-secondary btn-sm" disabled>
                <i class="bi bi-envelope me-1"></i>Email
            </button>
        </div>

        <!-- Users Table -->
        <div class="users-table-card">
            <div class="table-responsive">
                <table class="users-table">
                    <thead>
                        <tr>
                            <th style="width: 40px;"><input type="checkbox" style="width: 16px; height: 16px;"></th>
                            <th>User</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Joined</th>
                            <th>Last Active</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" style="width: 16px; height: 16px;"></td>
                            <td>
                                <div class="user-cell">
                                    <div class="user-avatar">MR</div>
                                    <div class="user-details">
                                        <h6>Maria Reyes</h6>
                                        <p>maria.reyes@email.com</p>
                                    </div>
                                </div>
                            </td>
                            <td><span class="type-badge applicant"><i class="bi bi-person me-1"></i>Applicant</span></td>
                            <td><span class="status-badge active"><i class="bi bi-check-circle me-1"></i>Active</span></td>
                            <td>Mar 24, 2025</td>
                            <td>5 min ago</td>
                            <td>
                                <button class="action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="action-btn" title="Edit"><i class="bi bi-pencil"></i></button>
                                <button class="action-btn danger" title="Suspend"><i class="bi bi-slash-circle"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" style="width: 16px; height: 16px;"></td>
                            <td>
                                <div class="user-cell">
                                    <div class="user-avatar" style="background: #28a745;">TC</div>
                                    <div class="user-details">
                                        <h6>TechCorp Philippines Inc.</h6>
                                        <p>hr@techcorp.ph</p>
                                    </div>
                                </div>
                            </td>
                            <td><span class="type-badge contractor"><i class="bi bi-building me-1"></i>Contractor</span></td>
                            <td><span class="status-badge active"><i class="bi bi-check-circle me-1"></i>Active</span></td>
                            <td>Mar 22, 2025</td>
                            <td>1 hour ago</td>
                            <td>
                                <button class="action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="action-btn" title="Edit"><i class="bi bi-pencil"></i></button>
                                <button class="action-btn danger" title="Suspend"><i class="bi bi-slash-circle"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" style="width: 16px; height: 16px;"></td>
                            <td>
                                <div class="user-cell">
                                    <div class="user-avatar" style="background: #d39e00;">AD</div>
                                    <div class="user-details">
                                        <h6>Admin User</h6>
                                        <p>admin@jobportal.com</p>
                                    </div>
                                </div>
                            </td>
                            <td><span class="type-badge admin"><i class="bi bi-shield me-1"></i>Admin</span></td>
                            <td><span class="status-badge active"><i class="bi bi-check-circle me-1"></i>Active</span></td>
                            <td>Jan 01, 2025</td>
                            <td>Online</td>
                            <td>
                                <button class="action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="action-btn" title="Edit"><i class="bi bi-pencil"></i></button>
                                <button class="action-btn" title="Settings"><i class="bi bi-gear"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" style="width: 16px; height: 16px;"></td>
                            <td>
                                <div class="user-cell">
                                    <div class="user-avatar" style="background: #6f42c1;">JC</div>
                                    <div class="user-details">
                                        <h6>Juan Carlos Santos</h6>
                                        <p>jc.santos@email.com</p>
                                    </div>
                                </div>
                            </td>
                            <td><span class="type-badge applicant"><i class="bi bi-person me-1"></i>Applicant</span></td>
                            <td><span class="status-badge active"><i class="bi bi-check-circle me-1"></i>Active</span></td>
                            <td>Mar 20, 2025</td>
                            <td>Yesterday</td>
                            <td>
                                <button class="action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="action-btn" title="Edit"><i class="bi bi-pencil"></i></button>
                                <button class="action-btn danger" title="Suspend"><i class="bi bi-slash-circle"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" style="width: 16px; height: 16px;"></td>
                            <td>
                                <div class="user-cell">
                                    <div class="user-avatar" style="background: #17a2b8;">GS</div>
                                    <div class="user-details">
                                        <h6>GlobalTech Solutions</h6>
                                        <p>contact@globaltech.ph</p>
                                    </div>
                                </div>
                            </td>
                            <td><span class="type-badge contractor"><i class="bi bi-building me-1"></i>Contractor</span></td>
                            <td><span class="status-badge pending"><i class="bi bi-clock me-1"></i>Pending</span></td>
                            <td>Mar 23, 2025</td>
                            <td>2 days ago</td>
                            <td>
                                <button class="action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="action-btn" title="Approve"><i class="bi bi-check-lg"></i></button>
                                <button class="action-btn danger" title="Reject"><i class="bi bi-x-lg"></i></button>
                            </td>
                        </tr>
                        <tr style="opacity: 0.7;">
                            <td><input type="checkbox" style="width: 16px; height: 16px;"></td>
                            <td>
                                <div class="user-cell">
                                    <div class="user-avatar" style="background: #6c757d;">SP</div>
                                    <div class="user-details">
                                        <h6>Spam Poster</h6>
                                        <p>spam@fake.com</p>
                                    </div>
                                </div>
                            </td>
                            <td><span class="type-badge contractor"><i class="bi bi-building me-1"></i>Contractor</span></td>
                            <td><span class="status-badge suspended"><i class="bi bi-slash-circle me-1"></i>Suspended</span></td>
                            <td>Mar 15, 2025</td>
                            <td>Mar 16, 2025</td>
                            <td>
                                <button class="action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="action-btn" title="Restore"><i class="bi bi-arrow-counterclockwise"></i></button>
                                <button class="action-btn danger" title="Delete"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" style="width: 16px; height: 16px;"></td>
                            <td>
                                <div class="user-cell">
                                    <div class="user-avatar" style="background: #e83e8c;">AL</div>
                                    <div class="user-details">
                                        <h6>Ana Lopez</h6>
                                        <p>ana.lopez@email.com</p>
                                    </div>
                                </div>
                            </td>
                            <td><span class="type-badge applicant"><i class="bi bi-person me-1"></i>Applicant</span></td>
                            <td><span class="status-badge active"><i class="bi bi-check-circle me-1"></i>Active</span></td>
                            <td>Mar 21, 2025</td>
                            <td>3 hours ago</td>
                            <td>
                                <button class="action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="action-btn" title="Edit"><i class="bi bi-pencil"></i></button>
                                <button class="action-btn danger" title="Suspend"><i class="bi bi-slash-circle"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" style="width: 16px; height: 16px;"></td>
                            <td>
                                <div class="user-cell">
                                    <div class="user-avatar" style="background: #fd7e14;">DH</div>
                                    <div class="user-details">
                                        <h6>DesignHub Inc.</h6>
                                        <p>careers@designhub.ph</p>
                                    </div>
                                </div>
                            </td>
                            <td><span class="type-badge contractor"><i class="bi bi-building me-1"></i>Contractor</span></td>
                            <td><span class="status-badge active"><i class="bi bi-check-circle me-1"></i>Active</span></td>
                            <td>Mar 18, 2025</td>
                            <td>30 min ago</td>
                            <td>
                                <button class="action-btn" title="View"><i class="bi bi-eye"></i></button>
                                <button class="action-btn" title="Edit"><i class="bi bi-pencil"></i></button>
                                <button class="action-btn danger" title="Suspend"><i class="bi bi-slash-circle"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="pagination-wrapper">
                <div class="pagination-info">
                    Showing 1-8 of 15,842 users
                </div>
                <nav>
                    <ul class="pagination mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">1,981</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
