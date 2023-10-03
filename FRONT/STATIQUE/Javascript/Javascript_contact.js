var filtre = new RegExp("^[A-Za-z]+$");
var filtretel = new RegExp("^[0-9]{10}$");
var filtremail= new RegExp("^[A-Za-z0-9.-]+@[A-Za-z0-9.-]{2,}.[A-Za-z]{2,4}$");
let form=document.getElementById('form1');
let defaultname=document.getElementById('defaultname');
let defaultmail=document.getElementById('defaultmail');
let defaultprenom=document.getElementById('defaultprenom');
let defaultnumero=document.getElementById('defaultnumero');
let defaultdemande=document.getElementById('defaultdemande');


form.addEventListener('submit' , (e) => {
    defaultname.innerHTML="";
    defaultmail.innerHTML="";
    defaultprenom.innerHTML="";
    defaultnumero.innerHTML="";
    defaultdemande.innerHTML="";

    if (form.elements['nom'].value ==='' || form.elements['nom']== null)
    {
        defaultname.innerHTML = "* veuillez indiquer votre nom  <br>";
        e.preventDefault();
        
    }else if (filtre.test(form.elements['nom'].value)==false)
    {
        defaultname.innerHTML = "* veuillez saisir correctement votre nom  <br>";
        e.preventDefault();
        
    }
        if (form.elements['prenom'].value=='')
    {
        defaultprenom.innerHTML = "* veuillez saisir votre prénom  <br>";
        e.preventDefault();
    } else if (filtre.test(form.elements['prenom'].value)==false)
    {
        defaultprenom.innerHTML = "* veuillez saisir correctement votre prénom  <br>";
        e.preventDefault();
    }
    if(form.elements['email'].value=='')
    {
        defaultmail.innerHTML = "* veuillez saisir votre email  <br>";
        e.preventDefault();
    }else if (filtremail.test(form.elements['email'].value)==false)
    {
        defaultmail.innerHTML = "* veuillez saisir correctement votre e mail  <br>";
        e.preventDefault();
    }
    if (form.elements['demande'].value=='')
    {
        defaultdemande.innerHTML = "* veuillez renseigner la demande  <br>";
        e.preventDefault();
    }
    if (form.elements['telephone'].value=='')
    {
        defaultnumero.innerHTML = "* veuillez saisir le numero de téléphone <br>";
        e.preventDefault();
    } else if (filtretel.test(form.elements['telephone'].value)==false)
    {
        defaultnumero.innerHTML = "* veuillez saisir correctement le numéro de téléphone  <br>";
        e.preventDefault();
    }
});

$(document).ready(function()
{
$.get("header.php",null, function( data )
{
    $("#header").html(data);
});



});
$(document).ready(function()
{
$.get("footer.php",null, function( data )
{
    $("#footer").html(data);
});



});