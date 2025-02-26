  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>


  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>Page Contact</h4>
          <div class="d-flex align-items-center">
              <div class="notification me-3">
                  <i class="bi bi-bell fs-4"></i>
                  <span class="badge rounded-circle">2</span>
              </div>
              <i class="bi bi-gear fs-4"></i>
          </div>
      </div>
      <div class="contact">
          <?php if (session()->get('success')): ?>
          <div style="color: green;">
              <?= session()->get('success') ?>
          </div>
          <?php endif; ?>

          <!-- Error messages -->
          <?php if (session()->get('errors')): ?>
          <div style="color: red;">
              <ul>
                  <?php foreach (session()->get('errors') as $error): ?>
                  <li><?= esc($error) ?></li>
                  <?php endforeach; ?>
              </ul>
          </div>
          <?php endif; ?>

          <form action="/admin/contact/update" method="post">
              <?= csrf_field() ?>

              <div>
                  <label for="contact_description">Description:</label>
                  <textarea name="contact_description" id="contact_description"
                      rows="5"><?= esc($contact['contact_description']) ?></textarea>
              </div>

              <div>
                  <label for="contact_address">Address:</label>
                  <input type="text" name="contact_address" id="contact_address"
                      value="<?= esc($contact['contact_address']) ?>">
              </div>

              <div>
                  <label for="contact_phone">Phone:</label>
                  <input type="text" name="contact_phone" id="contact_phone"
                      value="<?= esc($contact['contact_phone']) ?>">
              </div>

              <div>
                  <label for="contact_email">Email:</label>
                  <input type="email" name="contact_email" id="contact_email"
                      value="<?= esc($contact['contact_email']) ?>">
              </div>

              <div>
                  <label for="contact_map_url">Google Map URL:</label>
                  <textarea name="contact_map_url" id="contact_map_url"
                      rows="3"><?= esc($contact['contact_map_url']) ?></textarea>
              </div>

              <button type="submit">Update</button>
          </form>
      </div>
  </div>




  <?= $this->endSection() ?>