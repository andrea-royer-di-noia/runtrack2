<?php
function bonjour($jour){
    if($jour == true){
        return "Bonjour";
    }
    else{
        return "Bonsoir";
    }
}

$jour = false;

echo bonjour($jour);