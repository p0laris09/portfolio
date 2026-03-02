<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<main>
    <div class="container">
        <!-- Professor Header -->
        <div class="d-flex justify-content-between align-items-center mb-4" data-aos="fade-up">
            <div>
                <h1 class="display-5 fw-bold">Professor Dashboard</h1>
                <p class="text-muted">Welcome back, Dr. Smith! Manage your courses and students.</p>
            </div>
            <div>
                <button class="btn btn-primary-custom me-2">
                    <i class="fas fa-plus me-2"></i>Create Quiz
                </button>
                <button class="btn btn-outline-primary">
                    <i class="fas fa-plus me-2"></i>New Lesson
                </button>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="row g-4 mb-5">
            <div class="col-md-3" data-aos="fade-right">
                <div class="stat-card" style="background: linear-gradient(135deg, #4361ee, #3a0ca3);">
                    <h3>3</h3>
                    <p>Active Courses</p>
                    <i class="fas fa-book fa-2x opacity-50"></i>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up">
                <div class="stat-card" style="background: linear-gradient(135deg, #4cc9f0, #4895ef);">
                    <h3>45</h3>
                    <p>Total Students</p>
                    <i class="fas fa-users fa-2x opacity-50"></i>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-card" style="background: linear-gradient(135deg, #f72585, #b5179e);">
                    <h3>12</h3>
                    <p>Quizzes Created</p>
                    <i class="fas fa-question-circle fa-2x opacity-50"></i>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-left">
                <div class="stat-card" style="background: linear-gradient(135deg, #f8961e, #f3722c);">
                    <h3>87%</h3>
                    <p>Avg. Score</p>
                    <i class="fas fa-chart-bar fa-2x opacity-50"></i>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Course Management -->
            <div class="col-lg-8 mb-4" data-aos="fade-right">
                <div class="glass-card">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="mb-0">My Courses</h4>
                        <button class="btn btn-sm btn-primary-custom">
                            <i class="fas fa-plus me-2"></i>Add Course
                        </button>
                    </div>

                    <div class="lesson-item">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="mb-1">Introduction to PHP</h5>
                                <p class="text-muted mb-2">15 students enrolled | 8 lessons</p>
                                <div class="progress-custom" style="width: 200px;">
                                    <div class="progress-bar-custom" style="width: 75%"></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-sm btn-outline-primary me-2">Edit</button>
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </div>
                        </div>
                    </div>

                    <div class="lesson-item">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="mb-1">Advanced PHP Programming</h5>
                                <p class="text-muted mb-2">12 students enrolled | 12 lessons</p>
                                <div class="progress-custom" style="width: 200px;">
                                    <div class="progress-bar-custom" style="width: 45%"></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-sm btn-outline-primary me-2">Edit</button>
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </div>
                        </div>
                    </div>

                    <div class="lesson-item">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="mb-1">Web Development Fundamentals</h5>
                                <p class="text-muted mb-2">18 students enrolled | 15 lessons</p>
                                <div class="progress-custom" style="width: 200px;">
                                    <div class="progress-bar-custom" style="width: 60%"></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-sm btn-outline-primary me-2">Edit</button>
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Quiz Results -->
                <div class="glass-card mt-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="mb-0">Recent Quiz Results</h4>
                        <button class="btn btn-sm btn-primary-custom">View All</button>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-custom">
                            <thead>
                                <tr>
                                    <th>Student</th>
                                    <th>Quiz</th>
                                    <th>Score</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Smith</td>
                                    <td>PHP Basics</td>
                                    <td>85%</td>
                                    <td>2024-01-15</td>
                                    <td><span class="badge bg-success">Passed</span></td>
                                    <td><button class="btn btn-sm btn-primary-custom">Review</button></td>
                                </tr>
                                <tr>
                                    <td>Sarah Johnson</td>
                                    <td>PHP Basics</td>
                                    <td>92%</td>
                                    <td>2024-01-15</td>
                                    <td><span class="badge bg-success">Passed</span></td>
                                    <td><button class="btn btn-sm btn-primary-custom">Review</button></td>
                                </tr>
                                <tr>
                                    <td>Mike Wilson</td>
                                    <td>PHP Basics</td>
                                    <td>67%</td>
                                    <td>2024-01-15</td>
                                    <td><span class="badge bg-warning">Needs Review</span></td>
                                    <td><button class="btn btn-sm btn-primary-custom">Review</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-4 mb-4" data-aos="fade-left">
                <!-- Quick Actions -->
                <div class="glass-card mb-4">
                    <h4 class="mb-3">Quick Actions</h4>

                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-primary text-start">
                            <i class="fas fa-plus-circle me-2"></i> Create New Lesson
                        </button>
                        <button class="btn btn-outline-success text-start">
                            <i class="fas fa-pencil-alt me-2"></i> Grade Pending Quizzes (3)
                        </button>
                        <button class="btn btn-outline-info text-start">
                            <i class="fas fa-users me-2"></i> Manage Students
                        </button>
                        <button class="btn btn-outline-warning text-start">
                            <i class="fas fa-chart-pie me-2"></i> Generate Reports
                        </button>
                        <button class="btn btn-outline-danger text-start">
                            <i class="fas fa-bell me-2"></i> Send Announcements
                        </button>
                    </div>
                </div>

                <!-- Pending Tasks -->
                <div class="glass-card">
                    <h4 class="mb-3">Pending Tasks</h4>

                    <div class="list-group list-group-flush">
                        <div class="list-group-item bg-transparent">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <i class="fas fa-file-alt text-warning me-2"></i>
                                    <span>Grade 15 quizzes</span>
                                </div>
                                <small class="text-danger">Due today</small>
                            </div>
                        </div>
                        <div class="list-group-item bg-transparent">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <i class="fas fa-video text-primary me-2"></i>
                                    <span>Record PHP lesson</span>
                                </div>
                                <small class="text-warning">Tomorrow</small>
                            </div>
                        </div>
                        <div class="list-group-item bg-transparent">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <i class="fas fa-users text-success me-2"></i>
                                    <span>Office hours</span>
                                </div>
                                <small class="text-info">3:00 PM</small>
                            </div>
                        </div>
                        <div class="list-group-item bg-transparent">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <i class="fas fa-question-circle text-secondary me-2"></i>
                                    <span>Update quiz questions</span>
                                </div>
                                <small class="text-muted">This week</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Student Performance Overview -->
                <div class="glass-card mt-4">
                    <h4 class="mb-3">Class Performance</h4>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>PHP Basics</span>
                            <span>85%</span>
                        </div>
                        <div class="progress-custom">
                            <div class="progress-bar-custom" style="width: 85%"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>CSS Advanced</span>
                            <span>72%</span>
                        </div>
                        <div class="progress-custom">
                            <div class="progress-bar-custom" style="width: 72%"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>JavaScript</span>
                            <span>68%</span>
                        </div>
                        <div class="progress-custom">
                            <div class="progress-bar-custom" style="width: 68%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="d-flex justify-content-between mb-1">
                            <span>HTML5</span>
                            <span>94%</span>
                        </div>
                        <div class="progress-custom">
                            <div class="progress-bar-custom" style="width: 94%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>