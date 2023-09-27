var filtre = new RegExp("^[A-Za-z]+$");
var filtrecp = new RegExp("^[0-9]{5}$");
var filtremail= new RegExp("^[A-Za-z0-9.-]+@[A-Za-z0-9.-]{2,}.[A-Za-z]{2,4}$");
let form=document.getElementById('form1');
let defaultname=document.getElementById('defaultname');
let defaultprenom=document.getElementById('defaultprenom');
let defaultsexe=document.getElementById('defaultsexe');
let defaultdate=document.getElementById('defaultdate');
let defaultpostal=document.getElementById('defaultpostal');
let defaultmail=document.getElementById('defaultmail');
let defaultsujet=document.getElementById('defaultsujet');
let defaultquestion=document.getElementById('defaultquestion');
let defaultaccepter=document.getElementById('defaultaccepter');

//document.querySelector('#form1').onsubmit = function(){
//element.addEventListener("submit", checkForm);

// $(document).ready(function()
// {
//     $("#boutonzz").click(function()
//     {
//         alert("woulah arrête stop c'est trop");
//     });
// });

$(document).ready(function()
{
    $("#bouton").click(function(e)
    {
//form.addEventListener('submit', (e) => {

    defaultname.innerHTML="";
    defaultprenom.innerHTML="";
    defaultsexe.innerHTML="";
    defaultdate.innerHTML="";
    defaultpostal.innerHTML="";
    defaultmail.innerHTML="";
    defaultsujet.innerHTML="";
    defaultquestion.innerHTML="";
    defaultaccepter.innerHTML="";

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
    if (form.elements['sexe'].value=='')
    {
        defaultsexe.innerHTML = "* veuillez selectionner votre sexe <br>";
        e.preventDefault();
    }
    if (form.elements['date'].value=='')
    {
        defaultdate.innerHTML = "* veuillez renseigner la date de naissance <br>";
        e.preventDefault();
    }
    if (form.elements['codepostal'].value=='')
    {
        defaultpostal.innerHTML = "* veuillez saisir le code postal <br>";
        e.preventDefault();
    } else if (filtrecp.test(form.elements['codepostal'].value)==false)
    {
        defaultpostal.innerHTML = "* veuillez saisir correctement le code postal  <br>";
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
    if(form.elements['sujet'].value=='')
    {
        defaultsujet.innerHTML = "* veuillez renseigner le sujet  <br>";
        e.preventDefault();
    }
    if (form.elements['question'].value=='')
    {
        defaultquestion.innerHTML = "* veuillez renseigner la question  <br>";
        e.preventDefault();
    }
    if (form.elements['accepter'].checked==false)
    {
        defaultaccepter.innerHTML = "* veuillez accepter le traitement informatique <br>";
        e.preventDefault();
    }
});
});