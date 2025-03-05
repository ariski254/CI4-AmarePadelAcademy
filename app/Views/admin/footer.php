  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>

  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>page Footer</h4>
          <div class="d-flex align-items-center dropdown">
              <i class="bi bi-gear fs-4" id="settings-icon"></i>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= site_url('admin/add') ?>">Add Admin</a></li>
                  <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a></li>
              </ul>
          </div>
      </div>
      <div class="footer-container">
          <h2 class="footer-title">Update Footer</h2>
          <form action="<?= site_url('admin/footer/update'); ?>" method="post" enctype="multipart/form-data"
              class="footer-form">
              <?= csrf_field() ?>

              <!-- Logo Upload Section -->
              <div class="form-group footer-form-group">
                  <label for="logo" class="footer-label">Logo (Optional)</label>
                  <input type="file" name="logo" id="logo" class="footer-input">
                  <div class="footer-logo-preview">
                      <!-- Display existing logo if available -->
                      <?php if ($footer['logo_path']): ?>
                      <img src="<?= base_url($footer['logo_path']); ?>" width="100" alt="Logo Footer"
                          class="footer-logo-image" />
                      <?php endif; ?>
                  </div>
              </div>

              <!-- Social Media Links Section -->
              <div class="form-group footer-form-group">
                  <label for="facebook_link" class="footer-label">Facebook Link</label>
                  <input type="text" name="facebook_link" id="facebook_link" class="footer-input"
                      value="<?= old('facebook_link', $footer['facebook_link']); ?>">
              </div>

              <div class="form-group footer-form-group">
                  <label for="twitter_link" class="footer-label">Twitter Link</label>
                  <input type="text" name="twitter_link" id="twitter_link" class="footer-input"
                      value="<?= old('twitter_link', $footer['twitter_link']); ?>">
              </div>

              <div class="form-group footer-form-group">
                  <label for="youtube_link" class="footer-label">YouTube Link</label>
                  <input type="text" name="youtube_link" id="youtube_link" class="footer-input"
                      value="<?= old('youtube_link', $footer['youtube_link']); ?>">
              </div>

              <div class="form-group footer-form-group">
                  <label for="instagram_link" class="footer-label">Instagram Link</label>
                  <input type="text" name="instagram_link" id="instagram_link" class="footer-input"
                      value="<?= old('instagram_link', $footer['instagram_link']); ?>">
              </div>

              <div class="form-group footer-form-group">
                  <label for="linkedin_link" class="footer-label">LinkedIn Link</label>
                  <input type="text" name="linkedin_link" id="linkedin_link" class="footer-input"
                      value="<?= old('linkedin_link', $footer['linkedin_link']); ?>">
              </div>

              <!-- Submit Button -->
              <button type="submit" class="btn footer-submit-btn">Update Footer</button>
          </form>
      </div>

  </div>

  <?= $this->endSection() ?>