<?php
require '../auth/userlog.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mellow - Feedbacks</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/mellow.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/themify-icons/0.1.2/css/themify-icons.min.css">
</head>

<body>
  <!-- ✅ Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical">

    <!-- Sidebar Start -->
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

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">

            <!-- Home Section -->
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

            <!-- Incident Reports Section -->
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
    <!-- Sidebar End -->

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

      <!-- Page Header -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h1 class="my-4">Feedbacks</h1>
            <div class="d-flex justify-content-between align-items-center mb-4">

            </div>
          </div>
        </div>

        <!-- Summary Cards -->
        <div class="row mb-4">
          <div class="col-lg-6 col-md-6">
            <div class="card">
              <div class="card-body">
                <h5>Rating</h5>
                <p id="average-rating">Loading...</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="card">
              <div class="card-body">
                <h5>Total Feedback</h5>
                <p id="total-feedback">Loading...</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Feedback List -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <!-- Header + Export Buttons -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h5 class="card-title mb-0">Feedback List</h5>
                  <div class="d-flex">
                    <button class="btn btn-success me-2" onclick="exportFeedbackToCSV('Feedback.csv')">Export to CSV</button>
                    <button class="btn btn-success me-2" onclick="exportFeedbackToExcel('Feedback.xlsx')">Export to Excel</button>
                  </div>
                </div>

                <!-- Search, Filter and Sort Inside the Table Header -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div class="input-group w-50">
                    <input type="text" class="form-control" id="search-input" placeholder="Search feedback..." onkeyup="filterFeedback()">
                  </div>
                  <div class="d-flex align-items-center">
                    <label class="me-2">Sort by:</label>
                    <select id="sort-order" class="form-select w-auto" onchange="sortFeedbacks()">
                      <option value="newest">Newest First</option>
                      <option value="oldest">Oldest First</option>
                    </select>
                  </div>
                </div>

                <!-- ✅ Feedback List Table -->
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>User</th>
                        <th>Comment</th>
                        <th>Experience</th>
                        <th>Date Submitted</th>
                      </tr>
                    </thead>
                    <tbody id="feedback-list">
                      <!-- Feedback items will be populated here -->
                    </tbody>
                  </table>
                </div>

                <!-- Pagination and Rows Per Page -->
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div>
                    <label for="rows-per-page">Rows per page:</label>
                    <select id="rows-per-page" class="form-select d-inline-block w-auto ms-2" onchange="updateRowsPerPage()">
                      <option value="5">5</option>
                      <option value="10" selected>10</option>
                      <option value="20">20</option>
                    </select>
                  </div>
                  <div>
                    <button class="btn btn-secondary me-2" id="prev-page" onclick="prevPage()">&#9664;</button>
                    <span id="page-info">Page 1</span>
                    <button class="btn btn-secondary ms-2" id="next-page" onclick="nextPage()">&#9654;</button>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>

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
  <script>
    let feedbackData = [];
    let filteredData = [];
    let currentPage = 1;
    let rowsPerPage = 10;
    let sortOrder = 'newest';

    // ✅ Fetch Feedback Data
    async function fetchFeedbacks() {
      try {
        const response = await fetch('../firebase/fetch_feedbacks.php');
        const data = await response.json();

        if (data.error) {
          console.error(data.error);
          return;
        }

        feedbackData = data.feedbacks || [];
        filteredData = [...feedbackData]; // Initialize filtered data with full data set
        document.getElementById('total-feedback').innerText = data.totalFeedback || 0;
        document.getElementById('average-rating').innerText = data.averageRating || 0;

        sortFeedbacks(); // ✅ Apply default sorting
      } catch (error) {
        console.error('Error fetching feedback:', error);
      }
    }

    // ✅ Render Feedback Table
    function renderTable() {
      const tableBody = document.getElementById('feedback-list');
      tableBody.innerHTML = '';

      const start = (currentPage - 1) * rowsPerPage;
      const end = start + rowsPerPage;
      const dataToDisplay = filteredData.slice(start, end);

      if (dataToDisplay.length === 0) {
        tableBody.innerHTML = `<tr><td colspan="4" class="text-center">No matching feedback found</td></tr>`;
        updatePagination(); // Update pagination even if no data to display
        return;
      }

      dataToDisplay.forEach(feedback => {
        const row = `
          <tr>
            <td>${feedback.email || 'No email provided'}</td>
            <td>${feedback.comment || 'No comment provided'}</td>
            <td>${feedback.experience || 'N/A'}</td>
            <td>${feedback.timestamp ? new Date(feedback.timestamp).toLocaleDateString() : 'N/A'}</td>
          </tr>
        `;
        tableBody.insertAdjacentHTML('beforeend', row);
      });

      updatePagination();
    }

    // ✅ Update Pagination
    function updatePagination() {
      const totalPages = Math.ceil(filteredData.length / rowsPerPage);
      document.getElementById('page-info').innerText = `Page ${currentPage} of ${totalPages || 1}`;
      document.getElementById('prev-page').disabled = currentPage === 1;
      document.getElementById('next-page').disabled = currentPage === totalPages || totalPages === 0;
    }

    // ✅ Next Page
    function nextPage() {
      if (currentPage * rowsPerPage < filteredData.length) {
        currentPage++;
        renderTable();
      }
    }

    // ✅ Previous Page
    function prevPage() {
      if (currentPage > 1) {
        currentPage--;
        renderTable();
      }
    }

    // ✅ Update Rows Per Page
    function updateRowsPerPage() {
      rowsPerPage = parseInt(document.getElementById('rows-per-page').value);
      currentPage = 1;
      renderTable();
    }

    // ✅ Sort Feedbacks
    function sortFeedbacks() {
      sortOrder = document.getElementById('sort-order').value;

      filteredData.sort((a, b) => {
        const dateA = new Date(a.timestamp || 0).getTime();
        const dateB = new Date(b.timestamp || 0).getTime();

        return sortOrder === 'newest' ? dateB - dateA : dateA - dateB;
      });

      currentPage = 1;
      renderTable();
    }

    // ✅ Filter Feedbacks by Search Term (Fixed)
    function filterFeedback() {
        const input = document.getElementById('search-input').value.toLowerCase();
        const rows = document.querySelectorAll('#feedback-list tr');

        rows.forEach(row => {
            // ✅ Get text from all table cells
            const cells = row.getElementsByTagName('td');
            let match = false;

            // ✅ Search across all fields (comment, email, experience, etc.)
            for (let i = 0; i < cells.length; i++) {
                if (cells[i].innerText.toLowerCase().includes(input)) {
                    match = true;
                    break;
                }
            }

            // ✅ Show row if any field matches
            row.style.display = match ? '' : 'none';
        });
    }



    // ✅ Export to CSV
    function exportFeedbackToCSV(filename) {
      const csvContent = [
        ['User', 'Comment', 'Experience', 'Date Submitted'],
        ...filteredData.map(feedback => [
          feedback.email || 'No email provided',
          feedback.comment || 'No comment provided',
          feedback.experience || 'N/A',
          feedback.timestamp ? new Date(feedback.timestamp).toLocaleDateString() : 'N/A'
        ])
      ]
        .map(row => row.map(cell => `"${cell}"`).join(','))
        .join('\n');

      const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
      const url = URL.createObjectURL(blob);
      const link = document.createElement('a');
      link.setAttribute('href', url);
      link.setAttribute('download', filename);
      link.click();
    }

    // ✅ Export to Excel
    function exportFeedbackToExcel(filename) {
      const wb = XLSX.utils.book_new();
      const ws = XLSX.utils.json_to_sheet(
        filteredData.map(feedback => ({
          User: feedback.email || 'No email provided',
          Comment: feedback.comment || 'No comment provided',
          Experience: feedback.experience || 'N/A',
          Date_Submitted: feedback.timestamp ? new Date(feedback.timestamp).toLocaleDateString() : 'N/A'
        }))
      );

      XLSX.utils.book_append_sheet(wb, ws, 'Feedback');
      XLSX.writeFile(wb, filename);
    }

    // ✅ Load on Page Load
    document.addEventListener('DOMContentLoaded', fetchFeedbacks);

    // ✅ Attach event listeners for buttons and filters
    document.getElementById('prev-page').addEventListener('click', prevPage);
    document.getElementById('next-page').addEventListener('click', nextPage);
    document.getElementById('rows-per-page').addEventListener('change', updateRowsPerPage);
    document.getElementById('sort-order').addEventListener('change', sortFeedbacks);
    document.getElementById('search-input').addEventListener('input', filterFeedback); // ✅ Fixed selector and event binding

  </script>

</body>

</html>