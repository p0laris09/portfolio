<?php
$currentPage = 'signup-contractor';
$pageTitle = 'Sign Up - Contractor';
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

    textarea.form-control-modern {
        resize: vertical;
        min-height: 100px;
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

    .section-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: var(--text-primary);
    }

    .section-subtitle {
        color: var(--text-secondary);
        font-size: 0.9rem;
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

    .file-upload-area.has-files {
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

    .files-selected {
        text-align: left;
    }

    .selected-files-list {
        max-height: 200px;
        overflow-y: auto;
    }

    .selected-file-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.5rem;
        background: var(--bg-primary);
        border-radius: 8px;
        margin-bottom: 0.5rem;
    }

    .file-icon {
        font-size: 1.5rem;
        color: #28a745;
    }

    .file-name {
        flex: 1;
        color: var(--text-primary);
        font-size: 0.9rem;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .btn-remove-file {
        background: none;
        border: none;
        color: #dc3545;
        font-size: 1.25rem;
        cursor: pointer;
        padding: 0;
        line-height: 1;
    }

    .contractor-visual-section {
        position: relative;
        height: 100%;
        min-height: 400px;
        border-radius: 16px;
        overflow: hidden;
        background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
    }

    .visual-overlay {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem;
    }

    .visual-content {
        text-align: center;
        color: white;
    }

    .contractor-logo {
        width: 80px;
        height: 80px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
    }

    .contractor-logo i {
        font-size: 2.5rem;
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

    .visual-features {
        text-align: left;
        max-width: 250px;
        margin: 0 auto;
    }

    .visual-features .feature-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 0.75rem;
        font-size: 0.9rem;
    }

    .visual-features .feature-item i {
        color: #28a745;
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

    .form-control.is-invalid,
    .file-upload-area.is-invalid {
        border-color: #dc3545;
    }

    @media (max-width: 991px) {
        .contractor-visual-section {
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
                        <h1 class="signup-form-title">Sign Up as Contractor</h1>
                        <p class="signup-form-subtitle">
                            Register your company to connect with talented professionals and grow your business
                        </p>
                    </div>

                    <!-- Multi-step Form -->
                    <form id="contractorSignupForm" class="signup-multi-form">
                        <!-- Step 1: Company Information -->
                        <div class="signup-step active" data-step="1">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="company_name" class="form-label-modern">Company Name</label>
                                        <input type="text" class="form-control form-control-modern" id="company_name"
                                            name="company_name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="company_number" class="form-label-modern">Company Number</label>
                                        <input type="text" class="form-control form-control-modern" id="company_number"
                                            name="company_number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="industry" class="form-label-modern">Industry</label>
                                        <select class="form-control form-control-modern" id="industry" name="industry"
                                            required>
                                            <option value="">Select Industry</option>
                                            <option value="technology">Technology</option>
                                            <option value="construction">Construction</option>
                                            <option value="healthcare">Healthcare</option>
                                            <option value="finance">Finance</option>
                                            <option value="manufacturing">Manufacturing</option>
                                            <option value="consulting">Consulting</option>
                                            <option value="engineering">Engineering</option>
                                            <option value="marketing">Marketing & Advertising</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="company_email" class="form-label-modern">Company Email</label>
                                        <input type="email" class="form-control form-control-modern" id="company_email"
                                            name="company_email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="contact_person" class="form-label-modern">Contact Person</label>
                                        <input type="text" class="form-control form-control-modern" id="contact_person"
                                            name="contact_person" required>
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
                                        <label for="location" class="form-label-modern">Location</label>
                                        <input type="text" class="form-control form-control-modern" id="location"
                                            name="location" placeholder="City, State/Province, Country" required>
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

                        <!-- Step 2: Company Details -->
                        <div class="signup-step" data-step="2">
                            <div class="row g-0">
                                <!-- Left Form Panel -->
                                <div class="col-lg-7 pe-lg-4">
                                    <div class="contractor-form-section">
                                        <h3 class="section-title mb-2">Company Details</h3>
                                        <p class="section-subtitle mb-4">
                                            Tell us more about your company to help us verify your account
                                        </p>

                                        <div class="row g-4">
                                            <div class="col-12">
                                                <div class="form-group-modern">
                                                    <label for="company_description" class="form-label-modern">Company
                                                        Description</label>
                                                    <textarea class="form-control form-control-modern"
                                                        id="company_description" name="company_description" rows="4"
                                                        placeholder="Tell us about your company, services, and expertise..."
                                                        required></textarea>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group-modern">
                                                    <label for="company_website" class="form-label-modern">Company
                                                        Website/Social Media</label>
                                                    <input type="url" class="form-control form-control-modern"
                                                        id="company_website" name="company_website"
                                                        placeholder="https://www.yourcompany.com" required>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group-modern">
                                                    <label for="proof_of_work" class="form-label-modern">Proof of
                                                        Work</label>
                                                    <div class="file-upload-area" id="proofUpload">
                                                        <input type="file" class="form-control file-input"
                                                            id="proof_of_work" name="proof_of_work"
                                                            accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" multiple>
                                                        <div class="file-upload-content">
                                                            <i class="bi bi-cloud-upload upload-icon"></i>
                                                            <p class="upload-text">
                                                                <span class="upload-main">Upload portfolio,
                                                                    certifications, or work samples</span><br>
                                                                <span class="upload-sub">or drag and drop</span>
                                                            </p>
                                                            <p class="upload-formats">PDF, DOC, DOCX, JPG, PNG (max.
                                                                10MB each)</p>
                                                        </div>
                                                        <div class="files-selected" style="display: none;">
                                                            <div class="selected-files-list"></div>
                                                            <button type="button"
                                                                class="btn btn-outline-secondary btn-sm mt-2"
                                                                id="addMoreFiles">
                                                                <i class="bi bi-plus-circle me-1"></i>
                                                                Add More Files
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
                                    <div class="contractor-visual-section">
                                        <div class="visual-overlay">
                                            <div class="visual-content">
                                                <div class="contractor-logo">
                                                    <i class="bi bi-building"></i>
                                                </div>
                                                <h3 class="visual-title">Build Your Business</h3>
                                                <p class="visual-description">
                                                    Join our network of trusted contractors and connect with companies
                                                    seeking your expertise.
                                                </p>
                                                <div class="visual-features">
                                                    <div class="feature-item">
                                                        <i class="bi bi-check-circle-fill"></i>
                                                        <span>Showcase your portfolio</span>
                                                    </div>
                                                    <div class="feature-item">
                                                        <i class="bi bi-check-circle-fill"></i>
                                                        <span>Connect with clients</span>
                                                    </div>
                                                    <div class="feature-item">
                                                        <i class="bi bi-check-circle-fill"></i>
                                                        <span>Grow your business</span>
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
                                <div class="step-label">Company Info</div>
                            </div>
                            <div class="progress-line"></div>
                            <div class="progress-step" data-step="2">
                                <div class="step-number">2</div>
                                <div class="step-label">Company Details</div>
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
        let selectedFiles = [];

        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');
        const submitBtn = document.getElementById('submitBtn');
        const form = document.getElementById('contractorSignupForm');

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
        const fileInput = document.getElementById('proof_of_work');
        const uploadArea = document.getElementById('proofUpload');
        const addMoreBtn = document.getElementById('addMoreFiles');

        if (uploadArea) {
            uploadArea.addEventListener('click', function (e) {
                if (!e.target.closest('.btn') && !uploadArea.classList.contains('has-files')) {
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

                const files = Array.from(e.dataTransfer.files);
                handleFileSelect(files);
            });

            fileInput.addEventListener('change', function () {
                const files = Array.from(this.files);
                handleFileSelect(files);
            });

            addMoreBtn.addEventListener('click', function () {
                fileInput.click();
            });

            function handleFileSelect(files) {
                const allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'image/jpeg', 'image/jpg', 'image/png'];

                files.forEach(file => {
                    if (!allowedTypes.includes(file.type)) {
                        alert(`File "${file.name}" is not a supported format. Please select PDF, DOC, DOCX, JPG, or PNG files.`);
                        return;
                    }

                    if (file.size > 10 * 1024 * 1024) {
                        alert(`File "${file.name}" is too large. Maximum size is 10MB.`);
                        return;
                    }

                    selectedFiles.push(file);
                });

                updateFileDisplay();
            }

            function updateFileDisplay() {
                if (selectedFiles.length > 0) {
                    const uploadContent = uploadArea.querySelector('.file-upload-content');
                    const filesSelected = uploadArea.querySelector('.files-selected');
                    const filesList = uploadArea.querySelector('.selected-files-list');

                    uploadContent.style.display = 'none';
                    filesSelected.style.display = 'block';
                    uploadArea.classList.add('has-files');
                    uploadArea.classList.remove('is-invalid');

                    filesList.innerHTML = '';
                    selectedFiles.forEach((file, index) => {
                        const fileItem = document.createElement('div');
                        fileItem.className = 'selected-file-item';
                        fileItem.innerHTML = `
                            <i class="bi bi-file-earmark-text file-icon"></i>
                            <span class="file-name">${file.name}</span>
                            <button type="button" class="btn-remove-file" data-index="${index}">
                                <i class="bi bi-x"></i>
                            </button>
                        `;
                        filesList.appendChild(fileItem);
                    });

                    filesList.querySelectorAll('.btn-remove-file').forEach(btn => {
                        btn.addEventListener('click', function () {
                            const index = parseInt(this.getAttribute('data-index'));
                            selectedFiles.splice(index, 1);
                            updateFileDisplay();

                            if (selectedFiles.length === 0) {
                                const uploadContent = uploadArea.querySelector('.file-upload-content');
                                const filesSelected = uploadArea.querySelector('.files-selected');

                                uploadContent.style.display = 'block';
                                filesSelected.style.display = 'none';
                                uploadArea.classList.remove('has-files');
                            }
                        });
                    });
                }
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

                if (selectedFiles.length === 0) {
                    uploadArea.classList.add('is-invalid');
                    alert('Please upload at least one proof of work document.');
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
            const requiredFields = currentStepElement.querySelectorAll('input[required], select[required], textarea[required]');
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

        document.querySelectorAll('input, select, textarea').forEach(field => {
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