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
                  const Toast = Swal.mixin({
                     toast: true,
                     position: 'top-end',
                     showConfirmButton: false,
                     timer: 1500,
                     timerProgressBar: true
                  });

                  Toast.fire({
                     icon: 'success',
                     title: 'Logging out...',
                      color: '#000'
                  });

                  setTimeout(() => {
                     window.location.href = './logout.php';
                  }, 1500);
               }
            });
         });
      });
   </script>
   </body>

   </html>