var filtre = new RegExp("^[A-Za-z]+$");
var filtrenp=new RegExp("^[A-Za-z]+ +[A-Za-z]+$");
var filtretel = new RegExp("^[0-9]{10}$");
var filtremail= new RegExp("^[A-Za-z0-9.-]+@[A-Za-z0-9.-]{2,}.[A-Za-z]{2,4}$");
let form=document.getElementById('form1');
let defaultname=document.getElementById('defaultnp');
let defaultmail=document.getElementById('defaultmail');
let defaultnumero=document.getElementById('defaultnumero');
let defaultadresse=document.getElementById('defaultadresse');


form.addEventListener('submit' , (e) => {
    defaultnp.innerHTML="";
    defaultmail.innerHTML="";
    defaultnumero.innerHTML="";
    defaultadresse.innerHTML="";

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