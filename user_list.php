<?php
$title ="User List";
require_once 'Dahsboar_header.php';

require_once 'Login_auth.php';

require_once 'db.php';

$select_query = "SELECT * FROM users";
$user_from_db =mysqli_query ($db_connect,$select_query);


?>

<div class = "container">
<div class = "container-fluid">
<div class = "row">
<div class= "col-12 m-auto">
<div class = "card mb-3"> 
<div class = "card-header bg-info">
<h1 class = text-center>User List</h1>
</div>
</div>
<div class = "card-body">

<?php 
if (isset($_SESSION['delete_sccess_massage'])): ?>

    <div class ="alert alert-warning">
<?=$_SESSION['delete_sccess_massage']?>
    </div>
    <?php endif; ?>
    <?php 
    unset($_SESSION['delete_sccess_massage']);
    
    ?>
<table class="table table-bordered" id="user_list_table">
  <thead>
    <tr>
    <th scope="col">Serial NUmber</th>
      <th scope="col">Uniq ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email Address</th>
      <th scope="col">Age</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
<?php $serial_no= 1;
foreach ($user_from_db as $user ): ?>

    <tr>
    <td scope="row"><?=$serial_no++?></td>
      <td scope="row"><?=$user ['id']?></td>
      <td><?=$user ['full_name']?></td>
      <td><?=$user ['email_address']?></td>
      <td><?=$user ['age']?></td>
      <td>
        <?php 
        if ($user['status']== 1){
          ?>
          
          <span class = "bg-success text-white p-1">Active</span>
          <?php
        }
        else{
          ?>
          
          <span class = "bg-danger text-white p-1">DeActive</span>
          <?php 
        }  
        ?>
       
       
    </td>
      <td>
      <div class="btn-group" role="group" aria-label="Basic example">
        <?php if($user ['status']==1): ?>
      <a href= "user_deactive.php?user_id=<?=$user ['id']?>"  type="button" class=" text-white btn btn-info btn-sm">Make THis DeActive</a>
      <?php endif ?>
      <?php if($user ['status']==2): ?>
      <a href= "user_active.php?user_id=<?=$user ['id']?>"  type="button" class=" text-white btn btn-success btn-sm">Make THis Active</a>
      <?php endif ?>
      <a  href="user_delete.php?user_id=<?=$user ['id']?>" type="button" class=" text-white btn btn-danger btn-sm">Delet</a>
      
  
</div>
        


      </td>
    </tr>
   
<?php endforeach; ?>
<?php if ($user_from_db->num_rows==0): ?>

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