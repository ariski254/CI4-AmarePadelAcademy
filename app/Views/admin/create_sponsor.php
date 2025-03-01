  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>

  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Create Sponsor</h4>
          <div class="d-flex align-items-center">

              <i class="bi bi-gear fs-4"></i>
          </div>
      </div>
      <div class="create-sponsor">
          <form action="<?= site_url('admin/sponsor/store'); ?>" method="post" enctype="multipart/form-data">
              <label for="logo_name">Logo Name</label>
              <input type="text" name="logo_name" id="logo_name" value="<?= old('logo_name'); ?>">
              <div><?= session('validation')['logo_name'] ?? ''; ?></div>

              <label for="logo_file">Logo File</label>
              <input type="file" name="logo_file" id="logo_file">
              <div><?= session('validation')['logo_file'] ?? ''; ?></div>

              <button type="submit">Save</button>
          </form>
      </div>
  </div>
  <?= $this->endSection() ?>