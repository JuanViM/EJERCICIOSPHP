<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


// Arreglar en casa.
    $dado = rand(1,6);

    switch ($dado) {
        case '1':
            echo "Uno";
            break;
        case '2':
            echo "Dos";
           break;
        case '3':
        echo "Tres";
            break;
        case '4':
        echo "Cuatro";
            break;
        case '5':
        echo "Cinco";
            break;
        case '6':
        echo "Seis";
            break;     
        
    }

    ?>
</body>
</html>