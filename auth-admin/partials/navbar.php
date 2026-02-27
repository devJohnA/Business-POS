<?php 
session_start();

if (!isset($_SESSION['user_email'])) {
    header("Location: ../index.php");
    exit;
}

$user_name = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : 'User';

?>

<div class="layout-page">
  <nav
    class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme"
    id="layout-navbar">

    <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">

      <ul class="navbar-nav flex-row align-items-center ms-md-auto">
        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
         
          <a
            class="nav-link dropdown-toggle hide-arrow p-0"
            href="#"
            data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="#">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-0"><?php echo $_SESSION['user_email'] ?? 'Guest'; ?></h6>
                    <small class="text-body-secondary">Admin</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider my-1"></div>
            </li>
            <li>
              <a class="dropdown-item" href="./users-account.php">
                <i class="icon-base bx bx-user icon-md me-3"></i><span>My Profile</span>
              </a>
            </li>
            <li>
              <div class="dropdown-divider my-1"></div>
            </li>
            <li>
              <a class="dropdown-item" href="partials/logout.php">
                <i class="icon-base bx bx-power-off icon-md me-3"></i><span>Log Out</span>
              </a>
            </li>
          </ul>
        </li>
        <!--/ User -->
      </ul>
    </div>
  </nav>