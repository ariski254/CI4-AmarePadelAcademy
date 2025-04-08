<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Amare Padel Academy</title>
    <link rel="icon" href="<?= base_url('assets/imgs/placeholder.svg') ?>" type="image/svg+xml">

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/bootstrap-icons.css') ?>" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>" />
    <link href="<?= base_url('assets/css/aos.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet" />

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>


<body>
    <main>

        <!-- Hero -->
        <section class="hero" id="hero">
            <div class="heroText">
                <h3 class="text-secondary-white-color" data-aos="fade-up" data-aos-delay="1000">
                    <?= !empty($heroData) && isset($heroData[0]['welcome_text']) ? $heroData[0]['welcome_text'] : 'Welcome to'; ?>
                </h3>
                <h1 class="text-white" data-aos="zoom-in" data-aos-delay="800">
                    <?= !empty($heroData) && isset($heroData[0]['main_title']) ? $heroData[0]['main_title'] : 'AMARE PADEL ACADEMY'; ?>
                </h1>
                <h5 class="text-secondary-white-color" data-aos="fade-up" data-aos-delay="1000">
                    <?= !empty($heroData) && isset($heroData[0]['sub_title']) ? $heroData[0]['sub_title'] : 'member of AMARE SPORT GROUP'; ?>
                </h5>
            </div>

            <div class="videoWrapper">
                <video autoplay loop muted class="custom-video"
                    poster="<?= !empty($heroData) && isset($heroData[0]['poster_image']) ? base_url($heroData[0]['poster_image']) : ''; ?>">
                    <source
                        src="<?= !empty($heroData) && isset($heroData[0]['video_file']) ? base_url($heroData[0]['video_file']) : ''; ?>"
                        type="video/mp4" />
                    Error video.
                </video>
            </div>

            <div class="overlay"></div>
        </section>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/imgs/placeholder.svg" alt="Nomad Force Logo" style="height: 40px" />
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <!-- ms-auto to align items to the right -->
                        <li class="nav-item">
                            <a class="nav-link" href="#hero">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#about-us">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#goals">Goals</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#team">Coach</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="#contact-us">Contact Us</a>
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


        <!-- about -->
        <section class="about-us" id="about-us">
            <div class="container">
                <div class="about-content">
                    <div class="image-container">
                        <?php if (isset($aboutUsData['image']) && !empty($aboutUsData['image'])): ?>
                        <img src="<?= base_url($aboutUsData['image']); ?>" alt="About Us Image" class="about-image" />
                        <?php else: ?>
                        <img src="path/to/default-image.jpg" alt="Default About Us Image" class="about-image" />
                        <?php endif; ?>
                    </div>
                    <div class="text-container">
                        <h2 class="title"><?= $aboutUsData['title'] ?? 'Default Title'; ?></h2>
                        <p class="subtitle"><?= $aboutUsData['subtitle'] ?? 'Default Subtitle'; ?></p>
                        <p class="description"><?= $aboutUsData['description'] ?? 'Default Description'; ?></p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Goals -->
        <section id="goals" class="ftco-section ftco-no-pb">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Title -->
                    <div class="col-lg-12 text-center wow fadeInUp" data-wow-duration="500ms">
                        <h2 class="text-center mb-5 mt-5">Our Goals</h2>
                    </div>
                </div>
                <div class="row">
                    <!-- First Column (Left) -->
                    <div class="col-md-6 mb-4 d-flex flex-column gap-4">
                        <div class="resume-wrap ftco-animate equal-height">
                            <h3 class="text-heading">OUR VISION</h3>
                            <p class="mt-3">
                                <?= $goalsData['vision'] ?? 'Default Vision' ?>
                            </p>
                        </div>
                        <div class="resume-wrap ftco-animate equal-height">
                            <h3 class="text-heading">KEY SUCCESS FACTOR</h3>
                            <ul class="mt-3">
                                <?= isset($goalsData['key_success_factor']) ? "<li>" . implode("</li><li>", explode("\n", $goalsData['key_success_factor'])) . "</li>" : "Default Key Success Factor" ?>
                            </ul>
                        </div>
                    </div>

                    <!-- Second Column (Right) -->
                    <div class="col-md-6 mb-4 d-flex flex-column gap-4">
                        <div class="resume-wrap ftco-animate equal-height">
                            <h3 class="text-heading">OUR MISSION</h3>
                            <ul class="mt-3">
                                <?= isset($goalsData['mission']) ? "<li>" . implode("</li><li>", explode("\n", $goalsData['mission'])) . "</li>" : "Default Mission" ?>
                            </ul>
                        </div>
                        <div class="resume-wrap ftco-animate equal-height">
                            <h3 class="text-heading">OUR SERVICES</h3>
                            <ul class="mt-3">
                                <?= isset($goalsData['services']) ? "<li>" . implode("</li><li>", explode("\n", $goalsData['services'])) . "</li>" : "Default Services" ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Programs -->
        <section id="programs" class="custom-programs section">
            <!-- Section Title -->
            <div class="container custom-section-title" data-aos="fade-up">
                <h2 class="custom-section-heading mb-5 mt-5">Programs</h2>
                <p class="custom-section-description">Our expertly designed programs to suit every level.</p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    <?php foreach ($programs as $program): ?>
                    <div class="col-lg-4 col-md-6 custom-program-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="custom-program-card">
                            <div class="custom-program-icon">
                                <i class="bi <?= esc($program['icon']); ?>"></i>
                            </div>
                            <a href="#" class="custom-program-link">
                                <h3 class="custom-program-title"><?= esc($program['title']); ?></h3>
                            </a>
                            <p class="custom-program-description">
                                <?= esc($program['description']); ?>
                            </p>
                        </div>
                    </div>
                    <!-- End program Item -->
                    <?php endforeach; ?>
                </div>
            </div>
        </section>


        <!-- Coach Seritikat -->
        <section id="call-to-action" class="call-to-action section accent-background">
            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="cta-content text-center">
                            <!-- Make sure to use 'certificationData' instead of 'certification' -->
                            <h3 class="cta-title"><?= esc($certificationData['title']); ?></h3>
                            <p class="cta-description">
                                <?= esc($certificationData['description']); ?>
                            </p>
                            <!-- Optional button for action -->
                            <a href="#team" class="cta-button">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <!-- Portfolio -->
        <section class="portfolio section" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="title wow fadeInUp" data-wow-duration="500ms">
                            <h2 class="title mb-5 mt-5">Portfolio</h2>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Items -->
                <div class="row g-4 justify-content-center">
                    <?php foreach ($portfolioData as $portfolio): ?>
                    <div class="col-6 col-md-6 col-lg-4">
                        <div class="portfolio-block">
                            <img src="<?= base_url('assets/imgs/portfolio/' . $portfolio->image); ?>"
                                alt="<?= esc($portfolio->title); ?>" class="img-fluid rounded" />
                            <div class="caption">
                                <a class="search-icon image-popup" data-effect="mfp-with-zoom"
                                    href="<?= base_url('assets/imgs/portfolio/' . $portfolio->image); ?>"
                                    data-lightbox="image-<?= $portfolio->id; ?>">
                                    <i class="bi bi-search"></i>
                                </a>
                                <h4><?= esc($portfolio->title); ?></h4>
                                <p class="mb-0"><?= esc($portfolio->description); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <a href="<?= base_url('kegiatan/all'); ?>" class="btn btn-primary px-4 py-2 rounded-pill">
                            View All
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Coach -->
        <section id="team" class="team section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2 class="title">Our Coaches</h2>
                <p>Meet our amazing Coaches.</p>
            </div>
            <!-- End Section Title -->

            <!-- Swiper Container -->
            <div class="container">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Loop through each coach -->
                        <?php foreach ($coachData as $coach): ?>
                        <div class="swiper-slide">
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="<?= base_url('assets/imgs/coach/' . $coach['image']); ?>"
                                        class="img-fluid" alt="<?= esc($coach['name']); ?>" />
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

                    <!-- Swiper Pagination and Navigation buttons -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>


        <!-- Contact -->
        <section id="contact-us" class="contact-us section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                            <h2 class="title mb-5 mt-3">
                                Get In <span class="color">Touch</span>
                            </h2>
                        </div>
                    </div>

                    <!-- Contact Details -->
                    <div class="contact-info col-lg-6 wow fadeInUp" data-wow-duration="500ms">
                        <h3>Contact Details</h3>
                        <p>
                            <?= !empty($contactData['contact_description']) ? esc($contactData['contact_description']) : 'Description not available'; ?>
                        </p>
                        <div class="contact-details">
                            <div class="con-info clearfix">
                                <i class="bi bi-geo-alt"></i>
                                <span>Address:
                                    <?= !empty($contactData['contact_address']) ? esc($contactData['contact_address']) : 'Address not available'; ?>
                                </span>
                            </div>

                            <div class="con-info clearfix">
                                <i class="bi bi-phone"></i>
                                <span>Phone:
                                    <?= !empty($contactData['contact_phone']) ? esc($contactData['contact_phone']) : 'Phone not available'; ?>
                                </span>
                            </div>

                            <div class="con-info clearfix">
                                <i class="bi bi-envelope"></i>
                                <span>Email:
                                    <?= !empty($contactData['contact_email']) ? esc($contactData['contact_email']) : 'Email not available'; ?>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Google Map moved to the right -->
                    <div class="google-map col-lg-6 mt-5 mt-lg-0 wow fadeInUp" data-wow-duration="500ms">
                        <iframe
                            src="<?= !empty($contactData['contact_map_url']) ? esc($contactData['contact_map_url']) : ''; ?>"
                            width="100%" height="100%" style="border: 0; border-radius: 15px" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>

                </div>
            </div>
        </section>




    </main>

    <!-- Sponsor -->
    <div class="logos">
        <div class="logos-slide">
            <?php foreach ($sponsorData as $sponsor): ?>
            <img src="<?= base_url($sponsor['logo_path']); ?>" alt="<?= esc($sponsor['logo_name']); ?>" />
            <?php endforeach; ?>
            <?php foreach ($sponsorData as $sponsor): ?>
            <!-- Duplicate logos for seamless looping -->
            <img src="<?= base_url($sponsor['logo_path']); ?>" alt="<?= esc($sponsor['logo_name']); ?>" />
            <?php endforeach; ?>
        </div>
    </div>



    <!-- Footer -->
    <footer id="footer-section" class="bg-footer">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="500ms">
                <div class="col-lg-12">
                    <!-- Footer Social Links -->
                    <div class="footer-social-icon">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="<?= $footer['facebook_link']; ?>"><i class="bi bi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?= $footer['twitter_link']; ?>"><i class="bi bi-twitter-x"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?= $footer['youtube_link']; ?>"><i class="bi bi-youtube"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?= $footer['instagram_link']; ?>"><i class="bi bi-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?= $footer['linkedin_link']; ?>"><i class="bi bi-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!--/. End Footer Social Links -->

                    <!-- copyright -->
                    <div class="footer-copyright text-center">
                        <a href="index.html">
                            <img src="<?= base_url($footer['logo_path']); ?>" alt="logo" class="footer-logo" />
                        </a>

                        <p class="mt-3">
                            Copyright &copy;
                            <script>
                            document.write(new Date().getFullYear());
                            </script>
                            . All Rights Reserved. <br />
                            Designed &amp; Developed by
                            <a href="#" target="_blank">zezqi</a>.
                        </p>
                    </div>
                    <!-- /copyright -->
                </div>
            </div>
        </div>
    </footer>



    <!-- JAVASCRIPT FILES -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.sticky.js') ?>"></script>
    <script src="<?= base_url('assets/js/aos.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/magnific-popup-options.js') ?>"></script>
    <script src="<?= base_url('assets/js/scrollspy.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/custom.js') ?>"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>

</html>