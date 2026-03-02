<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projects - Anne Lorraine Ramos</title>
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="../images/logo.png">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:wght@500;600;700&display=swap"
    rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="home.php">
        <span class="logo">A<span class="logo-dot">.</span></span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <i class="bi bi-list" style="color: var(--cream); font-size: 1.5rem;"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-lg-center">
          <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="experience.php">Experience</a></li>
          <li class="nav-item"><a class="nav-link active" href="projects.php">Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="certificates.php">Certificates</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
          <li class="nav-item ms-lg-3">
            <a class="btn btn-resume" href="../assets/RAMOS_ANNE LORRAINE F._CV.pdf" target="_blank"><i
                class="bi bi-file-earmark-text"></i> Resume</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Projects Hero -->
  <section class="page-hero">
    <div class="hero-bg">
      <div class="blob blob-1"></div>
      <div class="blob blob-2"></div>
      <div class="blob blob-3"></div>
      <div class="leaf leaf-1"><i class="bi bi-leaf"></i></div>
      <div class="leaf leaf-2"><i class="bi bi-flower1"></i></div>
    </div>
    <div class="container">
      <div class="page-hero-content">
        <span class="section-tag">My Work</span>
        <h1 class="page-hero-title">Featured <span class="gradient-text">Projects</span></h1>
        <p class="page-hero-desc">A showcase of innovative solutions built with passion and technical excellence</p>
      </div>
    </div>
  </section>

  <!-- Project Stats -->
  <section class="experience-stats">
    <div class="container">
      <div class="exp-stats-grid">
        <div class="exp-stat-card">
          <div class="exp-stat-icon"><i class="bi bi-folder-check"></i></div>
          <div class="exp-stat-info">
            <span class="exp-stat-num">10+</span>
            <span class="exp-stat-label">Total Projects</span>
          </div>
        </div>
        <div class="exp-stat-card">
          <div class="exp-stat-icon"><i class="bi bi-globe"></i></div>
          <div class="exp-stat-info">
            <span class="exp-stat-num">8+</span>
            <span class="exp-stat-label">Web Applications</span>
          </div>
        </div>
        <div class="exp-stat-card">
          <div class="exp-stat-icon"><i class="bi bi-phone"></i></div>
          <div class="exp-stat-info">
            <span class="exp-stat-num">4+</span>
            <span class="exp-stat-label">Mobile Apps</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Project Timeline -->
  <section class="projects-showcase">
    <div class="container">
      <div class="text-center mb-5">
        <span class="section-tag">My Journey</span>
        <h2 class="section-title">Project <span class="gradient-text">Timeline</span></h2>
      </div>

      <!-- 2026 Projects -->
      <div class="project-year-section">
        <div class="year-badge">2026</div>
        <div class="projects-grid">
          <div class="project-card">
            <div class="project-card-icon">
              <i class="bi bi-phone"></i>
            </div>
            <div class="project-card-content">
              <span class="project-type">Mobile App</span>
              <h3>Lifeline</h3>
              <p>Personal safety and emergency assistance application with one-tap SOS activation, real-time location
                sharing, and emergency contact system.</p>
              <div class="project-tech">
                <span>Flutter</span>
                <span>Dart</span>
                <span>Firebase</span>
                <span>Google Maps API</span>
              </div>
              <div class="project-links">
                <a href="#lifelineGallery" class="project-link" onclick="openLifelineGallery(); return false;">
                  <i class="bi bi-images"></i> View Images
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 2025 Projects -->
      <div class="project-year-section">
        <div class="year-badge">2025</div>
        <div class="projects-grid">
          <div class="project-card has-link">
            <div class="project-card-icon">
              <i class="bi bi-globe"></i>
            </div>
            <div class="project-card-content">
              <span class="project-type">Website</span>
              <h3>Ravel</h3>
              <p>Dynamic job search platform connecting job seekers with employers. Features advanced filtering,
                application tracking, and employer analytics dashboard.</p>
              <div class="project-tech">
                <span>PHP</span>
                <span>Laravel</span>
                <span>MySQL</span>
                <span>Bootstrap</span>
              </div>
              <a href="../projects/ravel/index.php" target="_blank" class="project-link">
                <i class="bi bi-box-arrow-up-right"></i> View Project
              </a>
            </div>
          </div>
          <div class="project-card">
            <div class="project-card-icon">
              <i class="bi bi-cup-hot"></i>
            </div>
            <div class="project-card-content">
              <span class="project-type">Mobile App</span>
              <h3>Caffeinate Me</h3>
              <p>Coffee shop mobile application with menu browsing, order placement, loyalty rewards, and store locator
                features.</p>
              <div class="project-tech">
                <span>Flutter</span>
                <span>Dart</span>
                <span>Firebase</span>
                <span>Stripe API</span>
              </div>
              <div class="project-links">
                <a href="#caffeinateGallery" class="project-link" onclick="openCaffeinateGallery(); return false;">
                  <i class="bi bi-images"></i> View Images
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 2024 Projects -->
      <div class="project-year-section">
        <div class="year-badge">2024</div>
        <div class="projects-grid">
          <div class="project-card has-link">
            <div class="project-card-icon">
              <i class="bi bi-building"></i>
            </div>
            <div class="project-card-content">
              <span class="project-type">Website</span>
              <h3>Hotel Reservation</h3>
              <p>Comprehensive hotel booking system with room availability, reservation management, payment processing,
                and admin dashboard.</p>
              <div class="project-tech">
                <span>PHP</span>
                <span>Laravel</span>
                <span>MySQL</span>
                <span>Bootstrap</span>
              </div>
              <a href="../projects/hotel/index.html" target="_blank" class="project-link">
                <i class="bi bi-box-arrow-up-right"></i> View Project
              </a>
            </div>
          </div>
          <div class="project-card has-link">
            <div class="project-card-icon">
              <i class="bi bi-kanban"></i>
            </div>
            <div class="project-card-content">
              <span class="project-type">Mobile App</span>
              <h3>Mellow</h3>
              <p>Task management application with Kanban boards, smart reminders, team collaboration tools, and progress
                analytics.</p>
              <div class="project-tech">
                <span>React.js</span>
                <span>Node.js</span>
                <span>MongoDB</span>
                <span>Socket.io</span>
              </div>
              <div class="project-links">
                <a href="#mellowGallery" class="project-link" onclick="openMellowGallery(); return false;">
                  <i class="bi bi-images"></i> View Images
                </a>
                <a href="../projects/mellow/index.html" target="_blank" class="project-link">
                  <i class="bi bi-box-arrow-up-right"></i> View Project
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 2023 Projects -->
      <div class="project-year-section">
        <div class="year-badge">2023</div>
        <div class="projects-grid">
          <div class="project-card">
            <div class="project-card-icon">
              <i class="bi bi-bank"></i>
            </div>
            <div class="project-card-content">
              <span class="project-type">Website</span>
              <h3>Barangay 781 Zone 85</h3>
              <p>Local government management system with resident database, permit processing, event scheduling, and
                administrative reporting.</p>
              <div class="project-tech">
                <span>PHP</span>
                <span>Laravel</span>
                <span>MySQL</span>
                <span>Chart.js</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 2022 Projects -->
      <div class="project-year-section">
        <div class="year-badge">2022</div>
        <div class="projects-grid">
          <div class="project-card has-link">
            <div class="project-card-icon">
              <i class="bi bi-question-circle"></i>
            </div>
            <div class="project-card-content">
              <span class="project-type">Website</span>
              <h3>Quiz Me</h3>
              <p>Interactive quiz platform with multiple question types, timed assessments, score tracking, and
                leaderboard functionality.</p>
              <div class="project-tech">
                <span>PHP</span>
                <span>MySQL</span>
                <span>JavaScript</span>
                <span>Bootstrap</span>
              </div>
              <a href="../projects/quiz%20me/index.php" target="_blank" class="project-link">
                <i class="bi bi-box-arrow-up-right"></i> View Project
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- 2021 Projects -->
      <div class="project-year-section">
        <div class="year-badge">2021</div>
        <div class="projects-grid">
          <div class="project-card has-link">
            <div class="project-card-icon">
              <i class="bi bi-bag"></i>
            </div>
            <div class="project-card-content">
              <span class="project-type">Website</span>
              <h3>AK & Co</h3>
              <p>Professional e-commerce website with responsive design, product catalog, shopping cart, and checkout
                system.</p>
              <div class="project-tech">
                <span>HTML/CSS</span>
                <span>JavaScript</span>
                <span>PHP</span>
                <span>MySQL</span>
              </div>
              <a href="../projects/ak/php/home.php" target="_blank" class="project-link">
                <i class="bi bi-box-arrow-up-right"></i> View Project
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Mellow Image Gallery Modal -->
  <div id="melowGalleryModal" class="gallery-modal">
    <div class="gallery-modal-content">
      <button class="gallery-close-btn" onclick="closeMellowGallery()">&times;</button>
      <div class="gallery-container">
        <img id="galleryImg" src="" alt="Mellow App Screenshot" class="gallery-img">
        <div class="gallery-nav">
          <button class="gallery-btn prev" onclick="prevMellowImage()">&lt;</button>
          <button class="gallery-btn next" onclick="nextMellowImage()">&gt;</button>
        </div>
        <div class="gallery-counter">
          <span id="imgCounter">1 / 34</span>
        </div>
        <div class="gallery-thumbnails">
          <div class="thumbnails-scroll" id="thumbnailsContainer"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Lifeline Image Gallery Modal -->
  <div id="lifelineGalleryModal" class="gallery-modal">
    <div class="gallery-modal-content">
      <button class="gallery-close-btn" onclick="closeLifelineGallery()">&times;</button>
      <div class="gallery-container">
        <img id="lifelineGalleryImg" src="" alt="Lifeline App Screenshot" class="gallery-img">
        <div class="gallery-nav">
          <button class="gallery-btn prev" onclick="prevLifelineImage()">&lt;</button>
          <button class="gallery-btn next" onclick="nextLifelineImage()">&gt;</button>
        </div>
        <div class="gallery-counter">
          <span id="lifelineImgCounter">1 / 13</span>
        </div>
        <div class="gallery-thumbnails">
          <div class="thumbnails-scroll" id="lifelineThumbnailsContainer"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Caffeinate Me Image Gallery Modal -->
  <div id="caffeinateGalleryModal" class="gallery-modal">
    <div class="gallery-modal-content">
      <button class="gallery-close-btn" onclick="closeCaffeinateGallery()">&times;</button>
      <div class="gallery-container">
        <img id="caffeinateGalleryImg" src="" alt="Caffeinate Me App Screenshot" class="gallery-img">
        <div class="gallery-nav">
          <button class="gallery-btn prev" onclick="prevCaffeinateImage()">&lt;</button>
          <button class="gallery-btn next" onclick="nextCaffeinateImage()">&gt;</button>
        </div>
        <div class="gallery-counter">
          <span id="caffeinateImgCounter">1 / 16</span>
        </div>
        <div class="gallery-thumbnails">
          <div class="thumbnails-scroll" id="caffeinateThumbnailsContainer"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- CTA Section -->
  <section class="cta">
    <div class="cta-bg">
      <div class="cta-blob"></div>
    </div>
    <div class="container">
      <div class="cta-content">
        <h2>Have a Project <span class="gradient-text">in Mind?</span></h2>
        <p>I'm always excited to work on new challenges. Let's discuss how I can help bring your ideas to life.</p>
        <div class="cta-actions">
          <a href="contact.php" class="btn btn-light"><i class="bi bi-envelope"></i> Start a Conversation</a>
          <a href="https://github.com/p0laris09" class="btn btn-ghost" target="_blank"><i class="bi bi-github"></i> View
            GitHub</a>
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
          <p>Crafting digital experiences with passion and precision. Let's build something amazing together.</p>
          <div class="footer-socials">
            <a href="https://www.linkedin.com/in/anne-lorraine-ramos-596b5b330/" target="_blank"><i
                class="bi bi-linkedin"></i></a>
            <a href="https://github.com/p0laris09" target="_blank"><i class="bi bi-github"></i></a>
          </div>
        </div>
        <div class="footer-links">
          <h5>Quick Links</h5>
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="experience.php">Experience</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="certificates.php">Certificates</a></li>
          </ul>
        </div>
        <div class="footer-contact">
          <h5>Get In Touch</h5>
          <ul>
            <li><i class="bi bi-envelope"></i> annelorraineramos@gmail.com</li>
            <li><i class="bi bi-telephone"></i> +63 (946) 542-0123</li>
            <li><i class="bi bi-geo-alt"></i> Philippines</li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2025 Anne Lorraine Ramos. All rights reserved.</p>
        <p>Made with <i class="bi bi-heart-fill"></i> and lots of coffee</p>
      </div>
    </div>
  </footer>

  <!-- Back to Top -->
  <button class="back-top" id="backTop"><i class="bi bi-arrow-up"></i></button>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Navbar scroll effect
    window.addEventListener('scroll', () => {
      const navbar = document.querySelector('.navbar');
      navbar.classList.toggle('scrolled', window.scrollY > 50);
    });

    // Back to top
    const backTop = document.getElementById('backTop');
    window.addEventListener('scroll', () => {
      backTop.classList.toggle('show', window.scrollY > 300);
    });
    backTop.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Mellow Image Gallery
    const mellowImages = [
      '01_ONBOARDING PAGE.png',
      '02_SIGN UP PAGE PERSONAL DETAILS.png',
      '03_SIGN UP COLLEGE DETAILS.png',
      '04_Sign Up Contact Details v2.png',
      '05_Sign Up Review Details v2.png',
      '06_Privacy Policy v2.png',
      '07_Terms of Service v2.png',
      '08_Sign In v2.png',
      '09_Forgot Password v2.png',
      '10_Password Reset.png',
      '11_Email Verification.png',
      '12_Settings Drawer v2.png',
      '13_Notifications v2.png',
      '14_Dashboard.png',
      '15_Task Management.png',
      '16_Task Management.png',
      '17_Task History.png',
      '19_Task History.png',
      '20_Task History.png',
      '21_Task History.png',
      '22_Frame 2615.png',
      '23_Frame 2616.png',
      '24_Task Creation (Personal).png',
      '25_Task Creation (Shared Task).png',
      '26_Task Creation (Collaboration Space).png',
      '27_Share Space v2.png',
      '28_Share Space v2.png',
      '29_Space Creation.png',
      '30_View Space.png',
      '31_View Space.png',
      '32_Task Preference.png',
      '33_Task Preference.png',
      '34_Task Preference.png'
    ];

    let currentImageIndex = 0;
    const basePath = '../assets/Mellow/';

    function openMellowGallery() {
      const modal = document.getElementById('melowGalleryModal');
      modal.style.display = 'flex';
      currentImageIndex = 0;
      displayMellowImage();
      generateThumbnails();
      document.body.style.overflow = 'hidden';
    }

    function closeMellowGallery() {
      const modal = document.getElementById('melowGalleryModal');
      modal.style.display = 'none';
      document.body.style.overflow = 'auto';
    }

    function displayMellowImage() {
      const img = document.getElementById('galleryImg');
      const counter = document.getElementById('imgCounter');
      img.src = basePath + mellowImages[currentImageIndex];
      counter.textContent = (currentImageIndex + 1) + ' / ' + mellowImages.length;
      updateThumbnailSelection();
    }

    function nextMellowImage() {
      currentImageIndex = (currentImageIndex + 1) % mellowImages.length;
      displayMellowImage();
    }

    function prevMellowImage() {
      currentImageIndex = (currentImageIndex - 1 + mellowImages.length) % mellowImages.length;
      displayMellowImage();
    }

    function generateThumbnails() {
      const container = document.getElementById('thumbnailsContainer');
      container.innerHTML = '';
      mellowImages.forEach((img, index) => {
        const thumb = document.createElement('img');
        thumb.src = basePath + img;
        thumb.alt = 'Thumbnail ' + (index + 1);
        thumb.className = 'gallery-thumbnail';
        thumb.style.cursor = 'pointer';
        thumb.onclick = () => {
          currentImageIndex = index;
          displayMellowImage();
        };
        container.appendChild(thumb);
      });
    }

    function updateThumbnailSelection() {
      const thumbnails = document.querySelectorAll('.gallery-thumbnail');
      thumbnails.forEach((thumb, index) => {
        thumb.style.opacity = index === currentImageIndex ? '1' : '0.5';
      });
    }

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
      const modal = document.getElementById('melowGalleryModal');
      if (modal.style.display === 'flex') {
        if (e.key === 'ArrowRight') nextMellowImage();
        if (e.key === 'ArrowLeft') prevMellowImage();
        if (e.key === 'Escape') closeMellowGallery();
      }
    });

    // Close modal when clicking outside
    document.getElementById('melowGalleryModal').addEventListener('click', (e) => {
      if (e.target.id === 'melowGalleryModal') {
        closeMellowGallery();
      }
    });

    // Lifeline Image Gallery
    const lifelineImages = [
      '01_Splash Screen.png',
      '02_Onboarding 1.png',
      '03_Onboarding 2.png',
      '04_Onboarding 3.png',
      '05_Sign Up.png',
      '06_Log In.png',
      '07_Container-6.png',
      '08_Container.png',
      '09_Container-1.png',
      '10_Container-2.png',
      '11_Container-3.png',
      '12_Container-4.png',
      '13_Container-5.png'
    ];

    let currentLifelineImageIndex = 0;
    const lifelineBasePath = '../assets/Lifeline/';

    function openLifelineGallery() {
      const modal = document.getElementById('lifelineGalleryModal');
      modal.style.display = 'flex';
      currentLifelineImageIndex = 0;
      displayLifelineImage();
      generateLifelineThumbnails();
      document.body.style.overflow = 'hidden';
    }

    function closeLifelineGallery() {
      const modal = document.getElementById('lifelineGalleryModal');
      modal.style.display = 'none';
      document.body.style.overflow = 'auto';
    }

    function displayLifelineImage() {
      const img = document.getElementById('lifelineGalleryImg');
      const counter = document.getElementById('lifelineImgCounter');
      img.src = lifelineBasePath + lifelineImages[currentLifelineImageIndex];
      counter.textContent = (currentLifelineImageIndex + 1) + ' / ' + lifelineImages.length;
      updateLifelineThumbnailSelection();
    }

    function nextLifelineImage() {
      currentLifelineImageIndex = (currentLifelineImageIndex + 1) % lifelineImages.length;
      displayLifelineImage();
    }

    function prevLifelineImage() {
      currentLifelineImageIndex = (currentLifelineImageIndex - 1 + lifelineImages.length) % lifelineImages.length;
      displayLifelineImage();
    }

    function generateLifelineThumbnails() {
      const container = document.getElementById('lifelineThumbnailsContainer');
      container.innerHTML = '';
      lifelineImages.forEach((img, index) => {
        const thumb = document.createElement('img');
        thumb.src = lifelineBasePath + img;
        thumb.alt = 'Thumbnail ' + (index + 1);
        thumb.className = 'gallery-thumbnail';
        thumb.style.cursor = 'pointer';
        thumb.onclick = () => {
          currentLifelineImageIndex = index;
          displayLifelineImage();
        };
        container.appendChild(thumb);
      });
    }

    function updateLifelineThumbnailSelection() {
      const thumbnails = document.querySelectorAll('#lifelineThumbnailsContainer .gallery-thumbnail');
      thumbnails.forEach((thumb, index) => {
        thumb.style.opacity = index === currentLifelineImageIndex ? '1' : '0.5';
      });
    }

    // Close lifeline modal when clicking outside
    document.getElementById('lifelineGalleryModal').addEventListener('click', (e) => {
      if (e.target.id === 'lifelineGalleryModal') {
        closeLifelineGallery();
      }
    });

    // Caffeinate Me Image Gallery
    const caffeinateImages = [
      '01_Onboarding 1.png',
      '02_Sign in.png',
      '03_Sign Up.png',
      '04_Sweetness Level.png',
      '05_Taste Preference.png',
      '06_Allergies.png',
      '07_Coffee Preference.png',
      '08_Home.png',
      '09_Profile - Taste Preference.png',
      '10_Profile - Reviews.png',
      '11_Profile - Visits.png',
      '12_Serach Results.png',
      '13_Detail Item.png',
      '14_Integrated Map.png',
      '15_Bookmarks.png',
      '16_Community.png'
    ];

    let currentCaffeinateImageIndex = 0;
    const caffeinateBasePath = '../assets/Caffeinate Me/';

    function openCaffeinateGallery() {
      const modal = document.getElementById('caffeinateGalleryModal');
      modal.style.display = 'flex';
      currentCaffeinateImageIndex = 0;
      displayCaffeinateImage();
      generateCaffeinateThumbnails();
      document.body.style.overflow = 'hidden';
    }

    function closeCaffeinateGallery() {
      const modal = document.getElementById('caffeinateGalleryModal');
      modal.style.display = 'none';
      document.body.style.overflow = 'auto';
    }

    function displayCaffeinateImage() {
      const img = document.getElementById('caffeinateGalleryImg');
      const counter = document.getElementById('caffeinateImgCounter');
      img.src = caffeinateBasePath + caffeinateImages[currentCaffeinateImageIndex];
      counter.textContent = (currentCaffeinateImageIndex + 1) + ' / ' + caffeinateImages.length;
      updateCaffeinateThumbnailSelection();
    }

    function nextCaffeinateImage() {
      currentCaffeinateImageIndex = (currentCaffeinateImageIndex + 1) % caffeinateImages.length;
      displayCaffeinateImage();
    }

    function prevCaffeinateImage() {
      currentCaffeinateImageIndex = (currentCaffeinateImageIndex - 1 + caffeinateImages.length) % caffeinateImages.length;
      displayCaffeinateImage();
    }

    function generateCaffeinateThumbnails() {
      const container = document.getElementById('caffeinateThumbnailsContainer');
      container.innerHTML = '';
      caffeinateImages.forEach((img, index) => {
        const thumb = document.createElement('img');
        thumb.src = caffeinateBasePath + img;
        thumb.alt = 'Thumbnail ' + (index + 1);
        thumb.className = 'gallery-thumbnail';
        thumb.style.cursor = 'pointer';
        thumb.onclick = () => {
          currentCaffeinateImageIndex = index;
          displayCaffeinateImage();
        };
        container.appendChild(thumb);
      });
    }

    function updateCaffeinateThumbnailSelection() {
      const thumbnails = document.querySelectorAll('#caffeinateThumbnailsContainer .gallery-thumbnail');
      thumbnails.forEach((thumb, index) => {
        thumb.style.opacity = index === currentCaffeinateImageIndex ? '1' : '0.5';
      });
    }

    // Close caffeinate modal when clicking outside
    document.getElementById('caffeinateGalleryModal').addEventListener('click', (e) => {
      if (e.target.id === 'caffeinateGalleryModal') {
        closeCaffeinateGallery();
      }
    });

    // Enhanced keyboard navigation for all galleries
    document.addEventListener('keydown', (e) => {
      const mellowModal = document.getElementById('melowGalleryModal');
      const lifelineModal = document.getElementById('lifelineGalleryModal');
      const caffeinateModal = document.getElementById('caffeinateGalleryModal');

      if (mellowModal.style.display === 'flex') {
        if (e.key === 'ArrowRight') nextMellowImage();
        if (e.key === 'ArrowLeft') prevMellowImage();
        if (e.key === 'Escape') closeMellowGallery();
      } else if (lifelineModal.style.display === 'flex') {
        if (e.key === 'ArrowRight') nextLifelineImage();
        if (e.key === 'ArrowLeft') prevLifelineImage();
        if (e.key === 'Escape') closeLifelineGallery();
      } else if (caffeinateModal.style.display === 'flex') {
        if (e.key === 'ArrowRight') nextCaffeinateImage();
        if (e.key === 'ArrowLeft') prevCaffeinateImage();
        if (e.key === 'Escape') closeCaffeinateGallery();
      }
    }, true);
  </script>
</body>

</html>