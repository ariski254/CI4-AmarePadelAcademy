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
          <div class="d-flex align-items-center">

              <i class="bi bi-gear fs-4"></i>
          </div>
      </div>
      <div class="goals">
          <form method="POST" action="/goals/update">
              <?= csrf_field(); ?>

              <div class="form-group">
                  <label for="vision">Our Vision</label>
                  <textarea id="vision" name="vision" class="form-control"><?= $goalsData['vision'] ?? ''; ?></textarea>
              </div>

              <div class="form-group">
                  <label for="mission">Our Mission</label>
                  <textarea id="mission" name="mission"
                      class="form-control"><?= $goalsData['mission'] ?? ''; ?></textarea>
              </div>

              <div class="form-group">
                  <label for="key_success_factor">Key Success Factor</label>
                  <textarea id="key_success_factor" name="key_success_factor"
                      class="form-control"><?= $goalsData['key_success_factor'] ?? ''; ?></textarea>
              </div>

              <div class="form-group">
                  <label for="services">Our Services</label>
                  <textarea id="services" name="services"
                      class="form-control"><?= $goalsData['services'] ?? ''; ?></textarea>
              </div>

              <button type="submit" class="btn btn-primary">Update Goals</button>
          </form>
      </div>
  </div>

  <?= $this->endSection() ?>