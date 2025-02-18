<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Portfolio</title>
</head>

<body>

    <h2>Create a New Portfolio Item</h2>

    <form action="/admin/portfolio/create" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="<?= old('title') ?>" required>
        </div>

        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description" required><?= old('description') ?></textarea>
        </div>

        <div>
            <label for="image">Image</label>
            <input type="file" id="image" name="image" required>
        </div>

        <button type="submit">Create Portfolio</button>
    </form>


    <a href="/admin/portfolio">Back to Portfolio</a>

</body>

</html>