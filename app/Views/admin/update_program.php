  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>
  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Update Programs</h4>
          <div class="d-flex align-items-center">

              <i class="bi bi-gear fs-4"></i>
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

          <form action="/admin/programs/update/<?= $program['id']; ?>" method="post">
              <?= csrf_field() ?>
              <div>
                  <label for="title">Title:</label>
                  <input type="text" name="title" id="title" value="<?= old('title', $program['title']); ?>" required>
              </div>
              <div>
                  <label for="description">Description:</label>
                  <textarea name="description" id="description"
                      required><?= old('description', $program['description']); ?></textarea>
              </div>
              <div>
                  <label for="icon">Icon:</label>
                  <input type="text" name="icon" id="icon" value="<?= old('icon', $program['icon']); ?>" required>
              </div>
              <button type="submit">Update Program</button>
          </form>
      </div>
  </div>
  <?= $this->endSection() ?>