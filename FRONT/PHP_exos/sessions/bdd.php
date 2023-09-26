<?php
session_start();
if ($_REQUEST['login']!=''){
$fp= fopen("bdd.txt", "a");
$ref= file_get_contents('bdd.txt');
echo $ref;
$ref=unserialize($ref);
$_SESSION['checkbdd']=2;
$_SESSION['nbcompte']=count($ref);
echo "<br><br><br>".$_SESSION['nbcompte']."<br><br><br>";



$_REQUEST['password']=password_hash($_REQUEST['password'],PASSWORD_DEFAULT);

foreach($ref as $key=>$value)
{
    if(is_array($value)){
        foreach ($value as $key => $value){
            if (is_array($value)){
                foreach ($value as $key => $value){
                    if ($key=='login')
                    {
                     if ($value==$_REQUEST['login'])
                     {
                     $_SESSION['checkbdd']-=1;
                     }
                    }
                    }
                    if ($key=='mail')
                    {
                     if ($value==$_REQUEST['mail'])
                     {
                     $_SESSION['checkbdd']+=1;
                     }
                    }
                    }
                    
            }
            
        }
    }
    if($_SESSION['checkbdd']==2)
    {
        $ref+=array($_SESSION['nbcompte'] => array(['nom' => $_REQUEST['nom'],'prenom'=>$_REQUEST['prenom'], 'mail' => $_REQUEST['mail'], 'login' => $_REQUEST['login'] , 'password' => $_REQUEST['password']]));

foreach ($ref as $key => $value)
{
    echo $key .'<br>';
    if(is_array($value))
    {
        foreach($value as $key => $value){
             if(is_array($value)){
                foreach($value as $key => $value){
                     echo $key." : ".$value."<br>";
                }
        }
        echo '<br>';
    }
    echo "<br>";
  }
}

ftruncate($fp,0);
$ref=serialize($ref);
fputs($fp,$ref);
fclose($fp);
echo '<br>cliquez <a href="prototype.php"><input type="button" value="ici"></a>pour allez sur le prototype.';
      

    }else
    {
        echo '<br> login ou email déjà présente dans la base de donnée, veuillez vous réinscrire.';
    }
}else{
    echo 'You\'re not supposed to be here, heading you back to login_form';
    header ("Refresh: 3;URL=login_form.php");
}
?>