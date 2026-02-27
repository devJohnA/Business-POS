<?php
include "header.php";
include "sidebar.php";
include "navbar.php";
?>

<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-xxl-4 col-lg-12 col-md-4 order-1">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-6 mb-6">
            <div class="card h-100">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between mb-4">
                  <div class="avatar flex-shrink-0">
                    <img
                      src="../assets/img/icons/unicons/chart-success.png"
                      alt="chart success"
                      class="rounded" />
                  </div>
                </div>
                <p class="mb-1">Profit</p>
                <h4 class="card-title mb-3">$12,628</h4>
                <small class="text-success fw-medium"><i class="icon-base bx bx-up-arrow-alt"></i> +72.80%</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Total Revenue -->
      <div class="col-12 col-xxl-8 order-2 order-md-3 order-xxl-2 mb-6 total-revenue">
        <div class="card">
          <div class="row row-bordered g-0">
            <div class="col-lg-8">
              <div class="card-header d-flex align-items-center justify-content-between">
                <div class="card-title mb-0">
                  <h5 class="m-0 me-2">Total Revenue</h5>
                </div>
                <div class="dropdown">
                  <button
                    class="btn p-0"
                    type="button"
                    id="totalRevenue"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    <i class="icon-base bx bx-dots-vertical-rounded icon-lg text-body-secondary"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalRevenue">
                    <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                  </div>
                </div>
              </div>
              <div id="totalRevenueChart" class="px-3"></div>
            </div>
            <div class="col-lg-4">
              <div class="card-body px-xl-9 py-12 d-flex align-items-center flex-column">
                <div class="text-center mb-6">
                  <div class="btn-group">
                    <button type="button" class="btn btn-outline-primary">
                      <script>
                        document.write(new Date().getFullYear() - 1);
                      </script>
                    </button>
                    <button
                      type="button"
                      class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
                      data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:void(0);">2021</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0);">2020</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0);">2019</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Total Revenue -->
    </div>
  </div>
  <div class="content-backdrop fade"></div>
</div>
</div>
<?php
include "footer.php";
?>