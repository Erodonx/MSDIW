var verification=document.getElementById('verification');
var poutine=document.getElementById('putin');
verification.addEventListener("mouseover" , (e) => {
    poutine.innerHTML='<audio src="Assets/son/balade.mp3" autoplay></audio>';
});
verification.addEventListener("mouseout" , (e) => {
    poutine.innerHTML='';
});
