<?php
function occurences($str,$char){
    $i = 0;
    $compt = 0;
    while (isset($str[$i])) {
        if($str[$i] === $char){
            $compt++;
        }
    $i++;
    };
    return $compt;
};

echo occurences('C\'est l\'histoire d\'un clown qui nage dans un ocean de bonheur','c');

