<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Sponsor</title>
</head>

<body>
    <h1>Add New Sponsor</h1>
    <form action="<?= site_url('admin/sponsor/store'); ?>" method="post" enctype="multipart/form-data">
        <label for="logo_name">Logo Name</label>
        <input type="text" name="logo_name" id="logo_name" value="<?= old('logo_name'); ?>">
        <div><?= session('validation')['logo_name'] ?? ''; ?></div>

        <label for="logo_file">Logo File</label>
        <input type="file" name="logo_file" id="logo_file">
        <div><?= session('validation')['logo_file'] ?? ''; ?></div>

        <button type="submit">Save</button>
    </form>
</body>

</html>