<?php 
session_start();
require_once 'db.php';
$user_id = $_GET['user_id'];
$delete_query = "DELETE FROM `users` WHERE id=$user_id";
mysqli_query($db_connect,$delete_query);
$_SESSION ['delete_sccess_massage'] = "USer Delete Successfully";
header ('location:user_list.php');

?> 