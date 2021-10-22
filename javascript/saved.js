//saved
let savebtn= document.querySelectorAll(".save-btn");
savebtn.forEach(a=>a.addEventListener("click",savepost));
function savepost(e)
{  
    if(e.target.classList.contains("fas"))
    {
        //timestamp
        console.log(e.target.parentElement.parentElement.parentElement.parentElement);
        let postDiv=e.target.parentElement.parentElement.parentElement.parentElement;
        let contentDiv=postDiv.querySelector('.content-profile-name');
        let Span=contentDiv.querySelectorAll('span');
        let username=Span[1].innerHTML;
        let datetime=Span[2].innerHTML;
        
        var timestamp = new Date(datetime);
        timestamp = timestamp.getTime()/1000;
        

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) 
            {
                let data = xmlhttp.response;
                if(data)
                {
                    e.target.classList.toggle("fas");
                    console.log(data);
                }
                else
                {
                    console.log(data);
                }
            }
        };

        xmlhttp.open("GET", "../php/saved.php?post=remove&time="+timestamp+"&username="+username, true);
        xmlhttp.send();
    }
    else
    {
        //get timestamp 
        console.log(e.target.parentElement.parentElement.parentElement.parentElement);
        let postDiv=e.target.parentElement.parentElement.parentElement.parentElement;
        let contentDiv=postDiv.querySelector('.content-profile-name');
        let Span=contentDiv.querySelectorAll('span');
        let username=Span[1].innerHTML;
        let datetime=Span[2].innerHTML;
        
        var timestamp = new Date(datetime);
        timestamp = timestamp.getTime()/1000;

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) 
            {
                let data = xmlhttp.response;
                if(data)
                {
                    e.target.classList.toggle("fas");
                    console.log(data);    
                }
                else
                {
                    console.log(data);
                }
            }
        };
        

        xmlhttp.open("GET", "../php/saved.php?post=save&time="+timestamp+"&username="+username, true);
        xmlhttp.send();
    }

    
}