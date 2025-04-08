  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>


  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Page About Us</h4>
          <div class="d-flex align-items-center dropdown">
              <!-- Settings Icon -->
              <i class="bi bi-gear fs-4" id="settings-icon" data-bs-toggle="dropdown" aria-expanded="false"></i>

              <!-- Dropdown Menu -->
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settings-icon">
                  <li><a class="dropdown-item" href="<?= site_url('admin/add') ?>">Add Admin</a></li>
                  <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a></li>
              </ul>
          </div>

      </div>

      <h2>Tambah Kegiatan</h2>
      <form action="<?= base_url('/admin/kegiatan/store') ?>" method="post" enctype="multipart/form-data">
          <label>Judul</label>
          <input type="text" name="title" class="form-control" required>

          <label>Tanggal</label>
          <input type="date" name="date" class="form-control" required>

          <label>Deskripsi</label>
          <textarea name="description" class="form-control" required></textarea>

          <label>Upload 3+ Gambar</label>
          <input type="file" name="images[]" class="form-control" multiple required>

          <button class="btn btn-primary mt-3">Simpan</button>
      </form>


  </div>




  <?= $this->endSection() ?>