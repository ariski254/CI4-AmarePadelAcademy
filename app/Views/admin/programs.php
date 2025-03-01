<!-- admin/programs.php -->

<h2>Edit Program</h2>

<?php foreach ($programs as $program): ?>
<form action="<?= site_url('program/update/' . $program['id']) ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT">
    <div>
        <label for="title">Program Title:</label>
        <input type="text" name="title" value="<?= $program['title'] ?>">
    </div>

    <div>
        <label for="description">Description:</label>
        <textarea name="description"><?= $program['description'] ?></textarea>
    </div>

    <div>
        <label for="content">Content:</label>
        <textarea name="content"><?= $program['content'] ?></textarea>
    </div>

    <div>
        <label for="image">Upload Image:</label>
        <input type="file" name="image">
    </div>

    <div>
        <label for="program_type">Program Type:</label>
        <select name="program_type">
            <option value="Kids" <?= ($program['program_type'] == 'Kids') ? 'selected' : '' ?>>Kids</option>
            <option value="Adult" <?= ($program['program_type'] == 'Adult') ? 'selected' : '' ?>>Adult</option>
            <option value="Competition" <?= ($program['program_type'] == 'Competition') ? 'selected' : '' ?>>Competition
            </option>
        </select>
    </div>

    <div>
        <h3>Program Items</h3>
        <?php if (isset($program_items[$program['id']])): ?>
        <?php foreach ($program_items[$program['id']] as $item): ?>
        <div>
            <input type="hidden" name="program_items[<?= $item['id'] ?>][id]" value="<?= $item['id'] ?>">
            <input type="text" name="program_items[<?= $item['id'] ?>][title]" value="<?= $item['title'] ?>"
                placeholder="Item Title">
            <textarea name="program_items[<?= $item['id'] ?>][description]"><?= $item['description'] ?></textarea>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <p>No program items available.</p>
        <?php endif; ?>
    </div>

    <button type="submit">Save</button>
</form>
<?php endforeach; ?>