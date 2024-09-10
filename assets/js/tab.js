window.onscroll = function () {
  myFunction1();
  myFunction2();
};

var tabscont = document.getElementById("tbs");
var sticky = tabscont.offsetTop;
var sec1 = document.getElementById("tab-FCFS").offsetTop;
var sec2 = document.getElementById("tab-SSTF").offsetTop;
var sec3 = document.getElementById("tab-SCAN").offsetTop;
var sec4 = document.getElementById("tab-C-SCAN").offsetTop;
var sec5 = document.getElementById("tab-LOOK").offsetTop;
var sec6 = document.getElementById("tab-C-LOOK").offsetTop;
var sec7 = document.getElementById("tab-Best-One").offsetTop;

function myFunction1() {
  if (window.pageYOffset > sticky) {
    tabscont.classList.add("sticky");
  } else {
    tabscont.classList.remove("sticky");
  }
}
function myFunction2() {
  var sizew = tabscont.offsetWidth / 7;
  var sizeh = tabscont.offsetHeight;
  if (window.pageYOffset > sec1 - sizeh - 1 && window.pageYOffset < sec2) {
    document.getElementById("tab-slider").style.left = "0px";
    document.getElementById("tab-slider").style.width = sizew + "px";
  } else if (
    window.pageYOffset > sec2 - sizeh - 1 &&
    window.pageYOffset < sec3
  ) {
    document.getElementById("tab-slider").style.left = sizew + "px";
    document.getElementById("tab-slider").style.width = sizew + "px";
  } else if (
    window.pageYOffset > sec3 - sizeh - 1 &&
    window.pageYOffset < sec4
  ) {
    document.getElementById("tab-slider").style.left = 2 * sizew + "px";
    document.getElementById("tab-slider").style.width = sizew + "px";
  } else if (
    window.pageYOffset > sec4 - sizeh - 1 &&
    window.pageYOffset < sec5
  ) {
    document.getElementById("tab-slider").style.left = 3 * sizew + "px";
    document.getElementById("tab-slider").style.width = sizew + "px";
  } else if (
    window.pageYOffset > sec5 - sizeh - 1 &&
    window.pageYOffset < sec6
  ) {
    document.getElementById("tab-slider").style.left = 4 * sizew + "px";
    document.getElementById("tab-slider").style.width = sizew + "px";
  } else if (
    window.pageYOffset > sec6 - sizeh - 1 &&
    window.pageYOffset < sec7
  ) {
    document.getElementById("tab-slider").style.left = 5 * sizew + "px";
    document.getElementById("tab-slider").style.width = sizew + "px";
  } else if (window.pageYOffset > sec7 - sizeh - 1) {
    document.getElementById("tab-slider").style.left = 6 * sizew + "px";
    document.getElementById("tab-slider").style.width = sizew + "px";
  } else {
    document.getElementById("tab-slider").style.width = "0px";
  }
}
