  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>

  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Edit Programs</h4>
          <div class="d-flex align-items-center">

              <i class="bi bi-gear fs-4"></i>
          </div>
      </div>
      <div class="edit-programs">
          <form action="/admin/program/update/<?= $program['id'] ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" name="title" value="<?= $program['title'] ?>" required>
              </div>
              <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" name="description" required><?= $program['description'] ?></textarea>
              </div>
              <div class="form-group">
                  <label for="image">Program Image</label>
                  <input type="file" class="form-control" name="image">
                  <?php if (!empty($program_image)): ?>
                  <img src="/uploads/<?= $program_image['image_path'] ?>" width="100" alt="Current Image">
                  <?php endif; ?>
              </div>
              <button type="submit" class="btn btn-primary">Update Program</button>
          </form>
      </div>
  </div>

  <?= $this->endSection() ?>