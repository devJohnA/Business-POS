// backend-js/submit-purchase.js

$("#transactionType").on("change", function() {
    let type = $(this).val();

    if (type === "credit") {
        $("#customerNameGroup").removeClass("d-none");
    } else {
        $("#customerNameGroup").addClass("d-none");
        $("#customerName").val("");
    }
});

document.getElementById("purchaseForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const productName = document.getElementById("productName").value;
    const transactionType = document.getElementById("transactionType").value;
    const customerName = document.getElementById("customerName").value;
    const amount = document.getElementById("amount").value;

    if (transactionType === "credit" && !customerName) {
        Swal.fire({ icon: "error", title: "Error", text: "Please enter a customer name for credit transactions." });
        return;
    }

    if (!productName || !transactionType || !amount) {
        Swal.fire({ icon: "error", title: "Error", text: "Please fill in all required fields." });
        return;
    }

    const data = { productName, transactionType, customerName, amount };

    $.ajax({
        url: "backend/Process/submit-purchase.php",
        type: "POST",
        data: data,
        dataType: "json",
        success: function(response) {
            if (response.status === 'success') {
                Swal.fire({ title: "Success", text: response.message, icon: "success" })
                    .then(() => { $("#purchaseForm")[0].reset(); });
            } else {
                Swal.fire({ title: "Error", text: response.message, icon: "error" });
            }
        },
        error: function() {
            Swal.fire({ title: "Error", text: "An error occurred while processing your request.", icon: "error" });
        }
    });
});