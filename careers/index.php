<?php
require_once 'config.php';
if(isset($_SESSION['userData'])){
	header('location: view.php');
}
$loginURL="";
$authUrl = $googleClient->createAuthUrl();
$loginURL = filter_var($authUrl, FILTER_SANITIZE_URL);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Careers at Rats Technologies </title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<!-- <header>
		<div class="head_left">
			<img src="assets/image/logo.png" height="50px"  >
		</div>
	</header> -->
	<p class="main_title">
		Login with google account<br/>
		<a href="http://ratstechnologies.com/" ><small>←Back to home page</small></a>
	</p>
	<section class="main">
		<div class="inner">
			<div class="img_p">
				<img src="../img/rats logo black.png" class="img" width="400px"> 
			</div>
			<p class="inner_p">
				Use google Account to Sign in
			</p>
			<a href="<?= htmlspecialchars( $loginURL ); ?>" style="-webkit-box-shadow: -1px 0px 17px 3px rgba(0,0,0,0.99); 
box-shadow: -1px 0px 17px 3px rgba(0,0,0,0.99);"><img src="../img/google.png" class="fbbutton" alt="Login With Google"></a>
		</div>
	</section>
	<!-- <section class="content content--related">
		<p>If you enjoyed this demo you might also like:</p>
		<a class="media-item" href="http://codecastra.com/login-with-facebook-using-php/">
			<img class="media-item__img" src="assets/related/related_fb.png">
			<h3 class="media-item__title">Login & Registration With  Facebook</h3>
		</a>
		<a class="media-item" href="http://codecastra.com/login-twitter-using-php/">
			<img class="media-item__img" src="assets/related/related_twitter.png">
			<h3 class="media-item__title">Login & Registration With  Twitter</h3>
		</a>
	</section> -->
</body>
</html>