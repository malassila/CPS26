<?php

$list = "<ul>";

for ($i = 1; $i < 5; $i++){

    $list .= "<li>$i</li>";
        $list .= "<ul>";  
            for ($j = 1; $j < 6; $j++){

                $list .= "<li>$j</li>";

            } 

        $list .= "</ul>";  
      
} 
$list .= "</ul>";  



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordered List</title>
</head>
<body>
    <p><?php echo $list ?></p>
</body>
</html>