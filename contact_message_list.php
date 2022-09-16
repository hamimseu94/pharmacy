<?php
$title ="Contact Message";
require_once 'Dahsboar_header.php';

require_once 'Login_auth.php';

require_once 'db.php';

$contact_select_query = "SELECT * FROM contact_massages";
$contact_messages_from_db =mysqli_query ($db_connect,$contact_select_query);



?>

<div class = "container">
<div class = "container-fluid">
<div class = "row">
<div class= "col-20 m-auto">
<div class = "card mb-1"> 
<div class = "card-header bg-info">
<h1 class = text-center>Contact Message</h1>
</div>
</div>
<div class = "card-body">


<table class="table table-bordered" id="contact_message_table">
  <thead>
    <tr>
    <th scope="col">Serial NUmber</th>
      <th>status</th>
      <th scope="col">Guest Name</th>
      <th scope="col">Guest Email Address</th>
      <th scope="col">Message Time</th>
      <th scope="col">Actione</th>
    </tr>
  </thead>
  <tbody>
<?php $serial_no= 1;
foreach ($contact_messages_from_db as $message ): ?>

    <tr class="<?=($message ['status']==1) ?'bg-success':'' ?>">
    <td scope="row"><?=$serial_no++?></td>
    <td>
        <?php
        if($message ['status']==1){
            echo "Unread";
        }else{
            echo "Read";
        }
    
       ?>

    </td>
      <td><?=$message ['guest_name']?></td>
      <td><?=$message ['guest_email']?></td>
      
      <td><?php
      echo date ('d/m/Y H:i:s A',strtotime ($message ['message_send_time']));
      
      ?>
      </td>
      <td >
      <?php if($message ['status']==1):?>
          <a href="mark_as_read.php?contact_message_id=<?=$message['id']?>"class="btn btn-info btn-sm" >Mark as Read</a>
          <?php endif; ?>
      </td>
      <td><a href="message_details.php?contact_message_id=<?=$message['id']?>"class="btn btn-red btn-sm" >See Message</a></td>
    </tr>
   
<?php endforeach; ?>
<?php if ($contact_messages_from_db->num_rows==0): ?>

  <tr><td class = "text-info text-center" colspan="50">
No Data Here

  </td></tr>
<?php endif ?>
  </tbody>
</table>




</div>
</div>
</div>
</div>

</div>

<?php

require_once 'Dahsboar_footer.php';


?>