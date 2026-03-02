<?php
$currentPage = 'signin';
$pageTitle = 'Sign In';
require_once 'includes/header.php';
?>
<style>
    :root {
        --color-primary: #27A0ED;
        --color-accent: #6366f1;
        --bg-primary: #0D1117;
        --bg-secondary: #161B22;
        --text-primary: #F0F6FC;
        --text-secondary: #8B949E;
        --text-muted: #6E7681;
        --border-color: #30363D;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        background: var(--bg-primary);
        color: var(--text-primary);
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }



    .auth-container {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 4rem 2rem;
        width: 100%;
    }

    .signin-card {
        background: var(--bg-secondary);
        border-radius: 24px;
        padding: 3rem;
        max-width: 450px;
        width: 100%;
        border: 1px solid var(--border-color);
        margin: 0 auto;
    }

    .signin-title {
        font-size: 2rem;
        font-weight: 700;
        color: var(--text-primary);
        margin-bottom: 0.5rem;
        text-align: center;
    }

    .signin-subtitle {
        color: var(--text-secondary);
        font-size: 0.95rem;
        text-align: center;
        margin-bottom: 2rem;
    }

    .form-label-modern {
        color: var(--text-secondary);
        font-size: 0.875rem;
        font-weight: 500;
        margin-bottom: 0.5rem;
    }

    .form-control-modern {
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        color: var(--text-primary);
        padding: 0.75rem 1rem;
        border-radius: 8px;
        transition: all 0.2s ease;
    }

    .form-control-modern:focus {
        background: var(--bg-primary);
        border-color: var(--color-primary);
        box-shadow: 0 0 0 3px rgba(39, 160, 237, 0.1);
        color: var(--text-primary);
    }

    .form-control-modern::placeholder {
        color: var(--text-muted);
    }

    .input-group-modern {
        position: relative;
    }

    .password-toggle {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: var(--text-muted);
        cursor: pointer;
        padding: 5px;
    }

    .password-toggle:hover {
        color: var(--color-primary);
    }

    .form-check-modern .form-check-input {
        background-color: var(--bg-primary);
        border-color: var(--border-color);
    }

    .form-check-modern .form-check-input:checked {
        background-color: var(--color-primary);
        border-color: var(--color-primary);
    }

    .form-check-modern .form-check-label {
        color: var(--text-secondary);
        font-size: 0.875rem;
    }

    .auth-link {
        color: var(--color-primary);
        text-decoration: none;
        font-size: 0.875rem;
    }

    .auth-link:hover {
        color: var(--color-accent);
    }

    .btn-modern {
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.2s ease;
    }

    .btn-primary.btn-modern {
        background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
        border: none;
    }

    .btn-primary.btn-modern:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(39, 160, 237, 0.3);
    }

    .auth-divider {
        display: flex;
        align-items: center;
        margin: 1.5rem 0;
    }

    .auth-divider::before,
    .auth-divider::after {
        content: '';
        flex: 1;
        height: 1px;
        background: var(--border-color);
    }

    .auth-divider span {
        padding: 0 1rem;
        color: var(--text-muted);
        font-size: 0.8rem;
    }

    .social-login-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 0.75rem;
    }

    .btn-social {
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        color: var(--text-secondary);
        padding: 0.6rem;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        font-size: 0.85rem;
        transition: all 0.2s;
    }

    .btn-social:hover {
        background: var(--bg-secondary);
        border-color: var(--color-primary);
        color: var(--text-primary);
    }

    .btn-social span {
        display: none;
    }

    @media (min-width: 576px) {
        .btn-social span {
            display: inline;
        }
    }

    .auth-footer-text {
        color: var(--text-secondary);
        font-size: 0.9rem;
    }



    @media (max-width: 576px) {
        .signin-card {
            padding: 2rem 1.5rem;
        }

        .signin-title {
            font-size: 1.75rem;
        }

        .auth-footer .container {
            flex-direction: column;
            text-align: center;
        }
    }
</style>
<div class="auth-container">
    <div class="signin-card">
        <h1 class="signin-title">Welcome Back</h1>
        <p class="signin-subtitle">Sign in to your account to continue</p>

        <form id="signinForm">
            <!-- Email Field -->
            <div class="mb-3">
                <label for="email" class="form-label-modern">Email Address</label>
                <input type="email" class="form-control form-control-modern" id="email" name="email"
                    placeholder="Enter your email" required>
            </div>

            <!-- Password Field -->
            <div class="mb-3">
                <label for="password" class="form-label-modern">Password</label>
                <div class="input-group-modern">
                    <input type="password" class="form-control form-control-modern" id="password" name="password"
                        placeholder="Enter your password" style="padding-right: 45px;" required>
                    <button type="button" class="password-toggle" id="togglePassword">
                        <i class="bi bi-eye"></i>
                    </button>
                </div>
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check form-check-modern">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
                <a href="forgotpass.php" class="auth-link">Forgot password?</a>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary btn-modern w-100" id="submitBtn">
                <span class="btn-text">Sign In</span>
                <span class="btn-loading" style="display: none;">
                    <span class="spinner-border spinner-border-sm me-2"></span>
                    Signing in...
                </span>
            </button>

            <!-- Divider -->
            <div class="auth-divider">
                <span>or continue with</span>
            </div>

            <!-- Social Login -->
            <div class="social-login-grid mb-4">
                <button type="button" class="btn-social">
                    <i class="bi bi-google"></i>
                    <span>Google</span>
                </button>
                <button type="button" class="btn-social">
                    <i class="bi bi-microsoft"></i>
                    <span>Microsoft</span>
                </button>
                <button type="button" class="btn-social">
                    <i class="bi bi-linkedin"></i>
                    <span>LinkedIn</span>
                </button>
            </div>

            <!-- Sign Up Link -->
            <p class="auth-footer-text text-center mb-0">
                Don't have an account?
                <a href="signup.php" class="auth-link fw-semibold">Sign up</a>
            </p>
        </form>
    </div>
</div>

<!-- Auth Footer -->
<footer class="auth-footer">
    <div class="container">
        <p class="auth-footer-copyright">&copy; 2026 Ravel Solutions. All rights reserved.</p>
        <div class="auth-footer-links">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
            <a href="#">Contact Us</a>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Password toggle
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function () {
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;

            const icon = this.querySelector('i');
            icon.classList.toggle('bi-eye');
            icon.classList.toggle('bi-eye-slash');
        });

        // Form submission
        const form = document.getElementById('signinForm');
        const submitBtn = document.getElementById('submitBtn');

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            if (!email || !password) {
                alert('Please fill in all fields.');
                return;
            }

            // Show loading
            submitBtn.querySelector('.btn-text').style.display = 'none';
            submitBtn.querySelector('.btn-loading').style.display = 'inline-flex';
            submitBtn.disabled = true;

            // Simulate login
            setTimeout(() => {
                if (email === 'demo@ravel.com' && password.length >= 6) {
                    alert('Login successful! Redirecting...');
                    window.location.href = 'index.php';
                } else {
                    submitBtn.querySelector('.btn-text').style.display = 'inline';
                    submitBtn.querySelector('.btn-loading').style.display = 'none';
                    submitBtn.disabled = false;
                    alert('Invalid credentials. Try demo@ravel.com with any 6+ char password.');
                }
            }, 1500);
        });

        // Social login buttons
        document.querySelectorAll('.btn-social').forEach(btn => {
            btn.addEventListener('click', function () {
                alert('Social login would be implemented in production.');
            });
        });
    });
</script>

<?php require_once 'includes/footer.php'; ?>