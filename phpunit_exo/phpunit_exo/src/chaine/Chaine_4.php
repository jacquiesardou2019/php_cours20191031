<?php

/* 
   Ecrire une fonction capable de transformer une chaîne en un nombre. 
   Remarque: ne vous inquiétez pas, toutes les entrées sont des chaînes et 
   chaque chaîne est une représentation parfaitement valide d'un nombre entier. 
  */

  function stringToNumber($str) {
    return intval ($str);
  }

  /* 
   Ecrire une fonction capable de transformer une nombre en une chaine. 
   Remarque: ne vous inquiétez pas, toutes les entrées sont des nombres 
  */
  function numberToString($num)
  {
    return strval ($num );
  }