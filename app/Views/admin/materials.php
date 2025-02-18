<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Materials</title>
</head>

<body>

    <h2>Manage Materials</h2>

    <?php if (session()->getFlashdata('success')): ?>
    <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
    <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <!-- Form Add Material -->
    <h3>Add Material</h3>
    <form action="/admin/materials/create" method="POST" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <label for="name">Material Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="image">Material Image:</label>
        <input type="file" name="image" id="image" required><br><br>

        <button type="submit">Add Material</button>
    </form>

    <hr>

    <!-- List of Materials -->
    <h3>Existing Materials</h3>
    <ul>
        <?php foreach ($materials as $material): ?>
        <li>
            <img src="<?= base_url($material['image_path']) ?>" alt="<?= esc($material['name']) ?>" width="100"><br>
            <?= esc($material['name']) ?>
            <a href="/admin/materials/edit/<?= $material['id'] ?>">Edit</a>
            <a href="/admin/materials/delete/<?= $material['id'] ?>"
                onclick="return confirm('Are you sure?')">Delete</a>
        </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>