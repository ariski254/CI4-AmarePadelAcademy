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
        <h4 class="mb-4">Admin Control</h4>
        <a href="/admin"><i class="bi bi-house-door me-2"></i> Dashboard</a>
        <a href="/admin/hero"><i class="bi bi-sliders me-2"></i> Home Settings</a>
        <a href="/admin/about_us"><i class="bi bi-info-circle me-2"></i> About Settings</a>
        <a href="/admin/goals"><i class="bi bi-trophy me-2"></i> Goals Settings</a>
        <a href="/admin/programs"><i class="bi bi-building me-2"></i> Academy Settings</a>
        <!-- <a href="/admin/materials"><i class="bi bi-box me-2"></i> Material Settings</a> -->
        <a href="/admin/certification"><i class="bi bi-award me-2"></i> Certification Settings</a>
        <a href="/admin/portfolio"><i class="bi bi-briefcase me-2"></i> Portfolio Settings</a>
        <a href="/admin/coach"><i class="bi bi-person me-2"></i> Coach Settings</a>
        <a href="/admin/contact"><i class="bi bi-envelope me-2"></i> Contact Settings</a>
        <a href="/admin/sponsor"><i class="bi bi-people me-2"></i> Sponsor Settings</a>
        <a href="/admin/footer"><i class="bi bi-file-earmark-text me-2"></i> Footer Settings</a>
    </div>


    <?= $this->renderSection('simple') ?>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/admin/script.js'); ?>"></script>

</html>