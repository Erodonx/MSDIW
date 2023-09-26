<?php

function RepertoireCourant ()
{
    $cheminabsolu=getcwd();
    $pos=strrpos($cheminabsolu,'/');
    $cheminrelatif=substr($cheminabsolu,$pos).'/';
    return $cheminrelatif;
}
foreach (glob("*.*") as $f1) {
    if(($f1!= '.') && ($f1!= '..') && ($f1 != '.htaccess') && ($f1!= 'index.php'))
         echo '<a href="'.RepertoireCourant().$f1.'">'.$f1.'</a> ' .date("d-m-Y H:i", filemtime($f1)). '</br>';
}

?>