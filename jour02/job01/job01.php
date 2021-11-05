<?php
for ($nombre = 0; $nombre <= 1337; $nombre++){
    echo $nombre . '<br>';
    if ($nombre == 41){
        echo '<b><u>';
    }
    else{
        echo '</b></u>';
    }
}