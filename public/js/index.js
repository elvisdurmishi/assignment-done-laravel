let hamburger = document.getElementById("hamburgerbtn");

let mobileMenu = document.getElementById("mobileMenu");
let loginMenu = document.getElementById("loginMenu");
hamburger.addEventListener("click", function () {
    mobileMenu.classList.toggle("active");
    loginMenu.classList.toggle("active");
});

////////////////// Assignments Buttons/////////////////

////////////////// Mobile Part ///////////////////////
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
///////////////// End of Mobile Part /////////////////

///////////////// Big Screen Part ////////////////////

let bigAssignmentBtn = document.getElementById("create-btn");

bigAssignmentBtn.addEventListener("click", function () {
    assignmentForm.classList.toggle("hidden");
    if (bigAssignmentBtn.innerText === "Create Assignment") {
        bigAssignmentBtn.innerText = "Close";
    } else if (bigAssignmentBtn.innerText === "Close") {
        bigAssignmentBtn.innerText = "Create Assignment";
    }
});

///////////////// End of Big Screen Part /////////////
