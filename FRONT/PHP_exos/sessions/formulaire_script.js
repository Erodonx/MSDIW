var filtre = new RegExp("^[A-Za-z]+$");
var filtremail= new RegExp("^[A-Za-z0-9.-]+@[A-Za-z0-9.-]{2,}.[A-Za-z]{2,4}$");
let form=document.getElementById('form1');
defaultlogin=document.getElementById('defaultlogin');
defaultnom=document.getElementById('defaultnom');
defaultprenom=document.getElementById('defaultprenom');
defaultpassword=document.getElementById('defaultpassword');
defaultverifpassword=document.getElementById('defaultverifpassword');
defaultmail=document.getElementById('defaultmail');
combien=document.getElementById('combien');
coin=document.getElementById('coin');
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
    defaultverifpassword.innerHTML="";

    if (form.elements['login'].value ==='' || form.elements['login']== null)
    {
        e.preventDefault();
        defaultlogin.innerHTML="Veuillez saisir un login.";
        combien.innerHTML='<audio src="tests/COMBIEN.mp3" autoplay loop></audio>';
    }else if (form.elements['login'].length<='8')
    {
        e.preventDefault();
        defaultlogin.innerHTML="Le login doit comporter au moins 8 caractères.";
        combien.innerHTML='<audio src="tests/COMBIEN.mp3" autoplay loop></audio>';
        
    }
    if (form.elements['nom'].value ==='' || form.elements['nom']== null)
    {
        e.preventDefault();
        defaultnom.innerHTML="Veuillez renseigner un nom.";
        combien.innerHTML='<audio src="tests/COMBIEN.mp3" autoplay looped></audio>';
        
    }else if (filtre.test(form.elements['nom'].value)==false)
    {
        e.preventDefault();
        defaultnom.innerHTML="Veuillez renseigner un nom valide.";
        combien.innerHTML='<audio src="tests/COMBIEN.mp3" autoplay loop></audio>';
    }
    if (form.elements['prenom'].value ==='' || form.elements['prenom']== null)
    {
        e.preventDefault();
        defaultprenom.innerHTML="Veuillez renseigner le prénom.";
        combien.innerHTML='<audio src="tests/COMBIEN.mp3" autoplay loop></audio>';
        
    }else if (filtre.test(form.elements['prenom'].value)==false)
    {
        e.preventDefault();
        defaultprenom.innerHTML="Veuillez renseigner un prénom valide.";
        combien.innerHTML='<audio src="tests/COMBIEN.mp3" autoplay loop></audio>';
    }
    if (form.elements['password'].value==='' || form.elements['password']==null)
    {
        e.preventDefault();
        defaultpassword.innerHTML="le mot de passe ne doit pas être vide.";
        combien.innerHTML='<audio src="tests/COMBIEN.mp3" autoplay loop></audio>';

    }else if (verifpassword==false)
    {
        e.preventDefault();
        defaultpassword.innerHTML="Le mot de passe ne contient pas 8 caractères ainsi qu'une majuscule et une minuscule et un chiffre.";
        combien.innerHTML='<audio src="tests/COMBIEN.mp3" autoplay loop></audio>';
    }
    if(form.elements['mail'].value=='')
    {
        e.preventDefault();
        defaultmail.innerHTML="Veuillez renseigner l'adresse mail.";
        combien.innerHTML='<audio src="tests/COMBIEN.mp3" autoplay loop></audio>';
    }else if (filtremail.test(form.elements['mail'].value)==false)
    {
        e.preventDefault();
        defaultmail.innerHTML="L'adresse mail n'est pas valide.";
        combien.innerHTML='<audio src="tests/COMBIEN.mp3" autoplay loop></audio>';
    }
    if (form.elements['password'].value!=form.elements['password-verif'].value)
    {
        e.preventDefault();
        defaultverifpassword.innerHTML="Les deux mots de passe ne correspondent pas.";
        combien.innerHTML='<audio src="tests/COMBIEN.mp3" autoplay loop></audio>';
    }
});
volume=document.getElementById('volume');
putine=document.getElementById('putine');
horn=document.getElementById('horn');
//aled=document.getElementsByClassName('poutine');
coin.addEventListener("click" , (e) => {

if (horn.innerHTML=='')
horn.innerHTML='<audio src="tests/horn2.mp3" autoplay loop></audio>';
else
horn.innerHTML='';
});

volume.addEventListener("click" , (e) => {
    if (putine.innerHTML=='')
    {
        putine.innerHTML='<audio src="tests/COMBIEN.mp3" autoplay loop></audio>';
        volume.src="tests/on.png";
        form.style="background-image:url(wide-putin-awokenRes.gif);";
    }else
    {
        putine.innerHTML='';
        volume.src="tests/off.png";
        form.style.backgroundImage="";
    }
   
   
});