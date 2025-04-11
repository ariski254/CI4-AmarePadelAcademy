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
    <link href="<?= base_url('assets/css/pages.css') ?>" rel="stylesheet" />

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>


<body>
    <main>


        <?= $this->renderSection('navfoot') ?>

    </main>

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