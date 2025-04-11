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
      <div class="coach-container">
          <?php if (session()->getFlashdata('message')): ?>
          <div class="form-alert success">
              <?= session()->getFlashdata('message') ?>
          </div>
          <?php endif; ?>

          <a href="/admin/coaches/create" class="btn-add-coach">+ Add New Coach</a>

          <div class="table-wrapper">
              <table class="coach-table">
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
                              <div class="coach-info">
                                  <img src="<?= base_url('assets/imgs/coach/' . $coach['image']); ?>" alt="Coach Image"
                                      class="coach-avatar">
                                  <span><?= esc($coach['name']) ?></span>
                              </div>
                          </td>
                          <td><?= esc($coach['role']) ?></td>
                          <td><?= esc($coach['position']) ?></td>
                          <td class="coach-social">
                              <a href="<?= esc($coach['twitter']) ?>" target="_blank" class="social-icon twitter"><i
                                      class="bi bi-twitter-x"></i></a>
                              <a href="<?= esc($coach['facebook']) ?>" target="_blank" class="social-icon facebook"><i
                                      class="bi bi-facebook"></i></a>
                              <a href="<?= esc($coach['instagram']) ?>" target="_blank" class="social-icon instagram"><i
                                      class="bi bi-instagram"></i></a>
                          </td>
                          <td>
                              <a href="/admin/coaches/edit/<?= $coach['id'] ?>" class="btn-action edit">Edit</a>
                              <a href="/admin/coaches/delete/<?= $coach['id'] ?>" class="btn-action delete"
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