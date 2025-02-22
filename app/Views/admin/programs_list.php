<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Program List</title>
    <!-- Add your stylesheets and scripts here -->
</head>

<body>
    <div class="container">
        <h2>Admin Program List</h2>

        <a href="<?= site_url('admin/programs/edit/0'); ?>" class="btn btn-success mb-3">Add New Program</a>

        <!-- Programs Table -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Last Updated</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($programs)): ?>
                <?php foreach ($programs as $program): ?>
                <tr>
                    <td><?= esc($program['id']); ?></td>
                    <td><?= esc($program['title']); ?></td>
                    <td><?= esc($program['category']); ?></td>
                    <td><?= esc($program['updated_at']); ?></td>
                    <td>
                        <a href="<?= site_url('admin/programs/edit/' . $program['id']); ?>"
                            class="btn btn-warning">Edit</a>
                        <!-- You can add a delete action here as well -->
                        <a href="<?= site_url('admin/programs/delete/' . $program['id']); ?>" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this program?');">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">No programs available.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Include your footer or other scripts -->
</body>

</html>