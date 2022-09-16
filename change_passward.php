<?php
session_start();
require_once 'db.php';
$user_email = $_SESSION['user_email'];
$old_passward= $_POST['old_passward'];
$encrypted_passward = md5($old_passward);
$old_passward_query = "SELECT * FROM `users` WHERE email_address ='$user_email' AND passward ='$encrypted_passward'";
$from_mysqli_conncet= mysqli_query($db_connect,$old_passward_query);
if ($from_mysqli_conncet->num_rows==0){
    echo "Your Passward is wrong";
}else{
if ( $_POST['old_passward']==$_POST['new_passward']){
    echo "Your Old Passward and New Passward can,t be same";
}elseif ($_POST['new_passward']!=$_POST['confirm_passward']){
    echo "Your New passward and confirm passward can,t be same";
}else{
    $encrypted_new_passward =md5($_POST['new_passward']);
    $update_passward_query="UPDATE users SET passward='$encrypted_new_passward' WHERE email_address='$user_email'";
    mysqli_query($db_connect,$update_passward_query);
    header('location: logout.php');
}
}




?>