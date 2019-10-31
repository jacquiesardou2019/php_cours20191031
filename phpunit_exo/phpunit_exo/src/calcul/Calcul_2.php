<?php
/*
Si nous listons tous les nombres naturels inférieurs à 10 qui sont des multiples de 3 ou 5, nous obtenons 3, 5, 6 et 9. 
La somme de ces multiples est 23.

Ecrire une fonction qui renvoie la somme de tous les multiples de 3 ou 5 inférieurs au nombre transmis.

Remarque: Si le nombre est un multiple de 3 et 5, ne le comptez qu'une fois.
*/

function solution($number) {
  $a=0;
  $sum=0;
  while ($a < $number)
  {
    echo $a;
    if($a % 3 ==0 && $a % 5==0)
    {
      $sum=$sum+$a;
    }
    elseif ($a % 3 ==0)
      { 
        $sum=$sum+$a;
      }
    elseif ($a % 5 ==0)
      {
      $sum = $sum+$a;
      }
  $a++; 
  }
    
  return $sum;
}

solution (10);
  ?>