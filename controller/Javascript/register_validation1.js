
function validate()
{
    const name=document.getElementById('name');
    const uname=document.getElementById('uname');
    const pass=document.getElementById('pass');
    const cpassword=document.getElementById('cpassword');
    const phone=document.getElementById('phone');
    const email=document.getElementById('email');
    const address=document.getElementById('address');
    const qualification=document.getElementById('qualification');


    if(name.value=="")
    {
        alert('Name cannot be empty');
        return false;
    }
    else if(uname.value=="")
    {
        alert('Username  cannot be empty');
        return false;
    }
    else if(pass.value=="")
    {
        alert('Password cannot be empty');
        return false;
    }
    else if(cpassword.value=="")
    {
        alert('Confirm password cannot be empty');
        return false;
    }
    else if(phone.value=="")
    {
        alert('Phone number cannot be empty');
        return false;
    }
    else if(email.value=="")
    {
        alert('Email Address cannot be empty');
        return false;
        
    }
    else if(address.value=="")
    {
        alert('Address cannot be empty');
        return false;
    }
    else if(qualification.value=="")
    {
        alert('Qualification cannot be empty');
        return false;
    }
    else if(pass.value!=cpassword.value)
    {
        alert('Password and Confirm password does not match');
        return false;
    }
    else
    {
            return true;
       
    }
        
}
