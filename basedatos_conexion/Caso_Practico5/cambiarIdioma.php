<?php
  $mysqli = new mysqli("localhost","root","root","sakila",3306);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<p>Elige el idioma para cambiar
<form  method="post">
<select name="Idioma" >
<option value="1">Ingles</option>
<option value="2">Italiano</option>
<option value="3">Japones</option>
<option value="4">Mandarin</option>
<option value="5">Frances</option>
<option value="6">Aleman</option>
</select>
<br>

<select name="peli">
        <?php
          $query = $mysqli -> query ("SELECT * FROM film");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores['film_id'].'">'.$valores['title'].'</option>';
            
        }
        ?>
        </select>
 
<?php

if($_POST==null){

}else{
    $codigo="UPDATE film set language_id='".$_POST["Idioma"]."'WHERE film_id='".$_POST["peli"]."'";
    mysqli_query($mysqli,$codigo);
    echo "<br>Se realizó la modificacion, actualizé la página POR FAVOR";
}
?>

<br><input type='submit'value='cambiar idioma'>
</form>