  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>


  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Dashboard</h4>
          <div class="d-flex align-items-center dropdown">
              <i class="bi bi-gear fs-4" id="settings-icon"></i>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= site_url('admin/add') ?>">Add Admin</a></li>
                  <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a></li>
              </ul>
          </div>
      </div>
      <div class="iframe-container mt-3"
          style="width: 100%; overflow: hidden; padding: 0; position: relative; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
          <iframe src="https://amarepadelacademy.unikart.my.id/" width="100%" height="600"
              style="border: none; display: block; border-radius: 10px; box-sizing: border-box;">
              Your browser does not support iframes.
          </iframe>
      </div>
  </div>

  <?= $this->endSection() ?>