  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>
  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Edit About Us</h4>
          <div class="d-flex align-items-center dropdown">
              <i class="bi bi-gear fs-4" id="settings-icon"></i>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= site_url('admin/add') ?>">Add Admin</a></li>
                  <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a></li>
              </ul>
          </div>
      </div>
      <div class="edit-coach-container">
          <h2 class="edit-coach-title">Edit Coach</h2>

          <form action="/admin/coaches/update/<?= $coach['id'] ?>" method="POST" enctype="multipart/form-data"
              class="edit-coach-form">
              <?= csrf_field() ?>
              <input type="hidden" name="existing_image" value="<?= $coach['image'] ?>">

              <div class="form-group">
                  <label for="name" class="edit-coach-label">Name</label>
                  <input type="text" name="name" id="name" class="edit-coach-input"
                      value="<?= old('name', $coach['name']) ?>" required>
              </div>

              <div class="form-group">
                  <label for="role" class="edit-coach-label">Role</label>
                  <input type="text" name="role" id="role" class="edit-coach-input"
                      value="<?= old('role', $coach['role']) ?>" required>
              </div>

              <div class="form-group">
                  <label for="position" class="edit-coach-label">Position</label>
                  <input type="text" name="position" id="position" class="edit-coach-input"
                      value="<?= old('position', $coach['position']) ?>" required>
              </div>

              <div class="form-group">
                  <label for="image" class="edit-coach-label">Image (leave empty to keep current)</label>
                  <input type="file" name="image" id="image" class="edit-coach-input">
                  <div class="mt-2">
                      <img src="<?= base_url('assets/imgs/coach/' . $coach['image']); ?>" alt="Coach Image"
                          class="edit-coach-image-preview" width="100">
                  </div>
              </div>

              <div class="form-group">
                  <label for="twitter" class="edit-coach-label">Twitter URL</label>
                  <input type="text" name="twitter" id="twitter" class="edit-coach-input"
                      value="<?= old('twitter', $coach['twitter']) ?>">
              </div>

              <div class="form-group">
                  <label for="facebook" class="edit-coach-label">Facebook URL</label>
                  <input type="text" name="facebook" id="facebook" class="edit-coach-input"
                      value="<?= old('facebook', $coach['facebook']) ?>">
              </div>

              <div class="form-group">
                  <label for="instagram" class="edit-coach-label">Instagram URL</label>
                  <input type="text" name="instagram" id="instagram" class="edit-coach-input"
                      value="<?= old('instagram', $coach['instagram']) ?>">
              </div>

              <button type="submit" class="edit-coach-submit-btn">Update Coach</button>
          </form>
      </div>




  </div>

  <?= $this->endSection() ?>