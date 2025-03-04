  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>

  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>page Footer</h4>
          <div class="d-flex align-items-center">
              <i class="bi bi-gear fs-4"></i>
          </div>
      </div>
      <div class="footer">
          <form action="<?= site_url('admin/footer/update'); ?>" method="post" enctype="multipart/form-data">
              <?= csrf_field() ?>

              <div>
                  <label for="logo">Logo (Optional)</label>
                  <input type="file" name="logo" id="logo">
                  <div>
                      <!-- Menampilkan logo lama jika ada -->
                      <?php if ($footer['logo_path']): ?>
                      <img src="<?= base_url($footer['logo_path']); ?>" width="100" alt="Logo Footer" />
                      <?php endif; ?>
                  </div>
              </div>

              <div>
                  <label for="facebook_link">Facebook Link</label>
                  <input type="text" name="facebook_link" id="facebook_link"
                      value="<?= old('facebook_link', $footer['facebook_link']); ?>">
              </div>
              <div>
                  <label for="twitter_link">Twitter Link</label>
                  <input type="text" name="twitter_link" id="twitter_link"
                      value="<?= old('twitter_link', $footer['twitter_link']); ?>">
              </div>
              <div>
                  <label for="youtube_link">YouTube Link</label>
                  <input type="text" name="youtube_link" id="youtube_link"
                      value="<?= old('youtube_link', $footer['youtube_link']); ?>">
              </div>
              <div>
                  <label for="instagram_link">Instagram Link</label>
                  <input type="text" name="instagram_link" id="instagram_link"
                      value="<?= old('instagram_link', $footer['instagram_link']); ?>">
              </div>
              <div>
                  <label for="linkedin_link">LinkedIn Link</label>
                  <input type="text" name="linkedin_link" id="linkedin_link"
                      value="<?= old('linkedin_link', $footer['linkedin_link']); ?>">
              </div>

              <button type="submit">Update Footer</button>
          </form>

      </div>
  </div>

  <?= $this->endSection() ?>