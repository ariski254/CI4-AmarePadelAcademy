  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>

  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Page Material</h4>
          <div class="d-flex align-items-center dropdown">
              <i class="bi bi-gear fs-4" id="settings-icon"></i>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= site_url('admin/add') ?>">Add Admin</a></li>
                  <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a></li>
              </ul>
          </div>
      </div>
      <?php if (session()->getFlashdata('success')): ?>
      <p class="flash-message success"><?= session()->getFlashdata('success') ?></p>
      <?php endif; ?>

      <?php if (session()->getFlashdata('error')): ?>
      <p class="flash-message error"><?= session()->getFlashdata('error') ?></p>
      <?php endif; ?>

      <!-- Form Add Material -->
      <div class="material">
          <form action="/admin/materials/create" method="POST" enctype="multipart/form-data">
              <?= csrf_field() ?>
              <h3>Add New Material</h3>

              <div class="form-group">
                  <label for="name">Material Name:</label>
                  <input type="text" name="name" id="name" required>
              </div>

              <div class="form-group">
                  <label for="image">Material Image:</label>
                  <input type="file" name="image" id="image" required>
              </div>

              <button type="submit">Add Material</button>
          </form>

          <hr>

          <!-- List of Materials -->
          <h3>Existing Materials</h3>
          <table class="materials-table">
              <thead>
                  <tr>
                      <th>Image</th>
                      <th>Material Name</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach ($materials as $material): ?>
                  <tr>
                      <td><img src="<?= base_url($material['image_path']) ?>" alt="<?= esc($material['name']) ?>"
                              width="120"></td>
                      <td><?= esc($material['name']) ?></td>
                      <td>
                          <a href="/admin/materials/edit/<?= $material['id'] ?>" class="edit-link">Edit</a>
                          <a href="/admin/materials/delete/<?= $material['id'] ?>" class="delete-link"
                              onclick="return confirm('Are you sure?')">Delete</a>
                      </td>
                  </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
      </div>


  </div>
  <?= $this->endSection() ?>