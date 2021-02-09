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
</body>
</html>