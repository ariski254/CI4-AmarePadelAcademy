  <?= $this->extend('admin/sidebar/sidebar') ?>

  <?= $this->section('simple') ?>


  <div class="content">
      <!-- Navbar Top with Toggle -->
      <div class="top-bar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <i class="bi bi-list fs-3"></i>
          </button>
          <h4>
              <footer></footer>
              Settings
          </h4>
          <div class="d-flex align-items-center">
              <div class="notification me-3">
                  <i class="bi bi-bell fs-4"></i>
                  <span class="badge rounded-circle">2</span>
              </div>
              <i class="bi bi-gear fs-4"></i>
          </div>
      </div>
      <div class="row g-3 mt-3">
          <div class="col-md-4">
              <div class="card">
                  <div class="d-flex justify-content-between">
                      <div>
                          <h6>Total Users</h6>
                          <h4>2,543</h4>
                          <small class="text-success">+12.5% from last month</small>
                      </div>
                      <i class="bi bi-people fs-1"></i>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card">
                  <div class="d-flex justify-content-between">
                      <div>
                          <h6>Revenue</h6>
                          <h4>$45,678</h4>
                          <small class="text-success">+8.2% from last month</small>
                      </div>
                      <i class="bi bi-cash-coin fs-1"></i>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card">
                  <div class="d-flex justify-content-between">
                      <div>
                          <h6>Active Projects</h6>
                          <h4>95</h4>
                          <small class="text-danger">-2.4% from last month</small>
                      </div>
                      <i class="bi bi-clipboard-check fs-1"></i>
                  </div>
              </div>
          </div>
      </div>
      <h5 class="mt-4">Recent Activity</h5>
      <div class="list-group mt-2">
          <div class="list-group-item d-flex align-items-center">
              <div class="rounded-circle bg-secondary text-white p-2 me-3">SJ</div>
              <div>
                  <strong>Sarah Johnson</strong> created a new project<br />
                  <small class="text-muted">2 hours ago</small>
              </div>
          </div>
          <div class="list-group-item d-flex align-items-center">
              <div class="rounded-circle bg-secondary text-white p-2 me-3">MW</div>
              <div>
                  <strong>Mike Wilson</strong> updated user settings<br />
                  <small class="text-muted">4 hours ago</small>
              </div>
          </div>
          <div class="list-group-item d-flex align-items-center">
              <div class="rounded-circle bg-secondary text-white p-2 me-3">ED</div>
              <div>
                  <strong>Emily Davis</strong> completed task review<br />
                  <small class="text-muted">6 hours ago</small>
              </div>
          </div>
      </div>
  </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/admin/script.js"></script>

  </html>