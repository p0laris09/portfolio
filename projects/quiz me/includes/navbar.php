<?php
$current_page = basename($_SERVER['PHP_SELF'], ".php");
?>

<nav class="navbar navbar-expand-lg navbar-custom sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <i class="fas fa-graduation-cap me-2"></i>QuizMe
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link <?php echo $current_page == 'index' ? 'active' : ''; ?>" href="index.php">
                        <i class="fas fa-home me-1"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $current_page == 'lessons' ? 'active' : ''; ?>" href="lessons.php">
                        <i class="fas fa-book me-1"></i> Lessons
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $current_page == 'quiz' ? 'active' : ''; ?>" href="quiz.php">
                        <i class="fas fa-question-circle me-1"></i> Quizzes
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo in_array($current_page, ['student', 'professor']) ? 'active' : ''; ?>" href="#" id="dashboardDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-th-large me-1"></i> Dashboard
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dashboardDropdown">
                        <li>
                            <a class="dropdown-item <?php echo $current_page == 'student' ? 'active' : ''; ?>" href="student.php">
                                <i class="fas fa-user-graduate me-2"></i>Student Dashboard
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item <?php echo $current_page == 'professor' ? 'active' : ''; ?>" href="professor.php">
                                <i class="fas fa-chalkboard-teacher me-2"></i>Professor Dashboard
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown ms-lg-2">
                    <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle me-1"></i> Account
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="accountDropdown">
                        <li>
                            <a class="dropdown-item <?php echo $current_page == 'signin' ? 'active' : ''; ?>" href="signin.php">
                                <i class="fas fa-sign-in-alt me-2"></i>Sign In
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item <?php echo $current_page == 'signup' ? 'active' : ''; ?>" href="signup.php">
                                <i class="fas fa-user-plus me-2"></i>Sign Up
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>