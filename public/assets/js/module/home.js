"use strict";

// /*===================== See More jobs=======================*/
export function SeeJobs() {
    const myjobs = document.querySelector(".job__btn");
    const more = document.querySelectorAll(".See_more");
    let clickCount = 0;
    myjobs.addEventListener("click", function () {
        clickCount++;
        more.forEach((See_more) => {
            if (clickCount % 2 === 1) {
                See_more.classList.remove("See_more");
            } else {
                See_more.classList.add("See_more");
            }
        });
    });
}
/*=========================== FAQ ==================================*/
export function setupFAQ() {
    /*--Get all the question elements--*/
    const questions = document.querySelectorAll(".question");
    const answers = document.querySelectorAll(".answer");
    /*--------Iterate over each question element-------*/
    questions.forEach((question, index) => {
        let clickCount = 0;
        const answer = answers[index];
        /*-Add click event listener to the question element--*/
        question.addEventListener("click", function () {
            clickCount++;
            if (clickCount % 2 === 1) {
                answer.classList.remove("answer");
                answer.style.padding = "1rem 2rem";
            } else {
                answer.classList.add("answer");
            }
        });
    });
}
/*=============== Right Clik prevention ===============*/

// ?No need preventing right click yet, because we use inspect for development

export function preventRightClick() {
    document.addEventListener("contextmenu", function (event) {
        event.preventDefault();
    });
}
