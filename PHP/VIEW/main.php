<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<?php

?>
<body>
  <form class="form" action="index.php?page=ActionBDD" method="POST">
    <input type="text" name="projectName" placeholder="Nom du projet">
    <br>
    <input type="text" name="servername" value="localhost" placeholder="Serveur de la Bdd">
    <br>
    <input type="text" name="userBdd" value="root" placeholder="User de la Bdd">
    <br>
    <input type="text" name="passBdd" placeholder="Password de la Bdd">
    <br>
    <input type="text" name="portBdd" value="3306" placeholder="Port de la Bdd">
    <br>
    <input type="text" name="nomBdd" value="personnes" placeholder="Nom de la Bdd">
    <br>
    <input type="text" name="pathFramework" value="D:\Dev" placeholder="Chemin du projet">
    <br>
    <button type="submit">Création</button>
  </form>
</body>

</html>