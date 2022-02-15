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
    <form action="../database/insertUsuario.php" method="post">
<label for="email">email</label>
<input type="email" name="email" required>
<label for="password">password: </label>
<input type="password" name="password"required >
<label for="passwordOk">Repetir password: </label>
<input type="password" name="passwordOk"required >
<label for="name">Nombre: </label>
<input type="text" name="name" required>
<label for="apellido">Apellido: </label>
<input type="text" name="apellido"required >
<input type="submit" value="Registrarse">
    </form>
<p><a href="index.php">Volver al inicio</a></p>



</body>


</html>