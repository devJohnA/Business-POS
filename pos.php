<?php

include 'backend/db/database.php';
include 'backend/Controller/ProductsController.php';

$productsController = new ProductsController($pdo);
$products = $productsController->getAllproducts();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JJA - Point of Sale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">

                <div class="card pos-card p-4">
                    <h3 class="text-center mb-4">
                        <span class="title-icon">🛒</span> Point of Sale
                    </h3>

                    <form id="purchaseForm">

                        <div class="mb-3">
                            <label for="productName" class="form-label fw-semibold">Product Name</label>
                            <select class="form-select" name="productName" id="productName">
                                <option value="">Select a product</option>
                                <?php foreach ($products as $product) : ?>
                                    <option value="<?= htmlspecialchars($product['id']); ?>">
                                        <?= htmlspecialchars($product['name']); ?>
                                    </option>
                                <?php endforeach;  ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="transactionType" class="form-label fw-semibold">Transaction Type</label>
                            <select class="form-select" name="transactionType" id="transactionType">
                                <option value="">Select transaction type</option>
                                <option value="paid">Paid</option>
                                <option value="credit">Credit</option>
                            </select>
                        </div>

                        <div class="mb-3 d-none" id="customerNameGroup">
                            <label for="customerName" class="form-label fw-semibold">Customer Name</label>
                            <input type="text" class="form-control" id="customerName" placeholder="Enter customer name">
                        </div>

                        <div class="mb-4">
                            <label for="amount" class="form-label fw-semibold">Amount</label>
                            <div class="input-group">
                                <span class="input-group-text">₱</span>
                                <input type="number" class="form-control" id="amount" placeholder="Enter amount">
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-custom text-white">
                                Submit Transaction
                            </button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="backend-js/submit-purchase.js"></script>

</body>

</html>