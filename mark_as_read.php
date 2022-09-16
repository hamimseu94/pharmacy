<?php
require_once 'db.php';
$contact_message_id =$_GET['contact_message_id'];
$update_query ="UPDATE contact_massages SET status= 2 WHERE id = $contact_message_id";
mysqli_query ($db_connect,$update_query);
header ('location:contact_message_list.php');

?>