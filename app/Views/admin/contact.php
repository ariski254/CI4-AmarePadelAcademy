<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Contact Details</title>
</head>

<body>
    <h1>Update Contact Details</h1>

    <!-- Success message -->
    <?php if (session()->get('success')): ?>
    <div style="color: green;">
        <?= session()->get('success') ?>
    </div>
    <?php endif; ?>

    <!-- Error messages -->
    <?php if (session()->get('errors')): ?>
    <div style="color: red;">
        <ul>
            <?php foreach (session()->get('errors') as $error): ?>
            <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php endif; ?>

    <form action="/admin/contact/update" method="post">
        <?= csrf_field() ?>

        <div>
            <label for="contact_description">Description:</label>
            <textarea name="contact_description" id="contact_description"
                rows="5"><?= esc($contact['contact_description']) ?></textarea>
        </div>

        <div>
            <label for="contact_address">Address:</label>
            <input type="text" name="contact_address" id="contact_address"
                value="<?= esc($contact['contact_address']) ?>">
        </div>

        <div>
            <label for="contact_phone">Phone:</label>
            <input type="text" name="contact_phone" id="contact_phone" value="<?= esc($contact['contact_phone']) ?>">
        </div>

        <div>
            <label for="contact_email">Email:</label>
            <input type="email" name="contact_email" id="contact_email" value="<?= esc($contact['contact_email']) ?>">
        </div>

        <div>
            <label for="contact_map_url">Google Map URL:</label>
            <textarea name="contact_map_url" id="contact_map_url"
                rows="3"><?= esc($contact['contact_map_url']) ?></textarea>
        </div>

        <button type="submit">Update</button>
    </form>

</body>

</html>