<?php
$originalTime = new DateTimeImmutable("2019-01-01 UTC");
$targedTime = new DateTimeImmutable("2019-07-14 UTC");
$interval = $originalTime->diff($targedTime);
echo "nombre de semaines: ", floor($interval->format("%a")/7), "\n";


$dateActuelle = new DateTime();
echo $dateActuelle->format("d/m/Y \n");
$dateFinFormation = new DateTimeImmutable("2023-10-13 UTC");
echo $dateFinFormation->format("d/m/Y \n");
$nbJRestant = date_diff($dateActuelle,$dateFinFormation);
echo "Nombre de jours de formations restants" , $nbJRestant->format("%R%a"), "\n";



function estAnneeBissextile($annee)
{
$estMultipleDeQuatreCent = ( ($annee % 400) == 0);
$estMultipleDeQuatre = ( ($annee % 4) == 0);
$estPasMultipleDeCent = ( ($annee % 100) != 0);
return ( $estMultipleDeQuatreCent || ( $estMultipleDeQuatre &&
$estPasMultipleDeCent ) );
}
$y = date("Y"); // pour les tests modifier manuellement $y
if(estAnneeBissextile($y))
$message = $y." est une année bissextile !<br />";
else $message = $y." n'est pas une année bissextile !<br />";
echo $message;

?>



