//submotion of form and change color to green
function changeColor() {
  var liElements = document.querySelectorAll("ol li");
  liElements.forEach(function (li) {
    li.style.color = "";
    li.style.backgroundColor = "";
  });
  liElements[0].style.color = "white";
  liElements[0].style.backgroundColor = "#0b60b0";
}

function changeColor2() {
  var liElements = document.querySelectorAll("ol li");
  liElements.forEach(function (li) {
    li.style.color = "";
    li.style.backgroundColor = "";
  });
  liElements[0].style.color = "white";
  liElements[0].style.backgroundColor = "#0b60b0";
  liElements[1].style.color = "white";
  liElements[1].style.backgroundColor = "#0b60b0";
}

function changeColor3() {
  var liElements = document.querySelectorAll("ol li");
  liElements.forEach(function (li) {
    li.style.color = "";
    li.style.backgroundColor = "";
  });
  liElements[0].style.color = "white";
  liElements[0].style.backgroundColor = "#0b60b0";
  liElements[1].style.color = "white";
  liElements[1].style.backgroundColor = "#0b60b0";
  liElements[2].style.color = "white";
  liElements[2].style.backgroundColor = "#0b60b0";
}

function changeColor4() {
  var liElements = document.querySelectorAll("ol li");
  liElements.forEach(function (li) {
    li.style.color = "";
    li.style.backgroundColor = "";
  });
  liElements[0].style.color = "white";
  liElements[0].style.backgroundColor = "#0b60b0";
  liElements[1].style.color = "white";
  liElements[1].style.backgroundColor = "#0b60b0";
  liElements[2].style.color = "white";
  liElements[2].style.backgroundColor = "#0b60b0";
  liElements[3].style.color = "white";
  liElements[3].style.backgroundColor = "#0b60b0";
}


/*cv image drag and drop  */
const dropArea = document.getElementById("drop-area");
const inputFile = document.getElementById("input-file");
const imageView = document.getElementById("img-view");

inputFile.addEventListener("change",uploadImage);

function uploadImage(){

    let imgLink = URL.createObjectURL(inputFile.files[0]);
    imageView.style.backgroundImage =` url(${imgLink})`;
    imageView.textContent = "";
    imageView.style.border =0;
     
}
// drag&drop
dropArea.addEventListener("dragover" ,function(e){
    e.preventDefault();
});
dropArea.addEventListener("drop" ,function(e){
    e.preventDefault();
    inputFile.files = e.dataTransfer.files;
    uploadImage();

})
