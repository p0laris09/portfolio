<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<main>
    <div class="container">
        <!-- Page Header -->
        <div class="text-center mb-5" data-aos="fade-up">
            <h1 class="display-4 fw-bold">Test Your Knowledge</h1>
            <p class="lead text-muted">Challenge yourself with our interactive quizzes</p>
        </div>

        <!-- Filters -->
        <div class="row mb-5" data-aos="fade-up">
            <div class="col-md-8 mx-auto">
                <div class="row g-3">
                    <div class="col-md-4">
                        <select class="form-select form-control-custom">
                            <option selected>All Categories</option>
                            <option>PHP</option>
                            <option>JavaScript</option>
                            <option>CSS</option>
                            <option>HTML</option>
                            <option>Python</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select form-control-custom">
                            <option selected>All Difficulties</option>
                            <option>Beginner</option>
                            <option>Intermediate</option>
                            <option>Advanced</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select form-control-custom">
                            <option selected>Sort By</option>
                            <option>Most Popular</option>
                            <option>Newest</option>
                            <option>Highest Rated</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quiz Cards -->
        <div class="row g-4">
            <!-- Quiz 1 -->
            <div class="col-md-6 col-lg-4" data-aos="flip-left">
                <div class="quiz-card h-100">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h4 class="mb-0">PHP Basics Quiz</h4>
                        <span class="badge-custom badge-beginner">Beginner</span>
                    </div>
                    <p class="text-muted mb-3">Test your knowledge of PHP fundamentals including syntax and basic
                        concepts.</p>
                    <div class="d-flex justify-content-between mb-3">
                        <span><i class="fas fa-question-circle text-primary"></i> 10 Questions</span>
                        <span><i class="far fa-clock text-primary"></i> 15 mins</span>
                        <span><i class="fas fa-trophy text-warning"></i> 100 pts</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted"><i class="fas fa-users"></i> 1,234 attempts</small>
                        <small class="text-muted"><i class="fas fa-star text-warning"></i> 4.5 (120 reviews)</small>
                    </div>
                    <button class="btn btn-primary-custom btn-custom w-100" data-bs-toggle="modal"
                        data-bs-target="#quizModal1">
                        Start Quiz
                    </button>
                </div>
            </div>

            <!-- Quiz 2 -->
            <div class="col-md-6 col-lg-4" data-aos="flip-up">
                <div class="quiz-card h-100">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h4 class="mb-0">CSS Advanced Quiz</h4>
                        <span class="badge-custom badge-intermediate">Intermediate</span>
                    </div>
                    <p class="text-muted mb-3">Challenge yourself with advanced CSS concepts, animations, and layouts.
                    </p>
                    <div class="d-flex justify-content-between mb-3">
                        <span><i class="fas fa-question-circle text-primary"></i> 15 Questions</span>
                        <span><i class="far fa-clock text-primary"></i> 20 mins</span>
                        <span><i class="fas fa-trophy text-warning"></i> 150 pts</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted"><i class="fas fa-users"></i> 892 attempts</small>
                        <small class="text-muted"><i class="fas fa-star text-warning"></i> 4.3 (85 reviews)</small>
                    </div>
                    <button class="btn btn-primary-custom btn-custom w-100" data-bs-toggle="modal"
                        data-bs-target="#quizModal2">
                        Start Quiz
                    </button>
                </div>
            </div>

            <!-- Quiz 3 -->
            <div class="col-md-6 col-lg-4" data-aos="flip-right">
                <div class="quiz-card h-100">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h4 class="mb-0">JavaScript Mastery</h4>
                        <span class="badge-custom badge-advanced">Advanced</span>
                    </div>
                    <p class="text-muted mb-3">Complex JavaScript concepts, closures, promises, and async programming.
                    </p>
                    <div class="d-flex justify-content-between mb-3">
                        <span><i class="fas fa-question-circle text-primary"></i> 20 Questions</span>
                        <span><i class="far fa-clock text-primary"></i> 30 mins</span>
                        <span><i class="fas fa-trophy text-warning"></i> 200 pts</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted"><i class="fas fa-users"></i> 567 attempts</small>
                        <small class="text-muted"><i class="fas fa-star text-warning"></i> 4.7 (95 reviews)</small>
                    </div>
                    <button class="btn btn-primary-custom btn-custom w-100" data-bs-toggle="modal"
                        data-bs-target="#quizModal3">
                        Start Quiz
                    </button>
                </div>
            </div>

            <!-- Quiz 4 -->
            <div class="col-md-6 col-lg-4" data-aos="flip-left">
                <div class="quiz-card h-100">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h4 class="mb-0">HTML5 & Semantic Web</h4>
                        <span class="badge-custom badge-beginner">Beginner</span>
                    </div>
                    <p class="text-muted mb-3">Test your HTML5 knowledge including semantic elements and forms.</p>
                    <div class="d-flex justify-content-between mb-3">
                        <span><i class="fas fa-question-circle text-primary"></i> 12 Questions</span>
                        <span><i class="far fa-clock text-primary"></i> 15 mins</span>
                        <span><i class="fas fa-trophy text-warning"></i> 120 pts</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted"><i class="fas fa-users"></i> 2,156 attempts</small>
                        <small class="text-muted"><i class="fas fa-star text-warning"></i> 4.8 (210 reviews)</small>
                    </div>
                    <button class="btn btn-primary-custom btn-custom w-100" data-bs-toggle="modal"
                        data-bs-target="#quizModal4">
                        Start Quiz
                    </button>
                </div>
            </div>

            <!-- Quiz 5 -->
            <div class="col-md-6 col-lg-4" data-aos="flip-up">
                <div class="quiz-card h-100">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h4 class="mb-0">Python Fundamentals</h4>
                        <span class="badge-custom badge-beginner">Beginner</span>
                    </div>
                    <p class="text-muted mb-3">Basic Python programming concepts and data structures.</p>
                    <div class="d-flex justify-content-between mb-3">
                        <span><i class="fas fa-question-circle text-primary"></i> 15 Questions</span>
                        <span><i class="far fa-clock text-primary"></i> 20 mins</span>
                        <span><i class="fas fa-trophy text-warning"></i> 150 pts</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted"><i class="fas fa-users"></i> 1,023 attempts</small>
                        <small class="text-muted"><i class="fas fa-star text-warning"></i> 4.6 (150 reviews)</small>
                    </div>
                    <button class="btn btn-primary-custom btn-custom w-100" data-bs-toggle="modal"
                        data-bs-target="#quizModal5">
                        Start Quiz
                    </button>
                </div>
            </div>

            <!-- Quiz 6 -->
            <div class="col-md-6 col-lg-4" data-aos="flip-right">
                <div class="quiz-card h-100">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h4 class="mb-0">Database & SQL</h4>
                        <span class="badge-custom badge-intermediate">Intermediate</span>
                    </div>
                    <p class="text-muted mb-3">SQL queries, database design, and optimization techniques.</p>
                    <div class="d-flex justify-content-between mb-3">
                        <span><i class="fas fa-question-circle text-primary"></i> 18 Questions</span>
                        <span><i class="far fa-clock text-primary"></i> 25 mins</span>
                        <span><i class="fas fa-trophy text-warning"></i> 180 pts</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted"><i class="fas fa-users"></i> 734 attempts</small>
                        <small class="text-muted"><i class="fas fa-star text-warning"></i> 4.4 (110 reviews)</small>
                    </div>
                    <button class="btn btn-primary-custom btn-custom w-100" data-bs-toggle="modal"
                        data-bs-target="#quizModal6">
                        Start Quiz
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Quiz Modals -->
    <?php for ($i = 1; $i <= 6; $i++): ?>
        <div class="modal fade" id="quizModal<?php echo $i; ?>" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Start Quiz</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="demo-alert">
                            <i class="fas fa-info-circle me-2"></i>
                            <strong>Demo Mode:</strong> This is a sample quiz preview
                        </div>
                        <h6 class="mb-3">Quiz Instructions:</h6>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Read each question
                                carefully</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> You cannot pause the quiz
                                once started</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Each question has only
                                one correct answer</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Your score will be shown
                                at the end</li>
                        </ul>
                        <div class="bg-light p-3 rounded">
                            <p class="mb-1"><strong>Sample Question:</strong></p>
                            <p>What does PHP stand for?</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sample_q">
                                <label class="form-check-label">Personal Home Page</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sample_q">
                                <label class="form-check-label">PHP: Hypertext Preprocessor</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary-custom">Begin Quiz</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</main>

<?php include 'includes/footer.php'; ?>