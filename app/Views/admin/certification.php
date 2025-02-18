<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Padel Coach Certification</title>
</head>

<body>
    <h1>Edit Padel Coach Certification</h1>

    <?= \Config\Services::validation()->listErrors(); ?>

    <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <form action="<?= site_url('admin/certification/update'); ?>" method="POST">
        <div class="form-group">
            <label for="title">Certification Title</label>
            <input type="text" id="title" name="title" class="form-control" value="<?= esc($certification['title']); ?>"
                required>
        </div>

        <div class="form-group">
            <label for="description">Certification Description</label>
            <textarea id="description" name="description" class="form-control"
                required><?= esc($certification['description']); ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Certification</button>
    </form>

</body>

</html>