<?php
    if(isset($_GET["nombre"])){
        if ((($_GET["nombre"]) % 2 == 0)){
        echo "Nombre pair";}
        else{
            echo "Nombre impair";
        }
    }
?>

<form action="" method="get">
<input type="number" name="nombre">
<button type="submit">Envoyer</button>
</form>