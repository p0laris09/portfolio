@extends('layouts.app')

@section('title', 'Thank You - Ravel Solutions')

@section('content')
<div class="auth-container">
    <div class="container-fluid h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="thank-you-card">
                    {{-- Success Icon --}}
                    <div class="thank-you-icon">
                        <div class="success-circle">
                            <i class="bi bi-check-lg"></i>
                        </div>
                    </div>

                    {{-- Content --}}
                    <div class="thank-you-content">
                        <h1 class="thank-you-title">Thank you for signing up!</h1>
                        
                        <div class="thank-you-message">
                            <p class="message-main">
                                Your application has been received and assigned the reference number: 
                                <strong class="reference-number">[#REF123456]</strong>. 
                                You will receive an email notification once our team has completed 
                                the screening process to inform you whether your account has been approved. 
                                Please allow 1–3 business days for review.
                            </p>
                        </div>

                        {{-- Additional Info --}}
                        <div class="thank-you-info">
                            <div class="info-card">
                                <i class="bi bi-envelope-check"></i>
                                <div class="info-content">
                                    <h4>Email Confirmation</h4>
                                    <p>A confirmation email has been sent to your registered email address.</p>
                                </div>
                            </div>
                            
                            <div class="info-card">
                                <i class="bi bi-clock-history"></i>
                                <div class="info-content">
                                    <h4>Review Process</h4>
                                    <p>Our team will review your application within 1-3 business days.</p>
                                </div>
                            </div>
                            
                            <div class="info-card">
                                <i class="bi bi-bell"></i>
                                <div class="info-content">
                                    <h4>Stay Updated</h4>
                                    <p>You'll be notified via email about your application status.</p>
                                </div>
                            </div>
                        </div>

                        {{-- Action Buttons --}}
                        <div class="thank-you-actions">
                            <a href="{{ route('home') }}" class="btn btn-primary btn-modern">
                                <i class="bi bi-house me-2"></i>
                                GO BACK TO HOMEPAGE
                            </a>
                            
                            <div class="secondary-actions">
                                <a href="{{ route('contact') }}" class="btn btn-outline-secondary btn-modern">
                                    <i class="bi bi-headset me-2"></i>
                                    Contact Support
                                </a>
                                <a href="{{ route('about') }}" class="btn btn-outline-secondary btn-modern">
                                    <i class="bi bi-info-circle me-2"></i>
                                    Learn More
                                </a>
                            </div>
                        </div>

                        {{-- Footer Note --}}
                        <div class="thank-you-footer">
                            <p class="footer-note">
                                <i class="bi bi-shield-check me-2"></i>
                                Your information is secure and will only be used for account verification purposes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Animation Script --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animate success icon
    const successCircle = document.querySelector('.success-circle');
    const checkIcon = document.querySelector('.success-circle i');
    
    setTimeout(() => {
        successCircle.classList.add('animate');
    }, 300);
    
    setTimeout(() => {
        checkIcon.classList.add('animate');
    }, 800);
    
    // Animate content
    const content = document.querySelector('.thank-you-content');
    setTimeout(() => {
        content.classList.add('animate');
    }, 1000);
    
    // Generate random reference number
    function generateRefNumber() {
        const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        let result = 'REF';
        for (let i = 0; i < 6; i++) {
            result += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        return result;
    }
    
    // Update reference number
    const refElement = document.querySelector('.reference-number');
    if (refElement) {
        refElement.textContent = `[#${generateRefNumber()}]`;
    }
    
    // Confetti effect (optional)
    function createConfetti() {
        const confettiContainer = document.createElement('div');
        confettiContainer.className = 'confetti-container';
        document.body.appendChild(confettiContainer);
        
        for (let i = 0; i < 50; i++) {
            const confetti = document.createElement('div');
            confetti.className = 'confetti';
            confetti.style.left = Math.random() * 100 + '%';
            confetti.style.backgroundColor = `hsl(${Math.random() * 360}, 70%, 60%)`;
            confetti.style.animationDelay = Math.random() * 2 + 's';
            confetti.style.animationDuration = (Math.random() * 3 + 2) + 's';
            confettiContainer.appendChild(confetti);
        }
        
        setTimeout(() => {
            confettiContainer.remove();
        }, 5000);
    }
    
    // Trigger confetti after animations
    setTimeout(createConfetti, 1200);
});
</script>

