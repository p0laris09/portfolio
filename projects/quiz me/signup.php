<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<main>
    <div class="container">
        <div class="auth-container">
            <div class="auth-card" data-aos="fade-up">
                <div class="text-center mb-4">
                    <div class="auth-icon mb-3">
                        <i class="fas fa-user-plus fa-2x text-gradient"></i>
                    </div>
                    <h2 class="fw-bold">Create Account</h2>
                    <p class="text-muted">Join thousands of learners today</p>
                </div>

                <div class="demo-alert">
                    <i class="fas fa-info-circle me-2"></i>
                    <strong>Demo Mode:</strong> This is a sample registration form
                </div>

                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">First Name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control form-control-custom" placeholder="John">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Last Name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control form-control-custom" placeholder="Doe">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control form-control-custom" placeholder="john@example.com">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control form-control-custom" placeholder="Create a password">
                        </div>
                        <small class="text-muted">Use 8+ characters with letters, numbers & symbols</small>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Confirm Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control form-control-custom" placeholder="Confirm password">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-semibold">I am a:</label>
                        <div class="row g-3">
                            <div class="col-6">
                                <input type="radio" class="btn-check" name="role" id="student" autocomplete="off" checked>
                                <label class="btn btn-outline-primary w-100 py-3" for="student">
                                    <i class="fas fa-user-graduate fa-lg mb-2 d-block"></i>
                                    Student
                                </label>
                            </div>
                            <div class="col-6">
                                <input type="radio" class="btn-check" name="role" id="professor" autocomplete="off">
                                <label class="btn btn-outline-primary w-100 py-3" for="professor">
                                    <i class="fas fa-chalkboard-teacher fa-lg mb-2 d-block"></i>
                                    Professor
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 form-check">
                        <input type="checkbox" class="form-check-input" id="terms">
                        <label class="form-check-label" for="terms">
                            I agree to the <a href="#" class="text-decoration-none">Terms and Conditions</a> and <a href="#" class="text-decoration-none">Privacy Policy</a>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary-custom btn-custom w-100 py-3">
                        <i class="fas fa-user-plus me-2"></i>Create Account
                    </button>
                </form>

                <div class="text-center mt-4 pt-3" style="border-top: 1px solid var(--gray-200);">
                    <span class="text-muted">Already have an account?</span>
                    <a href="signin.php" class="text-decoration-none fw-semibold ms-1">
                        Sign In <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>