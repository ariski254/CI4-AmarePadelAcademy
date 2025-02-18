<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Portfolio</title>
</head>

<body>
    <h1>Edit Portfolio</h1>
    <form action="/portfolio/update/<?= $portfolio['id']; ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="<?= $portfolio['title']; ?>" required>
        <br>

        <label for="description">Description</label>
        <textarea name="description" id="description" required><?= $portfolio['description']; ?></textarea>
        <br>

        <label for="image">Image</label>
        <input type="file" name="image" id="image">
        <br>

        <img src="/assets/imgs/portfolio/<?= $portfolio['image']; ?>" alt="Current Image" width="100">
        <br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>