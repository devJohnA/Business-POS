<?php
include 'partials/header.php';
include 'partials/navbar.php';
include 'partials/sidebar.php';
?>
<!-- Basic Bootstrap Table -->

<!-- Contextual Classes -->

<div class="card">
  <h5 class="card-header">Sales Records</h5>
  <?php require_once 'add-modal/add-customer.php' ?>
  <div class="table-responsive text-nowrap mt-3">
    <table id="myTable" class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Customer Name</th>
          <th>Products</th>
           <th>Price</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr>
          <td><span>16345</span></td>
          <td>Sarah Banks</td>
          <td>
            Rice 1kg
          </td>
          <td><span>₱ 540</span></td>
          <td><span class="badge text-bg-warning">Paid</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="icon-base bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="icon-base bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="icon-base bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!--/ Contextual Classes -->


<?php
include 'partials/footer.php';
?>