<h2>Edit Program</h2>

<form action="/admin/programs/update/<?= $program['id'] ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="program_name">Program Name</label>
        <input type="text" class="form-control" id="program_name" name="program_name"
            value="<?= esc($program['program_name']) ?>" required>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="5"
            required><?= esc($program['description']) ?></textarea>
    </div>

    <div class="form-group">
        <label for="image">Program Image</label>
        <input type="file" class="form-control" id="image" name="image">
        <img src="/uploads/<?= esc($program['image']) ?>" width="100" alt="Current Image">
    </div>

    <div class="form-group">
        <label for="tab_link">Tab Link</label>
        <input type="text" class="form-control" id="tab_link" name="tab_link" value="<?= esc($program['tab_link']) ?>"
            required>
    </div>

    <div class="form-group">
        <label for="tab_content">Tab Content</label>
        <textarea class="form-control" id="tab_content" name="tab_content" rows="5"
            required><?= esc($program['tab_content']) ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update Program</button>
</form>