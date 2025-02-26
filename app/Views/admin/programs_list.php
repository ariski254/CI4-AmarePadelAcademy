<?php if (session()->getFlashdata('success')): ?>
<div class="alert alert-success">
    <?= session()->getFlashdata('success') ?>
</div>
<?php endif; ?>

<h2>Admin - Programs List</h2>

<?php foreach ($programs as $program): ?>
<div>
    <h3><?= $program['category'] ?> - <?= $program['level'] ?></h3>
    <p><?= $program['description'] ?></p>
    <a href="<?= base_url('admin/program/edit/' . $program['id']) ?>" class="btn btn-primary">Edit Program</a>
</div>
<?php endforeach; ?>