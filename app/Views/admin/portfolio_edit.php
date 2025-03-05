<?= $this->extend('admin/sidebar/sidebar') ?>

<?= $this->section('simple') ?>

<div class="content">
    <div class="top-bar">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <i class="bi bi-list fs-3"></i>
        </button>
        <h4>Edit Portfolio</h4>
        <div class="d-flex align-items-center dropdown">
            <i class="bi bi-gear fs-4" id="settings-icon"></i>
            <!-- Dropdown menu -->
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?= site_url('admin/add') ?>">Add Admin</a></li>
                <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a></li>
            </ul>
        </div>
    </div>

    <div class="portfolio-edit-container">
        <form action="/portfolio/update/<?= $portfolio->id; ?>" method="post" enctype="multipart/form-data"
            class="portfolio-edit-form">
            <?= csrf_field(); ?>
            <h2>Edit Portfolio Item</h2>

            <div class="portfolio-edit-form__group">
                <label for="title" class="portfolio-edit-form__label">Title</label>
                <input type="text" name="title" id="title" value="<?= old('title', $portfolio->title); ?>" required
                    class="portfolio-edit-form__input">
            </div>

            <div class="portfolio-edit-form__group">
                <label for="description" class="portfolio-edit-form__label">Description</label>
                <textarea name="description" id="description" required
                    class="portfolio-edit-form__input"><?= old('description', $portfolio->description); ?></textarea>
            </div>

            <div class="portfolio-edit-form__group">
                <label for="image" class="portfolio-edit-form__label">Image (optional)</label>
                <input type="file" name="image" id="image" class="portfolio-edit-form__input">
            </div>

            <div class="portfolio-edit-form__current-image">
                <label class="portfolio-edit-form__label">Current Image</label>
                <img src="<?= base_url('assets/imgs/portfolio/' . $portfolio->image); ?>"
                    alt="<?= esc($portfolio->title); ?>" class="portfolio-edit-form__current-image-img">
            </div>

            <button type="submit" class="portfolio-edit-form__button">Update Portfolio</button>
        </form>
    </div>

</div>

<?= $this->endSection() ?>