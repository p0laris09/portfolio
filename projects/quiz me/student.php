<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<main>
    <div class="container">
        <!-- Student Header -->
        <div class="d-flex justify-content-between align-items-center mb-4" data-aos="fade-up">
            <div>
                <h1 class="display-5 fw-bold">Student Dashboard</h1>
                <p class="text-muted">Welcome back, John! Track your learning progress here.</p>
            </div>
            <div class="d-flex align-items-center">
                <img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="Profile">
                <div>
                    <h6 class="mb-0">John Smith</h6>
                    <small class="text-muted">Student ID: STU001</small>
                </div>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="row g-4 mb-5">
            <div class="col-md-3" data-aos="fade-right">
                <div class="stat-card">
                    <h3>85%</h3>
                    <p>Overall Progress</p>
                    <i class="fas fa-chart-line fa-2x opacity-50"></i>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up">
                <div class="stat-card" style="background: linear-gradient(135deg, #4cc9f0, #4895ef);">
                    <h3>12</h3>
                    <p>Completed Quizzes</p>
                    <i class="fas fa-check-circle fa-2x opacity-50"></i>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-card" style="background: linear-gradient(135deg, #f72585, #b5179e);">
                    <h3>8</h3>
                    <p>Lessons Completed</p>
                    <i class="fas fa-book-reader fa-2x opacity-50"></i>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-left">
                <div class="stat-card" style="background: linear-gradient(135deg, #f8961e, #f3722c);">
                    <h3>4.5</h3>
                    <p>Average Grade</p>
                    <i class="fas fa-star fa-2x opacity-50"></i>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Current Courses -->
            <div class="col-lg-8 mb-4" data-aos="fade-right">
                <div class="glass-card">
                    <h4 class="mb-4">Current Courses</h4>

                    <div class="lesson-item">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <h5 class="mb-1">Introduction to PHP</h5>
                                <p class="text-muted mb-2">Professor: Dr. Smith</p>
                            </div>
                            <span class="badge bg-success">75% Complete</span>
                        </div>
                        <div class="progress-custom mb-3">
                            <div class="progress-bar-custom" style="width: 75%"></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <small><i class="far fa-clock me-1"></i> Next lesson in 2 days</small>
                            <a href="lessons.php" class="text-decoration-none">Continue <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="lesson-item">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <h5 class="mb-1">CSS Fundamentals</h5>
                                <p class="text-muted mb-2">Professor: Prof. Johnson</p>
                            </div>
                            <span class="badge bg-warning">45% Complete</span>
                        </div>
                        <div class="progress-custom mb-3">
                            <div class="progress-bar-custom" style="width: 45%"></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <small><i class="far fa-clock me-1"></i> Next lesson today</small>
                            <a href="lessons.php" class="text-decoration-none">Continue <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="lesson-item">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <h5 class="mb-1">JavaScript Basics</h5>
                                <p class="text-muted mb-2">Professor: Dr. Williams</p>
                            </div>
                            <span class="badge bg-info">30% Complete</span>
                        </div>
                        <div class="progress-custom mb-3">
                            <div class="progress-bar-custom" style="width: 30%"></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <small><i class="far fa-clock me-1"></i> Next lesson tomorrow</small>
                            <a href="lessons.php" class="text-decoration-none">Continue <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Quizzes & Announcements -->
            <div class="col-lg-4 mb-4" data-aos="fade-left">
                <div class="glass-card mb-4">
                    <h4 class="mb-3">Upcoming Quizzes</h4>

                    <div class="alert alert-primary" role="alert">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="alert-heading mb-1">PHP Basics Quiz</h6>
                                <small>Due: Tomorrow, 11:59 PM</small>
                            </div>
                            <span class="badge bg-primary">10 Qs</span>
                        </div>
                    </div>

                    <div class="alert alert-warning" role="alert">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="alert-heading mb-1">CSS Advanced Quiz</h6>
                                <small>Due: Friday, 11:59 PM</small>
                            </div>
                            <span class="badge bg-warning">15 Qs</span>
                        </div>
                    </div>

                    <div class="alert alert-success" role="alert">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="alert-heading mb-1">JavaScript Fundamentals</h6>
                                <small>Due: Next Monday</small>
                            </div>
                            <span class="badge bg-success">20 Qs</span>
                        </div>
                    </div>
                </div>

                <div class="glass-card">
                    <h4 class="mb-3">Recent Achievements</h4>

                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-warning rounded-circle p-3 me-3">
                            <i class="fas fa-trophy text-white"></i>
                        </div>
                        <div>
                            <h6 class="mb-1">Quick Learner</h6>
                            <small class="text-muted">Completed 5 quizzes in a week</small>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-info rounded-circle p-3 me-3">
                            <i class="fas fa-star text-white"></i>
                        </div>
                        <div>
                            <h6 class="mb-1">Perfect Score</h6>
                            <small class="text-muted">100% on PHP Basics Quiz</small>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="bg-success rounded-circle p-3 me-3">
                            <i class="fas fa-clock text-white"></i>
                        </div>
                        <div>
                            <h6 class="mb-1">Consistency</h6>
                            <small class="text-muted">7-day learning streak</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="glass-card" data-aos="fade-up">
            <h4 class="mb-4">Recent Activity</h4>
            <div class="table-responsive">
                <table class="table table-custom">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Activity</th>
                            <th>Type</th>
                            <th>Result</th>
                            <th>Score</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2024-01-15</td>
                            <td>PHP Basics Quiz</td>
                            <td><span class="badge bg-success">Quiz</span></td>
                            <td><span class="badge bg-success">Passed</span></td>
                            <td>85%</td>
                            <td><button class="btn btn-sm btn-primary-custom">Review</button></td>
                        </tr>
                        <tr>
                            <td>2024-01-14</td>
                            <td>CSS Selectors</td>
                            <td><span class="badge bg-info">Lesson</span></td>
                            <td><span class="badge bg-success">Completed</span></td>
                            <td>-</td>
                            <td><button class="btn btn-sm btn-primary-custom">Review</button></td>
                        </tr>
                        <tr>
                            <td>2024-01-13</td>
                            <td>JavaScript Functions Quiz</td>
                            <td><span class="badge bg-warning">Quiz</span></td>
                            <td><span class="badge bg-warning">In Progress</span></td>
                            <td>-</td>
                            <td><button class="btn btn-sm btn-primary-custom">Continue</button></td>
                        </tr>
                        <tr>
                            <td>2024-01-12</td>
                            <td>HTML5 Forms</td>
                            <td><span class="badge bg-info">Lesson</span></td>
                            <td><span class="badge bg-success">Completed</span></td>
                            <td>-</td>
                            <td><button class="btn btn-sm btn-primary-custom">Review</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>