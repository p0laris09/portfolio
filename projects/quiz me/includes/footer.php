<footer class="footer-custom">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <h5 class="footer-title">
                    <i class="fas fa-graduation-cap me-2"></i>QuizMe
                </h5>
                <p class="text-white-50 mb-4">Empowering education through interactive learning and assessment tools.
                    Join thousands of students and educators worldwide.</p>
                <div class="d-flex gap-2">
                    <a href="#" class="social-icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon" aria-label="GitHub"><i class="fab fa-github"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mb-4">
                <h5 class="footer-title">Navigation</h5>
                <a href="index.php" class="footer-link"><i class="fas fa-chevron-right me-2 small"></i>Home</a>
                <a href="lessons.php" class="footer-link"><i class="fas fa-chevron-right me-2 small"></i>Lessons</a>
                <a href="quiz.php" class="footer-link"><i class="fas fa-chevron-right me-2 small"></i>Quizzes</a>
                <a href="student.php" class="footer-link"><i class="fas fa-chevron-right me-2 small"></i>Student
                    Dashboard</a>
                <a href="professor.php" class="footer-link"><i class="fas fa-chevron-right me-2 small"></i>Professor
                    Dashboard</a>
            </div>
            <div class="col-lg-2 col-md-6 mb-4">
                <h5 class="footer-title">Account</h5>
                <a href="signin.php" class="footer-link"><i class="fas fa-chevron-right me-2 small"></i>Sign In</a>
                <a href="signup.php" class="footer-link"><i class="fas fa-chevron-right me-2 small"></i>Sign Up</a>
                <a href="#" class="footer-link"><i class="fas fa-chevron-right me-2 small"></i>Help Center</a>
                <a href="#" class="footer-link"><i class="fas fa-chevron-right me-2 small"></i>FAQs</a>
                <a href="#" class="footer-link"><i class="fas fa-chevron-right me-2 small"></i>Privacy Policy</a>
            </div>
            <div class="col-lg-4 mb-4">
                <h5 class="footer-title">Stay Updated</h5>
                <p class="text-white-50 mb-3">Subscribe to get updates on new lessons, quizzes, and educational content.
                </p>
                <form class="newsletter-form">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Enter your email"
                            aria-label="Email for newsletter">
                        <button class="btn btn-primary-custom" type="submit">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
                <div class="mt-4">
                    <small class="text-white-50">
                        <i class="fas fa-shield-alt me-2"></i>We respect your privacy. Unsubscribe anytime.
                    </small>
                </div>
            </div>
        </div>
        <hr class="my-4" style="border-color: rgba(255,255,255,0.1);">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <small class="text-white-50">&copy; 2022 QuizMe. All rights reserved.</small>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <small class="text-white-50">
                    Made with <i class="fas fa-heart text-danger"></i> for education
                </small>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Initialize AOS animations
    AOS.init({
        duration: 800,
        easing: 'ease-out-cubic',
        once: true,
        offset: 50
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function () {
        const navbar = document.querySelector('.navbar-custom');
        if (window.scrollY > 50) {
            navbar.style.background = 'rgba(255, 255, 255, 0.98)';
            navbar.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.15)';
        } else {
            navbar.style.background = 'rgba(255, 255, 255, 0.95)';
            navbar.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.1)';
        }
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href !== '#') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
</script>
</body>

</html>