<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JJD | Portal</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/d688fe3fd9.js" crossorigin="anonymous"></script>
</head>

<body>

  <!-- Two portal for admin and point of sale -->
  <div class="d-flex justify-content-center align-items-center gap-4 min-vh-100">

    <!-- Admin Portal -->
    <a href="admin.php" class="text-decoration-none">
      <div class="card p-5 text-center shadow align-items-center" style="cursor: pointer;">
        <i class="fas fa-user-shield fa-2x mb-4" style="color: #6366F1;"></i>
        <h5 class="fw-normal text-muted">Admin Portal</h5>
      </div>
    </a>

    <!-- POS Portal -->
    <a href="pos.php" class="text-decoration-none">
      <div class="card p-5 text-center shadow align-items-center" style="cursor: pointer;">
        <i class="fas fa-cash-register fa-2x mb-4" style="color: #6366F1;"></i>
        <h5 class="fw-normal text-muted">Point of Sale</h5>
      </div>
    </a>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>