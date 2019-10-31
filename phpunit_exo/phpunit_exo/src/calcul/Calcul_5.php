<?php
/*
Créer une fonction qui effectue quatre opérations mathématiques de base.

La fonction doit prendre trois arguments - opération (chaîne / caractère), valeur1 (nombre), valeur2 (nombre).
La fonction doit renvoyer le résultat des nombres après l'application de l'opération choisie.*/

function basicOp($op, $val1, $val2)
{
  $resultat = 0;
  switch ($op)
  {
    case '/':
      $resultat = $val1/$val2;
      return $resultat;

    case '+':
    $resultat = $val1+$val2;
    return $resultat;

    case '-':
    $resultat = $val1-$val2;
    return $resultat;

    case '*': 
    $resultat = $val1*$val2; 
    return $resultat; 
  }
}

  ?>