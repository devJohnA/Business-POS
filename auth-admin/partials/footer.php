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
                  icon: 'error',
                  title: 'Validation Error',
                  text: 'Please fill in all fields.'
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
                     Swal.fire({
                        icon: 'success',
                        title: 'Product added successfully!'
                     }).then(() => {
                        $('#basicModal').modal('hide');
                        location.reload();
                     });
                  } else {
                     Swal.fire({
                        icon: 'error',
                        title: 'Failed to add product',
                        text: res.message
                     });
                  }
               },
               error: function(err) {
                  console.error('Ajax error:', err);
                  Swal.fire({
                     icon: 'error',
                     title: 'Request failed',
                     text: 'An error occurred while processing your request.'
                  });
               }
            });
         });
      });
   </script>
   </body>

   </html>