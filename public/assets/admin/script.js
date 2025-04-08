// Sidebar Toggle
document.addEventListener("DOMContentLoaded", function () {
  const toggler = document.querySelector(".navbar-toggler");
  const sidebar = document.querySelector(".sidebar");
  const content = document.querySelector(".content");

  if (toggler && sidebar && content) {
    toggler.addEventListener("click", function () {
      sidebar.classList.toggle("show");
      content.classList.toggle("sidebar-open");
    });
  }

  // Submenu Toggle (misalnya untuk Portfolio)
  const toggle = document.getElementById("toggle-portfolio");
  const submenu = document.getElementById("portfolio-submenu");

  if (toggle && submenu) {
    toggle.addEventListener("click", function (e) {
      e.preventDefault();
      submenu.classList.toggle("open");
      toggle.classList.toggle("open");
    });
  }
});
