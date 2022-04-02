let body=document.querySelector("body");
let container=document.querySelector("#container");

// var today=new Date();
// var date=today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
// var time =today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();


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

//back to top
let backToUpbtn=document.querySelector("#back-to-top");

setInterval(check,100);
function check()
{
    if(window.scrollY>="300")
    {
        backToUpbtn.classList.remove("all");
    }
    else{backToUpbtn.classList.add("all");}
}

backToUpbtn.addEventListener("click",backToUp);

function backToUp()
{
    window.scrollTo(0,0);
}

