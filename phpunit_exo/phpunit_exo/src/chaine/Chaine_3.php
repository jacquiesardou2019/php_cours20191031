<?php

/* 
   Supprimez les espaces de la chaîne, puis retournez la chaîne résultante. 
 */

function no_space(string $s): string {
    return str_replace (" ","",$s);
   
}