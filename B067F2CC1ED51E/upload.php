<?php
session_start();
if(!isset($_SESSION['userData'])){
	header('location: ../careers/index.php');
}
include_once '../PHP/database.php';
if(isset($_POST['upload']))
{   
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="../cv/";
 
 /* new file size in KB */
 $new_size = $file_size/1024;  
 /* new file size in KB */
 
 /* make file name in lower case */
 $new_file_name = strtolower($file);
 /* make file name in lower case */
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO post (img,title,description) VALUES('$final_file','".$_POST["title"]."','".$_POST["des"]."')";
  mysqli_query($conn,$sql);
  
  echo "File sucessfully upload";
  header('location: index.php'); 
  
 }
 else
 {
  
  echo "Error.Please try again";
		
		}
	}
?>