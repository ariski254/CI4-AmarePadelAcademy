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
      <div class="about-us">
          <form action="<?= base_url('admin/update_about_us'); ?>" method="POST" enctype="multipart/form-data">
              <!-- Hidden ID to identify the record being updated -->
              <input type="hidden" name="id" value="<?= $aboutUsData['id']; ?>" />

              <!-- Title Input -->
              <label for="title" class="about-us-label">Title:</label>
              <input type="text" name="title" value="<?= esc($aboutUsData['title']); ?>" class="about-us-input"
                  required />

              <!-- Subtitle Input -->
              <label for="subtitle" class="about-us-label">Subtitle:</label>
              <input type="text" name="subtitle" value="<?= esc($aboutUsData['subtitle']); ?>" class="about-us-input"
                  required />

              <!-- Description Textarea -->
              <label for="description" class="about-us-label">Description:</label>
              <textarea name="description" class="about-us-textarea"
                  required><?= esc($aboutUsData['description']); ?></textarea>

              <!-- Image Upload Input -->
              <label for="image" class="about-us-label">Image:</label>
              <input type="file" name="image" class="about-us-input-file" />

              <!-- Submit Button -->
              <button type="submit" class="about-us-submit">Update About Us</button>
          </form>
      </div>



  </div>




  <?= $this->endSection() ?>