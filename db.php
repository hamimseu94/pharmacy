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