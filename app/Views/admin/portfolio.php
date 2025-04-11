<?= $this->extend('admin/sidebar/sidebar') ?>

<?= $this->section('simple') ?>

<div class="content">
    <!-- Navbar Top with Toggle -->
    <div class="top-bar">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <i class="bi bi-list fs-3"></i>
        </button>
        <h4>Page Portfolio</h4>
        <div class="d-flex align-items-center dropdown">
            <i class="bi bi-gear fs-4" id="settings-icon"></i>
            <!-- Dropdown menu -->
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?= site_url('admin/add') ?>">Add Admin</a></li>
                <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="portfolio-container">
        <form action="/portfolio/store" method="post" enctype="multipart/form-data" class="portfolio-form">
            <?= csrf_field(); ?>
            <h2>Add New Portfolio Item</h2>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="<?= old('title'); ?>" required class="form-control">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" required
                    class="form-control"><?= old('description'); ?></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" required class="form-control">
            </div>

            <button type="submit" class="btn-submit">Submit</button>
        </form>
        <br>
        <h4>Existing Portfolio Items</h4>
        <div class="portfolio-list">
            <div class="table-wrapper">
                <table class="portfolio-table">
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
                            <td><?= esc($item->title) ?></td>
                            <td><?= esc($item->description) ?></td>
                            <td><img src="<?= base_url('assets/imgs/portfolio/' . esc($item->image)) ?>"
                                    alt="<?= esc($item->title) ?>" width="100"></td>
                            <td>
                                <a href="/admin/portfolio/<?= esc($item->id) ?>/edit" class="btn-action edit">Edit</a>
                                <a href="/portfolio/delete/<?= esc($item->id) ?>"
                                    onclick="return confirm('Are you sure you want to delete this item?')"
                                    class="btn-action delete">Delete</a>
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
    </div>



</div>

<?= $this->endSection() ?>