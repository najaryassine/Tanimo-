const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});




function ValidateEmail(mail)
{
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(mail.value.match(mailformat))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function verifyPassword(pw) {
    var test = true;

    if(pw == "") {
        test =  false;
    }

    if(pw.length < 8) {
        test =  false;
    }

    var format=/^[A-Z]/;

    if (!(pw.match(format))){
        test = false;
    }

    return test;

}

function validEm()
{
    var email = document.getElementById('em');
    if(ValidateEmail(email)==false)
    {
        alert("vérifier email");
        email.value="";
    }


}


function validPw()
{
    var pass = document.getElementById('pass');
    if(verifyPassword(pass.value)==false)
    {
        alert("vérifier password\npassword must be start with uppercase lettre and contains at least 8 caracteres");
        pass.value="";
    }
}

