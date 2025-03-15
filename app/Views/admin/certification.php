  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>


  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Edit Certification</h4>
          <div class="d-flex align-items-center dropdown">
              <i class="bi bi-gear fs-4" id="settings-icon"></i>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= site_url('admin/add') ?>">Add Admin</a></li>
                  <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a></li>
              </ul>
          </div>
      </div>
      <div class="certification">
          <?= \Config\Services::validation()->listErrors(); ?>

          <?php if (session()->getFlashdata('success')): ?>
          <div class="alert alert-success certification-alert">
              <?= session()->getFlashdata('success') ?>
          </div>
          <?php endif; ?>

          <form action="<?= site_url('admin/certification/update'); ?>" method="POST" class="certification-form">
              <div class="form-group">
                  <label for="title" class="form-label">Certification Title</label>
                  <input type="text" id="title" name="title" class="form-input"
                      value="<?= esc($certification['title']); ?>" required>
              </div>

              <div class="form-group">
                  <label for="description" class="form-label">Certification Description</label>
                  <textarea id="description" name="description" class="form-input"
                      required><?= esc($certification['description']); ?></textarea>
              </div>

              <button type="submit" class="form-button">Update Certification</button>
          </form>
      </div>


  </div>




  <?= $this->endSection() ?>