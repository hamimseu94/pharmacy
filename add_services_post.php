<?php 

require_once 'db.php';
$serviece_icon = $_POST['services_icon'];
$service_title = $_POST['services_title'];
$service_description =$_POST['services_description'];
$service_inser_query= "INSERT into services ( services_icon,services_title,services_description) values('$serviece_icon','$service_title','$service_description')";
mysqli_query($db_connect,$service_inser_query);
header('location:add_service.php');
?>