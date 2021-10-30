let searchUser=document.querySelector("#search-users input");
let usersList=document.querySelector("#search-result");
console.log(searchUser);

//search users
searchUser.onkeyup=()=>{
    let searchTerm=searchUser.value;
    console.log(searchTerm);

    let xhr = new XMLHttpRequest();
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            usersList.innerHTML = data;
          }
      }
    }
    xhr.open("POST", "../php/messageusers.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
}
