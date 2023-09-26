<?php
session_start();
if (! isset($_SESSION['auth']))
{
    header("Location:login_form.php");
    exit;
}
echo "bravo l'admin " . $_SESSION['login'] . " t'as réussi ton authentification qui aurait cru que tu aurais été capable de taper " .$_SESSION['password'] . " dans le champ password. Quel génie peut retenir un truc pareil! En plus t'es même authentifié regarde c'est " . $_SESSION['auth'];


?>