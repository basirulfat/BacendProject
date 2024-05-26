// Get the search input element
const searchInput = document.getElementById("company-search");

// Add an input event listener to the search input
searchInput.addEventListener("input", () => {
    // Get the search query
    const searchQuery = searchInput.value.toLowerCase();

    // Get all the company cards
    const companyCards = document.querySelectorAll(
        ".companies-cards .cards-wrap"
    );

    // Loop through each company card and hide/show based on the search query
    companyCards.forEach((card) => {
        const companyName = card.querySelector("h3").textContent.toLowerCase();

        if (companyName.includes(searchQuery)) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
});

// =================shoew small window

const hide = document.querySelector(".hide");
const overlay = document.querySelector(".overlay");
const comp_ratebtn = document.querySelectorAll(".comp-btn");
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

for (let i = 0; i < comp_ratebtn.length; i++) {
    comp_ratebtn[i].addEventListener("click", openModel);
    overlay.addEventListener("click", closeModel);
}

closebtn.addEventListener("click", closeModel);
