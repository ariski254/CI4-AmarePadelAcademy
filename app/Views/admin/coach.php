  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>


  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Page Coach</h4>
          <div class="d-flex align-items-center dropdown">
              <i class="bi bi-gear fs-4" id="settings-icon"></i>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= site_url('admin/add') ?>">Add Admin</a></li>
                  <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a></li>
              </ul>
          </div>
      </div>
      <div class="coach">
          <?php if (session()->getFlashdata('message')): ?>
          <div class="alert alert-success coach-alert">
              <?= session()->getFlashdata('message') ?>
          </div>
          <?php endif; ?>

          <a href="/admin/coaches/create" class="btn btn-primary coach-add-btn mb-3 mt-3">Add New Coach</a>

          <div class="table-responsive">
              <table class="table table-striped coach-table">
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
                          <td>
                              <div class="coach-image">
                                  <img src="<?= base_url('assets/imgs/coach/' . $coach['image']); ?>" alt="Coach Image"
                                      class="img-fluid rounded-circle" width="50">
                                  <?= esc($coach['name']) ?>
                              </div>
                          </td>
                          <td><?= esc($coach['role']) ?></td>
                          <td><?= esc($coach['position']) ?></td>
                          <td>
                              <a href="<?= esc($coach['twitter']) ?>" target="_blank" class="social-icon twitter"><i
                                      class="bi bi-twitter"></i></a>
                              <a href="<?= esc($coach['facebook']) ?>" target="_blank" class="social-icon facebook"><i
                                      class="bi bi-facebook"></i></a>
                              <a href="<?= esc($coach['instagram']) ?>" target="_blank" class="social-icon instagram"><i
                                      class="bi bi-instagram"></i></a>
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


  </div>




  <?= $this->endSection() ?>