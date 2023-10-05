<?php
$fp= fopen("bdd.txt", "r");
$ref= file_get_contents('bdd.txt');
$ref=unserialize($ref);
$keyCor=-1;
$verif=false;
$_SESSION['recuppswd']=0;
$pswd=false;
foreach($ref as $key=>$value)
{
    if ($_SESSION['recuppswd']==1&&($verif==false))
    {
     $keyCor=$key-1;
     echo $keyCor;
     $verif=true;
    }
    if(is_array($value)){

        foreach ($value as $key => $value){

                    if ($key=='login')
                    {
                     if ($value==$_REQUEST['login'])
                     {
                     $_SESSION['recuppswd']=1;
                     }
                    }
                    }
                    
            }
          
        }
if ($verif==false)
{
    $keyCor=count($ref)-1;
     echo $keyCor;
     $verif=true;
}

if($_SESSION['recuppswd']==1)
          {
            $pswd=true;
          }

if ($pswd==true)
{

echo 'login :'.$_REQUEST['login'].' trouvé dans la base, veuillez saisir le mot de passe dans le champ ci-dessous.<br><form action ="pswd_bdd.php" method="post"> 
<label for="password">password :</label>
  <input type="password" name="password" placeholder="password">
<br>
<input type="hidden" name="secret" value="'.$keyCor.'" />
<input type="submit" value="Verifier">
        <input type="reset" value="ANNULER">

</form>';

}else{
    echo 'login absent de la base de donnée, retour à la page de connexion';
    header ("Refresh: 3;URL=login_form.php");
}


















?>