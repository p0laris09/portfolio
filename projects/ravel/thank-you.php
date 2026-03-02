<?php $currentPage = 'thank-you'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Ravel Solutions</title>
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
            --success-color: #28a745;
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
            overflow-x: hidden;
        }
        
        .thank-you-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            position: relative;
        }
        
        .thank-you-card {
            background: var(--bg-secondary);
            border-radius: 24px;
            padding: 3rem;
            max-width: 600px;
            width: 100%;
            text-align: center;
            border: 1px solid var(--border-color);
            position: relative;
            z-index: 10;
        }
        
        /* Animated Success Checkmark */
        .success-checkmark {
            width: 100px;
            height: 100px;
            margin: 0 auto 2rem;
            position: relative;
        }
        
        .success-checkmark-circle {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--success-color), #20c997);
            position: relative;
            animation: scaleIn 0.5s ease-out forwards;
        }
        
        .success-checkmark-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 3rem;
            color: white;
            opacity: 0;
            animation: fadeIn 0.3s ease-out 0.4s forwards;
        }
        
        .success-ring {
            position: absolute;
            inset: -10px;
            border-radius: 50%;
            border: 3px solid var(--success-color);
            opacity: 0;
            animation: ringPulse 1s ease-out 0.5s forwards;
        }
        
        @keyframes scaleIn {
            from {
                transform: scale(0);
            }
            to {
                transform: scale(1);
            }
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translate(-50%, -50%) scale(0.5);
            }
            to {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1);
            }
        }
        
        @keyframes ringPulse {
            0% {
                opacity: 1;
                transform: scale(1);
            }
            100% {
                opacity: 0;
                transform: scale(1.3);
            }
        }
        
        .thank-you-title {
            font-size: 2.25rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .thank-you-subtitle {
            color: var(--text-secondary);
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 2rem;
        }
        
        .reference-number {
            background: var(--bg-primary);
            border-radius: 12px;
            padding: 1.25rem;
            margin-bottom: 2rem;
            border: 1px solid var(--border-color);
        }
        
        .reference-label {
            color: var(--text-muted);
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
        }
        
        .reference-value {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--color-primary);
            font-family: monospace;
        }
        
        .info-cards {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin-bottom: 2rem;
        }
        
        .info-card {
            background: var(--bg-primary);
            border-radius: 12px;
            padding: 1.25rem;
            text-align: left;
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }
        
        .info-card:hover {
            border-color: var(--color-primary);
            transform: translateY(-2px);
        }
        
        .info-card-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0.75rem;
        }
        
        .info-card-icon i {
            color: white;
            font-size: 1.25rem;
        }
        
        .info-card-title {
            font-weight: 600;
            color: var(--text-primary);
            font-size: 0.95rem;
            margin-bottom: 0.25rem;
        }
        
        .info-card-description {
            color: var(--text-secondary);
            font-size: 0.8rem;
        }
        
        .btn-modern {
            padding: 0.875rem 2rem;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-primary.btn-modern {
            background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
            border: none;
        }
        
        .btn-primary.btn-modern:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(39, 160, 237, 0.3);
        }
        
        .btn-outline-secondary.btn-modern {
            background: transparent;
            border: 1px solid var(--border-color);
            color: var(--text-secondary);
        }
        
        .btn-outline-secondary.btn-modern:hover {
            background: var(--bg-primary);
            border-color: var(--text-secondary);
            color: var(--text-primary);
        }
        
        .action-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .footer-text {
            margin-top: 2rem;
            color: var(--text-muted);
            font-size: 0.85rem;
        }
        
        .footer-text a {
            color: var(--color-primary);
            text-decoration: none;
        }
        
        .footer-text a:hover {
            color: var(--color-accent);
        }
        
        /* Confetti Animation */
        .confetti-container {
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 5;
            overflow: hidden;
        }
        
        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            opacity: 0;
        }
        
        .confetti.square {
            border-radius: 2px;
        }
        
        .confetti.circle {
            border-radius: 50%;
        }
        
        .confetti.triangle {
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-bottom: 10px solid currentColor;
            background: transparent !important;
        }
        
        @keyframes confettiFall {
            0% {
                opacity: 1;
                transform: translateY(-100vh) rotate(0deg);
            }
            100% {
                opacity: 0;
                transform: translateY(100vh) rotate(720deg);
            }
        }
        
        @media (max-width: 576px) {
            .thank-you-card {
                padding: 2rem 1.5rem;
            }
            
            .thank-you-title {
                font-size: 1.75rem;
            }
            
            .info-cards {
                grid-template-columns: 1fr;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .btn-modern {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- Confetti Container -->
    <div class="confetti-container" id="confettiContainer"></div>
    
    <div class="thank-you-container">
        <div class="thank-you-card">
            <!-- Animated Checkmark -->
            <div class="success-checkmark">
                <div class="success-checkmark-circle">
                    <i class="bi bi-check-lg success-checkmark-icon"></i>
                </div>
                <div class="success-ring"></div>
            </div>
            
            <!-- Thank You Message -->
            <h1 class="thank-you-title">Registration Successful!</h1>
            <p class="thank-you-subtitle">
                Thank you for signing up with Ravel Solutions. Your account has been created successfully. 
                We're excited to have you join our community!
            </p>
            
            <!-- Reference Number -->
            <div class="reference-number">
                <p class="reference-label">Reference Number</p>
                <p class="reference-value" id="referenceNumber">RVL-000000</p>
            </div>
            
            <!-- Info Cards -->
            <div class="info-cards">
                <div class="info-card">
                    <div class="info-card-icon">
                        <i class="bi bi-envelope-check"></i>
                    </div>
                    <h5 class="info-card-title">Check Your Email</h5>
                    <p class="info-card-description">
                        We've sent a confirmation email to verify your account.
                    </p>
                </div>
                
                <div class="info-card">
                    <div class="info-card-icon">
                        <i class="bi bi-person-badge"></i>
                    </div>
                    <h5 class="info-card-title">Complete Profile</h5>
                    <p class="info-card-description">
                        Add more details to your profile to stand out.
                    </p>
                </div>
                
                <div class="info-card">
                    <div class="info-card-icon">
                        <i class="bi bi-search"></i>
                    </div>
                    <h5 class="info-card-title">Explore Opportunities</h5>
                    <p class="info-card-description">
                        Browse available positions and find your perfect match.
                    </p>
                </div>
                
                <div class="info-card">
                    <div class="info-card-icon">
                        <i class="bi bi-chat-dots"></i>
                    </div>
                    <h5 class="info-card-title">Get Support</h5>
                    <p class="info-card-description">
                        Our team is here to help you every step of the way.
                    </p>
                </div>
            </div>
            
            <!-- Action Buttons -->
            <div class="action-buttons">
                <a href="signin.php" class="btn btn-primary btn-modern">
                    <i class="bi bi-box-arrow-in-right"></i>
                    Sign In to Dashboard
                </a>
                <a href="index.php" class="btn btn-outline-secondary btn-modern">
                    <i class="bi bi-house"></i>
                    Back to Home
                </a>
            </div>
            
            <!-- Footer -->
            <p class="footer-text">
                Need help? <a href="#">Contact Support</a> or visit our <a href="#">Help Center</a>
            </p>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Generate Reference Number
        function generateReferenceNumber() {
            const timestamp = Date.now().toString(36).toUpperCase();
            const random = Math.random().toString(36).substring(2, 6).toUpperCase();
            return `RVL-${timestamp}${random}`.substring(0, 14);
        }
        
        document.getElementById('referenceNumber').textContent = generateReferenceNumber();
        
        // Create Confetti
        function createConfetti() {
            const container = document.getElementById('confettiContainer');
            const colors = ['#27A0ED', '#6366f1', '#28a745', '#ffc107', '#dc3545', '#20c997'];
            const shapes = ['square', 'circle', 'triangle'];
            const confettiCount = 100;
            
            for (let i = 0; i < confettiCount; i++) {
                const confetti = document.createElement('div');
                const shape = shapes[Math.floor(Math.random() * shapes.length)];
                const color = colors[Math.floor(Math.random() * colors.length)];
                
                confetti.className = `confetti ${shape}`;
                
                if (shape !== 'triangle') {
                    confetti.style.backgroundColor = color;
                } else {
                    confetti.style.borderBottomColor = color;
                }
                
                confetti.style.left = Math.random() * 100 + 'vw';
                confetti.style.animationDuration = (Math.random() * 3 + 2) + 's';
                confetti.style.animationDelay = (Math.random() * 2) + 's';
                confetti.style.animation = `confettiFall ${Math.random() * 3 + 2}s linear ${Math.random() * 0.5}s forwards`;
                
                container.appendChild(confetti);
            }
            
            // Remove confetti after animation
            setTimeout(() => {
                container.innerHTML = '';
            }, 6000);
        }
        
        // Trigger confetti on load
        setTimeout(createConfetti, 500);
    });
    </script>
</body>
</html>
