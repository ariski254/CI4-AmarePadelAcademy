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
                <h1>About Us</h1>
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




<!-- About Section -->
<section class="about-page">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="about-wrapper">
            <!-- Gambar -->
            <div class="about-image-wrapper" data-aos="fade-right" data-aos-delay="200">
                <?php if (isset($aboutUsData['image']) && !empty($aboutUsData['image'])): ?>
                <img src="<?= base_url($aboutUsData['image']); ?>" alt="About Us" class="about-img" />
                <?php else: ?>
                <img src="path/to/default-image.jpg" alt="Default Image" class="about-img" />
                <?php endif; ?>
            </div>

            <!-- Teks -->
            <div class="about-text" data-aos="fade-left" data-aos-delay="400">
                <h2 class="about-title"><?= $aboutUsData['title'] ?? 'Default Title'; ?></h2>
                <h4 class="about-subtitle"><?= $aboutUsData['subtitle'] ?? 'Default Subtitle'; ?></h4>
                <p class="about-description"><?= $aboutUsData['description'] ?? 'Default Description'; ?></p>
            </div>
        </div>
    </div>
</section>


<!-- Goals Section -->
<section class="goals-page">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Our Goals</h2>
        </div>
        <div class="goals-grid">
            <!-- Left Column -->
            <div class="goals-column">
                <div class="goals-box" data-aos="fade-right" data-aos-delay="100">
                    <h3>OUR VISION</h3>
                    <p><?= $goalsData['vision'] ?? 'Default Vision'; ?></p>
                </div>
                <div class="goals-box" data-aos="fade-right" data-aos-delay="200">
                    <h3>KEY SUCCESS FACTOR</h3>
                    <ul>
                        <?= isset($goalsData['key_success_factor']) ? "<li>" . implode("</li><li>", explode("\n", $goalsData['key_success_factor'])) . "</li>" : "<li>Default Key Success Factor</li>" ?>
                    </ul>
                </div>
            </div>

            <!-- Right Column -->
            <div class="goals-column">
                <div class="goals-box" data-aos="fade-left" data-aos-delay="100">
                    <h3>OUR MISSION</h3>
                    <ul>
                        <?= isset($goalsData['mission']) ? "<li>" . implode("</li><li>", explode("\n", $goalsData['mission'])) . "</li>" : "<li>Default Mission</li>" ?>
                    </ul>
                </div>
                <div class="goals-box" data-aos="fade-left" data-aos-delay="200">
                    <h3>OUR SERVICES</h3>
                    <ul>
                        <?= isset($goalsData['services']) ? "<li>" . implode("</li><li>", explode("\n", $goalsData['services'])) . "</li>" : "<li>Default Services</li>" ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>






<?= $this->endSection() ?>