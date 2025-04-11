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
      <div class="edit-kegiatan-container">
          <h2 class="edit-kegiatan-title text-center mb-4">Edit Kegiatan</h2>

          <form action="<?= base_url('/admin/kegiatan/' . $kegiatan->id . '/update') ?>" method="post"
              enctype="multipart/form-data" class="edit-kegiatan-form">
              <?= csrf_field(); ?>

              <div class="form-group">
                  <label for="title" class="edit-kegiatan-label">Judul</label>
                  <input type="text" name="title" value="<?= esc($kegiatan->title); ?>" class="edit-kegiatan-input"
                      required />
              </div>

              <div class="form-group">
                  <label for="date" class="edit-kegiatan-label">Tanggal</label>
                  <input type="date" name="date" value="<?= esc($kegiatan->date); ?>" class="edit-kegiatan-input"
                      required />
              </div>

              <div class="form-group">
                  <label for="description" class="edit-kegiatan-label">Deskripsi</label>
                  <textarea name="description" class="edit-kegiatan-textarea"
                      required><?= esc($kegiatan->description); ?></textarea>
              </div>

              <div class="form-group">
                  <label for="images" class="edit-kegiatan-label">Upload Gambar Baru (opsional)</label>
                  <input type="file" name="images[]" class="edit-kegiatan-input" multiple />
              </div>

              <div class="form-group">
                  <label class="edit-kegiatan-label">Gambar Lama</label>
                  <div class="old-images-wrapper">
                      <?php foreach ($images as $img): ?>
                      <div class="old-image-box">
                          <img src="<?= base_url('assets/imgs/kegiatan/' . $img->image); ?>" alt="Gambar Kegiatan" />
                          <a href="<?= base_url('/admin/kegiatan/delete_image/' . $img->id); ?>"
                              onclick="return confirm('Hapus gambar ini?')" class="delete-image-link">Hapus</a>
                      </div>
                      <?php endforeach; ?>
                  </div>
              </div>

              <button type="submit" class="btn-submit">Update</button>
          </form>
      </div>



  </div>




  <?= $this->endSection() ?>