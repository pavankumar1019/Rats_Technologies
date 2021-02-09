<?php 
session_start();
if(!isset($_SESSION['userData'])){
	header('location: ../careers/index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>File Upload</title>
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
<div class="container my-4 border border-success">
<h5>Upload Your Resume/CV - Rats Technologies</h5>
<br>
<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="hidden" value="<?php 
if(isset($_POST['upload']))
{
    echo $_POST['type'];
}

?>" name="job_profile" required>
<div class="col-12">
    <label for="inputEmail4" class="form-label">Full Name</label>
    <input type="text" name="name" class="form-control" id="inputEmail4" required>
  </div>
<div class="col-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputEmail4" required>
  </div>
  <div class="col-12">
    <label for="inputPassword4" class="form-label">Contact Number</label>
    <input type="number" maxlength="10"  name="contact" class="form-control" id="inputPassword4" required>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Skills</label>
    <input type="text" name="skills" class="form-control" id="inputAddress" placeholder="Eg. Java, PHP, Digital Marketing.." required>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">languages known</label>
    <input type="text" name="languages" class="form-control" id="inputAddress" placeholder="Eg. Hindi, Kannada,Tamil.." required>
  </div>
  <div class="col-12">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" name="city" class="form-control" id="inputCity" required>
  </div>
  <div class="col-12">
  <label for="inputCity" class="form-label">State</label>
    <input type="text" name="state" class="form-control" id="inputCity" required>
  </div>
  <div class="col-12">
  <label for="formFile" class="form-label">Upload Resume/CV</label>
  <input class="form-control" id="formFile" type="file"  name="file" accept="application/pdf" required/>
  </div>
  <br>
  <div class="col-12">
  <button type="submit" class="btn btn-primary"  name="upload">Submit</button>
  </div>
  <br>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</div>
</body>
</html>