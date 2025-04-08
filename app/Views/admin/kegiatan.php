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

      <div class="container mt-5">
          <h2 class="mb-4">Daftar Kegiatan</h2>
          <a href="<?= base_url('admin/kegiatan/create') ?>" class="btn btn-primary mb-3">Tambah Kegiatan</a>

          <table class="table table-bordered">
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
                          <?php if (isset($images[$item->id]) && count($images[$item->id]) > 0): ?>
                          <?php foreach ($images[$item->id] as $img): ?>
                          <img src="<?= base_url('assets/imgs/kegiatan/' . $img->image) ?>" alt="gambar" width="80"
                              class="img-thumbnail mb-1">
                          <?php endforeach; ?>
                          <?php else: ?>
                          <span class="text-muted">Tidak ada gambar</span>
                          <?php endif; ?>
                      </td>
                      <td>
                          <a href="<?= base_url('admin/kegiatan/edit/' . $item->id) ?>"
                              class="btn btn-sm btn-warning">Edit</a>
                          <a href="<?= base_url('admin/kegiatan/delete/' . $item->id) ?>" class="btn btn-sm btn-danger"
                              onclick="return confirm('Yakin ingin menghapus kegiatan ini?')">
                              Hapus
                          </a>
                      </td>
                  </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
      </div>


  </div>




  <?= $this->endSection() ?>