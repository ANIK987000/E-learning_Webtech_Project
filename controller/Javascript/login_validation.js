function validate()
{
    const email=document.getElementById("email");
    const pass=document.getElementById("pass");

    if(email.value=="" && pass.value=="")
    {
        alert("Email address and password cannot be empty");
        return false;
    }
    else if(email.value=="")
    {
        alert("Email address  cannot be empty");
        return false;
    }
    else if(pass.value=="")
    {
        alert("Password cannot be empty");
        return false;
    }
    else
    {
       
        return true;
    }
}