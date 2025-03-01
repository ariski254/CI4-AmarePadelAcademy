  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>

  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Page Material</h4>
          <div class="d-flex align-items-center">
              <i class="bi bi-gear fs-4"></i>
          </div>
      </div>
      <?php if (session()->getFlashdata('success')): ?>
      <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
      <?php endif; ?>

      <?php if (session()->getFlashdata('error')): ?>
      <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
      <?php endif; ?>

      <!-- Form Add Material -->
      <div class="material">
          <form action="/admin/materials/create" method="POST" enctype="multipart/form-data">
              <?= csrf_field() ?>
              <label for="name">Material Name:</label>
              <input type="text" name="name" id="name" required><br><br>

              <label for="image">Material Image:</label>
              <input type="file" name="image" id="image" required><br><br>

              <button type="submit">Add Material</button>
          </form>

          <hr>

          <!-- List of Materials -->
          <h3>Existing Materials</h3>
          <ul>
              <?php foreach ($materials as $material): ?>
              <li>
                  <img src="<?= base_url($material['image_path']) ?>" alt="<?= esc($material['name']) ?>"
                      width="100"><br>
                  <?= esc($material['name']) ?>
                  <a href="/admin/materials/edit/<?= $material['id'] ?>">Edit</a>
                  <a href="/admin/materials/delete/<?= $material['id'] ?>"
                      onclick="return confirm('Are you sure?')">Delete</a>
              </li>
              <?php endforeach; ?>
          </ul>
      </div>
  </div>
  <?= $this->endSection() ?>