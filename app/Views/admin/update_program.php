<h2>Update Program: <?= $program['program_name'] ?></h2>
<form action="/program/saveProgram" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $program['id'] ?>">
    <div class="form-group">
        <label>Program Name</label>
        <input type="text" name="program_name" class="form-control" value="<?= $program['program_name'] ?>" required>
    </div>
    <div class="form-group">
        <label>Program Type</label>
        <select name="program_type" class="form-control">
            <option value="Kids" <?= $program['program_type'] == 'Kids' ? 'selected' : '' ?>>Kids</option>
            <option value="Adult" <?= $program['program_type'] == 'Adult' ? 'selected' : '' ?>>Adult</option>
            <option value="Competition" <?= $program['program_type'] == 'Competition' ? 'selected' : '' ?>>Competition
            </option>
        </select>
    </div>
    <div class="form-group">
        <label>Program Description</label>
        <textarea name="program_description" class="form-control"
            required><?= $program['program_description'] ?></textarea>
    </div>
    <div class="form-group">
        <label>Program Content</label>
        <textarea name="program_content" class="form-control"><?= $program['program_content'] ?></textarea>
    </div>
    <div class="form-group">
        <label>Upload Image</label>
        <input type="file" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Save Changes</button>
</form>