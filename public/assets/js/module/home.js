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
// slider code
// export function showSlide(slides, currentIndex) {
//   const offsetPercentage = -currentIndex * 100;
//   slides.forEach((slide, i) => {
//     slide.style.transform = `translateX(${offsetPercentage + i * 100}%)`;
//   });
// }

// export function moveCardToHighlightedArea(slides, currentIndex) {
//   const highlightedArea = document.querySelector(".highlighted-area");
//   const currentSlide = slides[currentIndex];
//   const card = currentSlide.querySelector(".company__logo");

//   highlightedArea.innerHTML = "";
//   highlightedArea.appendChild(card.cloneNode(true));
// }

// export function handlePrevSlide(slides, currentIndex) {
//   currentIndex--;
//   if (currentIndex < 0) {
//     currentIndex = slides.length - 1;
//   }
//   showSlide(slides, currentIndex);
//   moveCardToHighlightedArea(slides, currentIndex);
// }

// export function handleNextSlide(slides, currentIndex) {
//   currentIndex++;
//   if (currentIndex >= slides.length) {
//     currentIndex = 0;
//   }
//   showSlide(slides, currentIndex);
//   moveCardToHighlightedArea(slides, currentIndex);
// }

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
