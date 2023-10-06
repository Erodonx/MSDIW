<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$datecourante = date("Y-m-d-H-i-s");
$fp=fopen("$datecourante.'.txt'","x+");
fputs($fp,"Nom : ".$_REQUEST['nom'] . " Prenom : " . $_REQUEST['prenom'] . " Email : " .$_REQUEST['mail'] . " Téléphone : ".$_REQUEST['telephone'] . " Demande : " .$_REQUEST['demande']);













?>