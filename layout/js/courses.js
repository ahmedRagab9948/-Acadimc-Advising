// add class show
$(".courses .container ul li").click(function () {
  $(this).addClass("show").siblings().removeClass("show");
});

// trigger mixitup
$("#Container").mixItUp();

// #######################333
const first_nav = document.querySelector(".first_nav");

window.addEventListener("scroll", () => {
	if (window.pageYOffset > 525) {
		first_nav.classList.add("second_navbar");
	} else {
		first_nav.classList.remove("second_navbar");
	}
});
const dropmenu = document.querySelector(".dropdownn");

window.addEventListener("scroll", () => {
	if (window.pageYOffset > 525) {
		dropmenu.classList.add("scnd-dropdown");
	} else {
		dropmenu.classList.remove("scnd-dropdown");
	}
});
// #############################
