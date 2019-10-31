<?php
include_once ("config.php");

$login=htmlspecialchars($_POST["login"]);
$password=htmlspecialchars($_POST["password"]);



$fileName="$Email";

if ($login=="login" && $password=="hello")
 {
     echo ("Bonjour Admin, ceci est votre tableau de bord");
     
 }
 else 
 {
    include_once ("login.php");
    
 }

?>
 
