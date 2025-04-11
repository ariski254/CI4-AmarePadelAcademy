<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Amare Padel Academy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('assets/admin/style.css'); ?>" />
</head>

<body>
    <div class="sidebar d-flex flex-column">
        <h4 class="sidebar-title">Admin Control</h4>
        <a href="/admin" class="sidebar-link"><i class="bi bi-house-door me-2"></i> Dashboard</a>
        <a href="/admin/hero" class="sidebar-link"><i class="bi bi-sliders me-2"></i> Home Settings</a>
        <a href="/admin/about_us" class="sidebar-link"><i class="bi bi-info-circle me-2"></i> About Settings</a>
        <a href="/admin/goals" class="sidebar-link"><i class="bi bi-trophy me-2"></i> Goals Settings</a>
        <a href="/admin/certification" class="sidebar-link"><i class="bi bi-award me-2"></i> Certification Settings</a>

        <!-- Portfolio Submenu -->
        <a href="#" class="sidebar-link has-submenu" id="toggle-portfolio">
            <i class="bi bi-briefcase me-2"></i> Portfolio Settings
            <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <div id="portfolio-submenu" class="submenu">
            <a href="/admin/portfolio" class="submenu-link"><i class="bi bi-circle me-2"></i> Portfolio (Index)</a>
            <a href="/admin/kegiatan" class="submenu-link"><i class="bi bi-circle-fill me-2"></i> All Portfolio</a>
        </div>
        <a href="/admin/coach" class="sidebar-link"><i class="bi bi-person me-2"></i> Coach Settings</a>
        <a href="/admin/coaching" class="sidebar-link">
            <i class="bi bi-person me-2"></i> Coaching Session
        </a>

        <a href="/admin/contact" class="sidebar-link"><i class="bi bi-envelope me-2"></i> Contact Settings</a>
        <a href="/admin/sponsor" class="sidebar-link"><i class="bi bi-people me-2"></i> Sponsor Settings</a>
        <a href="/admin/footer" class="sidebar-link"><i class="bi bi-file-earmark-text me-2"></i> Footer Settings</a>
    </div>



    <?= $this->renderSection('simple') ?>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/admin/script.js'); ?>"></script>

</html>