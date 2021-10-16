const form=document.querySelector("#form-data"),
submit=document.querySelector("#submit"),
error=document.querySelector("#error");

form.onsubmit = (e)=>{
  e.preventDefault(); 
}

//submit form
submit.onclick = ()=>{
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../php/signin.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
        let data = xhr.response;
        data=data.trim();
        if(data === "success")
        {
          location.href="../main/main.html";
        }
        else
        {
          error.textContent = data;
        }
      }
    }
  }
    
  let formData = new FormData(form);
  xhr.send(formData);
}
