<?php
 
 if (strlen(dechex($_POST["color1"])) == 1) { 
     echo "0".dechex($_POST["color1"]); 
    } else { echo dechex($_POST["color1"]); 
    }
if (strlen(dechex($_POST["color2"])) == 1) { 
    echo "0".dechex($_POST["color2"]); 
   } else { echo dechex($_POST["color2"]); 
   }

if (strlen(dechex($_POST["color3"])) == 1) { 
    echo "0".dechex($_POST["color3"]); 
   } else { echo dechex($_POST["color3"]); 
   }

echo $hexa =(dechex($_POST["color1"]) . dechex($_POST["color2"]).dechex($_POST["color3"]));
