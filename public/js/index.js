let hamburger = document.getElementById("hamburgerbtn");

let mobileMenu = document.getElementById("mobileMenu");
let loginMenu = document.getElementById("loginMenu");
hamburger.addEventListener("click", function () {
    mobileMenu.classList.toggle("active");
    loginMenu.classList.toggle("active");
});

let assignmentButton = document.getElementById("assignment-btn");
let assignmentForm = document.getElementById("assignment-form");
var icon = document.getElementById("icon");
let assignment = document.getElementById("assignments");

assignmentButton.addEventListener("click", function () {
    $("#assignment-btn svg").toggleClass("fa-feather-alt fa-arrow-left");
    assignmentForm.classList.toggle("active-assignment-form");
    assignments.classList.toggle("hidden");
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});
