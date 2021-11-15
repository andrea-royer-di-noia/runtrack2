<?php
  if(isset($_POST["username"]) && isset($_POST["password"])){ 
if($_POST["username"] == 'John' && $_POST["password"] == 'Rambo'){
        echo 'Cest pas ma guerre';
    }
    else{
        echo 'Votre pire cauchemar';
}
}
?>

<form action="" method="post">
    <label for="username">Pseudo</label>
    <input type="text" name="username">
    <label for="password">Mdp</label>
    <input type="text" name="password">
    <button type="submit">Envoyer</button>
</form>