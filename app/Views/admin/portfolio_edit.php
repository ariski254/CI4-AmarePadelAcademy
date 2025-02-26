<?= $this->extend('admin/sidebar/sidebar') ?>

<?= $this->section('simple') ?>

<div class="content">
    <div class="top-bar">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <i class="bi bi-list fs-3"></i>
        </button>
        <h4>Edit Portfolio</h4>
        <div class="d-flex align-items-center">
            <div class="notification me-3">
                <i class="bi bi-bell fs-4"></i>
                <span class="badge rounded-circle">2</span>
            </div>
            <i class="bi bi-gear fs-4"></i>
        </div>
    </div>

    <div class="portfolio-edit">
        <form action="/portfolio/update/<?= $portfolio->id; ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="<?= old('title', $portfolio->title); ?>" required>
            <br>

            <label for="description">Description</label>
            <textarea name="description" id="description"
                required><?= old('description', $portfolio->description); ?></textarea>
            <br>

            <label for="image">Image (optional)</label>
            <input type="file" name="image" id="image">
            <br>

            <!-- Display current image -->
            <div class="current-image mb-3">
                <label>Current Image</label>
                <img src="<?= base_url('assets/imgs/portfolio/' . $portfolio->image); ?>"
                    alt="<?= esc($portfolio->title); ?>">
            </div>

            <button type="submit">Update</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>