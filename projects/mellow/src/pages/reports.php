<?php
require '../auth/userlog.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mellow - Bug Reports</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/mellow.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/themify-icons/0.1.2/css/themify-icons.min.css">
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    
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
              <span class="hide-menu">Incident Reports</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./feedbacks.php">
                <i class="ti ti-article"></i>
                <span class="hide-menu">Feedbacks</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./reports.php">
                <i class="ti ti-bug"></i>
                <span class="hide-menu">Bug Reports</span>
              </a>
            </li>
            
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
            <h1 class="my-4">Bug Reports</h1>
            <div class="d-flex justify-content-between align-items-center mb-4">

            </div>
          </div>
        </div>

        <!-- ✅ Summary Cards -->
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5>Total Bugs</h5>
                <p id="total-bugs">0</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5>Pending Bugs</h5>
                <p id="pending-bugs">0</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5>Resolved Bugs</h5>
                <p id="resolved-bugs">0</p>
              </div>
            </div>
          </div>
        </div>

        <script>
          function updateSummaryCards(data) {
            document.getElementById('total-bugs').innerText = data.totalBugs;
            document.getElementById('pending-bugs').innerText = data.pendingBugs;
            document.getElementById('resolved-bugs').innerText = data.resolvedBugs;
          }
        </script>

        <!-- Bug Reports List -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <!-- Header + Export Buttons -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h5 class="card-title mb-0">Bug Reports List</h5>
                  <div class="d-flex">
                    <button class="btn btn-success me-2" onclick="exportToCSV('BugReports.csv')">Export to CSV</button>
                    <button class="btn btn-success me-2" onclick="exportToExcel('BugReports.xlsx')">Export to Excel</button>
                  </div>
                </div>

                <!-- Search, Filter and Sort Inside the Table Header -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div class="input-group w-50">
                    <input type="text" class="form-control" id="search-input" placeholder="Search Bug Reports..." onkeyup="filterBugs()">
                  </div>
                  <div class="d-flex align-items-center">
                    <label class="me-2">Sort by:</label>
                    <select id="sort-order" class="form-select w-auto" onchange="sortBugs()">
                      <option value="newest">Newest First</option>
                      <option value="oldest">Oldest First</option>
                    </select>
                  </div>
                </div>
                <!-- ✅ Bug List -->
                <div class="table-responsive">
                  <table class="table mt-4">
                    <thead>
                      <tr>
                        <th>User</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody id="bug-list"></tbody>
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

        <!-- Modal -->
        <div class="modal fade" id="bugDetailsModal" tabindex="-1" aria-labelledby="bugDetailsModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="bugDetailsModalLabel">Bug Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p><strong>User:</strong> <span id="modal-user"></span></p>
                <p><strong>Description:</strong> <span id="modal-description"></span></p>
                <p><strong>Date:</strong> <span id="modal-date"></span></p>
                <p><strong>Status:</strong> <span id="modal-status"></span></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" id="modal-delete">Delete</button>
                <button type="button" class="btn btn-success" id="modal-resolve">Resolve</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal for Delete Confirmation -->
        <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Are you sure you want to delete this bug report?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirm-delete">Delete</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal for Resolve Confirmation -->
        <div class="modal fade" id="resolveConfirmationModal" tabindex="-1" aria-labelledby="resolveConfirmationModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="resolveConfirmationModalLabel">Confirm Resolve</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Are you sure you want to mark this bug report as resolved?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" id="confirm-resolve">Resolve</button>
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
    let bugsData = [];
    let filteredData = [];
    let currentPage = 1;
    let rowsPerPage = 10;
    let sortOrder = 'newest';
    let bugIdToDelete = null;
    let bugIdToResolve = null;

    // ✅ Fetch Bugs Data
    async function fetchBugs() {
      console.log('Fetching bugs data...');
      const response = await fetch('../firebase/fetch_bugs.php');
      const result = await response.json();
      console.log('Fetched data:', result);
      bugsData = result.bugs;
      filteredData = [...bugsData];

      renderTable();
      updateSummaryCards(result);
    }

    // ✅ Render Table with Pagination and Sorting
    function renderTable() {
      console.log('Rendering table...');
      const start = (currentPage - 1) * rowsPerPage;
      const end = start + rowsPerPage;
      const paginatedData = filteredData.slice(start, end);

      displayTable(paginatedData);
      updatePagination();
    }

    // ✅ Display Table
    function displayTable(data) {
      console.log('Displaying table data:', data);
      const list = document.getElementById('bug-list');
      list.innerHTML = '';
      data.forEach((bug) => {
        list.innerHTML += `
          <tr>
            <td>${bug.email}</td>
            <td>${bug.description}</td>
            <td>${bug.timestamp}</td>
            <td>${bug.status}</td>
            <td>
              <button class="btn btn-primary btn-sm" onclick="viewBugDetails('${bug.id}')">
                <i class="bi bi-eye"></i>
              </button>
              <button class="btn btn-danger btn-sm" onclick="confirmDeleteBug('${bug.id}')">
                <i class="bi bi-trash"></i>
              </button>
              <button class="btn btn-success btn-sm" onclick="confirmResolveBug('${bug.id}')">
                <i class="bi bi-check-circle"></i>
              </button>
            </td>
          </tr>`;
      });
    }

    // ✅ Filter Bugs by Search Term
    function filterBugs() {
      const input = document.getElementById('search-input').value.toLowerCase();
      filteredData = bugsData.filter(bug =>
        bug.description.toLowerCase().includes(input) ||
        bug.email.toLowerCase().includes(input)
      );

      currentPage = 1;
      renderTable();
    }

    // ✅ Export to Excel
    function exportToExcel() {
      const ws = XLSX.utils.json_to_sheet(bugsData);
      const wb = XLSX.utils.book_new();
      XLSX.utils.book_append_sheet(wb, ws, 'Bug Reports');
      XLSX.writeFile(wb, 'BugReports.xlsx');
    }

    // ✅ Export to CSV
    function exportToCSV() {
      const csv = bugsData.map(bug => 
        `${bug.email},${bug.description},${bug.timestamp},${bug.status}`
      ).join('\n');
      const blob = new Blob([csv], { type: 'text/csv' });
      const url = window.URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.setAttribute('hidden', '');
      a.setAttribute('href', url);
      a.setAttribute('download', 'BugReports.csv');
      document.body.appendChild(a);
      a.click();
      document.body.removeChild(a);
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

    // ✅ Sort Bugs
    function sortBugs() {
      sortOrder = document.getElementById('sort-order').value;

      filteredData.sort((a, b) => {
        const dateA = new Date(a.timestamp || 0).getTime();
        const dateB = new Date(b.timestamp || 0).getTime();

        return sortOrder === 'newest' ? dateB - dateA : dateA - dateB;
      });

      currentPage = 1;
      renderTable();
    }

    // ✅ Update Rows Per Page
    function updateRowsPerPage() {
      rowsPerPage = parseInt(document.getElementById('rows-per-page').value);
      currentPage = 1;
      renderTable();
    }

    // ✅ View Bug Details
    function viewBugDetails(bugId) {
      const bug = bugsData.find(b => b.id === bugId);
      if (bug) {
        document.getElementById('modal-user').innerText = bug.email;
        document.getElementById('modal-description').innerText = bug.description;
        document.getElementById('modal-date').innerText = bug.timestamp;
        document.getElementById('modal-status').innerText = bug.status;
        document.getElementById('modal-delete').onclick = () => {
          bugIdToDelete = bugId;
          const deleteConfirmationModal = new bootstrap.Modal(document.getElementById('deleteConfirmationModal'));
          deleteConfirmationModal.show();
        };
        document.getElementById('modal-resolve').onclick = () => {
          bugIdToResolve = bugId;
          const resolveConfirmationModal = new bootstrap.Modal(document.getElementById('resolveConfirmationModal'));
          resolveConfirmationModal.show();
        };
        const bugDetailsModal = new bootstrap.Modal(document.getElementById('bugDetailsModal'));
        bugDetailsModal.show();
      }
    }

    // ✅ Confirm Delete Bug
    function confirmDeleteBug(bugId) {
      bugIdToDelete = bugId;
      const deleteConfirmationModal = new bootstrap.Modal(document.getElementById('deleteConfirmationModal'));
      deleteConfirmationModal.show();
    }

    // ✅ Confirm Resolve Bug
    function confirmResolveBug(bugId) {
      bugIdToResolve = bugId;
      const resolveConfirmationModal = new bootstrap.Modal(document.getElementById('resolveConfirmationModal'));
      resolveConfirmationModal.show();
    }

    // ✅ Confirm Delete Bug
    document.getElementById('confirm-delete').onclick = async function() {
      if (bugIdToDelete) {
        const response = await fetch('../firebase/delete_bug.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({ bugId: bugIdToDelete }),
      });


        const result = await response.json();
        if (result.success) {
          bugsData = bugsData.filter(b => b.id !== bugIdToDelete);
          filteredData = filteredData.filter(b => b.id !== bugIdToDelete);
          renderTable();
          const deleteConfirmationModal = bootstrap.Modal.getInstance(document.getElementById('deleteConfirmationModal'));
          deleteConfirmationModal.hide();
          const bugDetailsModal = bootstrap.Modal.getInstance(document.getElementById('bugDetailsModal'));
          bugDetailsModal.hide();
        } else {
          console.error('Failed to delete bug:', result.error);
        }
      }
    };

    // ✅ Confirm Resolve Bug
    document.getElementById('confirm-resolve').onclick = async function() {
      if (bugIdToResolve) {
        const response = await fetch('../firebase/resolve_bug.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },
          body: new URLSearchParams({ bugId: bugIdToResolve }),
        });

        const result = await response.json();
        if (result.success) {
          const bug = bugsData.find(b => b.id === bugIdToResolve);
          if (bug) {
            bug.status = 'Resolved';
            renderTable();
            const resolveConfirmationModal = bootstrap.Modal.getInstance(document.getElementById('resolveConfirmationModal'));
            resolveConfirmationModal.hide();
            const bugDetailsModal = bootstrap.Modal.getInstance(document.getElementById('bugDetailsModal'));
            bugDetailsModal.hide();
          }
        } else {
          console.error('Failed to resolve bug:', result.error);
        }
      }
    };

    // ✅ Update Summary Cards
    function updateSummaryCards(data) {
      document.getElementById('total-bugs').innerText = data.totalBugs;
      document.getElementById('pending-bugs').innerText = data.pendingBugs;
      document.getElementById('resolved-bugs').innerText = data.resolvedBugs;
    }

    // Call fetchBugs to load data when the page loads
    document.addEventListener('DOMContentLoaded', fetchBugs);
  </script>
  </style>

</body>

</html>