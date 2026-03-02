<?php
require '../auth/userlog.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mellow - Colleges</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
            <li class="nav-small-cap"><i class="ti ti-dots nav-small-cap-icon fs-4"></i><span class="hide-menu">Home</span></li>
            <li class="sidebar-item"><a class="sidebar-link" href="./index.php"><i class="ti ti-layout-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

            <li class="nav-small-cap"><i class="ti ti-dots nav-small-cap-icon fs-4"></i><span class="hide-menu">Management</span></li>
            <li class="sidebar-item"><a class="sidebar-link" href="./users.php"><i class="ti ti-user"></i><span class="hide-menu">Users</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link" href="./college.php"><i class="ti ti-school"></i><span class="hide-menu">Colleges</span></a></li>

            <li class="nav-small-cap"><i class="ti ti-dots nav-small-cap-icon fs-4"></i><span class="hide-menu">Reports</span></li>
            <li class="sidebar-item"><a class="sidebar-link" href="./feedbacks.php"><i class="ti ti-article"></i><span class="hide-menu">Feedbacks</span></a></li>
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
            <h1 class="my-4">Colleges</h1>
          </div>
        </div>

        <!-- Colleges List -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h5 class="card-title mb-0">Colleges List</h5>
                  <div class="d-flex">
                    <button class="btn btn-success me-2" onclick="exportCollegesToCSV('Colleges.csv')">Export to CSV</button>
                    <button class="btn btn-success me-2" onclick="exportCollegesToExcel('Colleges.xlsx')">Export to Excel</button>
                  </div>
                </div>

                <div class="table-responsive">
                  <table class="table table-hover" id="colleges-table">
                    <thead>
                      <tr>
                        <th>College</th>
                        <th>Number of Students</th>
                      </tr>
                    </thead>
                    <tbody id="colleges-list">
                      <!-- Data will be populated here -->
                    </tbody>
                  </table>
                </div>

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
        </div> <!-- End of Row -->
      </div> <!-- End of Container -->
    </div> <!-- End of body-wrapper -->
  </div> <!-- End of page-wrapper -->

