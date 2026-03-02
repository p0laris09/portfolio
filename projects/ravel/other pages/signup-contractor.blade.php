@extends('layouts.app')

@section('title', 'Sign Up - Contractor - Ravel Solutions')

@section('content')
<div class="auth-container">
    <div class="container-fluid h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-12 col-xl-10">
                <div class="signup-form-card">
                    {{-- Header --}}
                    <div class="text-center mb-4">
                        <h1 class="signup-form-title">Sign Up</h1>
                        <p class="signup-form-subtitle">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisque faucibus 
                            ex sapien vitae pellentesque sem placerat
                        </p>
                    </div>

                    {{-- Multi-step Form --}}
                    <form id="contractorSignupForm" class="signup-multi-form">
                        {{-- Step 1: Company Information --}}
                        <div class="signup-step active" data-step="1">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="company_name" class="form-label-modern">Company Name</label>
                                        <input type="text" class="form-control form-control-modern" id="company_name" name="company_name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="company_number" class="form-label-modern">Company Number</label>
                                        <input type="text" class="form-control form-control-modern" id="company_number" name="company_number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="industry" class="form-label-modern">Industry</label>
                                        <select class="form-control form-control-modern" id="industry" name="industry" required>
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
                                        <input type="email" class="form-control form-control-modern" id="company_email" name="company_email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="contact_person" class="form-label-modern">Contact Person</label>
                                        <input type="text" class="form-control form-control-modern" id="contact_person" name="contact_person" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="password" class="form-label-modern">Password</label>
                                        <div class="input-group-modern">
                                            <input type="password" class="form-control form-control-modern" id="password" name="password" required>
                                            <button type="button" class="password-toggle" data-target="password">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="location" class="form-label-modern">Location</label>
                                        <input type="text" class="form-control form-control-modern" id="location" name="location" placeholder="City, State/Province, Country" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="confirm_password" class="form-label-modern">Confirm Password</label>
                                        <div class="input-group-modern">
                                            <input type="password" class="form-control form-control-modern" id="confirm_password" name="confirm_password" required>
                                            <button type="button" class="password-toggle" data-target="confirm_password">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Step 2: Company Details --}}
                        <div class="signup-step" data-step="2">
                            <div class="row g-0">
                                {{-- Left Form Panel --}}
                                <div class="col-lg-7">
                                    <div class="contractor-form-section">
                                        <h3 class="section-title mb-4">Company Details</h3>
                                        <p class="section-subtitle mb-4">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisque faucibus 
                                            ex sapien vitae pellentesque sem placerat
                                        </p>
                                        
                                        <div class="row g-4">
                                            <div class="col-12">
                                                <div class="form-group-modern">
                                                    <label for="company_description" class="form-label-modern">Company Description</label>
                                                    <textarea class="form-control form-control-modern" id="company_description" name="company_description" rows="4" placeholder="Tell us about your company, services, and expertise..." required></textarea>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group-modern">
                                                    <label for="company_website" class="form-label-modern">Company Website/Social Media</label>
                                                    <input type="url" class="form-control form-control-modern" id="company_website" name="company_website" placeholder="https://www.yourcompany.com" required>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group-modern">
                                                    <label for="proof_of_work" class="form-label-modern">Proof of Work</label>
                                                    <div class="file-upload-area" id="proofUpload">
                                                        <input type="file" class="form-control file-input" id="proof_of_work" name="proof_of_work" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" multiple required>
                                                        <div class="file-upload-content">
                                                            <i class="bi bi-cloud-upload upload-icon"></i>
                                                            <p class="upload-text">
                                                                <span class="upload-main">Upload portfolio, certifications, or work samples</span><br>
                                                                <span class="upload-sub">or drag and drop</span>
                                                            </p>
                                                            <p class="upload-formats">PDF, DOC, DOCX, JPG, PNG (max. 10MB each)</p>
                                                        </div>
                                                        <div class="files-selected" style="display: none;">
                                                            <div class="selected-files-list"></div>
                                                            <button type="button" class="btn btn-outline-secondary btn-sm mt-2" id="addMoreFiles">
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

                                {{-- Right Image Panel --}}
                                <div class="col-lg-5 d-none d-lg-block">
                                    <div class="contractor-visual-section">
                                        <div class="visual-overlay">
                                            <div class="visual-content">
                                                <div class="contractor-logo">
                                                    <i class="bi bi-building"></i>
                                                </div>
                                                <h3 class="visual-title">Build Your Business</h3>
                                                <p class="visual-description">
                                                    Join our network of trusted contractors and connect with companies seeking your expertise.
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
                                        <img src="{{ asset('images/companies.jpg') }}" alt="Business buildings" class="visual-image">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Form Navigation --}}
                        <div class="signup-form-navigation">
                            <div class="step-buttons">
                                <button type="button" class="btn btn-outline-secondary btn-modern" id="prevBtn" style="display: none;">
                                    <i class="bi bi-arrow-left me-2"></i>
                                    Previous
                                </button>
                                <button type="button" class="btn btn-primary btn-modern" id="nextBtn">
                                    Next
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </button>
                                <button type="submit" class="btn btn-primary btn-modern" id="submitBtn" style="display: none;">
                                    Sign Up
                                    <i class="bi bi-check-circle ms-2"></i>
                                </button>
                            </div>
                        </div>

                        {{-- Progress Indicator --}}
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

                        {{-- Terms Agreement --}}
                        <div class="signup-terms">
                            <div class="form-check form-check-modern">
                                <input class="form-check-input" type="checkbox" id="terms_agree" name="terms_agree" required>
                                <label class="form-check-label" for="terms_agree">
                                    I acknowledge that I have read and agree to the 
                                    <a href="{{ route('terms') }}" class="auth-link">Terms and Conditions</a> 
                                    and <a href="{{ route('privacy') }}" class="auth-link">Privacy Policy</a>
                                </label>
                            </div>
                        </div>

                        {{-- Footer --}}
                        <div class="text-center mt-4">
                            <p class="auth-footer-text">
                                Already have an account? 
                                <a href="{{ route('signin') }}" class="auth-link fw-semibold">Sign in</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let currentStep = 1;
    const totalSteps = 2;
    
    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');
    const submitBtn = document.getElementById('submitBtn');
    const form = document.getElementById('contractorSignupForm');
    
    // Password toggle functionality
    document.querySelectorAll('.password-toggle').forEach(toggle => {
        toggle.addEventListener('click', function() {
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
        // Hide all steps
        document.querySelectorAll('.signup-step').forEach(s => s.classList.remove('active'));
        document.querySelectorAll('.progress-step').forEach(s => s.classList.remove('active'));
        
        // Show current step
        document.querySelector(`.signup-step[data-step="${step}"]`).classList.add('active');
        document.querySelector(`.progress-step[data-step="${step}"]`).classList.add('active');
        
        // Update navigation buttons
        prevBtn.style.display = step === 1 ? 'none' : 'inline-flex';
        nextBtn.style.display = step === totalSteps ? 'none' : 'inline-flex';
        submitBtn.style.display = step === totalSteps ? 'inline-flex' : 'none';
        
        // Mark completed steps
        for (let i = 1; i < step; i++) {
            document.querySelector(`.progress-step[data-step="${i}"]`).classList.add('completed');
        }
    }
    
    // Next button
    nextBtn.addEventListener('click', function() {
        if (validateCurrentStep()) {
            currentStep++;
            showStep(currentStep);
        }
    });
    
    // Previous button
    prevBtn.addEventListener('click', function() {
        currentStep--;
        showStep(currentStep);
    });
    
    // File upload functionality for proof of work
    const fileInput = document.getElementById('proof_of_work');
    const uploadArea = document.getElementById('proofUpload');
    const addMoreBtn = document.getElementById('addMoreFiles');
    let selectedFiles = [];
    
    if (uploadArea) {
        uploadArea.addEventListener('click', function(e) {
            if (!e.target.closest('.btn') && !uploadArea.classList.contains('has-files')) {
                fileInput.click();
            }
        });
        
        uploadArea.addEventListener('dragover', function(e) {
            e.preventDefault();
            this.classList.add('drag-over');
        });
        
        uploadArea.addEventListener('dragleave', function() {
            this.classList.remove('drag-over');
        });
        
        uploadArea.addEventListener('drop', function(e) {
            e.preventDefault();
            this.classList.remove('drag-over');
            
            const files = Array.from(e.dataTransfer.files);
            handleFileSelect(files);
        });
        
        fileInput.addEventListener('change', function() {
            const files = Array.from(this.files);
            handleFileSelect(files);
        });
        
        addMoreBtn.addEventListener('click', function() {
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
                
                // Add event listeners for remove buttons
                filesList.querySelectorAll('.btn-remove-file').forEach(btn => {
                    btn.addEventListener('click', function() {
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
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        if (validateCurrentStep()) {
            // Simulate form submission
            submitBtn.innerHTML = '<div class="spinner-border spinner-border-sm me-2"></div>Creating Account...';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                window.location.href = '{{ route("signup.thank-you") }}';
            }, 2000);
        }
    });
    
    // Validation function
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
        
        // Password matching validation for step 1
        if (currentStep === 1) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            
            if (password !== confirmPassword) {
                document.getElementById('confirm_password').classList.add('is-invalid');
                isValid = false;
            }
        }
        
        // File upload and terms validation for step 2
        if (currentStep === 2) {
            if (selectedFiles.length === 0) {
                uploadArea.classList.add('is-invalid');
                isValid = false;
            } else {
                uploadArea.classList.remove('is-invalid');
            }
            
            const termsAgree = document.getElementById('terms_agree');
            if (!termsAgree.checked) {
                termsAgree.classList.add('is-invalid');
                isValid = false;
            }
        }
        
        return isValid;
    }
    
    // Real-time validation
    document.querySelectorAll('input, select, textarea').forEach(field => {
        field.addEventListener('input', function() {
            if (this.classList.contains('is-invalid') && this.value.trim()) {
                this.classList.remove('is-invalid');
            }
        });
    });
    
    // Initialize first step
    showStep(1);
});
</script>
@endsection