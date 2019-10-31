<?php
/*
Ecrire une fonction qui retourne vrai si l'entier passé en parametre est un nombre premier
*/

function is_prime(int $n): bool {
  if ( ($n%2 !=1 && $n%2 !=0 ) || ($n%3 !=1 && $n%3 !=0 ) ||( $n%5 !=1 && $n%5  !=0 )|| ($n%7 !=1 && $n%7!=0 ))
  {
    return 1;
  }
  else
  { 
    return 0;
  }
}

  ?>