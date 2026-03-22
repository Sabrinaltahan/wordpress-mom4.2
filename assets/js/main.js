document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.getElementById("menu-toggle");
  const navList = document.querySelector("#main-nav ul");

  if (toggle && navList) {
    toggle.addEventListener("click", function () {
      navList.classList.toggle("show");
    });
  }
});