<html>
    <head>
        <link rel="stylesheet" href="job.css">
    </head>
    <table>
        <tr>
            <td>Arguments</td>
            <td>Valeurs</td>
        </tr>
        <?php
        foreach($_GET as $key => $value){
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        ?>
        
    </table>
</html>

<form action="" method="get">
    <input type="text" name="nom">
    <input type="text" name="prenom">
    <input type="text" name="age">
    <input type="text" name="prison">
    <button type="submit" ></button>
</form>