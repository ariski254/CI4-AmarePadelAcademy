  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>
  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Update Programs</h4>
          <div class="d-flex align-items-center dropdown">
              <i class="bi bi-gear fs-4" id="settings-icon"></i>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= site_url('admin/add') ?>">Add Admin</a></li>
                  <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a></li>
              </ul>
          </div>
      </div>
      <div class="update-program">
          <?php if (session()->getFlashdata('success')): ?>
          <div class="alert alert-success">
              <?= session()->getFlashdata('success') ?>
          </div>
          <?php endif; ?>

          <?php if (session()->getFlashdata('error')): ?>
          <div class="alert alert-danger">
              <?= session()->getFlashdata('error') ?>
          </div>
          <?php endif; ?>

          <h2>Update Program</h2>
          <form action="/admin/programs/update/<?= $program['id']; ?>" method="post">
              <?= csrf_field() ?>

              <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" id="title" class="form-control"
                      value="<?= old('title', $program['title']); ?>" required>
                  <?php if (isset($errors['title'])): ?>
                  <div class="text-danger"><?= $errors['title'] ?></div>
                  <?php endif; ?>
              </div>

              <div class="form-group">
                  <label for="description">Description</label>
                  <textarea name="description" id="description" class="form-control"
                      required><?= old('description', $program['description']); ?></textarea>
                  <?php if (isset($errors['description'])): ?>
                  <div class="text-danger"><?= $errors['description'] ?></div>
                  <?php endif; ?>
              </div>

              <div class="form-group">
                  <label for="icon">Icon</label>
                  <input type="text" name="icon" id="icon" class="form-control"
                      value="<?= old('icon', $program['icon']); ?>" required>
                  <?php if (isset($errors['icon'])): ?>
                  <div class="text-danger"><?= $errors['icon'] ?></div>
                  <?php endif; ?>
              </div>

              <button type="submit" class="btn-submit">Update Program</button>
          </form>
      </div>





  </div>
  <?= $this->endSection() ?>