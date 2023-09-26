<?php
session_start();
$_SESSION['nbcompte']+=1;
$_REQUEST['password']=password_hash($_REQUEST['password'],PASSWORD_DEFAULT);
echo $_SESSION['nbcompte'];
$_SESSION['user']+=array($_SESSION['nbcompte'] => array(['nom' => $_REQUEST['nom'],'prenom'=>$_REQUEST['prenom'], 'mail' => $_REQUEST['mail'], 'login' => $_REQUEST['login'] , 'password' => $_REQUEST['password']]));

foreach ($_SESSION['user'] as $key => $value)
{
    echo $key .'<br>';
    if(is_array($value)){
        foreach($value as $key => $value){
             if(is_array($value)){
                foreach($value as $key => $value){
                     echo $key." : ".$value."<br>";
                }
        }
        echo '<br>';
    }
    echo "<br>";
  }
}
echo '<br>cliquez <a href="prototype.php"><input type="button" value="ici"></a>pour allez sur le prototype.';
header("Location:login_form.php");
exit;
?>