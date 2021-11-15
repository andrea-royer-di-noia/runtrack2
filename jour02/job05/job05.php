<?php
for($a=0;$a<1000;$a++) { // a prend 0, tant que a est inferieur a 1000 on rejoue la fonction, a chaque tour on incremante a
    $b = 0; // b prend la valeur de 0
    for($c=1;$c<=$a;$c++) {  //c prend 1, tant que c est inferieur ou egal à a on rejoue la fonction, a chaque tour on incremante c
        if($a%$c==0){ // si a diviser par c est egale à 0 alors on incremante b
            $b++;
        }
    }
    if ($b == 2) // si b est egale à 2 alors on echo a
        echo "$a<br/>";
}