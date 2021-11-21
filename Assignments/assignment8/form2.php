<?php

 require_once 'Date_time.php'; 
 $dt = new Date_time(); 
 $table = $dt->filterDates(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Display Notes</title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark shadow-lg mb-4" style="background-color: #e3f2fd;">

<div class="container">
    <body>
        
        <h2>Display Notes</h2> 
        </nav>
        <div class="container">
        <h5 class="mb-4"><a href="form1.php">Add Note</a></h5>

    <form action="#" method="post">

        <div class="mb-2">            
            <label for="begDate" class="mb-2"><b>Beginning Date</b></label>  
            <input type="date" class="form-control shadow-lg p-3 mb-2 bg-body rounded" id="begdate" name="begDate">

        </div>

        
        <div class="mb-2">
            <label for="endDate" class="mb-2"><b>Ending Date</b></label>
            <input type="date" class="form-control shadow-lg p-3 mb-2 bg-body rounded" id="endDate" name="endDate">
        </div>

  <div class="mb-3">

        <span class="badge rounded-pill bg-primary">
             <button type="submit" class="btn btn-primary " name="getNotes" value="getNotes">Get Notes</button>                
        </span>   
    
    </form>

    <br>
    <p><?php echo $table ?></p>
    

    </body>
</div>
<div class="position-relative">
    <div class="position-absolute top-100 start-50"><p>Created by Matt</p></div>
</div>
</html>