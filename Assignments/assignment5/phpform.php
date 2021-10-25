<?php

if(isset($_POST['add'])){
    require_once 'phpCode.php';
    $addFolder = new AddFolder();
    $output = $addFolder->add();
   }else {
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
    <title>File and Directory Assignment</title>
</head>
<body>
    <main class="container">
    <form method="POST" action="#">
        <div class="form-control-lg">
            <h1 class="fw-bold" >File and Directory Assignment</h1>
            <label>Enter a folder name and the contents of the file. Folder names should contain alpha numeric characters only.<br><br>
            <label><?php echo $output?><br><br>

                    <label class="form-control-med" for="folder">Folder Name<br>
                    <input class="form-control-med" type="text" id="folder" name="folderName" style="width: 1000px;" /></label>
                    
                    <br>
                    
                    <text class="form-control-med" for="readme">File Content<br>
                    <textarea class="form-control-med" id="readme" name="fileText" rows="10" cols="1" style="width: 1000px;"></textarea>  

                    <br>

                    <button type="submit" class="btn btn-primary btn-lg" name="add">Submit</button>
                    
                </div>
            </form>
</main>
</body>
</html>
