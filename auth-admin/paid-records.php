<?php
include 'partials/header.php';
include 'partials/navbar.php';
include 'partials/sidebar.php';
?>
<!-- Paid -->
 <div class="container-xxl flex-grow-1 container-p-y">
 <div class="card">
  <h5 class="card-header">Paid</h5>
  <div class="table-responsive text-nowrap mt-3">
    <table id="myTable" class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Products</th>
           <th>Amount</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr>
          <td><span>16345</span></td>
          <td>
            Rice 1kg
          </td>
          <td><span>₱ 540</span></td>
          <td><span class="badge text-bg-success">Paid</span></td>
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
</div>

<?php
include 'partials/footer.php';
?>