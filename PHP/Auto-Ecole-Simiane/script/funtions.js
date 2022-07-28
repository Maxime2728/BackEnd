function modifClassBtnHome() {
  var element = document.getElementById("home");
  element.classList.toggle("active");
}

function modifClassBtnProg() {
  var element = document.getElementById("prog");
  element.classList.toggle("active");
}

function modifClassBtnContact() {
  var element = document.getElementById("contact");
  element.classList.toggle("active");
}

$(document).ready(function () {
  $(window).scroll(function () {
    //if you hard code, then use console
    //.log to determine when you want the
    //nav bar to stick.
    // console.log($(window).scrollTop())
    if ($(window).scrollTop() > 100) {
      $("#navBar").addClass("navbar-fixed");
      $("#sideBar").addClass("sidebar-fixed");
      // console.log("Fixe");
    }
    if ($(window).scrollTop() <= 100) {
      $("#navBar").removeClass("navbar-fixed");
      $("#sideBar").removeClass("sidebar-fixed");
      // console.log("Pas Fixe");
    }
  });
});
