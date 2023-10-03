let w1i = document.getElementById('w1i');
let w1p = document.getElementById('w1p');
let w1c = document.getElementById('w1c');
let w2i = document.getElementById('w2i');
let w2p = document.getElementById('w2p');
let w2c = document.getElementById('w2c');
let w3i = document.getElementById('w3i');
let w3p = document.getElementById('w3p');
let w3c = document.getElementById('w3c');
let w4i = document.getElementById('w4i');
let w4p = document.getElementById('w4p');
let w4c = document.getElementById('w4c');
let s1i = document.getElementById('s1i');
let s1p = document.getElementById('s1p');
let s1c = document.getElementById('s1c');
let s2i = document.getElementById('s2i');
let s2p = document.getElementById('s2p');
let s2c = document.getElementById('s2c');
let s3i = document.getElementById('s3i');
let s3p = document.getElementById('s3p');
let s3c = document.getElementById('s3c');
let s4i = document.getElementById('s4i');
let s4p = document.getElementById('s4p');
let s4c = document.getElementById('s4c');
let pi1i = document.getElementById('pi1i');
let pi1p = document.getElementById('pi1p');
let pi1c = document.getElementById('pi1c');
let pi2i = document.getElementById('pi2i');
let pi2p = document.getElementById('pi2p');
let pi2c = document.getElementById('pi2c');
let pi3i = document.getElementById('pi3i');
let pi3p = document.getElementById('pi3p');
let pi3c = document.getElementById('pi3c');
let pi4i = document.getElementById('pi4i');
let pi4p = document.getElementById('pi4p');
let pi4c = document.getElementById('pi4c');
let background = document.getElementById('platbg');
let wrapstext = document.getElementById('wrapstext');
let saladestext = document.getElementById('saladestext');
let salades = document.getElementById('salades');
lizzastext = document.getElementById('pizzastext');
let pizzas = document.getElementById('pizzas');
let wraps = document.getElementById('wraps');
let hamburgercarousel = document.getElementById('hamburgercarousel');
let plat = document.getElementById('plat');
let platcol = document.getElementById('platcol');
let formplat = document.getElementById('formplat');
document.getElementById('lienplat');
document.getElementById('descriptionplat');
var platImage, platDesc;

function Commande(lien, description) {
        lienplat.src = lien;
        descriptionplat.innerHTML = description;
}
w1c.addEventListener('click', (e) => {
    background.style.display = 'none';
    wraps.style.display = 'none';
    hamburgercarousel.style.display = 'none';
    salades.style.display = 'none';
    saladestext.style.display = 'none';
    pizzas.style.display = 'none';
    pizzastext.style.display = 'none';
    wrapstext.style.display = 'none';
    formplat.style.display = 'flex';
    plat.style.display = 'flex';
    platcol.style.display = 'flex';
    platImage = w1i.src;
    platDesc = w1p.innerHTML;
    Commande(platImage, platDesc);
});
w2c.addEventListener('click', (e) => {
    background.style.display = 'none';
    wraps.style.display = 'none';
    hamburgercarousel.style.display = 'none';
    wrapstext.style.display = 'none';
    salades.style.display = 'none';
    saladestext.style.display = 'none';
    pizzas.style.display = 'none';
    pizzastext.style.display = 'none';
    formplat.style.display = 'flex';
    plat.style.display = 'flex';
    platcol.style.display = 'flex';
    platImage = w2i.src;
    platDesc = w2p.innerHTML;
    Commande(platImage, platDesc);
});
w3c.addEventListener('click', (e) => {
    background.style.display = 'none';
    wraps.style.display = 'none';
    hamburgercarousel.style.display = 'none';
    salades.style.display = 'none';
    saladestext.style.display = 'none';
    pizzas.style.display = 'none';
    pizzastext.style.display = 'none';
    wrapstext.style.display = 'none';
    formplat.style.display = 'flex';
    plat.style.display = 'flex';
    platcol.style.display = 'flex';
    platImage = w3i.src;
    platDesc = w3p.innerHTML;
    Commande(platImage, platDesc);
});
w4c.addEventListener('click', (e) => {
    background.style.display = 'none';
    wraps.style.display = 'none';
    hamburgercarousel.style.display = 'none';
    wrapstext.style.display = 'none';
    salades.style.display = 'none'
    saladestext.style.display = 'none';
    pizzas.style.display = 'none';
    pizzastext.style.display = 'none';
    formplat.style.display = 'flex';
    plat.style.display = 'flex';
    platcol.style.display = 'flex';
    platImage = w4i.src;
    platDesc = w4p.innerHTML;
    Commande(platImage, platDesc);
});

