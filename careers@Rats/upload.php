<?php
session_start();
if(!isset($_SESSION['userData'])){
	header('location: ../careers/index.php');
}
include_once '../PHP/database.php';
if(isset($_POST['upload']))
{   
 
  $name=$_POST['name']; 
  $email=$_POST['email']; 
  $mobile=$_POST['mobile']; 
  $sslcper=$_POST['sslcper']; 
  $pucper=$_POST['pucper']; 
  $courseug=$_POST['courseug']; 
  $ugper=$_POST['ugper']; 
  $coursepg=$_POST['coursepg']; 
  $pgper=$_POST['pgper']; 
  $address=$_POST['address']; 



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
  $sql="INSERT INTO internship_data (name,email,mobile,sslc_per,puc_per,course_ug,ug_per,course_pg,pg_per,address,cv) VALUES('".$_POST["name"]."','".$_POST["email"]."','".$_POST["mobile"]."','".$_POST["sslcper"]."','".$_POST["pucper"]."','".$_POST["courseug"]."','".$_POST["ugper"]."','".$_POST["coursepg"]."','".$_POST["pgper"]."','".$_POST["address"]."','$final_file')";
  mysqli_query($conn,$sql);
  
  
  echo "<script>
alert('Thank You!. Rats technologies will notify updates');
window.location.href='../index.html';
</script>";  
  
 }
 else
 {
  
  echo "Error.Please try again";
		
		}
	}
?>