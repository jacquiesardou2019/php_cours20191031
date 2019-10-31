<?php

/* 
   Votre objectif est de créer une fonction qui supprime les premier et dernier caractères d'une chaîne. 
   Vous n'avez pas à vous soucier des chaînes avec moins de deux caractères. 
 */

function remove_char(string $s): string {
    $rest = substr($s, 1, -1); // quand le troisième paramètre il suffit de mettre un moins devant pour partir de la fin
    return $rest;

}