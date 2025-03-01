  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>
  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Edit About Us</h4>
          <div class="d-flex align-items-center">

              <i class="bi bi-gear fs-4"></i>
          </div>
      </div>
      <div class="edit-coach">
          <h2>Edit Coach: <?= esc($coach['name']) ?></h2>
          <form action="/admin/coaches/update/<?= $coach['id'] ?>" method="POST" enctype="multipart/form-data">
              <?= csrf_field() ?>

              <input type="hidden" name="existing_image" value="<?= $coach['image'] ?>">

              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" class="form-control"
                      value="<?= old('name', $coach['name']) ?>" required>
              </div>

              <div class="form-group">
                  <label for="role">Role</label>
                  <input type="text" name="role" id="role" class="form-control"
                      value="<?= old('role', $coach['role']) ?>" required>
              </div>

              <div class="form-group">
                  <label for="position">Position</label>
                  <input type="text" name="position" id="position" class="form-control"
                      value="<?= old('position', $coach['position']) ?>" required>
              </div>

              <div class="form-group">
                  <label for="image">Image (Leave empty to keep existing)</label>
                  <input type="file" name="image" id="image" class="form-control">
                  <img src="<?= base_url('assets/imgs/coach/' . $coach['image']); ?>" alt="Coach Image" width="100">
              </div>

              <div class="form-group">
                  <label for="twitter">Twitter URL</label>
                  <input type="text" name="twitter" id="twitter" class="form-control"
                      value="<?= old('twitter', $coach['twitter']) ?>">
              </div>

              <div class="form-group">
                  <label for="facebook">Facebook URL</label>
                  <input type="text" name="facebook" id="facebook" class="form-control"
                      value="<?= old('facebook', $coach['facebook']) ?>">
              </div>

              <div class="form-group">
                  <label for="instagram">Instagram URL</label>
                  <input type="text" name="instagram" id="instagram" class="form-control"
                      value="<?= old('instagram', $coach['instagram']) ?>">
              </div>

              <button type="submit" class="btn btn-warning mt-3">Update Coach</button>
          </form>
      </div>
  </div>

  <?= $this->endSection() ?>