<?php
$str = 'Tous ces instants seront
perdus dans le temps comme les larmes sous la pluie.';

for($a = 0; $a < 77; $a++){
    if ($a % 2 == 0) {
        echo $str[$a];
    }
}
