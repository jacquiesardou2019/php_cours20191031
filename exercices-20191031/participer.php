<?php
include_once ("config.php");

$Email=htmlspecialchars($_POST["Email"]);
$nom=htmlspecialchars($_POST["nom"]);
$prenom=strip_tags($_POST["prenom"]);
echo ($Email."\n".$nom."\n".$prenom."\n");

$fileName="$Email.txt";

 if(!file_exists($fileName)) 
 {
 $retour = -1; 
 } else { file_put_contents ("participants/$Email.txt", $Email.";".$nom.";".$prenom.";");
 }

 //file_put_contents ("participants/".$Email.".txt", $Email.";".$nom.";".$prenom.";");
 readfile('$Email.txt');

?>
 
