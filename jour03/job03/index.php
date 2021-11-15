<?php
$str = 'I\'m sorry Dave I\'m affraid I can\'t do that';

for ($i=0; isset($str[$i]); $i++ ){

    if ($str[$i] == "a"  || $str[$i] == "e" || $str[$i] == "i" || $str[$i] == "I" || $str[$i] == "o" || $str[$i] == "u" || $str[$i] == "y" ){

    echo $str[$i]; 
    }
 }

 
