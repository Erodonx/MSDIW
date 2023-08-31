var verification=document.getElementById('verification');
var img=document.getElementById('img');
var poutine=document.getElementById('putin');
verification.addEventListener("mouseover" , (e) => {
    poutine.innerHTML='<audio src="Assets/son/balade.mp3" autoplay loop></audio>';
    img.src="Assets/gif/wide-putin-awokenRes.gif";
});
verification.addEventListener("mouseout" , (e) => {
    poutine.innerHTML='';
    img.src="Assets/food/resized/Food-Name-433.png";
});