/*=================== Top Search ======================  */

function filterJobTop() {
    event.stopPropagation();
    const searchInput = document.querySelector('input[type="search"]');
    if (searchInput) {
        const jobCards = Array.from(document.querySelectorAll(".job-card"));
        const searchTerm = searchInput.value.toLowerCase();

        jobCards.forEach((jobCard) => {
            const jobTitle = jobCard
                .querySelector(".job-card-title")
                .textContent.toLowerCase();
            const companyName = jobCard.querySelector("img").alt.toLowerCase();
            const isMatch =
                jobTitle.includes(searchTerm) ||
                companyName.includes(searchTerm);
            jobCard.style.display = isMatch ? "block" : "none";
        });
    } else {
        console.error("The searchInput element is not found.");
    }
}

document.addEventListener("DOMContentLoaded", function () {
    event.stopPropagation();
    const searchButton = document.querySelector('button[type="submit"]');
    if (searchButton) {
        searchButton.addEventListener("click", filterJobTop);
    } else {
        console.error("The search button is not found.");
    }
});

/*===================Search By Category======================  */
function filterJobs() {
    event.stopPropagation();
    const searchInput = document.getElementById("search-input");
    if (searchInput) {
        const jobSections = Array.from(document.querySelectorAll(".A"));
        const searchTerm = searchInput.value.toLowerCase();

        jobSections.forEach((section) => {
            const jobLinks = Array.from(section.getElementsByTagName("a"));

            jobLinks.forEach((link) => {
                const jobText = link.textContent.toLowerCase();
                const isMatch = jobText.includes(searchTerm);
                link.style.display = isMatch ? "block" : "none";
            });
        });
    } else {
        console.error("The searchInput element is not found.");
    }
}

document.addEventListener("DOMContentLoaded", function () {
    event.stopPropagation();
    const searchButton = document.getElementById("searching");
    if (searchButton) {
        searchButton.addEventListener("click", filterJobs);
    } else {
        console.error("The searching button is not found.");
    }
});
