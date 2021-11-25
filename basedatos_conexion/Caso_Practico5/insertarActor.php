<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="insertarActores.php" method="post">
        <p>Selecciona la pelicula que desea buscar sus actores</p>
        <select name="peli">
        <?php
        $mysqli = new mysqli("localhost","root","root","sakila",3306);
          $query = $mysqli -> query ("SELECT * FROM film");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores['film_id'].'">'.$valores['title'].'</option>';
        }
        ?>
        </select>
        <p><input type="submit" value="Buscar"></p>
    </form>
    </form>
</body>
</html>

