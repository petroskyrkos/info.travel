<?php
session_start();



if (!isset($_SESSION['userId'])) {
    include "./header_logedOut.php"; 
} else{
    include "./header_logedIn.php";
}

?>

