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

      <h2>Edit Kegiatan</h2>
      <form action="<?= base_url('/admin/kegiatan/' . $kegiatan->id . '/update') ?>" method="post"
          enctype="multipart/form-data">
          <div class="mb-3">
              <label>Judul</label>
              <input type="text" name="title" value="<?= esc($kegiatan->title); ?>" class="form-control" required>
          </div>
          <div class="mb-3">
              <label>Tanggal</label>
              <input type="date" name="date" value="<?= esc($kegiatan->date); ?>" class="form-control" required>
          </div>
          <div class="mb-3">
              <label>Deskripsi</label>
              <textarea name="description" class="form-control" required><?= esc($kegiatan->description); ?></textarea>
          </div>
          <div class="mb-3">
              <label>Upload Gambar Baru (opsional)</label>
              <input type="file" name="images[]" class="form-control" multiple>
          </div>

          <div class="mb-3">
              <label>Gambar Lama</label><br>
              <?php foreach ($images as $img): ?>
              <div style="display:inline-block; margin:10px;">
                  <img src="<?= base_url('assets/imgs/kegiatan/' . $img->image); ?>" width="100"><br>
                  <a href="<?= base_url('/admin/kegiatan/delete_image/' . $img->id); ?>"
                      onclick="return confirm('Hapus gambar ini?')">Hapus</a>
              </div>
              <?php endforeach; ?>
          </div>

          <button class="btn btn-primary">Update</button>
      </form>

  </div>




  <?= $this->endSection() ?>