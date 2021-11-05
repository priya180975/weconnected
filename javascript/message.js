let searchUser=document.querySelector("#search-users input");
let usersList=document.querySelector("#search-result");

//search users
$(searchUser).on('keyup',function(){
    let searchTerm=searchUser.value;

    let xhr = new XMLHttpRequest();
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          usersList.innerHTML = data;

          //user clicked
          usersList.querySelectorAll('.search-data').forEach(e=> {
            e.onclick=()=>{
              let username=e.querySelector('.search-username').innerHTML;
              console.log(username);
              
              let url="http://localhost:8080/weconnected/message/message.php";
              window.location=url+"?username="+username;

              let xhr = new XMLHttpRequest();
              xhr.open("POST", "../php/messagedetails.php?username="+username, true);
              xhr.onload = ()=>{
                if(xhr.readyState === XMLHttpRequest.DONE){
                  if(xhr.status === 200){
                    let data = xhr.response;
                    data=data.trim();
                    console.log(data);
                  }
                }
              }
              xhr.send();
            }
          });
        }
      }
    }

    xhr.open("POST", "../php/messageusers.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
});


//submit message
let Chatsubmit=document.querySelector("#posted-content-btn");
let Chat=document.querySelector("#chat-content");

Chat.onsubmit = (e)=>{
  e.preventDefault(); 
}

const params = new URLSearchParams(window.location.search);
let msgUser=params.get("username");

//submit form
Chatsubmit.onclick = () =>
{
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../php/messagedetails.php?username="+msgUser, true);
  xhr.onload = ()=>
  {
    if(xhr.readyState === XMLHttpRequest.DONE)
    {
      if(xhr.status === 200)
      {
        let data = xhr.response;
        data=data.trim();
        console.log(data);
        if(data=="success")
        {          
          alert('posted');              
        }
        else
        {
          console.log("error");
        }
      }
    }
  }
    
  let ChatformData = new FormData(Chat);
  xhr.send(ChatformData);
}