<?php 
session_start();
require_once 'db.php';
$guest_name =$_POST['guest_name'];
$guest_email = $_POST['guest_email'];
$guest_message = $_POST['guest_message'];

date_default_timezone_set('Asia/Dhaka');
$massage_send_time = date('Y-m-d H:i:s');
echo $message_send_query= "INSERT INTO `contact_massages` (`guest_name`, `guest_email`, `guest_message`, `message_send_time`) VALUES ('$guest_name', '$guest_email', '$guest_message', '$massage_send_time')";
mysqli_query($db_connect,$message_send_query);
$_SESSION['success_message']='We Recieve Your Message';
header('location: index.php#contact');
?>