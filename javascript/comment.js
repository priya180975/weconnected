//comments
document.querySelectorAll(".comment-btn").forEach(a=>a.addEventListener("click",showcomment));

function showcomment(e)
{
    let postDiv=e.target.parentElement.parentElement.parentElement.parentElement.parentElement;
    let commentDiv=postDiv.querySelector(".comments-display");

    if(commentDiv.classList.contains("comments-hide"))
    {
        commentDiv.classList.remove("comments-hide");   
        postDiv.querySelector(".content-interact").classList.add("border-radius0");
    }
    else
    {
        commentDiv.classList.add("comments-hide");   
        postDiv.querySelector(".content-interact").classList.remove("border-radius0");
    }
}

//add comment 
let commentTemplate=document.querySelector("#comment-data");
let cancelComment=document.querySelector("#cancel-comment");

cancelComment.addEventListener("click",removeComment);

document.querySelectorAll(".add-comment-btn").forEach(a=>a.addEventListener("click",addComment));

function removeComment()
{
    commentTemplate.classList.toggle("all");
    container.classList.toggle("opacity");
    body.classList.toggle("overflow");
    window.scrollTo(0,0);
}

const commentform=document.querySelector("#comment-data"),
submitComBtn=document.querySelector("#comment-content"),
errorCom=document.querySelector("#comment-error");

commentform.onsubmit = (e)=>{
    e.preventDefault(); 
}
  

function addComment(e)
{
    commentTemplate.classList.toggle("all");
    container.classList.toggle("opacity");
    body.classList.toggle("overflow");
    window.scrollTo(0,0);

    let postedDiv=e.target.parentElement.parentElement.parentElement.parentElement.parentElement;
    let contentDiv=postedDiv.querySelector('.content-profile-name');
    let Spans=contentDiv.querySelectorAll('span');
    let username1=Spans[1].innerHTML;
    let datetime1=Spans[2].innerHTML;
    
    var timestamp1 = new Date(datetime1);
    timestamp1 = timestamp1.getTime()/1000;


    //submit form
    submitComBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../php/comment.php?time="+timestamp1+"&username="+username1, true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            data=data.trim();
            if(data=="success")
            {          
                errorCom.style.color = 'green';
                errorCom.textContent="posted";
                alert('posted');  
                location.reload();
            }
            else
            {
                errorCom.style.color = 'red';
                errorCom.textContent = data;
            }
        }
        }
    }
        
    let formData = new FormData(commentform);
    xhr.send(formData);
    }

}
