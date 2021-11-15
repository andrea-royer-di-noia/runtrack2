<?php
$nombre=array(200, 204, 173, 98, 171, 404, 459);

foreach($nombre as $oddeven){
    if ($oddeven % 2 == 0) {
        echo "$oddeven est paire<br>";
      } else {
        echo "$oddeven est impaire<br>";
      }
}

