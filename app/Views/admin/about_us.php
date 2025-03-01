  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>


  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Page About Us</h4>
          <div class="d-flex align-items-center">

              <i class="bi bi-gear fs-4"></i>
          </div>
      </div>
      <div class="about-us">
          <form action="<?= base_url('admin/update_about_us'); ?>" method="POST" enctype="multipart/form-data">
              <!-- Hidden ID to identify the record being updated -->
              <input type="hidden" name="id" value="<?= $aboutUsData['id']; ?>" />

              <label for="title">Title:</label>
              <input type="text" name="title" value="<?= $aboutUsData['title']; ?>" required />

              <label for="subtitle">Subtitle:</label>
              <input type="text" name="subtitle" value="<?= $aboutUsData['subtitle']; ?>" required />

              <label for="description">Description:</label>
              <textarea name="description" required><?= $aboutUsData['description']; ?></textarea>

              <label for="image">Image:</label>
              <input type="file" name="image" />

              <button type="submit">Update About Us</button>
          </form>
      </div>
  </div>




  <?= $this->endSection() ?>