<style>
/* Thank You Page Specific Styles */
.thank-you-card {
    background: var(--bg-primary);
    border-radius: 24px;
    padding: 3rem 2rem;
    text-align: center;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    border: 1px solid var(--border-light);
    position: relative;
    overflow: hidden;
}

.thank-you-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--color-primary), var(--color-accent));
}

.thank-you-icon {
    margin-bottom: 2rem;
}

.success-circle {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    position: relative;
    transform: scale(0);
    transition: transform 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.success-circle.animate {
    transform: scale(1);
}

.success-circle i {
    font-size: 3rem;
    color: white;
    opacity: 0;
    transform: scale(0);
    transition: all 0.3s ease 0.2s;
}

.success-circle i.animate {
    opacity: 1;
    transform: scale(1);
}

.thank-you-content {
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.5s ease;
}

.thank-you-content.animate {
    opacity: 1;
    transform: translateY(0);
}

.thank-you-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--color-dark);
    margin-bottom: 1.5rem;
    line-height: 1.2;
}

.thank-you-message {
    margin-bottom: 3rem;
}

.message-main {
    font-size: 1.1rem;
    line-height: 1.6;
    color: var(--text-secondary);
    max-width: 600px;
    margin: 0 auto;
}

.reference-number {
    color: var(--color-primary);
    font-weight: 700;
    font-size: 1.2em;
    background: rgba(39, 160, 237, 0.1);
    padding: 0.25rem 0.5rem;
    border-radius: 6px;
    font-family: 'Courier New', monospace;
}

.thank-you-info {
    margin-bottom: 3rem;
}

.info-card {
    display: flex;
    align-items: center;
    text-align: left;
    margin-bottom: 1.5rem;
    padding: 1.5rem;
    background: rgba(39, 160, 237, 0.05);
    border-radius: 12px;
    border-left: 4px solid var(--color-primary);
    transition: all 0.3s ease;
}

.info-card:hover {
    background: rgba(39, 160, 237, 0.1);
    transform: translateX(5px);
}

.info-card i {
    font-size: 2rem;
    color: var(--color-primary);
    margin-right: 1rem;
    flex-shrink: 0;
}

.info-content h4 {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--color-dark);
    margin-bottom: 0.25rem;
}

.info-content p {
    font-size: 0.9rem;
    color: var(--text-secondary);
    margin: 0;
}

.thank-you-actions {
    margin-bottom: 2rem;
}

.thank-you-actions .btn {
    margin: 0.5rem;
    min-width: 200px;
}

.secondary-actions {
    margin-top: 1rem;
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.secondary-actions .btn {
    min-width: 150px;
}

.thank-you-footer {
    padding-top: 2rem;
    border-top: 1px solid var(--border-light);
}

.footer-note {
    font-size: 0.9rem;
    color: var(--text-secondary);
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Confetti Animation */
.confetti-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1000;
}

.confetti {
    width: 10px;
    height: 10px;
    position: absolute;
    animation: confetti-fall linear infinite;
}

@keyframes confetti-fall {
    0% {
        transform: translateY(-100vh) rotate(0deg);
        opacity: 1;
    }
    100% {
        transform: translateY(100vh) rotate(360deg);
        opacity: 0;
    }
}

/* Responsive */
@media (max-width: 768px) {
    .thank-you-card {
        padding: 2rem 1.5rem;
        margin: 1rem;
    }
    
    .thank-you-title {
        font-size: 2rem;
    }
    
    .success-circle {
        width: 100px;
        height: 100px;
    }
    
    .success-circle i {
        font-size: 2.5rem;
    }
    
    .info-card {
        padding: 1rem;
    }
    
    .secondary-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .secondary-actions .btn {
        min-width: 200px;
    }
}
</style>
@endsection