</body>
</html>

  <!-- JavaScript -->
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
    let currentPage = 1;
    let rowsPerPage = 10;

    // ✅ Fetch Data and Populate Table
    async function fetchColleges() {
        const collegesList = document.getElementById('colleges-list');
        collegesList.innerHTML = '';

        try {
            const response = await fetch('../firebase/fetch_colleges.php');
            const data = await response.json();

            if (data.error) {
                console.error(data.error);
                return;
            }

            window.collegesData = data;
            displayTable(data, currentPage, rowsPerPage);
            updatePaginationInfo(data.length);
        } catch (error) {
            console.error('Error fetching colleges:', error);
        }
    }

    function displayTable(data, page, rows) {
        const collegesList = document.getElementById('colleges-list');
        collegesList.innerHTML = '';

        const start = (page - 1) * rows;
        const end = start + rows;
        const paginatedItems = data.slice(start, end);

        paginatedItems.forEach((college, index) => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>
                    <button 
                        class="btn btn-link text-start w-100 ${college.programs.length > 0 ? '' : 'disabled'}" 
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse-${index}"
                        aria-expanded="false"
                        aria-controls="collapse-${index}"
                        onclick="toggleCollapse(${index})">
                        ${college.college}
                    </button>
                    
                    <div class="collapse mt-2" id="collapse-${index}">
                        <ul class="list-group">
                        ${college.programs.map(program => `
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                            ${program.program}
                            <span class="badge bg-primary rounded-pill">${program.count}</span>
                            </li>
                        `).join('')}
                        </ul>
                    </div>
                </td>
                <td>${college.count}</td>
            `;

            collegesList.appendChild(row);
        });
    }

    function toggleCollapse(index) {
      const collapseElement = document.getElementById(`collapse-${index}`);
      const buttonElement = document.querySelector(`[data-bs-target="#collapse-${index}"]`);

      // Bootstrap's built-in collapse instance
      const bsCollapse = new bootstrap.Collapse(collapseElement, {
          toggle: false,
      });

      // Check if it's currently shown
      if (collapseElement.classList.contains('show')) {
          bsCollapse.hide();
          buttonElement.setAttribute('aria-expanded', 'false');
      } else {
          bsCollapse.show();
          buttonElement.setAttribute('aria-expanded', 'true');
      }
  }

    function updatePaginationInfo(totalItems) {
        const pageInfo = document.getElementById('page-info');
        const totalPages = Math.ceil(totalItems / rowsPerPage);
        pageInfo.textContent = `Page ${currentPage} of ${totalPages}`;
    }

    function prevPage() {
        if (currentPage > 1) {
            currentPage--;
            displayTable(window.collegesData, currentPage, rowsPerPage);
            updatePaginationInfo(window.collegesData.length);
        }
    }

    function nextPage() {
        const totalPages = Math.ceil(window.collegesData.length / rowsPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            displayTable(window.collegesData, currentPage, rowsPerPage);
            updatePaginationInfo(window.collegesData.length);
        }
    }

    function updateRowsPerPage() {
        rowsPerPage = parseInt(document.getElementById('rows-per-page').value);
        currentPage = 1;
        displayTable(window.collegesData, currentPage, rowsPerPage);
        updatePaginationInfo(window.collegesData.length);
    }

    // ✅ Export to CSV
    function exportCollegesToCSV(filename) {
        const csv = [];
        const rows = document.querySelectorAll('#colleges-table tr');

        for (const row of rows) {
            const cols = row.querySelectorAll('td, th');
            const rowData = [];
            for (const col of cols) {
                rowData.push(col.innerText);
            }
            csv.push(rowData.join(','));
        }

        downloadCSV(csv.join('\n'), filename);
    }

    function downloadCSV(csv, filename) {
        const csvFile = new Blob([csv], { type: 'text/csv' });
        const downloadLink = document.createElement('a');
        downloadLink.download = filename;
        downloadLink.href = window.URL.createObjectURL(csvFile);
        downloadLink.style.display = 'none';
        document.body.appendChild(downloadLink);
        downloadLink.click();
        document.body.removeChild(downloadLink);
    }

    // ✅ Export to Excel
    function exportCollegesToExcel(filename) {
        const table = document.getElementById('colleges-table');
        const workbook = XLSX.utils.table_to_book(table, { sheet: 'Sheet1' });
        XLSX.writeFile(workbook, filename);
    }

    // ✅ Filter Function
    function filterTable() {
        const input = document.getElementById('search-colleges').value.toLowerCase();
        const filteredData = window.collegesData.filter(college => 
            college.college.toLowerCase().includes(input) || 
            college.programs.some(program => program.program.toLowerCase().includes(input))
        );
        displayTable(filteredData, currentPage, rowsPerPage);
        updatePaginationInfo(filteredData.length);
    }

    // ✅ Sorting Logic
    function sortColleges() {
        const sortOrder = document.getElementById('sort-order').value;
        let rows = Array.from(document.querySelectorAll('#colleges-list tr'));

        rows.sort((a, b) => {
            const collegeA = a.cells[0].innerText.trim().toLowerCase();
            const collegeB = b.cells[0].innerText.trim().toLowerCase();
            const countA = parseInt(a.cells[1].innerText.trim());
            const countB = parseInt(b.cells[1].innerText.trim());

            if (sortOrder === 'name-asc') return collegeA.localeCompare(collegeB);
            if (sortOrder === 'name-desc') return collegeB.localeCompare(collegeA);
            if (sortOrder === 'students-asc') return countA - countB;
            if (sortOrder === 'students-desc') return countB - countA;
        });

        const collegesList = document.getElementById('colleges-list');
        rows.forEach(row => collegesList.appendChild(row));
    }

    // ✅ Load Data on Page Load
    document.addEventListener('DOMContentLoaded', fetchColleges);
</script>
