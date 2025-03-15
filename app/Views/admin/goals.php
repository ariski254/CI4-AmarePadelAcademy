  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>



  <?php if (session()->getFlashdata('message')): ?>
  <div class="alert alert-success">
      <?= session()->getFlashdata('message'); ?>
  </div>
  <?php endif; ?>

  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Page Goals</h4>
          <div class="d-flex align-items-center dropdown">
              <i class="bi bi-gear fs-4" id="settings-icon"></i>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= site_url('admin/add') ?>">Add Admin</a></li>
                  <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a></li>
              </ul>
          </div>
      </div>
      <div class="goals-container">
          <h2 class="goals-title">Update Goals</h2>
          <form method="POST" action="/goals/update" class="goals-form">
              <?= csrf_field(); ?>

              <!-- Vision Section -->
              <div class="form-group goals-form-group">
                  <label for="vision" class="goals-label">Our Vision</label>
                  <textarea id="vision" name="vision"
                      class="goals-textarea"><?= $goalsData['vision'] ?? ''; ?></textarea>
              </div>

              <!-- Mission Section -->
              <div class="form-group goals-form-group">
                  <label for="mission" class="goals-label">Our Mission</label>
                  <textarea id="mission" name="mission"
                      class="goals-textarea"><?= $goalsData['mission'] ?? ''; ?></textarea>
              </div>

              <!-- Key Success Factor Section -->
              <div class="form-group goals-form-group">
                  <label for="key_success_factor" class="goals-label">Key Success Factor</label>
                  <textarea id="key_success_factor" name="key_success_factor"
                      class="goals-textarea"><?= $goalsData['key_success_factor'] ?? ''; ?></textarea>
              </div>

              <!-- Services Section -->
              <div class="form-group goals-form-group">
                  <label for="services" class="goals-label">Our Services</label>
                  <textarea id="services" name="services"
                      class="goals-textarea"><?= $goalsData['services'] ?? ''; ?></textarea>
              </div>

              <!-- Submit Button -->
              <button type="submit" class="btn goals-submit-btn">Update Goals</button>
          </form>
      </div>

  </div>

  <?= $this->endSection() ?>