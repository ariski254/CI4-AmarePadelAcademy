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
