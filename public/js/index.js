let hamburger = document.getElementById("hamburgerbtn");

let mobileMenu = document.getElementById("mobileMenu");
let loginMenu = document.getElementById("loginMenu");

function activateHamburger() {
    mobileMenu.classList.toggle("active");
    loginMenu.classList.toggle("active");
}

hamburger.addEventListener("click", activateHamburger);
hamburger.addEventListener("touchstart", activateHamburger);

////////////////// Assignments Buttons/////////////////

////////////////// Mobile Part ///////////////////////
let createMobileBtn = document.getElementById("create-mobile-btn");
let assignmentForm = document.getElementById("assignment-form");
let classForm = document.getElementById("class-form");
var icon = document.getElementById("icon");
let assignment = document.getElementById("assignments");
let classes = document.getElementById("classes");

if (createMobileBtn) {
    createMobileBtn.addEventListener("click", function () {
        if (assignmentForm) {
            $("#create-mobile-btn svg").toggleClass(
                "fa-feather-alt fa-arrow-left"
            );
            assignmentForm.classList.toggle("active-form");
            assignments.classList.toggle("hidden");
        } else if (classForm) {
            $("#create-mobile-btn svg").toggleClass("fa-plus fa-arrow-left");
            classForm.classList.toggle("active-form");
            classes.classList.toggle("hidden");
        }

        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    });
}
///////////////// End of Mobile Part /////////////////

///////////////// Big Screen Part ////////////////////

let bigAssignmentBtn = document.getElementById("create-btn");

bigAssignmentBtn.addEventListener("click", function () {
    if (assignmentForm) {
        assignmentForm.classList.toggle("hidden");
    } else if (classForm) {
        classForm.classList.toggle("hidden");
    }
    if (bigAssignmentBtn.innerText === "Create") {
        bigAssignmentBtn.innerText = "Close";
    } else if (bigAssignmentBtn.innerText === "Close") {
        bigAssignmentBtn.innerText = "Create";
    }
});

///////////////// End of Big Screen Part /////////////
