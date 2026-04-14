<?php
include 'partials/header.php';
include 'partials/navbar.php';
include 'partials/sidebar.php';
?>
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <h5 class="card-header">Sales Report</h5>
    <form action="" method="post">
      <div class="row g-3">
        <div class="col-md-3">
          <label for="start-date" class="form-label">Start Date</label>
          <input type="date" class="form-control" id="start-date" name="start_date">
        </div>
        <div class="col-md-3">
          <label for="end-date" class="form-label">End Date</label>
          <input type="date" class="form-control" id="end-date" name="end_date">
        </div>
        <div class="col-md-3 align-self-end">
          <button type="submit" class="btn btn-primary">Generate Report</button>
        </div>
      </div>
    </form>
  </div>
</div>


<?php
include 'partials/footer.php';
?>