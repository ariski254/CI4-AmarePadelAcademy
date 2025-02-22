<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Footer</title>
</head>

<body>

    <h1>Edit Footer</h1>

    <form action="<?= site_url('admin/footer/update'); ?>" method="post" enctype="multipart/form-data">
        <div>
            <label for="logo">Logo</label>
            <input type="file" name="logo" id="logo">
            <div>
                <img src="<?= base_url($footer['logo_path']); ?>" width="100" alt="Logo Footer" />
            </div>
        </div>
        <div>
            <label for="facebook_link">Facebook Link</label>
            <input type="text" name="facebook_link" id="facebook_link"
                value="<?= old('facebook_link', $footer['facebook_link']); ?>">
        </div>
        <div>
            <label for="twitter_link">Twitter Link</label>
            <input type="text" name="twitter_link" id="twitter_link"
                value="<?= old('twitter_link', $footer['twitter_link']); ?>">
        </div>
        <div>
            <label for="youtube_link">YouTube Link</label>
            <input type="text" name="youtube_link" id="youtube_link"
                value="<?= old('youtube_link', $footer['youtube_link']); ?>">
        </div>
        <div>
            <label for="instagram_link">Instagram Link</label>
            <input type="text" name="instagram_link" id="instagram_link"
                value="<?= old('instagram_link', $footer['instagram_link']); ?>">
        </div>
        <div>
            <label for="linkedin_link">LinkedIn Link</label>
            <input type="text" name="linkedin_link" id="linkedin_link"
                value="<?= old('linkedin_link', $footer['linkedin_link']); ?>">
        </div>

        <button type="submit">Update Footer</button>
    </form>

    <p><a href="<?= site_url('admin/dashboard'); ?>">Back to Dashboard</a></p>

</body>

</html>