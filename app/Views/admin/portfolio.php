<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin - Portfolio</title>
</head>

<body>
    <h1>Create Portfolio</h1>
    <form action="/portfolio/store" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="<?= old('title'); ?>" required>
        <br>

        <label for="description">Description</label>
        <textarea name="description" id="description" required><?= old('description'); ?></textarea>
        <br>

        <label for="image">Image</label>
        <input type="file" name="image" id="image" required>
        <br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>