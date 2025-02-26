<h2>Manage Academy Programs</h2>

<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($programs as $program) : ?>
        <tr>
            <td><?= $program['title']; ?></td>
            <td><?= $program['description']; ?></td>
            <td><?= ucfirst($program['category']); ?></td>
            <td>
                <a href="<?= base_url('admin/edit_program/' . $program['id']); ?>" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<h3>Add Program Item</h3>
<form action="<?= base_url('admin/createItem'); ?>" method="post">
    <select name="program_id">
        <?php foreach ($programs as $program) : ?>
        <option value="<?= $program['id']; ?>"><?= $program['title']; ?></option>
        <?php endforeach; ?>
    </select>
    <input type="text" name="title" placeholder="Item Title" required>
    <textarea name="description" placeholder="Description" required></textarea>
    <button type="submit">Add</button>
</form>