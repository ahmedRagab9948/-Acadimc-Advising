//############################ start landing page ##################################

//############################ section newspaper carousel ##################################
var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  speed: 1500,
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});
//############################ section newspaper carousel ##################################

//############################ section departments carousel ##################################
$(".owl-carousel").owlCarousel({
  margin: 30,
  loop: true,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  smartSpeed: 2000,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 4,
    },
    1200: {
      items: 5,
    },
  },
});
//############################ section departments carousel ##################################

//############################ navar when scroll ##################################
const first_nav = document.querySelector(".first_nav");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 625) {
    first_nav.classList.add("second_navbar");
  } else {
    first_nav.classList.remove("second_navbar");
  }
});
//############################ navar when scroll ##################################

//############################ end landing page ##################################
