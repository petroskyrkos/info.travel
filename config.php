<?php
require_once "google-api/vendor/autoload.php";
$gClient = new Google_Client();
$gClient->setClientId("520584859792-6tcmmuo91dnj1kd7jh1fh3fg1g1njn2c.apps.googleusercontent.com");
$gClient->setClientSecret("njkqW6Db2Tq-mkXDckHeOvOT");
$gClient->setApplicationName("Vicode Media Login");
$gClient->setRedirectUri("http://localhost/Github/info.travel/controller.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

// login URL
$login_url = $gClient->createAuthUrl();
?>