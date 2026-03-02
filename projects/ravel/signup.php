<?php
$currentPage = 'signup';
$pageTitle = 'Choose Your Account';
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

    .account-selection-card {
        background: var(--bg-secondary);
        border-radius: 24px;
        padding: 3rem;
        max-width: 900px;
        width: 100%;
        border: 1px solid var(--border-color);
        margin: 0 auto;
    }

    .account-selection-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--text-primary);
        margin-bottom: 0.5rem;
    }

    .account-selection-subtitle {
        color: var(--text-secondary);
        font-size: 1rem;
        max-width: 500px;
        margin: 0 auto;
    }

    .account-type-card {
        background: var(--bg-primary);
        border: 2px solid var(--border-color);
        border-radius: 16px;
        padding: 2rem;
        cursor: pointer;
        transition: all 0.3s ease;
        height: 100%;
    }

    .account-type-card:hover {
        border-color: var(--color-primary);
        transform: translateY(-8px);
        box-shadow: 0 10px 30px rgba(39, 160, 237, 0.2);
    }

    .account-type-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
    }

    .account-type-icon i {
        font-size: 2.5rem;
        color: white;
    }

    .account-type-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--text-primary);
        margin-bottom: 0.75rem;
        text-align: center;
    }

    .account-type-description {
        color: var(--text-secondary);
        font-size: 0.9rem;
        text-align: center;
        margin-bottom: 1.5rem;
    }

    .account-type-features {
        text-align: left;
    }

    .feature-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.5rem 0;
        color: var(--text-secondary);
        font-size: 0.9rem;
    }

    .feature-item i {
        color: #28a745;
    }

    .auth-footer-text {
        color: var(--text-secondary);
        font-size: 0.9rem;
    }

    .auth-link {
        color: var(--color-primary);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .auth-link:hover {
        color: var(--color-accent);
    }

    @media (max-width: 768px) {
        .account-selection-card {
            padding: 2rem 1.5rem;
        }

        .account-selection-title {
            font-size: 1.75rem;
        }
    }
</style>

<div class="auth-container">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
                <div class="account-selection-card">
                    <!-- Header -->
                    <div class="text-center mb-5">
                        <h1 class="account-selection-title">Choose your Account</h1>
                        <p class="account-selection-subtitle">
                            Select the account type that best describes you. This helps us personalize your experience
                            on our platform.
                        </p>
                    </div>

                    <!-- Account Type Cards -->
                    <div class="row justify-content-center g-4">
                        <div class="col-md-5">
                            <div class="account-type-card" data-type="contractor">
                                <div class="account-type-icon">
                                    <i class="bi bi-person-tie"></i>
                                </div>
                                <h3 class="account-type-title">Contractor</h3>
                                <p class="account-type-description">
                                    Join as a contractor to offer your services and connect with companies seeking your
                                    expertise.
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
                                    Sign up as an applicant to discover opportunities and advance your career with top
                                    companies.
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

                    <!-- Footer -->
                    <div class="text-center mt-5">
                        <p class="auth-footer-text">
                            Already have an account?
                            <a href="signin.php" class="auth-link fw-semibold">
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
    document.addEventListener('DOMContentLoaded', function () {
        const accountCards = document.querySelectorAll('.account-type-card');

        accountCards.forEach(card => {
            card.addEventListener('click', function () {
                const accountType = this.getAttribute('data-type');

                // Add loading effect
                this.style.transform = 'scale(0.98)';
                this.style.opacity = '0.8';

                // Redirect after animation
                setTimeout(() => {
                    if (accountType === 'contractor') {
                        window.location.href = 'signup-contractor.php';
                    } else {
                        window.location.href = 'signup-applicant.php';
                    }
                }, 200);
            });

            // Hover effects
            card.addEventListener('mouseenter', function () {
                this.style.transform = 'translateY(-8px)';
            });

            card.addEventListener('mouseleave', function () {
                this.style.transform = 'translateY(0)';
            });
        });
    });
</script>

<?php require_once 'includes/footer.php'; ?>