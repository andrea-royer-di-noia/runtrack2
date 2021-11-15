<?php
$a = 0;
    foreach ($_GET as $key => $value) {
        $a++;
    }
    echo $a;
?>

<form action="" method="get">
    <input type="text" name="input1">
    <input type="text" name="input2">
    <button type="submit" ></button>
</form>