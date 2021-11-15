
<?php

$output ="";
require_once 'listFilesProc.php';
$listFiles = new FileList();

$output = $listFiles->ListFiles();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container fluid">
	
	<div class="bg-success p-2 text-dark bg-opacity-10">
		<h1>File List</h1>

		<a href="form.php">Back to File Upload Form</a>  

		<br><?php echo $output ?>
	</div>

</body>
</html>