"ues strict";

const hideform = document.querySelector(".hide__form");
const overlay = document.querySelector(".overlay");
const carts = document.querySelectorAll(".first_cart");
const btnClosModel = document.querySelector(".hide_close");
const registerbtn = document.querySelector(".register__btn");
const Clientbtn = document.querySelector(".client-join-btn");
const workWithUsbtn = document.querySelector(".workwithusbtm");

const openModel = function () {
  hideform.classList.remove("hidden");
  overlay.classList.remove("hidden");
};

const closeModel = function () {
  hideform.classList.add("hidden");
  overlay.classList.add("hidden");
};
for (let i = 0; i < carts.length; i++)
  carts[i].addEventListener("click", openModel);
registerbtn.addEventListener("click", openModel);
Clientbtn.addEventListener("click", openModel);
workWithUsbtn.addEventListener("click", openModel);
btnClosModel.addEventListener("click", closeModel);
overlay.addEventListener("click", closeModel);

/*================== Right Click pervention =============*/
// document.addEventListener("contextmenu", function (event) {
//   event.preventDefault();
// });
