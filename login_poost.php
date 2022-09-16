
<?php
session_start ();
require_once 'db.php';
$email_address = $_POST['email_address'];
$passward = $_POST['passward'];
$encrypted_passward = md5($passward);
$user_email_passward_query ="SELECT * FROM `users` WHERE email_address = '$email_address'AND passward ='$encrypted_passward'";
$from_db_info = mysqli_query($db_connect,$user_email_passward_query);
if ($from_db_info->num_rows==1){
    $after_assoc= mysqli_fetch_assoc($from_db_info);
    $_SESSION['user_name'] = $after_assoc['full_name'];
    $_SESSION['user_email'] =$email_address;
    $_SESSION['user_status'] = $after_assoc['status'];
    if($after_assoc['status']==1){
        header('location: dahsboard.php');
    }else
    header('location: status_deactive.php');

}else {
     $_SESSION['login_err']= "Email or Passward Incorrect";
     header ('location: login.php');
}




?>