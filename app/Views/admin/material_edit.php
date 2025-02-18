<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Material</title>
</head>

<body>

    <h2>Edit Material</h2>

    <?php if (session()->getFlashdata('success')): ?>
    <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
    <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <form action="/admin/materials/update/<?= $material['id'] ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <label for="name">Material Name:</label>
        <input type="text" name="name" id="name" value="<?= old('name', $material['name']) ?>" required><br><br>

        <label for="image">Material Image:</label>
        <input type="file" name="image" id="image"><br><br>

        <img src="<?= base_url($material['image_path']) ?>" alt="Material Image" width="100"><br><br>

        <button type="submit">Update Material</button>
    </form>

</body>

</html>