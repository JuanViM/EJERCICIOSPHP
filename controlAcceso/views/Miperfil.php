<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php session_start();?>
<form action="../database/updateUser.php" method="post">
<label for="email">email</label>
<input type="email" name="email" value="<?= $_SESSION['mail'] ?>" readonly>
<label for="name">Nombre: </label>
<input type="text" name="name" id="name">
<label for="name">Apellido: </label>
<input type="text" name="apellido" id="apellido">
<input type="submit" value="Actualizar">
    </form>
    <p><a href="index.php">Volver al inicio</a></p>

    <?php


?>
</body>
</html>