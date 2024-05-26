// form validation============================
const form = document.getElementById("form");
const username = document.getElementById("username");
const email = document.getElementById("email");
const phone = document.getElementById("telephone");

function showError(input, message) {
    event.stopPropagation();
    const formControl = input.parentElement;
    formControl.className = "field-container error";
    const small = formControl.querySelector("small");
    small.innerText = message;
}

function showSuccess(input) {
    event.stopPropagation();
    const formControl = input.parentElement;
    formControl.className = "form-control success";
}

function isValidEmail(email) {
    event.stopPropagation();
    const re =
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function isValidPhoneNumber(phone) {
    event.stopPropagation();
    const re = /^(07|00937|)\d{8}$/;
    return re.test(phone);
}

form.addEventListener("submit", function (e) {
    e.preventDefault();

    if (username.value === "") {
        showError(username, "Username is required");
    } else {
        showSuccess(username);
    }

    if (email.value === "") {
        showError(email, "Email is required");
    } else if (!isValidEmail(email.value)) {
        showError(email, "Email is not valid");
    } else {
        showSuccess(email);
    }

    if (phone.value === "") {
        showError(phone, "Phone number is required");
    } else if (!isValidPhoneNumber(phone.value)) {
        showError(phone, "Phone number is not valid for Afghanistan");
    } else {
        showSuccess(phone);
    }
});

// Right click=================================

document.addEventListener("contextmenu", function (event) {
    event.preventDefault();
});
