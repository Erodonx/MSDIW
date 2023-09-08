var verification=document.getElementById('verification');
var img=document.getElementById('img');
var putine=document.getElementById('putin');
verification.addEventListener("mouseover" , (e) => {
    putine.innerHTML='<audio src="../BOOTSTRAP/Assets/son/balade.mp3" autoplay loop></audio>';
    img.src="../BOOTSTRAP/Assets/gif/wide-putin-awokenRes.gif";
});
verification.addEventListener("mouseout" , (e) => {
    putine.innerHTML='';
    img.src="../BOOTSTRAP/Assets/food/resized/Food-Name-433.png";
});