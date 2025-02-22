<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Program</title>
</head>

<body>
    <h2>Edit Program</h2>

    <form action="/admin/programs/edit/<?= $program['id']; ?>" method="POST" enctype="multipart/form-data">
        <?php for ($i = 1; $i <= 6; $i++): ?>
        <div>
            <label for="program_title_<?= $i ?>">Program Title <?= $i ?>:</label>
            <input type="text" name="program_title_<?= $i ?>" id="program_title_<?= $i ?>"
                value="<?= $program['program_title_' . $i]; ?>" required>
        </div>

        <div>
            <label for="program_subtitle_<?= $i ?>">Program Subtitle <?= $i ?>:</label>
            <textarea name="program_subtitle_<?= $i ?>" id="program_subtitle_<?= $i ?>"
                required><?= $program['program_subtitle_' . $i]; ?></textarea>
        </div>

        <div>
            <label for="program_description_<?= $i ?>">Program Description <?= $i ?>:</label>
            <textarea name="program_description_<?= $i ?>" id="program_description_<?= $i ?>"
                required><?= $program['program_description_' . $i]; ?></textarea>
        </div>
        <?php endfor; ?>

        <div>
            <label for="program_type">Program Type:</label>
            <select name="program_type" id="program_type" required>
                <option value="Kids Programs" <?= $program['program_type'] == 'Kids Programs' ? 'selected' : ''; ?>>Kids
                    Programs</option>
                <option value="Adult Programs" <?= $program['program_type'] == 'Adult Programs' ? 'selected' : ''; ?>>
                    Adult Programs</option>
                <option value="Competition Programs"
                    <?= $program['program_type'] == 'Competition Programs' ? 'selected' : ''; ?>>Competition Programs
                </option>
            </select>
        </div>

        <div>
            <label for="program_image">Program Image:</label>
            <input type="file" name="program_image" id="program_image">
        </div>

        <button type="submit">Update Program</button>
    </form>
</body>

</html>