<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Hero Section</title>
</head>

<body>

    <h1>Edit Hero Section</h1>

    <?php if (!empty($heroData)): ?>
    <form action="/admin/hero/update" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $heroData[0]['id']; ?>">

        <label>Welcome Text:</label>
        <input type="text" name="welcome_text" value="<?= $heroData[0]['welcome_text']; ?>"><br><br>

        <label>Main Title:</label>
        <input type="text" name="main_title" value="<?= $heroData[0]['main_title']; ?>"><br><br>

        <label>Subtitle:</label>
        <input type="text" name="sub_title" value="<?= $heroData[0]['sub_title']; ?>"><br><br>

        <label>Video File:</label>
        <input type="file" name="video_file"><br><br>

        <label>Poster Image:</label>
        <input type="file" name="poster_image"><br><br>

        <button type="submit">Update</button>
    </form>
    <?php endif; ?>

</body>

</html>