
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