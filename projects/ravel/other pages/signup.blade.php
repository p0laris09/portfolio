@extends('layouts.app')

@section('title', 'Choose Your Account - Ravel Solutions')

@section('content')
<div class="auth-container">
    <div class="container-fluid h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-12 col-xl-10">
                <div class="account-selection-card">
                    {{-- Header --}}
                    <div class="text-center mb-5">
                        <h1 class="account-selection-title">Choose your Account</h1>
                        <p class="account-selection-subtitle">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisque faucibus 
                            ex sapien vitae pellentesque sem placerat
                        </p>
                    </div>

                    {{-- Account Type Cards --}}
                    <div class="row justify-content-center g-4">
                        <div class="col-md-5">
                            <div class="account-type-card" data-type="contractor">
                                <div class="account-type-icon">
                                    <i class="bi bi-person-tie"></i>
                                </div>
                                <h3 class="account-type-title">Contractor</h3>
                                <p class="account-type-description">
                                    Join as a contractor to offer your services and connect with companies seeking your expertise.
                                </p>
                                <div class="account-type-features">
                                    <div class="feature-item">
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Post your services</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Connect with companies</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Manage contracts</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="account-type-card" data-type="applicant">
                                <div class="account-type-icon">
                                    <i class="bi bi-person-badge"></i>
                                </div>
                                <h3 class="account-type-title">Applicant</h3>
                                <p class="account-type-description">
                                    Sign up as an applicant to discover opportunities and advance your career with top companies.
                                </p>
                                <div class="account-type-features">
                                    <div class="feature-item">
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Browse job opportunities</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Apply to positions</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Track applications</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Footer --}}
                    <div class="text-center mt-5">
                        <p class="auth-footer-text">
                            Already have an account? 
                            <a href="{{ route('signin') }}" class="auth-link fw-semibold">
                                Sign In
                                <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Account type selection
    const accountCards = document.querySelectorAll('.account-type-card');
    
    accountCards.forEach(card => {
        card.addEventListener('click', function() {
            const accountType = this.getAttribute('data-type');
            
            // Add loading effect
            this.style.transform = 'scale(0.98)';
            this.style.opacity = '0.8';
            
            // Redirect after animation
            setTimeout(() => {
                if (accountType === 'contractor') {
                    window.location.href = '{{ route("signup.contractor") }}';
                } else {
                    window.location.href = '{{ route("signup.applicant") }}';
                }
            }, 200);
        });
        
        // Hover effects
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});
</script>
@endsection
