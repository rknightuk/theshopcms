function validate()
{
  if( this.elements["fname"].value === "" )
  { 
    alert("Please enter your fname"); return false; 
  }
  if( this.elements["lname"].value === "" )
  { 
    alert("Please enter your lname"); return false; 
  }
  if( this.elements["house_number"].value === "" )
  { 
    alert("Please enter your house_number"); return false; 
  }
  if( this.elements["pcode"].value === "" )
  { 
    alert("Please enter your pcode"); return false; 
  }
  
  if( ( this.elements["email"].value.indexOf("@") === -1 )
   || ( this.elements["email"].value.indexOf(".") === -1 ) )
  { 
    alert("Please enter your email"); return false;
  }

}

function init()
{
  var panel=document.getElementById("panel");
  panel.innerHTML="Please enter your name and email address.";

  var form=document.getElementById("contact");
  form.onsubmit=validate;

}
onload=init;

fname
lname
house_number
pcode
email