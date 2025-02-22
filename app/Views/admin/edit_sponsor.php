<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sponsor</title>
</head>

<body>
    <h1>Edit Sponsor</h1>
    <form action="<?= site_url('admin/sponsor/update/' . $sponsor['id']); ?>" method="post"
        enctype="multipart/form-data">
        <label for="logo_name">Logo Name</label>
        <input type="text" name="logo_name" id="logo_name" value="<?= old('logo_name', $sponsor['logo_name']); ?>">

        <label for="logo_file">Logo File</label>
        <input type="file" name="logo_file" id="logo_file">
        <img src="<?= base_url($sponsor['logo_path']); ?>" width="100" />

        <button type="submit">Update</button>
    </form>
</body>

</html>