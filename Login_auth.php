<?php 
if (!isset($_SESSION['user_name'])){
    header('location: login.php');
}
?>