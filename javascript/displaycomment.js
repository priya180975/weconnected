//comments
document.querySelectorAll(".comment-btn").forEach(a=>a.addEventListener("click",showcomment));

function showcomment(e)
{
    let postDiv=e.target.parentElement.parentElement.parentElement.parentElement.parentElement;
    console.log(postDiv);
    let commentDiv=postDiv.querySelector(".comments-display");
    console.log(commentDiv);

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