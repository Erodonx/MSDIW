var filtre = new RegExp("^[A-Za-z]+$");
var filtrenp=new RegExp("^[A-Za-z]+ +[A-Za-z]+$");
var filtretel = new RegExp("^0+[0-9]{9}$");
var filtreadresse= new RegExp("^[0-9]+ +[A-Za-zéèàêëîôû]+$");
var filtremail= new RegExp("^[A-Za-z0-9.-]+@[A-Za-z0-9.-]{2,}.[A-Za-z]{2,4}$");
let form=document.getElementById('form1');
let defaultname=document.getElementById('defaultnp');
let defaultmail=document.getElementById('defaultmail');
let defaultnumero=document.getElementById('defaultnumero');
let defaultadresse=document.getElementById('defaultadresse');
let adressepourverif,chainea,chaineb,chaineba,chainebb;


form.addEventListener('submit' , (e) => {
    defaultnp.innerHTML="";
    defaultmail.innerHTML="";
    defaultnumero.innerHTML="";
    defaultadresse.innerHTML="";
    adressepourverif=form.elements['adresse'].value;
    chainea=adressepourverif.substring(0,(adressepourverif.indexOf(' ')+1));
    console.log(chainea);
    chaineb=adressepourverif.substring(adressepourverif.indexOf(' ')+1,adressepourverif.length);
    console.log(chaineb);
    while (chaineb.indexOf(' ')!=-1)
    {
     chaineba=chaineb.substring(0,chaineb.indexOf(' '));
     console.log(chaineba);
     chainebb=chaineb.substring(chaineb.indexOf(' ')+1,chaineb.length);
     console.log(chainebb);
     chaineb=chaineba+chainebb;
     console.log(chaineb);
    }
    adressepourverif=chainea+chaineb;
    console.log(adressepourverif);

    if (form.elements['np'].value ==='' || form.elements['np']== null)
    {
        defaultnp.innerHTML = "* veuillez indiquer votre nom et votre prénom  <br>";
        e.preventDefault();
        
    }else if (filtrenp.test(form.elements['np'].value)==false)
    {
        defaultnp.innerHTML = "* veuillez saisir correctement le champ demandé !<br>";
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
    if (form.elements['adresse'].value=='')
    {
        defaultadresse.innerHTML = "* veuillez renseigner l'adresse  <br>";
        e.preventDefault();
    }else if(filtreadresse.test(adressepourverif)==false)
    {
     defaultadresse.innerHTML = "* Veuillez saisir une adresse valide. <br>";
     e.preventDefault();
     console.log(form.elements['adresse'].value);
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