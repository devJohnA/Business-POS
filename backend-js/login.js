  // Backend login logic
  
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

        $.ajax({
            url:"backend/Process/login.php",
            type:"POST",
            data: {
              email: email,
              password: password
            },
            dataType: "json",
            success: function(response) {
              if(response.success) {
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
            },
            error: function() {
              alert("An error occurred while processing your request.");
            }
        });
      });
    });