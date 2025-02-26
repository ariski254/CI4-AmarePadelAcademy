  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>


  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Edit Material</h4>
          <div class="d-flex align-items-center">
              <div class="notification me-3">
                  <i class="bi bi-bell fs-4"></i>
                  <span class="badge rounded-circle">2</span>
              </div>
              <i class="bi bi-gear fs-4"></i>
          </div>
      </div>
      <div class="edit-material">
          <?php if (session()->getFlashdata('success')): ?>
          <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
          <?php endif; ?>

          <?php if (session()->getFlashdata('error')): ?>
          <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
          <?php endif; ?>

          <form action="/admin/materials/update/<?= $material['id'] ?>" method="POST" enctype="multipart/form-data">
              <?= csrf_field() ?>

              <label for="name">Material Name:</label>
              <input type="text" name="name" id="name" value="<?= old('name', $material['name']) ?>" required><br><br>

              <label for="image">Material Image (Optional):</label>
              <input type="file" name="image" id="image"><br><br>

              <label>Current Image:</label>
              <!-- Menampilkan gambar lama -->
              <img src="<?= base_url($material['image_path']) ?>" alt="Material Image" width="100"><br><br>

              <button type="submit">Update Material</button>
          </form>

      </div>
  </div>
  <?= $this->endSection() ?>