<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anne Lorraine Ramos - Full Stack Developer</title>
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
          <li class="nav-item"><a class="nav-link active" href="home.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="experience.php">Experience</a></li>
          <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="certificates.php">Certificates</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
        <a href="../assets/RAMOS_ANNE LORRAINE F._CV.pdf" class="btn-resume" target="_blank">
          <i class="bi bi-download"></i> Resume
        </a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-bg">
      <div class="blob blob-1"></div>
      <div class="blob blob-2"></div>
      <div class="blob blob-3"></div>
      <div class="leaf leaf-1"><i class="bi bi-flower1"></i></div>
      <div class="leaf leaf-2"><i class="bi bi-flower2"></i></div>
      <div class="leaf leaf-3"><i class="bi bi-flower3"></i></div>
    </div>
    <div class="container">
      <div class="row align-items-center min-vh-100">
        <div class="col-lg-7">
          <div class="hero-content">
            <div class="hero-badge">
              <span class="pulse-dot"></span>
              Open for projects
            </div>
            <h1 class="hero-title">
              Hello, I'm<br>
              <span class="gradient-text">Anne Lorraine</span>
            </h1>
            <div class="hero-role">
              <span class="role-text" id="roleText">Full Stack Developer</span>
              <span class="cursor">|</span>
            </div>
            <p class="hero-desc">
              I design and build beautiful digital products that solve real problems.
              Passionate about creating seamless user experiences through clean code
              and thoughtful design.
            </p>
            <div class="hero-actions">
              <a href="projects.php" class="btn-primary">
                <i class="bi bi-collection"></i> View Projects
              </a>
              <a href="contact.php" class="btn-secondary">
                <i class="bi bi-chat-heart"></i> Say Hello
              </a>
            </div>
            <div class="hero-socials">
              <a href="https://github.com/p0laris09" aria-label="GitHub" target="_blank"><i
                  class="bi bi-github"></i></a>
              <a href="https://www.linkedin.com/in/anne-lorraine-ramos-596b5b330/" aria-label="LinkedIn"
                target="_blank"><i class="bi bi-linkedin"></i></a>
              <a href="mailto:annelorraineramos@gmail.com" aria-label="Email"><i class="bi bi-envelope"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="hero-visual">
            <div class="profile-frame">
              <div class="frame-glow"></div>
              <img src="../images/girl-in-phone.png" alt="Anne Lorraine Ramos" class="profile-img">
            </div>
            <div class="frame-ring"></div>
            <div class="float-card card-top">
              <i class="bi bi-code-slash"></i>
              <div>
                <span class="card-num">10+</span>
                <span class="card-label">Projects</span>
              </div>
            </div>
            <div class="float-card card-bottom">
              <i class="bi bi-phone"></i>
              <div>
                <span class="card-num">Mobile</span>
                <span class="card-label">& Web Dev</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="scroll-hint">
      <div class="mouse"></div>
      <span>Scroll</span>
    </div>
  </section>

  <!-- About Preview -->
  <section class="about-preview">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <div class="about-image">
            <div class="img-frame">
              <img src="../images/361_RAMOS_ANN_LORAINE22233.JPG" alt="About Anne">
            </div>
            <div class="exp-badge">
              <span class="exp-num">2+</span>
              <span class="exp-text">Years<br>Experience</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <span class="section-tag">About Me</span>
            <h2 class="section-title">
              Crafting Digital<br>
              <span class="gradient-text">Experiences</span>
            </h2>
            <p class="about-text">
              I'm a passionate Full Stack Developer based in Manila, Philippines.
              I specialize in creating responsive web applications and mobile apps
              that not only look great but provide exceptional user experiences.
            </p>
            <p class="about-text">
              With expertise in modern frameworks and a keen eye for design,
              I transform ideas into functional, beautiful digital solutions.
            </p>
            <a href="about.php" class="link-arrow">
              More about me <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-item">
          <div class="stat-icon"><i class="bi bi-briefcase"></i></div>
          <span class="stat-num" data-count="2">0</span>
          <span class="stat-label">Years Experience</span>
        </div>
        <div class="stat-item">
          <div class="stat-icon"><i class="bi bi-folder2-open"></i></div>
          <span class="stat-num" data-count="10">0</span>
          <span class="stat-label">Projects Done</span>
        </div>
        <div class="stat-item">
          <div class="stat-icon"><i class="bi bi-award"></i></div>
          <span class="stat-num" data-count="5">0</span>
          <span class="stat-label">Certifications</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Skills -->
  <section class="skills">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">What I Do</span>
        <h2 class="section-title">My <span class="gradient-text">Tech Stack</span></h2>
        <p class="section-desc">Technologies I use to bring ideas to life</p>
      </div>
      <div class="skills-grid">
        <div class="skill-card">
          <div class="skill-icon"><i class="bi bi-palette2"></i></div>
          <h3>Frontend</h3>
          <div class="skill-tags">
            <span>HTML5</span><span>CSS3</span><span>JavaScript</span>
            <span>React</span><span>Bootstrap</span><span>Tailwind</span>
          </div>
        </div>
        <div class="skill-card">
          <div class="skill-icon"><i class="bi bi-server"></i></div>
          <h3>Backend</h3>
          <div class="skill-tags">
            <span>PHP</span><span>Node.js</span><span>Laravel</span>
            <span>Express</span><span>REST API</span>
          </div>
        </div>
        <div class="skill-card">
          <div class="skill-icon"><i class="bi bi-phone"></i></div>
          <h3>Mobile</h3>
          <div class="skill-tags">
            <span>Flutter</span><span>Dart</span><span>React Native</span>
            <span>Android Studio</span>
          </div>
        </div>
        <div class="skill-card">
          <div class="skill-icon"><i class="bi bi-database"></i></div>
          <h3>Database & Tools</h3>
          <div class="skill-tags">
            <span>MySQL</span><span>MongoDB</span><span>Firebase</span>
            <span>Git</span><span>Figma</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects -->
  <section class="projects">
    <div class="container">
      <div class="section-header">
        <div class="header-left">
          <span class="section-tag">Portfolio</span>
          <h2 class="section-title">Featured <span class="gradient-text">Projects</span></h2>
        </div>
        <a href="projects.php" class="link-arrow">
          View all <i class="bi bi-arrow-right"></i>
        </a>
      </div>
      <div class="projects-grid">
        <!-- Project 1 -->
        <div class="project-card">
          <div class="project-preview">
            <div class="browser-mockup">
              <div class="browser-header">
                <span class="dot red"></span>
                <span class="dot yellow"></span>
                <span class="dot green"></span>
                <span class="url">ravelsolutions.com</span>
              </div>
              <div class="browser-body">
                <div class="mock-header"></div>
                <div class="mock-hero">
                  <div class="mock-line lg"></div>
                  <div class="mock-line md"></div>
                  <div class="mock-btn"></div>
                </div>
                <div class="mock-grid">
                  <div class="mock-card"></div>
                  <div class="mock-card"></div>
                  <div class="mock-card"></div>
                </div>
              </div>
            </div>
            <div class="project-overlay">
              <a href="../projects/ravel/index.php" target="_blank" class="overlay-btn"><i
                  class="bi bi-arrow-up-right"></i></a>
              <a href="https://github.com/p0laris09/Ravel" target="_blank" class="overlay-btn ghost"><i
                  class="bi bi-github"></i></a>
            </div>
          </div>
          <div class="project-info">
            <div class="project-tags">
              <span>PHP</span><span>MySQL</span><span>Bootstrap</span>
            </div>
            <h3>Ravel Solutions</h3>
            <p>A comprehensive job search platform connecting job seekers with employers.</p>
          </div>
        </div>

        <!-- Project 2 -->
        <div class="project-card">
          <div class="project-preview">
            <div class="phone-mockup">
              <div class="phone-notch"></div>
              <div class="phone-body">
                <div class="app-bar">
                  <div class="app-icon emergency"></div>
                  <div class="mock-line sm"></div>
                </div>
                <div class="app-content">
                  <div class="sos-btn"><i class="bi bi-exclamation-triangle"></i></div>
                  <div class="mock-line md center"></div>
                  <div class="contact-row">
                    <div class="contact-item"></div>
                    <div class="contact-item"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="project-overlay">
              <a href="projects.php#lifeline" class="overlay-btn"><i class="bi bi-images"></i></a>
            </div>
          </div>
          <div class="project-info">
            <div class="project-tags">
              <span>Flutter</span><span>Firebase</span><span>Dart</span>
            </div>
            <h3>Lifeline</h3>
            <p>Emergency response app with real-time alerts and quick access to help.</p>
          </div>
        </div>

        <!-- Project 3 -->
        <div class="project-card">
          <div class="project-preview">
            <div class="browser-mockup dark">
              <div class="browser-header">
                <span class="dot red"></span>
                <span class="dot yellow"></span>
                <span class="dot green"></span>
                <span class="url">mellow.app</span>
              </div>
              <div class="browser-body">
                <div class="task-header">
                  <div class="avatar"></div>
                  <div class="mock-line sm"></div>
                </div>
                <div class="task-list">
                  <div class="task done"><i class="bi bi-check-circle-fill"></i></div>
                  <div class="task done"><i class="bi bi-check-circle-fill"></i></div>
                  <div class="task"><i class="bi bi-circle"></i></div>
                </div>
                <div class="progress-bar">
                  <div class="progress-fill"></div>
                </div>
              </div>
            </div>
            <div class="project-overlay">
              <a href="../projects/mellow/index.html" target="_blank" class="overlay-btn"><i
                  class="bi bi-arrow-up-right"></i></a>
              <a href="https://github.com/p0laris09/mellow-admin" target="_blank" class="overlay-btn ghost"><i
                  class="bi bi-github"></i></a>
            </div>
          </div>
          <div class="project-info">
            <div class="project-tags">
              <span>React</span><span>Node.js</span><span>MongoDB</span>
            </div>
            <h3>Mellow</h3>
            <p>Smart task management with intelligent reminders and automation.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Experience -->
  <section class="experience">
    <div class="container">
      <div class="section-header center">
        <span class="section-tag">Journey</span>
        <h2 class="section-title">Work <span class="gradient-text">Experience</span></h2>
      </div>
      <div class="timeline">
        <div class="timeline-item">
          <div class="timeline-marker"></div>
          <div class="timeline-card">
            <div class="card-header">
              <div>
                <h4>Ortadel Technologies Corporation</h4>
                <p class="role">IT Intern</p>
              </div>
              <span class="date"><i class="bi bi-calendar3"></i> Feb 2025 – May 2025</span>
            </div>
            <p class="desc">Collaborated on enterprise web applications using modern development workflows and best
              practices.</p>
            <div class="card-tags">
              <span>Web Development</span><span>Agile</span><span>Teamwork</span>
            </div>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-marker"></div>
          <div class="timeline-card">
            <div class="card-header">
              <div>
                <h4>Barangay 781 Zone 85</h4>
                <p class="role">Backend Developer</p>
              </div>
              <span class="date"><i class="bi bi-calendar3"></i> Sep 2023 – Jun 2024</span>
            </div>
            <p class="desc">Developed backend systems for community management with secure APIs and database solutions.
            </p>
            <div class="card-tags">
              <span>PHP</span><span>MySQL</span><span>API Development</span>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-5">
        <a href="experience.php" class="btn-secondary">
          <i class="bi bi-arrow-right"></i> View Full Experience
        </a>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta">
    <div class="cta-bg">
      <div class="cta-blob"></div>
    </div>
    <div class="container">
      <div class="cta-content">
        <h2>Let's Work Together</h2>
        <p>Have a project in mind? I'm available for freelance work and exciting opportunities.</p>
        <div class="cta-actions">
          <a href="contact.php" class="btn-light"><i class="bi bi-send"></i> Get In Touch</a>
          <a href="../assets/RAMOS_ANNE LORRAINE F._CV.pdf" class="btn-ghost" target="_blank"><i
              class="bi bi-download"></i> Download CV</a>
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
    // Typing Animation
    const roles = ['Full Stack Developer', 'Mobile Developer', 'UI/UX Enthusiast', 'Problem Solver'];
    let roleIndex = 0, charIndex = 0, isDeleting = false;
    const roleText = document.getElementById('roleText');

    function type() {
      const current = roles[roleIndex];
      roleText.textContent = isDeleting
        ? current.substring(0, charIndex--)
        : current.substring(0, charIndex++);

      if (!isDeleting && charIndex === current.length) {
        setTimeout(() => isDeleting = true, 2000);
      } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        roleIndex = (roleIndex + 1) % roles.length;
      }
      setTimeout(type, isDeleting ? 50 : 100);
    }
    type();

    // Navbar scroll
    window.addEventListener('scroll', () => {
      document.querySelector('.navbar').classList.toggle('scrolled', window.scrollY > 50);
      document.getElementById('backTop').classList.toggle('show', window.scrollY > 300);
    });

    // Back to top
    document.getElementById('backTop').addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Stats counter
    const animateStats = () => {
      document.querySelectorAll('.stat-num').forEach(el => {
        const target = +el.dataset.count;
        let current = 0;
        const increment = target / 50;
        const update = () => {
          current += increment;
          el.textContent = current < target ? Math.floor(current) : target + '+';
          if (current < target) requestAnimationFrame(update);
        };
        update();
      });
    };

    new IntersectionObserver(entries => {
      if (entries[0].isIntersecting) animateStats();
    }, { threshold: 0.5 }).observe(document.querySelector('.stats'));
  </script>
</body>

</html>