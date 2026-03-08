   </div>
   <div class="layout-overlay layout-menu-toggle"></div>
   </div>
   <!-- / Layout wrapper -->

   <!-- Core JS (Sneat jQuery FIRST) -->
   <script src="../assets/vendor/libs/jquery/jquery.js"></script>
   <script src="../assets/vendor/libs/popper/popper.js"></script>
   <script src="../assets/vendor/js/bootstrap.js"></script>


   <!-- DataTables AFTER jQuery -->
   <script src="https://cdn.datatables.net/2.3.7/js/dataTables.js"></script>
   <script src="https://cdn.datatables.net/2.3.7/js/dataTables.bootstrap5.js"></script>

   <!-- Other Scripts -->
   <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
   <script src="../assets/vendor/js/menu.js"></script>
   <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>
   <script src="../assets/js/main.js"></script>
   <script src="../assets/js/dashboards-analytics.js"></script>

   <script>
      $(document).ready(function() {
         $('#myTable').DataTable();

         //logout btn
         $('#logoutBtn').on('click', function(e) {
            e.preventDefault();
            Swal.fire({
               title: 'Are you sure you want to log out?',
               icon: 'warning',
               showCancelButton: true,
               confirmButtonText: 'Yes, log out',
               cancelButtonText: 'Cancel'
            }).then((result) => {
               if (result.isConfirmed) {
                  Swal.fire({
                     icon: 'success',
                     title: 'Logout Successfully'
                  }).then(() => {
                     window.location.href = './logout.php';
                  });
               }
            });
         });

         //save product
         $('#saveProductBtn').on('click', function() {
            const productName = $('#productName').val().trim();
            const productPrice = $('#productPrice').val().trim();

            if (!productName || !productPrice) {
               Swal.fire({
                  icon: 'warning',
                  title: 'Please fill in all fields.'
               });
               return;
            }

            $.ajax({
               url: '../backend/Process/save-product.php',
               method: 'POST',
               data: {
                  productName,
                  productPrice
               },
               dataType: 'json',
               success: function(res) {
                  if (res.status) {
                     $('#basicModal').modal('hide');
                     $('#basicModal').on('hidden.bs.modal', function() {
                        Swal.fire({
                              icon: 'success',
                              title: 'Product added successfully!'
                           })
                           .then(() => location.reload());
                     });
                  } else {
                     Swal.fire({
                        icon: 'error',
                        title: 'Failed',
                        text: res.message
                     });
                  }
               },
               error: function(err) {
                  console.error('Ajax error:', err);
                  Swal.fire({
                     icon: 'error',
                     title: 'Request failed',
                     text: 'Check console for details.'
                  });
               }
            });
         });


         //Edit Product
         $(document).on('click', '.edit-btn', function() {
            const productId = $(this).data('product-id');
            const productName = $(this).data('product-name');
            const productPrice = $(this).data('product-price');

            $('#productId').val(productId);
            $('#productName').val(productName);
            $('#productPrice').val(productPrice);

            $('#basicModal').modal('show');
         });

         $(document).ready(function() {
            $('#updateProductBtn').on('click', function(e) {
               e.preventDefault();

               $.ajax({
                  url: '../backend/Process/edit-product.php',
                  method: 'POST',
                  data: $('#updateProductForm').serialize(),
                  dataType: 'json',
                  success: function(res) {
                     if (res.status) {
                        $('#basicModal').modal('hide');
                        $('#basicModal').on('hidden.bs.modal', function() {
                           Swal.fire({
                                 icon: 'success',
                                 title: 'Product updated successfully!'
                              })
                              .then(() => location.reload());
                        });
                     } else {
                        Swal.fire({
                           icon: 'error',
                           title: 'Failed',
                           text: res.message
                        });
                     }
                  },
                  error: function(err) {
                     console.error('Ajax error:', err);
                     Swal.fire({
                        icon: 'error',
                        title: 'Request failed',
                        text: 'Check console for details.'
                     });
                  }
               });
            });
         });


         // Delete Product
         $(document).on('click', '.delete-btn', function() {
            const productId = $(this).data('product-id');

            Swal.fire({
               title: 'Are you sure?',
               text: 'This product will be permanently deleted.',
               icon: 'warning',
               showCancelButton: true,
               confirmButtonText: 'Yes, delete it',
               cancelButtonText: 'Cancel'
            }).then((result) => {
               if (result.isConfirmed) {
                  $.ajax({
                     url: '../backend/Process/delete-product.php',
                     method: 'POST',
                     data: {
                        productId
                     },
                     dataType: 'json',
                     success: function(res) {
                        if (res.status) {
                           Swal.fire({
                                 icon: 'success',
                                 title: 'Deleted!',
                                 text: 'Product has been deleted.'
                              })
                              .then(() => location.reload());
                        } else {
                           Swal.fire({
                              icon: 'error',
                              title: 'Failed',
                              text: res.message
                           });
                        }
                     },
                     error: function() {
                        Swal.fire({
                           icon: 'error',
                           title: 'Request failed',
                           text: 'Check console for details.'
                        });
                     }
                  });
               }
            });
         });
      });
   </script>
   </body>

   </html>