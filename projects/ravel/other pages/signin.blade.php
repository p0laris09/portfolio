@extends('layouts.app')

@section('title', 'Sign In - Ravel Solutions')

@section('content')
<div class="auth-container">
    <div class="container-fluid h-100">
        <div class="row h-100 g-0">
            {{-- Left Panel - Form --}}
            <div class="col-lg-6 auth-form-panel">
                <div class="auth-form-container">
                    {{-- Header --}}
                    <div class="auth-header text-center mb-4">
                        <div class="auth-logo mb-3">
                            <i class="bi bi-shield-check text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <h1 class="auth-title">Welcome Back</h1>
                        <p class="auth-subtitle">Sign in to your account and continue your journey</p>
                    </div>

                    {{-- Error Messages --}}
                    @if ($errors->any())
                        <div class="alert alert-danger alert-modern" role="alert">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                <strong>Authentication Failed</strong>
                            </div>
                            <ul class="mb-0 small">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Success Messages --}}
                    @if (session('success'))
                        <div class="alert alert-success alert-modern" role="alert">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                <span>{{ session('success') }}</span>
                            </div>
                        </div>
                    @endif

                    {{-- Sign In Form --}}
                    <form id="signinForm" action="{{ route('signin') }}" method="POST" class="auth-form">
                        @csrf
                        
                        {{-- Email Field --}}
                        <div class="form-group-modern mb-4">
                            <label for="email" class="form-label-modern">
                                <i class="bi bi-envelope"></i>
                                Email Address
                            </label>
                            <div class="input-group-modern">
                                <input type="email" 
                                       class="form-control form-control-modern @error('email') is-invalid @enderror" 
                                       id="email" 
                                       name="email" 
                                       value="{{ old('email') }}" 
                                       placeholder="Enter your email address"
                                       autocomplete="email"
                                       required>
                                <div class="input-icon">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>
                            </div>
                            @error('email')
                                <div class="form-error">
                                    <i class="bi bi-exclamation-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Password Field --}}
                        <div class="form-group-modern mb-4">
                            <label for="password" class="form-label-modern">
                                <i class="bi bi-lock"></i>
                                Password
                            </label>
                            <div class="input-group-modern position-relative">
                                <input type="password" 
                                       class="form-control form-control-modern @error('password') is-invalid @enderror" 
                                       id="password" 
                                       name="password" 
                                       placeholder="Enter your password"
                                       autocomplete="current-password"
                                       style="padding-right: 45px;"
                                       required>
                                <button type="button" class="password-toggle position-absolute" id="togglePassword" 
                                        style="right: 12px; top: 50%; transform: translateY(-50%); background: none; border: none; z-index: 10; color: var(--bs-secondary);">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                            @error('password')
                                <div class="form-error">
                                    <i class="bi bi-exclamation-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Remember Me & Forgot Password --}}
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check form-check-modern">
                                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                <label class="form-check-label" for="remember">
                                    Remember me
                                </label>
                            </div>
                            <a href="{{ route('password.request') }}" class="auth-link" id="forgotPasswordLink">
                                <i class="bi bi-arrow-clockwise me-1"></i>
                                Forgot password?
                            </a>
                        </div>

                        {{-- Submit Button --}}
                        <button type="submit" class="btn btn-primary btn-modern w-100 mb-4" id="submitBtn">
                            <span class="btn-text">Sign In</span>
                            <div class="btn-loading d-none">
                                <div class="spinner-border spinner-border-sm me-2" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                Signing in...
                            </div>
                        </button>

                        {{-- Divider --}}
                        <div class="auth-divider">
                            <span>or continue with</span>
                        </div>

                        {{-- Social Login Options --}}
                        <div class="social-login-grid mb-4">
                            <button type="button" class="btn btn-social btn-google">
                                <i class="bi bi-google"></i>
                                <span>Google</span>
                            </button>
                            <button type="button" class="btn btn-social btn-microsoft">
                                <i class="bi bi-microsoft"></i>
                                <span>Microsoft</span>
                            </button>
                            <button type="button" class="btn btn-social btn-linkedin">
                                <i class="bi bi-linkedin"></i>
                                <span>LinkedIn</span>
                            </button>
                        </div>

                        {{-- Sign Up Link --}}
                        <div class="text-center">
                            <p class="auth-footer-text">
                                New to Ravel Solutions? 
                                <a href="{{ route('signup') }}" class="auth-link fw-semibold">
                                    Create an account
                                    <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </p>
                        </div>
                    </form>                    {{-- Footer --}}
                    <div class="auth-footer mt-5">
                        <div class="row text-center">
                            <div class="col-4">
                                <a href="{{ route('privacy') }}" class="auth-footer-link">
                                    <i class="bi bi-shield-check"></i>
                                    <span>Privacy</span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="{{ route('terms') }}" class="auth-footer-link">
                                    <i class="bi bi-file-text"></i>
                                    <span>Terms</span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="{{ route('contact') }}" class="auth-footer-link">
                                    <i class="bi bi-headset"></i>
                                    <span>Support</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Panel - Visual Content --}}
            <div class="col-lg-6 auth-visual-panel d-none d-lg-flex">
                <div class="auth-visual-content">
                    {{-- Background Pattern --}}
                    <div class="auth-bg-pattern"></div>
                    
                    {{-- Content --}}
                    <div class="auth-visual-inner">
                        <div class="auth-visual-header">
                            <h2 class="display-4 fw-bold text-white mb-4">
                                Secure Access to Your Future
                            </h2>
                            <p class="lead text-white opacity-90 mb-5">
                                Join thousands of professionals who trust Ravel Solutions for their career advancement and recruitment needs.
                            </p>
                        </div>

                        {{-- Feature Cards --}}
                        <div class="auth-features">
                            <div class="auth-feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Secure & Private</h5>
                                    <p>End-to-end encryption and privacy protection</p>
                                </div>
                            </div>
                            
                            <div class="auth-feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-lightning-charge"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Fast & Reliable</h5>
                                    <p>Quick access to opportunities and seamless experience</p>
                                </div>
                            </div>
                            
                            <div class="auth-feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Trusted Network</h5>
                                    <p>Connect with top employers and talented professionals</p>
                                </div>
                            </div>
                        </div>

                        {{-- Stats --}}
                        <div class="auth-stats mt-5">
                            <div class="row text-center">
                                <div class="col-4">
                                    <div class="stat-number">50K+</div>
                                    <div class="stat-label">Active Users</div>
                                </div>
                                <div class="col-4">
                                    <div class="stat-number">10K+</div>
                                    <div class="stat-label">Job Placements</div>
                                </div>
                                <div class="col-4">
                                    <div class="stat-number">500+</div>
                                    <div class="stat-label">Partner Companies</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Custom JavaScript --}}
