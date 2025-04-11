 <?= $this->extend('admin/sidebar/sidebar') ?>

 <?= $this->section('simple') ?>



 <div class="content">
     <!-- Navbar Top with Toggle -->
     <div class="top-bar">
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
             <i class="bi bi-list fs-3"></i>
         </button>
         <h4>Edit Coaching Session</h4>
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

         <h2>Edit Sesi Coaching</h2>

         <form action="<?= base_url('/admin/coaching/update/' . $session['id']) ?>" method="post"
             enctype="multipart/form-data">
             <div class="mb-3">
                 <label for="title" class="form-label">Judul</label>
                 <input type="text" name="title" class="form-control" value="<?= esc($session['title']) ?>" required>
             </div>

             <div class="mb-3">
                 <label for="date" class="form-label">Tanggal</label>
                 <input type="date" name="date" class="form-control" value="<?= esc($session['date']) ?>" required>
             </div>

             <div class="mb-3">
                 <label for="description" class="form-label">Deskripsi</label>
                 <textarea name="description" class="form-control" rows="4"
                     required><?= esc($session['description']) ?></textarea>
             </div>

             <div class="mb-3">
                 <label for="images" class="form-label">Tambah Gambar Baru (opsional)</label>
                 <input type="file" name="images[]" class="form-control" multiple>
             </div>

             <div class="mb-3">
                 <label class="form-label">Gambar yang Sudah Ada:</label>
                 <div class="row">
                     <?php foreach ($images as $img): ?>
                     <div class="col-md-3 mb-3">
                         <img src="<?= base_url('assets/imgs/coaching/' . $img['image']) ?>"
                             class="img-fluid rounded shadow">
                     </div>
                     <?php endforeach; ?>
                 </div>
             </div>

             <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
             <a href="<?= base_url('/admin/coaching') ?>" class="btn btn-secondary">Kembali</a>
         </form>

     </div>
 </div>

 <?= $this->endSection() ?>