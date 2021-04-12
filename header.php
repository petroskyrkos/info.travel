<?php
session_start();



if (!isset($_SESSION['userId'])||!isset($_COOKIE['id']) ) {
    include "./header_logedOut.php"; 
} else{
    include "./header_logedIn.php";
}


?>


