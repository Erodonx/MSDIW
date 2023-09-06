var verification=document.getElementById('verification');
var img=document.getElementById('img');
var putine=document.getElementById('putin');
var putine2=document.getElementById('putin2');
var nonpoutine=document.getElementById('nonpoutine');
var poutine=document.getElementById('poutine');
let h1i=document.getElementById('h1i');
let h1p=document.getElementById('h1p');
let h1c=document.getElementById('h1c');
let h2i=document.getElementById('h2i');
let h2p=document.getElementById('h2p');
let h2c=document.getElementById('h2c');
let h3i=document.getElementById('h3i');
let h3p=document.getElementById('h3p');
let h3c=document.getElementById('h3c');
let h4i=document.getElementById('h4i');
let h4p=document.getElementById('h4p');
let h4c=document.getElementById('h4c');
let background=document.getElementById('background');
let hamburgertext=document.getElementById('hamburgertext');
let hamburger=document.getElementById('hamburger');
let hamburgercarousel=document.getElementById('hamburgercarousel');
let plat=document.getElementById('plat');
let platcol=document.getElementById('platcol');
let platcolpoutine=document.getElementById('platcolpoutine');
let formplat=document.getElementById('formplat');
document.getElementById('lienplat');
document.getElementById('descriptionplat');
document.getElementById('lienplatpoutine');
document.getElementById('descriptionplatpoutine');
var platImage,platDesc;

function Commande(lien,description)
{
if (putine2.innerHTML=='')
{
lienplat.src=lien;
descriptionplat.innerHTML=description;
}else{
lienplatpoutine.src=lien;
descriptionplatpoutine.innerHTML=description;

}
}
verification.addEventListener("mouseover" , (e) => {
    putine.innerHTML='<audio src="../BOOTSTRAP/Assets/son/balade.mp3" autoplay loop></audio>';
    img.src="../BOOTSTRAP/Assets/gif/wide-putin-awokenRes.gif";
});
verification.addEventListener("mouseout" , (e) => {
    putine.innerHTML='';
    img.src="../BOOTSTRAP/Assets/food/resized/Food-Name-433.png";
});
poutine.addEventListener("click" , (e) => {
    stopPoutine();
});

h1c.addEventListener('click', (e) => {
background.style.display='none';
hamburger.style.display='none';
hamburgercarousel.style.display='none';
hamburgertext.style.display='none';
formplat.style.display='flex';
plat.style.display='flex';
platcol.style.display='flex';
nonpoutine.style.display='flex';
platImage=h1i.src;
platDesc= h1p.innerHTML;
nonpoutine.display='flex';
Commande(platImage,platDesc);
});
h2c.addEventListener('click', (e) => {
    background.style.display='none';
    hamburger.style.display='none';
    hamburgercarousel.style.display='none';
    hamburgertext.style.display='none';
    formplat.style.display='flex';
    plat.style.display='flex';
    platcol.style.display='flex';
    nonpoutine.style.display='flex';
    platImage=h2i.src;
    platDesc= h2p.innerHTML;
    Commande(platImage,platDesc);
    });
    h3c.addEventListener('click', (e) => {
        background.style.display='none';
        hamburger.style.display='none';
        hamburgercarousel.style.display='none';
        hamburgertext.style.display='none';
        formplat.style.display='flex';
        plat.style.display='flex';
        platcol.style.display='flex';
        nonpoutine.style.display='flex';
        platImage=h3i.src;
        platDesc= h3p.innerHTML;
        Commande(platImage,platDesc);
        });
        h4c.addEventListener('click', (e) => {
            background.style.display='none';
            hamburger.style.display='none';
            hamburgercarousel.style.display='none';
            hamburgertext.style.display='none';
            formplat.style.display='flex';
            plat.style.display='flex';
            platcol.style.display='flex';
            poutine.style.display='flex';
            platImage=img.src;
            platDesc= h4p.innerHTML;
            putine2.innerHTML='<audio src="../BOOTSTRAP/Assets/son/balade.mp3" autoplay loop></audio>';
            Commande(platImage,platDesc);
            });
    
function stopPoutine(){
    if (putine2.innerHTML==''){
        putine2.innerHTML='<audio src="../BOOTSTRAP/Assets/son/balade.mp3" autoplay loop></audio>';
    }else{
        putine2.innerHTML=''; 
    }
}