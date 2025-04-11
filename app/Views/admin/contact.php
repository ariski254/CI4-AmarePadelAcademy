  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>


  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Page Contact</h4>
          <div class="d-flex align-items-center dropdown">
              <i class="bi bi-gear fs-4" id="settings-icon"></i>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= site_url('admin/add') ?>">Add Admin</a></li>
                  <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a></li>
              </ul>
          </div>
      </div>
      <div class="contact-container">
          <?php if (session()->get('success')): ?>
          <div class="form-alert success">
              <?= session()->get('success') ?>
          </div>
          <?php endif; ?>

          <?php if (session()->get('errors')): ?>
          <div class="form-alert error">
              <ul>
                  <?php foreach (session()->get('errors') as $error): ?>
                  <li><?= esc($error) ?></li>
                  <?php endforeach; ?>
              </ul>
          </div>
          <?php endif; ?>

          <form action="/admin/contact/update" method="post" class="contact-form">
              <?= csrf_field() ?>

              <label for="contact_description" class="contact-label">Description</label>
              <textarea name="contact_description" id="contact_description" class="contact-textarea"
                  rows="5"><?= esc($contact['contact_description']) ?></textarea>

              <label for="contact_address" class="contact-label">Address</label>
              <input type="text" name="contact_address" id="contact_address" class="contact-input"
                  value="<?= esc($contact['contact_address']) ?>">

              <label for="contact_phone" class="contact-label">Phone</label>
              <input type="text" name="contact_phone" id="contact_phone" class="contact-input"
                  value="<?= esc($contact['contact_phone']) ?>">

              <label for="contact_email" class="contact-label">Email</label>
              <input type="email" name="contact_email" id="contact_email" class="contact-input"
                  value="<?= esc($contact['contact_email']) ?>">

              <label for="contact_map_url" class="contact-label">Google Map URL</label>
              <textarea name="contact_map_url" id="contact_map_url" class="contact-textarea"
                  rows="3"><?= esc($contact['contact_map_url']) ?></textarea>

              <button type="submit" class="contact-button">Update Contact</button>
          </form>
      </div>




  </div>




  <?= $this->endSection() ?>