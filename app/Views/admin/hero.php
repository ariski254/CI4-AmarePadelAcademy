  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>



  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Page Home</h4>
          <div class="d-flex align-items-center">
              <i class="bi bi-gear fs-4"></i>
          </div>
      </div>
      <div class="home">
          <?php if (!empty($heroData)): ?>
          <form action="/admin/hero/update" method="post" enctype="multipart/form-data" class="hero-form">
              <input type="hidden" name="id" value="<?= $heroData[0]['id']; ?>" class="hero-form__id">

              <label for="welcome_text" class="hero-form__label">Welcome Text:</label>
              <input type="text" name="welcome_text" value="<?= $heroData[0]['welcome_text']; ?>"
                  class="hero-form__input" id="welcome_text"><br><br>

              <label for="main_title" class="hero-form__label">Main Title:</label>
              <input type="text" name="main_title" value="<?= $heroData[0]['main_title']; ?>" class="hero-form__input"
                  id="main_title"><br><br>

              <label for="sub_title" class="hero-form__label">Subtitle:</label>
              <input type="text" name="sub_title" value="<?= $heroData[0]['sub_title']; ?>" class="hero-form__input"
                  id="sub_title"><br><br>

              <label for="video_file" class="hero-form__label">Video File:</label>
              <input type="file" name="video_file" class="hero-form__input" id="video_file"><br><br>

              <label for="poster_image" class="hero-form__label">Poster Image:</label>
              <input type="file" name="poster_image" class="hero-form__input" id="poster_image"><br><br>

              <button type="submit" class="hero-form__button">Update</button>
          </form>
          <?php endif; ?>
      </div>

  </div>





  <?= $this->endSection() ?>