<?php
session_start();

$fp= fopen("bdd.txt", "r");
$ref= file_get_contents('bdd.txt');
echo $ref .'<br><br><br>';
$ref=unserialize($ref);
echo '<table border=1><thead><th>ID</th><th>ID2</th><th>NOM</th><th>PRENOM</th><th>E-MAIL</th><th>LOGIN</th><th>MOT DE PASSE</th></thead>';
foreach ($ref as $key => $value)
{
    echo '<tr><td>'.$key .'</td>';
    if(is_array($value))
    {
        foreach($value as $key => $value){
          echo '<td>'.$key.'</td>';
             if(is_array($value)){
                foreach($value as $key => $value){
                     echo "<td>".$value."</td>";
                }
        }
        echo '</tr>';
    }
   
  }
  
}



?>