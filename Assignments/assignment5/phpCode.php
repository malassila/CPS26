<?php

class AddFolder{

    function add(){

        $folderName = $_POST['folderName'];
        $path = "/var/www/html/directories/".$folderName;
        $contents = $_POST['fileText'];


        if(file_exists($path)){

            return "A directory already exists with that name.";

        }
        
        else{

            mkdir($path,0777);
            $handle = fopen($path."/README.txt", "w");
            fwrite($handle,$contents);
            fclose($handle);
            $msg = "File and directory were created!"."<br><br><a href="."http://143.244.151.213/directories/".$folderName."/README.txt>Path where file is located</a>";
        return $msg;
        }
    }

}


?>