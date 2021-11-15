<?php

$str = 'Dans l\'espace, personne ne
vous entend crier';

$a = 0;

for($i = 0; isset($str[$i]); $i++){
    $a = ($a + 1);
}

echo $a;