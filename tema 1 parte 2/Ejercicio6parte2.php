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

$personas=[
    "Juan"=>["altura"=>175,"pelo"=>"rubio","ojos"=>"marrones"],
    "María"=>["altura"=>168,"pelo"=>"castaño","ojos"=>"marrones"],
    "Pedro"=>["altura"=>180,"pelo"=>"castaño","ojos"=>"verdes"]
];

echo " La altura de Juan es " . $personas["Juan"]["altura"] . "<br>";
echo "Los ojos de María son " . $personas["María"]["ojos"] . "<br>";
echo "El pelo de pedro es " . $personas["Pedro"]["pelo"] . "<br>";

?>
</body>
</html>