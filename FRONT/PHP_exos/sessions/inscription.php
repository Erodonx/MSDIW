<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container-fluid bg-dark">
<div class="row justify-content-center d-flex pt-3">
<form class="col-9 text-primary poutine mx-5 my-5 px-5 py-5 align-items-center d-flex flex-column" action="bdd.php" id="form1" method="post">
<label class="pt-3 justify-content-center d-flex" for="login">Login :</label><br><input class="pr-5 w-50 rounded border-primary" type="text" name="login" id="login"
                        placeholder="login">
                        <span class="text-danger" id="defaultlogin"></span><br>
                    <label class="pt-3 justify-content-center d-flex " for="password">Password :</label><br><input class="w-50 pr-5 rounded border-primary" type="password" name="password"
                        placeholder="password" id="password">
                        <span class="text-danger" id="defaultpassword"></span><br>
                    <label  class="pt-3 justify-content-center d-flex "for="password-verif">Confirmez le mot de passe : </label><br><input class="w-50 pr-5 rounded border-primary" type="password" name="password-verif" id="password-verif" placeholder="password"><span class="text-danger" id="defaultverifpassword"></span><br>
<label class="pt-3 justify-content-center d-flex " for="nom">Nom :</label><br> <input class="w-50 pr-5 rounded border-primary" type="text" id="nom" name="nom" placeholder="Dubois"><span class="text-danger" id="defaultnom"></span><br>
<label  class="pt-3 justify-content-center d-flex "for="prenom">Prenom :</label><br> <input class="w-50 pr-5 rounded border-primary" type="text" id="prenom" name="prenom" placeholder="Marc"><span class="text-danger" id="defaultprenom"></span><br>
<label class="pt-3 justify-content-center d-flex " for="mail">E-mail :</label><br> <input class="w-50 pr-5 rounded border-primary" type="mail" id="mail" name="mail" placeholder="marcdubois@afpa.fr"><span class="text-danger" id="defaultmail"></span><br>
<div class="row d-flex py-4">
           <div class="col-4 justify-content-center d-flex">
            <button type="submit" class="btn btn-primary btn-lg">S'INSCRIRE</button>
           </div>
           <div class="col-4"></div>
           <div class="col-4 justify-content-center d-flex">
            <button type="reset" class="btn btn-primary btn-lg">ANNULER</button>
           </div>
        </div>
<div class="row d-flex justify-content-center">
<img class="w-25" id="volume" src="tests/off.png">
<span id="putine"></span>
</div>
</form>
</div>
<?php

session_start();


?>
</div>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="formulaire_script.js" defer></script> 
</body>
</html>
