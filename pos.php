<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JJA - Point of Sale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <form>
        <div class="container mt-5">
            <h2 class="text-center"> Point of Sale</h2>

            <div class="row mt-4">
                <div class="form-group align-items-center">
                    <label for="productName">Product Name</label>
                    <select class="form-control" id="productName">
                        <option value="">Select a product</option>
                        <option value="Product 1">Product 1</option>
                        <option value="Product 2">Product 2</option>
                        <option value="Product 3">Product 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="productPrice">Transaction</label>
                    <select class="form-control" id="productPrice">
                        <option value="">Select transaction type</option>
                        <option value="paid">Paid</option>
                        <option value="credit">Credit</option>
                    </select>
                </div>
                <div class="form-group mt-3 d-none" id="customerNameGroup">
                    <label for="customer">Customer Name</label>
                    <input type="text" class="form-control" id="customer" placeholder="Enter customer name">
                </div>
                <div class="form-group mt-3">
                    <label for="amount">Amount</label>
                    <input type="number" class="form-control" id="amount" placeholder="Enter amount">
                </div>
                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById("productPrice").addEventListener("change", function() {
            const customerGroup = document.getElementById("customerNameGroup");

            if (this.value === "credit") {
                customerGroup.classList.remove("d-none");
            } else {
                customerGroup.classList.add("d-none");
            }
        });
    </script>
</body>

</html>