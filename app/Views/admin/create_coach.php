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
      <div class="create-coach-container">
          <?php if (session()->getFlashdata('errors')): ?>
          <div class="form-alert error">
              <ul>
                  <?php foreach (session()->getFlashdata('errors') as $error): ?>
                  <li><?= esc($error); ?></li>
                  <?php endforeach; ?>
              </ul>
          </div>
          <?php endif; ?>

          <h2 class="create-coach-title">Add New Coach</h2>

          <form action="/admin/coaches/store" method="POST" enctype="multipart/form-data" class="create-coach-form">
              <?= csrf_field() ?>

              <div class="form-group">
                  <label for="name" class="create-coach-label">Name</label>
                  <input type="text" name="name" id="name" class="create-coach-input" value="<?= old('name') ?>"
                      required>
              </div>

              <div class="form-group">
                  <label for="role" class="create-coach-label">Role</label>
                  <input type="text" name="role" id="role" class="create-coach-input" value="<?= old('role') ?>"
                      required>
              </div>

              <div class="form-group">
                  <label for="position" class="create-coach-label">Position</label>
                  <input type="text" name="position" id="position" class="create-coach-input"
                      value="<?= old('position') ?>" required>
              </div>

              <div class="form-group">
                  <label for="image" class="create-coach-label">Image</label>
                  <input type="file" name="image" id="image" class="create-coach-input" required>
              </div>

              <div class="form-group">
                  <label for="twitter" class="create-coach-label">Twitter URL</label>
                  <input type="text" name="twitter" id="twitter" class="create-coach-input"
                      value="<?= old('twitter') ?>">
              </div>

              <div class="form-group">
                  <label for="facebook" class="create-coach-label">Facebook URL</label>
                  <input type="text" name="facebook" id="facebook" class="create-coach-input"
                      value="<?= old('facebook') ?>">
              </div>

              <div class="form-group">
                  <label for="instagram" class="create-coach-label">Instagram URL</label>
                  <input type="text" name="instagram" id="instagram" class="create-coach-input"
                      value="<?= old('instagram') ?>">
              </div>

              <button type="submit" class="create-coach-button">Create Coach</button>
          </form>
      </div>




  </div>

  <?= $this->endSection() ?>