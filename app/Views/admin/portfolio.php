<?= $this->extend('admin/sidebar/sidebar') ?>

<?= $this->section('simple') ?>

<div class="content">
    <!-- Navbar Top with Toggle -->
    <div class="top-bar">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <i class="bi bi-list fs-3"></i>
        </button>
        <h4>Page Portfolio</h4>
        <div class="d-flex align-items-center">
            <div class="notification me-3">
                <i class="bi bi-bell fs-4"></i>
                <span class="badge rounded-circle">2</span>
            </div>
            <i class="bi bi-gear fs-4"></i>
        </div>
    </div>

    <div class="portfolio">
        <form action="/portfolio/store" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="<?= old('title'); ?>" required>
            <br>

            <label for="description">Description</label>
            <textarea name="description" id="description" required><?= old('description'); ?></textarea>
            <br>

            <label for="image">Image</label>
            <input type="file" name="image" id="image" required>
            <br>

            <button type="submit">Submit</button>
        </form>
    </div>

    <div class="portfolio-list mt-5">
        <h4>Existing Portfolio Items</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($portfolios)) : ?>
                <?php foreach ($portfolios as $item) : ?>
                <tr>
                    <td><?= esc($item->title) ?></td> <!-- Access title as object property -->
                    <td><?= esc($item->description) ?></td> <!-- Access description as object property -->
                    <td><img src="<?= base_url('assets/imgs/portfolio/' . esc($item->image)) ?>"
                            alt="<?= esc($item->title) ?>" width="100"></td> <!-- Access image as object property -->
                    <td>
                        <a href="/admin/portfolio/<?= esc($item->id) ?>/edit">Edit</a> |
                        <a href="/portfolio/delete/<?= esc($item->id) ?>"
                            onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else : ?>
                <tr>
                    <td colspan="4">No portfolio items found.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</div>

<?= $this->endSection() ?>