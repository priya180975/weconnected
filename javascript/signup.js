const form=document.querySelector("#form-data"),
submit=document.querySelector("#submit"),
error=document.querySelector("#error");

form.onsubmit = (e)=>{
  e.preventDefault(); 
}


$(document).ready(function(){
  $('input[name="type"]').change(function(){
    if(this.value=="Teacher"||this.value=="Committee")
    {
      let chkuser= `<input type="password" placeholder="Enter password for ${this.value}" name="chkuser-pass" required>`;
      document.querySelector(".chkuser").innerHTML=chkuser;    
    }
    else
    {
      document.querySelector(".chkuser").innerHTML='';  
    }
  })
});

submit.onclick = ()=>{
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../php/signup.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
        let data = xhr.response;
        if(data === "success")
        {
          location.href="main.php";
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
