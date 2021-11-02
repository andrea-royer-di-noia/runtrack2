<?php
$bol = True;
$chiffre = 8;
$phrase = "Hello World !";
$virgule = 1.234;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Type</td>
            <td>Nom</td>
            <td>valeur</td>
        </tr>
        <tr>
            <td>booléen</td>
            <td>bol</td>
            <td><?php echo $bol ?></td>
        </tr>
        <tr>
            <td>entier</td>
            <td>chiffre</td>
            <td><?php echo $chiffre ?></td>
        </tr>
        <tr>
            <td>chaine de caracteres</td>
            <td>phrase</td>
            <td><?php echo $phrase ?></td>
        </tr>
        <tr>
            <td>nombre à virgules</td>
            <td>virgule</td>
            <td><?php echo $virgule ?></td>
        </tr>
    </table>
    
</body>
</html>
