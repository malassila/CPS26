<?php
 require_once 'Crud.php';
class FileUpload{
    

function upload(){

    require_once 'Crud.php';


// fileupload refers to the name of the file input on the form
if ($_FILES["fileupload"]["error"] == 4){
    return "No file was uploaded. Make sure you choose a file to upload.";
}
elseif($_FILES["fileupload"]["type"] != "application/pdf"){

    return "File needs to be PDF format";
}
elseif  (  $_FILES["fileupload"]["size"]  >  100000  ) {

    return "The file is too large to upload";
}



else{

   $crud = new Crud();
   
   return $crud->addFile();

}


}

}
?>