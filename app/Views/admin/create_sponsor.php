  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>

  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Create Sponsor</h4>
          <div class="d-flex align-items-center dropdown">
              <i class="bi bi-gear fs-4" id="settings-icon"></i>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= site_url('admin/add') ?>">Add Admin</a></li>
                  <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a></li>
              </ul>
          </div>
      </div>
      <div class="create-sponsor-container">
          <h2 class="create-sponsor-title">Create New Sponsor</h2>

          <?php if (session()->getFlashdata('errors')): ?>
          <div class="form-alert error">
              <ul>
                  <?php foreach (session()->getFlashdata('errors') as $error): ?>
                  <li><?= esc($error); ?></li>
                  <?php endforeach; ?>
              </ul>
          </div>
          <?php endif; ?>

          <form action="<?= site_url('admin/sponsor/store'); ?>" method="post" enctype="multipart/form-data"
              class="create-sponsor-form">
              <?= csrf_field() ?>

              <div class="form-group">
                  <label for="logo_name" class="create-sponsor-label">Logo Name</label>
                  <input type="text" name="logo_name" id="logo_name" class="create-sponsor-input"
                      value="<?= old('logo_name'); ?>" required>
                  <?php if (session('validation')['logo_name'] ?? false): ?>
                  <div class="input-error"><?= session('validation')['logo_name'] ?></div>
                  <?php endif; ?>
              </div>

              <div class="form-group">
                  <label for="logo_file" class="create-sponsor-label">Logo File</label>
                  <input type="file" name="logo_file" id="logo_file" class="create-sponsor-input" required>
                  <?php if (session('validation')['logo_file'] ?? false): ?>
                  <div class="input-error"><?= session('validation')['logo_file'] ?></div>
                  <?php endif; ?>
              </div>

              <button type="submit" class="create-sponsor-button">Save</button>
          </form>
      </div>



  </div>
  <?= $this->endSection() ?>