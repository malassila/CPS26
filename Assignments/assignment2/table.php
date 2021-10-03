<?php

$row = 15; //Adjust the amount of rows 
$col = 5; //Adjust the amount of columns

$rowCnt = 1;
$colCnt = 1;

$table = "<table border=1>";

    while($rowCnt <= $row){
        $table .= "<tr>";
                
        while($colCnt <= $col){
            $table .= "<td>Row ".$rowCnt." "."Cell ".$colCnt."</td>";
            $colCnt++;
         }        
        $table .= "</tr>";
        $rowCnt++;
        $colCnt = 1;
    }
$table .= "</table>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Table</title>
</head>
<body>

    <?php echo $table?>
    
</body>
</html>