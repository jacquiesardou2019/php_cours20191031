<?php
/*
Ecrire une fonction qui retourne vrai si l'entier passé est un palindromme et false sinon
*/

function palindrome($num) {
  return $num == strrev ($num) ;
}

  ?>