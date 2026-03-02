<?php
require '../auth/userlog.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mellow - Users</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/mellow.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
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

      <!-- ✅ Page Header -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h1 class="my-4">Users</h1>
            <div class="d-flex justify-content-between align-items-center mb-4">
              </div>
          </div>
        </div>
              <!-- Summary Cards -->
            <div class="row mb-4">
              <div class="col-lg-4 col-md-6">
                <div class="card">
                  <div class="card-body">
                      <h5>Total Users</h5>
                      <p id="total-users">Loading...</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h5>Total Active Users</h5>
                      <p id="total-active-users">Loading...</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h5>Total Inactive Users</h5>
                      <p id="total-inactive-users">Loading...</p>
                    </div>
            </div>
          </div>
        </div>
        <!-- Users List -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <!-- Header + Export Buttons -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h5 class="card-title mb-0">Users List</h5>
                  <div class="d-flex">
                    <button class="btn btn-success me-2" onclick="exportUsersToCSV('Users.csv')">Export to CSV</button>
                    <button class="btn btn-success" onclick="exportUsersToExcel('Users.xlsx')">Export to Excel</button>
                  </div>
                </div>

                <!-- ✅ Search, Filter, and Sort -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div class="input-group w-50">
                    <input type="text" class="form-control" id="search-users" placeholder="Search by name or email" onkeyup="filterTable()">
                  </div>
                  <div class="d-flex align-items-center">
                    <label class="me-2">Sort by:</label>
                    <select id="sort-order" class="form-select w-auto" onchange="sortUsers()">
                      <option value="name">Name</option>
                      <option value="email">Email</option>
                      <option value="registrationDate">Registration Date</option>
                      <option value="lastLogin">Last Login</option>
                    </select>
                    <select id="sort-direction" class="form-select w-auto ms-2" onchange="sortUsers()">
                      <option value="asc">Ascending</option>
                      <option value="desc">Descending</option>
                    </select>
                  </div>
                </div>

                <!-- ✅ Table -->
                <div class="table-responsive">
                  <table class="table table-hover" id="users-table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Registration Date</th>
                        <th>Last Login</th>
                        <th>Actions</th> <!-- Add Actions column -->
                      </tr>
                    </thead>
                    <tbody id="users-list">
                      <!-- Populated by JS -->
                    </tbody>
                  </table>
                </div>

                <!-- ✅ Pagination and Rows Per Page -->
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div>
                    <label for="rows-per-page">Rows per page:</label>
                    <select id="rows-per-page" class="form-select w-auto ms-2" onchange="updateRowsPerPage()">
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
      <!-- ✅ Page Header End -->
    </div>
  </div>
  <!-- User Details Modal -->
  <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title" id="userModalLabel">User Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body">
          <p><strong>Name:</strong> <span id="modal-name"></span></p>
          <p><strong>Email:</strong> <span id="modal-email"></span></p>
          <p><strong>Status:</strong> <span id="modal-status"></span></p>
          <p><strong>Registration Date:</strong> <span id="modal-registration-date"></span></p>
          <p><strong>Last Login:</strong> <span id="modal-last-login"></span></p>
        </div>

        <!-- Modal Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
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
      let userData = [];
      let currentPage = 1;
      let rowsPerPage = 10;
      let sortOrder = 'name';
      let sortDirection = 'asc';

      // ✅ Fetch Data
      async function fetchUsers() {
        const usersList = document.getElementById('users-list');
        usersList.innerHTML = '';

        try {
          const response = await fetch('../firebase/fetch_users.php');
          const data = await response.json();

          if (data.error) {
            console.error(data.error);
            return;
          }

          userData = data.users;
          renderTable();
          updateSummaryCards();
        } catch (error) {
          console.error('Error fetching users:', error);
        }
      }

      // ✅ Render Table
      function renderTable(filteredData = userData) {
        const tableBody = document.getElementById('users-list');
        tableBody.innerHTML = '';

        const start = (currentPage - 1) * rowsPerPage;
        const end = start + rowsPerPage;
        const dataToDisplay = filteredData.slice(start, end);

        dataToDisplay.forEach(user => {
          tableBody.innerHTML += `
            <tr>
              <td>${user.name || 'N/A'}</td>
              <td>${user.email || 'N/A'}</td>
              <td>${user.status || 'N/A'}</td>
              <td>${user.registrationDate || 'N/A'}</td>
              <td>${user.lastLogin || 'N/A'}</td>
              <td><button class="btn btn-primary view-details" data-id="${user.id}">View</button></td> <!-- Add View button -->
            </tr>
          `;
        });

        updatePagination(filteredData);
        addEventListeners(); // ✅ Bind after rendering
      }

        // ✅ Add Event Listeners After Table Render
        function addEventListeners() {
          document.querySelectorAll('.view-details').forEach(button => {
            button.addEventListener('click', function () {
              const userId = this.getAttribute('data-id');
              viewUserDetails(userId);
            });
          });
        }

        // ✅ Pagination
        function updatePagination(filteredData = userData) {
          const totalPages = Math.ceil(filteredData.length / rowsPerPage);
          document.getElementById('page-info').innerText = `Page ${currentPage} of ${totalPages}`;
          document.getElementById('prev-page').disabled = currentPage === 1;
          document.getElementById('next-page').disabled = currentPage === totalPages;
        }

        function nextPage() {
          if (currentPage * rowsPerPage < userData.length) {
            currentPage++;
            renderTable();
          }
        }

        function prevPage() {
          if (currentPage > 1) {
            currentPage--;
            renderTable();
          }
        }

        function updateRowsPerPage() {
          rowsPerPage = parseInt(document.getElementById('rows-per-page').value);
          currentPage = 1;
          renderTable();
        }

        // ✅ Sort Function
        function sortUsers() {
          sortOrder = document.getElementById('sort-order').value;
          sortDirection = document.getElementById('sort-direction').value;

          userData.sort((a, b) => {
            let valueA = a[sortOrder] || '';
            let valueB = b[sortOrder] || '';
            if (sortOrder === 'registrationDate' || sortOrder === 'lastLogin') {
              valueA = valueA ? new Date(valueA) : 0;
              valueB = valueB ? new Date(valueB) : 0;
            }
            let comparison = valueA > valueB ? 1 : valueA < valueB ? -1 : 0;
            return sortDirection === 'asc' ? comparison : -comparison;
          });

          currentPage = 1;
          renderTable();
        }

        // ✅ Filter Function
        function filterTable() {
          const searchValue = document.getElementById('search-users').value.toLowerCase();

          const filteredData = userData.filter(user =>
            user.name.toLowerCase().includes(searchValue) ||
            user.email.toLowerCase().includes(searchValue)
          );

          currentPage = 1;
          renderTable(filteredData);
          updatePagination(filteredData);
        }

        // ✅ Update Summary Cards
        function updateSummaryCards() {
          const totalUsers = userData.length;
          const totalActiveUsers = userData.filter(user => user.status.toLowerCase() === 'active').length;
          const totalInactiveUsers = userData.filter(user => user.status.toLowerCase() === 'inactive').length;
        
          document.getElementById('total-users').innerText = totalUsers;
          document.getElementById('total-active-users').innerText = totalActiveUsers;
          document.getElementById('total-inactive-users').innerText = totalInactiveUsers;
        }

        // ✅ View User Details
        function viewUserDetails(userId) {
          const user = userData.find(u => u.id === userId);
          if (user) {
            document.getElementById('modal-name').innerText = user.name || 'N/A';
            document.getElementById('modal-email').innerText = user.email || 'N/A';
            document.getElementById('modal-status').innerText = user.status || 'N/A';
            document.getElementById('modal-registration-date').innerText = user.registrationDate || 'N/A';
            document.getElementById('modal-last-login').innerText = user.lastLogin || 'N/A';

            const userModal = new bootstrap.Modal(document.getElementById('userModal'));
            userModal.show();
          }
        }

        // Call fetchUsers to load data when the page loads
        document.addEventListener('DOMContentLoaded', fetchUsers);

        // ✅ Export to CSV
        function exportUsersToCSV(filename) {
          if (!userData || userData.length === 0) {
            alert('No data available to export.');
            return;
          }

          const csvRows = [];
          const headers = ['Name', 'Email', 'Status', 'Registration Date', 'Last Login'];
          csvRows.push(headers.join(','));

          userData.forEach(user => {
            const row = [
              `"${user.name || 'N/A'}"`,
              `"${user.email || 'N/A'}"`,
              `"${user.status || 'N/A'}"`,
              `"${user.registrationDate || 'N/A'}"`,
              `"${user.lastLogin || 'N/A'}"`
            ];
            csvRows.push(row.join(','));
          });

          const csvContent = csvRows.join('\n');
          const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
          const link = document.createElement('a');
          link.href = URL.createObjectURL(blob);
          link.download = filename;
          link.style.display = 'none';
          document.body.appendChild(link);
          link.click();
          document.body.removeChild(link);
        }

       function exportUsersToExcel(filename) {
        if (!userData || userData.length === 0) {
          alert('No data available to export.');
          return;
        }

        // Define worksheet data
        const worksheetData = [
          ['Name', 'Email', 'Status', 'Registration Date', 'Last Login'] // Header row
        ];

        userData.forEach(user => {
          worksheetData.push([
            user.name || 'N/A',
            user.email || 'N/A',
            user.status || 'N/A',
            user.registrationDate || 'N/A',
            user.lastLogin || 'N/A'
          ]);
        });

        // Create worksheet
        const worksheet = XLSX.utils.aoa_to_sheet(worksheetData);

        // Create workbook and append worksheet
        const workbook = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(workbook, worksheet, 'Users');

        // Write file
        XLSX.writeFile(workbook, filename);
      }
    </script>