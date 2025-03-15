  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>


  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Edit Material</h4>
          <div class="d-flex align-items-center dropdown">
              <i class="bi bi-gear fs-4" id="settings-icon"></i>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= site_url('admin/add') ?>">Add Admin</a></li>
                  <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a></li>
              </ul>
          </div>
      </div>
      <div class="edit-material">
          <div class="form-container">
              <?php if (session()->getFlashdata('success')): ?>
              <p class="flash-message success"><?= session()->getFlashdata('success') ?></p>
              <?php endif; ?>

              <?php if (session()->getFlashdata('error')): ?>
              <p class="flash-message error"><?= session()->getFlashdata('error') ?></p>
              <?php endif; ?>

              <form action="/admin/materials/update/<?= $material['id'] ?>" method="POST" enctype="multipart/form-data">
                  <?= csrf_field() ?>

                  <div class="form-group">
                      <label for="name">Material Name:</label>
                      <input type="text" name="name" id="name" value="<?= old('name', $material['name']) ?>" required>
                  </div>

                  <div class="form-group">
                      <label for="image">Material Image (Optional):</label>
                      <input type="file" name="image" id="image">
                  </div>

                  <div class="form-group">
                      <label>Current Image:</label>
                      <div class="current-image">
                          <img src="<?= base_url($material['image_path']) ?>" alt="Material Image" width="100">
                      </div>
                  </div>

                  <button type="submit" class="submit-btn">Update Material</button>
              </form>
          </div>
      </div>


  </div>
  <?= $this->endSection() ?>