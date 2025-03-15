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
          <?php if (session()->getFlashdata('errors')): ?>
          <div class="alert alert-danger">
              <ul>
                  <?php foreach (session()->getFlashdata('errors') as $error): ?>
                  <li><?= esc($error); ?></li>
                  <?php endforeach; ?>
              </ul>
          </div>
          <?php endif; ?>

          <form action="/admin/programs/update/<?= $program['id']; ?>" method="post" class="program-form">
              <?= csrf_field() ?>
              <h2>Update Program</h2>

              <div class="form-group">
                  <label for="title">Title:</label>
                  <input type="text" name="title" id="title" value="<?= old('title', $program['title']); ?>" required
                      class="form-control">
              </div>

              <div class="form-group">
                  <label for="description">Description:</label>
                  <textarea name="description" id="description" required
                      class="form-control"><?= old('description', $program['description']); ?></textarea>
              </div>

              <div class="form-group">
                  <label for="icon">Icon:</label>
                  <input type="text" name="icon" id="icon" value="<?= old('icon', $program['icon']); ?>" required
                      class="form-control">
              </div>

              <button type="submit" class="btn btn-primary">Update Program</button>
          </form>
      </div>

  </div>
  <?= $this->endSection() ?>