<div class="container">
    <h2>Create New Coach</h2>
    <form action="/admin/coaches/store" method="POST" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?= old('name') ?>" required>
        </div>

        <div class="form-group">
            <label for="role">Role</label>
            <input type="text" name="role" id="role" class="form-control" value="<?= old('role') ?>" required>
        </div>

        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" name="position" id="position" class="form-control" value="<?= old('position') ?>"
                required>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="twitter">Twitter URL</label>
            <input type="text" name="twitter" id="twitter" class="form-control" value="<?= old('twitter') ?>">
        </div>

        <div class="form-group">
            <label for="facebook">Facebook URL</label>
            <input type="text" name="facebook" id="facebook" class="form-control" value="<?= old('facebook') ?>">
        </div>

        <div class="form-group">
            <label for="instagram">Instagram URL</label>
            <input type="text" name="instagram" id="instagram" class="form-control" value="<?= old('instagram') ?>">
        </div>

        <button type="submit" class="btn btn-success mt-3">Create Coach</button>
    </form>
</div>