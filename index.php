<!Doctype html>
<html
  lang="en"
  class="layout-wide customizer-hide"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Login | DC</title>

  <meta name="description" content="" />

  <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets/vendor/fonts/iconify-icons.css" />
  <link rel="stylesheet" href="assets/vendor/css/core.css" />
  <link rel="stylesheet" href="assets/css/demo.css" />
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" />
  <script src="assets/vendor/js/helpers.js"></script>
  <script src="assets/js/config.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card px-sm-6 px-0">
          <div class="card-body">
            <form id="loginForm" class="mb-6" method="POST">
              <div class="mb-6">
                <label for="email" class="form-label">Email or Username</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="Enter your email or username" />
              </div>
              <div class="mb-6 form-password-toggle">
                <label class="form-label" for="password">Password</label>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    placeholder="Enter your password" />
                  <span class="input-group-text cursor-pointer"><i class="icon-base bx bx-hide"></i></span>
                </div>
              </div>
              <div class="mb-8">
                <div class="d-flex justify-content-between">
                  <a href="#">
                    <span>Forgot Password?</span>
                  </a>
                </div>
              </div>
              <div class="mb-6">
                <button type="submit" class="btn btn-primary d-grid w-100">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn-script.com/ajax/libs/jquery/4.0.0-beta/jquery.min.js"></script>
  <script>
    $("#loginForm").on("submit", function(e) {
      e.preventDefault();

      $(document).ready(function() {
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        if (email === "" || password === "") {
          Swal.fire({
            icon: "error",
            title: "Error",
            text: "Please fill in all fields."
          });
          return;
        }

        //backend login logic here
        $.ajax({
          url: "backend/Process/login.php",
          type: "POST",
          data: {
            email: email,
            password: password
          },
          dataType: "json",
          success: function(response) {
            if (response.success) {
              Swal.fire({
                title: "Login Successful",
                text: response.message,
                icon: "success",
                confirmButtonText: "Continue"
              }).then(() => {
                window.location.href = "auth-admin/index.php";
              });
            } else {
              Swal.fire({
                title: "Login Failed",
                text: response.message,
                icon: "error",
                confirmButtonText: "Try Again"
              });
            }
          },
          error: function() {
            Swal.fire({
              title: "Error",
              text: "An error occurred while processing your request.",
              icon: "error",
              confirmButtonText: "Try Again"
            });
          }
        });
      });
    });
  </script>
  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="assets/vendor/js/menu.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>