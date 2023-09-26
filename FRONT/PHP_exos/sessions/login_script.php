<?php
session_start();

$_SESSION["login"]=$_REQUEST['login'];
$_SESSION["password"]=$_REQUEST['password'];
$_SESSION['double']=0;
$fp= fopen("bdd.txt", "r");
$ref= file_get_contents('bdd.txt');
$ref=unserialize($ref);
$_SESSION['auth']='non!';
$loginv=false;
$authentif=false;

echo "session ID : ". session_id();
echo '<br> Vérifions dans la base de donnée hunhunhun.<br><br>';

/*foreach ($ref as $key => $value)
{
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
}*/
foreach($ref as $key=>$value)
{
    if(is_array($value)){
        foreach ($value as $key => $value){
            if (is_array($value)){
                foreach ($value as $key => $value){
                    if ($key=='login')
                    {
                     if ($value==$_REQUEST['login'])
                     {
                     $_SESSION['double']+=1;
                     $loginv=true;
                     }else{
                        $_SESSION['double']=0;
                    }
                    }
                    if ($key=='password')
                    {
                     if (password_verify($_REQUEST['password'],$value)==true)
                     {
                     $_SESSION['double']+=1;
                     }else{
                        $_SESSION['double']=0;
                    }
                    }
                    }
                    
            }
            if($_SESSION['double']==2)
          {
            $authentif=true;
          }
          
        }
    }
}
if(($loginv==true)&&($authentif==false))
{
 echo '<br> Mot de passe incorrect.';
}
if ($authentif==true)
{
 echo '<br>Référence trouvée dans la base, bienvenue cher utilisateur.';
 $_SESSION['auth']='ok';
}else if($authentif==false&&$login=false){
    unset($_SESSION["login"]);
    unset($_SESSION["password"]);
    unset($_SESSION["auth"]);

    if (ini_get("session.use_cookies")) 
    {
        setcookie(session_name(), '', time()-42000);
    }

    session_destroy();
    echo '<br> session ID : ' . session_id();
}
if (isset ($_SESSION['auth']))
{
    if ($_SESSION['auth']=='ok')
    {
     echo '<br> Session initialisée cliquée <a href="login_bravo.php"><input type="button" value="ici"></a> pour la suite ou attendez quelques instants...';
     header ("Refresh: 5;URL=login_bravo.php");
    }else{
        if ($loginv==false)
    {
    echo '<br> Vous n\'êtes pas enregistré dans la base de donnée cliquez <a href="login_form.php"><input type="button" value="ici"></a>pour retourner vous authentifier.';
     echo '<br> LOOP DETECTED ERROR destruction de session incoming';
     unset($_SESSION["login"]);
     unset($_SESSION["password"]);
     unset($_SESSION["auth"]);
 
     if (ini_get("session.use_cookies")) 
     {
         setcookie(session_name(), '', time()-42000);
         session_destroy();
     }
 
     header ("Refresh: 5;URL=login_form.php");
     echo '<br> session ID : ' . session_id();
    }else
{
    echo '<br> Veuillez vous authentifier à nouveau! en cliquant <a href="login_form.php"><input type="button" value="ici"></a>';
    echo '<br> LOOP DETECTED ERROR destruction de session incoming';
     unset($_SESSION["login"]);
     unset($_SESSION["password"]);
     unset($_SESSION["auth"]);
 
     if (ini_get("session.use_cookies")) 
     {
         setcookie(session_name(), '', time()-42000);
         session_destroy();
     }
     header ("Refresh: 5;URL=login_form.php");
}   

    }
}
?>
