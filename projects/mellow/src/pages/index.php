<?php
require '../auth/userlog.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mellow Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/mellow.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/themify-icons/0.1.2/css/themify-icons.min.css">
</head>

<body>
  <!-- ✅ Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!-- ✅ Sidebar Start -->
    <aside class="left-sidebar">
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.php" class="text-nowrap logo-img">
            <img src="../assets/images/logos/MELLOW.svg" width="180" alt="Mellow Logo" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>

        <!-- ✅ Sidebar navigation -->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">

            <!-- ✅ Home Section -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.php">
                <i class="ti ti-layout-dashboard"></i>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>

            <!-- ✅ Management Section -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Management</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./users.php">
                <i class="ti ti-user"></i>
                <span class="hide-menu">Users</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./college.php">
                <i class="ti ti-school"></i>
                <span class="hide-menu">Colleges</span>
              </a>
            </li>

            <!-- ✅ Incident Reports Section -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Reports</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./feedbacks.php">
                <i class="ti ti-article"></i>
                <span class="hide-menu">Feedbacks</span>
              </a>
            </li>
            <!-- <li class="sidebar-item">
              <a class="sidebar-link" href="./reports.php">
                <i class="ti ti-bug"></i>
                <span class="hide-menu">Bug Reports</span>
              </a>
            </li> -->
          </ul>
        </nav>
      </div>
    </aside>
    <!-- ✅ Sidebar End -->

    <!-- Main Content -->
    <div class="body-wrapper">
      <!-- Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/mellow_profile.png" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="../auth/logout.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Header End -->

      <!-- ✅ Page Header -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h1 class="my-4">Dashboard</h1>
          </div>
        </div>

        <!-- ✅ Overview Cards -->
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5>Total Users</h5>
                <p id="total-users">Loading...</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5>Total Tasks</h5>
                <p id="total-tasks">Loading...</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5>Total Spaces</h5>
                <p id="total-spaces">Loading...</p>
              </div>
            </div>
          </div>
        </div>

        <!-- ✅ Latest Registered Users -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Latest Registered Users</h5>
                <ul id="latest-users" class="list-group">
                  <li class="list-group-item">Loading...</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- ✅ Latest Feedbacks -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Latest Feedbacks</h5>
                <ul id="latest-feedbacks" class="list-group">
                  <li class="list-group-item">Loading...</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

         <!-- ✅ Charts Section -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Active vs Inactive Users</h5>
                <div id="activeUsersChart"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Task Type Distribution</h5>
                <div id="taskTypeChart"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Space Type Distribution</h5>
                <div id="spaceTypeChart"></div>
              </div>
            </div>
          </div>
        </div>

        <!-- ✅ Fetch Data -->
        <script>
          function fetchDashboardData() {
            fetch('../firebase/dashboard-data.php')
              .then(response => {
                console.log('Response:', response);
                if (!response.ok) {
                  throw new Error('Network response was not ok ' + response.statusText);
                }
                return response.json();
              })
              .then(data => {
                console.log('Data:', data);
                document.getElementById('total-users').textContent = data.totalUsers;
                document.getElementById('total-tasks').textContent = data.totalTasks;
                document.getElementById('total-spaces').textContent = data.totalSpaces;

                updateList('latest-users', data.latestUsers);
                updateFeedbackList('latest-feedbacks', data.latestFeedbacks);

                renderActiveUsersChart(data.activeUsers);
                renderTaskTypeChart(data.taskTypes);
                renderSpaceTypeChart(data.spaceTypes);
              })
              .catch(error => console.error('Error fetching dashboard data:', error));
          }

          function updateList(elementId, items) {
            const list = document.getElementById(elementId);
            list.innerHTML = '';
            items.forEach(item => {
              const listItem = document.createElement('li');
              listItem.className = 'list-group-item';
              listItem.textContent = item;
              list.appendChild(listItem);
            });
          }

          function updateFeedbackList(elementId, feedbacks) {
            const list = document.getElementById(elementId);
            list.innerHTML = '';
            feedbacks.forEach(feedback => {
              const listItem = document.createElement('li');
              listItem.className = 'list-group-item';
              listItem.innerHTML = `<strong>Rating:</strong> ${feedback.rating} <br> <strong>Comment:</strong> ${feedback.comment}`;
              list.appendChild(listItem);
            });
          }

          function renderActiveUsersChart(activeUsers) {
            var activeChart = new ApexCharts(document.querySelector("#activeUsersChart"), {
              chart: { type: 'donut' },
              series: activeUsers.series,
              labels: activeUsers.labels,
              colors: ['#4CAF50', '#FF5722']
            });
            activeChart.render();
          }

          function renderTaskTypeChart(taskTypes) {
            var taskChart = new ApexCharts(document.querySelector("#taskTypeChart"), {
              chart: { type: 'bar' },
              series: [{ name: 'Tasks', data: taskTypes.series }],
              xaxis: { categories: taskTypes.labels },
              colors: ['#1E88E5']
            });
            taskChart.render();
          }

          function renderSpaceTypeChart(spaceTypes) {
            var spaceChart = new ApexCharts(document.querySelector("#spaceTypeChart"), {
              chart: { type: 'bar' },
              series: [{ name: 'Spaces', data: spaceTypes.series }],
              xaxis: { categories: spaceTypes.labels },
              colors: ['#1E88E5']
            });
            spaceChart.render();
          }

          document.addEventListener('DOMContentLoaded', fetchDashboardData);
        </script>
        <!-- ✅ JavaScript -->
        <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/sidebarmenu.js"></script>
        <script src="../assets/js/app.min.js"></script>
        <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
        <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
        <script src="../assets/js/dashboard.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
      </div>
    </div>
  </div>
</body>

</html>