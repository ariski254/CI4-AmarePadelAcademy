  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>
  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Create Portfolio</h4>
          <div class="d-flex align-items-center dropdown">
              <i class="bi bi-gear fs-4" id="settings-icon"></i>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= site_url('admin/add') ?>">Add Admin</a></li>
                  <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a></li>
              </ul>
          </div>class="bi bi-gear fs-4"></i>
      </div>
  </div>
  <div class="create-portfolio-container">
      <h2 class="create-portfolio-title">Create New Portfolio</h2>

      <?php if (session()->getFlashdata('errors')): ?>
      <div class="form-alert error">
          <ul>
              <?php foreach (session()->getFlashdata('errors') as $error): ?>
              <li><?= esc($error); ?></li>
              <?php endforeach; ?>
          </ul>
      </div>
      <?php endif; ?>

      <form action="/admin/portfolio/create" method="post" enctype="multipart/form-data" class="create-portfolio-form">
          <?= csrf_field() ?>

          <div class="form-group">
              <label for="title" class="create-portfolio-label">Title</label>
              <input type="text" id="title" name="title" class="create-portfolio-input" value="<?= old('title') ?>"
                  required>
          </div>

          <div class="form-group">
              <label for="description" class="create-portfolio-label">Description</label>
              <textarea id="description" name="description" class="create-portfolio-input"
                  required><?= old('description') ?></textarea>
          </div>

          <div class="form-group">
              <label for="image" class="create-portfolio-label">Image</label>
              <input type="file" id="image" name="image" class="create-portfolio-input" required>
          </div>

          <button type="submit" class="create-portfolio-button">Create Portfolio</button>
          <a href="/admin/portfolio" class="create-portfolio-back">← Back to Portfolio</a>
      </form>
  </div>




  </div>
  <?= $this->endSection() ?>