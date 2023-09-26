<?php
for ($b=0; $b<10 ; $b++)
{
    if($b==0)
    {

    echo ('<table border="1">');

    }
    echo ('<tr>');

for($a=0 ; $a<10;$a++)
{
    if ($a==0||$b==0)
    {
     if ($b==0&&$a!=0)
     {

     echo ('<th>'.$a.'</th>');
    }
    if ($a==0)
    {
     echo('<th>'.$b.'</th>');
    }
    }
    if($b!=0&&$a!=0)
    {

    echo ('<td>'.$a*$b.'</td>');
    
    if ($a==9)
    {
    echo('</tr>');
    }
    if($b==9&&$a==9)
    {
     echo ('</table>');
    }
}
}
}












?>    