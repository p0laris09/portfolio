<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<main>
    <div class="container">
        <div class="auth-container">
            <div class="auth-card" data-aos="fade-up">
                <div class="text-center mb-4">
                    <div class="auth-icon mb-3">
                        <i class="fas fa-sign-in-alt fa-2x text-gradient"></i>
                    </div>
                    <h2 class="fw-bold">Welcome Back!</h2>
                    <p class="text-muted">Sign in to continue your learning journey</p>
                </div>

                <!-- Demo Alert -->
                <div class="demo-alert">
                    <i class="fas fa-info-circle me-2"></i>
                    <strong>Demo Mode:</strong> Use any email/password to sign in
                </div>

                <form>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control form-control-custom" placeholder="Enter your email"
                                value="student@example.com">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control form-control-custom"
                                placeholder="Enter your password" value="password123">
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <a href="#" class="text-decoration-none small">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary-custom btn-custom w-100 py-3">
                        <i class="fas fa-sign-in-alt me-2"></i>Sign In
                    </button>
                </form>

                <div class="text-center mt-4">
                    <p class="text-muted mb-3">Demo Credentials:</p>
                    <div class="row g-2">
                        <div class="col-6">
                            <div class="p-3 rounded" style="background: var(--gray-100);">
                                <small class="d-block text-muted fw-semibold mb-1"><i class="fas fa-user-graduate me-1"></i>Student</small>
                                <small class="text-dark">student@example.com</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 rounded" style="background: var(--gray-100);">
                                <small class="d-block text-muted fw-semibold mb-1"><i class="fas fa-chalkboard-teacher me-1"></i>Professor</small>
                                <small class="text-dark">professor@example.com</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-4 pt-3" style="border-top: 1px solid var(--gray-200);">
                    <span class="text-muted">Don't have an account?</span>
                    <a href="signup.php" class="text-decoration-none fw-semibold ms-1">
                        Sign Up <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>