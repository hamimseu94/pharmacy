<?php 
require_once 'db.php';
$user_id = $_GET['user_id'];
$update_query = "UPDATE users SET status = 2 WHERE id = $user_id";
mysqli_query ($db_connect,$update_query);
header('location:user_list.php');
 
?>