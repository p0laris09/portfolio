<?php
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Ravel Solutions'; ?> - Job Portal Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --color-primary: #27A0ED;
            --color-primary-hover: #1e8fd6;
            --color-accent: #6366f1;
            --bg-primary: #0D1117;
            --bg-secondary: #161B22;
            --bg-tertiary: #21262D;
            --border-color: #30363D;
            --text-primary: #F0F6FC;
            --text-secondary: #C9D1D9;
            --text-muted: #8B949E;
        }
        
        * { box-sizing: border-box; }
        
        body {
            background: var(--bg-primary);
            color: var(--text-primary);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
            min-height: 100vh;
        }
        
        a { color: var(--color-primary); text-decoration: none; }
        a:hover { color: var(--color-primary-hover); }
        
        .navbar {
            background: var(--bg-secondary) !important;
            border-bottom: 1px solid var(--border-color);
            padding: 0.75rem 0;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--color-primary) !important;
        }
        
        .nav-link {
            color: var(--text-secondary) !important;
            padding: 0.5rem 1rem !important;
            border-radius: 6px;
            transition: all 0.2s;
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--text-primary) !important;
            background: var(--bg-tertiary);
        }
        
        .btn-primary-theme {
            background: var(--color-primary);
            border: none;
            color: white;
            padding: 0.5rem 1.25rem;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.2s;
        }
        
        .btn-primary-theme:hover {
            background: var(--color-primary-hover);
            color: white;
        }
        
        .btn-outline-secondary {
            border-color: var(--border-color);
            color: var(--text-secondary);
        }
        
        .btn-outline-secondary:hover {
            background: var(--bg-tertiary);
            border-color: var(--border-color);
            color: var(--text-primary);
        }
        
        .form-control, .form-select {
            background: var(--bg-tertiary);
            border: 1px solid var(--border-color);
            color: var(--text-primary);
        }
        
        .form-control:focus, .form-select:focus {
            background: var(--bg-tertiary);
            border-color: var(--color-primary);
            color: var(--text-primary);
            box-shadow: 0 0 0 3px rgba(39, 160, 237, 0.15);
        }
        
        .form-control::placeholder { color: var(--text-muted); }
        
        .card {
            background: var(--bg-secondary);
            border: 1px solid var(--border-color);
            border-radius: 12px;
        }
        
        .dropdown-menu {
            background: var(--bg-secondary);
            border: 1px solid var(--border-color);
        }
        
        .dropdown-item {
            color: var(--text-secondary);
        }
        
        .dropdown-item:hover {
            background: var(--bg-tertiary);
            color: var(--text-primary);
        }
        
        .demo-nav {
            background: rgba(39, 160, 237, 0.1);
            border-bottom: 1px solid var(--color-primary);
            padding: 0.5rem 0;
        }
        
        .demo-nav .container {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            flex-wrap: wrap;
        }
        
        .demo-nav a {
            padding: 0.375rem 0.75rem;
            font-size: 0.8rem;
            border-radius: 4px;
            color: var(--text-secondary);
        }
        
        .demo-nav a:hover, .demo-nav a.active {
            background: var(--color-primary);
            color: white;
        }
        
        .demo-nav .separator {
            color: var(--border-color);
            padding: 0.375rem 0.25rem;
        }
    </style>
</head>
<body>
    <!-- Demo Navigation Bar -->
    <div class="demo-nav">
        <div class="container">
            <span style="color: var(--text-muted); font-size: 0.75rem; padding: 0.375rem 0.5rem;"><i class="bi bi-info-circle"></i> DEMO PAGES:</span>
            <a href="index.php" class="<?php echo $currentPage == 'index' ? 'active' : ''; ?>">Home</a>
            <span class="separator">|</span>
            <a href="jobs.php" class="<?php echo $currentPage == 'jobs' ? 'active' : ''; ?>">Browse Jobs</a>
            <a href="job-details.php" class="<?php echo $currentPage == 'job-details' ? 'active' : ''; ?>">Job Details</a>
            <span class="separator">|</span>
            <a href="applicant-dashboard.php" class="<?php echo $currentPage == 'applicant-dashboard' ? 'active' : ''; ?>">Applicant</a>
            <a href="applicant-applications.php" class="<?php echo $currentPage == 'applicant-applications' ? 'active' : ''; ?>">My Applications</a>
            <span class="separator">|</span>
            <a href="contractor-dashboard.php" class="<?php echo $currentPage == 'contractor-dashboard' ? 'active' : ''; ?>">Contractor</a>
            <a href="contractor-applicants.php" class="<?php echo $currentPage == 'contractor-applicants' ? 'active' : ''; ?>">Manage Applicants</a>
            <span class="separator">|</span>
            <a href="admin-dashboard.php" class="<?php echo $currentPage == 'admin-dashboard' ? 'active' : ''; ?>">Admin</a>
            <a href="admin-users.php" class="<?php echo $currentPage == 'admin-users' ? 'active' : ''; ?>">Users</a>
            <a href="admin-jobs.php" class="<?php echo $currentPage == 'admin-jobs' ? 'active' : ''; ?>">Jobs</a>
            <span class="separator">|</span>
            <a href="about.php" class="<?php echo $currentPage == 'about' ? 'active' : ''; ?>">About</a>
            <a href="companies.php" class="<?php echo $currentPage == 'companies' ? 'active' : ''; ?>">Companies</a>
            <a href="services.php" class="<?php echo $currentPage == 'services' ? 'active' : ''; ?>">Services</a>
            <span class="separator">|</span>
            <a href="signin.php" class="<?php echo $currentPage == 'signin' ? 'active' : ''; ?>">Sign In</a>
            <a href="signup.php" class="<?php echo $currentPage == 'signup' ? 'active' : ''; ?>">Sign Up</a>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="bi bi-briefcase-fill me-2"></i>Ravel
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage == 'index' ? 'active' : ''; ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage == 'jobs' || $currentPage == 'job-details' ? 'active' : ''; ?>" href="jobs.php">Find Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage == 'companies' ? 'active' : ''; ?>" href="companies.php">Companies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage == 'services' ? 'active' : ''; ?>" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage == 'about' ? 'active' : ''; ?>" href="about.php">About</a>
                    </li>
                </ul>
                <div class="d-flex gap-2">
                    <a href="signin.php" class="btn btn-outline-secondary">Sign In</a>
                    <a href="signup.php" class="btn btn-primary-theme">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>
