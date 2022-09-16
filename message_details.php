<?php
$title ="Contact Message";
require_once 'Dahsboar_header.php';
require_once 'Login_auth.php';
require_once 'db.php';

$contact_messge_detail= $_GET['contact_message_id'];
$contact_select_query = "SELECT guest_message FROM contact_massages WHERE id= $contact_messge_detail";
$contact_messages_from_db =mysqli_query ($db_connect,$contact_select_query );
$after_assos= mysqli_fetch_assoc($contact_messages_from_db);

$update_query ="UPDATE contact_massages SET status= 2 WHERE id = $contact_messge_detail";
mysqli_query ($db_connect,$update_query);

?>

<div class = "container">
<div class = "container-fluid">
<div class = "row">
<div class= "col-12 m-auto">
<div class = "card mb-1"> 
<div class = "card-header bg-info">
<h1 class = text-center>Contact Message Deatils</h1>
</div>
</div>
<div class = "card-body">
    <h1><?=$after_assos['guest_message'] ?></h1>
</div>
</div>
</div>
</div>
</div>
<?php

require_once 'Dahsboar_footer.php';


?>