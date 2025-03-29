(function ($) {
  "use strict";

  // AOS Animations
  AOS.init();

  // Smooth scrolling and active navbar functionality
  function smoothScrollingAndActiveNav() {
    // Smooth scrolling for anchor links
    document.querySelectorAll(".nav-link").forEach((anchor) => {
      anchor.addEventListener("click", function (e) {
        e.preventDefault();

        const targetId = this.getAttribute("href").substring(1);
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
          window.scrollTo({
            top: targetElement.offsetTop - 70, // Adjust offset for navbar height
            behavior: "smooth",
          });
        }

        // Remove 'active' class from all links and add to the clicked one
        document
          .querySelectorAll(".nav-link")
          .forEach((nav) => nav.classList.remove("active"));
        this.classList.add("active");
      });
    });

    // Active navbar highlight on scroll
    function setActiveNav() {
      let scrollPosition = window.scrollY;

      document.querySelectorAll("section").forEach((section) => {
        if (
          section.offsetTop - 100 <= scrollPosition &&
          section.offsetTop + section.offsetHeight > scrollPosition
        ) {
          document
            .querySelectorAll(".nav-link")
            .forEach((nav) => nav.classList.remove("active"));
          const activeNav = document.querySelector(
            `.nav-link[href="#${section.id}"]`
          );
          if (activeNav) {
            activeNav.classList.add("active");
          }
        }
      });
    }

    window.addEventListener("scroll", setActiveNav);
    window.addEventListener("load", setActiveNav);
  }

  // Initialize smooth scrolling and active navbar
  document.addEventListener("DOMContentLoaded", smoothScrollingAndActiveNav);

  // Portfolio - Magnific Popup for images
  $(document).ready(function () {
    $(".image-popup").magnificPopup({
      type: "image",
      gallery: { enabled: true },
      removalDelay: 300,
      mainClass: "mfp-fade",
    });
  });

  // Swiper Initialization
  document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".swiper-container", {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: { el: ".swiper-pagination", clickable: true },
      breakpoints: {
        1024: { slidesPerView: 4 },
        768: { slidesPerView: 3 },
        480: { slidesPerView: 1 },
      },
      centeredSlides: false,
      watchOverflow: true,
    });
  });

  // Sponsor Logo Animation
  document.addEventListener("DOMContentLoaded", function () {
    const logosSlide = document.querySelector(".logos-slide");
    const totalWidth = logosSlide.scrollWidth;
    const logosCount = logosSlide.children.length;
    const speed = totalWidth / (logosCount / 2); // Divide by 2 for smooth looping
    logosSlide.style.animationDuration = `${speed}s`; // Adjust speed dynamically
  });
})(jQuery);
