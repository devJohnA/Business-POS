<div class="card-body">
  <div class="row gy-3">
    <div class="col-lg-4 col-md-6">
      <div class="mt-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
          Update Product
        </button>

        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form id="updateProductForm" method="POST" action="#">
                <input type="hidden" id="productId" name="productId" />
                <div class="modal-header">
                  <h5 class="modal-title">Update Product</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" id="productName" name="productName" value="" class="form-control" placeholder="Enter Product Name" required />
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" id="productPrice" name="productPrice" value="" class="form-control" placeholder="Enter Product Price" required />
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
