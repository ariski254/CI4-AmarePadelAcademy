  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>
  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Edit Sponsor</h4>
          <div class="d-flex align-items-center">
              <div class="notification me-3">

                  <span class="badge rounded-circle">2</span>
              </div>
              <i class="bi bi-gear fs-4"></i>
          </div>
      </div>
      <div class="edit-sponsor">
          <form action="<?= site_url('admin/sponsor/update/' . $sponsor['id']); ?>" method="post"
              enctype="multipart/form-data">
              <?= csrf_field() ?>

              <label for="logo_name">Logo Name</label>
              <input type="text" name="logo_name" id="logo_name"
                  value="<?= old('logo_name', $sponsor['logo_name']); ?>">

              <label for="logo_file">Logo File (Optional)</label>
              <input type="file" name="logo_file" id="logo_file">

              <!-- Menampilkan gambar lama jika ada -->
              <div>
                  <label>Current Logo:</label>
                  <img src="<?= base_url($sponsor['logo_path']); ?>" width="100" alt="Logo">
              </div>

              <button type="submit">Update</button>
          </form>

      </div>
  </div>
  <?= $this->endSection() ?>