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
    <div class="spinner-wrapper" id="preloader">
        <div class="spinner"></div>
    </div>
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

                <!-- Button -->
                <a href="#program" class="hero-btn" data-aos="flip-left" data-aos-delay="1200">
                    View Program
                </a>
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
                    <img src="assets/imgs/placeholder.svg" alt="image" style="height: 40px" />
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
                            <a class="nav-link" href="#program">Program</a>
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
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="about-content">
                    <!-- Gambar -->
                    <div class="image-container" data-aos="fade-right" data-aos-delay="200">
                        <?php if (isset($aboutUsData['image']) && !empty($aboutUsData['image'])): ?>
                        <img src="<?= base_url($aboutUsData['image']); ?>" alt="About Us Image" class="about-image" />
                        <?php else: ?>
                        <img src="path/to/default-image.jpg" alt="Default About Us Image" class="about-image" />
                        <?php endif; ?>
                    </div>

                    <!-- Teks -->
                    <div class="text-container" data-aos="fade-left" data-aos-delay="400">
                        <h2 class="title"><?= $aboutUsData['title'] ?? 'Default Title'; ?></h2>
                        <p class="subtitle"><?= $aboutUsData['subtitle'] ?? 'Default Subtitle'; ?></p>
                        <p class="description">
                            <?= $aboutUsData['description'] ?? 'Default Description'; ?>
                            <a href="<?= base_url('/about'); ?>" class="btn-link">Learn More →</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Programs -->
        <section id="program" class="program section py-5">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-12 text-center">
                        <h2 class="custom-section-heading">ACADEMY PROGRAM</h2>
                    </div>
                </div>

                <div class="row g-4 align-items-start">
                    <div class="col-lg-5">
                        <img src="assets/imgs/trainer-img1.jpg" class="img-fluid rounded shadow" alt="Program Image" />
                    </div>

                    <div class="col-lg-7">
                        <ul class="nav nav-pills mb-4" id="program-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="program-tab1" data-bs-toggle="pill"
                                    href="#program-tab-content1" role="tab" aria-selected="true">Kids Programs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="program-tab2" data-bs-toggle="pill" href="#program-tab-content2"
                                    role="tab" aria-selected="false">Adult Programs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="program-tab3" data-bs-toggle="pill" href="#program-tab-content3"
                                    role="tab" aria-selected="false">Competition Programs</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="program-tab-content">
                            <!-- Tab Content 1 -->
                            <div class="tab-pane fade show active" id="program-tab-content1" role="tabpanel">
                                <p class="program-description">Our Kids Programs are designed to engage, inspire, and
                                    teach kids essential skills in a fun and supportive environment.</p>

                                <div class="program-feature">

                                    <h5>Fun and Engaging Activities</h5>
                                    <p>We offer a variety of activities that keep kids engaged while building their
                                        skills and confidence.</p>
                                </div>

                                <div class="program-feature">

                                    <h5>Learning through Play</h5>
                                    <p>Kids will learn and grow through play-based learning and hands-on experiences.
                                    </p>
                                </div>

                                <div class="program-feature">

                                    <h5>Qualified Instructors</h5>
                                    <p>Our programs are led by experienced instructors who are passionate about helping
                                        kids succeed.</p>
                                </div>
                            </div>

                            <!-- Tab Content 2 -->
                            <div class="tab-pane fade" id="program-tab-content2" role="tabpanel">
                                <p class="program-description">For adults looking to learn new skills or refine existing
                                    ones, our Adult Programs offer a variety of options.</p>

                                <div class="program-feature">

                                    <h5>Flexible Schedules</h5>
                                    <p>We offer flexible scheduling to fit your busy lifestyle, with options for
                                        evenings and weekends.</p>
                                </div>

                                <div class="program-feature">

                                    <h5>Skilled Instructors</h5>
                                    <p>Our team of instructors are skilled professionals with years of experience in
                                        their respective fields.</p>
                                </div>

                                <div class="program-feature">

                                    <h5>Comprehensive Learning</h5>
                                    <p>Adults will have the opportunity to learn comprehensive, real-world skills that
                                        can be applied in daily life.</p>
                                </div>
                            </div>

                            <!-- Tab Content 3 -->
                            <div class="tab-pane fade" id="program-tab-content3" role="tabpanel">
                                <p class="program-description">Our competition-level programs are designed for advanced
                                    individuals aiming to refine their skills and compete at the highest levels.</p>

                                <div class="program-feature">

                                    <h5>Advanced Training Techniques</h5>
                                    <p>We utilize proven advanced training techniques to ensure our competitors reach
                                        their peak performance.</p>
                                </div>

                                <div class="program-feature">

                                    <h5>Experienced Coaches</h5>
                                    <p>Our coaches are experienced and have a deep understanding of the competitive
                                        landscape.</p>
                                </div>

                                <div class="program-feature">

                                    <h5>Individualized Attention</h5>
                                    <p>Each participant receives personalized attention to address their strengths and
                                        areas of improvement.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Coach Seritikat -->
        <section id="call-to-action" class="call-to-action section accent-background">
            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="cta-content text-center">
                            <h3 class="cta-title" data-aos="fade-up" data-aos-delay="200">
                                <?= esc($certificationData['title']); ?>
                            </h3>
                            <p class="cta-description" data-aos="fade-up" data-aos-delay="300">
                                <?= esc($certificationData['description']); ?>
                            </p>
                            <!-- Optional button for action -->
                            <a href="<?= base_url('coach'); ?>" class="cta-button" data-aos="slide-up"
                                data-aos-delay="400">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <!-- Portfolio -->
        <section class="portfolio section" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="800">
                        <div class="title">
                            <h2 class="title mb-5 mt-5">Portfolio</h2>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Items -->
                <div class="row g-4 justify-content-center">
                    <?php foreach ($portfolioData as $index => $portfolio): ?>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4" data-aos="zoom-in"
                        data-aos-delay="<?= 100 + ($index * 100); ?>">
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
                    <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="100">
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

                    <!-- Swiper Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>


        <!-- Contact -->
        <section id="contact-us" class="section-bg">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Get In <span class="color">Touch</span></h2>
                </div>

                <div class="contact-wrapper" data-aos="fade-up" data-aos-delay="200">
                    <!-- Contact Info -->
                    <div class="contact-info">
                        <h3>Contact Details</h3>
                        <p>
                            <?= !empty($contactData['contact_description']) ? esc($contactData['contact_description']) : 'Description not available'; ?>
                        </p>
                        <div class="contact-details">
                            <div class="con-info">
                                <i class="bi bi-geo-alt"></i>
                                <span><?= !empty($contactData['contact_address']) ? esc($contactData['contact_address']) : 'Address not available'; ?></span>
                            </div>
                            <div class="con-info">
                                <i class="bi bi-phone"></i>
                                <span><?= !empty($contactData['contact_phone']) ? esc($contactData['contact_phone']) : 'Phone not available'; ?></span>
                            </div>
                            <div class="con-info">
                                <i class="bi bi-envelope"></i>
                                <span><?= !empty($contactData['contact_email']) ? esc($contactData['contact_email']) : 'Email not available'; ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Google Map -->
                    <div class="google-map">
                        <iframe
                            src="<?= !empty($contactData['contact_map_url']) ? esc($contactData['contact_map_url']) : ''; ?>"
                            allowfullscreen="" loading="lazy"></iframe>
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