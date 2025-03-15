(function ($) {
  ("use strict");

  // AOS ANIMATIONS
  AOS.init();

  // NAVBAR
  $(".navbar-nav .nav-link").click(function () {
    $(".navbar-collapse").collapse("hide");
  });

  // NEWS IMAGE RESIZE
  // Function to resize news image and adjust layout
  function NewsImageResize() {
    $(".navbar").scrollspy({ offset: -100 });

    var LargeImage = $(".large-news-image").height();
    var MinusHeight = LargeImage - 2;

    // Ensure height is set correctly on the element with 'news-two-column' class
    $(".news-two-column").css({
      height: MinusHeight - LargeImage / 2 + "px",
    });
  }

  // Trigger resize function when window resizes or document is ready
  $(window).on("resize", NewsImageResize);
  $(document).on("ready", NewsImageResize);

  // Program for smooth scrolling and active navbar functionality
  document.addEventListener("DOMContentLoaded", function () {
    // Smooth scrolling functionality for anchor links
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
        document.querySelectorAll(".nav-link").forEach((nav) => {
          nav.classList.remove("active");
        });
        this.classList.add("active");
      });
    });

    // Active navbar highlight on scroll
    function setActiveNav() {
      let scrollPosition = window.scrollY;

      // Loop through sections and add 'active' class to navbar items based on scroll position
      document.querySelectorAll("section").forEach((section) => {
        if (
          section.offsetTop - 100 <= scrollPosition &&
          section.offsetTop + section.offsetHeight > scrollPosition
        ) {
          // Remove 'active' class from all links before adding to the correct one
          document.querySelectorAll(".nav-link").forEach((nav) => {
            nav.classList.remove("active");
          });

          // Add 'active' class to the correct navbar link based on section ID
          let activeNav = document.querySelector(
            `.nav-link[href="#${section.id}"]`
          );
          if (activeNav) {
            activeNav.classList.add("active");
          }
        }
      });
    }

    // Add event listeners for scroll and load events
    window.addEventListener("scroll", setActiveNav);
    window.addEventListener("load", setActiveNav);
  });

  // Portfolio
  $(document).ready(function () {
    $(".image-popup").magnificPopup({
      type: "image",
      gallery: {
        enabled: true,
      },
      removalDelay: 300,
      mainClass: "mfp-fade",
    });
  });

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
})(jQuery);

// Sponsor
document.addEventListener("DOMContentLoaded", function () {
  const logosSlide = document.querySelector(".logos-slide");
  const totalWidth = logosSlide.scrollWidth;
  const logoContainerWidth = logosSlide.parentElement.offsetWidth;

  // Adjust the animation based on the number of logos and screen width
  const logosCount = logosSlide.children.length;
  const speed = totalWidth / (logosCount / 2); // Divide by 2 for smooth looping

  logosSlide.style.animationDuration = `${speed}s`; // Adjust speed dynamically
});
