  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>



  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Add Admin</h4>
          <div class="d-flex align-items-center dropdown">
              <i class="bi bi-gear fs-4" id="settings-icon"></i>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= site_url('admin/add') ?>">Add Admin</a></li>
                  <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a></li>
              </ul>
          </div>
      </div>

      <div class="add-admin">
          <h2 class="text-center add-admin-title">Add New Admin</h2>

          <?php if (session()->getFlashdata('success')): ?>
          <div class="alert alert-success add-admin-alert">
              <?= session()->getFlashdata('success') ?>
          </div>
          <?php endif; ?>

          <?php if (session()->getFlashdata('error')): ?>
          <div class="alert alert-danger add-admin-alert">
              <?= session()->getFlashdata('error') ?>
          </div>
          <?php endif; ?>

          <form action="<?= site_url('admin/save') ?>" method="post" class="add-admin-form">
              <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" name="username" required>
              </div>

              <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password" required>
              </div>

              <button type="submit" class="btn btn-primary add-admin-btn">Add Admin</button>
          </form>
      </div>

  </div>


  <?= $this->endSection() ?>