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



<section id="coach-section" class="coach-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="coach-content text-center">
                    <h3 class="coach-title"><?= esc($certificationData['title']); ?></h3>
                    <p class="coach-description"><?= esc($certificationData['description']); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="coaching-section section" id="coaching-session">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-up">
                <h2 class="title mb-5 mt-5">Coaching Session</h2>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <?php foreach ($coachingSessions as $index => $session): ?>
            <div class="col-12 col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= 100 + ($index * 100); ?>">
                <div class="card h-100 shadow-sm border-0">
                    <img src="<?= base_url('assets/imgs/coaching/' . $session['image']); ?>"
                        class="card-img-top img-fluid rounded-top" alt="<?= esc($session['title']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= esc($session['title']); ?></h5>
                        <p class="card-text text-muted"><?= esc(date('F d, Y', strtotime($session['date']))); ?></p>
                        <p class="card-text"><?= esc($session['description']); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="row mt-4">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="100">
                <a href="<?= base_url('coaching-session'); ?>" class="btn btn-primary px-4 py-2 rounded-pill">
                    View All Sessions
                </a>
            </div>
        </div>
    </div>
</section>




<!-- Coach -->
<section m" class="team section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up" data-aos-delay="100">
        <h2 class="title">Our Coaches</h2>
        <p>Meet our amazing Coaches.</p>
    </div>
    <!-- End Section Title -->

    <!-- Swiper Container -->
    <div class="container">
        <div class="swiper-container" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper">
                <!-- Loop through each coach -->
                <?php foreach ($coachData as $index => $coach): ?>
                <div class="swiper-slide" data-aos="zoom-in" data-aos-delay="<?= 300 + ($index * 100); ?>">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="<?= base_url('assets/imgs/coach/' . $coach['image']); ?>" class="img-fluid"
                                alt="<?= esc($coach['name']); ?>" />
                            <div class="social">
                                <a href="<?= esc($coach['twitter']); ?>" class="social-icon"><i
                                        class="bi bi-twitter-x"></i></a>
                                <a href="<?= esc($coach['facebook']); ?>" class="social-icon"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="<?= esc($coach['instagram']); ?>" class="social-icon"><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4><?= esc($coach['name']); ?></h4>
                            <span><?= esc($coach['role']); ?></span>
                            <span><?= esc($coach['position']); ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <!-- End swiper-wrapper -->

            <!-- Swiper Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>



<?= $this->endSection() ?>