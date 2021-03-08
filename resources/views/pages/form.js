function validation(){
    var name=document.getElementById("name").value;
    var email=document.getElementById("email").value;
    var phone=document.getElementById("phone").value;
    var message=document.getElementById("message").value;
    var error=document.getElementById("error_message");
    var text;

    if(name.length < 5 || name.length >20)
    {
        text="Please Enter a valid Name Under 5-20 Characters";
        error.innerHTML=text;
        return false;
    }

    if(email.indexOf("@") == -1 || email.length < 6)
    {
        text="Please Enter a valid Email Address";
        error.innerHTML=text;
        return false;
    }

    if(isNaN(phone) || phone.length != 11)
    {
        text="Please Enter a Correct Phone Number";
        error.innerHTML=text;
        return false;
    }

    if(message.length <= 140)
    {
        text="Please Enter More than 140 Characters";
        error.innerHTML=text;
        return false;
    }

    alert("Form Submitted Successfully!")

    return true;
}