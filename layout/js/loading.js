// ###################### louder ###########################
function louder() {
  document.querySelector(".loader").classList.add("fade-out");
}

function fadeOut() {
  setInterval(louder, 1500);
}

window.onload = fadeOut;
// ###################### louder ###########################
