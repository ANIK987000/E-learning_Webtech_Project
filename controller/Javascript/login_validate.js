const form=document.getElementById("form");
const email=document.getElementById("email");
const pass=document.getElementById("pass");


var flag=false;
function validate()
{

   if(email.value=="" && pass.value=="")
   {
        setError(email,'Email address cannot be empty');
        setError1(pass,'Password cannot be empty');
        return false;
        
   }
   else if(email.value=="")
    {
        setError(email,'Email address cannot be empty');
        // setSuccess1(pass);
        // form1_success_off();
        // form2_error_off();
       return false;
        
    }
   
    else if(pass.value=="" )
    {
        
        setError1(pass,'Password cannot be empty');
        // setSuccess(email);
        // form2_success_off();
        // form1_error_off();
        return false;
    }
    else
    {
        setSuccess(email);
        setSuccess1(pass);
        return true;
        
        //header("location: dashboard.php");
        
    }
    
}

function setError(input,message)
{
    const obj=document.getElementById('form1');
    const smalltag=obj.querySelector('small');
    smalltag.innerHTML=message;
    smalltag.style.visibility="visible";
    const itag=document.getElementById('error');
    itag.style.visibility="visible";
    itag.style.color="red";
    input.style.borderColor="red";
    const button=form.querySelector('button');
    button.style.backgroundColor="red";
    
    
}
function setSuccess(input)
{
    const itag=document.getElementById('success');
    itag.style.visibility="visible";
    itag.style.color="green";
    input.style.borderColor="green";
    const button=form.querySelector('button');
   button.style.backgroundColor="rgb(70, 199, 75)";
    
}
function setError1(input,message)
{
    const obj=document.getElementById('form2');
    const smalltag=obj.querySelector('small');
    smalltag.innerHTML=message;
    smalltag.style.visibility="visible";
    const itag=document.getElementById('error1');
    itag.style.visibility="visible";
    itag.style.color="red";
    input.style.borderColor="red";
    const button=form.querySelector('button');
   button.style.backgroundColor="red";
}
function setSuccess1(input)
{
    const itag=document.getElementById('success1');
    itag.style.visibility="visible";
    itag.style.color="green";
    input.style.borderColor="green";
    const button=form.querySelector('button');
   button.style.backgroundColor="rgb(70, 199, 75)";
}

function check()
{
    const obj=document.getElementById('form1');
    const smalltag=obj.querySelector('small');
    smalltag.style.visibility="hidden";
    const itag=document.getElementById('error');
    itag.style.visibility="hidden";
    input.style.borderColor="black";
    const button=form.querySelector('button');
    button.style.backgroundColor="rgb(47, 24, 253)";

}


//_______________________________________________

function form1_error_off()
{
    const obj=document.getElementById('form1');
    const smalltag=obj.querySelector('small');
    smalltag.style.visibility="hidden";
    const itag=document.getElementById('error');
    itag.style.visibility="hidden";
    input.style.borderColor="black";
    //const button=form.querySelector('button');
    //button.style.backgroundColor="rgb(47, 24, 253)";

}
function form2_error_off()
{
    const obj=document.getElementById('form2');
    const smalltag=obj.querySelector('small');
    smalltag.style.visibility="hidden";
    const itag=document.getElementById('error1');
    itag.style.visibility="hidden";
    input.style.borderColor="black";
    //const button=form.querySelector('button');
    //button.style.backgroundColor="rgb(47, 24, 253)";

}
function form1_success_off()
{
    const itag=document.getElementById('success');
    itag.style.visibility="hidden";
    //itag.style.color="green";
    input.style.borderColor="black";
    //const button=form.querySelector('button');
   //button.style.backgroundColor="rgb(70, 199, 75)";

}
function form2_success_off()
{
    const itag=document.getElementById('success1');
    itag.style.visibility="hidden";
    //itag.style.color="green";
    input.style.borderColor="black";
    //const button=form.querySelector('button');
   //button.style.backgroundColor="rgb(70, 199, 75)";

}