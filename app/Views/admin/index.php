  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>


  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Dashboard</h4>
          <div class="d-flex align-items-center">
              <i class="bi bi-gear fs-4"></i>
          </div>
      </div>
      <div class="iframe-container mt-3" style="width: 100%; overflow: hidden; padding: 0">
          <iframe src="https://amarepadelacademy.unikart.my.id/" width="100%" height="600"
              style="border: none; display: block">
              Your browser does not support iframes.
          </iframe>
      </div>
  </div>

  <?= $this->endSection() ?>