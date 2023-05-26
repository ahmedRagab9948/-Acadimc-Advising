//############################ start dashboard page ##################################
var menuBtn = document.getElementById("bars");
var sideMenu = document.getElementById("sidenavAccordion");
var addUser = document.getElementById("addUser");

var leftButton = document.querySelector(".l_bttn");
var hideMenu = document.querySelector(".hide_menu");

menuBtn.addEventListener("click", () => {
  sideMenu.classList.toggle("hide");
  addUser.classList.toggle("wide");
});

leftButton.addEventListener("click", () => {
  hideMenu.classList.toggle("show");
});

// confirm Message On Button
$(".confirm").click(function () {
  return confirm("Are You Sure?");
});
// confirm Message On Button
//############################ end dashboard page ##################################
