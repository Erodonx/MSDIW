<?php
session_start();

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
foreach($_SESSION['user'] as $key=>$value)
{
    if(is_array($value)){
        foreach ($value as $key => $value){
            echo '<br> verif';
            if (is_array($value)){
                foreach ($value as $key => $value){
                    echo '<br> verif';
                    if ($key=='login')
                    {
                     if ($value==$_REQUEST['login'])
                     {
                     $_SESSION['double']+=1;
                     }
                    }
                    if ($key=='password')
                    {
                     if ($value==$_REQUEST['password'])
                     {
                     $_SESSION['double']+=1;
                     }
                    }
                    }
            }
           
        }
    }
}

echo $_SESSION['double'].'cette page sert de test, retour au login_form ASAP';
header ("Refresh: 3;URL=login_form.php");


?>