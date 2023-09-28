<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<form action ="login_script.php" method="post"> 
<label for="login">Login :</label><div class="input-group w-25">
  <input type="text" class="form-control" name="login" placeholder="Login" aria-label="Recipient's username" aria-describedby="basic-addon2">
</div><br>
        <label for="password">Password :</label><div class="input-group w-25">
  <input type="password" name="password" id="survol" class="form-control" placeholder="Password" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" id="button"type="button">A</button>
  </div>
</div>
        <input type="submit" value="CONNEXION">
        <input type="reset" value="ANNULER">

</form>

<a href="inscription.php"><input type="button" value="Inscription"></a>
<a href="recup_pswd.php"><input type="button" value="mot de passe oublié"></a>
<?php

session_start();
//if (!isset ($_SESSION['test']))
//{
/* 
    $_SESSION['test']='V';
    $_SESSION['nbcompte']=0;
    $_SESSION['user']=array($_SESSION['nbcompte'] => array(['nom' => 'NA','prenom'=>'NA', 'mail' => 'NA', 'login' => 'admin' , 'password' => password_hash('admin',PASSWORD_DEFAULT)]));
    foreach ($_SESSION['user'][$_SESSION['nbcompte']] as $key => $value)
    {
        echo $key .'<br>';
        if(is_array($value)){
            foreach($value as $key => $value){
                 echo $key." : ".$value."<br>";
            }
        }
        echo "<br>";
      }
//}
echo 'allo!!';
$fp= fopen("bdd.txt", "a");
$ref = serialize($_SESSION['user']);
echo $ref;
fputs($fp,$ref);
//fclose($fp);
/*file_put_contents("/var/www/html/sessions/bdd.txt",$ref);
$ref2 = file_get_contents('/var/www/html/sessions/bdd.txt');
$ref2=unserialize($ref2);
echo $ref2;
foreach ($ref2 as $key => $value)
{
    echo $key .'<br>';
    if(is_array($value)){
        foreach($value as $key => $value){
             echo $key." : ".$value."<br>";
        }
    }
    echo "<br>";
  }*/
 
 /*$ref= file_get_contents('bdd.txt');
 echo $ref;
 $ref=unserialize($ref);
 foreach ($ref as $key => $value)
 {
     echo $key .'<br>';
     if(is_array($value)){
    foreach ($value as $key => $value)
    {

   
        if(is_array($value)){

         foreach($value as $key => $value){
              echo $key." : ".$value."<br>";
         }
        }
     }
    }
     echo "<br>";
   }*/
?>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="login_form.js" defer></script>    
</body>
</html>
