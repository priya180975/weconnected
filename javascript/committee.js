//committee
let commiteeBtn=document.querySelectorAll(".committee-add-sub");   

commiteeBtn.forEach(a => {
    a.addEventListener("click",commiteeBtnChange)
});

function commiteeBtnChange(e)
{
    if(e.target.classList[1]=="fa-plus-square")
    {
        var committeName;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) 
            {
                committeName=e.target.parentElement.parentElement.getAttribute('value');
                let data = xmlhttp.response;
                if(data=="done")
                {
                    alert(`${committeName} committee has been added to your community`);
                    e.target.classList.remove(e.target.classList[1]);
                    e.target.classList.add("fa-minus-square");
                }
                else
                {
                    alert(`something went wrong`);
                }
            }
        };
        committeName=e.target.parentElement.parentElement.getAttribute('value');
        xmlhttp.open("GET", "../php/committeefunction.php?add="+committeName, true);
        xmlhttp.send();
    }
    else{
        var committeName;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) 
            {
                committeName=e.target.parentElement.parentElement.getAttribute('value');
                let data = xmlhttp.response;
                if(data=="done")
                {
                    alert(`${committeName} committee has been removed from your community`);
                    e.target.classList.remove(e.target.classList[1]);
                    e.target.classList.add("fa-plus-square");
                }
                else
                {
                    alert(`something went wrong`);
                }
            }
        };
        committeName=e.target.parentElement.parentElement.getAttribute('value');
        console.log(committeName);

        xmlhttp.open("GET", "../php/committeefunction.php?remove="+committeName, true);
        xmlhttp.send();
    }
}

    