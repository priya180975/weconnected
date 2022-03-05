
const form=document.querySelector("#reset-form"),
error=document.querySelector("#error");
verifyotp=document.querySelector("#verifyotp");


form.onsubmit = (e)=>{
e.preventDefault(); 
}


verifyotp.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../php/forget.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            data=data.trim();
            if(data === "done")
            {
                error.textContent = data;
                window.location="../login/changepassword.php";
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