s1c.addEventListener('click', (e) => {
    background.style.display = 'none';
    wraps.style.display = 'none';
    hamburgercarousel.style.display = 'none';
    salades.style.display = 'none';
    saladestext.style.display = 'none';
    pizzas.style.display = 'none';
    pizzastext.style.display = 'none';
    wrapstext.style.display = 'none';
    formplat.style.display = 'flex';
    plat.style.display = 'flex';
    platcol.style.display = 'flex';
    platImage = s1i.src;
    platDesc = s1p.innerHTML;
    Commande(platImage, platDesc);
});
s2c.addEventListener('click', (e) => {
    background.style.display = 'none';
    wraps.style.display = 'none';
    hamburgercarousel.style.display = 'none';
    wrapstext.style.display = 'none';
    salades.style.display = 'none';
    saladestext.style.display = 'none';
    pizzas.style.display = 'none';
    pizzastext.style.display = 'none';
    formplat.style.display = 'flex';
    plat.style.display = 'flex';
    platcol.style.display = 'flex';
    platImage = s2i.src;
    platDesc = s2p.innerHTML;
    Commande(platImage, platDesc);
});
s3c.addEventListener('click', (e) => {
    background.style.display = 'none';
    wraps.style.display = 'none';
    hamburgercarousel.style.display = 'none';
    salades.style.display = 'none';
    saladestext.style.display = 'none';
    pizzas.style.display = 'none';
    pizzastext.style.display = 'none';
    wrapstext.style.display = 'none';
    formplat.style.display = 'flex';
    plat.style.display = 'flex';
    platcol.style.display = 'flex';
    platImage = s3i.src;
    platDesc = s3p.innerHTML;
    Commande(platImage, platDesc);
});
s4c.addEventListener('click', (e) => {
    background.style.display = 'none';
    wraps.style.display = 'none';
    hamburgercarousel.style.display = 'none';
    wrapstext.style.display = 'none';
    salades.style.display = 'none';
    saladestext.style.display = 'none';
    pizzas.style.display = 'none';
    pizzastext.style.display = 'none';
    formplat.style.display = 'flex';
    plat.style.display = 'flex';
    platcol.style.display = 'flex';
    platImage = s4i.src;
    platDesc = s4p.innerHTML;
    Commande(platImage, platDesc);
})
pi1c.addEventListener('click', (e) => {
    background.style.display = 'none';
    wraps.style.display = 'none';
    hamburgercarousel.style.display = 'none';
    salades.style.display = 'none';
    saladestext.style.display = 'none';
    pizzas.style.display = 'none';
    pizzastext.style.display = 'none';
    wrapstext.style.display = 'none';
    formplat.style.display = 'flex';
    plat.style.display = 'flex';
    platcol.style.display = 'flex';
    platImage = i1i.src;
    platDesc = pi1p.innerHTML;
    Commande(platImage, platDesc);
});
pi2c.addEventListener('click', (e) => {
    background.style.display = 'none';
    wraps.style.display = 'none';
    hamburgercarousel.style.display = 'none';
    wrapstext.style.display = 'none';
    salades.style.display = 'none';
    saladestext.style.display = 'none';
    pizzas.style.display = 'none';
    pizzastext.style.display = 'none';
    formplat.style.display = 'flex';
    plat.style.display = 'flex';
    platcol.style.display = 'flex';
    platImage = pi2i.src;
    platDesc = pi2p.innerHTML;
    Commande(platImage, platDesc);
});
pi3c.addEventListener('click', (e) => {
    background.style.display = 'none';
    wraps.style.display = 'none';
    hamburgercarousel.style.display = 'none';
    salades.style.display = 'none';
    saladestext.style.display = 'none';
    pizzas.style.display = 'none';
    pizzastext.style.display = 'none';
    wrapstext.style.display = 'none';
    formplat.style.display = 'flex';
    plat.style.display = 'flex';
    platcol.style.display = 'flex';
    platImage = pi3i.src;
    platDesc = pi3p.innerHTML;
    Commande(platImage, platDesc);
});
pi4c.addEventListener('click', (e) => {
    background.style.display = 'none';
    wraps.style.display = 'none';
    hamburgercarousel.style.display = 'none';
    wrapstext.style.display = 'none';
    salades.style.display = 'none';
    saladestext.style.display = 'none';
    pizzas.style.display = 'none';
    pizzastext.style.display = 'none';
    formplat.style.display = 'flex';
    plat.style.display = 'flex';
    platcol.style.display = 'flex';
    platImage = pi4i.src;
    platDesc = pi4p.innerHTML;
    Commande(platImage, platDesc);
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