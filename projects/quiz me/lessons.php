<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<main>
    <div class="container">
        <!-- Page Header -->
        <div class="text-center mb-5" data-aos="fade-up">
            <h1 class="display-4 fw-bold">Our Lessons</h1>
            <p class="lead text-muted">Choose from our comprehensive collection of programming lessons</p>
        </div>

        <!-- Search and Filter -->
        <div class="row mb-4" data-aos="fade-up">
            <div class="col-md-6 mx-auto">
                <div class="input-group">
                    <input type="text" id="searchInput" class="form-control form-control-custom" placeholder="Search lessons...">
                    <button class="btn btn-primary-custom" type="button" id="searchBtn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Categories -->
        <div class="d-flex justify-content-center gap-2 mb-5 flex-wrap" data-aos="fade-up" id="filterButtons">
            <button class="btn btn-primary-custom btn-custom filter-btn active" data-filter="all">All</button>
            <button class="btn btn-outline-secondary btn-custom filter-btn" data-filter="php">PHP</button>
            <button class="btn btn-outline-secondary btn-custom filter-btn" data-filter="javascript">JavaScript</button>
            <button class="btn btn-outline-secondary btn-custom filter-btn" data-filter="css">CSS</button>
            <button class="btn btn-outline-secondary btn-custom filter-btn" data-filter="html">HTML</button>
            <button class="btn btn-outline-secondary btn-custom filter-btn" data-filter="python">Python</button>
            <button class="btn btn-outline-secondary btn-custom filter-btn" data-filter="sql">SQL</button>
        </div>

        <!-- Lessons Grid -->
        <div class="row g-4" id="lessonsGrid">
            <!-- Lesson 1 -->
            <div class="col-md-6 col-lg-4 lesson-card" data-aos="fade-up" data-category="php">
                <div class="glass-card h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="feature-icon me-3">
                            <i class="fab fa-php"></i>
                        </div>
                        <h4 class="mb-0 lesson-title">PHP Fundamentals</h4>
                    </div>
                    <p class="text-muted mb-3 lesson-desc">Learn the basics of PHP programming including syntax, variables, and
                        functions.</p>
                    <div class="mb-3">
                        <span class="badge-custom badge-beginner me-2">Beginner</span>
                        <span><i class="far fa-clock text-muted"></i> 15 lessons</span>
                    </div>
                    <div class="progress-custom mb-2">
                        <div class="progress-bar-custom" style="width: 75%"></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted">75% complete</small>
                        <small class="text-muted">Prof. Dr. Smith</small>
                    </div>
                    <button class="btn btn-primary-custom btn-custom w-100">
                        Continue Learning
                    </button>
                </div>
            </div>

            <!-- Lesson 2 -->
            <div class="col-md-6 col-lg-4 lesson-card" data-aos="fade-up" data-aos-delay="100" data-category="css">
                <div class="glass-card h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="feature-icon me-3">
                            <i class="fab fa-css3-alt"></i>
                        </div>
                        <h4 class="mb-0 lesson-title">CSS Mastery</h4>
                    </div>
                    <p class="text-muted mb-3 lesson-desc">Advanced CSS techniques, flexbox, grid, animations, and responsive
                        design.</p>
                    <div class="mb-3">
                        <span class="badge-custom badge-intermediate me-2">Intermediate</span>
                        <span><i class="far fa-clock text-muted"></i> 20 lessons</span>
                    </div>
                    <div class="progress-custom mb-2">
                        <div class="progress-bar-custom" style="width: 45%"></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted">45% complete</small>
                        <small class="text-muted">Prof. Johnson</small>
                    </div>
                    <button class="btn btn-primary-custom btn-custom w-100">
                        Continue Learning
                    </button>
                </div>
            </div>

            <!-- Lesson 3 -->
            <div class="col-md-6 col-lg-4 lesson-card" data-aos="fade-up" data-aos-delay="200" data-category="javascript">
                <div class="glass-card h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="feature-icon me-3">
                            <i class="fab fa-js"></i>
                        </div>
                        <h4 class="mb-0 lesson-title">JavaScript Essentials</h4>
                    </div>
                    <p class="text-muted mb-3 lesson-desc">Modern JavaScript including ES6+, promises, async/await, and DOM
                        manipulation.</p>
                    <div class="mb-3">
                        <span class="badge-custom badge-advanced me-2">Advanced</span>
                        <span><i class="far fa-clock text-muted"></i> 25 lessons</span>
                    </div>
                    <div class="progress-custom mb-2">
                        <div class="progress-bar-custom" style="width: 30%"></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted">30% complete</small>
                        <small class="text-muted">Dr. Williams</small>
                    </div>
                    <button class="btn btn-primary-custom btn-custom w-100">
                        Start Learning
                    </button>
                </div>
            </div>

            <!-- Lesson 4 -->
            <div class="col-md-6 col-lg-4 lesson-card" data-aos="fade-up" data-category="html">
                <div class="glass-card h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="feature-icon me-3">
                            <i class="fab fa-html5"></i>
                        </div>
                        <h4 class="mb-0 lesson-title">HTML5 & Semantic Web</h4>
                    </div>
                    <p class="text-muted mb-3 lesson-desc">Master HTML5 elements, semantic markup, forms, and best practices.</p>
                    <div class="mb-3">
                        <span class="badge-custom badge-beginner me-2">Beginner</span>
                        <span><i class="far fa-clock text-muted"></i> 12 lessons</span>
                    </div>
                    <div class="progress-custom mb-2">
                        <div class="progress-bar-custom" style="width: 90%"></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted">90% complete</small>
                        <small class="text-muted">Prof. Davis</small>
                    </div>
                    <button class="btn btn-primary-custom btn-custom w-100">
                        Continue Learning
                    </button>
                </div>
            </div>

            <!-- Lesson 5 -->
            <div class="col-md-6 col-lg-4 lesson-card" data-aos="fade-up" data-aos-delay="100" data-category="python">
                <div class="glass-card h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="feature-icon me-3">
                            <i class="fab fa-python"></i>
                        </div>
                        <h4 class="mb-0 lesson-title">Python for Beginners</h4>
                    </div>
                    <p class="text-muted mb-3 lesson-desc">Introduction to Python programming, data structures, and algorithms.</p>
                    <div class="mb-3">
                        <span class="badge-custom badge-beginner me-2">Beginner</span>
                        <span><i class="far fa-clock text-muted"></i> 18 lessons</span>
                    </div>
                    <div class="progress-custom mb-2">
                        <div class="progress-bar-custom" style="width: 0%"></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted">Not started</small>
                        <small class="text-muted">Dr. Brown</small>
                    </div>
                    <button class="btn btn-primary-custom btn-custom w-100">
                        Start Learning
                    </button>
                </div>
            </div>

            <!-- Lesson 6 -->
            <div class="col-md-6 col-lg-4 lesson-card" data-aos="fade-up" data-aos-delay="200" data-category="sql">
                <div class="glass-card h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-database"></i>
                        </div>
                        <h4 class="mb-0 lesson-title">SQL & Databases</h4>
                    </div>
                    <p class="text-muted mb-3 lesson-desc">Learn database design, SQL queries, and database management systems.</p>
                    <div class="mb-3">
                        <span class="badge-custom badge-intermediate me-2">Intermediate</span>
                        <span><i class="far fa-clock text-muted"></i> 22 lessons</span>
                    </div>
                    <div class="progress-custom mb-2">
                        <div class="progress-bar-custom" style="width: 15%"></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted">15% complete</small>
                        <small class="text-muted">Prof. Wilson</small>
                    </div>
                    <button class="btn btn-primary-custom btn-custom w-100">
                        Continue Learning
                    </button>
                </div>
            </div>
        </div>

        <!-- No Results Message -->
        <div id="noResults" class="text-center py-5" style="display: none;">
            <i class="fas fa-search fa-3x text-muted mb-3"></i>
            <h4 class="text-muted">No lessons found</h4>
            <p class="text-muted">Try adjusting your search or filter criteria</p>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const lessonCards = document.querySelectorAll('.lesson-card');
    const searchInput = document.getElementById('searchInput');
    const searchBtn = document.getElementById('searchBtn');
    const noResults = document.getElementById('noResults');
    
    let currentFilter = 'all';
    let currentSearch = '';

    // Filter functionality
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Update active button style
            filterButtons.forEach(btn => {
                btn.classList.remove('active', 'btn-primary-custom');
                btn.classList.add('btn-outline-secondary');
            });
            this.classList.remove('btn-outline-secondary');
            this.classList.add('active', 'btn-primary-custom');
            
            currentFilter = this.dataset.filter;
            filterLessons();
        });
    });

    // Search functionality
    searchInput.addEventListener('input', function() {
        currentSearch = this.value.toLowerCase().trim();
        filterLessons();
    });

    searchInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            filterLessons();
        }
    });

    searchBtn.addEventListener('click', function() {
        currentSearch = searchInput.value.toLowerCase().trim();
        filterLessons();
    });

    function filterLessons() {
        let visibleCount = 0;

        lessonCards.forEach(card => {
            const category = card.dataset.category;
            const title = card.querySelector('.lesson-title').textContent.toLowerCase();
            const desc = card.querySelector('.lesson-desc').textContent.toLowerCase();
            
            const matchesFilter = currentFilter === 'all' || category === currentFilter;
            const matchesSearch = currentSearch === '' || 
                                  title.includes(currentSearch) || 
                                  desc.includes(currentSearch) ||
                                  category.includes(currentSearch);

            if (matchesFilter && matchesSearch) {
                card.style.display = '';
                card.style.animation = 'fadeInUp 0.5s ease forwards';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // Show/hide no results message
        noResults.style.display = visibleCount === 0 ? 'block' : 'none';
    }
});
</script>

<?php include 'includes/footer.php'; ?>