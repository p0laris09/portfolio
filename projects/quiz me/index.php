<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container text-center">
        <h1 class="hero-title" data-aos="fade-up">Welcome to QuizMaster Pro</h1>
        <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="100">
            Your ultimate platform for interactive learning and assessment
        </p>
        <div class="d-flex justify-content-center gap-3" data-aos="fade-up" data-aos-delay="200">
            <a href="signup.php" class="btn btn-primary-custom btn-custom">
                <i class="fas fa-user-plus me-2"></i>Get Started
            </a>
            <a href="lessons.php" class="btn btn-outline-light btn-custom">
                <i class="fas fa-book-open me-2"></i>Browse Lessons
            </a>
        </div>
    </div>
</section>

<main>
    <div class="container">
        <!-- Features Section -->
        <div class="row g-4 mb-5">
            <div class="col-md-4" data-aos="fade-right">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h3>Expert Lessons</h3>
                    <p class="text-muted">Learn from industry experts with comprehensive, structured lessons</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-puzzle-piece"></i>
                    </div>
                    <h3>Interactive Quizzes</h3>
                    <p class="text-muted">Test your knowledge with engaging quizzes and instant feedback</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-left">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Track Progress</h3>
                    <p class="text-muted">Monitor your learning journey with detailed analytics</p>
                </div>
            </div>
        </div>

        <!-- Popular Lessons -->
        <h2 class="text-center mb-4" data-aos="fade-up">Popular Lessons</h2>
        <div class="row g-4 mb-5">
            <div class="col-md-4" data-aos="flip-left">
                <div class="quiz-card">
                    <h4>Introduction to PHP</h4>
                    <p class="text-muted">Learn the basics of PHP programming</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge-custom badge-beginner">Beginner</span>
                        <span><i class="fas fa-clock text-muted"></i> 2 hours</span>
                    </div>
                    <div class="progress-custom mt-3">
                        <div class="progress-bar-custom" style="width: 75%"></div>
                    </div>
                    <a href="lessons.php" class="btn btn-primary-custom btn-custom w-100 mt-3">
                        Start Learning
                    </a>
                </div>
            </div>
            <div class="col-md-4" data-aos="flip-up">
                <div class="quiz-card">
                    <h4>CSS Mastery</h4>
                    <p class="text-muted">Advanced CSS techniques and animations</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge-custom badge-intermediate">Intermediate</span>
                        <span><i class="fas fa-clock text-muted"></i> 3 hours</span>
                    </div>
                    <div class="progress-custom mt-3">
                        <div class="progress-bar-custom" style="width: 45%"></div>
                    </div>
                    <a href="lessons.php" class="btn btn-primary-custom btn-custom w-100 mt-3">
                        Continue Learning
                    </a>
                </div>
            </div>
            <div class="col-md-4" data-aos="flip-right">
                <div class="quiz-card">
                    <h4>JavaScript Essentials</h4>
                    <p class="text-muted">Modern JavaScript for web development</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge-custom badge-advanced">Advanced</span>
                        <span><i class="fas fa-clock text-muted"></i> 4 hours</span>
                    </div>
                    <div class="progress-custom mt-3">
                        <div class="progress-bar-custom" style="width: 30%"></div>
                    </div>
                    <a href="lessons.php" class="btn btn-primary-custom btn-custom w-100 mt-3">
                        Start Learning
                    </a>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <h2 class="text-center mb-4" data-aos="fade-up">What Our Users Say</h2>
        <div class="row g-4">
            <div class="col-md-4" data-aos="zoom-in">
                <div class="glass-card">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="User">
                        <div>
                            <h5 class="mb-0">John Smith</h5>
                            <small class="text-muted">Student</small>
                        </div>
                    </div>
                    <p class="mb-0">"QuizMaster Pro has transformed how I learn. The interactive quizzes make studying
                        fun!"</p>
                    <div class="mt-2 text-warning">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="glass-card">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="User">
                        <div>
                            <h5 class="mb-0">Dr. Sarah Johnson</h5>
                            <small class="text-muted">Professor</small>
                        </div>
                    </div>
                    <p class="mb-0">"Great platform for creating engaging assessments. My students love it!"</p>
                    <div class="mt-2 text-warning">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="glass-card">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="User">
                        <div>
                            <h5 class="mb-0">Mike Wilson</h5>
                            <small class="text-muted">Student</small>
                        </div>
                    </div>
                    <p class="mb-0">"The progress tracking feature helps me stay motivated and focused."</p>
                    <div class="mt-2 text-warning">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>