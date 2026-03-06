<div class="card-body">
  <div class="row gy-3">
    <div class="col-lg-4 col-md-6">
      <div class="mt-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
          Add Product
        </button>

        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form id="addProductForm" method="POST" action="#">
                <div class="modal-header">
                  <h5 class="modal-title">Add Product</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" id="productName" name="productName" class="form-control" placeholder="Enter Product Name" required />
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" id="productPrice" name="productPrice" class="form-control" placeholder="Enter Product Price" required />
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="saveProductBtn">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<script>
document.getElementById('saveProductBtn').addEventListener('click', function() {
  const productName = document.getElementById('productName').value.trim();
  const productPrice = document.getElementById('productPrice').value.trim();

  if (!productName || !productPrice) {
    alert('Please fill in all fields.');
    return;
  }

  const formData = new FormData();
  formData.append('productName', productName);
  formData.append('productPrice', productPrice);

  fetch('../backend/Process/save-product.php', {
    method: 'POST',
    body: formData
  })
  .then(res => res.text()) // use text first to see raw response
  .then(data => {
    console.log('Raw response:', data); // check console for errors
    const json = JSON.parse(data);
    if (json.status) {
      alert('Product added successfully!');
      document.getElementById('basicModal').querySelector('.btn-close').click();
      location.reload();
    } else {
      alert('Failed: ' + json.message);
    }
  })
  .catch(err => {
    console.error('Fetch error:', err);
    alert('Fetch failed - check console');
  });
});
</script>