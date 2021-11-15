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
            foreach($_POST as $key => $value){
                echo "<tr><td>$key</td><td>$value</td>";
            }
        ?>
        
        </table>
    </html>
    
    <form action="" method="post">
        <input type="text" name="nom" requierd autofocus>
        <input type="text" name="prenom" requierd>
        <input type="text" name="age" requierd>
        <input type="text" name="prison" required>
        <button type="submit" ></button>
    </form>