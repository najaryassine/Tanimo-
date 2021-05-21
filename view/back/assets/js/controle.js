

function verif() {
    var errors = "<ul>";
    var Nom1 = document.querySelector('#Nom').value;
    
     var mail1=document.querySelector('#Email').value;
    var a="@";



    if (Nom1.charAt(0) < 'A' || Nom1.charAt(0) > 'Z') {
        //document.getElementById('erreur').innerHTML = "Le nom doit commencer par une lettre Majuscule";
        //return false;
        errors += "<li>Le nom doit commencer par une lettre Majuscule </li>";
    }
  
    
    if (Nom1 === "") {
        
        errors += "<li>  Veuillez saisir le nom </li>";
    }
    
        if (mail1.substring(mail1.indexOf(a)) != "@tanimo.tn") {
            errors +="<li> Verifier votre email </li>";}


   

    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'red';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    } else {
        var msg = "Bienvenue " + Nom + " "
            + prenom + ".\n Vos préférences: " + p;

        alert(msg);
    }


}