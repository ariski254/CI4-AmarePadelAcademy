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
      <div class="create-kegiatan-container">
          <h2 class="create-kegiatan-title text-center mb-4">Tambah Kegiatan</h2>

          <?php if (session()->getFlashdata('errors')): ?>
          <div class="form-alert error">
              <ul>
                  <?php foreach (session()->getFlashdata('errors') as $error): ?>
                  <li><?= esc($error); ?></li>
                  <?php endforeach; ?>
              </ul>
          </div>
          <?php endif; ?>

          <form action="<?= base_url('/admin/kegiatan/store') ?>" method="post" enctype="multipart/form-data"
              class="create-kegiatan-form">
              <?= csrf_field(); ?>

              <div class="form-group">
                  <label for="title" class="create-kegiatan-label">Judul</label>
                  <input type="text" id="title" name="title" class="create-kegiatan-input" required />
              </div>

              <div class="form-group">
                  <label for="date" class="create-kegiatan-label">Tanggal</label>
                  <input type="date" id="date" name="date" class="create-kegiatan-input" required />
              </div>

              <div class="form-group">
                  <label for="description" class="create-kegiatan-label">Deskripsi</label>
                  <textarea id="description" name="description" class="create-kegiatan-textarea" required></textarea>
              </div>

              <div class="form-group">
                  <label for="images" class="create-kegiatan-label">Upload 3+ Gambar</label>
                  <input type="file" id="images" name="images[]" class="create-kegiatan-input" multiple required />
              </div>

              <button type="submit" class="btn-submit">Simpan</button>
          </form>
      </div>





  </div>




  <?= $this->endSection() ?>