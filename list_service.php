<?php 
$title ="List Service";
require_once 'Dahsboar_header.php';
require_once 'Login_auth.php';
require_once 'db.php';
$select_add_query= "SELECT * FROM services ORDER BY ID DESC";
$servcie_from_db = mysqli_query($db_connect,$select_add_query);

?>

<div class = "container">
<div class = "container-fluid">
<div class = "row">
<div class= "col-12 m-auto">
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
      
      <th scope="col">Sservices Icon</th>
      <th scope="col">Service Title</th>
      <th scope="col">Service Description</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
<?php $serial_no= 1;
foreach ($servcie_from_db as $services ): ?>

    <tr>
    <td scope="row"><?=$serial_no++?></td>
    
      <td><?=$services ['services_icon']?></td>
      <td><?=$services ['services_title']?></td>
      <td><?=$services ['services_description']?></td>
      <td>
          <a href="service_edit.php" class="btn btn-success btn-sm">Edit</a>
      </td>
      
      
    </tr>
   
<?php endforeach; ?>
<?php if ($servcie_from_db->num_rows==0): ?>

  <tr><td class = "text-info text-center" colspan="50">
No Data Here

  </td></tr>
<?php endif ?>
  </tbody>
</table>





<?php

require_once 'Dahsboar_footer.php';


?>