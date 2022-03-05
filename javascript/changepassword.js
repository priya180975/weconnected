const form=document.querySelector("#changepwd-form"),
submit=document.querySelector("#reset"),
error=document.querySelector("#error");


form.onsubmit = (e)=>{
  e.preventDefault(); 
}

// submit form
submit.onclick = ()=>{
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../php/resetpassword.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
        let data = xhr.response;
        data=data.trim();
        if(data=='password updated')
        {
          window.location="../main/main.php";
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


