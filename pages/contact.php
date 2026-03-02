<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Anne Lorraine Ramos</title>
  <link rel="icon" type="image/png" href="../images/logo.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:wght@500;600;700&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="home.php">
        <span class="logo">A<span class="logo-dot">.</span></span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <i class="bi bi-list"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="experience.php">Experience</a></li>
          <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="certificates.php">Certificates</a></li>
          <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
        </ul>
        <a href="../assets/RAMOS_ANNE LORRAINE F._CV.pdf" class="btn-resume" target="_blank">
          <i class="bi bi-download"></i> Resume
        </a>
      </div>
    </div>
  </nav>

  <!-- Page Hero -->
  <section class="page-hero">
    <div class="hero-bg">
      <div class="blob blob-1"></div>
      <div class="blob blob-2"></div>
      <div class="blob blob-3"></div>
      <div class="leaf leaf-1"><i class="bi bi-flower1"></i></div>
      <div class="leaf leaf-2"><i class="bi bi-flower2"></i></div>
      <div class="leaf leaf-3"><i class="bi bi-flower3"></i></div>
    </div>
    <div class="container">
      <div class="page-hero-content text-center">
        <span class="section-tag"><i class="bi bi-send me-2"></i>Get In Touch</span>
        <h1 class="display-4 fw-bold mt-3">
          Let's <span class="gradient-text">Connect</span>
        </h1>
        <p class="lead mt-3" style="color: var(--text-secondary); max-width: 600px; margin: 0 auto;">
          Have a project in mind, a question, or just want to say hello? I'd love to hear from you!
        </p>
      </div>
    </div>
  </section>

  <!-- Contact Info Cards -->
  <section class="contact-info-section">
    <div class="container">
      <div class="contact-info-grid">
        <a href="mailto:annelorraineramos@gmail.com" class="contact-info-card">
          <div class="contact-info-icon">
            <i class="bi bi-envelope"></i>
          </div>
          <h4>Email</h4>
          <p>annelorraineramos@gmail.com</p>
          <span class="contact-info-action">Send Email <i class="bi bi-arrow-right"></i></span>
        </a>
        <a href="tel:+639465420123" class="contact-info-card">
          <div class="contact-info-icon">
            <i class="bi bi-telephone"></i>
          </div>
          <h4>Phone</h4>
          <p>+63 (946) 542-0123</p>
          <span class="contact-info-action">Call Now <i class="bi bi-arrow-right"></i></span>
        </a>
        <div class="contact-info-card">
          <div class="contact-info-icon">
            <i class="bi bi-geo-alt"></i>
          </div>
          <h4>Location</h4>
          <p>Metro Manila, Philippines</p>
          <span class="contact-info-action location-tag">Open to Remote</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Contact Section -->
  <section class="contact-main">
    <div class="container">
      <div class="row g-5">

        <!-- Contact Form -->
        <div class="col-lg-7">
          <div class="contact-form-wrapper">
            <div class="form-header">
              <span class="section-tag"><i class="bi bi-chat-quote me-2"></i>Message</span>
              <h2 class="section-title mt-3">Send Me a <span class="gradient-text">Message</span></h2>
              <p class="form-subtitle">
                Fill out the form below and I'll get back to you as soon as possible.
              </p>
            </div>

            <form class="forest-contact-form" action="mailto:annelorraineramos@gmail.com" method="POST"
              enctype="text/plain">
              <div class="row g-4">
                <div class="col-md-6">
                  <div class="form-floating-custom">
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                    <label for="name"><i class="bi bi-person me-2"></i>Full Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating-custom">
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                    <label for="email"><i class="bi bi-envelope me-2"></i>Email Address</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating-custom">
                    <input type="text" id="subject" name="subject" placeholder="Subject" required>
                    <label for="subject"><i class="bi bi-bookmark me-2"></i>Subject</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating-custom textarea">
                    <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
                    <label for="message"><i class="bi bi-chat-text me-2"></i>Your Message</label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn-primary w-100">
                    <i class="bi bi-send"></i> Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- Connect Section -->
        <div class="col-lg-5">
          <div class="connect-wrapper">
            <span class="section-tag"><i class="bi bi-people me-2"></i>Connect</span>
            <h2 class="section-title mt-3">Let's Be <span class="gradient-text">Social</span></h2>
            <p class="connect-text">
              Follow me on social media to stay updated with my latest projects and tech adventures.
            </p>

            <div class="social-cards">
              <a href="https://github.com/p0laris09" target="_blank" rel="noopener noreferrer"
                class="social-card github">
                <div class="social-card-icon">
                  <i class="bi bi-github"></i>
                </div>
                <div class="social-card-info">
                  <h5>GitHub</h5>
                  <p>View my repositories</p>
                </div>
                <i class="bi bi-arrow-up-right"></i>
              </a>

              <a href="https://www.linkedin.com/in/anne-lorraine-ramos-596b5b330/" target="_blank"
                rel="noopener noreferrer" class="social-card linkedin">
                <div class="social-card-icon">
                  <i class="bi bi-linkedin"></i>
                </div>
                <div class="social-card-info">
                  <h5>LinkedIn</h5>
                  <p>Connect professionally</p>
                </div>
                <i class="bi bi-arrow-up-right"></i>
              </a>
            </div>

            <!-- Availability Card -->
            <div class="availability-card">
              <div class="availability-dot"></div>
              <div class="availability-info">
                <h5>Currently Available</h5>
                <p>Open to freelance, contract, or full-time opportunities</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Quick Response Section -->
  <section class="quick-response">
    <div class="container">
      <div class="response-grid">
        <div class="response-card">
          <div class="response-icon">
            <i class="bi bi-clock-history"></i>
          </div>
          <h4>Quick Response</h4>
          <p>I typically respond within 24-48 hours</p>
        </div>
        <div class="response-card">
          <div class="response-icon">
            <i class="bi bi-calendar-check"></i>
          </div>
          <h4>Flexible Schedule</h4>
          <p>Available for meetings across different timezones</p>
        </div>
        <div class="response-card">
          <div class="response-icon">
            <i class="bi bi-lightbulb"></i>
          </div>
          <h4>Creative Solutions</h4>
          <p>Ready to bring your innovative ideas to life</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="contact-faq">
    <div class="container">
      <div class="text-center mb-5">
        <span class="section-tag"><i class="bi bi-question-circle me-2"></i>FAQ</span>
        <h2 class="section-title mt-3">Frequently <span class="gradient-text">Asked</span></h2>
      </div>
      <div class="faq-grid">
        <div class="faq-item">
          <h5><i class="bi bi-patch-question me-2"></i>What services do you offer?</h5>
          <p>I specialize in full-stack web development, mobile app development with Flutter, database design, and UI/UX
            implementation.</p>
        </div>
        <div class="faq-item">
          <h5><i class="bi bi-patch-question me-2"></i>What's your typical project timeline?</h5>
          <p>Project timelines vary based on complexity. Small projects take 2-4 weeks, while larger applications may
            take 2-3 months.</p>
        </div>
        <div class="faq-item">
          <h5><i class="bi bi-patch-question me-2"></i>Do you work with international clients?</h5>
          <p>Absolutely! I work with clients worldwide and am comfortable with remote collaboration across different
            timezones.</p>
        </div>
        <div class="faq-item">
          <h5><i class="bi bi-patch-question me-2"></i>What technologies do you work with?</h5>
          <p>PHP, Laravel, JavaScript, React, Flutter, MySQL, Firebase, and various modern web technologies and
            frameworks.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <span class="logo">A<span class="logo-dot">.</span></span>
          <p>Full Stack Developer crafting digital experiences with passion and precision.</p>
          <div class="footer-socials">
            <a href="https://github.com/p0laris09" target="_blank"><i class="bi bi-github"></i></a>
            <a href="https://www.linkedin.com/in/anne-lorraine-ramos-596b5b330/" target="_blank"><i
                class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="footer-links">
          <h5>Navigation</h5>
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="experience.php">Experience</a></li>
            <li><a href="projects.php">Projects</a></li>
          </ul>
        </div>
        <div class="footer-links">
          <h5>Resources</h5>
          <ul>
            <li><a href="certificates.php">Certificates</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="../assets/RAMOS_ANNE LORRAINE F._CV.pdf" target="_blank">Resume</a></li>
          </ul>
        </div>
        <div class="footer-contact">
          <h5>Get In Touch</h5>
          <ul>
            <li><i class="bi bi-envelope"></i> annelorraineramos@gmail.com</li>
            <li><i class="bi bi-phone"></i> +63 (946) 542-0123</li>
            <li><i class="bi bi-geo-alt"></i> Manila, Philippines</li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 Anne Lorraine Ramos. All rights reserved.</p>
        <p>Made with <i class="bi bi-heart-fill"></i> and coffee</p>
      </div>
    </div>
  </footer>

  <!-- Back to Top -->
  <button class="back-top" id="backTop"><i class="bi bi-arrow-up"></i></button>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Navbar scroll
    window.addEventListener('scroll', () => {
      document.querySelector('.navbar').classList.toggle('scrolled', window.scrollY > 50);
      document.getElementById('backTop').classList.toggle('show', window.scrollY > 300);
    });

    // Back to top
    document.getElementById('backTop').addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  </script>
</body>

</html>