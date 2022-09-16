<?php 

define ("HOSTNAME","localhost");
define ("USERNAME","root");
define("PASSWARD","");
define ("DB_NAME","pro");
$db_connect=mysqli_connect(HOSTNAME,USERNAME,PASSWARD,DB_NAME);

if (mysqli_connect_errno()){
    echo "your error :".mysqli_connect_errno();

    exit;

}



$capital_latter = preg_match('@[A-Z]@', $_POST['passward']);
$lower_latter = preg_match('@[a-z]@', $_POST['passward']);
$number_char = preg_match('@[0-9]@', $_POST['passward']);
//echo "Hello ".$_POST['full_name'].".your email Address is ".$_POST['email_address'];
//print_r($_POST);

if (empty($_POST['full_name'])){
    
    $name_err= "please provid your Full Name";
    header('location: Ragister.php?name_err='.$name_err);
}
elseif (empty($_POST['email_address'])){
    $email_err= "please provid your Email Address";
    $old_full_name = $_POST['full_name'];
    header('location: Ragister.php?email_err='.$email_err.'&old_ful_name='.$old_full_name);
}
elseif (!filter_var($_POST['email_address'], FILTER_VALIDATE_EMAIL)){
    $Invalid_email_err= "please provid Your  Valid Email Address";
    $old_full_name = $_POST['full_name'];
    header('location: Ragister.php?email_err='.$Invalid_email_err.'&old_ful_name='.$old_full_name);
}


elseif (empty($_POST['age'])){
    $age_err= "please provid your AGE";
    $old_full_name = $_POST['full_name'];
    $old_passward = $_POST['email_address'];
    header('location: Ragister.php?age_err='.$age_err.'&old_ful_name='.$old_full_name.'&old_pasward='.$old_passward);
}
elseif (!filter_var($_POST['age'], FILTER_VALIDATE_INT)){
    $Invalid_age_err= "please provid your Number";
    $old_full_name = $_POST['full_name'];
    $old_passward = $_POST['email_address'];
    header('location: Ragister.php?invalid_age_err='.$Invalid_age_err.'&old_ful_name='.$old_full_name.'&old_pasward='.$old_passward);
}

elseif (empty($_POST['passward'])){
    echo "please provide your passward";
}
elseif (!$capital_latter || !$lower_latter || !$number_char ){
    echo "plase provide an Upercase,lowercase,an number";
}


elseif (strlen($_POST['passward']) <= 5){
    echo "plase provide more then 5 char";
}


elseif (empty($_POST['confirm_pasword'])){
    echo "please provide your confirm_pasword";
    
}
elseif (!$capital_latter || !$lower_latter || !$number_char ){
    echo "plase provide an Upercase,lowercase,an number";
}

else {
   
    $full_name =$_POST ['full_name'];
    $email_address =$_POST ['email_address'];
    $age =$_POST ['age'];
    $passward =$_POST ['passward'];
    $user_email_query ="SELECT * FROM `users` WHERE email_address = '$email_address'";
    $from_db_info = mysqli_query($db_connect,$user_email_query);
    if ($from_db_info->num_rows ==1){
    
        echo "You Already Use ths email address";
    }
    else{
    $encrypted_passward = md5($passward);
    $user_insert_query = "INSERT INTO users (full_name,email_address,age,passward)  VALUES('$full_name','$email_address',$age, '$encrypted_passward')";
    mysqli_query($db_connect,$user_insert_query);
    $success_massage = "Your Account Is Created Successfully & You Can Login now!";
    header('location: login.php?success_massage='.$success_massage);
    
    }
    }
    
    

?>