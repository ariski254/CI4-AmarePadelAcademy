<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit About Us</title>
</head>

<body>

    <h1>Edit About Us</h1>

    <form action="<?= base_url('admin/update_about_us'); ?>" method="POST" enctype="multipart/form-data">
        <!-- Hidden ID to identify the record being updated -->
        <input type="hidden" name="id" value="<?= $aboutUsData['id']; ?>" />

        <label for="title">Title:</label>
        <input type="text" name="title" value="<?= $aboutUsData['title']; ?>" required />

        <label for="subtitle">Subtitle:</label>
        <input type="text" name="subtitle" value="<?= $aboutUsData['subtitle']; ?>" required />

        <label for="description">Description:</label>
        <textarea name="description" required><?= $aboutUsData['description']; ?></textarea>

        <label for="image">Image:</label>
        <input type="file" name="image" />

        <button type="submit">Update About Us</button>
    </form>



</body>

</html>