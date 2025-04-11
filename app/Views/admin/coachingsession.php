 <?= $this->extend('admin/sidebar/sidebar') ?>

 <?= $this->section('simple') ?>

 <div class="content">
     <!-- Navbar Top with Toggle -->
     <div class="top-bar">
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
             <i class="bi bi-list fs-3"></i>
         </button>
         <h4>Coaching Sessions</h4>
         <div class="d-flex align-items-center dropdown hover-dropdown">
             <!-- Settings Icon -->
             <i class="bi bi-gear fs-4" id="settings-icon"></i>

             <!-- Dropdown Menu -->
             <ul class="dropdown-menu dropdown-menu-end">
                 <li><a class="dropdown-item" href="<?= site_url('admin/add') ?>">Add Admin</a></li>
                 <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a></li>
             </ul>
         </div>
     </div>

     <div class="container mt-5">

         <h2>Daftar Coaching Session</h2>

         <a href="<?= base_url('/admin/coaching/create') ?>" class="btn btn-primary mb-3">+ Tambah Sesi</a>

         <table class="table table-bordered">
             <thead class="table-dark">
                 <tr>
                     <th>Judul</th>
                     <th>Tanggal</th>
                     <th>Dibuat</th>
                     <th>Aksi</th>
                 </tr>
             </thead>
             <tbody>
                 <?php foreach ($sessions as $session): ?>
                 <tr>
                     <td><?= esc($session['title']) ?></td>
                     <td><?= esc($session['date']) ?></td>
                     <td><?= date('d M Y', strtotime($session['created_at'])) ?></td>
                     <td>
                         <a href="<?= base_url('/admin/coaching/edit/' . $session['id']) ?>"
                             class="btn btn-warning btn-sm">Edit</a>
                         <a href="<?= base_url('/admin/coaching/delete/' . $session['id']) ?>"
                             class="btn btn-danger btn-sm"
                             onclick="return confirm('Yakin ingin menghapus sesi ini?')">Hapus</a>
                     </td>
                 </tr>
                 <?php endforeach; ?>
             </tbody>
         </table>
     </div>
 </div>
 <?= $this->endSection() ?>