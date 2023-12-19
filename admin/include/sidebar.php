<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">

          <li class="nav-item">
            <a class="nav-link active" href="dashboard.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <?php
          if (isset($_SESSION['TYPE']) &&  $_SESSION['TYPE'] == '1') {
          ?>
            <li class="nav-item">
              <a class="nav-link" href="Customers.php">
                <span data-feather="users"></span>
                Job Recruiter
              </a>
            </li>
          <?php } ?>
          <?php
          if (isset($_SESSION['TYPE']) &&  ( $_SESSION['TYPE'] == '2' || $_SESSION['TYPE'] == '1')) {
          ?>

            <li class="nav-item">
              <a class="nav-link" href="job_create.php">
                <span data-feather="bar-chart-2"></span>
                Job Create
              </a>
            </li>
          <?php
          }
          ?>
            <li class="nav-item">
                <a class="nav-link" href="applied_job.php">
                  <span data-feather="layers"></span>
                  Apply jobs
                </a>
              </li>
       <?php
          if (isset($_SESSION['TYPE']) &&   $_SESSION['TYPE'] == '1') {
          ?>
          <li class="nav-item">
            <a class="nav-link" href="create_company.php">
              <span data-feather="layers"></span>
              Company
            </a>
          </li>
        
          </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">

          <li class="nav-item">
            <a class="nav-link" href="category.php">
              <span data-feather="file-text"></span>
              Category
            </a>
          </li>
          <?php } ?>
        </ul>
      </div>
    </nav>