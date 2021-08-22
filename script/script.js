let body=document.querySelector("body");
let container=document.querySelector("#container");


//dropdown menu 
let dropDownMenu=document.querySelector("#drop-down-menu-btn");
let dropDownMenuItems=document.querySelector(".drop-down-menu-items");
let filterBtn=document.querySelector("#filter");
let filterOptions=document.querySelector(".filter-options");

dropDownMenu.addEventListener("click",showMenu);
filterBtn.addEventListener('click',showFilterOpt)

function showMenu()
{
   dropDownMenuItems.classList.toggle("all");
}

function showFilterOpt()
{
    filterOptions.classList.toggle("all");
}

//post 
let postBtn=document.querySelector("#post-btn");
let postTemplate=document.querySelector(".post-content");
let cancelPost=document.querySelector("#cancel");
let successPost=document.querySelector("#posted-content");

postBtn.addEventListener("click",addpost);
cancelPost.addEventListener("click",addpost);
successPost.addEventListener("click",addpost);

function addpost()
{
    postTemplate.classList.toggle("all");
    container.classList.toggle("opacity");
    body.classList.toggle("overflow");
    window.scrollTo(0,0)
}