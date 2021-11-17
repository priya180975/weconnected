const form=document.querySelector("#form-data"),
submit=document.querySelector("#submit"),
error=document.querySelector("#error");

form.onsubmit = (e)=>{
  e.preventDefault(); 
}

//submit form
submit.onclick = ()=>{
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../php/profile.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
        let data = xhr.response;
        data=data.trim();
        if((data=="success")||(data="successsuccess"))
        {          
          error.style.color = 'green';
          error.textContent="update successful";
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


//user type check
let chkuser=document.getElementById("type").value;
$(document).ready(function(){
  if(chkuser=="Committee")
  {
    $('.desc_div').removeClass('none');
  }
  else if(chkuser=='Teacher')
  {
    $('.course_div').removeClass('none');
  }
  else
  {
    $('.course_div').removeClass('none');
    $('.year_div').removeClass('none');
  }
});

//courses
let course=['BSc.IT','BSc.CS','BCOM','BAF','SY-JC','FY-JC','BMM'];
let selectedCourse=document.querySelector('#selected-course').value;
let course_option=document.querySelector("#course_option");
var txt=course_option.innerHTML;

course.forEach(c => {
  if(c!==selectedCourse)
  {
    var opt=`<option name='${c}' value='${c}'>${c}</option>`;
    txt+=opt;
  }
});

course_option.innerHTML=txt;

//year
let year=['FY','SY','TY','Alumni'];
let selectedYear=document.querySelector('#selected-year').value;
let year_option=document.querySelector("#year_option");
var txt=year_option.innerHTML;

year.forEach(c => {
  if(c!==selectedYear)
  {
    var opt=`<option name='${c}' value='${c}'>${c}</option>`;
    txt+=opt;
  }
});

year_option.innerHTML=txt;
