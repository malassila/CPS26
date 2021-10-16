<?php
 class AddNames {

     function addClearNames(){
         if(isset($_POST['addName'])){
             
            
            $listName = $_POST['listName'];  
            if($_POST['listName'] != ""){
                $listName .="\n";
            }
             $fullName = $_POST['fullName'];
               
             $name = explode(" ", $fullName);
             if($fullName != ""){
             $fNamelName = $name[1] . ", ". $name[0];
             }else{
                 $fNamelName = "";
             }
              
             $listName .= $fNamelName;

             $nameArray = explode("\n", $listName);
             sort($nameArray);
             $output = implode("\n", $nameArray);
            
         return $output;
            
         }

        elseif(isset($_POST['clearNames'])){
            $output = "";
            return $output;
        }
    }   


}

?>
