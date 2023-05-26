// var btn = document.querySelector(".more");
// var links = document.querySelector(".links");
// var icon = document.querySelector(".more .icon");

// function myFunction() {
//   links.classList.toggle("hide");
//   icon.classList.toggle("rotate");
// }

// const toggleButton = document.getElementById("toggle-button");
// toggleButton.addEventListener("click", function () {
// 	if (toggleButton.click > pageYOffset) {
// 		toggleButton.innerText = "الأقل";
// 	} else {
// 		toggleButton.innerText = "عرض الأقل";
// 	}
// 	// code to show/hide content
// });
// const toggleButton = document.getElementById("toggle-button");
// const toggleText = toggleButton.querySelector(".text");
// const toggleIcon = toggleButton.querySelector(".icon");
// const content = document.getElementById("collapseOne");

// toggleButton.addEventListener("click", function () {
// 	if (content.classList.contains("show")) {
// 		toggleText.innerText = "المزيد";
// 		toggleIcon.classList.remove("fa-chevron-up");
// 		toggleIcon.classList.add("fa-chevron-down");
// 	} else {
// 		toggleText.innerText = "الأقل";
// 		toggleIcon.classList.remove("fa-chevron-down");
// 		toggleIcon.classList.add("fa-chevron-up");
// 	}
// 	content.classList.toggle("show");
// });
// const toggleButton = document.querySelectorAll(".more");
// const toggleText = toggleButton.querySelector(".text");
// const toggleIcon = toggleButton.querySelector(".icon");

// toggleButton.addEventListener("click", function () {
// 	if (toggleText.innerText === "عرض المزيد") {
// 		toggleText.innerText = "عرض الأقل";
// 		toggleIcon.classList.remove("fa-chevron-down");
// 		toggleIcon.classList.add("fa-chevron-up");
// 	} else {
// 		toggleText.innerText = "عرض المزيد";
// 		toggleIcon.classList.remove("fa-chevron-up");
// 		toggleIcon.classList.add("fa-chevron-down");
// 	}
// });
const toggleButtons = document.querySelectorAll(".more");

toggleButtons.forEach(function (toggleButton) {
	const toggleText = toggleButton.querySelector(".text");
	const toggleIcon = toggleButton.querySelector(".icon");

	toggleButton.addEventListener("click", function () {
		if (toggleText.innerText === "عرض المزيد") {
			toggleText.innerText = "عرض الأقل";
			toggleIcon.classList.remove("fa-chevron-down");
			toggleIcon.classList.add("fa-chevron-up");
		} else {
			toggleText.innerText = "عرض المزيد";
			toggleIcon.classList.remove("fa-chevron-up");
			toggleIcon.classList.add("fa-chevron-down");
		}
	});
});

// ######################3
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
// #########################