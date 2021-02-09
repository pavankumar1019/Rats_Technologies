<?php 
session_start();
if(!isset($_SESSION['userData'])){
	header('location: ../careers/index.php');

}

include("../PHP/database.php");
$sql = "SELECT * FROM post";
$result = $conn->query($sql);

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Careers with Rats Technologies</title>
  <link rel="stylesheet" href="./SCSS/index.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>
    @media only screen and (max-width: 749px)  {
        /* For mobile phones: */
       .img{
          margin-left: 85px;
       }
      }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">RatsTechnologies</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <div class="mx-auto">
        <!-- <form class="d-flex">
            <input class="form-control mr-2" type="search" placeholder="Search Here" aria-label="Search" style="    min-width: 270%; background-color: #efefef;">
          </form> -->
        </div>
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">
                <?= $_SESSION['userData']['f_name']." ".$_SESSION['userData']['l_name'] ?>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">
                    <i class="far fa-flag"></i>
                </a>
            </li> -->
            <li class="nav-item">
               <img src="<?= $_SESSION['userData']['picture'] ?>" alt="" style="width: 25px;margin-top: 9px;
               border-radius: 50px;
               margin-left: 8px;">
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./careers/logout.php">
                <i class="fa fa-sign-out" aria-hidden="true">Sign-out</i>
                </a>
            </li>
        </ul>
    </div>
  </div>
</nav>
<!--  -->
<div class="container jsjhr">
<div class="row skfjh">
<div class="col-md-2 sfjhe">
<div class=" sjfsj">
    <div class="img"> <img src="<?= $_SESSION['userData']['picture'] ?>" alt=""  ></div>
   
    <h5 class="text-center pt-3">
    <?= $_SESSION['userData']['f_name']." ".$_SESSION['userData']['l_name'] ?>
    </h5>
    <!-- <p class="text-muted text-center" style=" text-align: justify;
  text-justify: inter-word;" >
    <?= $_SESSION['userData']['email_id'] ?>
    </p> -->
    <p class="text-muted text-center">Welcome !</p>
    <hr>
    <a class="clor" href="../careers/logout.php"> <i class="fa fa-sign-out" aria-hidden="true">Sign-out</i></a>
    <!-- <div class="d-flex">
        <div>
            <p>
                4K Followers
            </p>
        </div>
        <div>
            <p>
                24K Following
            </p>
        </div>
    </div> -->
   <hr>
   <!-- <div class="text-center">
   <a href="" class="font-weight-bold text-decoration-none text-center">
       View My Profile
   </a>
   </div> -->
</div>
</div>
<div class="col-md-6">
    <h4>Off Campus Drive 2021 - Organized by Rats technologies </h4>

    <?php
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    // echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                                   
                                   
                                  ?>
<div class="box1">
<div class="d-flex skfjkk">
    <div class="lkt40">
        <img src="../cv/<?php echo $row["img"];?>" alt="">

    </div>
    <div class="pl-2 pt-1">
        <h6><?php echo $row["title"];?></h6>
    </div>
 
</div>
<hr>
<p class="text-muted">
<?php echo $row["description"];?>
</p>
<hr>
<div>

</div>
<div>
    
</div>
<div class="d-flex justify-content-around">
    <div>
        <form action="uploadcv.php"  method="post" enctype="multipart/form-data">
        <!-- <i class="fa fa-heart"></i> -->
        <input type="hidden" value="<?php echo $row["title"];?>" name="type">
        <button type="submit" class="btn btn-outline-success" name="upload">  <i class="fa fa-upload" aria-hidden="true"> upload</i></button>
        </form>
    </div>
    <!-- <div>
        <i class="fa fa-comment"></i>
        Comments
    </div> -->
    <div>
        <i class="fa fa-share"></i>
        <a href="whatsapp://send?text=http://ratstechnologies.com/careers" data-action="share/whatsapp/share">Share in Whatsapp</a>
    </div>
</div>
</div>

                                  <?php 
                                }
                            }
                                   ?>




</div>
<div class="col-md-4">
<div class="left_box">
<span>
    Keep in touch
</span>
<hr>
<div class="d-flex dfkj">
    <div class="lkt40">
        
    <i class="fa fa-phone" aria-hidden="true"> &nbsp +91 9900651851</i>
    </div>
    <!-- <div>
        Tayy_Eb Chaudhary
    </div> -->
</div>
<hr>
<div class="d-flex dfkj">
    <div class="lkt40">
       
        <i class="fas fa-envelope-square">&nbsp careers@ratstechnologies.com</i>
    </div>
    <!-- <div>
        Danial Ahmed
    </div> -->
</div>
<hr>
<!-- <div class="d-flex dfkj">
    <div class="lkt40">
        <img src="./Images/3.jpeg" alt="">

    </div>
    <div>
        Usman Khan
    </div>
</div> -->
<!-- <hr> -->

<!-- <div class="d-flex dfkj">
    <div class="lkt40">
        <img src="./Images/4.jpg" alt="">

    </div>
    <div>
        Waqar Ali
    </div>
</div> -->
</div>

<!-- <div class="left_box mt-3">
    <span>
        Your Profile Trafic
    </span>
    <hr>
   <img src="https://res.cloudinary.com/yaffa-publishing/image/fetch/v1456442193/http://yaffa-cdn.s3.amazonaws.com/adnews/live/images/dmImage/SourceImage/graph12_CE9EDD90-DC15-11E5-86900204D9902A1F.jpg" class="w-100" alt="">
    </div>

<div class="left_box mt-3">
<span class="font-weight-medium">
    updated News Here
</span>
<hr>
<p>
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut rem nisi natus totam veritatis nam repellat veniam, praesentium quam perspiciatis adipisci reiciendis, at qui aperiam ex sit, officia expedita beatae!
</p>
</div>
</div> -->



</div>

</div>
</div>
</body>
</html>