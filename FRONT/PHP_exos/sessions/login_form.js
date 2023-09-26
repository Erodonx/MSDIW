test=document.getElementById('survol');
button=document.getElementById('button');


button.addEventListener("click" , (e) => {

if (test.type=="password")
{
    test.type="text";
}else
{
    test.type="password";
}
});
