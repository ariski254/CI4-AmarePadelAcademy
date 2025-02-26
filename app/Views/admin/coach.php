  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>


  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Page Coach</h4>
          <div class="d-flex align-items-center">
              <div class="notification me-3">
                  <i class="bi bi-bell fs-4"></i>
                  <span class="badge rounded-circle">2</span>
              </div>
              <i class="bi bi-gear fs-4"></i>
          </div>
      </div>
      <div class="container">
          <?php if (session()->getFlashdata('message')): ?>
          <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
          <?php endif; ?>
          <a href="/admin/coaches/create" class="btn btn-primary mb-3 mt-3">Add New Coach</a>
          <table class="table">
              <thead>
                  <tr>
                      <th>Name</th>
                      <th>Role</th>
                      <th>Position</th>
                      <th>Social Media</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach ($coaches as $coach): ?>
                  <tr>
                      <td><img src="<?= base_url('assets/imgs/coach/' . $coach['image']); ?>" alt="Coach Image"
                              width="50">
                          <?= esc($coach['name']) ?></td>
                      <td><?= esc($coach['role']) ?></td>
                      <td><?= esc($coach['position']) ?></td>
                      <td>
                          <a href="<?= esc($coach['twitter']) ?>" target="_blank"><i class="bi bi-twitter"></i></a>
                          <a href="<?= esc($coach['facebook']) ?>" target="_blank"><i class="bi bi-facebook"></i></a>
                          <a href="<?= esc($coach['instagram']) ?>" target="_blank"><i class="bi bi-instagram"></i></a>
                      </td>
                      <td>
                          <a href="/admin/coaches/edit/<?= $coach['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                          <a href="/admin/coaches/delete/<?= $coach['id'] ?>" class="btn btn-danger btn-sm"
                              onclick="return confirm('Are you sure?')">Delete</a>
                      </td>
                  </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
      </div>
  </div>




  <?= $this->endSection() ?>