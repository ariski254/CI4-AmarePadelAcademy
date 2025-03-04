  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>

  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Page Programs</h4>
          <div class="d-flex align-items-center">

              <i class="bi bi-gear fs-4"></i>
          </div>
      </div>
      <div class="programs">
          <?php if (session()->getFlashdata('success')): ?>
          <div class="alert alert-success">
              <?= session()->getFlashdata('success') ?>
          </div>
          <?php endif; ?>

          <table>
              <thead>
                  <tr>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Icon</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach ($programs as $program): ?>
                  <tr>
                      <td><?= esc($program['title']); ?></td>
                      <td><?= esc($program['description']); ?></td>
                      <td><i class="<?= esc($program['icon']); ?>"></i></td>
                      <td>
                          <a href="/admin/programs/update/<?= $program['id']; ?>">Edit</a>
                      </td>
                  </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
      </div>
  </div>
  <?= $this->endSection() ?>