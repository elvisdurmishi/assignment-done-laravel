/////////////// HAMBURGER BUTTON LOGIC ///////////////////

let hamburger = document.getElementById("hamburgerbtn");
let hamburgerState = localStorage.getItem("hamburger");

let mobileMenu = document.getElementById("mobileMenu");
let loginMenu = document.getElementById("loginMenu");

if (hamburgerState === "enabled") {
    openHamburger();
}

function openHamburger() {
    mobileMenu.classList.add("active");
    loginMenu.classList.add("active");
    localStorage.setItem("hamburger", "enabled");
}

function closeHamburger() {
    mobileMenu.classList.remove("active");
    loginMenu.classList.remove("active");
    localStorage.setItem("hamburger", null);
}

hamburger.addEventListener("touchstart", () => {
    hamburgerState = localStorage.getItem("hamburger");
    if (hamburgerState !== "enabled") {
        openHamburger();
    } else {
        closeHamburger();
    }
});

/////////////// END OF HAMBURGER BUTTON LOGIC /////////

////////////////// Mobile Part ///////////////////////
let createMobileBtn = document.getElementById("create-mobile-btn");
let assignmentForm = document.getElementById("assignment-form");
let classForm = document.getElementById("class-form");

let assignment = document.getElementById("assignments");
let classes = document.getElementById("classes");

let icon = document.getElementById("icon");

let assignmentsFormState = localStorage.getItem("assignmentFormState");
let classesFormState = localStorage.getItem("classesFormState");

let bigBtn = document.getElementById("create-btn");

let bigBtnAssignment = localStorage.getItem("bigBtnAssignment");
let bigBtnClasses = localStorage.getItem("bigBtnClasses");

function formOpen(form, content, openIcon, formParameter) {
    $("#create-mobile-btn svg").removeClass(openIcon);
    $("#create-mobile-btn svg").addClass("fa-arrow-left");
    form.classList.add("active-form");
    content.classList.add("hidden");
    localStorage.setItem(formParameter, "enabled");
}

function formClose(form, content, openIcon, formParameter) {
    $("#create-mobile-btn svg").removeClass("fa-arrow-left");
    $("#create-mobile-btn svg").addClass(openIcon);
    form.classList.remove("active-form");
    content.classList.remove("hidden");
    localStorage.setItem(formParameter, null);
}

if (assignmentForm) {
    if (assignmentsFormState === "enabled") {
        formOpen(
            assignmentForm,
            assignment,
            "fa-feather-alt",
            "assignmentFormState"
        );
    }

    if (bigBtnAssignment === "enabled") {
        openBigBtn(assignmentForm, "bigBtnAssignment");
    }
} else if (classForm) {
    if (classesFormState === "enabled") {
        formOpen(classForm, classes, "fa-plus", "classesFormState");
    }

    if (bigBtnClasses === "enabled") {
        openBigBtn(classForm, "bigBtnClasses");
    }
}

function formToggle() {
    if (assignmentForm) {
        assignmentsFormState = localStorage.getItem("assignmentFormState");
        if (assignmentsFormState !== "enabled") {
            formOpen(
                assignmentForm,
                assignment,
                "fa-feather-alt",
                "assignmentFormState"
            );
        } else {
            formClose(
                assignmentForm,
                assignment,
                "fa-feather-alt",
                "assignmentFormState"
            );
        }
    } else if (classForm) {
        classesFormState = localStorage.getItem("classesFormState");
        if (classesFormState !== "enabled") {
            formOpen(classForm, classes, "fa-plus", "classesFormState");
        } else {
            formClose(classForm, classes, "fa-plus", "classesFormState");
        }
    }
}

if (createMobileBtn) {
    createMobileBtn.addEventListener("touchstart", formToggle);
}
///////////////// End of Mobile Part /////////////////

///////////////// Big Screen Part ////////////////////

function openBigBtn(form, btnParameters) {
    form.classList.remove("hidden");
    bigBtn.innerText = "Close";
    localStorage.setItem(btnParameters, "enabled");
}

function closeBigBtn(form, btnParameters) {
    form.classList.add("hidden");
    bigBtn.innerText = "Create";
    localStorage.setItem(btnParameters, null);
}

if (bigBtn) {
    bigBtn.addEventListener("click", () => {
        if (assignmentForm) {
            bigBtnAssignment = localStorage.getItem("bigBtnAssignment");
            if (bigBtnAssignment !== "enabled") {
                openBigBtn(assignmentForm, "bigBtnAssignment");
            } else {
                closeBigBtn(assignmentForm, "bigBtnAssignment");
            }
        } else if (classForm) {
            bigBtnClasses = localStorage.getItem("bigBtnClasses");
            if (bigBtnClasses !== "enabled") {
                openBigBtn(classForm, "bigBtnClasses");
            } else {
                closeBigBtn(classForm, "bigBtnClasses");
            }
        }
    });
}

///////////////// End of Big Screen Part /////////////
