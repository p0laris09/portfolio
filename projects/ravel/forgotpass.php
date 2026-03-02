<?php $currentPage = 'forgotpass'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Ravel Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
            --border-light: rgba(255, 255, 255, 0.1);
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
        }
        
        .auth-container {
            min-height: 100vh;
            display: flex;
            align-items: stretch;
        }
        
        .auth-form-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 3rem;
            max-width: 600px;
        }
        
        .auth-visual-section {
            flex: 1;
            background: linear-gradient(135deg, var(--bg-secondary) 0%, var(--bg-primary) 100%);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        
        .visual-bg-pattern {
            position: absolute;
            inset: 0;
            background: 
                radial-gradient(circle at 20% 80%, rgba(39, 160, 237, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(99, 102, 241, 0.15) 0%, transparent 50%);
        }
        
        .visual-content {
            position: relative;
            z-index: 1;
            padding: 3rem;
            max-width: 500px;
        }
        
        .visual-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .visual-description {
            color: var(--text-secondary);
            font-size: 1.1rem;
            margin-bottom: 2.5rem;
            line-height: 1.7;
        }
        
        .feature-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 1.25rem;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }
        
        .feature-card:hover {
            background: rgba(255, 255, 255, 0.06);
            border-color: var(--color-primary);
            transform: translateX(5px);
        }
        
        .feature-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .feature-title {
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.25rem;
        }
        
        .feature-description {
            color: var(--text-secondary);
            font-size: 0.875rem;
        }
        
        .auth-logo {
            margin-bottom: 2.5rem;
        }
        
        .auth-logo a {
            text-decoration: none;
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--text-primary);
        }
        
        .auth-logo span {
            color: var(--color-primary);
        }
        
        .auth-form-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        
        .auth-form-subtitle {
            color: var(--text-secondary);
            margin-bottom: 2rem;
            line-height: 1.6;
        }
        
        .form-label-modern {
            color: var(--text-secondary);
            font-size: 0.875rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }
        
        .form-control-modern {
            background: var(--bg-secondary);
            border: 1px solid var(--border-color);
            color: var(--text-primary);
            padding: 0.875rem 1rem;
            border-radius: 10px;
            transition: all 0.2s ease;
            font-size: 1rem;
        }
        
        .form-control-modern:focus {
            background: var(--bg-secondary);
            border-color: var(--color-primary);
            box-shadow: 0 0 0 4px rgba(39, 160, 237, 0.1);
            color: var(--text-primary);
        }
        
        .form-control-modern::placeholder {
            color: var(--text-muted);
        }
        
        .form-control-modern.is-invalid {
            border-color: #dc3545;
        }
        
        .input-icon-group {
            position: relative;
        }
        
        .input-icon-group .form-control-modern {
            padding-left: 3rem;
        }
        
        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
            font-size: 1.1rem;
        }
        
        .btn-modern {
            padding: 0.875rem 1.5rem;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }
        
        .btn-primary.btn-modern {
            background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
            border: none;
        }
        
        .btn-primary.btn-modern:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(39, 160, 237, 0.3);
        }
        
        .btn-primary.btn-modern:disabled {
            opacity: 0.7;
            transform: none;
            box-shadow: none;
        }
        
        .auth-footer-text {
            color: var(--text-secondary);
            font-size: 0.9rem;
            margin-top: 2rem;
        }
        
        .auth-link {
            color: var(--color-primary);
            text-decoration: none;
            font-weight: 500;
        }
        
        .auth-link:hover {
            color: var(--color-accent);
        }
        
        .back-link {
            color: var(--text-secondary);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 2rem;
            transition: all 0.2s ease;
        }
        
        .back-link:hover {
            color: var(--text-primary);
        }
        
        .success-message {
            background: rgba(40, 167, 69, 0.1);
            border: 1px solid rgba(40, 167, 69, 0.3);
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
            display: none;
        }
        
        .success-message.show {
            display: block;
        }
        
        .success-icon {
            width: 60px;
            height: 60px;
            background: rgba(40, 167, 69, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
        }
        
        .success-icon i {
            font-size: 1.75rem;
            color: #28a745;
        }
        
        .success-title {
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }
        
        .success-description {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }
        
        .help-text {
            color: var(--text-muted);
            font-size: 0.8rem;
            margin-top: 0.5rem;
        }
        
        @media (max-width: 991px) {
            .auth-visual-section {
                display: none;
            }
            
            .auth-form-section {
                max-width: 100%;
                padding: 2rem;
            }
        }
        
        @media (max-width: 576px) {
            .auth-form-section {
                padding: 1.5rem;
            }
            
            .auth-form-title {
                font-size: 1.75rem;
            }
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <!-- Left Form Section -->
        <div class="auth-form-section">
            <!-- Logo -->
            <div class="auth-logo">
                <a href="index.php">
                    <span>R</span>avel
                </a>
            </div>
            
            <!-- Back Link -->
            <a href="signin.php" class="back-link">
                <i class="bi bi-arrow-left"></i>
                Back to Sign In
            </a>
            
            <!-- Reset Password Form -->
            <div id="resetForm">
                <h1 class="auth-form-title">Forgot Password?</h1>
                <p class="auth-form-subtitle">
                    No worries! Enter your email address and we'll send you a link to reset your password.
                </p>
                
                <form id="forgotPasswordForm">
                    <div class="mb-4">
                        <label for="email" class="form-label-modern">Email Address</label>
                        <div class="input-icon-group">
                            <i class="bi bi-envelope input-icon"></i>
                            <input type="email" class="form-control form-control-modern" id="email" name="email" placeholder="Enter your email address" required>
                        </div>
                        <p class="help-text">Enter the email associated with your account</p>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-modern" id="submitBtn">
                        <span class="btn-text">Send Reset Link</span>
                        <span class="btn-loading" style="display: none;">
                            <span class="spinner-border spinner-border-sm me-2"></span>
                            Sending...
                        </span>
                    </button>
                </form>
                
                <p class="auth-footer-text text-center">
                    Remember your password? 
                    <a href="signin.php" class="auth-link">Sign in</a>
                </p>
            </div>
            
            <!-- Success Message -->
            <div id="successMessage" class="success-message">
                <div class="success-icon">
                    <i class="bi bi-envelope-check"></i>
                </div>
                <h3 class="success-title">Check Your Email</h3>
                <p class="success-description">
                    We've sent a password reset link to <strong id="sentEmail"></strong>. 
                    Please check your inbox and follow the instructions to reset your password.
                </p>
                <p class="help-text mt-3">
                    Didn't receive the email? Check your spam folder or 
                    <a href="#" class="auth-link" id="resendLink">resend the link</a>
                </p>
                <div class="mt-4">
                    <a href="signin.php" class="btn btn-primary btn-modern">
                        <i class="bi bi-arrow-left me-2"></i>
                        Back to Sign In
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Right Visual Section -->
        <div class="auth-visual-section">
            <div class="visual-bg-pattern"></div>
            <div class="visual-content">
                <h2 class="visual-title">Account Recovery</h2>
                <p class="visual-description">
                    We understand that forgetting your password can be frustrating. Our secure password reset process will have you back in your account in no time.
                </p>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    <h5 class="feature-title">Secure Process</h5>
                    <p class="feature-description">
                        Your security is our priority. Reset links expire after 24 hours for your protection.
                    </p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-lightning"></i>
                    </div>
                    <h5 class="feature-title">Quick Recovery</h5>
                    <p class="feature-description">
                        Get back to your account in just a few clicks. The reset email arrives within seconds.
                    </p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-headset"></i>
                    </div>
                    <h5 class="feature-title">Need Help?</h5>
                    <p class="feature-description">
                        Our support team is available 24/7 to assist you with any account-related issues.
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('forgotPasswordForm');
        const submitBtn = document.getElementById('submitBtn');
        const resetForm = document.getElementById('resetForm');
        const successMessage = document.getElementById('successMessage');
        const sentEmail = document.getElementById('sentEmail');
        const resendLink = document.getElementById('resendLink');
        const emailInput = document.getElementById('email');
        
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = emailInput.value.trim();
            
            if (!email) {
                emailInput.classList.add('is-invalid');
                return;
            }
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                emailInput.classList.add('is-invalid');
                alert('Please enter a valid email address.');
                return;
            }
            
            // Show loading state
            submitBtn.querySelector('.btn-text').style.display = 'none';
            submitBtn.querySelector('.btn-loading').style.display = 'inline-flex';
            submitBtn.disabled = true;
            
            // Simulate sending reset email
            setTimeout(() => {
                sentEmail.textContent = email;
                resetForm.style.display = 'none';
                successMessage.classList.add('show');
            }, 2000);
        });
        
        emailInput.addEventListener('input', function() {
            if (this.classList.contains('is-invalid') && this.value.trim()) {
                this.classList.remove('is-invalid');
            }
        });
        
        resendLink.addEventListener('click', function(e) {
            e.preventDefault();
            
            this.textContent = 'Sending...';
            this.style.pointerEvents = 'none';
            
            setTimeout(() => {
                this.textContent = 'resend the link';
                this.style.pointerEvents = 'auto';
                alert('Reset link has been resent to your email.');
            }, 1500);
        });
    });
    </script>
</body>
</html>
