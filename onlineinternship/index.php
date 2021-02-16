<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
<div class="container-fluid">
<div class="d-flex justify-content-center p-2">
<h1>Rats Technologies</h1>
 <br>
 <h4>Bangarpet</h4>
 <h6>ratstechnologies.com</h6>
 <h6> phone:- 9900651851</h6>
</div>
</div>
<div class="container-fluid">

<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Full name</label>
    <input type="text" class="form-control" id="validationCustom01" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Email</label>
    <input type="email" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Mobile Number</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">+91</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Enter mobile number.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Percentage Obtained in SSLC (%)</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide Percentage Obtained in SSLC (%).
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Percentage Obtained in PUC/+2 (%)</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide Percentage Obtained in PUC/+2 (%).
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom03" class="form-label">Course Obtained in UG</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide Course Obtained in UG.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom03" class="form-label">Percentage Obtained in UG (%)</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide Percentage Obtained in UG (%).
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom03" class="form-label">Course Obtained in PG</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide Course Obtained in PG.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom03" class="form-label">Percentage Obtained in PG (%)</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide Percentage Obtained in PG (%).
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Address</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide Address.
    </div>
  </div>
 
  <div class="col-md-6">
    <label for="validationCustom05" class="form-label">Upload CV/Resume</label>
    <input class="form-control form-control-lg" id="validationCustom05" type="file" required/>
    <div class="invalid-feedback">
      Please upload CV/Resume.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        I Agree to upload my Resume/CV to this Portal
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
</body>
</html>