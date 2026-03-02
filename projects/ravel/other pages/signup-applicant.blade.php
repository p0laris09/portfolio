@extends('layouts.app')

@section('title', 'Sign Up - Applicant - Ravel Solutions')

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
                    <form id="applicantSignupForm" class="signup-multi-form">
                        {{-- Step 1: Personal Information --}}
                        <div class="signup-step active" data-step="1">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="first_name" class="form-label-modern">First Name</label>
                                        <input type="text" class="form-control form-control-modern" id="first_name" name="first_name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="middle_name" class="form-label-modern">Middle Name</label>
                                        <input type="text" class="form-control form-control-modern" id="middle_name" name="middle_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="last_name" class="form-label-modern">Last Name</label>
                                        <input type="text" class="form-control form-control-modern" id="last_name" name="last_name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="birthday" class="form-label-modern">Date of Birth</label>
                                        <input type="date" class="form-control form-control-modern" id="birthday" name="birthday" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="gender" class="form-label-modern">Gender</label>
                                        <select class="form-control form-control-modern" id="gender" name="gender" required>
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
                                        <input type="tel" class="form-control form-control-modern" id="phone_number" name="phone_number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="email" class="form-label-modern">Email</label>
                                        <input type="email" class="form-control form-control-modern" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="username" class="form-label-modern">Username</label>
                                        <input type="text" class="form-control form-control-modern" id="username" name="username" required>
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

                        {{-- Step 2: Applicant Details --}}
                        <div class="signup-step" data-step="2">
                            <div class="row g-0">
                                {{-- Left Form Panel --}}
                                <div class="col-lg-7">
                                    <div class="applicant-form-section">
                                        <div class="row g-4">
                                            <div class="col-12">
                                                <div class="form-group-modern">
                                                    <label for="field_of_interest" class="form-label-modern">Field of Interest</label>
                                                    <select class="form-control form-control-modern" id="field_of_interest" name="field_of_interest" required>
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
                                                    <label for="preferred_work_type" class="form-label-modern">Preferred Work Type</label>
                                                    <select class="form-control form-control-modern" id="preferred_work_type" name="preferred_work_type" required>
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
                                                        <input type="file" class="form-control file-input" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
                                                        <div class="file-upload-content">
                                                            <i class="bi bi-cloud-upload upload-icon"></i>
                                                            <p class="upload-text">
                                                                <span class="upload-main">Click to upload your resume</span><br>
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

                                {{-- Right Image Panel --}}
                                <div class="col-lg-5 d-none d-lg-block">
                                    <div class="applicant-visual-section">
                                        <div class="visual-overlay">
                                            <div class="visual-content">
                                                <h3 class="visual-title">Start Your Journey</h3>
                                                <p class="visual-description">
                                                    Join thousands of professionals who have found their dream careers through our platform.
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
                                        <img src="{{ asset('images/applicants.jpg') }}" alt="Professional workspace" class="visual-image">
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
                                <div class="step-label">Personal Info</div>
                            </div>
                            <div class="progress-line"></div>
                            <div class="progress-step" data-step="2">
                                <div class="step-number">2</div>
                                <div class="step-label">Applicant Details</div>
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
    const form = document.getElementById('applicantSignupForm');
    
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
    
    // File upload functionality
    const fileInput = document.getElementById('resume');
    const uploadArea = document.getElementById('resumeUpload');
    
    if (uploadArea) {
        uploadArea.addEventListener('click', function() {
            if (!uploadArea.classList.contains('has-file')) {
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
            
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                handleFileSelect(files[0]);
            }
        });
        
        fileInput.addEventListener('change', function() {
            if (this.files.length > 0) {
                handleFileSelect(this.files[0]);
            }
        });
        
        function handleFileSelect(file) {
            // Validate file type
            const allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
            if (!allowedTypes.includes(file.type)) {
                alert('Please select a PDF, DOC, or DOCX file.');
                return;
            }
            
            // Validate file size (10MB max)
            if (file.size > 10 * 1024 * 1024) {
                alert('File size must be less than 10MB.');
                return;
            }
            
            // Show selected file
            const uploadContent = uploadArea.querySelector('.file-upload-content');
            const fileSelected = uploadArea.querySelector('.file-selected');
            const fileName = fileSelected.querySelector('.file-name');
            
            uploadContent.style.display = 'none';
            fileSelected.style.display = 'flex';
            fileName.textContent = file.name;
            uploadArea.classList.add('has-file');
        }
        
        // Remove file
        const removeBtn = document.querySelector('.btn-remove-file');
        if (removeBtn) {
            removeBtn.addEventListener('click', function(e) {
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
        
        // Password matching validation for step 1
        if (currentStep === 1) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            
            if (password !== confirmPassword) {
                document.getElementById('confirm_password').classList.add('is-invalid');
                isValid = false;
            }
        }
        
        // Terms agreement validation for step 2
        if (currentStep === 2) {
            const termsAgree = document.getElementById('terms_agree');
            if (!termsAgree.checked) {
                termsAgree.classList.add('is-invalid');
                isValid = false;
            }
        }
        
        return isValid;
    }
    
    // Real-time validation
    document.querySelectorAll('input, select').forEach(field => {
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