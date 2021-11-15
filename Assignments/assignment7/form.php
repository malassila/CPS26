<?php

$output = "";

if (count($_POST) > 0) {
    require_once 'fileUploadProc.php';
    $upload = new FileUpload();
    $output = $upload->upload();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>File Upload</title>
</head>
<body>
    
<div class="bg-success p-2 text-dark bg-opacity-10">

    <div class="container fluid">

    <h1>File Upload</h1>

    <form action="#" method="post" enctype="multipart/form-data">

        
        
        <p><a href ="list.php">Show File List</a><br><br><?php echo $output;?></p>
        
        <div class="mb-3">
            <label for="filename">File Name</label>
            <input type="text" class="form-control" id="filename" name="filename">
        </div>
        
        <br>
        
        <div class="mb-3">
            <input type="file" id="fileupload" name="fileupload"> 
        </div>
        
        <br>
        
        <div class="btn btn-primary">         
             <button type="submit" class="btn btn-primary" name="upload" value="upload">Upload</button>                
        </div>

    </form>
</div>
</div>
</body>
</html>
