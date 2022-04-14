let body=document.querySelector("body");
let container=document.querySelector("#container");

// var today=new Date();
// var date=today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
// var time =today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

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

