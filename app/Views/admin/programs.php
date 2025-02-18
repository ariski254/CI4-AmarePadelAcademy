<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Program</title>
</head>

<body>

    <h2>Edit Program</h2>

    <?php if (session()->getFlashdata('success')): ?>
    <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
    <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <form action="/admin/programs/update/<?= $program['id'] ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="<?= old('title', $program['title']) ?>" required><br><br>

        <label for="description">Description:</label>
        <textarea name="description" id="description"
            required><?= old('description', $program['description']) ?></textarea><br><br>

        <label for="image">Image:</label>
        <input type="file" name="image" id="image"><br><br>

        <img src="<?= base_url($program['image_path']) ?>" alt="Program Image" width="200"><br><br>

        <button type="submit">Update</button>
    </form>

</body>

</html>