<?php
$fp = fopen('https://ncode.amorce.org/ressources/Pool/NEW_MS_FULL_STACK/WEB_PHP/liens.txt', "r");


/*while (!feof($fp)) 
{ 
    // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne  
    $ligne = fgets($fp, 4096); 
    echo $ligne."<br>"; 
} */

$file = file_get_contents('https://ncode.amorce.org/ressources/Pool/NEW_MS_FULL_STACK/WEB_PHP/liens.txt');
echo '<br>'.$file.'<br><br>';


$CSV = file_get_contents('https://ncode.amorce.org/customers.csv');
echo $CSV . '<br>';


$CSV2=file('https://ncode.amorce.org/customers.csv');
echo '<br><table border=1><thead><th>Surname</th><th>Firstname</th><th>Email</th><th>Phone</th><th>City</th><th>State</th></thead>';
foreach ($CSV2 as $value)
{
    $ligne = $value; 
    $manip = explode(',',$ligne);
    echo '<tr>';
    foreach ($manip as $value)
    {
        echo '<td>'.$value.'</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo '<br><table border=1><thead><th>Surname</th><th>Firstname</th><th>Email</th><th>Phone</th><th>City</th><th>State</th></thead>';
$CSVfp=fopen('https://ncode.amorce.org/customers.csv','r');
while (!feof($CSVfp)) 
{ 
    // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne  
    $ligne = fgets($CSVfp, 4096); 
    $manip = explode(',',$ligne);
    echo '<tr>';
    foreach ($manip as $value)
    {
        echo '<td>'.$value.'</td>';
    }
    echo '</tr>';
}
echo '</table>'
/*
$manip=explode(' ',$CSV);

foreach ($manip as $value)
{
    
    echo $value.'|';
}

echo '<table border=1>';
echo '<tr>';
foreach ($manip as $value)
{
    $value1=explode(',',$value);
    foreach($value1 as $aled)
    {
        echo '<td>'.$aled.'</td>';
    }  
    echo '</tr> <tr>';
}
echo '</tr></table>';*/
?>