<?php
session_start();
$fp= fopen("bdd.txt", "a");
$ref= file_get_contents('bdd.txt');
$ref=unserialize($ref);
$verif2=false;
function complex_password($code)
{
    $lettre=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    $nombre=array('1','2','3','4','5','6','7','8','9','0');
 if(strlen($code)>7)
 {
foreach($lettre as $element)
{
 if(strpos($code,$element)!==false)
{
 echo 'bon ';
 foreach($lettre as $lower)
 {
    if(strpos($code,strtolower($lower))!==false)
    {
        echo 'bon ';
        foreach($nombre as $v)
        {
            if(strpos($code,$v)!==false)
            {
             echo 'bon ';
             $verif=true;
             return $verif;
            }else{
                $verif=false;
            }
        }
    }else{
        $verif=false;
    }
 }

}else{
    $verif=false;
}
}
 }else{
    $verif=false;
 }
 return $verif;
}
echo $_REQUEST['password'];
$testfinal=complex_password($_REQUEST['password']);
if ($testfinal==true)
{
 echo $_REQUEST['secret'];

 foreach($ref as $key=>$value)
{
    if ($_REQUEST['secret']==$key)
    {
     $verif2=true;
    }
    if(is_array($value)){
        foreach ($value as $key => $value){
                    if ($key=='password')
                    {
                     if ($verif2==true)
                     {
                     echo $value;
                     $ref[$_REQUEST['secret']]['password']=password_hash($_REQUEST['password'],PASSWORD_DEFAULT);
                     echo $value;
                     $verif=false;
                     }
                    }
                    }
                    
            }
          
        }
ftruncate($fp,0);
$ref=serialize($ref);
fputs($fp,$ref);
fclose($fp);
}else{
    echo 'le mot de passe ne correspond pas aux critères demandés, à savoir 8 caractères, 1 majuscule et une minuscule minimum et 1 chiffre, retour au formulaire de connexion.';
    header ("Refresh: 300;URL=login_form.php");
}

?>