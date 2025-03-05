  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>


  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Create New Coach</h4>
          <div class="d-flex align-items-center dropdown">
              <i class="bi bi-gear fs-4" id="settings-icon"></i>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= site_url('admin/add') ?>">Add Admin</a></li>
                  <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a></li>
              </ul>
          </div>
      </div>
      <div class="create-coach">


          <!-- Display any form validation errors -->
          <?php if (session()->getFlashdata('errors')): ?>
          <div class="alert alert-danger">
              <ul>
                  <?php foreach (session()->getFlashdata('errors') as $error): ?>
                  <li><?= esc($error); ?></li>
                  <?php endforeach; ?>
              </ul>
          </div>
          <?php endif; ?>

          <form action="/admin/coaches/store" method="POST" enctype="multipart/form-data" class="coach-form">
              <?= csrf_field() ?>

              <!-- Coach Name -->
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" class="form-input" value="<?= old('name') ?>" required>
              </div>

              <!-- Coach Role -->
              <div class="form-group">
                  <label for="role">Role</label>
                  <input type="text" name="role" id="role" class="form-input" value="<?= old('role') ?>" required>
              </div>

              <!-- Coach Position -->
              <div class="form-group">
                  <label for="position">Position</label>
                  <input type="text" name="position" id="position" class="form-input" value="<?= old('position') ?>"
                      required>
              </div>

              <!-- Coach Image -->
              <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" name="image" id="image" class="form-input" required>
              </div>

              <!-- Social Media Links -->
              <div class="form-group">
                  <label for="twitter">Twitter URL</label>
                  <input type="text" name="twitter" id="twitter" class="form-input" value="<?= old('twitter') ?>">
              </div>

              <div class="form-group">
                  <label for="facebook">Facebook URL</label>
                  <input type="text" name="facebook" id="facebook" class="form-input" value="<?= old('facebook') ?>">
              </div>

              <div class="form-group">
                  <label for="instagram">Instagram URL</label>
                  <input type="text" name="instagram" id="instagram" class="form-input" value="<?= old('instagram') ?>">
              </div>

              <!-- Submit Button -->
              <button type="submit" class="btn btn-success mt-3 btn-block">Create Coach</button>
          </form>
      </div>


  </div>

  <?= $this->endSection() ?>