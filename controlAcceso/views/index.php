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
    <form action="../database/comprobarUsuario.php" method="POST">
        <label for="usuario">Usuario: </label>
    <input type="text" name="mail">
    <label for="pass">Password: </label>
    <input type="password" name="pass" id="pass">
    <input type="submit" value="Entrar">
    </form>
    <p><a href="registro.php">Registrarse</a></p>
</body>


</html>