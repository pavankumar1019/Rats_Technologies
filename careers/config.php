<?php

session_start();
##### DB Configuration #####
$servername = "localhost";
$username = "u815129216_rats";
$password = "B4t7RsQ=";
$db = "u815129216_rats";

##### Google App Configuration #####
$googleappid = "363629763607-6vr27rhvm5tibo6maaadp2vrgoukokra.apps.googleusercontent.com"; 
$googleappsecret = "Q9olxkmS9LptnqoSouuATYDj"; 
// $redirectURL = "http://localhost:81/LoginwithGoogle/authenticate.php"; 
$redirectURL = "http://ratstechnologies.com/careers/authenticate.php"; 

##### Create connection #####
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
##### Required Library #####
include_once 'src/Google/Google_Client.php';
include_once 'src/Google/contrib/Google_Oauth2Service.php';

$googleClient = new Google_Client();
$googleClient->setApplicationName('Login to CodeCastra.com');
$googleClient->setClientId($googleappid);
$googleClient->setClientSecret($googleappsecret);
$googleClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($googleClient);

?>