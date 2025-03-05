  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>

  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Page Sponsor</h4>
          <div class="d-flex align-items-center dropdown">
              <i class="bi bi-gear fs-4" id="settings-icon"></i>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= site_url('admin/add') ?>">Add Admin</a></li>
                  <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a></li>
              </ul>
          </div>
      </div>
      <div class="sponsor">
          <a href="<?= site_url('admin/sponsor/create'); ?>" class="add-new-sponsor">Add New Sponsor</a>
          <table class="sponsor-table">
              <thead>
                  <tr>
                      <th class="table-header">Logo Name</th>
                      <th class="table-header">Logo</th>
                      <th class="table-header">Actions</th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach ($sponsors as $sponsor): ?>
                  <tr class="sponsor-row">
                      <td class="sponsor-logo-name"><?= esc($sponsor['logo_name']); ?></td>
                      <td class="sponsor-logo-image">
                          <img src="<?= base_url($sponsor['logo_path']); ?>" width="100" class="sponsor-logo" />
                      </td>
                      <td class="sponsor-actions">
                          <a href="<?= site_url('admin/sponsor/edit/' . $sponsor['id']); ?>"
                              class="btn btn-edit">Edit</a>
                          <a href="<?= site_url('admin/sponsor/delete/' . $sponsor['id']); ?>" class="btn btn-delete"
                              onclick="return confirm('Are you sure?')">Delete</a>
                      </td>
                  </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
      </div>



  </div>
  <?= $this->endSection() ?>