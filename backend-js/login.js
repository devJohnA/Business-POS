// login.js - FIXED
$(document).ready(function () {

  $("#loginForm").on("submit", function(e) {
      e.preventDefault();

      const email = $("#email").val();
      const password = $("#password").val();

      if (email === "" || password === "") {
          Swal.fire({
              icon: "error",
              title: "Error",
              text: "Please fill in all fields."
          });
          return;
      }

      $.ajax({
          url: "backend/Process/login.php",
          type: "POST",
          data: { email: email, password: password },
          dataType: "json",
          success: function(response) {
              if (response.status === true) {  // ✅ FIXED: was "success", now matches boolean true
                  Swal.fire({
                      title: "Login Successful",
                      text: response.message,
                      icon: "success"
                  }).then(() => {
                      window.location.href = "auth-admin/index.php";
                  });
              } else {
                  Swal.fire({
                      title: "Login Failed",
                      text: response.message,
                      icon: "error"
                  });
              }
          },
          error: function() {
              Swal.fire({
                  title: "Error",
                  text: "Server error occurred.",
                  icon: "error"
              });
          }
      });
  });

});