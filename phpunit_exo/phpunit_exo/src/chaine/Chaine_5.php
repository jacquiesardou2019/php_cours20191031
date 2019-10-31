<?php

/* 
Ecrivez une fonction qui contertie un mot en initiales. 
Le mot est composé de deux termes séparés par un espace.
Le résultat doit être deux lettres majuscules avec un point les séparant.

Exemple  : John doe => J.D

*/

  function abbrevName($name)
  {
    $result1 = explode (" ",ucwords($name)); //ucwords met les première lettre des mots en MAJ
    $result = ($result1[0])[0].'.'.($result1[1])[0]);
    return $result;
  }


