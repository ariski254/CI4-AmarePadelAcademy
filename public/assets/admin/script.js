// sidebar
document
  .querySelector(".navbar-toggler")
  .addEventListener("click", function () {
    const sidebar = document.querySelector(".sidebar");
    const content = document.querySelector(".content");
    sidebar.classList.toggle("show"); // Toggle sidebar
    content.classList.toggle("sidebar-open"); // Geser konten
  });
