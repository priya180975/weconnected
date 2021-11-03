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

//post 
let postBtn=document.querySelector("#post-btn");
let postTemplate=document.querySelector(".post-content");
let cancelPost=document.querySelector("#cancel");
// let currenttime=document.querySelector("#currenttime");

postBtn.addEventListener("click",addpost);
cancelPost.addEventListener("click",addpost);
// postTemplate.addEventListener("click",postTemplateTop)

function addpost()
{    
    postTemplate.classList.toggle("all");
    container.classList.toggle("opacity");
    body.classList.toggle("overflow");
    window.scrollTo(0,0);
    //currenttime.innerHTML=date;
}

// function postTemplateTop()
// {
//     if(window.innerWidth<"600")
//     {
//         postTemplate.style.top="0rem";
//     }
// }



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


//filter
const oriLoc="http://localhost:8080/weconnected/main/main.php";

window.onload = (event) => {
    // console.log('page is fully loaded');
    const params = new URLSearchParams(window.location.search)
    //console.log(params.get("filter"));
    let paa=params.get("filter")
    document.querySelector('input[name=filterOpt][value='+paa+']').setAttribute("checked","true");
};

//filter option selected
$('input[type=radio][name=filterOpt]').change(function() {
    window.location=oriLoc+"?filter="+this.value;
});
