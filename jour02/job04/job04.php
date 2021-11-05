<?php
for($a = 0; $a <= 100; $a++){
    if((!($a%3)) && (!($a%5))){
        echo "Fizzbuzz<br>";
    }
    elseif (!($a%5)) {
        echo "Buzz<br>";
    }
    elseif (!($a%3)){
        echo "Fizz<br>";
    }
    else{
    echo "$a<br>";
    }
}