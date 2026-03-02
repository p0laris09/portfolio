@extends('layouts.app')

@section('title', 'Forgot Password - Ravel Solutions')

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
                            <i class="bi bi-key text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <h1 class="auth-title">Reset Your Password</h1>
                        <p class="auth-subtitle">Enter your email address and we'll send you a link to reset your password</p>
                    </div>

                    {{-- Error Messages --}}
                    @if ($errors->any())
                        <div class="alert alert-danger alert-modern" role="alert">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                <strong>Error</strong>
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

                    {{-- Forgot Password Form --}}
                    <form id="forgotPasswordForm" action="{{ route('password.email') }}" method="POST" class="auth-form">
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

                        {{-- Submit Button --}}
                        <button type="submit" class="btn btn-primary btn-modern w-100 mb-4" id="submitBtn">
                            <span class="btn-text">Send Reset Link</span>
                            <div class="btn-loading d-none">
                                <div class="spinner-border spinner-border-sm me-2" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                Sending...
                            </div>
                        </button>

                        {{-- Back to Login Link --}}
                        <div class="text-center">
                            <p class="auth-footer-text">
                                Remember your password? 
                                <a href="{{ route('signin') }}" class="auth-link fw-semibold">
                                    <i class="bi bi-arrow-left me-1"></i>
                                    Back to Sign In
                                </a>
                            </p>
                        </div>
                    </form>

                    {{-- Additional Help --}}
                    <div class="auth-help-section mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">
                                    <i class="bi bi-question-circle-fill text-primary me-2"></i>
                                    Need Help?
                                </h6>
                                <p class="card-text small text-muted mb-3">
                                    If you're having trouble accessing your account, here are some things you can try:
                                </p>
                                <ul class="small text-muted mb-3">
                                    <li>Check your spam/junk folder for the reset email</li>
                                    <li>Make sure you're using the correct email address</li>
                                    <li>Try signing in with a different browser</li>
                                </ul>
                                <a href="{{ route('contact') }}" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-headset me-1"></i>
                                    Contact Support
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Footer --}}
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
                                Account Recovery Made Simple
                            </h2>
                            <p class="lead text-white opacity-90 mb-5">
                                Don't worry, we've all been there. Enter your email address and we'll help you get back into your account quickly and securely.
                            </p>
                        </div>

                        {{-- Feature Cards --}}
                        <div class="auth-features">
                            <div class="auth-feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-shield-lock"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Secure Reset Process</h5>
                                    <p>Encrypted reset links that expire for your security</p>
                                </div>
                            </div>
                            
                            <div class="auth-feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-clock-history"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Quick Recovery</h5>
                                    <p>Get back into your account in just a few minutes</p>
                                </div>
                            </div>
                            
                            <div class="auth-feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>24/7 Support</h5>
                                    <p>Our support team is here to help if you need assistance</p>
                                </div>
                            </div>
                        </div>

                        {{-- Security Notice --}}
                        <div class="auth-security-notice mt-5">
                            <div class="card bg-transparent border-light text-white">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-info-circle-fill me-2"></i>
                                        <strong>Security Notice</strong>
                                    </div>
                                    <p class="small mb-0 opacity-90">
                                        For your security, password reset links are valid for 1 hour only. 
                                        If you don't receive an email, please check your spam folder.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Custom Styling --}}
<style>
/* Additional styling for forgot password page */
.auth-help-section .card {
    background: rgba(var(--bs-light-rgb), 0.05);
    border: 1px solid rgba(var(--bs-primary-rgb), 0.1);
}

.auth-security-notice .card {
    background: rgba(255, 255, 255, 0.1) !important;
    backdrop-filter: blur(10px);
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

/* Feature cards hover effect */
.auth-feature-card:hover {
    transform: translateY(-2px);
    transition: transform 0.2s ease;
}
</style>

{{-- Custom JavaScript --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('Forgot password page loaded');
    
    // Form submission loading state
    const form = document.getElementById('forgotPasswordForm');
    const submitBtn = document.getElementById('submitBtn');
    
    if (form && submitBtn) {
        form.addEventListener('submit', function(e) {
            // Allow form to submit normally, just add loading state
            if (validateEmail()) {
                const btnText = submitBtn.querySelector('.btn-text');
                const btnLoading = submitBtn.querySelector('.btn-loading');
                
                btnText.classList.add('d-none');
                btnLoading.classList.remove('d-none');
                submitBtn.disabled = true;
                
                // Let the form submit naturally
                return true;
            } else {
                e.preventDefault();
                showErrorMessage('Please enter a valid email address.');
                return false;
            }
        });
    }
    
    // Email validation function
    function validateEmail() {
        const emailInput = document.getElementById('email');
        const email = emailInput.value.trim();
        
        if (!email) {
            showFieldError(emailInput, 'Email address is required');
            return false;
        }
        
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            showFieldError(emailInput, 'Please enter a valid email address');
            return false;
        }
        
        clearFieldError(emailInput);
        return true;
    }
    
    // Real-time email validation
    const emailInput = document.getElementById('email');
    if (emailInput) {
        emailInput.addEventListener('blur', function() {
            if (this.value) {
                validateEmail();
            }
        });
        
        emailInput.addEventListener('input', function() {
            if (this.classList.contains('is-invalid')) {
                validateEmail();
            }
        });
    }
    
    // Show field error
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
    
    // Clear field error
    function clearFieldError(field) {
        field.classList.remove('is-invalid');
        const errorDiv = field.parentNode.parentNode.querySelector('.form-error');
        if (errorDiv) {
            errorDiv.remove();
        }
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
        
        const form = document.getElementById('forgotPasswordForm');
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
    
    // Auto-hide success message after 10 seconds
    const successAlert = document.querySelector('.alert-success');
    if (successAlert) {
        setTimeout(() => {
            successAlert.style.opacity = '0';
            setTimeout(() => {
                successAlert.remove();
            }, 300);
        }, 10000);
    }
});
</script>
@endsection