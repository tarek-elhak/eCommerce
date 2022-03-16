/*
    members sidebar
*/

const membersList = document.querySelector("#members");
const membersIcon = document.querySelector("#members__icon");
const membersButton = document.querySelector("#members__btn")


membersButton.addEventListener("click",()=>{
    if (membersList.style.display !== "none"){
        membersIcon.classList.replace("fa-minus","fa-plus");
    }else{
        membersIcon.classList.replace("fa-plus","fa-minus");
    }

});

/*
    categories sidebar
*/

const categoriesList = document.querySelector("#categories");
const categoriesIcon = document.querySelector("#categories__icon");
const categoriesButton = document.querySelector("#categories__btn")


categoriesButton.addEventListener("click",()=>{
    if (categoriesList.style.display !== "none"){
        categoriesIcon.classList.replace("fa-minus","fa-plus");
    }else{
        categoriesIcon.classList.replace("fa-plus","fa-minus");
    }

});


/*
    items sidebar
*/

const itemsList = document.querySelector("#items");
const itemsIcon = document.querySelector("#items__icon");
const itemsButton = document.querySelector("#items__btn")


itemsButton.addEventListener("click",()=>{
    if (itemsList.style.display !== "none"){
        itemsIcon.classList.replace("fa-minus","fa-plus");
    }else{
        itemsIcon.classList.replace("fa-plus","fa-minus");
    }

});

/*
    comments sidebar
*/

const commentsList = document.querySelector("#comments");
const commentsIcon = document.querySelector("#comments__icon");
const commentsButton = document.querySelector("#comments__btn")


commentsButton.addEventListener("click",()=>{
    if (commentsList.style.display !== "none"){
        commentsIcon.classList.replace("fa-minus","fa-plus");
    }else{
        commentsIcon.classList.replace("fa-plus","fa-minus");
    }

});
