<?php

if(count($_POST) > 0){
    require_once 'phpCode.php';
    $addName = new AddNames();
    $output = $addName->addClearNames();
   }else{
       $output = "";
   }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Name Form</title>
</head>
<body>
    <main class="container">     

        <form method="POST" action="form.php">
            <div class="form-control-lg">
                <h1 class="fw-bold" >Add Names</h1>
            
            <!-----------buttons------------>
            
                <button type="submit" class="btn btn-primary btn-lg" name="addName">Add Name</button>
                <button type="submit" class="btn btn-primary btn-lg" name="clearNames">Clear Names</button>
            <br>
            <!-----------name input------------>
                <label class="form-control-med" for="name">Enter Name<br>
                <input class="form-control-med" type="text" id="name" name="fullName" style="width: 1000px;" placeholder="Enter your name"/></label>  
            <br>
            <!-----------text output------------>
                <text class="form-control-med" for="listname">List of Names<br>
                <textarea class="form-control-med" id="listname" name="listName" rows="30" cols="1" style="width: 1000px;"><?php echo $output?></textarea>  
                <!-- <textarea style="height: 500px;" class="form-control" id="namelist" name="namelist"><?php echo $output ?></textarea> -->
            </div>
        </form>
    </main>
</body>
</html>