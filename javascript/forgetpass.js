const form=document.querySelector("#reset-form"),
submit=document.querySelector("#send"),
error=document.querySelector("#error");


form.onsubmit = (e)=>{
  e.preventDefault(); 
}

// submit form
submit.onclick = ()=>{
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../php/forget.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
        let data = xhr.response;
        data=data.trim();
        if(data === "otp sent")
        {
          window.location="../login/verifyotp.html";
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


