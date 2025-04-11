(function ($) {
  "use strict";

  // AOS ANIMATIONS
  AOS.init();

  // NAVBAR
  $(".navbar-nav .nav-link").click(function () {
    $(".navbar-collapse").collapse("hide");
  });

  // NEWS IMAGE RESIZE
  function NewsImageResize() {
    $(".navbar").scrollspy({ offset: -76 });

    var LargeImage = $(".large-news-image").height();
    var MinusHeight = LargeImage - 6;

    $(".news-two-column").css({
      height: MinusHeight - LargeImage / 2 + "px",
    });
  }

  $(window).on("resize", NewsImageResize);
  $(document).on("ready", NewsImageResize);

  // SWIPER INITIALIZATION
  document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".swiper-container", {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        1024: { slidesPerView: 4 },
        768: { slidesPerView: 3 },
        480: { slidesPerView: 1 },
      },
      centeredSlides: false,
      watchOverflow: true,
    });
  });

  // SPONSOR LOGO ANIMATION
  document.addEventListener("DOMContentLoaded", function () {
    const logosSlide = document.querySelector(".logos-slide");
    if (logosSlide) {
      const totalWidth = logosSlide.scrollWidth;
      const logosCount = logosSlide.children.length;
      const speed = totalWidth / (logosCount / 2); // Divide by 2 for smooth looping
      logosSlide.style.animationDuration = `${speed}s`; // Adjust speed dynamically
    }
  });
})(jQuery);

// Portfolio - Magnific Popup for images
$(document).ready(function () {
  $(".image-popup").magnificPopup({
    type: "image",
    gallery: { enabled: true },
    removalDelay: 300,
    mainClass: "mfp-fade",
  });
});

// Loading
window.addEventListener("load", function () {
  const preloader = document.getElementById("preloader");
  preloader.style.opacity = "0";
  setTimeout(() => {
    preloader.style.display = "none";
  }, 500); // Delay untuk smooth fade-out
});

// Wait until the DOM is fully loaded before executing the script
document.addEventListener("DOMContentLoaded", function () {
  // Get all tab links
  const tabLinks = document.querySelectorAll("#program-tabs .nav-link");

  // Function to handle the tab switching
  tabLinks.forEach((link) => {
    link.addEventListener("click", function (event) {
      event.preventDefault(); // Prevent default behavior of the link (no page jump)

      // Remove 'active' class from all tab links
      tabLinks.forEach((link) => link.classList.remove("active"));

      // Add 'active' class to the clicked tab link
      link.classList.add("active");

      // Hide all tab content
      const tabContents = document.querySelectorAll(".tab-pane");
      tabContents.forEach((content) =>
        content.classList.remove("show", "active")
      );

      // Show the corresponding tab content
      const targetTabContent = document.querySelector(
        `#${link.id.replace("program-tab", "program-tab-content")}`
      );
      targetTabContent.classList.add("show", "active");
    });
  });
});
