<?php
echo ('<h1> Liste des nombres impairs jusqu\'a 150</h1>');
for ($a = 1; $a<150; $a++)
{
    if($a % 2 != 0)
    {
        echo ('|'.$a);
    }
 if ($a==149)
 {
    echo('|');
 }
}
echo('<h1>Liste des nombres premiers jusqu\'a 10000</h1>');
for ($b = 1; $b<10001; $b++)
{
 $c=1;
 $verif=0;
 while($c <= $b)
 {
 if($b % $c == 0)
 {
 $verif=$verif+1;
 }
 if($verif==2&&$c==$b)
 {
 echo ('|'.$b);
 }
 if ($verif==3)
 {
  $c=$b;
 }
 $c=$c+1;
}
}
$nombrepremierparcentaine=0;
$stockagecentaine=0;
$nombrecentaine=0;
echo('<br>');
for ($b = 1; $b<10001; $b++)
{
 if ($b%100==0)
 {
  echo('Il y a '.$nombrepremierparcentaine.' nombre premier dans l\'intervalle ['.($nombrecentaine).'00;'.($nombrecentaine+1).'00]<br>');
  $stockagecentaine=$stockagecentaine+$nombrepremierparcentaine;
  $nombrepremierparcentaine=0;
  $nombrecentaine=$nombrecentaine+1;
 }
 if($b==10000)
 {
 echo('<br> La moyenne de nombre premier est de '.$stockagecentaine/$nombrecentaine);
 }
 $c=1;
 $verif=0;
 while($c <= $b)
 {
 if($b % $c == 0)
 {
 $verif=$verif+1;
 }
 if($verif==2&&$c==$b)
 {
 $nombrepremierparcentaine=$nombrepremierparcentaine+1;
 }
 if ($verif==3)
 {
  $c=$b;
 }
 $c=$c+1;
}
}
?>