<?php

 require_once 'Date_time.php';
 $dt = new Date_time();
 $error = $dt->checkSubmit();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Add Note</title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark shadow-lg mb-4" style="background-color: #e3f2fd;">

<div class="container">
<body>
        
    <h2>Add Note</h2> 
    </nav>
    <div class="container">
    <h5 class="mb-4"><a href="form2.php">Display Notes</a></h5>
    <br>
    <p><?php echo $error ?></p>

    <form action="#" method="post">

        <div class="mb-2">
            <label for="dateTime" class="mb-2">Date and Time</label>
            <input type="datetime-local" class="form-control shadow-lg p-3 mb-2 bg-body rounded" id="dateTime" name="dateTime">
        </div>

        <div class="mb-2">
            <label for="note" class="mb-2">Note</label>
            <textarea class="form-control shadow-lg bg-body rounded" id="note" name="note" style="height: 500px;"></textarea>
        </div>
    
        <span class="badge rounded-pill bg-primary">
             <button type="submit" class="btn btn-primary" name="addNote">Add Note</button>                
        </span>
    
    
    </form>

    </body>
</div>
<div class="position-relative">
    <div class="position-absolute top-100 start-50"><p>Created by Matt</p></div>
</div>
</html>