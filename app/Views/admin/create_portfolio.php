  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>
  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Create Portfolio</h4>
          <div class="d-flex align-items-center">
              <div class="notification me-3">
                  <i class="bi bi-bell fs-4"></i>
                  <span class="badge rounded-circle">2</span>
              </div>
              <i class="bi bi-gear fs-4"></i>
          </div>
      </div>
      <div class="create-portfolio">
          <form action="/admin/portfolio/create" method="post" enctype="multipart/form-data">
              <?= csrf_field() ?>

              <div>
                  <label for="title">Title</label>
                  <input type="text" id="title" name="title" value="<?= old('title') ?>" required>
              </div>

              <div>
                  <label for="description">Description</label>
                  <textarea id="description" name="description" required><?= old('description') ?></textarea>
              </div>

              <div>
                  <label for="image">Image</label>
                  <input type="file" id="image" name="image" required>
              </div>

              <button type="submit">Create Portfolio</button>
          </form>


          <a href="/admin/portfolio">Back to Portfolio</a>
      </div>
  </div>
  <?= $this->endSection() ?>