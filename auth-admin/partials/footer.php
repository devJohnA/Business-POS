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


         //add product modal
         $('#addProductForm').submit(function(e) {
            e.preventDefault();

            var productName = $('input[name="productName"]').val();
            var productPrice = $('input[name="productPrice"]').val();

            // Perform AJAX request to add the product
            $.ajax({
               url: '../../backend/Process/save-product.php', // Replace with your actual endpoint
               method: 'POST',
               data: {
                  name: productName,
                  price: productPrice
               },
               success: function(response) {
                  // Handle success response (e.g., show a success message, update the product list)
                  Swal.fire({
                     icon: 'success',
                     title: 'Product added successfully'
                  });
                  $('#basicModal').modal('hide');

               },
               error: function(xhr, status, error) {
                  // Handle error response (e.g., show an error message)
                 Swal.fire({
                     icon: 'error',
                     title: 'Error adding product',
                     text: 'An error occurred while adding the product. Please try again.'
                  });
               }
            });
         });
      });
   </script>
   </body>

   </html>