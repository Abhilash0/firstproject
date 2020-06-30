 function formValidation()  
    {  
    var name = document.forms["registration"]["name"].value; 
    var email = document.forms["registration"]["email"].value;  
    var pass = document.forms["registration"]["pass"].value;    
    if(ValidateEmail(email))
    {  
    if(allLetter(name))
    {  
    if(pass_validation(pass,7,12)) 
    }  
    }  
    return false;  
     
    
}
function ValidateEmail(email)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email.value.match(mailformat))
{ 
return true;
}
else
{
alert("You have entered an invalid email address!");
email.focus();
return false;
}
}
function allLetter(name)  
    {   
    var letters = /^[A-Za-z]+$/;  
    if(name.value.match(letters))  
    {  
    return true;  
    }  
    else  
    {  
    alert('Username must have alphabet characters only');  
    name.focus();  
    return false;  
    }  
    }  
function pass_validation(pass,mx,my)  
    {  
    var pass_len = pass.value.length;  
    if (pass_len == 0 ||pass_len >= my || pass_len < mx)  
    {  
    alert("Password should not be empty / length be between "+mx+" to "+my);  
    pass.focus();  
    return false;  
    }  
    return true;  
    }  