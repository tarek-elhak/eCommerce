const fileInput = document.querySelector("#input__item__image");
const label = document.querySelector("#label__item__image");
const itemForm = document.querySelector("#item__form");
const paragraph = document.querySelector(".file__name");
// listens for changed input
fileInput.addEventListener("change" , function(){
    itemForm.classList.add("file__dropped");
    paragraph.textContent = fileInput.files.item(0).name;
});

// listens for drag / drop

// stop defaults
["drag", "dragstart", "dragend", "dragover", "dragenter","dragleave", "drop"]
    .forEach(event => {
        itemForm.addEventListener(event , preventDefault)
})
function preventDefault(e){
    e.preventDefault();
    e.stopPropagation();
}
["dragover" , "dragenter"].forEach(event => {
   label.addEventListener(event , function(){
       itemForm.classList.add("drag__over");
   });
});
["dragend" , "dragleave"].forEach(event => {
   label.addEventListener(event , function(){
     itemForm.classList.remove("drag__over");
   });
});
label.addEventListener("drop" , function(e){
    itemForm.classList.add("file__dropped");
    paragraph.textContent = e.dataTransfer.files.item(0).name;
});
