<?php
include 'partials/header.php';
include 'partials/navbar.php';
include 'partials/sidebar.php';
include_once "../backend/Controller/ProductsController.php";

$controller = new ProductsController($pdo);
$products = $controller->getAllProducts();
?>

<div class="card">
  <h5 class="card-header">Products</h5>
  <?php require_once 'add-modal/add-products.php' ?>
  <div class="table-responsive text-nowrap mt-3">
    <table id="myTable" class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Products</th>
          <th>Price</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <?php foreach ($products as $product): ?>
          <tr>
            <td><?= htmlspecialchars($product['id']) ?></td>
            <td><?= htmlspecialchars($product['name']) ?></td>
            <td><?= htmlspecialchars($product['price']) ?></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="icon-base bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"><i class="icon-base bx bx-edit-alt me-1"></i> Edit</a>
                  <button class="dropdown-item delete-btn" data-product-id="<?= htmlspecialchars($product['id']) ?>">
                    <i class="icon-base bx bx-trash me-1 btn btn-danger"></i> Delete
                  </button>
                </div>
              </div>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?php include 'partials/footer.php'; ?>