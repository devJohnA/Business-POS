  // If the product price is set to "credit", show the customer name input field. Otherwise, hide it.
        document.getElementById("transactionType").addEventListener("change", function() {
            const customerGroup = document.getElementById("customerNameGroup");

            if (this.value === "credit") {
                customerGroup.classList.remove("d-none");
            } else {
                customerGroup.classList.add("d-none");
            }
        });

        // Handle form submission
        document.getElementById("purchaseForm").addEventListener("submit", function(e) {
            e.preventDefault();

            const productName = document.getElementById("productName").value;
            const transactionType = document.getElementById("transactionType").value;
            const customerName = document.getElementById("customerName").value;
            const amount = document.getElementById("amount").value;

            // Basic validation
            if (!productName || !transactionType || !amount) {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Please fill in all required fields."
                });
                return;

            }

            // Prepare data to send
            const data = {
                productName: productName,
                transactionType: transactionType,
                customerName: customerName,
                amount: amount
            };

            // Send data to the server
            $.ajax({
                url: "backend/Process/submit-purchase.php",
                type: "POST",
                data: data,
                dataType: "json",
                success: function(response) {
                    if (response.status === true) {
                        Swal.fire({
                            title: "Success",
                            text: response.message,
                            icon: "success"
                        }).then(() => {
                            // Optionally, reset the form or redirect
                            document.getElementById("purchaseForm").reset();
                        });
                    } else {
                        Swal.fire({
                            title: "Error",
                            text: response.message,
                            icon: "error"
                        });
                    }
                },
                error: function() {
                    Swal.fire({
                        title: "Error",
                        text: "An error occurred while processing your request.",
                        icon: "error"
                    });
                }
            });
        });