import { setupFAQ } from "./module/home.js";
import { SeeJobs } from "./module/home.js";

setupFAQ();
SeeJobs();

// preventRightClick();

// /*===========FAQ page=======*/
// import { FAQPreventRightClick } from "./module/FAQ.js";
import { toggleAccordion } from "./module/FAQ.js";
const items = document.querySelectorAll(".accordion button");
items.forEach((item) => item.addEventListener("click", toggleAccordion));
// // FAQPreventRightClick();
// /*=========FAQ page =======*/
// /*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) => {
    const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId);

    toggle.addEventListener("click", () => {
        // Add show-menu class to nav menu
        nav.classList.toggle("show-menu");

        // Add show-icon to show and hide the menu icon
        toggle.classList.toggle("show-icon");
    });
};

showMenu("nav-toggle", "nav-menu");
// /*=============== SHOW MENU ===============*/
