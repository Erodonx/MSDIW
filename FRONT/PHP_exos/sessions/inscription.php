<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Document</title>
</head>
<body>
<form action="bdd.php" id="form1" method="post"> 
<label for="login">Login :</label><input type="text" name="login" id="login"
                        placeholder="login">
                        <span class="text-danger" id="defaultlogin"></span><br>
                    <label for="password">Password :</label><input type="password" name="password"
                        placeholder="password" id="password">
                        <span class="text-danger" id="defaultpassword"></span><br>
<label for="nom">Nom :</label> <input type="text" id="nom" name="nom" placeholder="Dubois"><span class="text-danger" id="defaultnom"></span><br>
<label for="prenom">Prenom :</label> <input type="text" id="prenom" name="prenom" placeholder="Marc"><span class="text-danger" id="defaultprenom"></span><br>
<label for="mail">E-mail :</label> <input type="mail" id="mail" name="mail" placeholder="marcdubois@afpa.fr"><span class="text-danger" id="defaultmail"></span><br>
        <input type="submit" value="ENVOYER">
        <input type="reset" value="ANNULER">

</form>

<?php

session_start();


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
<script src="formulaire_script.js" defer></script> 
</body>
</html>
