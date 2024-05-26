document.addEventListener("DOMContentLoaded", function () {
    function SeeJobs() {
        const myjobs = document.querySelector(".job__btn");
        const more = document.querySelectorAll(".See_more");
        let cardsVisible = false;

        myjobs.addEventListener("click", function () {
            event.stopPropagation();
            cardsVisible = !cardsVisible; // Toggle the cards visibility

            more.forEach((See_more) => {
                if (cardsVisible) {
                    See_more.style.display = "block"; // Show the cards
                } else {
                    See_more.style.display = "none"; // Hide the cards
                }
            });

            // Change the button text based on visibility
            if (cardsVisible) {
                myjobs.textContent = "Show Less content";
            } else {
                myjobs.textContent = "Show More content";
            }
        });
    }

    SeeJobs();
});
