let dropDownMenu=document.querySelector("#drop-down-menu-btn");
let dropDownMenuItems=document.querySelector(".drop-down-menu-items");

dropDownMenu.addEventListener("click",showMenu);
function showMenu()
{
   dropDownMenuItems.classList.toggle("all");
}