<?php
$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);
$espaces="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
ksort($departements);
foreach($departements as $cle=>$valeur)
{
    echo $cle . ': <br>';
    foreach($valeur as $region=>$departement)
    {
    echo $espaces.$departement."<br>";
    }
}
echo '<br>';
foreach($departements as $cle=>$valeur)
{
    echo $cle . ':'.count($valeur).'<br>';
    
}


?>