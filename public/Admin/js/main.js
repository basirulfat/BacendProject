// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("openModalButton");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function () {
    modal.style.display = "block";
};
/*========================== post model  code ===========================*/

/*========================== eidet btn  code ===========================*/
var elements = document.getElementsByClassName("eidetbtn");
for (var i = 0; i < elements.length; i++) {
    elements[i].onclick = function () {
        modal.style.display = "block";
    };
}

/*========================== remove  alert message ===========================*/
function removeSuccessMessage() {
    var successMessage = document.getElementById("success-message");
    successMessage.remove();
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

/* =================  menue for  reponsiveness====================== */
const hamburgerMenu = document.querySelector(".hamburger-menu");
const menu = document.querySelector(".menu");

hamburgerMenu.addEventListener("click", () => {
    menu.classList.toggle("open");
});
