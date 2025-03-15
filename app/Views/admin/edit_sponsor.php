  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>
  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Edit Sponsor</h4>
          <div class="d-flex align-items-center dropdown">
              <i class="bi bi-gear fs-4" id="settings-icon"></i>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= site_url('admin/add') ?>">Add Admin</a></li>
                  <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a></li>
              </ul>
          </div>
      </div>
      <div class="edit-sponsor-container">


          <form action="<?= site_url('admin/sponsor/update/' . $sponsor['id']); ?>" method="post"
              enctype="multipart/form-data" class="edit-sponsor-form">
              <?= csrf_field() ?>

              <!-- Logo Name Field -->
              <div class="form-group edit-sponsor-input-group">
                  <label for="logo_name" class="edit-sponsor-label">Logo Name</label>
                  <input type="text" name="logo_name" id="logo_name" class="edit-sponsor-input"
                      value="<?= old('logo_name', $sponsor['logo_name']); ?>" required>
              </div>

              <!-- Logo File Upload -->
              <div class="form-group edit-sponsor-input-group">
                  <label for="logo_file" class="edit-sponsor-label">Logo File (Optional)</label>
                  <input type="file" name="logo_file" id="logo_file" class="edit-sponsor-input">
              </div>

              <!-- Display Current Logo -->
              <div class="form-group edit-sponsor-input-group">
                  <label class="edit-sponsor-label">Current Logo:</label>
                  <img src="<?= base_url($sponsor['logo_path']); ?>" alt="Current Logo" class="edit-sponsor-image"
                      width="100">
              </div>

              <!-- Submit Button -->
              <button type="submit" class="btn edit-sponsor-submit-btn mt-3">Update Sponsor</button>
          </form>
      </div>

  </div>
  <?= $this->endSection() ?>