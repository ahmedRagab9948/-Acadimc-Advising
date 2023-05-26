// start nav

const first_nav = document.querySelector(".first_nav");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > -10) {
    first_nav.classList.add("second_navbar");
  } else {
    first_nav.classList.remove("second_navbar");
  }
});
// end nav
