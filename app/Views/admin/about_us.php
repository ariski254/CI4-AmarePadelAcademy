  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>


  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Page About Us</h4>
          <div class="d-flex align-items-center dropdown hover-dropdown">
              <!-- Settings Icon -->
              <i class="bi bi-gear fs-4" id="settings-icon"></i>

              <!-- Dropdown Menu -->
              <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="<?= site_url('admin/add') ?>">Add Admin</a></li>
                  <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a></li>
              </ul>
          </div>
      </div>
      <div class="about-us-container">
          <form action="<?= base_url('admin/update_about_us'); ?>" method="POST" enctype="multipart/form-data"
              class="about-us-form">
              <input type="hidden" name="id" value="<?= $aboutUsData['id']; ?>" />

              <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" value="<?= esc($aboutUsData['title']); ?>" required />
              </div>

              <div class="form-group">
                  <label for="subtitle">Subtitle</label>
                  <input type="text" name="subtitle" value="<?= esc($aboutUsData['subtitle']); ?>" required />
              </div>

              <div class="form-group">
                  <label for="description">Description</label>
                  <textarea name="description" required><?= esc($aboutUsData['description']); ?></textarea>
              </div>

              <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" name="image" accept="image/*" />
              </div>

              <button type="submit" class="btn-submit">Update About Us</button>
          </form>
      </div>








  </div>




  <?= $this->endSection() ?>