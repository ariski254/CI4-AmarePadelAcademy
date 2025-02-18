<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Program</title>
</head>

<body>

    <h2>Edit Program</h2>

    <?php if (session()->getFlashdata('message')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('message'); ?></div>
    <?php endif; ?>

    <form action="<?= site_url('admin/programs/update/' . $program['id']); ?>" method="post"
        enctype="multipart/form-data">
        <?= csrf_field(); ?>

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="<?= esc($program['title']); ?>" required>
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" required><?= esc($program['description']); ?></textarea>
        </div>

        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
            <?php if ($program['image']): ?>
            <img src="<?= base_url('writable/uploads/' . $program['image']); ?>" alt="Program Image" width="100" />
            <?php endif; ?>
        </div>

        <button type="submit">Update Program</button>
    </form>

</body>

</html>