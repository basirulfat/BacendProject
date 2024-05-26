"use strict";
const hide = document.querySelector(".hide");
const overlay = document.querySelector(".overlay");
const small_window = document.querySelectorAll(".50%-show-btn");
const closebtn = document.querySelector(".escape-btn");

const openModel = function () {
    event.stopPropagation();
    hide.classList.remove("hide");
    overlay.classList.remove("hide");
};

const closeModel = function () {
    event.stopPropagation();
    hide.classList.add("hide");
    overlay.classList.add("hide");
};

for (let i = 0; i < small_window.length; i++) {
    small_window[i].addEventListener("click", openModel);
    overlay.addEventListener("click", closeModel);
}

closebtn.addEventListener("click", closeModel);
