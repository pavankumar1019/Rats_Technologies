<?php 
session_start();
if(!isset($_SESSION['userData'])){
	header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>File Upload</title>
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
<div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Contact</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Skills</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Eg. Java, PHP, Digital Marketing..">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">languages known</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Eg. Hindi, Kannada,Tamil..">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
  <label for="inputCity" class="form-label">State</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-2">
  <label for="formFile" class="form-label">Upload Resume/CV</label>
  <input class="form-control"  id="formFile" type="file" name="file" />
  </div>
  <div class="col-12">
  <button type="submit" class="btn btn-primary"  name="upload">upload</button>
  </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>