<?php
include("../PHP/database.php");

if(isset($_POST['id'])) {
    $id = $_POST['id']; 

    $sql = "DELETE FROM post WHERE id = $id";
    $retval = mysqli_query($conn,$sql);
    if(! $retval ) {
       die('Could not delete data: ' . mysqli_error());
    }
    if ($retval) {
        echo "Deleted data successfully\n";
        header('location: index.php');
    }
}
?>