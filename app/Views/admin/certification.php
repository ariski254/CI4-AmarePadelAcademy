  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>


  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Edit Certification</h4>
          <div class="d-flex align-items-center">
              <div class="notification me-3">
                  <i class="bi bi-bell fs-4"></i>
                  <span class="badge rounded-circle">2</span>
              </div>
              <i class="bi bi-gear fs-4"></i>
          </div>
      </div>
      <div class="certification">
          <?= \Config\Services::validation()->listErrors(); ?>

          <?php if (session()->getFlashdata('success')): ?>
          <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
          <?php endif; ?>

          <form action="<?= site_url('admin/certification/update'); ?>" method="POST">
              <div class="form-group">
                  <label for="title">Certification Title</label>
                  <input type="text" id="title" name="title" class="form-control"
                      value="<?= esc($certification['title']); ?>" required>
              </div>

              <div class="form-group">
                  <label for="description">Certification Description</label>
                  <textarea id="description" name="description" class="form-control"
                      required><?= esc($certification['description']); ?></textarea>
              </div>

              <button type="submit" class="btn btn-primary">Update Certification</button>
          </form>
      </div>
  </div>




  <?= $this->endSection() ?>