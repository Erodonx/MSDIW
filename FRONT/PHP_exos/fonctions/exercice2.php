<?php
function somme ($tableau)
{
$somme=0;
foreach($tableau as $element)
{
 $somme=$somme+$element;
}
return $somme;
}
$tab= array(4,3,8,2);
$resultat= somme($tab);
echo $resultat;



?>