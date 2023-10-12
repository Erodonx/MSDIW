<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$datecourante = date("Y-m-d-H-i-s");
$fp=fopen("$datecourante.'.txt'","x+");
fputs($fp,"Nom : ".$_REQUEST['nom'] . "\nPrenom : " . $_REQUEST['prenom'] . "\nEmail : " .$_REQUEST['mail'] . "\nTéléphone : ".$_REQUEST['telephone'] . "\nDemande : " .$_REQUEST['demande']);













?>