<style>
/* Additional styling for password field */
.input-group-modern {
    position: relative;
}

.password-toggle {
    border: none !important;
    background: none !important;
    padding: 8px !important;
    border-radius: 4px;
    transition: all 0.2s ease;
}

.password-toggle:hover {
    background-color: rgba(var(--bs-primary-rgb), 0.1) !important;
    color: var(--bs-primary) !important;
}

.password-toggle:focus {
    outline: none !important;
    box-shadow: 0 0 0 2px rgba(var(--bs-primary-rgb), 0.25) !important;
}

/* Ensure proper z-index and positioning */
.form-control-modern {
    position: relative;
    z-index: 1;
}

.password-toggle {
    z-index: 2;
}

/* Loading button animation */
.btn-loading .spinner-border {
    width: 1rem;
    height: 1rem;
}

/* Enhanced form validation */
.form-control.is-invalid {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.form-error {
    display: block;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 0.875em;
    color: #dc3545;
}

/* Success message styling */
.alert-modern {
    border: none;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

.alert-success.alert-modern {
    background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
    border-left: 4px solid #28a745;
}

.alert-danger.alert-modern {
    background: linear-gradient(135deg, #f8d7da 0%, #f1aeb5 100%);
    border-left: 4px solid #dc3545;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('Signin page loaded'); // Debug log
    
    // Password toggle functionality
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    
    console.log('Toggle button:', togglePassword); // Debug log
    console.log('Password input:', passwordInput); // Debug log
    
    if (togglePassword && passwordInput) {
        togglePassword.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent any form submission
            e.stopPropagation(); // Stop event bubbling
            
            console.log('Toggle clicked'); // Debug log
            console.log('Current type:', passwordInput.type); // Debug log
            
            // Toggle password visibility
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                console.log('Changed to text'); // Debug log
            } else {
                passwordInput.type = 'password';
                console.log('Changed to password'); // Debug log
            }
            
            // Toggle icon
            const icon = this.querySelector('i');
            if (icon) {
                if (icon.classList.contains('bi-eye')) {
                    icon.classList.remove('bi-eye');
                    icon.classList.add('bi-eye-slash');
                } else {
                    icon.classList.remove('bi-eye-slash');
                    icon.classList.add('bi-eye');
                }
                console.log('Icon toggled:', icon.className); // Debug log
            }
        });
    } else {
        console.error('Password toggle elements not found!');
    }
    
    // Form submission loading state
    const form = document.getElementById('signinForm');
    const submitBtn = document.getElementById('submitBtn');
    
    if (form && submitBtn) {
        form.addEventListener('submit', function(e) {
            // Allow form to submit normally, just add loading state
            if (validateSigninForm()) {
                const btnText = submitBtn.querySelector('.btn-text');
                const btnLoading = submitBtn.querySelector('.btn-loading');
                
                btnText.classList.add('d-none');
                btnLoading.classList.remove('d-none');
                submitBtn.disabled = true;
                
                // Let the form submit naturally
                return true;
            } else {
                e.preventDefault();
                showErrorMessage('Please check your email and password and try again.');
                return false;
            }
        });
    }
    
    // Form validation function
    function validateSigninForm() {
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        
        // Simple validation - in real app this would be server-side
        if (!email || !password) {
            return false;
        }
        
        // Simulate valid credentials check (demo purposes)
        const validEmails = ['demo@ravel.com', 'test@example.com', 'user@demo.com'];
        return validEmails.includes(email.toLowerCase()) && password.length >= 6;
    }
    
    // Show success message
    function showSuccessMessage(message) {
        const alertDiv = document.createElement('div');
        alertDiv.className = 'alert alert-success alert-modern';
        alertDiv.innerHTML = `
            <div class="d-flex align-items-center">
                <i class="bi bi-check-circle-fill me-2"></i>
                <span>${message}</span>
            </div>
        `;
        
        const form = document.getElementById('signinForm');
        form.insertBefore(alertDiv, form.firstChild);
        
        setTimeout(() => {
            alertDiv.remove();
        }, 3000);
    }
    
    // Show error message
    function showErrorMessage(message) {
        const alertDiv = document.createElement('div');
        alertDiv.className = 'alert alert-danger alert-modern';
        alertDiv.innerHTML = `
            <div class="d-flex align-items-center">
                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                <span>${message}</span>
            </div>
        `;
        
        const form = document.getElementById('signinForm');
        form.insertBefore(alertDiv, form.firstChild);
        
        // Reset button state
        const btnText = submitBtn.querySelector('.btn-text');
        const btnLoading = submitBtn.querySelector('.btn-loading');
        btnText.classList.remove('d-none');
        btnLoading.classList.add('d-none');
        submitBtn.disabled = false;
        
        setTimeout(() => {
            alertDiv.remove();
        }, 5000);
    }
    
    
    // Enhanced form validation
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
    
    function showFieldError(field, message) {
        field.classList.add('is-invalid');
        let errorDiv = field.parentNode.parentNode.querySelector('.form-error');
        if (!errorDiv) {
            errorDiv = document.createElement('div');
            errorDiv.className = 'form-error';
            errorDiv.innerHTML = '<i class="bi bi-exclamation-circle"></i> ' + message;
            field.parentNode.parentNode.appendChild(errorDiv);
        } else {
            errorDiv.innerHTML = '<i class="bi bi-exclamation-circle"></i> ' + message;
        }
    }
    
    function clearFieldError(field) {
        field.classList.remove('is-invalid');
        const errorDiv = field.parentNode.parentNode.querySelector('.form-error');
        if (errorDiv) {
            errorDiv.remove();
        }
    }
    
    if (emailInput) {
        emailInput.addEventListener('blur', function() {
            if (this.value && !validateEmail(this.value)) {
                showFieldError(this, 'Please enter a valid email address');
            } else {
                clearFieldError(this);
            }
        });
        
        emailInput.addEventListener('input', function() {
            if (this.classList.contains('is-invalid') && validateEmail(this.value)) {
                clearFieldError(this);
            }
        });
    }
    
    if (passwordInput) {
        passwordInput.addEventListener('input', function() {
            if (this.classList.contains('is-invalid') && this.value.length >= 6) {
                clearFieldError(this);
            }
        });
    }
    
    // Social login handlers (placeholder)
    document.querySelectorAll('.btn-social').forEach(btn => {
        btn.addEventListener('click', function() {
            const provider = this.classList.contains('btn-google') ? 'Google' : 
                           this.classList.contains('btn-microsoft') ? 'Microsoft' : 'LinkedIn';
            
            // Show loading state
            const originalContent = this.innerHTML;
            this.innerHTML = '<div class="spinner-border spinner-border-sm" role="status"></div>';
            this.disabled = true;
            
            // Simulate social login (replace with actual implementation)
            setTimeout(() => {
                this.innerHTML = originalContent;
                this.disabled = false;
                alert(`${provider} login integration would be implemented here`);
            }, 2000);
        });
    });
});
</script>
@endsection