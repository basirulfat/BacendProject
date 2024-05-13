  
//   show applied jobs =================================
const showSearch = document.querySelector(".search-for");
const showApply = document.querySelector(".apply-for");
const showJobWrapper = document.querySelector(".job-wrapper");
const showAppliedJob = document.querySelector(".applied");
const showSidbar = document.querySelector(".job-sidbar");
showApply.addEventListener('click', function(){
    showJobWrapper.style.display = 'none';
    showAppliedJob.style.display='block';
    showSidbar.style.display= 'flex';
});
showSearch.addEventListener('click',function(){
    showSidbar.style.display= 'none';
    showJobWrapper.style.display= 'block';
    showAppliedJob.style.display= 'none';

});

// //  Show more jobs ==================================

// const showMore = document.querySelector(".show-more");
// const showMoreBtn = document.querySelector(".show-job-btn");
// let clickCount = 0;

// showMoreBtn.addEventListener('click', function() {
//   clickCount++;

//   if (clickCount % 2 === 0) {
//     showMore.style.display = 'block';
//     showMoreBtn.innerHTML="See Less Job Status";
//   } else {

    
//     showMore.style.display = 'none';
//     showMoreBtn.innerHTML="See All Jobs Status";
    

//   }
// });

// Right click=================================

document.addEventListener("contextmenu", function(event){
    event.preventDefault();
});

