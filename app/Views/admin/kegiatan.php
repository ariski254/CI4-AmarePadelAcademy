  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>


  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Page About Us</h4>
          <div class="d-flex align-items-center dropdown">
              <!-- Settings Icon -->
              <i class="bi bi-gear fs-4" id="settings-icon" data-bs-toggle="dropdown" aria-expanded="false"></i>

              <!-- Dropdown Menu -->
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settings-icon">
                  <li><a class="dropdown-item" href="<?= site_url('admin/add') ?>">Add Admin</a></li>
                  <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a></li>
              </ul>
          </div>

      </div>

      <div class="admin-kegiatan-container">
          <?php if (session()->getFlashdata('message')): ?>
          <div class="form-alert success">
              <?= session()->getFlashdata('message') ?>
          </div>
          <?php endif; ?>

          <a href="<?= base_url('admin/kegiatan/create') ?>" class="btn-add-kegiatan">+ Tambah Kegiatan</a>

          <div class="table-wrapper">
              <table class="admin-kegiatan-table">
                  <thead>
                      <tr>
                          <th>Judul</th>
                          <th>Tanggal</th>
                          <th>Deskripsi</th>
                          <th>Gambar</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($kegiatan as $item): ?>
                      <tr>
                          <td><?= esc($item->title) ?></td>
                          <td><?= esc($item->date) ?></td>
                          <td><?= esc($item->description) ?></td>
                          <td>
                              <?php if (!empty($images[$item->id])): ?>
                              <?php foreach ($images[$item->id] as $img): ?>
                              <img src="<?= base_url('assets/imgs/kegiatan/' . $img->image) ?>" alt="gambar"
                                  class="admin-kegiatan-image">
                              <?php endforeach; ?>
                              <?php else: ?>
                              <span class="text-muted">Tidak ada gambar</span>
                              <?php endif; ?>
                          </td>
                          <td>
                              <a href="<?= base_url('admin/kegiatan/edit/' . $item->id) ?>"
                                  class="btn-action edit">Edit</a>
                              <a href="<?= base_url('admin/kegiatan/delete/' . $item->id) ?>" class="btn-action delete"
                                  onclick="return confirm('Yakin ingin menghapus kegiatan ini?')">Hapus</a>
                          </td>
                      </tr>
                      <?php endforeach; ?>
                  </tbody>
              </table>
          </div>
      </div>





  </div>




  <?= $this->endSection() ?>