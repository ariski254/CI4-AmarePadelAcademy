<?= $this->extend('admin/sidebar/sidebar') ?>

<?= $this->section('simple') ?>

<div class="content">
    <div class="top-bar">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <i class="bi bi-list fs-3"></i>
        </button>
        <h4>Edit Portfolio</h4>
        <div class="d-flex align-items-center">
            <i class="bi bi-gear fs-4"></i>
        </div>
    </div>

    <div class="portfolio-edit">
        <form action="/portfolio/update/<?= $portfolio->id; ?>" method="post" enctype="multipart/form-data"
            class="portfolio-edit-form">
            <?= csrf_field(); ?>
            <h2>Edit Portfolio Item</h2>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="<?= old('title', $portfolio->title); ?>" required
                    class="form-control">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" required
                    class="form-control"><?= old('description', $portfolio->description); ?></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image (optional)</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>

            <div class="current-image">
                <label>Current Image</label>
                <img src="<?= base_url('assets/imgs/portfolio/' . $portfolio->image); ?>"
                    alt="<?= esc($portfolio->title); ?>" class="current-image-img">
            </div>

            <button type="submit" class="btn btn-primary">Update Portfolio</button>
        </form>
    </div>

</div>

<?= $this->endSection() ?>