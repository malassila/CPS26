<?php

require_once "PdoMethods.php";

class Crud extends PdoMethods{

   public function getFiles(){

       $pdo = new PdoMethods();


       $sql = "SELECT DISTINCT file_name, file_path FROM files ORDER BY file_id";

       $records = $pdo->selectNotBinded($sql);

       if($records == 'error'){
           return 'There has been and error processing your request';
       }
       else {
           
            $list = '<ul>';
            foreach ($records as $row){
                $list .= "<li><a target='_blank' href={$row['file_path']}>{$row['file_name']}</li>";
            
            $list .= '</ul>';
            return $list;
           }

       }
   } 

   public function addFile(){
  
       $pdo = new PdoMethods();

       $sql = "INSERT INTO files (file_name, file_path) VALUES (:filename, :path)";
  
	    /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
	    $bindings = [
			[':filename',$_POST['filename'],'str'],
            [':path','/home/m/a/malassila/public_html/assignment7/files/newsletterform1.pdf']
		];

             return "The file has been added successfully.";
       }
   }

   function displayLinks($records){
       $list = '<ul>';
       foreach ($records as $row){
           $list .= "<li><a target='_blank' href={$row['file_path']}>{$row['file_name']}</li>";
       }
       $list .= '</ul>';
       return $list;
    }


?>