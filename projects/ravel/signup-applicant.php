<?php
$currentPage = 'signup-applicant';
$pageTitle = 'Sign Up - Applicant';
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
    }

    .auth-container {
        min-height: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 4rem 2rem;
        width: 100%;
    }

    .signup-form-card {
        background: var(--bg-secondary);
        border-radius: 24px;
        padding: 2.5rem;
        max-width: 1000px;
        width: 100%;
        border: 1px solid var(--border-color);
        margin: 0 auto;
    }

    .signup-form-title {
        font-size: 2rem;
        font-weight: 700;
        color: var(--text-primary);
        margin-bottom: 0.5rem;
    }

    .signup-form-subtitle {
        color: var(--text-secondary);
        font-size: 0.95rem;
    }

    .form-label-modern {
        color: var(--text-secondary);
        font-size: 0.875rem;
        font-weight: 500;
        margin-bottom: 0.5rem;
    }

    .form-control-modern {
        background: var(--bg-primary);
        border: 1px solid var(--border-color);
        color: var(--text-primary);
        padding: 0.75rem 1rem;
        border-radius: 8px;
        transition: all 0.2s ease;
    }

    .form-control-modern:focus {
        background: var(--bg-primary);
        border-color: var(--color-primary);
        box-shadow: 0 0 0 3px rgba(39, 160, 237, 0.1);
        color: var(--text-primary);
    }

    .form-control-modern::placeholder {
        color: var(--text-muted);
    }

    .form-control-modern option {
        background: var(--bg-primary);
        color: var(--text-primary);
    }

    .input-group-modern {
        position: relative;
    }

    .password-toggle {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: var(--text-muted);
        cursor: pointer;
        z-index: 10;
        padding: 8px;
        border-radius: 4px;
        transition: all 0.2s ease;
    }

    .password-toggle:hover {
        color: var(--color-primary);
        background: rgba(39, 160, 237, 0.1);
    }

    .signup-step {
        display: none;
    }

    .signup-step.active {
        display: block;
    }

    .signup-progress {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 2rem;
        gap: 0.5rem;
    }

    .progress-step {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.5rem;
    }

    .step-number {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: var(--bg-primary);
        border: 2px solid var(--border-color);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        color: var(--text-muted);
        transition: all 0.3s ease;
    }

    .progress-step.active .step-number {
        background: var(--color-primary);
        border-color: var(--color-primary);
        color: white;
    }

    .progress-step.completed .step-number {
        background: #28a745;
        border-color: #28a745;
        color: white;
    }

    .step-label {
        font-size: 0.8rem;
        color: var(--text-muted);
    }

    .progress-step.active .step-label {
        color: var(--color-primary);
    }

    .progress-line {
        width: 100px;
        height: 2px;
        background: var(--border-color);
        margin-bottom: 1.5rem;
    }

    .btn-modern {
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.2s ease;
        display: inline-flex;
        align-items: center;
    }

    .btn-primary.btn-modern {
        background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
        border: none;
    }

    .btn-primary.btn-modern:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(39, 160, 237, 0.3);
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

    .signup-form-navigation {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-top: 2rem;
    }

    .file-upload-area {
        border: 2px dashed var(--border-color);
        border-radius: 12px;
        padding: 2rem;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
    }

    .file-upload-area:hover {
        border-color: var(--color-primary);
        background: rgba(39, 160, 237, 0.05);
    }

    .file-upload-area.drag-over {
        border-color: var(--color-primary);
        background: rgba(39, 160, 237, 0.1);
    }

    .file-upload-area.has-file {
        border-style: solid;
        border-color: #28a745;
    }

    .file-input {
        display: none;
    }

    .upload-icon {
        font-size: 3rem;
        color: var(--color-primary);
        margin-bottom: 1rem;
    }

    .upload-main {
        font-weight: 600;
        color: var(--text-primary);
    }

    .upload-sub {
        color: var(--text-muted);
    }

    .upload-formats {
        font-size: 0.8rem;
        color: var(--text-muted);
        margin-top: 0.5rem;
    }

    .file-selected {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1rem;
    }

    .file-icon {
        font-size: 2rem;
        color: #28a745;
    }

    .file-name {
        color: var(--text-primary);
        font-weight: 500;
    }

    .btn-remove-file {
        background: none;
        border: none;
        color: #dc3545;
        font-size: 1.5rem;
        cursor: pointer;
        padding: 0;
        line-height: 1;
    }

    .applicant-visual-section {
        position: relative;
        height: 100%;
        min-height: 400px;
        border-radius: 16px;
        overflow: hidden;
    }

    .visual-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .visual-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(39, 160, 237, 0.9), rgba(99, 102, 241, 0.9));
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem;
    }

    .visual-content {
        text-align: center;
        color: white;
    }

    .visual-title {
        font-size: 1.75rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .visual-description {
        font-size: 0.95rem;
        opacity: 0.9;
        margin-bottom: 2rem;
    }

    .visual-stats {
        display: flex;
        justify-content: center;
        gap: 2rem;
    }

    .stat-item {
        text-align: center;
    }

    .stat-number {
        font-size: 1.75rem;
        font-weight: 700;
    }

    .stat-label {
        font-size: 0.8rem;
        opacity: 0.9;
    }

    .signup-terms {
        margin-top: 1.5rem;
    }

    .form-check-modern .form-check-input {
        background-color: var(--bg-primary);
        border-color: var(--border-color);
    }

    .form-check-modern .form-check-input:checked {
        background-color: var(--color-primary);
        border-color: var(--color-primary);
    }

    .form-check-modern .form-check-label {
        color: var(--text-secondary);
        font-size: 0.875rem;
    }

    .auth-link {
        color: var(--color-primary);
        text-decoration: none;
    }

    .auth-link:hover {
        color: var(--color-accent);
    }

    .auth-footer-text {
        color: var(--text-secondary);
        font-size: 0.9rem;
    }

    .form-control.is-invalid {
        border-color: #dc3545;
    }

    @media (max-width: 991px) {
        .applicant-visual-section {
            display: none;
        }
    }

    @media (max-width: 768px) {
        .signup-form-card {
            padding: 1.5rem;
        }
    }
</style>
<div class="auth-container">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
                <div class="signup-form-card">
                    <!-- Header -->
                    <div class="text-center mb-4">
                        <h1 class="signup-form-title">Sign Up as Applicant</h1>
                        <p class="signup-form-subtitle">
                            Create your account to discover job opportunities and advance your career
                        </p>
                    </div>

                    <!-- Multi-step Form -->
                    <form id="applicantSignupForm" class="signup-multi-form">
                        <!-- Step 1: Personal Information -->
                        <div class="signup-step active" data-step="1">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="first_name" class="form-label-modern">First Name</label>
                                        <input type="text" class="form-control form-control-modern" id="first_name"
                                            name="first_name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="middle_name" class="form-label-modern">Middle Name</label>
                                        <input type="text" class="form-control form-control-modern" id="middle_name"
                                            name="middle_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="last_name" class="form-label-modern">Last Name</label>
                                        <input type="text" class="form-control form-control-modern" id="last_name"
                                            name="last_name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="birthday" class="form-label-modern">Date of Birth</label>
                                        <input type="date" class="form-control form-control-modern" id="birthday"
                                            name="birthday" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="gender" class="form-label-modern">Gender</label>
                                        <select class="form-control form-control-modern" id="gender" name="gender"
                                            required>
                                            <option value="">Select your gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                            <option value="prefer_not_to_say">Prefer not to say</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="phone_number" class="form-label-modern">Phone Number</label>
                                        <input type="tel" class="form-control form-control-modern" id="phone_number"
                                            name="phone_number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="email" class="form-label-modern">Email</label>
                                        <input type="email" class="form-control form-control-modern" id="email"
                                            name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="username" class="form-label-modern">Username</label>
                                        <input type="text" class="form-control form-control-modern" id="username"
                                            name="username" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="password" class="form-label-modern">Password</label>
                                        <div class="input-group-modern">
                                            <input type="password" class="form-control form-control-modern"
                                                id="password" name="password" style="padding-right: 45px;" required>
                                            <button type="button" class="password-toggle" data-target="password">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="confirm_password" class="form-label-modern">Confirm Password</label>
                                        <div class="input-group-modern">
                                            <input type="password" class="form-control form-control-modern"
                                                id="confirm_password" name="confirm_password"
                                                style="padding-right: 45px;" required>
                                            <button type="button" class="password-toggle"
                                                data-target="confirm_password">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2: Applicant Details -->
                        <div class="signup-step" data-step="2">
                            <div class="row g-0">
                                <!-- Left Form Panel -->
                                <div class="col-lg-7 pe-lg-4">
                                    <div class="applicant-form-section">
                                        <div class="row g-4">
                                            <div class="col-12">
                                                <div class="form-group-modern">
                                                    <label for="field_of_interest" class="form-label-modern">Field of
                                                        Interest</label>
                                                    <select class="form-control form-control-modern"
                                                        id="field_of_interest" name="field_of_interest" required>
                                                        <option value="">Select your field of interest</option>
                                                        <option value="technology">Technology</option>
                                                        <option value="engineering">Engineering</option>
                                                        <option value="healthcare">Healthcare</option>
                                                        <option value="finance">Finance</option>
                                                        <option value="marketing">Marketing</option>
                                                        <option value="sales">Sales</option>
                                                        <option value="hr">Human Resources</option>
                                                        <option value="design">Design</option>
                                                        <option value="education">Education</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group-modern">
                                                    <label for="preferred_work_type" class="form-label-modern">Preferred
                                                        Work Type</label>
                                                    <select class="form-control form-control-modern"
                                                        id="preferred_work_type" name="preferred_work_type" required>
                                                        <option value="">Select preferred work type</option>
                                                        <option value="full-time">Full-time</option>
                                                        <option value="part-time">Part-time</option>
                                                        <option value="contract">Contract</option>
                                                        <option value="freelance">Freelance</option>
                                                        <option value="remote">Remote</option>
                                                        <option value="hybrid">Hybrid</option>
                                                        <option value="internship">Internship</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group-modern">
                                                    <label for="resume" class="form-label-modern">Resume</label>
                                                    <div class="file-upload-area" id="resumeUpload">
                                                        <input type="file" class="form-control file-input" id="resume"
                                                            name="resume" accept=".pdf,.doc,.docx">
                                                        <div class="file-upload-content">
                                                            <i class="bi bi-cloud-upload upload-icon"></i>
                                                            <p class="upload-text">
                                                                <span class="upload-main">Click to upload your
                                                                    resume</span><br>
                                                                <span class="upload-sub">or drag and drop</span>
                                                            </p>
                                                            <p class="upload-formats">PDF, DOC, DOCX (max. 10MB)</p>
                                                        </div>
                                                        <div class="file-selected" style="display: none;">
                                                            <i class="bi bi-file-earmark-text file-icon"></i>
                                                            <span class="file-name"></span>
                                                            <button type="button" class="btn-remove-file">
                                                                <i class="bi bi-x"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right Image Panel -->
                                <div class="col-lg-5 d-none d-lg-block">
                                    <div class="applicant-visual-section">
                                        <div class="visual-overlay">
                                            <div class="visual-content">
                                                <h3 class="visual-title">Start Your Journey</h3>
                                                <p class="visual-description">
                                                    Join thousands of professionals who have found their dream careers
                                                    through our platform.
                                                </p>
                                                <div class="visual-stats">
                                                    <div class="stat-item">
                                                        <div class="stat-number">10K+</div>
                                                        <div class="stat-label">Job Opportunities</div>
                                                    </div>
                                                    <div class="stat-item">
                                                        <div class="stat-number">500+</div>
                                                        <div class="stat-label">Companies</div>
                                                    </div>
                                                    <div class="stat-item">
                                                        <div class="stat-number">95%</div>
                                                        <div class="stat-label">Success Rate</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Form Navigation -->
                        <div class="signup-form-navigation">
                            <div class="step-buttons">
                                <button type="button" class="btn btn-outline-secondary btn-modern" id="prevBtn"
                                    style="display: none;">
                                    <i class="bi bi-arrow-left me-2"></i>
                                    Previous
                                </button>
                                <button type="button" class="btn btn-primary btn-modern" id="nextBtn">
                                    Next
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </button>
                                <button type="submit" class="btn btn-primary btn-modern" id="submitBtn"
                                    style="display: none;">
                                    Sign Up
                                    <i class="bi bi-check-circle ms-2"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Progress Indicator -->
                        <div class="signup-progress">
                            <div class="progress-step active" data-step="1">
                                <div class="step-number">1</div>
                                <div class="step-label">Personal Info</div>
                            </div>
                            <div class="progress-line"></div>
                            <div class="progress-step" data-step="2">
                                <div class="step-number">2</div>
                                <div class="step-label">Applicant Details</div>
                            </div>
                        </div>

                        <!-- Terms Agreement -->
                        <div class="signup-terms">
                            <div class="form-check form-check-modern">
                                <input class="form-check-input" type="checkbox" id="terms_agree" name="terms_agree">
                                <label class="form-check-label" for="terms_agree">
                                    I acknowledge that I have read and agree to the
                                    <a href="#" class="auth-link">Terms and Conditions</a>
                                    and <a href="#" class="auth-link">Privacy Policy</a>
                                </label>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="text-center mt-4">
                            <p class="auth-footer-text">
                                Already have an account?
                                <a href="signin.php" class="auth-link fw-semibold">Sign in</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let currentStep = 1;
        const totalSteps = 2;

        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');
        const submitBtn = document.getElementById('submitBtn');
        const form = document.getElementById('applicantSignupForm');

        // Password toggle functionality
        document.querySelectorAll('.password-toggle').forEach(toggle => {
            toggle.addEventListener('click', function () {
                const targetId = this.getAttribute('data-target');
                const passwordInput = document.getElementById(targetId);
                const icon = this.querySelector('i');

                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    icon.classList.remove('bi-eye');
                    icon.classList.add('bi-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    icon.classList.remove('bi-eye-slash');
                    icon.classList.add('bi-eye');
                }
            });
        });

        // Step navigation
        function showStep(step) {
            document.querySelectorAll('.signup-step').forEach(s => s.classList.remove('active'));
            document.querySelectorAll('.progress-step').forEach(s => {
                s.classList.remove('active');
                s.classList.remove('completed');
            });

            document.querySelector(`.signup-step[data-step="${step}"]`).classList.add('active');
            document.querySelector(`.progress-step[data-step="${step}"]`).classList.add('active');

            prevBtn.style.display = step === 1 ? 'none' : 'inline-flex';
            nextBtn.style.display = step === totalSteps ? 'none' : 'inline-flex';
            submitBtn.style.display = step === totalSteps ? 'inline-flex' : 'none';

            for (let i = 1; i < step; i++) {
                document.querySelector(`.progress-step[data-step="${i}"]`).classList.add('completed');
            }
        }

        nextBtn.addEventListener('click', function () {
            if (validateCurrentStep()) {
                currentStep++;
                showStep(currentStep);
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        });

        prevBtn.addEventListener('click', function () {
            currentStep--;
            showStep(currentStep);
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // File upload functionality
        const fileInput = document.getElementById('resume');
        const uploadArea = document.getElementById('resumeUpload');

        if (uploadArea) {
            uploadArea.addEventListener('click', function (e) {
                if (!uploadArea.classList.contains('has-file') && !e.target.classList.contains('btn-remove-file') && !e.target.closest('.btn-remove-file')) {
                    fileInput.click();
                }
            });

            uploadArea.addEventListener('dragover', function (e) {
                e.preventDefault();
                this.classList.add('drag-over');
            });

            uploadArea.addEventListener('dragleave', function () {
                this.classList.remove('drag-over');
            });

            uploadArea.addEventListener('drop', function (e) {
                e.preventDefault();
                this.classList.remove('drag-over');

                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    handleFileSelect(files[0]);
                }
            });

            fileInput.addEventListener('change', function () {
                if (this.files.length > 0) {
                    handleFileSelect(this.files[0]);
                }
            });

            function handleFileSelect(file) {
                const allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
                if (!allowedTypes.includes(file.type)) {
                    alert('Please select a PDF, DOC, or DOCX file.');
                    return;
                }

                if (file.size > 10 * 1024 * 1024) {
                    alert('File size must be less than 10MB.');
                    return;
                }

                const uploadContent = uploadArea.querySelector('.file-upload-content');
                const fileSelected = uploadArea.querySelector('.file-selected');
                const fileName = fileSelected.querySelector('.file-name');

                uploadContent.style.display = 'none';
                fileSelected.style.display = 'flex';
                fileName.textContent = file.name;
                uploadArea.classList.add('has-file');
            }

            const removeBtn = document.querySelector('.btn-remove-file');
            if (removeBtn) {
                removeBtn.addEventListener('click', function (e) {
                    e.stopPropagation();

                    const uploadContent = uploadArea.querySelector('.file-upload-content');
                    const fileSelected = uploadArea.querySelector('.file-selected');

                    fileInput.value = '';
                    uploadContent.style.display = 'block';
                    fileSelected.style.display = 'none';
                    uploadArea.classList.remove('has-file');
                });
            }
        }

        // Form submission
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            if (validateCurrentStep()) {
                const termsAgree = document.getElementById('terms_agree');
                if (!termsAgree.checked) {
                    alert('Please agree to the Terms and Conditions and Privacy Policy.');
                    return;
                }

                submitBtn.innerHTML = '<div class="spinner-border spinner-border-sm me-2"></div>Creating Account...';
                submitBtn.disabled = true;

                setTimeout(() => {
                    window.location.href = 'thank-you.php';
                }, 2000);
            }
        });

        function validateCurrentStep() {
            const currentStepElement = document.querySelector(`.signup-step[data-step="${currentStep}"]`);
            const requiredFields = currentStepElement.querySelectorAll('input[required], select[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    isValid = false;
                } else {
                    field.classList.remove('is-invalid');
                }
            });

            if (currentStep === 1) {
                const password = document.getElementById('password').value;
                const confirmPassword = document.getElementById('confirm_password').value;

                if (password !== confirmPassword) {
                    document.getElementById('confirm_password').classList.add('is-invalid');
                    alert('Passwords do not match.');
                    isValid = false;
                }
            }

            return isValid;
        }

        document.querySelectorAll('input, select').forEach(field => {
            field.addEventListener('input', function () {
                if (this.classList.contains('is-invalid') && this.value.trim()) {
                    this.classList.remove('is-invalid');
                }
            });
        });

        showStep(1);
    });
</script>

<?php require_once 'includes/footer.php'; ?>