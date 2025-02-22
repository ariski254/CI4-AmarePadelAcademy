<div class="container">
    <h2>Edit Program Image</h2>
    <form action="<?= base_url('/admin/updateImage'); ?>" method="post" enctype="multipart/form-data">
        <img src="<?= base_url($image['image_path']); ?>" class="img-fluid" alt="Program Image">
        <input type="file" name="image" required>
        <button type="submit">Update Image</button>
    </form>

    <h2>Edit Program Content</h2>
    <?php foreach ($contents as $content) : ?>
    <form action="<?= base_url('/admin/updateContent'); ?>" method="post">
        <input type="hidden" name="id" value="<?= $content['id']; ?>">

        <label>Title 1:</label>
        <input type="text" name="title1" value="<?= $content['title1']; ?>" required>

        <label>Title 2:</label>
        <input type="text" name="title2" value="<?= $content['title2']; ?>" required>

        <label>Title 3:</label>
        <input type="text" name="title3" value="<?= $content['title3']; ?>" required>

        <label>Title 4:</label>
        <input type="text" name="title4" value="<?= $content['title4']; ?>" required>

        <label>Title 5:</label>
        <input type="text" name="title5" value="<?= $content['title5']; ?>" required>

        <label>Title 6:</label>
        <input type="text" name="title6" value="<?= $content['title6']; ?>" required>

        <label>Subtitle 1:</label>
        <input type="text" name="subtitle1" value="<?= $content['subtitle1']; ?>" required>

        <label>Subtitle 2:</label>
        <input type="text" name="subtitle2" value="<?= $content['subtitle2']; ?>" required>

        <label>Subtitle 3:</label>
        <input type="text" name="subtitle3" value="<?= $content['subtitle3']; ?>" required>

        <label>Subtitle 4:</label>
        <input type="text" name="subtitle4" value="<?= $content['subtitle4']; ?>" required>

        <label>Subtitle 5:</label>
        <input type="text" name="subtitle5" value="<?= $content['subtitle5']; ?>" required>

        <label>Subtitle 6:</label>
        <input type="text" name="subtitle6" value="<?= $content['subtitle6']; ?>" required>

        <label>Description 1:</label>
        <textarea name="description1"><?= $content['description1']; ?></textarea>

        <label>Description 2:</label>
        <textarea name="description2"><?= $content['description2']; ?></textarea>

        <label>Description 3:</label>
        <textarea name="description3"><?= $content['description3']; ?></textarea>

        <label>Description 4:</label>
        <textarea name="description4"><?= $content['description4']; ?></textarea>

        <label>Description 5:</label>
        <textarea name="description5"><?= $content['description5']; ?></textarea>

        <label>Description 6:</label>
        <textarea name="description6"><?= $content['description6']; ?></textarea>

        <button type="submit">Update Content</button>
    </form>
    <?php endforeach; ?>
</div>