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
let sp1i=document.getElementById('sp1i');
let sp1p=document.getElementById('sp1p');
let sp1c=document.getElementById('sp1c');
let sp2i=document.getElementById('sp2i');
let sp2p=document.getElementById('sp2p');
let sp2c=document.getElementById('sp2c');
let sp3i=document.getElementById('sp3i');
let sp3p=document.getElementById('sp3p');
let sp3c=document.getElementById('sp3c');
let sp4i=document.getElementById('sp4i');
let sp4p=document.getElementById('sp4p');
let sp4c=document.getElementById('sp4c');
let background=document.getElementById('platbg');
let hamburgertext=document.getElementById('hamburgertext');
let spetext=document.getElementById('spetext');
let spe=document.getElementById('spe');
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
spe.style.display='none';
spetext.style.display='none';
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
    spe.style.display='none';
spetext.style.display='none';
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
        spe.style.display='none';
spetext.style.display='none';
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
            spe.style.display='none';
            spetext.style.display='none';
            formplat.style.display='flex';
            plat.style.display='flex';
            platcol.style.display='flex';
            poutine.style.display='flex';
            platImage=img.src;
            platDesc= h4p.innerHTML;
            putine2.innerHTML='<audio src="../BOOTSTRAP/Assets/son/balade.mp3" autoplay loop></audio>';
            Commande(platImage,platDesc);
            });

            sp1c.addEventListener('click', (e) => {
                background.style.display='none';
                hamburger.style.display='none';
                hamburgercarousel.style.display='none';
                spe.style.display='none';
                spetext.style.display='none';
                hamburgertext.style.display='none';
                formplat.style.display='flex';
                plat.style.display='flex';
                platcol.style.display='flex';
                nonpoutine.style.display='flex';
                platImage=sp1i.src;
                platDesc= sp1p.innerHTML;
                nonpoutine.display='flex';
                Commande(platImage,platDesc);
                });
                sp2c.addEventListener('click', (e) => {
                    background.style.display='none';
                    hamburger.style.display='none';
                    hamburgercarousel.style.display='none';
                    hamburgertext.style.display='none';
                    spe.style.display='none';
                spetext.style.display='none';
                    formplat.style.display='flex';
                    plat.style.display='flex';
                    platcol.style.display='flex';
                    nonpoutine.style.display='flex';
                    platImage=sp2i.src;
                    platDesc= sp2p.innerHTML;
                    Commande(platImage,platDesc);
                    });
                    sp3c.addEventListener('click', (e) => {
                        background.style.display='none';
                        hamburger.style.display='none';
                        hamburgercarousel.style.display='none';
                        spe.style.display='none';
                spetext.style.display='none';
                        hamburgertext.style.display='none';
                        formplat.style.display='flex';
                        plat.style.display='flex';
                        platcol.style.display='flex';
                        nonpoutine.style.display='flex';
                        platImage=sp3i.src;
                        platDesc= sp3p.innerHTML;
                        Commande(platImage,platDesc);
                        });
                        sp4c.addEventListener('click', (e) => {
                            background.style.display='none';
                            hamburger.style.display='none';
                            hamburgercarousel.style.display='none';
                            hamburgertext.style.display='none';
                            spe.style.display='none';
                spetext.style.display='none';
                            formplat.style.display='flex';
                            plat.style.display='flex';
                            platcol.style.display='flex';
                            nonpoutine.style.display='flex';
                            platImage=sp4i.src;
                            platDesc= sp4p.innerHTML;
                            Commande(platImage,platDesc);
                            })
    
function stopPoutine(){
    if (putine2.innerHTML==''){
        putine2.innerHTML='<audio src="../BOOTSTRAP/Assets/son/balade.mp3" autoplay loop></audio>';
    }else{
        putine2.innerHTML=''; 
    }
}