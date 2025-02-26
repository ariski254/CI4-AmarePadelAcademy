  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>


  <section class="Hero">
      <div class="content">
          <!-- Navbar Top with Toggle -->
          <div class="top-bar">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                  <i class="bi bi-list fs-3"></i>
              </button>
              <h4>Page Home</h4>
              <div class="d-flex align-items-center">
                  <div class="notification me-3">
                      <i class="bi bi-bell fs-4"></i>
                      <span class="badge rounded-circle">2</span>
                  </div>
                  <i class="bi bi-gear fs-4"></i>
              </div>
          </div>
          <?php if (!empty($heroData)): ?>
          <form action="/admin/hero/update" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $heroData[0]['id']; ?>">

              <label>Welcome Text:</label>
              <input type="text" name="welcome_text" value="<?= $heroData[0]['welcome_text']; ?>"><br><br>

              <label>Main Title:</label>
              <input type="text" name="main_title" value="<?= $heroData[0]['main_title']; ?>"><br><br>

              <label>Subtitle:</label>
              <input type="text" name="sub_title" value="<?= $heroData[0]['sub_title']; ?>"><br><br>

              <label>Video File:</label>
              <input type="file" name="video_file"><br><br>

              <label>Poster Image:</label>
              <input type="file" name="poster_image"><br><br>

              <button type="submit">Update</button>
          </form>
          <?php endif; ?>


      </div>

  </section>



  <?= $this->endSection() ?>