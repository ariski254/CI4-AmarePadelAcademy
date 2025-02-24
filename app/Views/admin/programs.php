<h2>Manage Programs</h2>
<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($programs as $program): ?>
        <tr>
            <td><?= $program['title'] ?></td>
            <td><?= $program['description'] ?></td>
            <td>
                <a href="/admin/program/edit/<?= $program['id'] ?>" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>