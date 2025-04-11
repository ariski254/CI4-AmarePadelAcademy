  <?= $this->extend('navfoot/navfoot') ?>

  <?= $this->section('navfoot') ?>



  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-light shadow-lg">
      <div class="container">
          <a class="navbar-brand" href="<?= base_url('/') ?>">
              <img src="<?= base_url('assets/imgs/placeholder.svg') ?>" alt="image" style="height: 40px" />
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('#hero') ?>">Home</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('#about-us') ?>">About</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('#portfolio') ?>">Portfolio</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('#team') ?>">Coach</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('#contact-us') ?>">Contact Us</a>
                  </li>

                  <li class="nav-item">
                      <a href="https://linktr.ee/amarepadelacademy?fbclid=PAY2xjawIWYaBleHRuA2FlbQIxMQABplpAs6lzH5W1S-YGtdPRpwJhZfyUj4TjsU8npk1AgmGpZDxAxoEQQUFcXw_aem_ilnLA_7Zk6hMz68KXnS2FQ"
                          class="btn btn-primary" aria-label="Booking"><i class="bi bi-calendar-check"></i>
                          Booking
                      </a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>

  <!-- Header -->
  <section class="header-modern">
      <div class="container">
          <div class="header-content">
              <div class="header-title" data-aos="fade-down">
                  <h1>Portfolio</h1>
              </div>
              <div class="breadcrumb-wrapper" data-aos="fade-up" data-aos-delay="200">
                  <nav aria-label="breadcrumb">
                      <a href="<?= base_url('/') ?>" class="breadcrumb-link">Home</a>
                      <span class="separator">/</span>
                      <span class="current-page">About</span>
                  </nav>
              </div>
          </div>
      </div>
  </section>


  <!-- all_portfolio -->
  <section class="all-portfolio-section">
      <div class="container">

          <?php if (!empty($kegiatan)): ?>
          <?php foreach ($kegiatan as $item): ?>
          <div class="kegiatan-card">
              <div class="kegiatan-header">
                  <h3 class="kegiatan-title"><?= esc($item->title) ?></h3>
                  <p class="kegiatan-date"><i class="bi bi-calendar-event"></i> <?= esc($item->date) ?></p>
              </div>
              <p class="kegiatan-description"><?= esc($item->description) ?></p>

              <?php if (!empty($images[$item->id])): ?>
              <div class="kegiatan-image-grid">
                  <?php foreach ($images[$item->id] as $img): ?>
                  <div class="kegiatan-image-wrapper">
                      <img src="<?= base_url('assets/imgs/kegiatan/' . $img->image) ?>" alt="Gambar kegiatan"
                          class="kegiatan-image">
                  </div>
                  <?php endforeach; ?>
              </div>
              <?php endif; ?>
          </div>
          <?php endforeach; ?>
          <?php else: ?>
          <div class="no-kegiatan">
              Belum ada kegiatan yang ditambahkan.
          </div>
          <?php endif; ?>
      </div>
  </section>



  <?= $this->endSection() ?>