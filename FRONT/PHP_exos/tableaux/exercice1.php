<?php

$mois = array(
    "Janvier" => "31",
    "Février" => "28",
    "Mars" => "31",
    "Avril"=>"30",
    "Mai"=> "31",
    "Juin" => "30",
    "Juillet"=>"31",
    "Août" =>"31",
    "Septembre"=>"30",
    "Octobre"=>"31",
    "Novembre"=>"30",
    "Décembre"=>"31"

);
foreach($mois as $cle=>$valeur)
{
    echo $cle." : ".$valeur."<br>";
}

arsort($mois);
foreach($mois as $cle=>$valeur)
{
    echo $cle." : ".$valeur."<br>";
}

?>