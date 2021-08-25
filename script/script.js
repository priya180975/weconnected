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
let currenttime=document.querySelector("#currenttime");

postBtn.addEventListener("click",addpost);
cancelPost.addEventListener("click",addpost);
successPost.addEventListener("click",addpost);

postTemplate.addEventListener("click",postTemplateTop)

function addpost()
{
    var today=new Date();
    var date=today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
    var time =today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    
    postTemplate.classList.toggle("all");
    container.classList.toggle("opacity");
    body.classList.toggle("overflow");
    window.scrollTo(0,0);
    currenttime.innerHTML=date+' '+time;
}

function postTemplateTop()
{
    if(window.innerWidth<"600")
    {
        postTemplate.style.top="0rem";
    }
}

//committee
let commiteeBtn=document.querySelectorAll(".committee-add-sub");   
console.log(commiteeBtn);

commiteeBtn.forEach(a => {
    a.addEventListener("click",commiteeBtnChange)
});

function commiteeBtnChange(e)
{
    if(e.target.classList[1]=="fa-plus-square")
    {
        e.target.classList.remove(e.target.classList[1]);
        e.target.classList.add("fa-minus-square");
    }
    else{
        e.target.classList.remove(e.target.classList[1]);
        e.target.classList.add("fa-plus-square");
    }
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


