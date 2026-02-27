<?php
include 'partials/header.php';
include 'partials/navbar.php';
include 'partials/sidebar.php';
?>

<div class="card">
  <h5 class="card-header">Account Settings</h5>
  <div class="card mb-6">
    <!-- Account -->
    <div class="card-body">
      <div class="d-flex align-items-start align-items-sm-center gap-6 pb-4 border-bottom">
        <img
          src="../assets/img/avatars/1.png"
          alt="user-avatar"
          class="d-block w-px-100 h-px-100 rounded"
          id="uploadedAvatar" />
        <div class="button-wrapper">
          <label for="upload" class="btn btn-primary me-3 mb-4" tabindex="0">
            <span class="d-none d-sm-block">Upload new photo</span>
            <i class="icon-base bx bx-upload d-block d-sm-none"></i>
            <input
              type="file"
              id="upload"
              class="account-file-input"
              hidden
              accept="image/png, image/jpeg" />
          </label>
          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
            <i class="icon-base bx bx-reset d-block d-sm-none"></i>
            <span class="d-none d-sm-block">Reset</span>
          </button>

          <div>Allowed JPG, GIF or PNG. Max size of 800K</div>
        </div>
      </div>
    </div>
    <div class="card-body pt-4">
      <form id="formAccountSettings" method="POST" onsubmit="return false">
        <div class="row g-6">
          <div class="col-md-6">
            <label for="firstName" class="form-label">First Name</label>
            <input
              class="form-control"
              type="text"
              id="firstName"
              name="firstName"
              value=""
              autofocus />
          </div>
          <div class="col-md-6">
            <label for="lastName" class="form-label">Last Name</label>
            <input class="form-control" type="text" name="lastName" id="lastName" value="" />
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">E-mail</label>
            <input
              class="form-control"
              type="text"
              id="email"
              name="email"
              value=""
              placeholder="john.doe@example.com" />
          </div>
          <div class="col-md-6">
            <label class="form-label" for="phoneNumber">Phone Number</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text">PH (+63)</span>
              <input
                type="text"
                id="phoneNumber"
                name="phoneNumber"
                class="form-control"
                placeholder="202 555 0111" />
            </div>
          </div>
          <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Address" />
          </div>
        </div>
        <div class="mt-6">
          <button type="submit" class="btn btn-primary me-3">Save changes</button>
          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
        </div>
      </form>
    </div>
    <!-- /Account -->
  </div>
</div>

<?php
include 'partials/footer.php';
?>