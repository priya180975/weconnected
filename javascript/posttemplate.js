const form=document.querySelector("#post-data"),
submit=document.querySelector("#posted-content"),
error=document.querySelector("#error");

form.onsubmit = (e)=>{
  e.preventDefault(); 
}

//submit form
submit.onclick = ()=>{
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../php/post.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
        let data = xhr.response;
        data=data.trim();
        if(data=="success")
        {          
            error.style.color = 'green';
            error.textContent="posted";
            alert('posted');  
            location.reload();
        }
        else
        {
            error.style.color = 'red';
            error.textContent = data;
        }
      }
    }
  }
    
  let formData = new FormData(form);
  xhr.send(formData);
}

//show hide post 
let showhide=document.querySelector("#post-show-btn");
showhide.addEventListener("click",change)
function change()
{
    showhide.classList.toggle("show-no");
    showhide.classList.contains("show-no")?
    showhide.setAttribute("value","hide"):
    showhide.setAttribute("value","show");
}
