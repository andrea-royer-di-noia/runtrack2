<?php

for ($a = 0; $a <= 100; $a++){
    if($a <= 20){
        echo "<i>$a</i><br>";
}
elseif ($a == 42){
    echo "La Plateforme_<br>";
}
elseif (25 <= $a && $a <= 50) {
    echo "<u>$a</u><br>";
}
}