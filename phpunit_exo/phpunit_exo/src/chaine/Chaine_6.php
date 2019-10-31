<?php

/* 

Créez une fonction qui traduit une chaîne d'ADN donnée en ARN. (T transformé en U)

Par exemple:
dnaToRna ("GCAT") // => "GCAU"
La chaîne en entrée peut être de longueur arbitraire - en particulier, elle peut être vide. 

*/

  function dnaToRna($str) 
  {
    return str_replace ("T","U",$str);
    
  }

