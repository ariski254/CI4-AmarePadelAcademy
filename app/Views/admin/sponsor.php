<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sponsor</title>
</head>

<body>
    <h1>Manage Sponsors</h1>
    <a href="<?= site_url('admin/sponsor/create'); ?>">Add New Sponsor</a>
    <table>
        <thead>
            <tr>
                <th>Logo Name</th>
                <th>Logo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sponsors as $sponsor): ?>
            <tr>
                <td><?= $sponsor['logo_name']; ?></td>
                <td><img src="<?= base_url($sponsor['logo_path']); ?>" width="100" /></td>
                <td>
                    <a href="<?= site_url('admin/sponsor/edit/' . $sponsor['id']); ?>">Edit</a>
                    <a href="<?= site_url('admin/sponsor/delete/' . $sponsor['id']); ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>