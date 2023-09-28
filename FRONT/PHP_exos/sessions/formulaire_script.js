var filtre = new RegExp("^[A-Za-z]+$");
var filtremail= new RegExp("^[A-Za-z0-9.-]+@[A-Za-z0-9.-]{2,}.[A-Za-z]{2,4}$");
let form=document.getElementById('form1');
defaultlogin=document.getElementById('defaultlogin');
defaultnom=document.getElementById('defaultnom');
defaultprenom=document.getElementById('defaultprenom');
defaultpassword=document.getElementById('defaultpassword');
defaultmail=document.getElementById('defaultmail');
function complex_password(code)
{
    lettre=new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    nombre=new Array('1','2','3','4','5','6','7','8','9','0');
 if(code.length>7)
 {
for (var i in lettre)
{
 if(code.indexOf(i)!=-1)
{
 console.log(i);
 for(var c in lettre)
 {
    console.log(c);
    console.log(code.indexOf(c.toLowerCase()));
    if(code.indexOf(c.toLowerCase())!=-1)
    {
        for(var d in nombre)
        {
            console.log(d);
            console.log(code.indexOf(d));
            if(code.indexOf(d)!=-1)
            {
             verif=true;
             return verif;
            }else{
                verif=false;
            }
        }
    }else{
        verif=false;
    }
 }

}else{
    verif=false;
}
}
 }else{
    verif=false;
 }
 return verif;
}

form.addEventListener('submit' , (e) => {

    verifpassword=complex_password(form.elements['password'].value);
    defaultlogin.innerHTML="";
    defaultnom.innerHTML="";
    defaultprenom.innerHTML="";
    defaultpassword.innerHTML="";
    defaultmail.innerHTML="";

    if (form.elements['login'].value ==='' || form.elements['login']== null)
    {
        e.preventDefault();
        defaultlogin.innerHTML="Veuillez saisir un login.";
    }else if (form.elements['login'].length<='8')
    {
        e.preventDefault();
        defaultlogin.innerHTML="Le login doit comporter au moins 8 caractères.";
        
    }
    if (form.elements['nom'].value ==='' || form.elements['nom']== null)
    {
        e.preventDefault();
        defaultnom.innerHTML="Veuillez renseigner un nom.";
        
    }else if (filtre.test(form.elements['nom'].value)==false)
    {
        e.preventDefault();
        defaultnom.innerHTML="Veuillez renseigner un nom valide.";
    }
    if (form.elements['prenom'].value ==='' || form.elements['prenom']== null)
    {
        e.preventDefault();
        defaultprenom.innerHTML="Veuillez renseigner le prénom.";
        
    }else if (filtre.test(form.elements['prenom'].value)==false)
    {
        e.preventDefault();
        defaultprenom.innerHTML="Veuillez renseigner un prénom valide.";
    }
    if (form.elements['password'].value==='' || form.elements['password']==null)
    {
        e.preventDefault();
        defaultpassword.innerHTML="le mot de passe ne doit pas être vide.";

    }else if (verifpassword==false)
    {
        e.preventDefault();
        defaultpassword.innerHTML="Le mot de passe ne contient pas 8 caractères ainsi qu'une majuscule et une minuscule et un chiffre.";
    }
    if(form.elements['mail'].value=='')
    {
        e.preventDefault();
        defaultmail.innerHTML="Veuillez renseigner l'adresse mail.";
    }else if (filtremail.test(form.elements['mail'].value)==false)
    {
        e.preventDefault();
        defaultmail.innerHTML="L'adresse mail n'est pas valide.";
    }
});